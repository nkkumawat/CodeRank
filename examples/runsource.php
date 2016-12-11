<?php
//Import the SDK 
require_once __DIR__.'\..\sdk\hacker.php';

//Setting up the Hackerearth API
$hackerearth = Array(
		'client_secret' => '3cb638b7aad0a972dfffb8b586dc2f6a23cd4eb7',
        'time_limit' => '5',   
        'memory_limit' => '262144'  //(MAX = 262144 [256 MB])
	);

$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']=$_POST['code'];//(REQUIRED) Your formatted source code for which you want to use hackerEarth api, leave this empty if you are using file
$config['input']='1 12 3 43';     	//(OPTIONAL) formatted input against which you have to test your source code
$config['language']=$_POST['lang'];  //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY

//Sending request to the API to compile and run and record JSON responses
$response = run($hackerearth,$config);     // Use this $response the way you want , it consists data in PHP Array
//Printing the response
// echo"<pre>".print_r($response,1)."</pre>";
 $r=strval(print_r($response,1));
 // echo strpos(,$r);
 $i= strpos($r,"[output] =>");
$j=$i+11;
 for(;$r[$j]!='[';$j++)
 {
 	echo $r[$j];
 }
 // echo $r;
 // print_r($response[1]);
 // echo $r[1];
 // echo $r[7];
 // echo $r['[run_status]']['[output]'];
// foreach ($response as $var) {
// 	echo $var;

// }
// echo $output[0];
// echo $response['run_status'];
// foreach ( $response as $var ) 
// {
//     echo $var;
// }
?>