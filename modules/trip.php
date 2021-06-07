<?php
function trac() {
  logo();
  $cyn="\033[01;36m";
  $yel="\033[01;33m";
  $prompt="\n\033[00m";
  echo $prompt;
  $ip = readline('  Enter IP : ');
  $data = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
  $FCL="\033[01;33m";
  $MCL="\033[01;37m>\033[01;32m";
  $NCL="\033[00m";
  date_default_timezone_set($data['timezone']);
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m
     \033[01;31m(_)\033[01;33m

 ___________     ___________  ___  _____  _   __
|_   _| ___ \   |_   _| ___ \/ _ \/  __ \| | / /
  | | | |_/ /_____| | | |_/ / /_\ \ /  \/| |/ / 
  | | |  __/______| | |    /|  _  | |    |    \ 
 _| |_| |         | | | |\ \| | | | \__/\| |\  \
 \___/\_|         \_/ \_| \_\_| |_/\____/\_| \_/
                                    

   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m--------------- \033[01;32mIP Information\033[01;31m ---------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;

  if($data['status'] == 'success') {
    echo "\n ".$FCL."IP Address    ".$MCL."   ".$data['query'];
    echo "\n ".$FCL."Country code  ".$MCL."   ".$data['countryCode'];
    echo "\n ".$FCL."Country       ".$MCL."   ".$data['country'];
    echo "\n ".$FCL."Date & Time   ".$MCL."   ".date("F j, Y, g:i a");
    echo "\n ".$FCL."Region code   ".$MCL."   ".$data['region'];
    echo "\n ".$FCL."Region        ".$MCL."   ".$data['regionName'];
    echo "\n ".$FCL."City          ".$MCL."   ".$data['city'];
    echo "\n ".$FCL."Zip code      ".$MCL."   ".$data['zip'];
    echo "\n ".$FCL."Time zone     ".$MCL."   ".$data['timezone'];
    echo "\n ".$FCL."ISP           ".$MCL."   ".$data['isp'];
    echo "\n ".$FCL."Organization  ".$MCL."   ".$data['org'];
    echo "\n ".$FCL."ASN           ".$MCL."   ".$data['as'];
    echo "\n ".$FCL."Latitude      ".$MCL."   ".$data['lat'];
    echo "\n ".$FCL."Longtitude    ".$MCL."   ".$data['lon'];
    echo "\n ".$FCL."Location      ".$MCL."   ".$data['lat'].",".$data['lon'];
    echo "\n\n$NCL";
  } else {
    echo "\n\033[01;31m Sorry unable to track your\033[01;33m IP Address\033[01;31m !!!\033[00m\n";
    echo "\033[01;31m Check your \033[01;33mNetwork connection\033[01;31m !!\033[00m\n";
    echo "\033[01;31m If you are \033[01;33mOnline\033[01;31m then check your \033[01;33mIP Address\033[01;31m !!\033[00m\n\n";
  }
  $prompt="\033[00m";
  echo $prompt;
  $getact = readline(' IP-Track >> ');
  menu();
}
?>