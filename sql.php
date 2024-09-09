<?php
for($i=0;$i<9;$i++){
    //建立一個序列化的陣列字串
    $seats=serialize([$i*2,$i*2+1]);

    //sql字串中可以代入變數來增加sql語法的變化
    $sql="INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) 
            VALUES (NULL, '20230911000{$i}', '院線片0{$i}', '2023-09-10', '14:00~16:00', '2', '{$seats}');";
    echo $sql;   
    echo "<br>";
}
?>