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

};

