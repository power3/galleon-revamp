$(document).ready(function(e) {
    $("#nav").find("ul").hide();
});
$("#nav").find("li").hover(function(){$(this).find("ul").fadeIn(100);$(this).css({"background-color":"#d23956"});$(this).find("a b").css({"color":"#ffffff"});},function(){$(this).find("ul").fadeOut(100);$(this).css("background","none");$(this).find("a b").css({"color":"#d23956"});});