<?php
date_default_timezone_set("Asia/Baghdad");
if (file_exists('madeline.php')){
    require_once 'madeline.php';
}
define('MADELINE_BRANCH', 'deprecated');
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
$settings = (new \danog\MadelineProto\Settings\AppInfo)->setApiId(13167118)->setApiHash('6927e2eb3bfcd393358f0996811441fd');
$MadelineProto = new API('7.madeline', $settings);
$MadelineProto->start();
$x= file_get_contents('x7');
$info = json_decode(file_get_contents('info.json'),true);
$num = $info["number7"];
$chat_mack = file_get_contents("o7");
do{
	file_put_contents('x7',$x++);
$info = json_decode(file_get_contents('in.json'),true);
$info["loop7"] = $x;
file_put_contents('in.json', json_encode($info));
    $users = explode("\n",file_get_contents("u7"));
    foreach($users as $user){
        if($user != ""){
            try{
            	$MadelineProto->messages->getPeerDialogs(['peers' => [$user]]);
                        	$x++;
            } catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                    try{
                        $MadelineProto->channels->updateUsername(['channel' => $chat_mack, 'username' => $user]);                        
                        $ch = file_get_contents("ch");
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "ᴍᴀx ↬ ᴢᴀᴀᴋ`s ɪs ʜᴇʀᴇ ⚚

↬ ɴᴇᴡ ᴜsᴇʀɴᴀᴍᴇ : @$user \n

↬ ᴄɪᴋʟɪᴄ :  $x \n

↬ ꜱᴀᴠᴇ : ᴄʜᴇɴɴᴀʟ 

↬ ʜᴜɴᴛ ʙʏ : @z_v_o  🦅 | @Xx_ZaaK 🇪🇬"]);
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "↬ᴄʜᴇᴄᴋᴇʀ #7 ɴᴀᴡ ʀᴜɴ ! 🇪🇬'",]);
                        $MadelineProto->messages->sendMessage(['peer' => $chat_mack, 'message' => "ᴍᴀx ↬ ᴢᴀᴀᴋ`s ɪs ʜᴇʀᴇ ⚚

↬ ɴᴇᴡ ᴜsᴇʀɴᴀᴍᴇ : @$user \n

↬ ᴄɪᴋʟɪᴄ :  $x \n

↬ ꜱᴀᴠᴇ : ᴄʜᴇɴɴᴀʟ 

↬ ʜᴜɴᴛ ʙʏ : @z_v_o  🦅 | @Xx_ZaaK 🇪🇬"]);
                        $data = str_replace("\n".$user,"", file_get_contents("u7"));
                        file_put_contents("u7", $data);
                    }catch(Exception $e){
                        echo $e->getMessage();
                        if($e->getMessage() == "USERNAME_INVALID"){
                        	bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ checker ❲ 7 ❳  \n | username is Band\n╰ Done Delet on list ↣ @$user",]);
                            $data = str_replace("\n".$user,"", file_get_contents("u7"));
                            file_put_contents("u7", $data);
                           }elseif($e->getMessage() == "This peer is not present in the internal peer database"){
                         $updates = $MadelineProto->channels->createChannel(['broadcast' => true,'megagroup' => false,'title' => file_get_contents("name"), ]);
                        $chat = $updates['updates'][1];
                        $MadelineProto->channels->updateUsername(['channel' => $chat, 'username' => $user]);
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "ᴍᴀx ↬ ᴢᴀᴀᴋ`s ɪs ʜᴇʀᴇ ⚚

↬ ɴᴇᴡ ᴜsᴇʀɴᴀᴍᴇ : @$user \n

↬ ᴄɪᴋʟɪᴄ :  $x \n

↬ ꜱᴀᴠᴇ : ᴄʜᴇɴɴᴀʟ 

↬ ʜᴜɴᴛ ʙʏ : @z_v_o  🦅 | @Xx_ZaaK 🇪🇬"]);
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "↬ᴄʜᴇᴄᴋᴇʀ #7 ɴᴀᴡ ʀᴜɴ ! 🇪🇬'",]);
                        $MadelineProto->messages->sendMessage(['peer' => $chat, 'message' => "ᴍᴀx ↬ ᴢᴀᴀᴋ`s ɪs ʜᴇʀᴇ ⚚

↬ ɴᴇᴡ ᴜsᴇʀɴᴀᴍᴇ : @$user \n

↬ ᴄɪᴋʟɪᴄ :  $x \n

↬ ꜱᴀᴠᴇ : ᴄʜᴇɴɴᴀʟ 

↬ ʜᴜɴᴛ ʙʏ : @z_v_o  🦅 | @Xx_ZaaK 🇪🇬"]);
                        $data = str_replace("\n".$user,"", file_get_contents("u7"));
                        file_put_contents("u7", $data);
                        }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                            $data = str_replace("\n".$user,"", file_get_contents("u7"));
                            file_put_contents("u7", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ checker ❲ 7 ❳ 🛎 \n | username not save\n╰ FLood 1500 ↣ @$user",]);
                        }elseif($e->getMessage() == "CHANNELS_ADMIN_PUBLIC_TOO_MUCH"){
                             $data = str_replace("\n".$user,"", file_get_contents("u7"));
                            file_put_contents("u7", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "7 •CHANNELS_ADMIN_PUBLIC_TOO_MUCH : @$user",]);                          
                        }else{
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "7 • Error @$user ".$e->getMessage()
]);exit;
$info = json_decode(file_get_contents('info.json'),true);
$info["num7"] = "delet";file_put_contents('info.json', json_encode($info));
}}}}
}}while(1);