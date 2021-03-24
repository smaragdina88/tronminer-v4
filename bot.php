<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

system("clear");
$ping1 = url("https://ipsaya.com/");
$a = explode('value="',$ping1);
$ip = explode('"',$a[1]);                                             //echo $ip[0];                                                        $b = explode('ISP :</b><br>',$ping1);
$isp = explode('<',$b[1]);
$c = explode('Kota :</b><br>',$ping1);                                $kota = explode('<',$c[1]);
$d = explode('title="',$ping1);
$ng = explode('"',$d[1]);
//echo $isp[0];
//sleep(3);
//echo " \033[1;92mGet Your Ip Address \033[1;91mhttps://ipsaya.com/\n";
//echo " \033[1;91m◼ \033[1;37mInput Your Ip Address Here : \033[1;91m";
//$ip1 = trim(fgets(STDIN));

if($ip[0]==""){
echo " \033[1;91mACCESS DENIED...!!!\n\n";
exit;
}

//if ($ip1==$ip[0]){
//echo " \033[1;92mSUCCESS ... ACCESS SCRIPT...\r";
//sleep(5);
//system("clear");
//}else{
//echo " \033[1;91mACCESS DENIED...!!!\n\n";
//exit;
//}

echo " \033[1;97mYour Ip Address \033[1;91m".$ip[0]."\n";
echo " \033[1;97mYour ISP        \033[1;92m".$isp[0]."\n";
echo " \033[1;97mYour City       \033[1;92m".$kota[0]."\n";
echo " \033[1;97mYour Country    \033[1;92m".$ng[0]."\n\n";
sleep(3);
echo " \033[1;92mSUCCESS \033[1;97mconnected to the \033[1;92mSUGIONO OFFICIAL \033[1;91mServer\n";
sleep(3);
//exit;
system("rm cookie.txt");

//$wallet = "TN34oyQrN3K5tKv5jgPjfn1WZ6L9GKQHDA";

system("clear");
echo "\033[1;92m";
system("toilet -f wideterm -F border '           SET CONFIG           '");
echo " Get Config 1-100\n";
echo " \033[1;97mSelect Your Chose \033[1;90m: \033[1;91m";
$config = trim(fgets(STDIN));
if ($config==""){
echo " Config Not Found 404\n";
exit;
}
if ($config==""){
echo " Config Not Found 404\n";
exit;
}
include 'cfg'.$config.'.php';
include 'data.php';
system("clear");

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$H="\033[0;30m";
$AB2="\033[1;30m";
$P="\033[0;37m";
$P2="\033[1;37m";
$M="\033[0;31m";
$M2="\033[1;31m";
$HJ="\033[0;32m";
$HJ2="\033[1;32m";
$K="\033[0;33m";
$K2="\033[1;33m";
$B="\033[0;34m";
$B2="\033[1;34m";
$U="\033[0;35m";
$U2="\033[1;35m";
$BL="\033[0;36m";
$BL2="\033[1;36m";
/* END COLOR */

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$SC = "\033[1;92mV4";

$res = url("https://controlc.com/f747d3b6");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}
if ($pass=="down"){
$o = "\033[1;32m[\033[1;91mKO'ID\033[1;92m]";
}

