$('.preloader-wrapper').delay(500).fadeOut("500");
// Fixed Header
$scroll = $(this).scrollTop();
if($scroll>=100){
	$('body').addClass('fixed-header');
}else{
	$('body').removeClass('fixed-header');
}
$(window).scroll(function(){
	$scroll = $(this).scrollTop();
	if($scroll>=100){
		$('body').addClass('fixed-header');
	}else{
		$('body').removeClass('fixed-header');
	}
});
// Navbar Toggle Button For Mini Device
$('.navbar-menu-toggle-btn').click(function(){
	$('.navbar-main').toggleClass('menu-visible');
	$('body').toggleClass('body-overflow');
});
// Navbar Submenu Make Collapse In Mini Device
$(window).on('load', function() {
    if($(window).width() <= 1024){
    	$('.nav-item-submenu').addClass('collapse');
    }else{
    	$('.nav-item-submenu').removeClass('collapse');
    }
});
$(window).on('resize', function() {
	if($(window).width() <= 1024){
		$('.nav-item-submenu').addClass('collapse');
	}else{
		$('.nav-item-submenu').removeClass('collapse');
	}
	if($(window).width() >= 1024){
	    $('body').removeClass('body-overflow');
    }
});
// Navbar Toggle Button For Mini Device
$(".item-has-submenu .nav-item-link").click(function(e){
    if($(window).width() <= 1024){
    	e.preventDefault();
        $(this).parent().find(".collapse").collapse('toggle');
    }
});
// Home Main Slider
$('.home-main-slider-inner').owlCarousel({
    loop:true,
    margin:0,
    mouseDrag:true,
    autoplay:true,
    // animateOut: 'slideOutDown',
	// animateIn: 'flipInX',
	smartSpeed:1000,
	autoplayTimeout:10000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    dots: true,
    nav:false,
});
// Home-client-opinion-Slider
$('.home-client-opinion-slider-wrapper').owlCarousel({
    loop:true,
    margin:0,
    mouseDrag:true,
    autoplay:true,
    // animateOut: 'slideOutDown',
	// animateIn: 'flipInX',
	smartSpeed:1000,
	autoplayTimeout:6000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
        	margin:0,
            items:3,
        }
    },
    dots: true,
    nav:false,
});

//Visit State Websites after select state on 'where refund' page
$('#refundStateOption').on('change', function(){
    var getState = $(this).val();
        $('#refundFindBtn').attr("href", getState);
    if(getState.legth){
        alert(getState)
    }else{
        return false;
    }
});
$('#refundFindBtn').click(function(e){
    var thislink= $(this).attr("href");
    if(thislink.length < 6){
        return false;
    }
});

// See more/less
$('.news-see-more-btn').text('See More');
$('.news-see-more-btn').click(function(e){
    e.preventDefault();
    thisParent = $(this).closest('.newsletter-item-main').find('.newsletter-item-description');
    $('.newsletter-item-description').not(thisParent).removeClass('show');
    thisParent.toggleClass('show');
    if($(this).text() == 'See More'){
        $(this).text('See Less')
    }else{
        $(this).text('See More')
    }
    var thisDiv = $(this).closest('.newsletter-item-main');
    $('html,body').animate({
    scrollTop: $(thisDiv).offset().top-60});
});

$(window).on('resize', function() {
    if($(window).width() >= 767){
        $('.home-about-us-left-box').parent().css('margin-bottom','40px');
    }
});

//Service Common Section Scroll After Click button
$('.service-content-list-inner .link').click(function(){
    var thisAttr = $(this).attr('data-attr');
    $('.main-content-inner').each(function(){
        var ThisContentAttr = $(this).attr('data-attr');
        if(thisAttr == ThisContentAttr){
            $('html,body').animate({
                scrollTop: $(this).offset().top-110},
            'slow');
        }
    });
});

$('.owl-item.cloned .item').removeClass('gallitem');
$("#product-gallery").lightGallery({
    selector: '.gallitem',
    thumbnail: true,
    autoplay: false,
    fullScreen: true,
    download: false,
    share: false,
    rotate: true,
    counter: false,
    actualSize: false,
    zoom: true,
    autoplayControls: false
}); 

$(document).ready(function() {
    $('.multi-select-ele').select2();
});

// Property Print
function proprtyPrintFunction(){
  window.print();
}

//$('.common-content-section img').parent().css('text-align', 'center');
$('.common-content-section img').parent('p').css('text-align', 'center');