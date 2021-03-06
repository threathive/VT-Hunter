<?
#Mongo Config
$mongo_server_host = "127.0.0.1";
$mongo_server_port = "27017";
$mongo_db = "vt";
$mongo_collection = "samples";
$mongo_collection_stats = "stats";

#Crits Connections
$crits_on = "false";
$crits_url = "https://myCrits.com/crits"; #Until /api, https://crits.com/crits/api/v1
$crits_api_key = "123456789";
$crits_user = "username";

#MISP Connections
$misp_on = "false";
$misp_url = "https://myMisp.com";
$misp_api_key = "123456789";

#Viper Connections
$viper_on = "false";
$viper_url = "http://viper.li:8080";
$viper_api_url = "http://viper.li:9090";

#VT 
#VirusTotal Intelligence API
$vt_mal = "true";  
$vt_mal_key = "123456789";

#VirusTotal Private Mass API
$vt_search = "false"; 
$vt_search_key = "0987654321";

$delete_alerts = "false";

#Version
$version = "2.5";
$updated = "May 5 2016";

#AV
$av_vendor = "McAfee";
$av_multiple = "false"; # Use an array of predetermined AV
$av_vendors = array("ESET-NOD32","TrendMicro","Sophos","McAfee","Kaspersky","Fortinet","Ikarus","Symantec","Qihoo-360");

#Allow Manual Pull of VT, MISP, CRITS
$manual_pull = "true";
?>
