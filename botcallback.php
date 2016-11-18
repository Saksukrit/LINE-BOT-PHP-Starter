<?php
namespace frontend\controllers; 

use Yii; 
use yii\web\Response; 

class LineController extends \yii\web\Controller 
{ 
	public function beforeAction($action) 
	{ 
		if ($action->id == 'callback') 
		{ 
			$this->enableCsrfValidation = false;
		} 
		return parent::beforeAction($action); 
	} 


	public function actionCallback() 
	{ 
		$json_string = file_get_contents('php://input'); 
		$jsonObj = json_decode($json_string); 
		$to = $jsonObj->{"result"}[0]->{"content"}->{"from"};
		$text = $jsonObj->{"result"}[0]->{"content"}->{"text"}; 

		$text_ex = explode(':', $text); 

		if($text_ex[0] == "อยากรู้"){

			$ch1 = curl_init(); 
			curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false); 
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch1, CURLOPT_URL, 'https://th.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$text_ex[1]); 

			$result1 = curl_exec($ch1); 
			curl_close($ch1); $obj = json_decode($result1, true); 

			foreach($obj['query']['pages'] as $key => $val){ 
				$result_text = $val['extract']; 
			} 

			if(empty($result_text)){

				$ch1 = curl_init(); 
				curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false); 
				curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true); 
				curl_setopt($ch1, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$text_ex[1]); 
				$result1 = curl_exec($ch1); 
				curl_close($ch1); 

				$obj = json_decode($result1, true); 

				foreach($obj['query']['pages'] as $key => $val)
				{ 
					$result_text = $val['extract']; 
				} 
			} 

			if(empty($result_text))
			{
				$result_text = 'ไม่พบข้อมูล'; 
			} 
			$response_format_text = ['contentType'=>1,"toType"=>1,"text"=>$result_text]; 
		}

		else if($text_ex[0] == "อากาศ")

		{
			$ch1 = curl_init(); 
			curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false); 
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch1, CURLOPT_URL, 'http://api.wunderground.com/api/yourkey/forecast/lang:TH/q/Thailand/'.str_replace(' ', '%20', $text_ex[1]).'.json');
			$result1 = curl_exec($ch1); 
			curl_close($ch1);

			$obj = json_decode($result1, true); 

			if(isset($obj['forecast']['txt_forecast']['forecastday'][0]['fcttext_metric']))
			{ 
				$result_text = $obj['forecast']['txt_forecast']['forecastday'][0]['fcttext_metric']; 
			}else{
				$result_text = 'ไม่พบข้อมูล'; 
			} 

			$response_format_text = ['contentType'=>1,"toType"=>1,"text"=>$result_text]; 
		}else if($text == 'บอกมา'){
			$response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"ความลับนะ"]; 
		}else{
			$response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"สวัสดี"]; 
		}


		$post_data = ["to"=>[$to],"toChannel"=>"1488630201","eventType"=>"138311608800106203","content"=>$response_format_text]; 
		$ch = curl_init("https://trialbot-api.line.me/v1/events"); 
		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data)); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
			'Content-Type: application/json; charser=UTF-8',
			'X-Line-ChannelID: YOUR ChannelID',
			'X-Line-ChannelSecret: YOUR ChannelSecret',
			'X-Line-Trusted-User-With-ACL: YOUR MID' 
			)); 
		$result = curl_exec($ch); 
		curl_close($ch); 
	} 
} 

echo "OK";

?>