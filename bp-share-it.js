jQuery(document).ready(function(){ 
// 	3.3.9 
//		jQuery ('body').on('mouseover click', '.bp-share-it-button-group', function () {
//		jQuery(this).toggleClass('active').next().slideToggle();		
//	});	

// 	3.3.8 , 3.4.1
		jQuery ('body').on('click', '.bp-share-it-button-group', function () {
		jQuery(this).toggleClass('active').next().slideToggle('fast');		
	});	

//	for old vers browsers and WordPress 
//	jQuery('.bp-share-it-button-group.yrgeneric-button').live('click', function(){
//			jQuery(this).toggleClass('active').next().slideToggle('fast');		
//	});	

});
