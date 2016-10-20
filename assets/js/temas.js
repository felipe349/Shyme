var cont = 0;
$("#change-theme").click(function(){
    gambiarra();
    cont+=1;
});


var gambiarra = function () {
    if(cont%2 == 0)
        $(document).find("link[href='css/perfil.css']").attr('href', 'css/perfil-black.css');
        
    else 
        $(document).find("link[href='css/perfil-black.css']").attr('href', 'css/perfil.css'); 
}
