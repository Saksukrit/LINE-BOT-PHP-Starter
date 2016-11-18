<?php
$access_token = 'uEaFS7lHeCcF0FEBVNQtuBTVpwVzjMCSebgBPdA/XUqgxzpYg8MHySfkmKpKys/TTEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyI8/GZjv91J9Q/YN/pmATJTvlp6YOxOBypA2QFg1r6OwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			$text_ex = explode(':', $text); 
			if($text_ex[0] == "wiki"){

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

				// Build message to reply back
				$messages = [
				'type' => 'text',
				'text' => $result_text
				];

			}else{
				// Build message to reply back
				$messages = [
				'type' => 'text',
				'text' => $text
				];
			}


			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
			'replyToken' => $replyToken,
			'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";