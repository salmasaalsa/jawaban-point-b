<?php
$string=array("aku", "suka", "makan", "nasi" ,"padang");
$word = "";
for ($j=0; $j<5; $j++){
	//$word="";
	for ($i=$j; $i<=$j; $i++) {
		
		$word .= $string[$i]. " ";
		echo $word;
		echo "<br>";
	}
	
}
$word2="";
for ($j=4; $j>=0; $j--){
	//$word="";
	for ($i=$j; $i>=$j; $i--) {
		
		$word2 .= $string[$i]. " ";
		echo $word2;
		echo "<br>";
	}
	
}

?>