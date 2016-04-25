<?php

define ('HOSTNAME', 'yioop.com/s/news');

//f, callback, q, limit, num
$f='';
$callback='';
$q='';
$limit='';
$num='';
$path = "?";
if(isset($_GET['f'])){
	$f = $_GET['f'];
	$path = $path."f=".$f;
}
if(isset($_GET['callback'])){
	$callback = $_GET['callback'];
	$path = $path."&callback=".$callback;
}
if(isset($_GET['q'])){
	$q = $_GET['q'];
	$path = $path."&q=".$q;
}
if(isset($_GET['limit'])){
	$limit = $_GET['limit'];
	$path = $path."&limit=".$limit;
}
else{
	$limit = 0;
	$path = $path."&limit=".$limit;
}
if(isset($_GET['num'])){
	$num = $_GET['num'];
	$path = $path."&num=".$num;
}
else{
	$num = 20;
	$path = $path."&num=".$num;
}
$url = HOSTNAME.$path;

// Open the Curl session
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $url); 
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);



// Make the call
$call = curl_exec($session);

//echo curl_errno($session);
//echo curl_error($session);

echo $call;
curl_close($session);

?>