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

$command = "non";

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
              คุณสามารถสอบถามข้อมูลอาหารได้นะ
              แต่ก่อนอื่น กรุณาให้ข้อมูลพื้นฐาน'];

            }

            // ข้อมูลผู้ใช้
            else if($text == "ข้อมูลอะไรบ้าง"){

              $messagess = [
              "type"=> "template",
              "altText"=> "คุณเพศอะไร ?",
              "template"=> array(
                "type"=> "confirm",
                "text"=> "คุณเพศอะไร ?",
                "actions"=> array(
                  array(
                    "type"=> "message",
                    "label"=> "ชาย",
                    "text"=> "ชาย"
                    ),
                  array(
                    "type"=> "message",
                    "label"=> "หญิง",
                    "text"=> "หญิง"
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

            // ต่อจากเพศ 
            else if($text == "ชาย"){

              $messages = [
              'type' => 'text',
              'text' => 'คุณอายุเท่าไหร่ ? '];
            }

            //ต่อจากอายุ
            else if($text == "21"){

              $messages = [
              'type' => 'text',
              'text' => 'คุณน้ำหนักเท่าไหร่ ? (หน่วยเป็นกิโลกรัม)'];
            }

            //ต่อจากน้ำหนัก
            else if($text == "78"){

              $messages = [
              'type' => 'text',
              'text' => 'คุณสูงเท่าไหร่ ? (หน่วยเป็นเซนติเมตร)'];
            }

            //ต่อจากส่วนสูง
            else if($text == "174"){

              $messagess = [
              'type' => 'template',
              'altText' => 'คุณออกกำลังกายมากน้อยแค่ไหน',
              'template' => array(

                'type' => 'buttons',
                'title' => 'คุณออกกำลังกายมากน้อยแค่ไหน ?',
                'text' => 'กรุณาเลือก',
                'actions' => array(

                  array(
                    'type' => 'postback',
                    'label' => 'ออกกำลังกายน้อยมาก',
                    'data' => 'อออกกำลังกายน้อยมาก',
                    'text' => 'ออกกำลังกายน้อยมาก')
                  ,array(
                    'type' => 'postback',
                    'label' => 'ออกกำลังกาย 1-3 วัน/สัปดาห์',
                    'data' => 'ออกกำลังกาย 1-3 วัน/สัปดาห์',
                    'text' => 'ออกกำลังกาย 1-3 วัน/สัปดาห์')
                  ,array(
                    'type' => 'postback',
                    'label' => 'ออกกำลังกาย 3-5 วัน/สัปดาห์',
                    'data' => 'ออกกำลังกาย 3-5 วัน/สัปดาห์',
                    'text' => 'ออกกำลังกาย 3-5 วัน/สัปดาห์')
                  ,array(
                    'type' => 'postback',
                    'label' => 'ออกกำลังกาย 6-7 วัน/สัปดาห์',
                    'data' => 'ออกกำลังกาย 6-7 วัน/สัปดาห์',
                    'text' => 'ออกกำลังกาย 6-7 วัน/สัปดาห์')
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

            //แสดงค่า BMR TDEE
            else if($text == "ไม่ออกกำลังกาย หรือออกกำลังกายน้อยมาก"){

              $messages = [
              'type' => 'text',
              'text' => 'โอเค 
              คุณมีค่า BMR เท่ากับ 1862 กิโลแคลอรี่
              และมีค่า TDEE เท่ากับ 2234 กิโลแคลอรี่
              
              *BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต
              *TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน'];
            }




            else if($text == "อยากรู้ แคลอรี่ของ ข้าวมันไก่"){

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

            }
            
            else if($text == "img"){
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