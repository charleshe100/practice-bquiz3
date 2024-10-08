<button onclick="location.href='?do=add_movie'">新增電影</button>
<hr>
<?php
$movies=$Movie->all(" order by rank");
foreach($movies as $idx => $movie){
?>

<div class="item">
    <div>
        <img src="./img/<?=$movie['poster'];?>" style="width:100%">
    </div>
    <div>
        分級:<img src='./icon/03C0<?=$movie['level'];?>.png' style='width:25px'>
    </div>
    <div>
        <div style="display:flex;width:100%">
            <div style="width:33.33%">
                片名:<?=$movie['name'];?>
            </div>
            <div style="width:33.33%">
                片長:<?=$movie['length'];?>
            </div>
            <div style="width:33.33%">
                上映時間:<?=$movie['ondate'];?>
            </div>
        </div>
        <div>
            <button class='show-btn' data-id="<?=$movie['id'];?>"><?=($movie['sh']==1)?'顯示':'隱蔵';?></button>
            <button class='sw-btn'  
                  data-id="<?=$movie['id'];?>" 
                  data-sw="<?=($idx!==0)?$movies[$idx-1]['id']:$movie['id'];?>">往上</button>
            <button class='sw-btn' 
                  data-id="<?=$movie['id'];?>" 
                  data-sw="<?=((count($movies)-1)!=$idx)?$movies[$idx+1]['id']:$movie['id'];?>">往下</button>
            <button class="edit-btn" data-id="<?=$movie['id'];?>">編輯電影</button>
            <button class="del-btn" data-id="<?=$movie['id'];?>">刪除電影</button>
        </div>
        <div>
            劇情介紹:<?=$movie['intro'];?>
        </div>
    </div>
</div>
<?php
}
?>
</div>
<script>
// 編輯按鈕
$(".edit-btn").on("click",function(){
    let id=$(this).data('id');
    location.href=`?do=edit_movie&id=${id}`;
})
// 刪除按鈕
$(".del-btn").on("click",function(){
    $.post("./api/del.php",{table:'Movie',id:$(this).data('id')},()=>{
        location.reload()
    })
})

// 顯示隱藏按鈕
$(".show-btn").on("click",function(){
    let id=$(this).data('id');
    $.post("./api/show.php",{id},()=>{
    })
})

// 排序按鈕
$(".sw-btn").on("click",function(){
    let id=$(this).data('id');
    let sw=$(this).data('sw');
    let table='movie'
    $.post("./api/sw.php",{id,sw,table},()=>{
        location.reload() 
    })
})
</script>