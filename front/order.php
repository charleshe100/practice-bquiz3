<!--訂票選單-->
<div id='select'>
<h3 class="ct">線上訂票</h3>
<div class="order">
    <div>
        <label>電影：</label>
        <select name="movie" id="movie">
        </select>
    </div>
    <div>
        <label>日期：</label>
        <select name="date" id="date"></select>
    </div>
    <div>
        <label>場次</label>
        <select name="session" id="session"></select>
    </div>
    <div>
    <div id="select">
        <input type="button" value="確定" onclick="$('#select,#booking').toggle()">
        <input type="reset" value="重置">
    </div>
    <div id="booking" style="display:none">
        <button onclick="$('#select,#booking').toggle()">上一步</button>
        <button>訂購</button>
    </div>
    </div>
</div>
</div>
<script>
//利用URL API建立目前的網址物件
let url=new URL(window.location.href)

//使用PHP來取得網址參數
let id=<?=$_GET['id']??0;?>;

//取得可訂票院線片清單
function getMovies(){
    $.get("./api/get_movies.php",(movies)=>{
        $("#movie").html(movies);
        if(url.searchParams.has('id')){
            $(`#movie option[value='${url.searchParams.get('id')}']`).prop('selected',true);
        }
        getDates($("#movie").val())
    })
}

//取得選中的院線片可訂票日期
function getDates(id){
    $.get("./api/get_dates.php",{id},(dates)=>{
            $("#date").html(dates);
            let movie=$("#movie").val()
            let date=$("#date").val()
            getSessions(movie,date)
    })
}

//取得選中的院線片及指定日期的可訂票場次剩餘座位
function getSessions(movie,date){
    $.get("./api/get_sessions.php",{movie,date},(sessions)=>{
            $("#session").html(sessions);
    })
}

//註冊電影及日期選單的內容被選中時要連帶變動的下一個選單事件
$("#movie").on("change",function(){
    getDate($(this).val())
})
$("#date").on("change",function(){
    getSessions($("#movie option:selected").text(),$(this).val())
})

</script>