$res = url("https://controlc.com/b27a1f06");
//echo $res."\n";
//exit;
$lg1 = explode('Login: ',$res);
$login = explode('/ajax_auth',$lg1[1]);
//echo $login[0]."\n";
//$pw1 = explode('[tpcolor=#FF0000]',$res);
//$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";
echo $baner = "
\033[1;31m ██████╗ ██████╗ ██╗   ██╗██╗██████╗       ██████╗  ██╗ \033[1;92m$o\033[1;91m
██╔════╝██╔═══██╗██║   ██║██║██╔══██╗      ╚════██╗███║
██║     ██║   ██║██║   ██║██║██║  ██║█████╗ █████╔╝╚██║\033[1;97m
██║     ██║   ██║╚██╗ ██╔╝██║██║  ██║╚════╝██╔═══╝  ██║
╚██████╗╚██████╔╝ ╚████╔╝ ██║██████╔╝      ███████╗ ██║
 ╚═════╝ ╚═════╝   ╚═══╝  ╚═╝╚═════╝       ╚══════╝ ╚═╝ SCRIPT \033[1;92m$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";
if ($pass == 'down'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT INI SUDAH TIDAK BERFUNGSI LAGI \n";
      echo "\033[1;92m ◼ \033[1;91mKARNA WEBSITE atau APLIKASI SUDAH KO'ID \n";
      echo "\033[1;92m ◼ \033[1;92mTERIMA KASIH\n\n";
      exit;
}

if ($link[0]==""){
echo " \033[1;91mKONEKSI TERPUTUS, SILAHKAN CEK KONEKSIMU\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}

if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo "\033[1;92m ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($pass == 'off'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT SEDANG OFFLINE \033[1;97matau \033[1;91mMAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;91m ▶ \033[1;92mUPLOAD Password \r";
      sleep(5);
      system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;92m ◼ \033[1;97mLink Password :\033[1;92m $link[0]\n";
echo "\033[1;92m ◼ \033[1;37mMASUKAN PASSWORD DI SINI : \033[1;92m";
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo "\n \033[1;97mLoading \033[1;31m▪\r";
sleep(1);
echo " \033[1;97mLoading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo " \033[1;97mLoading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo " \033[1;91m◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
        system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        fclose($save);
        sleep(5);
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo " \033[1;92m◼ \033[1;91mGAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "   \033[1;97mSilahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ".$M2;
$kkk = trim(fgets(STDIN));

system("clear");
echo "\033[1;92m";
system("toilet -f wideterm -F border 'WELCOME  SERVER  MINING TRONoshi'");
//system("toilet -f  -F border  'SUGIONO'");
//system("ctrl+l");
echo $M2.$baner1 = " @@@@@@ @@@  @@@  @@@@@@@  @@@  @@@@@@  @@@  @@@  @@@@@@$HJ2 SERVER ON
\033[1;31m!@@     @@!  @@@ !@@       @@! @@!  @@@ @@!@!@@@ @@!  @@@
 !@@!!  @!@  !@! !@! @!@!@ !!@ @!@  !@! @!@@!!@! @!@  !@!
    !:! !!:  !!! :!!   !!: !!: !!:  !!! !!:  !!! !!:  !!!
 ::.: :   :.:: :   :: :: :  :    : :. :  ::    :   : :. :
\033[1;37m SCRIPT VERSION\033[1;31m $SC
 ===============================\033[1;31m404\033[1;32m===============================
$P2 •Creator        :$HJ2 Kakek Sugiono
$P2 •Support By     :$HJ2 All Member
$P2 •Group Tele     :$HJ2 @SugionoShatoshi
$P2 •Channel YT     :$HJ2 Sugiono Official
$P2 •Donation Doge  :$M2 DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
$P2 =================================================================
$M2 •SCRIPT NOT FOR SALE •SCRIPT GRATIS GUNAKAN DENGAN BIJAK YA CUK
 •SEGALA RESIKO DI TANGGUNG CUCUK YA •KAKEK MAU KABUR DULU
 •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";

//include 'cfg'.$config.'.php';
//include 'data.php';
system("clear");

//$w = "1";
//while("true"){
$wl101="stop";
//include 'data.php';
$wal = array(
"$wl1","$wl2","$wl3","$wl4","$wl5","$wl6","$wl7","$wl8","$wl9","$wl10",
"$wl11","$wl12","$wl13","$wl14","$wl15","$wl16","$wl17","$wl18","$wl19","$wl20",
"$wl21","$wl22","$wl23","$wl24","$wl25","$wl26","$wl27","$wl28","$wl29","$wl30",
"$wl31","$wl32","$wl33","$wl34","$wl35","$wl36","$wl37","$wl38","$wl39","$wl40",
"$wl41","$wl42","$wl43","$wl44","$wl45","$wl46","$wl47","$wl48","$wl49","$wl50",
"$wl51","$wl52","$wl53","$wl54","$wl55","$wl56","$wl57","$wl58","$wl59","$wl60",
"$wl61","$wl62","$wl63","$wl64","$wl65","$wl66","$wl67","$wl68","$wl69","$wl70",
"$wl71","$wl72","$wl73","$wl74","$wl75","$wl76","$wl77","$wl78","$wl79","$wl80",
"$wl81","$wl82","$wl83","$wl84","$wl85","$wl86","$wl87","$wl88","$wl89","$wl90",
"$wl91","$wl92","$wl93","$wl94","$wl95","$wl96","$wl97","$wl98","$wl99","$wl100","$wl101");
$wallet= current($wal);
//$wallet = $wl."$w";
//echo $wallet."\n";
//exit;
//echo " \033[1;97mPlease \033[1;92mENTER \033[1;97mto Get Started  ";
//$start = trim(fgets(STDIN));
while("true"){
echo "\033[1;92m";
system("toilet -f wideterm -F border 'WELCOME  SERVER  MINING TRONoshi'");
echo $M2.$baner1;
//$wallet== '$wl'.$w;
while("true"){
//$wallet== '$wl'.$w;
$ua = array(
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"referer: https://forthtrade.com/TRONoshi-ptc/?r=TBGyt4S9kAyauZk27Vw2cQbtZZQWPS5pF2",
"cookie: tronwallet=".$wallet,
"cookie: trxptc_referral=TBGyt4S9kAyauZk27Vw2cQbtZZQWPS5pF2",
"cookie: trxptc_wallet=".$wallet);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://forthtrade.com/TRONoshi-ptc/?r=TBGyt4S9kAyauZk27Vw2cQbtZZQWPS5pF2");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
//echo $result."\n";



$ua1=array(
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"accept: application/json, text/javascript, */*; q=0.01",
"referer: https://forthtrade.com/TRONoshi-ptc/?r=TBGyt4S9kAyauZk27Vw2cQbtZZQWPS5pF2",
"cookie: PHPSESSID=".$PHPSESSID,
"content-type: application/x-www-form-urlencoded; charset=UTF-8");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bitswall.net/offerwall/pcvdi98r2mb4y5umsbqv7z7sx5jgf1/".$wallet);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a = explode("var token = '",$result);
$tkn = explode("'",$a[1]);
//echo " Token ".$tkn[0]."\n";
//exit;
//return false;
echo " \033[97mSign Wallet \033[92m$wallet\r";

if ($wallet=="stop"){
echo "\033[1;92m";
system("toilet -f wideterm -F border '             FINISH             '");
system("toilet -f wideterm -F border '            CONFIG $config            '");
exit;
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bitswall.net/offerwall/pcvdi98r2mb4y5umsbqv7z7sx5jgf1/".$wallet);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "type=ptc&token=".$tkn[0]."&action=switch_cat";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a = explode('data-hash=\"',$result);
$hash=explode('\"',$a[1]);
//if ($hash[0]==""){
//echo " \033[1;91mMINING THE END \n";
//echo "\n \033[1;97mERROR MINING, Turn \033[1;92mON\033[1;97m/\033[1;91mOFF \033[1;97mAIRCRAFT MODE & ENTER ";
//$ent = trim(fgets(STDIN));
//break;
//$wallet = next($wal);
//break;
//}
//system("clear");
//if ("warning"){
//exit;
//}
//echo " HASH ".$hash[0]."\n";
$b = explode('data-sid=\"',$result);
$sid=explode('\"',$b[1]);
//system("clear");
//echo " Sid ".$sid[0]."\n";
$c = explode('data-key=\"',$result);
$key=explode('\"',$c[1]);
//system("clear");
//echo " Key ".$key[0]."\n";
$d = explode('data-type=\"',$result);
$type=explode('\"',$d[1]);
//system("clear");
//echo " Type ".$type[0]."\n";
$e = explode('class=\"float-md-right reward-button bg-primary\">',$result);
$rwd=explode('<',$e[1]);
//echo " Reward ".$rwd[0]."\n";
//system("clear");
//if ($rwd[0]==""){
//echo " \033[1;91mMINING THE END \n";
//echo "\n \033[1;97mERROR MINING, Turn \033[1;92mON\033[1;97m/\033[1;91mOFF \033[1;97mAIRCRAFT MODE & ENTER ";
//$ent = trim(fgets(STDIN));
//break;
//$wallet = next($wal);
//break;
//}
if ($rwd[0]==""){
echo "\n\n \033[1;97mDONE MINING, Turn \033[1;92mON\033[1;97m/\033[1;91mOFF \033[1;97mAIRCRAFT MODE & ENTER ";
$ent = trim(fgets(STDIN));
$wallet = next($wal);
//$w = $w+1;
system("clear");
break;
}else{
echo " \033[97mRewards \033[92m".$rwd[0]."                             \n";
//system("clear");
//exit;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bitswall.net/offerwall/pcvdi98r2mb4y5umsbqv7z7sx5jgf1/".$wallet);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data1 = "hash=".$hash[0]."&sid=".$sid[0]."&key=".$key[0]."&type=".$type[0]."&token=".$tkn[0]."&action=init_transaction";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$json = json_decode($result);
$url = $json->offer;
//echo $url."\n";
//system("clear");
//exit;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a = explode('var duration = ',$result);
$time=explode(';',$a[1]);
//system("clear");
//echo " TIME ".$time[0]."\n";
$a = explode("var token = '",$result);
$tkn=explode("'",$a[1]);
//system("clear");
//echo " Token ".$tkn[0]."\n";
$a = explode("var sub_id = '",$result);
$sub_id=explode("'",$a[1]);
//system("clear");
//echo " Sub Id ".$sub_id[0]."\n";
$a = explode("var hash = '",$result);
$hash=explode("'",$a[1]);
//system("clear");
//echo " Hash ".$hash[0]."\n";
$a = explode("var key = '",$result);
$key=explode("'",$a[1]);
//system("clear");
//echo " Key ".$key[0]."\n";
$a = explode("var waitMsg = '",$result);
$msg=explode("'",$a[1]);
//system("clear");
echo " \033[1;90mMessage ".$msg[0]."\r";
//system("clear");
//exit;

$no = "0";
while('true'){
$no = $no+"1";
$ua2 = array(
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"cookie: PHPSESSID=".$PHPSESSID,
"referer: https://forthtrade.com/TRONoshi-ptc/?r=TBGyt4S9kAyauZk27Vw2cQbtZZQWPS5pF2",
"referer: $url");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bitswall.net/system/libraries/captcha/request.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data2 = "cID=0&rT=1&tM=light";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a = explode('["',$result);
$link1=explode('"',$a[1]);
//system("clear");
//echo $link1[0]."\n";
$a = explode(',"',$result);
$link2=explode('"',$a[1]);
//system("clear");
//echo $link2[0]."\n";
$a = explode(',"',$result);
$link3=explode('"',$a[2]);
//system("clear");
//echo $link3[0]."\n";
$a = explode(',"',$result);
$link4=explode('"',$a[3]);
//system("clear");
//echo $link4[0]."\n";
$a = explode(',"',$result);
$link5=explode('"',$a[4]);
//echo $link5[0]."\n\n";
//system("clear");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bitswall.net/system/libraries/captcha/request.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data4 = "cID=0&pC=".$link1[0]."&rT=2";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
//system("clear");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bitswall.net/system/ajax.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data3 = "hash=".$hash[0]."&sub_id=".$sub_id[0]."&key=".$key[0]."&token=".$tkn[0]."&captcha-idhf=0&captcha-hf=".$link1[0]."&action=proccessLead";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a = explode('"alert alert-',$result);
$st= explode('\"',$a[1]);
//system("clear");

if ($st[0]=="danger"){
//echo $M2.$baner1."\n";
echo " \033[100m▫ \033[92mON PROCESS Get Key \033[97mSolve Block \033[0m \033[101m \033[97m$no \033[0m \033[1;92mBlockchain \033[1;97m& \033[1;91mTronscan ▫\r";
}
if ($st[0]=="success"){
//echo $M2.$baner1."\n";
echo "\033[1;92m";
system("toilet -f wideterm -F border ' SUCCESS GET $rwd[0] '");
echo " \033[92mWallet \033[91m[\033[102m \033[94m".$wallet." \033[0m\033[91m]\n";
echo " \033[102m \033[1;94mSUCCESS \033[0m \033[1;97mPaid \033[102m \033[1;94m$rwd[0] \033[0m to \033[1;91mFaucetpay.io\n";
echo " \033[92mPlease check Your \033[91mFaucetpay.io ....!!!\n\n";
//echo "\n \033[1;97mTurn \033[1;92mON\033[1;97m/\033[1;91mOFF \033[1;97mAIRCRAFT MODE ";
//$ent = trim(fgets(STDIN));
//sleep(10);
break;
//system("php bot.php");
//return false;
}
//$wallet = next($wal);

if ($no>"300"){
//echo " \033[1;91mMINING THE END \n";
echo "\n \033[1;97mDONE MINING, Turn \033[1;92mON\033[1;97m/\033[1;91mOFF \033[1;97mAIRCRAFT MODE & ENTER ";
$ent = trim(fgets(STDIN));
$wallet = next($wal);
//$w = $w+1;
break;
system("clear");
}



if ($wallet=="stop"){
echo "\033[1;92m";
system("toilet -f wideterm -F border '             FINISH             '");
system("toilet -f wideterm -F border '            CONFIG $config            '");
exit;
}
//$wallet = next($wal);
}
//$wallet = next($wal);
}
}
}
