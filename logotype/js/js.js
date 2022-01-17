$(document).ready(function(){
    $('header .exit').click(function(){
        $('header nav').css('display' , 'none');
        $('header .exit').css('display' , 'none');
        $('header .open').css('display' , 'block');
        $('header .container').css('flex-direction' , 'row');
        $('header .container').css('align-items' , 'baseline');
    })
    $('header .open').click(function(){
        $('header nav').css('display' , 'flex');
        $('header .open').css('display' , 'none');
        $('header .exit').css('display' , 'block');
        $('header .container').css('flex-direction' , 'column');
        $('header .container').css('align-items' , 'center');
    })
    $(window).resize(function() {
        if($(window).width() >= 768){
            $('header nav').css('display' , 'flex');
            $('header .open').css('display' , 'none');
            $('header .exit').css('display' , 'none');
            $('header .container').css('align-items' , 'center');
			$('header .container').css('flex-direction' , 'row');
        };
		$('header .container').css('flex-direction' , 'row');
        if($(window).width() <= 768){
            $('header nav').css('display' , 'none');
            $('header .open').css('display' , 'block');
            $('header .exit').css('display' , 'none');
			
            $('header .container').css('align-items' , 'baseline');
        }
		
    })
	 if($(window).width() <= 768){
            $('header nav').css('display' , 'none');
            $('header .open').css('display' , 'block');
            $('header .exit').css('display' , 'none');
			
            $('header .container').css('align-items' , 'baseline');
        }
        
})