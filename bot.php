<?php
// namespace BOT;

// include('LINEBot.php');
require_once ('./LINEBot.php');

// use LINE;

// test new mec

// $testmsg = new TemplateMessageBuilder\TemplateMessageBuilder();

// $test = new LINEBot\LINE();
// $test->replyMessage();

require_once ('./LINEBotTiny.php');

$command = "non";

$channelAccessToken = 'uEaFS7lHeCcF0FEBVNQtuBTVpwVzjMCSebgBPdA/XUqgxzpYg8MHySfkmKpKys/TTEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyI8/GZjv91J9Q/YN/pmATJTvlp6YOxOBypA2QFg1r6OwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '98ca0db8ed81032c7d483cef30bcb190';

$client = new LINEBotTiny ( $channelAccessToken, $channelSecret );

$access_token = 'uEaFS7lHeCcF0FEBVNQtuBTVpwVzjMCSebgBPdA/XUqgxzpYg8MHySfkmKpKys/TTEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyI8/GZjv91J9Q/YN/pmATJTvlp6YOxOBypA2QFg1r6OwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents ( 'php://input' );
// Parse JSON
$events = json_decode ( $content, true );
// Validate parsed JSON data
if (! is_null ( $events ['events'] )) {
	// Loop through each event
	foreach ( $events ['events'] as $event ) {
		// Reply only when message sent is in 'text' format
		if ($event ['type'] == 'message' && $event ['message'] ['type'] == 'text') {
			// Get text sent
			$text = $event ['message'] ['text'];
			// Get replyToken
			$replyToken = $event ['replyToken'];
			
			/**
			 * Start condition BOT to response
			 */
			
			$text_ex = explode ( ':', $text ); // explode text by ':'
			                                
			// greeting
			if ($text == "à¸ªà¸§à¸±à¸ªà¸”à¸µ") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸ªà¸§à¸±à¸ªà¸”à¸µ Saksukrit
                à¸‚à¸­à¸•à¹‰à¸­à¸™à¸£à¸±à¸šà¸ªà¸¹à¹ˆ Cal.MBot ^^
                à¸„à¸¸à¸“à¸ªà¸²à¸¡à¸²à¸£à¸–à¸ªà¸­à¸šà¸–à¸²à¸¡à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸²à¸«à¸²à¸£ à¹‚à¸”à¸¢à¸¡à¸µà¸«à¸±à¸§à¸‚à¹‰à¸­à¸”à¸±à¸‡à¸™à¸µà¹‰
                
                1.à¸­à¸¢à¸²à¸�à¸—à¸£à¸²à¸šà¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸²à¸«à¸²à¸£
                2.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£
                3.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸—à¸£à¸²à¸šà¸§à¹ˆà¸²à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¹€à¸�à¸´à¸™à¸�à¸³à¸«à¸™à¸”à¸¡à¸±à¹‰à¸¢
                4.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸ªà¸­à¸šà¸–à¸²à¸¡à¹€à¸�à¸µà¹ˆà¸¢à¸§à¸�à¸±à¸šà¸�à¸²à¸£à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢
                5.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸”à¸¹à¸‚à¹‰à¸­à¸¡à¸¹à¸¥ profile
                
                *bot help : à¹€à¸›à¹‡à¸™à¸�à¸²à¸£à¸—à¸§à¸™à¸«à¸±à¸§à¸‚à¹‰à¸­à¸�à¸²à¸£à¸–à¸²à¸¡à¸‚à¹‰à¸­à¸¡à¸¹à¸¥
                ' 
				];
			} 			

			// à¹€à¸£à¸µà¸¢à¸� bot
			else if ($text == "bot") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸‰à¸±à¸™à¸žà¸£à¹‰à¸­à¸¡à¹�à¸¥à¹‰à¸§ à¸–à¸²à¸¡à¸­à¸°à¹„à¸£à¸”à¸µ' 
				];
			} 			

			// à¹€à¸£à¸µà¸¢à¸� bot help
			else if ($text == "bot help") {
				
				$messages = [ 
						'type' => 'text',
						'text' => '********* help *********

                1.à¸­à¸¢à¸²à¸�à¸—à¸£à¸²à¸šà¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸²à¸«à¸²à¸£
                2.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£
                3.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸—à¸£à¸²à¸šà¸§à¹ˆà¸²à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¹€à¸�à¸´à¸™à¸�à¸³à¸«à¸™à¸”à¸¡à¸±à¹‰à¸¢
                4.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸ªà¸­à¸šà¸–à¸²à¸¡à¹€à¸�à¸µà¹ˆà¸¢à¸§à¸�à¸±à¸šà¸�à¸²à¸£à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢
                5.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸”à¸¹à¸‚à¹‰à¸­à¸¡à¸¹à¸¥ profile
                
                bot à¸žà¸£à¹‰à¸­à¸¡à¸šà¸£à¸´à¸�à¸²à¸£à¸‚à¹‰à¸­à¸¡à¸¹à¸¥' 
				];
			} 			

			/*
			 * 1.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£
			 * 2.à¸­à¸¢à¸²à¸�à¸—à¸£à¸²à¸šà¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸²à¸«à¸²à¸£
			 * 3.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸—à¸£à¸²à¸šà¸§à¹ˆà¸²à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¹€à¸�à¸´à¸™à¸�à¸³à¸«à¸™à¸”à¸¡à¸±à¹‰à¸¢
			 * 4.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸ªà¸­à¸šà¸–à¸²à¸¡à¹€à¸�à¸µà¹ˆà¸¢à¸§à¸�à¸±à¸šà¸�à¸²à¸£à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢
			 * 5.à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸”à¸¹à¸‚à¹‰à¸­à¸¡à¸¹à¸¥ profile
			 *
			 */
			
			// à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£
			else if ($text == "à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£") {
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¹‚à¸­à¹€à¸„ à¸�à¸£à¸¸à¸“à¸²à¹€à¸¥à¸·à¸­à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£',
						'template' => array (
								
								'type' => 'buttons',
								'title' => 'à¹‚à¸­à¹€à¸„ à¸�à¸£à¸¸à¸“à¸²à¹€à¸¥à¸·à¸­à¸�à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£',
								'text' => ' ',
								'actions' => array (
										
										array (
												'type' => 'postback',
												'label' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸²',
												'data' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸²',
												'text' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸²' 
										),
										array (
												'type' => 'postback',
												'label' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸—à¸µà¹ˆà¸¢à¸‡',
												'data' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸—à¸µà¹ˆà¸¢à¸‡',
												'text' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸—à¸µà¹ˆà¸¢à¸‡' 
										),
										array (
												'type' => 'postback',
												'label' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸¢à¹‡à¸™',
												'data' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸¢à¹‡à¸™',
												'text' => 'à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸¢à¹‡à¸™' 
										) 
								) 
						) 
				];
				
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			// à¸­à¸¢à¸²à¸�à¸—à¸£à¸²à¸šà¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸²à¸«à¸²à¸£
			else if ($text == "à¸­à¸¢à¸²à¸�à¸—à¸£à¸²à¸šà¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸²à¸«à¸²à¸£") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹‚à¸­à¹€à¸„ à¸�à¸£à¸¸à¸“à¸²à¸£à¸°à¸šà¸¸à¸Šà¸·à¹ˆà¸­à¸­à¸²à¸«à¸²à¸£ (à¹€à¸Šà¹ˆà¸™ "à¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰ à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸‚à¸­à¸‡ à¸‚à¹‰à¸²à¸§à¸¡à¸±à¸™à¹„à¸�à¹ˆ")' 
				];
			} 			

			// à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸ªà¸­à¸šà¸–à¸²à¸¡à¹€à¸�à¸µà¹ˆà¸¢à¸§à¸�à¸±à¸šà¸�à¸²à¸£à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢
			else if ($text == "à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸ªà¸­à¸šà¸–à¸²à¸¡à¹€à¸�à¸µà¹ˆà¸¢à¸§à¸�à¸±à¸šà¸�à¸²à¸£à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹‚à¸­à¹€à¸„ à¸�à¸£à¸¸à¸“à¸²à¸£à¸°à¸šà¸¸à¸Šà¸·à¹ˆà¸­à¹€à¸£à¸·à¹ˆà¸­à¸‡à¸—à¸µà¹ˆà¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰ (à¹€à¸Šà¹ˆà¸™ "à¸‰à¸±à¸™à¸­à¸¢à¸²à¸�à¹„à¸”à¹‰à¸�à¸¥à¹‰à¸²à¸¡à¹�à¸‚à¸™")' 
				];
			} 			

			// à¹�à¸ªà¸”à¸‡à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸£à¸§à¸¡
			else if ($text == "à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸”à¸¹à¸‚à¹‰à¸­à¸¡à¸¹à¸¥ profile") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹„à¸”à¹‰à¹€à¸¥à¸¢
                Saksukrit
                à¸„à¸¸à¸“à¹€à¸žà¸¨ à¸Šà¸²à¸¢   à¸­à¸²à¸¢à¸¸ 21 à¸›à¸µ
                à¸™à¹‰à¸³à¸«à¸™à¸±à¸� 78 à¸�à¸´à¹‚à¸¥à¸�à¸£à¸±à¸¡  à¸ªà¹ˆà¸§à¸™à¸ªà¸¹à¸‡ 178 à¹€à¸‹à¸™à¸•à¸´à¹€à¸¡à¸•à¸£
                
