<?php

# FileName="Connection_php_mysql.htm"

# Type="MYSQL"

# HTTP="true"

$hostname_connect = $_ENV{'DATABASE_SERVER'};

$database_connect = "globalfaces";

$username_connect = "testuser";

$password_connect = "1234";

$connect = mysql_pconnect($hostname_connect, $username_connect, $password_connect) or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_select_db($database_connect, $connect) or die(mysql_error());

$Sitewww = "http://www.globalfaces.org";

?>