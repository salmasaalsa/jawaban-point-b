<?php 
echo "Nomor 3 bagian i"."<br />";
$data=array(20, 10, 100, 30, 15, 5);
function bubble_sort($data){
  $n=count($data);
  for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
          if ($data[$j] < $data[$j-1]){ 
              $dummy=$data[$j];
              $data[$j]=$data[$j-1];
              $data[$j-1]=$dummy;
          }
      }    
  }
  return $data;
}
echo '<pre>'; print_r(bubble_sort($data));
echo "<br><br><br>";

echo "Nomor 3 bagian ii"."<br />";
$data1=array(20, 10, 100, 30, 15, 5);
array_push ($data1, '120');
function bubble_sort1($data1){
  $n=count($data1);
  for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
          if ($data1[$j] < $data1[$j-1]){ 
              $dummy=$data1[$j];
              $data1[$j]=$data1[$j-1];
              $data1[$j-1]=$dummy;
          }
      }    
  }
  return $data1;
}
print_r(bubble_sort1($data1));
echo "<br><br><br>";

echo "Nomor 3 bagian iii"."<br />";
$data2=array(20, 10, 100, 30, 15, 5);
function bubble_sort2($data2){
  $n=count($data2);
  for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
          if ($data2[$j] < $data2[$j-1]){ 
              $dummy=$data2[$j];
              $data2[$j]=$data2[$j-1];
              $data2[$j-1]=$dummy;
          }
      }    
  }
  return $data2;

}
print_r(bubble_sort2($data2));
$ps2 = bubble_sort2($data2);
$positive = array_filter($ps2, function($dt) {
	return $dt != "10";
});
print_r($positive);
echo "<br><br><br>";
?>