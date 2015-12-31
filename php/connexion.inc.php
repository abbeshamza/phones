<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_base='isamm';

$idconnexion=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Ex&eacute;cution de la requ&ecirc;te impossible. Essayez plus tard");
mysql_select_db($mysql_base,$idconnexion)or die("Ex&eacute;cution de la requ&ecirc;te impossible. Essayez plus tard");

?>