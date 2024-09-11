<style>
    .item{
        display: flex;
        padding:3px;
        margin:3px;
        justify-content:space-between;
        align-items: center;
        background-color: white;
    }
    .item div{
        width:24.5%;
        margin:0 0.25%;
        text-align:center;
    }
</style>
<div>
<h3 class='ct'>預告片清單</h3>
<!--獨立一個區塊使用flex來放置欄位名稱-->
<div style="display:flex;justify-content:space-between">
    <div class="ct" style="width:24.5%;margin:0 0.25%">預告片海報</div>
    <div class="ct" style="width:24.5%;margin:0 0.25%">預告片片名</div>
    <div class="ct" style="width:24.5%;margin:0 0.25%">預告片排序</div>
    <div class="ct" style="width:24.5%;margin:0 0.25%">操作</div>
</div>
<!--建立表單用來傳送需要編輯的資料-->
<form action="./api/edit_poster.php" method="post">
<!--設定編輯區塊的高度，並設定overflow:auto讓滾軸顯示-->    
<div style="width: 100%;height: 190px;overflow:auto">
<?php
//取得所有的預告片海報資料，同時依照rank欄位進行排序
$pos=$Poster->all(" order by rank");

//使用迴圈來列出所有的預告片海報資料
foreach($pos as $idx => $po){
?>
<div class="item">
    <div>
        <!--顯示預告片海報圖片-->
        <img src="./img/<?=$po['img'];?>" style="width:60px;height:80px">
    </div>
    <div>
        <!--顯示預告片名稱-->
        <input type="text" name="name[]" value="<?=$po['name'];?>">
    </div>
    <div>
        <!--利用data屬性來計算出前一筆和下一筆的id-->
        <input class='btn' type="button" value="往上" 
            data-id="<?=$po['id'];?>" 
            data-sw="<?=($idx!==0)?$pos[$idx-1]['id']:$po['id'];?>">

        <input class='btn' type="button" value="往下" 
            data-id="<?=$po['id'];?>" 
            data-sw="<?=((count($pos)-1)!=$idx)?$pos[$idx+1]['id']:$po['id'];?>">
    </div>
    <div style='color:black'>
        <!--建立一個隱藏欄位id，在後端可用來做為資料比對用-->
        <input type="hidden" name="id[]" value="<?=$po['id'];?>">
        <!-- input:checkbox*2+select>option*3 -->
        <input type="checkbox" name="sh[]" value="<?=$po['id'];?>" <?=($po['sh']==1)?'checked':'';?>>顯示
        <input type="checkbox" name="del[]" value="<?=$po['id'];?>">刪除
        <select name="ani[]" id="">
            <option value="1" <?=($po['ani']==1)?'selected':'';?>>淡入淡出</option>
            <option value="2" <?=($po['ani']==2)?'selected':'';?>>縮收</option>
            <option value="3" <?=($po['ani']==3)?'selected':'';?>>滑入滑出</option>
        </select>
    </div>
</div>
<?php
}
?>
</div>
<div class='ct'>
    <input type="submit" value="編輯確定">
    <input type="reset" value="重置">
</div>
</form>