<<<<<<< HEAD
            }
            
            //บันทึก
            else if($text == "บันทึก"){
                $messages = [
                'type' => 'text',
                'text' => 'บันทึกข้อมูลเรียบร้อย ^^'];
            }
            
            
            
            
            /*------------------------------------------------------------------------------------------------*/
            
            //แคลอรี่ เกิน
            else if($text == "ต้องการทราบว่าแคลอรี่เกินกำหนดมั้ย"){
                
                $messagess = [
                "type"=> "template",
                "altText"=> "แคลอรี่ของคุณเกินกำหนดแล้ว
                แคลอรี่ที่ได้รับตอนนี้เท่ากับ 2450 กิโลแคลอรี่",
                "template"=> array(
                "type"=> "confirm",
                "text"=> "แคลอรี่ของคุณเกินกำหนด(TDEE)แล้ว
                แคลอรี่ที่ได้รับตอนนี้เท่ากับ 2450 กิโลแคลอรี่
                คุณต้องการคำแนะนำเกี่ยวกับอาหารสุขภาพ หรือวิธีการออกกำลังกายมั้ย ?",
                "actions"=> array(
                array(
                "type"=> "message",
                "label"=> "ใช่",
                "text"=> "ใช่"
                ),
                array(
                "type"=> "message",
                "label"=> "ไม่",
                "text"=> "ไม่"
				
                )
                )
                )
                ];
                
                
                // LINEBotTiny
                $client->replyMessage(
                array(
                'replyToken' => $event['replyToken'],
                'messages' => [$messagess]
                )
                );
                
            }
            
            //เสนอทางเลือก
            else if($text == "ไม่"){
                $messages = [
                'type' => 'text',
                'text' => 'โอเค'];
                
                $command = "continue";
            }
            
            
            else if ($text == "ใช่") {
                $messagess = [
                'type' => 'template',
                'altText' => 'คำแนะนำ',
                'template' => array(
                
                'type' => 'buttons',
                //     'thumbnailImageUrl' => '',
                'title' => 'อาหารสุขภาพ หรือ วิธีออกกำลังกาย ?',
                'text' => 'กรุณาเลือก',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'อาหารสุขภาพ',
                'data' => 'อาหารสุขภาพ',
                'text' => 'อาหารสุขภาพ')
                ,array(
                'type' => 'postback',
                'label' => 'ออกกำลังกาย',
                'data' => 'ออกกำลังกาย',
                'text' => 'ออกกำลังกาย')
                ,array(
                'type' => 'postback',
                'label' => 'ไม่ล่ะ ขอบคุณ',
                'data' => 'ไม่ล่ะ ขอบคุณ',
                'text' => 'ไม่ล่ะ ขอบคุณ')
                
                )
                )
                ];
                
                // LINEBotTiny
                $client->replyMessage(
                array(
                'replyToken' => $event['replyToken'],
                'messages' => [$messagess]
                )
                );
                
            }
            
            
            else if($text == "ไม่ล่ะ ขอบคุณ"){
                $messages = [
                'type' => 'text',
                'text' => 'โอเค'];
            }
            
            
            //เลือกอาหารสุขภาพ
            else if($text == "อาหารสุขภาพ"){/**    carousel ***********/
                
                $messagess = [
                'type' => 'template',
                'altText' => 'อาหารสุขภาพ',
                'template' => array(
                
                'type' => 'carousel',
                'columns' => array(
                array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%AA%E0%B8%A5%E0%B8%B1%E0%B8%94%E0%B8%9C%E0%B8%A5%E0%B9%84%E0%B8%A1%E0%B9%89.jpg?alt=media&token=cc82fcfd-1c1a-4e62-8f53-b33231a6a370',
                'title' => 'ฟรุตสลัด 1 ถ้วย',
                'text' => ' 180 กิโลแคลอรี่',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                ,array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F1362072096.jpg?alt=media&token=71e3f29e-a60f-4c0e-b883-0c3bedfca04f',
                'title' => 'ยำปลากระป๋อง 1 ถ้วย',
                'text' => ' 55 กิโลแคลอรี่',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                ,array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2Fmenu_115_2105310359.jpg?alt=media&token=73090fa5-af11-4f00-afc2-65da2eda0659',
                'title' => 'แกงจืดเต้าหู้หมูสับ 1 ถ้วย',
                'text' => ' 80 กิโลแคลอรี่',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                )
                )
                ];
                
                
                // LINEBotTiny
                $client->replyMessage(
                array(
                'replyToken' => $event['replyToken'],
                'messages' => [$messagess]
                )
                );
                
            }
            
            
            // ออกกำลังกาย
            else if($text == "ออกกำลังกาย"){
                
                $messagess = [
                'type' => 'template',
                'altText' => 'วิธีออกกำลังกาย',
                'template' => array(
                
                'type' => 'carousel',
                'columns' => array(
                array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%82%E0%B8%B5%E0%B9%88%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%A3%E0%B8%A2%E0%B8%B2%E0%B8%99.jpg?alt=media&token=ee0253c8-63e1-42db-a871-88370983760b',
                'title' => 'ขี่จักรยาน ด้วยความเร็ว 14.4กม./ชม.',
                'text' => ' เป็นเวลา 1 ชั่วโมง เผาผลาญได้ 415 กิโลแคลอรี่',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                ,array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%A7%E0%B8%B4%E0%B9%88%E0%B8%87%E0%B9%80%E0%B8%AB%E0%B8%A2%E0%B8%B2%E0%B8%B0%E0%B9%86.jpg?alt=media&token=b5ae33eb-3d6d-4502-859a-c3002a38f4d0',
                'title' => 'วิ่งเหยาะๆ',
                'text' => ' เป็นเวลา 1 ชั่วโมง เผาผลาญได้ 600-750 กิโลแคลอรี่',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                ,array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99%E0%B8%AE%E0%B8%B9%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B8%AE%E0%B8%B9%E0%B8%9B.jpg?alt=media&token=42c59d18-1303-4bc7-a551-6746b6470ebb',
                'title' => 'เล่นฮูล่าฮูป',
                'text' => ' เป็นเวลา 1 ชั่วโมง เผาผลาญได้ 430 กิโลแคลอรี่',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                )
                )
                ];
                
                
                // LINEBotTiny
                $client->replyMessage(
                array(
                'replyToken' => $event['replyToken'],
                'messages' => [$messagess]
                )
                );
                
            }
            
            /*------------------------------------------------------------------------------------------------*/
            
            
            //กายภาพบำบัดสำหรับผู้ใช้ที่ป่วย
            else if($text == "ฉันป่วย อยากออกกำลังกายเบา"){
                $messages = [
                'type' => 'text',
                'text' => 'ด้วยความยินดี'
                ];
            }
            
            
            /*--------------------------*/
            
            
            
            //อยากได้กล้าม
            else if($text == "ฉันอยากได้กล้ามแขน"){
                
                $messagess = [
                'type' => 'template',
                'altText' => 'วิธีออกกำลังกายกล้ามแขน',
                'template' => array(
                
                'type' => 'carousel',
                'columns' => array(
                array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2FBarbell%20Curls.png?alt=media&token=69b326c9-412a-44b7-87f4-c6672dca5bb1',
                'title' => 'Barbell Curls',
                'text' => ' ท่าบริหารหน้าแขน หรือ ต้นแขน (Biceps) ',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                ,array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2FDips.jpg?alt=media&token=fb54b58b-4c62-4c4a-bdcd-58e55a9c95e0',
                'title' => 'Dips',
                'text' => ' ท่าบริหารหลังแขนหรือท้องแขน (Triceps) ',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                ,array(
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2FFinger%20Curls.jpg?alt=media&token=b44f97fa-2689-4f9c-989c-8ce9fa9c602c',
                'title' => 'Finger Curls',
                'text' => ' ท่าบริหารปลายแขนหรือท่อนแขน (Forearm)',
                'actions' => array(
                
                array(
                'type' => 'postback',
                'label' => 'ข้อมูลเพิ่มเติม',
                'data' => 'ข้อมูลเพิ่มเติม',
                'text' => 'ข้อมูลเพิ่มเติม')
                
                )
                )
                )
                )
                ];
                
                
                // LINEBotTiny
                $client->replyMessage(
                array(
                'replyToken' => $event['replyToken'],
                'messages' => [$messagess]
                )
                );
            }
            
            /*------------------------------------------------------------------------------------------------*/
            
            
            else if($text == "ขอบคุณ"){
                $messages = [
                'type' => 'text',
                'text' => 'ด้วยความยินดี'
                ];
            }
            
            
            //******  other  *******
            else {
                $messages = [
                'type' => 'text',
                'text' => 'ขอโทษ ฉัันไม่เข้าใจ'
                ];
            }
            
            /*-------------------------------------------  Make a POST  -----------------------------------------*/
            
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
=======
                à¸„à¸¸à¸“à¸¡à¸µà¸„à¹ˆà¸² BMR à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 1862 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
                à¹�à¸¥à¸°à¸¡à¸µà¸„à¹ˆà¸² TDEE à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 2234 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ' 
				];
			} 			
