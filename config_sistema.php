<?php
class config_sistema{			
	var $hostname = 'localhost';
	var $username = 'comerci4_sisnfe';
	var $password = '02997841500';
	var $database = 'comerci4_miragema_nfe';
	var $dbdriver = 'mysqli';
	var $dbprefix = 'sma_';
	var $pconnect = FALSE;
	var $db_debug = FALSE;
	var $cache_on = FALSE;
	var $cachedir = '';
	var $char_set = 'utf8';
	var $dbcollat = 'utf8_general_ci';
	var $swap_pre = '';
	var $encrypt= FALSE;
	var $compress = FALSE;
	var $stricton = FALSE;
	var $failover = array();
	var $save_queries = FALSE;
	//var $url_base = 'http://pdv.comercioparalelo.com';
	var $url_base = 'http://localhost:8080/pdv/';
}
?>