<div class="half" style="vertical-align:top;">
    <h1>預告片介紹</h1>
    <div class="rb tab" style="width:95%;">
        <!--海報區-->
        <div class="lists">
            <?php
            $posters=$Poster->all(['sh'=>1]," order by rank");
            foreach($posters as $idx => $poster){
            ?>
            <div class="item" data-ani="<?=$poster['ani'];?>">
                <div><img src="./img/<?=$poster['img'];?>" alt=""></div>
                <div><?=$poster['name'];?></div>
            </div>
            <?php
            }
            ?>
        </div>

        <!--按鈕區-->
        <div class="controls">
            <div class="left"></div>
            <div class="btns">
            <?php
            foreach($posters as $idx =>$poster ){
            ?>
            <div class="btn">
                <div><img src="./img/<?=$poster['img'];?>"></div>
                <div><?=$poster['name'];?></div>
            </div>
            <?php 
            }
            ?>
            </div>
            <div class="right"></div>
        </div>
    </div>
</div>