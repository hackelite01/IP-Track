<?php
include("modules/system.php");
class set {
  public function Setup() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IP-Track");
      system("rm -rf /data/data/com.termux/files/usr/bin/ip-track");
      system("rm -rf /data/data/com.termux/files/usr/bin/track");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/ip-track");
      system("sudo rm -rf /usr/bin/track");
      system("sudo rm -rf /usr/share/IP-Track");
    } else {
      system("rm -rf /usr/bin/ip-track");
      system("rm -rf /usr/bin/track");
      system("rm -rf /usr/share/IP-Track");
    }
    
    // adding bin file
    if ($system=="termux") {
      system("mv -v modules/ip-track /data/data/com.termux/files/usr/bin/");
      system("mv -v modules/track /data/data/com.termux/files/usr/bin/");
      system("chmod +x /data/data/com.termux/files/usr/bin/ip-track track");
      system("chmod +x /data/data/com.termux/files/usr/bin/track");
    } elseif ($system=="ubuntu") {
      system("sudo mv -v modules/ip-track /usr/bin/");
      system("sudo mv -v modules/track /usr/bin/");
      system("sudo chmod +x /usr/bin/ip-track");
      system("sudo chmod +x /usr/bin/track");
    } else {
      system("mv -v modules/ip-track /usr/bin/");
      system("mv -v modules/track /usr/bin/");
      system("chmod +x /usr/bin/ip-track");
      system("chmod +x /usr/bin/track");
    }

    // copy files from IP-Track to .IP-Track directory.
    if ($system=="termux") {
      system("mkdir /data/data/com.termux/files/usr/share/IP-Track");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /data/data/com.termux/files/usr/share/IP-Track/");
    } elseif ($system=="ubuntu") {
      system("sudo mkdir /usr/share/IP-Track/");
      system("sudo chmod +x * *.* .*.*");
      system("sudo mv -v * *.* .*.* /usr/share/IP-Track/");
    } else {
      system("mkdir /usr/share/IP-Track");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /usr/share/IP-Track/");
    }
    
    // removing IP-Track directory
    if ($system=="termux") {
      system("cd .. && rm -rf IP-Track");
    } elseif ($system=="ubuntu") {
      system("cd .. && sudo rm -rf IP-Track");
    } else {
      system("cd .. && rm -rf IP-Track");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m 
     \033[01;31m(_)\033[01;33m
 __  .______          .___________..______          ___       ______  __  ___ 
|  | |   _  \         |           ||   _  \        /   \     /      ||  |/  / 
|  | |  |_)  |  ______`---|  |----`|  |_)  |      /  ^  \   |  ,----'|  '  /  
|  | |   ___/  |______|   |  |     |      /      /  /_\  \  |  |     |    <   
|  | |  |                 |  |     |  |\  \----./  _____  \ |  `----.|  .  \  
|__| | _|                 |__|     | _| `._____/__/     \__\ \______||__|\__\ 
                                                                              


    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ip-track") || file_exists("/data/data/com.termux/files/usr/bin/ip-track")) {
      echo "\033[01;32m      IP-Track installed Successfully !!!\033[00m\n";
      echo <<<EOL

\033[01;37m ----------------------------------------------
|         \033[01;36mcommand\033[01;37m       |        \033[01;36mUse\033[01;37m           |
 ----------------------------------------------
| \033[01;32mtrack -m\033[01;37m              | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mtrack -t <traget-ip>\033[01;37m  | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mtrack --help\033[01;37m         | \033[01;33mFor more information\033[01;37m |
 ----------------------------------------------

\033[01;31mNote :- ip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
    } else {
      echo "\n\n\033[01;31m  Sorry IP-Track is not installed !!!\033[00m";
    }
  }
}
$a=new set;
$a->Setup();
$a->logo();
?>
