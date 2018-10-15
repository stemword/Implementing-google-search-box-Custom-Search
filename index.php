<?php  
// error_reporting(E_ALL); ini_set('display_errors', '1');
//  require_once 'vendor/autoload.php';
// $GCSE_API_KEY = "AIzaSyDvoete1q73AA-CcfIoZnbuzouslcdM3tw";
// $GCSE_SEARCH_ENGINE_ID = "017016795061551896316:xtyaqy-c908";
//  $client = new Google_Client();
// //$client->setApplicationName("My_App");
// $client->setDeveloperKey($GCSE_API_KEY);
// $service = new Google_Service_Customsearch($client);
// $optParams = array("cx"=>$GCSE_SEARCH_ENGINE_ID);    
// $results = $service->cse->listCse("cats", $optParams);
// $client->setApplicationName("Client_Library_Examples");
// $client->setDeveloperKey("AIzaSyDSkgrVntUUFmrUJ57OfuRhHVTpNSujRl4");

// $client->setUseBatch(true);
// $batch = new Google_Http_Batch($client);

// $optParams = array('filter' => 'free-ebooks');
// $req1 = $service->volumes->listVolumes('Henry David Thoreau', $optParams);
// $batch->add($req1, "thoreau");
// $req2 = $service->volumes->listVolumes('George Bernard Shaw', $optParams);
// $batch->add($req2, "shaw");

// $results = $batch->execute();
// echo "<pre>";
//  print_r($results->getItems());
//exit;
// foreach($results->getItems() as $k=>$item){
//             //var_dump($item);
//             $item[] = $item;
//         }

//         echo "<pre>";
//          print_r($item);
?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		/* BOILERPLATE */
*, *:before, *:after {-webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box;}

html {font-size:14px; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;}

body {font-style:normal; font-size:1rem; line-height:1.286rem; font-family:helvetica, arial, sans-serif; background-color:#efefef; color:#333; text-align:left;}

#pageWrapper {width:984px; margin:1.429rem auto; border:solid 1px #ccc; background-color:#fff; padding:1rem;}

.pageSection {display:block; margin-top:1.429rem; clear:both;}
.pageSection:first-child {margin-top:0;}

h1,h2,h3,h4,h5,h6 {color:#d06600; font-family:Roboto, "Helvetica Neue", helvetica, arial, sans-serif; font-weight:normal; text-rendering:optimizelegibility;}

h1 {font-size:2rem; line-height:2.286rem;} /* 28px/32px */
h2 {font-size:1.714rem; line-height:2rem;} /* 24px/28px */
h3 {font-size:1.429rem; line-height:1.714rem;} /* 20px/24px */
h4 {font-size:1.286rem; line-height:1.571rem;} /* 18px/22px */
h5 {font-size:1rem; line-height:1.286rem;} /* 14px/18px */
h6 {font-size:1rem; line-height:1.286rem;} /* 14px/18px */

p {margin-top:1rem;}
p:first-child, h1 + p {margin-top:0.5rem;}

a, a:focus, a:link {color:#1971c4; text-decoration:none; outline:0;}
a:hover {color:#1c3d73;}
a:active {color:#1c3d73;}

.bulletedList {margin-top:0.5rem;}
.bulletedList li {margin:0.5rem 0 0 0;}
.bulletedList li:first-child {margin-top:0;}
.bulletedList li:before {content:"\f21b"; font-family:"Ionicons"; float:left; margin-right:0.5rem; font-size:0.7143rem;}

.clearContent:after {clear: both; content: "."; display:block; height:0; visibility:hidden;}

@media screen and (max-width: 984px){
  #pageWrapper {width:98%; margin:1% auto;}
}
/* END OF BOILERPLATE */

.buttonList {display:block; clear:both; margin-top:1rem;}
.buttonList li {float:left; margin-left:0.3571rem; font-size:1.286rem; line-height:1.571rem;}
.buttonList li:first-child {margin-left:0;}

.button {padding:0.3571rem 0.7143rem; background-color:#0195e7; -webkit-border-radius:0.2857rem; -moz-border-radius:0.2857rem; border-radius:0.2857rem; color:#fff; text-align:center; cursor:pointer;}
a.button {color:#fff;}
.button:hover, .button:active {background-color:#006fac;}

.gsc-search-button {box-sizing:initial;}
.cse .gsc-control-cse, .gsc-control-cse {padding:0 !important;}
	</style>
</head>
<body>

    <div id="pageWrapper">
  <div id="pageMasthead" class="pageSection"></div>
  
  <div id="pageContentArea" class="pageSection">
		<h2>Google CSE</h2>
		<p>Search the CSE site:</p>
		<div id="sampleSiteSearch"></div>
		<form id="search-input-form">
			<input type="text" name="" id="search-input" />
			<input type="submit" name="search" id="search-button" value="search" />
		</form>
	</div>
	<div id="search-result-wrapper"></div>
	<div id="search-results"></div>
	
</div>
<div id="search-more">Next</div>
	<div id="search-prev">Prev</div>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="app.js"></script>
</body>
</html>

