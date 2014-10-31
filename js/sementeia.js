window.onload = function() {
    var circle_images = jQuery('.circle-image');
    circle_images.each(function(i,c) {
        var height = jQuery(c).find('img').height();
        var width = jQuery(c).find('img').width();

        var divHeight = jQuery(c).height();
        var divWidth = jQuery(c).width();

        if (width > height) {
        	c = jQuery(c);
        	c.find('img').height(divHeight);
			cWidth = c.width();
			width = c.find('img').width();

			w = (cWidth-width)/2;
			c.find('img').css({marginLeft: w})
        }
        else {
        	c = jQuery(c);
        	c.find('img').width(divWidth);
			cHeight = c.height();
			height = c.find('img').height();

			h =(cHeight-height)/2;
			c.find('img').css({marginTop: h})
        }

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

