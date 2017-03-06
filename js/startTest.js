$(function(){
//加载页面头部
    $("#aside").load('sidebar.html',function(){
        navText("开始考试");
        var noteservice='test.html'
        openWinPop(noteservice,'新窗口');
})});
function openWinPop(url,name){
    var feature = "fullscreen=yes,channelmode=yes, titlebar=no, toolbar=no, scrollbars=no," +
        "resizable=yes, status=no, copyhistory=no, location=no, menubar=no,width="+(screen.availWidth) +
        "height="+(screen.availHeight);
    window.open(url,name,feature);
}

