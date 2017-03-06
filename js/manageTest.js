$(function(){
//加载页面头部
    $("#aside").load('sidebar.html',function(){
        navText("管理试题");
    })});
layui.use('form', function(){
    var $ = layui.jquery, form = layui.form();

    //全选
    form.on('checkbox(allChoose)', function(data){
        var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
        child.each(function(index, item){
            item.checked = data.elem.checked;
        });
        form.render('checkbox');
    });

});