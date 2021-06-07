<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
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
}\033[01;31m-------------- \033[01;32mTrack IPLocation\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating IP-Track.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/hackelite01/IP-Track.git");
  system("cd ~/ && sudo git clone https://github.com/hackelite01/IP-Track.git");
  system("cd ~/IP-Track && sh install");
  logo();
  echo "\n\033[01;32m              IP-Track updated !!!\033[01;37m\n";
  sleep(1);
}
upd();
?>
