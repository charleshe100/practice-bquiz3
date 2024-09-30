<?php include_once 'db.php';
$movie=$_GET['id'];
// 兩天前的日期
$ondate=strtotime($Movie->find($movie)['ondate']);
// 計算可訂票的日期
$end=strtotime("+2 days",$ondate);
// 今天的日期秒數
$today=strtotime(date("Y-m-d"));

// 可訂票的天數
$diff=($end-$today)/(60*60*24);

for($i=0;$i<=$diff;$i++){
    $date=date("Y-m-d",strtotime("+$i days"));
    echo "<option value='$date'>$date</option>";
}
?>