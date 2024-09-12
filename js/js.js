$(".btn").on("click",function(){
    let id=$(this).data('id');
    let sw=$(this).data('sw');
    let table='poster'

    $.post("./api/sw.php",{id,sw,table},()=>{
        location.reload()
    })
})