>>>>>>> 02b1fda43759509b90ad4b58780c20df550851e5

			/* ------------------------------------------------------------------------------------------------ */
			
			// à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸²à¸«à¸²à¸£
			else if ($text == "à¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰ à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸‚à¸­à¸‡ à¸‚à¹‰à¸²à¸§à¸¡à¸±à¸™à¹„à¸�à¹ˆ") {
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸‚à¹‰à¸²à¸§à¸¡à¸±à¸™à¹„à¸�à¹ˆ',
						'template' => array (
								
								'type' => 'buttons',
								'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2Fchicken-rice.jpg?alt=media&token=44c90fe8-8f2b-43fb-ad4b-defac632cde1',
								'title' => 'à¸‚à¹‰à¸²à¸§à¸¡à¸±à¸™à¹„à¸�à¹ˆ',
								'text' => 'à¹ƒà¸«à¹‰à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 585 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
								'actions' => array (
										
										array (
												'type' => 'postback',
												'label' => 'à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�',
												'data' => 'à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�',
												'text' => 'à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�' 
										),
										array (
												'type' => 'postback',
												'label' => 'à¸žà¸­à¹�à¸¥à¹‰à¸§',
												'data' => 'à¸žà¸­à¹�à¸¥à¹‰à¸§',
												'text' => 'à¸žà¸­à¹�à¸¥à¹‰à¸§' 
										) 
								)
								 
						) 
				];
				
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			// à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�
			else if ($text == "à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰à¸­à¸²à¸«à¸²à¸£à¸­à¸°à¹„à¸£ à¹€à¸Šà¸´à¸�à¸–à¸²à¸¡ >< ("à¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰ à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸‚à¸­à¸‡ à¸‚à¸™à¸¡à¸›à¸±à¸‡à¸®à¸²à¸§à¸²à¸¢à¹€à¸­à¸µà¹‰à¸¢à¸™")' 
				];
			} 			

			// à¸‚à¸™à¸¡à¸›à¸±à¸‡à¸®à¸²à¸§à¸²à¸¢à¹€à¸­à¸µà¹‰à¸¢à¸™
			else if ($text == "à¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰ à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸‚à¸­à¸‡ à¸‚à¸™à¸¡à¸›à¸±à¸‡à¸®à¸²à¸§à¸²à¸¢à¹€à¸­à¸µà¹‰à¸¢à¸™") {
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸‚à¸™à¸¡à¸›à¸±à¸‡à¸®à¸²à¸§à¸²à¸¢à¹€à¸­à¸µà¹‰à¸¢à¸™',
						'template' => array (
								
								'type' => 'buttons',
								'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%82%E0%B8%99%E0%B8%A1%E0%B8%9B%E0%B8%B1%E0%B8%87%E0%B8%AE%E0%B8%B2%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%99.jpg?alt=media&token=c1302b45-f09e-4397-b188-5e99a41ef1a3',
								'title' => 'à¸‚à¸™à¸¡à¸›à¸±à¸‡à¸®à¸²à¸§à¸²à¸¢à¹€à¸­à¸µà¹‰à¸¢à¸™ 1 à¸Šà¸´à¹‰à¸™',
								'text' => 'à¹ƒà¸«à¹‰à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 300 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
								'actions' => array (
										
										array (
												'type' => 'postback',
												'label' => 'à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�',
												'data' => 'à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�',
												'text' => 'à¸–à¸²à¸¡à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¸­à¸µà¸�' 
										),
										array (
												'type' => 'postback',
												'label' => 'à¸žà¸­à¹�à¸¥à¹‰à¸§',
												'data' => 'à¸žà¸­à¹�à¸¥à¹‰à¸§',
												'text' => 'à¸žà¸­à¹�à¸¥à¹‰à¸§' 
										) 
								)
								 
						) 
				];
				
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			// à¸žà¸­à¹�à¸¥à¹‰à¸§
			else if ($text == "à¸žà¸­à¹�à¸¥à¹‰à¸§") {
				
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹‚à¸­à¹€à¸„ ' 
				];
			} 			

			/* ------------------------------------------------------------------------------------------------ */
			
			// à¸–à¸²à¸¡à¸ˆà¸²à¸�à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
			else if ($text == "à¸­à¸¢à¸²à¸�à¸£à¸¹à¹‰ à¸­à¸²à¸«à¸²à¸£à¸«à¸¥à¸±à¸� à¸—à¸µà¹ˆà¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¹„à¸¡à¹ˆà¹€à¸�à¸´à¸™ 500 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ") {
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸­à¸²à¸«à¸²à¸£à¸«à¸¥à¸±à¸�à¹ƒà¸«à¹‰à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¹„à¸¡à¹ˆà¹€à¸�à¸´à¸™ 500 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
						'template' => array (
								
								'type' => 'carousel',
								'columns' => array (
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%8B%E0%B8%B8%E0%B8%9B%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B9%82%E0%B8%9E%E0%B8%94.jpg?alt=media&token=69640031-c7b9-4c2d-9771-441d9da2b04e',
												'title' => 'à¸‹à¸¸à¸›à¸‚à¹‰à¸²à¸§à¹‚à¸žà¸” 1 à¸–à¹‰à¸§à¸¢',
												'text' => ' 140 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%AD%E0%B8%9A%E0%B9%80%E0%B8%9C%E0%B8%B7%E0%B8%AD%E0%B8%81.jpg?alt=media&token=5a9cbf6f-e9e7-4b4b-82df-e6d4a119c178',
												'title' => 'à¸‚à¹‰à¸²à¸§à¸­à¸šà¹€à¸œà¸·à¸­à¸� 1 à¸ˆà¸²à¸™',
												'text' => ' 385 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%9A%E0%B8%B4%E0%B9%89%E0%B8%A5%E0%B8%8A%E0%B8%B5%E0%B8%AA%E0%B9%80%E0%B8%9A%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B9%80%E0%B8%81%E0%B8%AD%E0%B8%A3%E0%B9%8C.png?alt=media&token=98ec449a-b247-473b-b426-aeffe0e4323f',
												'title' => 'à¸”à¸±à¸šà¹€à¸šà¸´à¹‰à¸¥à¸Šà¸µà¸ªà¹€à¸šà¸­à¸£à¹Œà¹€à¸�à¸­à¸£à¹Œ 1 à¸Šà¸´à¹‰à¸™',
												'text' => ' 350 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%9B%E0%B8%AD%E0%B9%80%E0%B8%9B%E0%B8%B5%E0%B9%8A%E0%B8%A2%E0%B8%B0%E0%B8%97%E0%B8%AD%E0%B8%94.png?alt=media&token=a2af6789-8d49-4aa4-9ed7-5f35d27514e4',
												'title' => 'à¸›à¸­à¹€à¸›à¸µà¹Šà¸¢à¸°à¸—à¸­à¸” 2 à¸Šà¸´à¹‰à¸™',
												'text' => ' 315 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%9C%E0%B8%B1%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B9%84%E0%B8%81%E0%B9%88.jpg?alt=media&token=9105d478-a879-4e78-a17c-93643c6542de',
												'title' => 'à¸�à¹‹à¸§à¸¢à¹€à¸•à¸µà¹‹à¸¢à¸§à¸œà¸±à¸”à¸�à¸£à¸°à¹€à¸žà¸£à¸²à¹„à¸�à¹ˆ 1 à¸ˆà¸²à¸™',
												'text' => ' 440 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										) 
								) 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			/* ------------------------------------------------------------------------------------------------ */
			
			// à¸¡à¸·à¹‰à¸­à¸­à¸²à¸«à¸²à¸£ à¹€à¸Šà¹‰à¸²
			else if ($text == "à¸­à¸²à¸«à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸²") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹„à¸”à¹‰à¹€à¸¥à¸¢ à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸²à¸„à¸¸à¸“à¸—à¸²à¸™à¸­à¸°à¹„à¸£ ? (à¹€à¸Šà¹ˆà¸™ "à¸‚à¹‰à¸²à¸§à¸‚à¸²à¸«à¸¡à¸¹ 1 à¸ˆà¸²à¸™")' 
				];
			} 

			else if ($text == "à¸‚à¹‰à¸²à¸§à¸‚à¸²à¸«à¸¡à¸¹ 1 à¸ˆà¸²à¸™") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸‚à¹‰à¸²à¸§à¸‚à¸²à¸«à¸¡à¸¹ 1 à¸ˆà¸²à¸™ à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 690 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ"
                
                à¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¹€à¸žà¸´à¹ˆà¸¡à¸¡à¸±à¹‰à¸¢ ? (à¹€à¸Šà¹ˆà¸™ "à¹€à¸žà¸´à¹ˆà¸¡à¸­à¸µà¸�" à¸«à¸£à¸·à¸­ "à¹„à¸¡à¹ˆà¹€à¸žà¸´à¹ˆà¸¡à¹�à¸¥à¹‰à¸§")' 
				];
			} 

			else if ($text == "à¹€à¸žà¸´à¹ˆà¸¡à¸­à¸µà¸�") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹‚à¸­à¹€à¸„ à¸„à¸¸à¸“à¸—à¸²à¸™à¸­à¸°à¹„à¸£à¹€à¸žà¸´à¹ˆà¸¡à¸­à¸µà¸� ? (à¹€à¸Šà¹ˆà¸™ "à¸�à¸¥à¹‰à¸§à¸¢à¸™à¹‰à¸³à¸§à¹‰à¸² 1 à¸œà¸¥")' 
				];
			} 

			else if ($text == "à¸�à¸¥à¹‰à¸§à¸¢à¸™à¹‰à¸³à¸§à¹‰à¸² 1 à¸œà¸¥") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸�à¸¥à¹‰à¸§à¸¢à¸™à¹‰à¸³à¸§à¹‰à¸² 1 à¸œà¸¥ à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š	60 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
                
                à¸­à¸¢à¹ˆà¸²à¸‡à¸­à¸·à¹ˆà¸™à¹€à¸žà¸´à¹ˆà¸¡à¸¡à¸±à¹‰à¸¢ ? (à¹€à¸Šà¹ˆà¸™ "à¹€à¸žà¸´à¹ˆà¸¡à¸­à¸µà¸�" à¸«à¸£à¸·à¸­ "à¹„à¸¡à¹ˆà¹€à¸žà¸´à¹ˆà¸¡à¹�à¸¥à¹‰à¸§")' 
				];
			} 

			else if ($text == "à¹„à¸¡à¹ˆà¹€à¸žà¸´à¹ˆà¸¡à¹�à¸¥à¹‰à¸§") {
				// à¸£à¸²à¸¢à¸�à¸²à¸£
				// à¸‚à¹‰à¸²à¸§à¸‚à¸²à¸«à¸¡à¸¹ 1 à¸ˆà¸²à¸™ à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 690 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
				// à¸�à¸¥à¹‰à¸§à¸¢à¸™à¹‰à¸³à¸§à¹‰à¸² 1 à¸œà¸¥ à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 60 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
				
				$messagess = [ 
						"type" => "template",
						"altText" => "à¸ªà¸£à¸¸à¸›à¸£à¸²à¸¢à¸�à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸²",
						"template" => array (
								"type" => "confirm",
								"text" => "à¹‚à¸­à¹€à¸„ à¸ªà¸£à¸¸à¸›à¸£à¸²à¸¢à¸�à¸²à¸£à¸¡à¸·à¹‰à¸­à¹€à¸Šà¹‰à¸² à¸‚à¸­à¸‡à¸§à¸±à¸™à¸—à¸µà¹ˆ 1/2/2560
               
                à¸žà¸¥à¸±à¸‡à¸‡à¸²à¸™à¸£à¸§à¸¡ 750 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
                
                à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸� à¸«à¸£à¸·à¸­à¹�à¸�à¹‰à¹„à¸‚",
								"actions" => array (
										array (
												"type" => "message",
												"label" => "à¸šà¸±à¸™à¸—à¸¶à¸�",
												"text" => "à¸šà¸±à¸™à¸—à¸¶à¸�" 
										),
										array (
												"type" => "message",
												"label" => "à¹�à¸�à¹‰à¹„à¸‚",
												"text" => "à¹�à¸�à¹‰à¹„à¸‚" 
										) 
								) 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			// à¸šà¸±à¸™à¸—à¸¶à¸�
			else if ($text == "à¸šà¸±à¸™à¸—à¸¶à¸�") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸šà¸±à¸™à¸—à¸¶à¸�à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸£à¸µà¸¢à¸šà¸£à¹‰à¸­à¸¢ ^^' 
				];
			} 			

			/* ------------------------------------------------------------------------------------------------ */
			
			// à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ à¹€à¸�à¸´à¸™
			else if ($text == "à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸—à¸£à¸²à¸šà¸§à¹ˆà¸²à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¹€à¸�à¸´à¸™à¸�à¸³à¸«à¸™à¸”à¸¡à¸±à¹‰à¸¢") {
				
				$messagess = [ 
						"type" => "template",
						"altText" => "à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸‚à¸­à¸‡à¸„à¸¸à¸“à¹€à¸�à¸´à¸™à¸�à¸³à¸«à¸™à¸”à¹�à¸¥à¹‰à¸§
                à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸—à¸µà¹ˆà¹„à¸”à¹‰à¸£à¸±à¸šà¸•à¸­à¸™à¸™à¸µà¹‰à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 2450 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ",
						"template" => array (
								"type" => "confirm",
								"text" => "à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸‚à¸­à¸‡à¸„à¸¸à¸“à¹€à¸�à¸´à¸™à¸�à¸³à¸«à¸™à¸”(TDEE)à¹�à¸¥à¹‰à¸§
                à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆà¸—à¸µà¹ˆà¹„à¸”à¹‰à¸£à¸±à¸šà¸•à¸­à¸™à¸™à¸µà¹‰à¹€à¸—à¹ˆà¸²à¸�à¸±à¸š 2450 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ
                à¸„à¸¸à¸“à¸•à¹‰à¸­à¸‡à¸�à¸²à¸£à¸„à¸³à¹�à¸™à¸°à¸™à¸³à¹€à¸�à¸µà¹ˆà¸¢à¸§à¸�à¸±à¸šà¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž à¸«à¸£à¸·à¸­à¸§à¸´à¸˜à¸µà¸�à¸²à¸£à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢à¸¡à¸±à¹‰à¸¢ ?",
								"actions" => array (
										array (
												"type" => "message",
												"label" => "à¹ƒà¸Šà¹ˆ",
												"text" => "à¹ƒà¸Šà¹ˆ" 
										),
										array (
												"type" => "message",
												"label" => "à¹„à¸¡à¹ˆ",
												"text" => "à¹„à¸¡à¹ˆ" 
										) 
								) 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			// à¹€à¸ªà¸™à¸­à¸—à¸²à¸‡à¹€à¸¥à¸·à¸­à¸�
			else if ($text == "à¹„à¸¡à¹ˆ") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹‚à¸­à¹€à¸„' 
				];
				
				$command = "continue";
			} 

			else if ($text == "à¹ƒà¸Šà¹ˆ") {
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸„à¸³à¹�à¸™à¸°à¸™à¸³',
						'template' => array (
								
								'type' => 'buttons',
								// 'thumbnailImageUrl' => '',
								'title' => 'à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž à¸«à¸£à¸·à¸­ à¸§à¸´à¸˜à¸µà¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢ ?',
								'text' => 'à¸�à¸£à¸¸à¸“à¸²à¹€à¸¥à¸·à¸­à¸�',
								'actions' => array (
										
										array (
												'type' => 'postback',
												'label' => 'à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž',
												'data' => 'à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž',
												'text' => 'à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž' 
										),
										array (
												'type' => 'postback',
												'label' => 'à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢',
												'data' => 'à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢',
												'text' => 'à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢' 
										),
										array (
												'type' => 'postback',
												'label' => 'à¹„à¸¡à¹ˆà¸¥à¹ˆà¸° à¸‚à¸­à¸šà¸„à¸¸à¸“',
												'data' => 'à¹„à¸¡à¹ˆà¸¥à¹ˆà¸° à¸‚à¸­à¸šà¸„à¸¸à¸“',
												'text' => 'à¹„à¸¡à¹ˆà¸¥à¹ˆà¸° à¸‚à¸­à¸šà¸„à¸¸à¸“' 
										) 
								)
								 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 

			else if ($text == "à¹„à¸¡à¹ˆà¸¥à¹ˆà¸° à¸‚à¸­à¸šà¸„à¸¸à¸“") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¹‚à¸­à¹€à¸„' 
				];
			} 			

			// à¹€à¸¥à¸·à¸­à¸�à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž
			else if ($text == "à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž") {
				/**
				 * carousel **********
				 */
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸­à¸²à¸«à¸²à¸£à¸ªà¸¸à¸‚à¸ à¸²à¸ž',
						'template' => array (
								
								'type' => 'carousel',
								'columns' => array (
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%AA%E0%B8%A5%E0%B8%B1%E0%B8%94%E0%B8%9C%E0%B8%A5%E0%B9%84%E0%B8%A1%E0%B9%89.jpg?alt=media&token=cc82fcfd-1c1a-4e62-8f53-b33231a6a370',
												'title' => 'à¸Ÿà¸£à¸¸à¸•à¸ªà¸¥à¸±à¸” 1 à¸–à¹‰à¸§à¸¢',
												'text' => ' 180 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F1362072096.jpg?alt=media&token=71e3f29e-a60f-4c0e-b883-0c3bedfca04f',
												'title' => 'à¸¢à¸³à¸›à¸¥à¸²à¸�à¸£à¸°à¸›à¹‹à¸­à¸‡ 1 à¸–à¹‰à¸§à¸¢',
												'text' => ' 55 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2Fmenu_115_2105310359.jpg?alt=media&token=73090fa5-af11-4f00-afc2-65da2eda0659',
												'title' => 'à¹�à¸�à¸‡à¸ˆà¸·à¸”à¹€à¸•à¹‰à¸²à¸«à¸¹à¹‰à¸«à¸¡à¸¹à¸ªà¸±à¸š 1 à¸–à¹‰à¸§à¸¢',
												'text' => ' 80 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										) 
								) 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			// à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢
			else if ($text == "à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢") {
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸§à¸´à¸˜à¸µà¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢',
						'template' => array (
								
								'type' => 'carousel',
								'columns' => array (
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%82%E0%B8%B5%E0%B9%88%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%A3%E0%B8%A2%E0%B8%B2%E0%B8%99.jpg?alt=media&token=ee0253c8-63e1-42db-a871-88370983760b',
												'title' => 'à¸‚à¸µà¹ˆà¸ˆà¸±à¸�à¸£à¸¢à¸²à¸™ à¸”à¹‰à¸§à¸¢à¸„à¸§à¸²à¸¡à¹€à¸£à¹‡à¸§ 14.4à¸�à¸¡./à¸Šà¸¡.',
												'text' => ' à¹€à¸›à¹‡à¸™à¹€à¸§à¸¥à¸² 1 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡ à¹€à¸œà¸²à¸œà¸¥à¸²à¸�à¹„à¸”à¹‰ 415 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%A7%E0%B8%B4%E0%B9%88%E0%B8%87%E0%B9%80%E0%B8%AB%E0%B8%A2%E0%B8%B2%E0%B8%B0%E0%B9%86.jpg?alt=media&token=b5ae33eb-3d6d-4502-859a-c3002a38f4d0',
												'title' => 'à¸§à¸´à¹ˆà¸‡à¹€à¸«à¸¢à¸²à¸°à¹†',
												'text' => ' à¹€à¸›à¹‡à¸™à¹€à¸§à¸¥à¸² 1 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡ à¹€à¸œà¸²à¸œà¸¥à¸²à¸�à¹„à¸”à¹‰ 600-750 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99%E0%B8%AE%E0%B8%B9%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B8%AE%E0%B8%B9%E0%B8%9B.jpg?alt=media&token=42c59d18-1303-4bc7-a551-6746b6470ebb',
												'title' => 'à¹€à¸¥à¹ˆà¸™à¸®à¸¹à¸¥à¹ˆà¸²à¸®à¸¹à¸›',
												'text' => ' à¹€à¸›à¹‡à¸™à¹€à¸§à¸¥à¸² 1 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡ à¹€à¸œà¸²à¸œà¸¥à¸²à¸�à¹„à¸”à¹‰ 430 à¸�à¸´à¹‚à¸¥à¹�à¸„à¸¥à¸­à¸£à¸µà¹ˆ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										) 
								) 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			/* ------------------------------------------------------------------------------------------------ */
			
			// à¸�à¸²à¸¢à¸ à¸²à¸žà¸šà¸³à¸šà¸±à¸”à¸ªà¸³à¸«à¸£à¸±à¸šà¸œà¸¹à¹‰à¹ƒà¸Šà¹‰à¸—à¸µà¹ˆà¸›à¹ˆà¸§à¸¢
			else if ($text == "à¸‰à¸±à¸™à¸›à¹ˆà¸§à¸¢ à¸­à¸¢à¸²à¸�à¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢à¹€à¸šà¸²") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸”à¹‰à¸§à¸¢à¸„à¸§à¸²à¸¡à¸¢à¸´à¸™à¸”à¸µ' 
				];
			} 			

			/* -------------------------- */
			
			// à¸­à¸¢à¸²à¸�à¹„à¸”à¹‰à¸�à¸¥à¹‰à¸²à¸¡
			else if ($text == "à¸‰à¸±à¸™à¸­à¸¢à¸²à¸�à¹„à¸”à¹‰à¸�à¸¥à¹‰à¸²à¸¡à¹�à¸‚à¸™") {
				
				$messagess = [ 
						'type' => 'template',
						'altText' => 'à¸§à¸´à¸˜à¸µà¸­à¸­à¸�à¸�à¸³à¸¥à¸±à¸‡à¸�à¸²à¸¢à¸�à¸¥à¹‰à¸²à¸¡à¹�à¸‚à¸™',
						'template' => array (
								
								'type' => 'carousel',
								'columns' => array (
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2FBarbell%20Curls.png?alt=media&token=69b326c9-412a-44b7-87f4-c6672dca5bb1',
												'title' => 'Barbell Curls',
												'text' => ' à¸—à¹ˆà¸²à¸šà¸£à¸´à¸«à¸²à¸£à¸«à¸™à¹‰à¸²à¹�à¸‚à¸™ à¸«à¸£à¸·à¸­ à¸•à¹‰à¸™à¹�à¸‚à¸™ (Biceps) ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2FDips.jpg?alt=media&token=fb54b58b-4c62-4c4a-bdcd-58e55a9c95e0',
												'title' => 'Dips',
												'text' => ' à¸—à¹ˆà¸²à¸šà¸£à¸´à¸«à¸²à¸£à¸«à¸¥à¸±à¸‡à¹�à¸‚à¸™à¸«à¸£à¸·à¸­à¸—à¹‰à¸­à¸‡à¹�à¸‚à¸™ (Triceps) ',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										),
										array (
												'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2FFinger%20Curls.jpg?alt=media&token=b44f97fa-2689-4f9c-989c-8ce9fa9c602c',
												'title' => 'Finger Curls',
												'text' => ' à¸—à¹ˆà¸²à¸šà¸£à¸´à¸«à¸²à¸£à¸›à¸¥à¸²à¸¢à¹�à¸‚à¸™à¸«à¸£à¸·à¸­à¸—à¹ˆà¸­à¸™à¹�à¸‚à¸™ (Forearm)',
												'actions' => array (
														
														array (
																'type' => 'postback',
																'label' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'data' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡',
																'text' => 'à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸žà¸´à¹ˆà¸¡à¹€à¸•à¸´à¸¡' 
														) 
												)
												 
										) 
								) 
						) 
				];
				
				// LINEBotTiny
				$client->replyMessage ( array (
						'replyToken' => $event ['replyToken'],
						'messages' => [ 
								$messagess 
						] 
				) );
			} 			

			/* ------------------------------------------------------------------------------------------------ */
			
			else if ($text == "à¸‚à¸­à¸šà¸„à¸¸à¸“") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸”à¹‰à¸§à¸¢à¸„à¸§à¸²à¸¡à¸¢à¸´à¸™à¸”à¸µ' 
				];
			} 			

			// bye bot
			else if ($text == "bye bot") {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸¢à¸´à¸™à¸”à¸µà¹ƒà¸«à¹‰à¸„à¸³à¸›à¸£à¸¶à¸�à¸©à¸², bye Saksukrit' 
				];
			} 			

			// ****** other *******
			else {
				$messages = [ 
						'type' => 'text',
						'text' => 'à¸‚à¸­à¹‚à¸—à¸© à¸‰à¸±à¸±à¸™à¹„à¸¡à¹ˆà¹€à¸‚à¹‰à¸²à¹ƒà¸ˆ' 
				];
			}
			
			/* ------------------------------------------- Make a POST ----------------------------------------- */
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [ 
					'replyToken' => $replyToken,
					'messages' => [ 
							$messages 
					] 
			];
			$post = json_encode ( $data );
			$headers = array (
					'Content-Type: application/json',
					'Authorization: Bearer ' . $access_token 
			);
			
			$ch = curl_init ( $url );
			curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post );
			curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
			curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION, 1 );
			$result = curl_exec ( $ch );
			curl_close ( $ch );
			
			echo $result . "\r\n";
		}
	}
}

echo "OK";

// https://warm-brushlands-72856.herokuapp.com/bot.php ** for test link web
?>