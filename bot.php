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

            // else if($text == "แคลอรี่ของ ข้าวมันไก่"){

            //   $messages = [
            //   'type' => 'text',
            //   'text' => 'ข้าวมันไก่ มีพลังงานเท่ากับ 585 กิโลแคลอรี่'];
            // }
            else if($text == "แคลอรี่ของ ข้าวมันไก่"){
              $messagess = [
              'type' => 'image',
              'originalContentUrl'=> 'https://new.forest.go.th/it/wp-content/uploads/sites/21/2015/06/Tulips-1024x768.jpg',
              'previewImageUrl'=> 'http://www.baania.com/sites/default/files/property-project/764/photo/59921.jpg'
              ];

                // LINEBotTiny
              $client->replyMessage(
                array(
                  'replyToken' => $event['replyToken'],
                  'messages' => [$messagess]
                  ));
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