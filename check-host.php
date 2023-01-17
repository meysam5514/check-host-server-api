<?php
error_reporting(false);
header('Content-type: application/json;');
//header('Content-Type: image/png');

$kobskey = $_GET['license'];




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
function get($url){
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36");
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
//curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
//curl_setopt($ch,CURLOPT_COOKIESESSION ,true);
//curl_setopt($ch, CURLOPT_COOKIEJAR,"cooki.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cooki.txt");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch,CURLOPT_NOBODY,FALSE);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,2);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch,CURLOPT_AUTOREFERER,1);
curl_setopt($ch,CURLOPT_ENCODING, 'UTF-8');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
return curl_exec($ch);
curl_close($ch);
} 
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
function post($url,$data){
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
//curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
//curl_setopt($ch,CURLOPT_COOKIESESSION ,true);
//curl_setopt($ch, CURLOPT_COOKIEJAR,"cooki.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cooki.txt");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch,CURLOPT_NOBODY,FALSE);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,2);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch,CURLOPT_AUTOREFERER,1);
curl_setopt($ch,CURLOPT_ENCODING, 'UTF-8');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
return curl_exec($ch);
curl_close($ch);
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$urlkobs = $_GET['url'];


$meysam1=get("https://check-host.net/check-http?host=$urlkobs");


preg_match_all('#<a href="(.*?)">Permanent link to this check report</a>#',$meysam1,$side1);

$read=$side1[1][0];

$read1=str_replace(["report"],["result"],$read);


if($read!=null){
sleep(20);
$meysam2=file_get_contents("$read1");

$kk=json_decode($meysam2,true);

//=======
$Australia_result=$kk['au1.node.check-host.net']['0']['0'];
$Australia_Time=$kk['au1.node.check-host.net']['0']['1'];
$Australia_Code1=$kk['au1.node.check-host.net']['0']['2'];
$Australia_Code=$kk['au1.node.check-host.net']['0']['3'];
$Australia_ip=$kk['au1.node.check-host.net']['0']['4'];
//=======
$Austria_result=$kk['at1.node.check-host.net']['0']['0'];
$Austria_Time=$kk['at1.node.check-host.net']['0']['1'];
$Austria_Code1=$kk['at1.node.check-host.net']['0']['2'];
$Austria_Code=$kk['at1.node.check-host.net']['0']['3'];
$Austria_ip=$kk['at1.node.check-host.net']['0']['4'];
//=======
$Canada_result=$kk['ca1.node.check-host.net']['0']['0'];
$Canada_Time=$kk['ca1.node.check-host.net']['0']['1'];
$Canada_Code1=$kk['ca1.node.check-host.net']['0']['2'];
$Canada_Code=$kk['ca1.node.check-host.net']['0']['3'];
$Canada_ip=$kk['ca1.node.check-host.net']['0']['4'];
//=======
$Switzerland_result=$kk['ch1.node.check-host.net']['0']['0'];
$Switzerland_Time=$kk['ch1.node.check-host.net']['0']['1'];
$Switzerland_Code1=$kk['ch1.node.check-host.net']['0']['2'];
$Switzerland_Code=$kk['ch1.node.check-host.net']['0']['3'];
$Switzerland_ip=$kk['ch1.node.check-host.net']['0']['4'];
//=======
$Germany_result=$kk['de1.node.check-host.net']['0']['0'];
$Germany_Time=$kk['de1.node.check-host.net']['0']['1'];
$Germany_Code1=$kk['de1.node.check-host.net']['0']['2'];
$Germany_Code=$kk['de1.node.check-host.net']['0']['3'];
$Germany_ip=$kk['de1.node.check-host.net']['0']['4'];
//=======
$Germany1_result=$kk['de4.node.check-host.net']['0']['0'];
$Germany1_Time=$kk['de4.node.check-host.net']['0']['1'];
$Germany1_Code1=$kk['de4.node.check-host.net']['0']['2'];
$Germany1_Code=$kk['de4.node.check-host.net']['0']['3'];
$Germany1_ip=$kk['de4.node.check-host.net']['0']['4'];
//=======
$Finland_result=$kk['fi1.node.check-host.net']['0']['0'];
$Finland_Time=$kk['fi1.node.check-host.net']['0']['1'];
$Finland_Code1=$kk['fi1.node.check-host.net']['0']['2'];
$Finland_Code=$kk['fi1.node.check-host.net']['0']['3'];
$Finland_ip=$kk['fi1.node.check-host.net']['0']['4'];
//=======
$France_result=$kk['fr2.node.check-host.net']['0']['0'];
$France_Time=$kk['fr2.node.check-host.net']['0']['1'];
$France_Code1=$kk['fr2.node.check-host.net']['0']['2'];
$France_Code=$kk['fr2.node.check-host.net']['0']['3'];
$France_ip=$kk['fr2.node.check-host.net']['0']['4'];
//=======
$HongKong_result=$kk['hk1.node.check-host.net']['0']['0'];
$HongKong_Time=$kk['hk1.node.check-host.net']['0']['1'];
$HongKong_Code1=$kk['hk1.node.check-host.net']['0']['2'];
$HongKong_Code=$kk['hk1.node.check-host.net']['0']['3'];
$HongKong_ip=$kk['hk1.node.check-host.net']['0']['4'];
//=======
$Iran_result=$kk['ir1.node.check-host.net']['0']['0'];
$Iran_Time=$kk['ir1.node.check-host.net']['0']['1'];
$Iran_Code1=$kk['ir1.node.check-host.net']['0']['2'];
$Iran_Code=$kk['ir1.node.check-host.net']['0']['3'];
$Iran_ip=$kk['ir1.node.check-host.net']['0']['4'];  
//=======
$Italy_result=$kk['it2.node.check-host.net']['0']['0'];
$Italy_Time=$kk['it2.node.check-host.net']['0']['1'];
$Italy_Code1=$kk['it2.node.check-host.net']['0']['2'];
$Italy_Code=$kk['it2.node.check-host.net']['0']['3'];
$Italy_ip=$kk['it2.node.check-host.net']['0']['4'];  
//=======
$Kazakhstan_result=$kk['kz1.node.check-host.net']['0']['0'];
$Kazakhstan_Time=$kk['kz1.node.check-host.net']['0']['1'];
$Kazakhstan_Code1=$kk['kz1.node.check-host.net']['0']['2'];
$Kazakhstan_Code=$kk['kz1.node.check-host.net']['0']['3'];
$Kazakhstan_ip=$kk['kz1.node.check-host.net']['0']['4'];  
//=======
$Lithuania_result=$kk['lt1.node.check-host.net']['0']['0'];
$Lithuania_Time=$kk['lt1.node.check-host.net']['0']['1'];
$Lithuania_Code1=$kk['lt1.node.check-host.net']['0']['2'];
$Lithuania_Code=$kk['lt1.node.check-host.net']['0']['3'];
$Lithuania_ip=$kk['lt1.node.check-host.net']['0']['4'];  
//=======
$Moldova_result=$kk['md1.node.check-host.net']['0']['0'];
$Moldova_Time=$kk['md1.node.check-host.net']['0']['1'];
$Moldova_Code1=$kk['md1.node.check-host.net']['0']['2'];
$Moldova_Code=$kk['md1.node.check-host.net']['0']['3'];
$Moldova_ip=$kk['md1.node.check-host.net']['0']['4'];
//=======
$Netherlands_result=$kk['nl1.node.check-host.net']['0']['0'];
$Netherlands_Time=$kk['nl1.node.check-host.net']['0']['1'];
$Netherlands_Code1=$kk['nl1.node.check-host.net']['0']['2'];
$Netherlands_Code=$kk['nl1.node.check-host.net']['0']['3'];
$Netherlands_ip=$kk['nl1.node.check-host.net']['0']['4'];
//=======
$Portugal_result=$kk['pt1.node.check-host.net']['0']['0'];
$Portugal_Time=$kk['pt1.node.check-host.net']['0']['1'];
$Portugal_Code1=$kk['pt1.node.check-host.net']['0']['2'];
$Portugal_Code=$kk['pt1.node.check-host.net']['0']['3'];
$Portugal_ip=$kk['pt1.node.check-host.net']['0']['4'];
//=======
$Russia_result=$kk['ru1.node.check-host.net']['0']['0'];
$Russia_Time=$kk['ru1.node.check-host.net']['0']['1'];
$Russia_Code1=$kk['ru1.node.check-host.net']['0']['2'];
$Russia_Code=$kk['ru1.node.check-host.net']['0']['3'];
$Russia_ip=$kk['ru1.node.check-host.net']['0']['4'];
//=======
$Russia1_result=$kk['ru2.node.check-host.net']['0']['0'];
$Russia1_Time=$kk['ru2.node.check-host.net']['0']['1'];
$Russia1_Code1=$kk['ru2.node.check-host.net']['0']['2'];
$Russia1_Code=$kk['ru2.node.check-host.net']['0']['3'];
$Russia1_ip=$kk['ru2.node.check-host.net']['0']['4'];
//=======
$Turkey_result=$kk['tr1.node.check-host.net']['0']['0'];
$Turkey_Time=$kk['tr1.node.check-host.net']['0']['1'];
$Turkey_Code1=$kk['tr1.node.check-host.net']['0']['2'];
$Turkey_Code=$kk['tr1.node.check-host.net']['0']['3'];
$Turkey_ip=$kk['tr1.node.check-host.net']['0']['4'];
//=======
$Ukraine_result=$kk['ua1.node.check-host.net']['0']['0'];
$Ukraine_Time=$kk['ua1.node.check-host.net']['0']['1'];
$Ukraine_Code1=$kk['ua1.node.check-host.net']['0']['2'];
$Ukraine_Code=$kk['ua1.node.check-host.net']['0']['3'];
$Ukraine_ip=$kk['ua1.node.check-host.net']['0']['4'];
//=======
$Ukraine1_result=$kk['ua2.node.check-host.net']['0']['0'];
$Ukraine1_Time=$kk['ua2.node.check-host.net']['0']['1'];
$Ukraine1_Code1=$kk['ua2.node.check-host.net']['0']['2'];
$Ukraine1_Code=$kk['ua2.node.check-host.net']['0']['3'];
$Ukraine1_ip=$kk['ua2.node.check-host.net']['0']['4'];
//=======
$USA_result=$kk['us1.node.check-host.net']['0']['0'];
$USA_Time=$kk['us1.node.check-host.net']['0']['1'];
$USA_Code1=$kk['us1.node.check-host.net']['0']['2'];
$USA_Code=$kk['us1.node.check-host.net']['0']['3'];
$USA_ip=$kk['us1.node.check-host.net']['0']['4'];
//=======
$USA1_result=$kk['us2.node.check-host.net']['0']['0'];
$USA1_Time=$kk['us2.node.check-host.net']['0']['1'];
$USA1_Code1=$kk['us2.node.check-host.net']['0']['2'];
$USA1_Code=$kk['us2.node.check-host.net']['0']['3'];
$USA1_ip=$kk['us2.node.check-host.net']['0']['4'];
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$Australia =['result'=>$Australia_result,'Time'=>$Australia_Time,'Code1'=>$Australia_Code1,'Code'=>$Australia_Code,'ip'=>$Australia_ip];
$Austria =['result'=>$Austria_result,'Time'=>$Austria_Time,'Code1'=>$Austria_Code1,'Code'=>$Austria_Code,'ip'=>$Austria_ip];
$Canada =['result'=>$Canada_result,'Time'=>$Canada_Time,'Code1'=>$Canada_Code1,'Code'=>$Canada_Code,'ip'=>$Canada_ip];
$Switzerland =['result'=>$Switzerland_result,'Time'=>$Switzerland_Time,'Code1'=>$Switzerland_Code1,'Code'=>$Switzerland_Code,'ip'=>$Switzerland_ip];
$Germany =['result'=>$Germany_result,'Time'=>$Germany_Time,'Code1'=>$Germany_Code1,'Code'=>$Germany_Code,'ip'=>$Germany_ip];
$Germany1 =['result'=>$Germany1_result,'Time'=>$Germany1_Time,'Code1'=>$Germany1_Code1,'Code'=>$Germany1_Code,'ip'=>$Germany1_ip];
$Finland =['result'=>$Finland_result,'Time'=>$Finland_Time,'Code1'=>$Finland_Code1,'Code'=>$Finland_Code,'ip'=>$Finland_ip];
$France =['result'=>$France_result,'Time'=>$France_Time,'Code1'=>$France_Code1,'Code'=>$France_Code,'ip'=>$France_ip];
$HongKong =['result'=>$HongKong_result,'Time'=>$HongKong_Time,'Code1'=>$HongKong_Code1,'Code'=>$HongKong_Code,'ip'=>$HongKong_ip];
$Iran =['result'=>$Iran_result,'Time'=>$Iran_Time,'Code1'=>$Iran_Code1,'Code'=>$Iran_Code,'ip'=>$Iran_ip];
$Italy =['result'=>$Italy_result,'Time'=>$Italy_Time,'Code1'=>$Italy_Code1,'Code'=>$Italy_Code,'ip'=>$Italy_ip];
$Kazakhstan =['result'=>$Kazakhstan_result,'Time'=>$Kazakhstan_Time,'Code1'=>$Kazakhstan_Code1,'Code'=>$Kazakhstan_Code,'ip'=>$Kazakhstan_ip];
$Lithuania =['result'=>$Lithuania_result,'Time'=>$Lithuania_Time,'Code1'=>$Lithuania_Code1,'Code'=>$Lithuania_Code,'ip'=>$Lithuania_ip];
$Moldova =['result'=>$Moldova_result,'Time'=>$Moldova_Time,'Code1'=>$Moldova_Code1,'Code'=>$Moldova_Code,'ip'=>$Moldova_ip];
$Netherlands =['result'=>$Netherlands_result,'Time'=>$Netherlands_Time,'Code1'=>$Netherlands_Code1,'Code'=>$Netherlands_Code,'ip'=>$Netherlands_ip];
$Portugal =['result'=>$Portugal_result,'Time'=>$Portugal_Time,'Code1'=>$Portugal_Code1,'Code'=>$Portugal_Code,'ip'=>$Portugal_ip];
$Russia =['result'=>$Russia_result,'Time'=>$Russia_Time,'Code1'=>$Russia_Code1,'Code'=>$Russia_Code,'ip'=>$Russia_ip];
$Russia1 =['result'=>$Russia1_result,'Time'=>$Russia1_Time,'Code1'=>$Russia1_Code1,'Code'=>$Russia1_Code,'ip'=>$Russia1_ip];
$Turkey =['result'=>$Turkey_result,'Time'=>$Turkey_Time,'Code1'=>$Turkey_Code1,'Code'=>$Turkey_Code,'ip'=>$Turkey_ip];
$Ukraine =['result'=>$Ukraine_result,'Time'=>$Ukraine_Time,'Code1'=>$Ukraine_Code1,'Code'=>$Ukraine_Code,'ip'=>$Ukraine_ip];
$Ukraine1 =['result'=>$Ukraine1_result,'Time'=>$Ukraine1_Time,'Code1'=>$Ukraine1_Code1,'Code'=>$Ukraine1_Code,'ip'=>$Ukraine1_ip];
$USA =['result'=>$USA_result,'Time'=>$USA_Time,'Code1'=>$USA_Code1,'Code'=>$USA_Code,'ip'=>$USA_ip];
$USA1 =['result'=>$USA1_result,'Time'=>$USA1_Time,'Code1'=>$USA1_Code1,'Code'=>$USA1_Code,'ip'=>$USA1_ip];


$pptpr[]=[
'Australia, Perth'=>$Australia,
'Austria, Salzburg'=>$Austria,
'Canada, Toronto'=>$Canada,
'Switzerland, Zurich'=>$Switzerland,
'Germany, Falkenstein'=>$Germany,
'Germany, Frankfurt'=>$Germany1,
'Finland, Helsinki'=>$Finland,
'France, Paris'=>$France,
'Hong Kong, Hong Kong'=>$HongKong,
'Iran, Tehran'=>$Iran,
'Italy, Milan'=>$Italy,
'Kazakhstan, Karaganda'=>$Kazakhstan,
'Lithuania, Vilnius'=>$Lithuania,
'Moldova, Chisinau'=>$Moldova,
'Netherlands, Amsterdam'=>$Netherlands,
'Portugal, Viana'=>$Portugal,
'Russia, Moscow'=>$Russia,
'Russia, Moscow1'=>$Russia1,
'Turkey, Istanbul'=>$Turkey,
'Ukraine, Khmelnytskyi'=>$Ukraine,
'Ukraine, Kyiv'=>$Ukraine1,
'USA, Los Angeles'=>$USA,
'USA, New Jersey'=>$USA1
];


//========================================================= 
echo json_encode(['ok' => true, 'channel' => '@SIDEPATH','writer' => '@meysam_s71', 'count'=>$mcount, 'Results' =>$pptpr], 448);
//========================================================= 

}








