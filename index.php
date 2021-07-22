<?php 
/**
 *Author: Tilon
 *
 *Telegram : @TILON
 */
$API_KEY = '1341600706:AAGWsK4E2Id5nlUHG7idIKkqN-8xL2eRW3M';
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 
 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }

 if(!is_dir("s")){
 	mkdir("s");
 }
 //====================ᵗᶦᵏᵃᵖᵖ======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
//====================ᵗᶦᵏᵃᵖᵖ======================//
if(preg_match('/^\/([Ss]tart)/',$text)){
$start_time = round(microtime(true) * 1000);
      $send=  bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Tezlik:",
            ])->result->message_id;
        
                    $end_time = round(microtime(true) * 1000);
                    $time_taken = $end_time - $start_time;
                    bot('editMessagetext',[
                        "chat_id" => $chat_id,
                        "message_id" => $send,
                        "text" => "Tezlik:" . $time_taken . "ms",
                    ]);
}

if($text == "salom"){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Alek",
]);
}
$set = '
<?php
echo "salom";
?>
';
if($text == "bos"){
$se1 = 	file_put_contents("s/index.php",$set);
if($se1){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ok",
	]);
}
}
?>
