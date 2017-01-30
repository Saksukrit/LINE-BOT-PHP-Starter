<?php
// namespace BOT;

// include('LINEBot.php');
require_once('./LINEBot.php');

// use LINE;


//test new mec

// $testmsg = new TemplateMessageBuilder\TemplateMessageBuilder();

// $test = new LINEBot\LINE();
// $test->replyMessage();

require_once('./LINEBotTiny.php');

$channelAccessToken = 'uEaFS7lHeCcF0FEBVNQtuBTVpwVzjMCSebgBPdA/XUqgxzpYg8MHySfkmKpKys/TTEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyI8/GZjv91J9Q/YN/pmATJTvlp6YOxOBypA2QFg1r6OwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '98ca0db8ed81032c7d483cef30bcb190';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);

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


      /**  Start condition BOT to response*/

            $text_ex = explode(':', $text);   //explode text by ':'


            // greeting
            if($text == "สวัสดี"){

              $messages = [
              'type' => 'text',
              'text' => 'สวัสดี Saksukrit
              ขอต้อนรับสู่ Cal.MBot ^^
              คุณสามารถสอบถามข้อมูลอาหารได้นะ'];

            }

            else if($text == "แคลอรี่ของ ข้าวมันไก่"){

              $messages = [
              'type' => 'text',
              'text' => 'ข้าวมันไก่ มีพลังงานเท่ากับ 585 กิโลแคลอรี่'];
            }

            
            //แคลอรี่ เกิน
            else if($text == "bot ตอนนี้แคลอรี่เกินกำหนดมั้ย"){

              $messagess = [
              "type"=> "template",
              "altText"=> "แคลอรี่ของคุณเกินกำหนดแล้ว
              แคลอรี่ที่ได้รับตอนนี้เท่ากับ 2450 กิโลแคลอรี่",
              "template"=> array(
                "type"=> "confirm",
                "text"=> "แคลอรี่ของคุณเกินกำหนดแล้ว
                แคลอรี่ที่ได้รับตอนนี้เท่ากับ 2450 กิโลแคลอรี่
                คุณต้องการคำแนะนำเกี่ยวกับอาหารสุขภาพ หรือวิธีการออกกำลังกายมั้ย ?",
                "actions"=> array(
                  array(
                    "type"=> "message",
                    "label"=> "ใช่",
                    "text"=> "ใช่ ฉันต้องการคำแนะนำ"
                    ),
                  array(
                    "type"=> "message",
                    "label"=> "ไม่",
                    "text"=> "ไม่ ฉันไม่ต้องการคำแนะนำ"
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



            
            //******  template  buttons *******
            else if ($text == "buttons") {
              $messagess = [
              'type' => 'template',
              'altText' => 'this is a buttons template',
              'template' => array(

                'type' => 'buttons',
                'thumbnailImageUrl' => 'https://upload.wikimedia.org/wikipedia/commons/7/74/Tarte_au_fromage_blanc.png',
                'title' => 'Do you like it?',
                'text' => 'Please select',
                'actions' => array(

                  array(
                    'type' => 'postback',
                    'label' => 'Yes ,Now I want.',
                    'data' => 'yes',
                    'text' => 'yes')
                  ,array(
                    'type' => 'postback',
                    'label' => 'No ,I not like.',
                    'data' => 'no',
                    'text' => 'no')

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


            }else if($text == "confirm"){   /**    confirm ***********/
              $messagess = [
              "type"=> "template",
              "altText"=> "this is a confirm template",
              "template"=> array(
                "type"=> "confirm",
                "text"=> "Are you sure?",
                "actions"=> array(
                  array(
                    "type"=> "message",
                    "label"=> "Yes",
                    "text"=> "yes"
                    ),
                  array(
                    "type"=> "message",
                    "label"=> "No",
                    "text"=> "no"
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

            }else if($text == "carousel"){/**    carousel ***********/

              $messagess = [
              'type' => 'template',
              'altText' => 'this is a carousel template',
              'template' => array(

                'type' => 'carousel',
                'columns' => array(
                  array(
                    'thumbnailImageUrl' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Chocolate_cupcakes.jpg',
                    'title' => 'Cup Cake',
                    'text' => 'Please select',
                    'actions' => array(

                      array(
                        'type' => 'postback',
                        'label' => 'Buy',
                        'data' => 'buy',
                        'text' => 'buy')
                      ,array(
                        'type' => 'postback',
                        'label' => 'Add to cart',
                        'data' => 'add to cart',
                        'text' => 'add')

                      )
                    )
                  ,array(
                    'thumbnailImageUrl' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Dazzling%27s_honey_toast%2C_Taipei%2C_Taiwan_%288343904503%29.jpg/640px-Dazzling%27s_honey_toast%2C_Taipei%2C_Taiwan_%288343904503%29.jpg?uselang=th',
                    'title' => 'Honey Toast',
                    'text' => 'Please select',
                    'actions' => array(

                      array(
                        'type' => 'postback',
                        'label' => 'Buy',
                        'data' => 'buy',
                        'text' => 'buy')
                      ,array(
                        'type' => 'postback',
                        'label' => 'Add to cart',
                        'data' => 'add to cart',
                        'text' => 'add')

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

              
            }else if($text == "img"){
              $messagess = [
              'type' => 'image',
              'originalContentUrl'=> 'https://new.forest.go.th/it/wp-content/uploads/sites/21/2015/06/Tulips-1024x768.jpg',
              'previewImageUrl'=> 'https://upload.wikimedia.org/wikipedia/commons/2/25/Icon-round-Question_mark.jpg'
              ];

                // LINEBotTiny
              $client->replyMessage(
                array(
                  'replyToken' => $event['replyToken'],
                  'messages' => [$messagess]
                  ));
            }

            //******  other  *******
            else {
                // Build message to reply back
              $messages = [
              'type' => 'text',
              'text' => 'ขอโทษ ฉัันไม่เข้าใจ'
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


//  https://warm-brushlands-72856.herokuapp.com/bot.php     ** for test link web
      ?>