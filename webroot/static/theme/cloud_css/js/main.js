/**
 * Created by Amy on 14-6-2.
 */
function get_main_content($name){
    $.cookie("module",$name);
    var url = "/theme/cloud/cssmodule";
    $.get(url,{"name":$name},function(data){
        if(data.indexOf('{"result":{"msg"') == 0){
            data = $.parseJSON(data);
            console.log(data.result);
            //alert(JSON.stringify(data.result));
        }else{
            $("#main-content").html(data);
        }
    });
}
function print_code($obj){
    var html = '<div class="content overflow-hidden">';
    html += '<h3>< Code ></h3><hr><pre class="print_pre"><code></code></pre>';
    html += '</div>';
    var tabsize = 4
    var tabchar = " ";
    $obj.each(function(){
        var code = $(this).html();
        code = style_html(code, tabsize, tabchar, 0)
        console.log(code)
        $(this).after(html);
        var code_obj = $(this).next().find("code");
        code_obj.text(code);
        init_code(code_obj);
    });
}
function init_code($obj){
    $obj.each(function(i, e) {hljs.highlightBlock(e)});
}
$(function(){
    $(".sub-menu a").click(function(){
        $(".sub-menu li").removeClass("active");
        $(this).parent().addClass("active");
    });
    $(".sidebar-menu a").click(function(){
        var href = $(this).attr("href");
        if(href == "#"){
            return true;
        }else{
            get_main_content(href);
            return false;
        }
    });
    if($.cookie("module")){
        $name = $.cookie("module");
    }else{
        $name = "dashboard";
    }
    get_main_content($name);
})


