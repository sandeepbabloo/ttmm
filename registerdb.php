<?php 
include "mySql_connect.php";

$name=$nameerr=$cof=$coferr=$strup=$struperr=$email=$emailerr=$contact=$contacterr=$desc=$descerr=$stage=$stageerr=$sector=$sectorerr=$link=$linkerr=$website=$websiteerr=$pitch=$pitcherr="";
$info  = array('0' =>array('type' => $name,'error' => $nameerr ),
               '1' =>array('type' => $cof,'error' => $coferr ),
               '2' =>array('type' => $strup,'error' => $struperr ),
               '3' =>array('type' => $email,'error' => $emailerr ),
               '4' =>array('type' => $contact,'error' => $contacterr ),
               '5' =>array('type' => $desc,'error' => $descerr ),
               '6' =>array('type' => $stage,'error' => $stageerr ),
               '7' =>array('type' => $sector,'error' => $sectorerr ),
               '8' =>array('type' => $link,'error' => $linkerr ),
               '9' =>array('type' => $website,'error' => $websiteerr ),
               '10' =>array('type' => $pitch,'error' => $pitcherr ),
 );

if(isset($_POST["Register"])){
	echo $_POST["Name"];
	echo $_POST["Email"];

	$info[0]['type']=test_input($_POST["Name"]);
	$info[1]['type']=test_input($_POST["Cofounders"]);
	$info[2]['type']=test_input($_POST["Startup"]);
	$info[3]['type']=test_input($_POST["Email"]);
	$info[4]['type']=test_input($_POST["Contact"]);
	$info[5]['type']=test_input($_POST["Desc"]);
	$info[6]['type']=test_input($_POST["Stage"]);
	$info[7]['type']=test_input($_POST["Sector"]);
	$info[8]['type']=test_input($_POST["Link"]);
	$info[9]['type']=test_input($_POST["Website"]);
	$info[10]['type']=test_input($_POST["Pitch"]);

	echo $info[0]['type'];
	echo $info[3]['type'];

$f=0;



for ($x = 0; $x <= 7; $x++) {
	if(empty($info[$x]['type'])){
		$info[$x]['error']="*Field is Required ";
        // echo $info[$x]['error'] ;
		$f=$f+1 ;
		// echo $f ;
			}
			// else{
			// 	echo $info[$x]['type'] ;
			// }
}
$info_0=(string)$info[0]['type'];
$info_1=(string)$info[1]['type'];
$info_2=(string)$info[2]['type'];
$info_3=(string)$info[3]['type'];
$info_4=(string)$info[4]['type'];
$info_5=(string)$info[5]['type'];
$info_6=(string)$info[6]['type'];
$info_7=(string)$info[7]['type'];
$info_8=(string)$info[8]['type'];
$info_9=(string)$info[9]['type'];
$info_10=(string)$info[10]['type'];
echo $info_0;

if($f==0){
$query="INSERT INTO `registration`(`name`,`cofounders`,`startup_name`,`email`,`contact`,`startup_description`,`startup_stage`,`startup_sector`,`video_link`,`website`,`pitch_deck`) VALUES('$info_0','$info_1','$info_2','$info_3','$info_4','$info_5','$info_6','$info_7','$info_8','$info_9','$info_10')";
$result=mysqli_query($conn,$query) or die("Error:".mysqli_error($conn));
}
}
mysqli_close($conn);
function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
// function required(&$type,&$error,&$i){
	
// 			return 0;
// }
 ?>