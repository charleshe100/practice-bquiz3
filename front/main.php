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
<script>
$(".item").eq(0).show();
let total=$(".btn").length
let now=0;
let next=0;
let timer=setInterval(()=>{slide()},3000)

function slide(n){
    let ani=$(".item").eq(now).data("ani");
    if(typeof(n)=='undefined'){
        next=now+1;
        if(next>=total){
            next=0;
        }
    }else{
        next=n;
    }

    switch(ani){
        case 1:        
            $(".item").eq(now).fadeOut(1000,function(){            
                $(".item").eq(next).fadeIn(1000);
            });
        break;
        case 2:        
            $(".item").eq(now).hide(1000,function(){
                $(".item").eq(next).show(1000);
            });
        break;
        case 3:        
            $(".item").eq(now).slideUp(1000,function(){
                $(".item").eq(next).slideDown(1000);
            });
        break;
    }    
    now=next;
}

// 控制中間的預告片可左右移動
let p=0;
$(".left,.right").on("click",function(){
    let arrow=$(this).attr('class')
    switch(arrow){
        case "right":
            if(p+1<=(total-4)){
                p=p+ 1;
            }
        break;
        case "left":
            if(p-1>=0){
                p=p-1;
            }
        break;
    }
    $(".btn").animate({right:90*p})
})

$(".btn").on('click',function(){
    let idx=$(this).index()
    slide(idx);
})

// 鼠標移入中斷輪播，移出再自動輪播
$(".btns").hover(
    function (){
        clearInterval(timer)
    },
    function(){
        timer=setInterval(()=>{slide()},3000)
    }
)
</script>