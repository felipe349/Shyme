$(function(){
    $('span.glyphicon').click(function(){
        
        if($(this).hasClass('glyphicon-star-empty'))
        {
            $(this).removeClass('glyphicon-star-empty')
            $(this).addClass("glyphicon-star");
        }
        
        else {
            $(this).removeClass('glyphicon-star')
            $(this).addClass("glyphicon-star-empty");
        }
    });/* <alteracao> */ 
});
function comun(){
    document.getElementById("com").style.display = "block";
    document.getElementById("duv").style.display = "none";
    document.getElementById("mat").style.display = "none";
}
function duvid(){
    document.getElementById("com").style.display = "none";
    document.getElementById("duv").style.display = "block";
    document.getElementById("mat").style.display = "none";
}
function mater(){
    document.getElementById("com").style.display = "none";
    document.getElementById("duv").style.display = "none";
    document.getElementById("mat").style.display = "block";
}