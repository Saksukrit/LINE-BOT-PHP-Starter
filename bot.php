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

$channelAccessToken = '8RNNBRGbDOu0y/MAr0BnuajV46/YU3MVzA0rA4m4t6F1orO6PHx6b913ABPg3bR7TEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyyQ824y7XOt9GLFJOgodw9zUS5/9qgrff265ZoTF3e9QdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'b91e6eae48175204fe5811365eda9c19';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);

$access_token = '8RNNBRGbDOu0y/MAr0BnuajV46/YU3MVzA0rA4m4t6F1orO6PHx6b913ABPg3bR7TEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyyQ824y7XOt9GLFJOgodw9zUS5/9qgrff265ZoTF3e9QdB04t89/1O/w1cDnyilFU=';



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

            //เรียก bot
            else if($text == "bot"){

              $messages = [
              'type' => 'text',
              'text' => 'ฉันพร้อมแล้ว ถามอะไรดี'];

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
                    'label' => 'น้อยมาก',
                    'data' => 'อออกกำลังกายน้อยมาก',
                    'text' => 'ออกกำลังกายน้อยมาก')
                  ,array(
                    'type' => 'postback',
                    'label' => '1-3 วัน/สัปดาห์',
                    'data' => 'ออกกำลังกาย 1-3 วัน/สัปดาห์',
                    'text' => 'ออกกำลังกาย 1-3 วัน/สัปดาห์')
                  ,array(
                    'type' => 'postback',
                    'label' => '3-5 วัน/สัปดาห์',
                    'data' => 'ออกกำลังกาย 3-5 วัน/สัปดาห์',
                    'text' => 'ออกกำลังกาย 3-5 วัน/สัปดาห์')
                  ,array(
                    'type' => 'postback',
                    'label' => '6-7 วัน/สัปดาห์',
                    'data' => 'ออกกำลังกาย 6-7 วัน/สัปดาห์',
                    'text' => 'ออกกำลังกาย 6-7 วัน/สัปดาห์')
                  )
                )
              ];

              $client->replyMessage(
                array(
                  'replyToken' => $event['replyToken'],
                  'messages' => [$messagess]
                  )
                );

            }

            //แสดงค่า BMR TDEE
            else if($text == "ออกกำลังกายน้อยมาก"){

              $messages = [
              'type' => 'text',
              'text' => 'โอเค
              คุณมีค่า BMR เท่ากับ 1862 กิโลแคลอรี่
              และมีค่า TDEE เท่ากับ 2234 กิโลแคลอรี่

              *BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต
              *TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน'];
            }

            //แสดงข้อมูลรวม
            else if($text == "ต้องการดูข้อมูลทั้งหมด"){

              $messages = [
              'type' => 'text',
              'text' => 'ได้เลย
              Saksukrit
              คุณเพศ ชาย   อายุ 21 ปี
              น้ำหนัก 78 กิโลกรัม  ส่วนสูง 178 เซนติเมตร

              คุณมีค่า BMR เท่ากับ 1862 กิโลแคลอรี่
              และมีค่า TDEE เท่ากับ 2234 กิโลแคลอรี่'];
            }


            //ยืนยันข้อมูล
            else if($text == "ยืนยันข้อมูล"){

              $messagess = [
              "type"=> "template",
              "altText"=> "ยืนยันข้อมูลถูกต้อง ?",
              "template"=> array(
                "type"=> "confirm",
                "text"=> "ยืนยันข้อมูลถูกต้อง ?",
                "actions"=> array(
                  array(
                    "type"=> "message",
                    "label"=> "ตกลง",
                    "text"=> "ตกลง"
                    ),
                  array(
                    "type"=> "message",
                    "label"=> "ยกเลิก",
                    "text"=> "ยกเลิก"
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


            //confirm
            else if($text == "ตกลง"){

              $messages = [
              'type' => 'text',
              'text' => 'บันทึกข้อมูลเรียบร้อย

              เชิญใช้งานต่อไปได้เลย'];
            }

            /*------------------------------------------------------------------------------------------------*/

            //ถามแคลอรี่อาหาร
            else if($text == "อยากรู้ แคลอรี่ของ ข้าวมันไก่"){

              $messagess = [
              'type' => 'template',
              'altText' => 'ข้าวมันไก่',
              'template' => array(

                'type' => 'buttons',
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2Fchicken-rice.jpg?alt=media&token=44c90fe8-8f2b-43fb-ad4b-defac632cde1',
                'title' => 'ข้าวมันไก่',
                'text' => 'ให้พลังงานเท่ากับ 585 กิโลแคลอรี่',
                'actions' => array(

                  array(
                    'type' => 'postback',
                    'label' => 'ถามแคลอรี่อย่างอื่นอีก',
                    'data' => 'ถามแคลอรี่อย่างอื่นอีก',
                    'text' => 'ถามแคลอรี่อย่างอื่นอีก')
                  ,array(
                    'type' => 'postback',
                    'label' => 'พอแล้ว',
                    'data' => 'พอแล้ว',
                    'text' => 'พอแล้ว')

                  )
                )
              ];

              $client->replyMessage(
                array(
                  'replyToken' => $event['replyToken'],
                  'messages' => [$messagess]
                  )
                );

            }


            //ถามแคลอรี่อย่างอื่นอีก
            else if($text == "ถามแคลอรี่อย่างอื่นอีก"){

              $messages = [
              'type' => 'text',
              'text' => 'อยากรู้อาหารอะไร เชิญถาม ><'];
            }

            //ขนมปังฮาวายเอี้ยน
            else if($text == "อยากรู้ แคลอรี่ของ ขนมปังฮาวายเอี้ยน"){

              $messagess = [
              'type' => 'template',
              'altText' => 'ขนมปังฮาวายเอี้ยน',
              'template' => array(

                'type' => 'buttons',
                'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%82%E0%B8%99%E0%B8%A1%E0%B8%9B%E0%B8%B1%E0%B8%87%E0%B8%AE%E0%B8%B2%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%99.jpg?alt=media&token=c1302b45-f09e-4397-b188-5e99a41ef1a3',
                'title' => 'ขนมปังฮาวายเอี้ยน 1 ชิ้น',
                'text' => 'ให้พลังงานเท่ากับ 300 กิโลแคลอรี่',
                'actions' => array(

                  array(
                    'type' => 'postback',
                    'label' => 'ถามแคลอรี่อย่างอื่นอีก',
                    'data' => 'ถามแคลอรี่อย่างอื่นอีก',
                    'text' => 'ถามแคลอรี่อย่างอื่นอีก')
                  ,array(
                    'type' => 'postback',
                    'label' => 'พอแล้ว',
                    'data' => 'พอแล้ว',
                    'text' => 'พอแล้ว')

                  )
                )
              ];

              $client->replyMessage(
                array(
                  'replyToken' => $event['replyToken'],
                  'messages' => [$messagess]
                  )
                );

            }

            //พอแล้ว
            else if($text == "พอแล้ว"){

              $messages = [
              'type' => 'text',
              'text' => 'โอเค '];
            }

            /*------------------------------------------------------------------------------------------------*/


            //ถามจากแคลอรี่
            else if($text == "อยากรู้ อาหารหลัก ที่แคลอรี่ไม่เกิน 500 กิโลแคลอรี่"){

              $messagess = [
              'type' => 'template',
              'altText' => 'อาหารหลักให้แคลอรี่ไม่เกิน 500 กิโลแคลอรี่',
              'template' => array(

                'type' => 'carousel',
                'columns' => array(
                  array(
                    'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%8B%E0%B8%B8%E0%B8%9B%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B9%82%E0%B8%9E%E0%B8%94.jpg?alt=media&token=69640031-c7b9-4c2d-9771-441d9da2b04e',
                    'title' => 'ซุปข้าวโพด 1 ถ้วย',
                    'text' => ' 140 กิโลแคลอรี่',
                    'actions' => array(

                      array(
                        'type' => 'postback',
                        'label' => 'ข้อมูลเพิ่มเติม',
                        'data' => 'ข้อมูลเพิ่มเติม',
                        'text' => 'ข้อมูลเพิ่มเติม')

                      )
                    )
                  ,array(
                    'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%AD%E0%B8%9A%E0%B9%80%E0%B8%9C%E0%B8%B7%E0%B8%AD%E0%B8%81.jpg?alt=media&token=5a9cbf6f-e9e7-4b4b-82df-e6d4a119c178',
                    'title' => 'ข้าวอบเผือก 1 จาน',
                    'text' => ' 385 กิโลแคลอรี่',
                    'actions' => array(

                      array(
                        'type' => 'postback',
                        'label' => 'ข้อมูลเพิ่มเติม',
                        'data' => 'ข้อมูลเพิ่มเติม',
                        'text' => 'ข้อมูลเพิ่มเติม')

                      )
                    )
                  ,array(
                    'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%9A%E0%B8%B4%E0%B9%89%E0%B8%A5%E0%B8%8A%E0%B8%B5%E0%B8%AA%E0%B9%80%E0%B8%9A%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B9%80%E0%B8%81%E0%B8%AD%E0%B8%A3%E0%B9%8C.png?alt=media&token=98ec449a-b247-473b-b426-aeffe0e4323f',
                    'title' => 'ดับเบิ้ลชีสเบอร์เกอร์ 1 ชิ้น',
                    'text' => ' 350 กิโลแคลอรี่',
                    'actions' => array(

                      array(
                        'type' => 'postback',
                        'label' => 'ข้อมูลเพิ่มเติม',
                        'data' => 'ข้อมูลเพิ่มเติม',
                        'text' => 'ข้อมูลเพิ่มเติม')

                      )
                    )
                  ,array(
                    'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%9B%E0%B8%AD%E0%B9%80%E0%B8%9B%E0%B8%B5%E0%B9%8A%E0%B8%A2%E0%B8%B0%E0%B8%97%E0%B8%AD%E0%B8%94.png?alt=media&token=a2af6789-8d49-4aa4-9ed7-5f35d27514e4',
                    'title' => 'ปอเปี๊ยะทอด 2 ชิ้น',
                    'text' => ' 315 กิโลแคลอรี่',
                    'actions' => array(

                      array(
                        'type' => 'postback',
                        'label' => 'ข้อมูลเพิ่มเติม',
                        'data' => 'ข้อมูลเพิ่มเติม',
                        'text' => 'ข้อมูลเพิ่มเติม')

                      )
                    )
                  ,array(
                    'thumbnailImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/my1st-firebase.appspot.com/o/photos%2Ffood%2F%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%9C%E0%B8%B1%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B9%84%E0%B8%81%E0%B9%88.jpg?alt=media&token=9105d478-a879-4e78-a17c-93643c6542de',
                    'title' => 'ก๋วยเตี๋ยวผัดกระเพราไก่ 1 จาน',
                    'text' => ' 440 กิโลแคลอรี่',
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


            //มื้ออาหาร เช้า
else if($text == "ต้องการบันทึกอาหารมื้อเช้า"){
  $messages = [
  'type' => 'text',
  'text' => 'ได้เลย มื้อเช้าคุณทานอะไร ?'];
}


else if($text == "ข้าวขาหมู 1 จาน"){
  $messages = [
  'type' => 'text',
  'text' => 'ข้าวขาหมู 1 จาน เท่ากับ 690 กิโลแคลอรี่

  อย่างอื่นเพิ่มมั้ย ?'];
}

else if($text == "กล้วยน้ำว้า 1 ผล"){
  $messages = [
  'type' => 'text',
  'text' => 'กล้วยน้ำว้า 1 ผล เท่ากับ	60 กิโลแคลอรี่

  อย่างอื่นเพิ่มมั้ย ?'];
}


else if($text == "ไม่ล่ะ"){
  $messages = [
  'type' => 'text',
  'text' => 'โอเค สรุปรายการมื้อเช้า ของวันที่ 1/2/2560
  รายการ
  ข้าวขาหมู 1 จาน เท่ากับ 690 กิโลแคลอรี่
  กล้วยน้ำว้า 1 ผล เท่ากับ	60 กิโลแคลอรี่
  พลังงานรวม 750 กิโลแคลอรี่'];

  $messagess = [
  "type"=> "template",
  "altText"=> "สรุปรายการมื้อเช้า",
  "template"=> array(
    "type"=> "confirm",
    "text"=> "โอเค สรุปรายการมื้อเช้า ของวันที่ 1/2/2560
    รายการ
    ข้าวขาหมู 1 จาน เท่ากับ 690 กิโลแคลอรี่
    กล้วยน้ำว้า 1 ผล เท่ากับ	60 กิโลแคลอรี่
    พลังงานรวม 750 กิโลแคลอรี่

    ต้องการบันทึก หรือแก้ไข",
    "actions"=> array(
      array(
        "type"=> "message",
        "label"=> "บันทึก",
        "text"=> "บันทึก"
        ),
      array(
        "type"=> "message",
        "label"=> "แก้ไข",
        "text"=> "แก้ไข"
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

            //บันทึก
else if($text == "บันทึก"){
  $messages = [
  'type' => 'text',
  'text' => 'บันทึกข้อมูลเรียบร้อย ^^'];
}




/*------------------------------------------------------------------------------------------------*/

            //แคลอรี่ เกิน
else if($text == "bot ตอนนี้แคลอรี่เกินกำหนดมั้ย"){

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

 $messages = [
 'type' => 'text',
 'text' => 'ขอโทษ ฉัันไม่เข้าใจ'
 ];


            // LINEBotTiny
 $client->replyMessage(
  array(
    'replyToken' => $event['replyToken'],
    'messages' => [$messagess,$messages]
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
'messages' => [$messages,$messages]       // send one more
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
