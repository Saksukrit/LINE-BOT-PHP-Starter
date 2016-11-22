<?php
// namespace BOT;

// include('LINEBot.php');
require_once('./LINEBot.php');

// use LINE;




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
            
            //******  wiki:  *******
            if ($text_ex[0] == "wiki") {
              
              $ch1 = curl_init();
              curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch1, CURLOPT_URL, 'https://th.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=' . $text_ex[1]);
              
              $result1 = curl_exec($ch1);
              curl_close($ch1);
              $obj = json_decode($result1, true);
              
              foreach ($obj['query']['pages'] as $key => $val) {
                $result_text = $val['extract'];
          }
          
                //if empty result by above
          if (empty($result_text)) {
                
                $ch1 = curl_init();
                curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch1, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=' . $text_ex[1]);
                $result1 = curl_exec($ch1);
                curl_close($ch1);
                
                $obj = json_decode($result1, true);
                
                foreach ($obj['query']['pages'] as $key => $val) {
                  $result_text = $val['extract'];
            }
      }
      
      if (empty($result_text)) {
          $result_text = 'ไม่พบข้อมูล';
    }
    
    
                // Build message to reply back
    $messages = [
    'type' => 'text',
    'text' => $result_text
    ];
}
            //******  template  buttons *******
else if ($text == "buttons") {
  
  $messagess = [
  'type' => 'template',
  'altText' => 'this is a buttons template',
  'template' => array(
        
        'type' => 'buttons',
        'thumbnailImageUrl' => 'https://upload.wikimedia.org/wikipedia/commons/2/25/Icon-round-Question_mark.jpg',
        'title' => 'Menu',
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
  ];
  
                // LINEBotTiny
  $client->replyMessage(
        array(
              'replyToken' => $event['replyToken'],
              'messages' => [$messagess]
              )
        );
  
  
}else if($text == "confirm"){
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
  
}else if($text == "carousel"){
  
  $messagess = [
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' => array(
        
        'type' => 'carousel',
        'columns' => array(
              array(
                    'thumbnailImageUrl' => 'https://upload.wikimedia.org/wikipedia/commons/2/25/Icon-round-Question_mark.jpg',
                    'title' => 'Menu',
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
                    'thumbnailImageUrl' => 'https://upload.wikimedia.org/wikipedia/commons/2/25/Icon-round-Question_mark.jpg',
                    'title' => 'Menu',
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


//  https://warm-brushlands-72856.herokuapp.com/bot.php     ** for test link web
?>