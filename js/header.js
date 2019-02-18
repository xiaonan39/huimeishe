/**
 * Created by 小城 on 2019/2/11.
 */

$("#h_nav li").mousemove(function(){
    $(".nav_bg").css("display","block");
    $(".product li").appendChild($(menu))
});
$(".stealth").mouseout(function(){
    $(".nav_bg").css("display","none")
})

