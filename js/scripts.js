$(function(){
    //Aqui vai todo nosso código javascript.
    $('nav.mobile').click(function(){
    //O que vai acontecer quando clicarmos no nav.mobile
    var listaMenu = $('nav.mobile ul');
    

if(listaMenu.is(':hidden') == true){
    //var incone = $('botao-menu-mobile i');
    var incone = $('.botao-menu-mobile').find('i');
    incone.removeClass('fa fa-bars');
    incone.addClass('fa fa-times');
    listaMenu.slideToggle();
}
    else{

    var incone = $('.botao-menu-mobile').find('i');
    incone.removeClass('fa fa-times');
    incone.addClass('fa fa-bars');
    listaMenu.slideToggle();
}

    });

    if($('target').length > 0){
        //O elemento existe, portanto precisamos dar o scroll em algum elemento.
        var elemento = '#'+$('target').attr('target');

        var divScroll = $(elemento).offset().top;

        $('html,body').animate({scrollTop:divScroll},2000);
    }
})
