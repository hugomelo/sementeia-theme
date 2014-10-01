window.onload = function(ev) {
    var circle_images = jQuery('.circle-image');
    circle_images.each(function(i,c) {
        height = jQuery(c).find('img').height();
        width = jQuery(c).find('img').width();

        divHeight = jQuery(c).height();
        divWidth = jQuery(c).width();

        if (width > height)
        	jQuery(c).find('img').height(divHeight);
        else
        	jQuery(c).find('img').width(divWidth);
    });

    jQuery('body.agenda .conteudo-postagem a').on('click', openEvent );
};


function openEvent(event) {
    event.preventDefault();
  
    var hasClass = jQuery(this).hasClass('active');

    jQuery('body.agenda .conteudo-postagem a').removeClass('active');
    
    if (!hasClass) jQuery(this).addClass('active');
    
    jQuery('body.agenda .conteudo-postagem div.body').removeClass('active');
    
    if (!hasClass) jQuery(this).next('div.body').addClass('active');
}

