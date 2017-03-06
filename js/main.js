/**
 * Created by Administrator on 2017/3/2.
 */
$(function(){
    //加载页面底部
    $("#aside").load("sidebar.html");
    $("#header").load("header.html");
});
//当点击某个二级页的时候，所在导航项高亮显示
function navText(text){
    console.log(text);
    $(".ac-medium ul li").each(function(){ console.log("111");
        var thisText=$(this).text();
        if(text==thisText){
            $(this).addClass("active");
        }
    });
}