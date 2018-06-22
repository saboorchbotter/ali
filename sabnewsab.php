<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);
$name= json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nam=$name[name]; $ama= explode(' ',$nam); $nama=$ama[0]; $mr=''.$nama;
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$half ='@['.$stat[data][$i-1][from][id].':'.$exp_nam[0].']';
$me = ' '.$me[name].' ';
$me= json_decode(auto('https://graph.facebook.com/me?fields=id,name&access_token='.$token),true);
$nam=$me[name]; $ama= explode(' ',$nam); $nama=$ama[0];
$user ='@['.$me[id].':'.$ama[0].']';
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
$tas=array('👈😍👉','👈💖👉','👈😺👉','','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👉','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👉','👈📣👉','👈💐👉','👈🍁👉','👈☔👉','👈⛄👉' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];

$tas=array('👈🐺👉','👈👄👉','👈🐒👉','👈🎍👉','👈🎁👉','👈💛👉','👈👀👉','👈🐠👉','👈💙👉','👈🍁👉','👈☀👉','👈🐬👉','👈🌾👉','👈🎄👉','👈📀👉','👈🍃👉','👈💾👉','👈📺👉','👈📻👉','👈🔈👉','👈🎶👉','👈🎵👉','👈🎺👉','👈🎷👉','👈🀄👉','👈🎾👉','👈⚽👉','👈🏀👉','👈🏈👉' ,);
$hamza= $tas[rand(0,count($tas) - 1)];
$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❤','💔','💗','💓','💘','🌹','☀','💐','⚡','🍁','🌙','☔','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$emo=array (
'🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);
$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
'  '.$hamzaemo.'  тσρ ℓgα куα  🌹  '.$mr.' '.$emoticon.'   
😍 вσт ву '.$emoticon.'  '.$ama[0].'  '.$hamzaemo.'
'.$zrilta.' CHBOTTER-GREETING,TK  '.$hamza.'  ', 
);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' CHAUDHRYS BOTTER '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_url=http://graph.facebook.com/'.$me[id].'/picture?type=large&redirect=true&width=500&height=500&access_token='.$token.'&method=POST');
auto(' ');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>