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
            //******  template  *******
            else if ($text == "template") {
                
                $messages = [
                'type' => 'template',
                'altText' => 'this is a buttons template',
                'template' => array(
                array('type' => 'buttons',
                'thumbnailImageUrl' => 'http://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg',
                'title' => 'Menu',
                'text' => 'Please select',
                'actions' => array(
                array(
                'type' => 'postback',
                'label' => 'Buy',
                'data' => 'action=buy&itemid=123',
                ),
                array(
                'type' => 'postback',
                'label' => 'Add to cart',
                'data' => 'action=add&itemid=123',
                ),
                array(
                'type' => 'uri',
                'label' => 'View detail',
                'uri' => 'http://example.com/page/123',
                )
                )
                ))];
                
                // $messages = [
                // 'type' => 'text',
                // 'text' => $text.' tem'
                // ];
                
                // LINEBotTiny
                $client->replyMessage(
                array(
                'replyToken' => $event['replyToken'],
                'messages' => $messages
                // 'messages' => array(
                // array('type' => 'text','text' => $event['message']['text'])
                // )
                )
                );
                
                
                // try {
                //     // $actions = [];
                //     $actions = array(
                //     array(
                //     'type' => 'postback',
                //     'label' => "Buy",
                //     'data' => "action=buy&itemid=123"
                //     )
                //     ,array(
                //     'type' => 'postback',
                //     'label' => "Add to cart",
                //     'data' => "action=add&itemid=123"
                //     )
                //     );
                
                //     // $template = [];
                //     $template = array(
                //     'type' => 'buttons',
                //     'thumbnailImageUrl' => "http://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg",   //http://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg
                //     'title' => "Menu",
                //     'text' => "Please select",
                //     'actions' => $actions
                //     );
                
                
                //     $messages = [
                //     'type' => 'template',
                //     'altText' => "this is a buttons template",
                //     'template' => $template
                //     ];
                // } catch (Exception $e) {
                //     $messages = [
                //     'type' => 'text',
                //     'text' => $e->getMessage()
                //     ];
                // }
                
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