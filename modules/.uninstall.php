<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IP-Trac");
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

    if (file_exists("/usr/bin/ip-track")) {
      echo "\n\033[01;31m        Sorry IP-Track is not removed !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/ip-track")) {
      echo "\n\033[01;31m        Sorry IP-Track is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        IP-Track is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
