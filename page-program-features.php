<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


	

			<?php
			while ( have_posts() ) :
				the_post();
?>
				
<div class="container-fluid text-center" style="padding-left:0px;padding-right:0px;">

<div id="fullpage">
    
    <div class="section fp-auto-height-responsive" id="section1" style="overflow:hidden;">
    
    <!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	
        
        <!-- page-body start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body-short d-flex align-items-center text-center">
        
        <div class="container-fluid text-center"><!--content-->
 			
    			<?php get_template_part( 'content', 'page' ); ?>
    		
    	</div><!-- end top counter segment-->
    	
    	 
		 
    		
        </div><!-- end page-body -->
        
        	<!-- bottom arrow--><div class="hold-arrows" style="z-index:1;"><div class="slider-links text-center">
    		<span class="link" data-url="#secondPanel"><i class="material-icons">arrow_downward</i></span></div></div>
    		<!-- end bottom arrow-->
    		
    		
		
	</div><!-- END #section1-->			
	
<div class="section fp-auto-height-responsive" id="section2">	

			<!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	<!-- top arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#firstPanel"><i class="material-icons">arrow_upward</i></span></div></div>
        	<!-- end top arrow-->
        
        <!-- start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body d-flex align-items-center text-center">
        	<div class="container-fluid text-center"><!--content-->
  					<?php
					$post_id = 507;  // specific subpage 
					$queried_post = get_post($post_id);
					?>
					<?php echo $queried_post->post_content; ?>
  			</div><!--end container-->
        </div><!-- end page-body -->
        
        	<!-- bottom arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#thirdPanel"><i class="material-icons">arrow_downward</i></span></div></div>
    		<!-- end bottom arrow-->
    		
    	
</div><!-- END #section2-->

<div class="section fp-auto-height-responsive" id="section3">	

			<!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	<!-- top arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#secondPanel"><i class="material-icons">arrow_upward</i></span></div></div>
        	<!-- end top arrow-->
        
        <!-- start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body d-flex align-items-center text-center">
        	<div class="container-fluid text-center"><!--content-->
  					<?php
					$post_id = 509;  // NEWWW specific subpage 
					$queried_post = get_post($post_id);
					?>
					<?php echo $queried_post->post_content; ?>
  			</div><!--end container-->
        </div><!-- end page-body -->
        
        	<!-- bottom arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#fourthPanel"><i class="material-icons">arrow_downward</i></span></div></div>
    		<!-- end bottom arrow-->
 
 



    	
</div><!-- END #section3-->

<div class="section fp-auto-height-responsive" id="section4" style="background:url(https://rtlgames.org/wp-content/uploads/2018/10/wall2.jpg) no-repeat;background-size:cover">	

			<!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	<!-- top arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#thirdPanel"><i class="material-icons" style="color:white">arrow_upward</i></span></div></div>
        	<!-- end top arrow-->
        
        <!-- start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body d-flex align-items-center text-center">
        	<div class="container-fluid text-center"><!--content-->
  					<?php
					$post_id = 511;  // specific subpage 
					$queried_post = get_post($post_id);
					?>
					<?php echo $queried_post->post_content; ?>
  			</div><!--end container-->
        </div><!-- end page-body -->
        
        	<!-- bottom arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#fifthPanel"><i class="material-icons" style="color:white">arrow_downward</i></span></div></div>
    		<!-- end bottom arrow-->
    		
    	
</div><!-- END #section4-->

<div class="section fp-auto-height-responsive" id="section5">

			<!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	<!-- top arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#fourthPanel"><i class="material-icons">arrow_upward</i></span></div></div>
        	<!-- end top arrow-->
        
        <!-- start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body-short d-flex align-items-center text-center">
        
        	<div class="container-fluid">
<?php
$post_id = 502;
$queried_post = get_post($post_id);
?>
<?php echo $queried_post->post_content; ?>


</div>
       
        </div><!-- end page-body -->
        
        	
    		
    		<div class="each-footer donate-footer"><div class="atomic-dog invisible"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topdogsmall.png"></div></div>Help students become tomorrow’s leaders! <a class="btn btn-primary" href="https://rtlgames.org/donate/">DONATE</a></div>
    
    
    


</div><!-- END #section5-->	

</div><!-- END .container-fluid-->
</div><!-- END #fullpage-->		

 <!-- Modal -->
<div class="modal fade" id="EmailForm" role="dialog" aria-labelledby="EmailFormTitle" aria-hidden="true" z-index:2000000000 !important>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">We Should Get to Know Each Other Better!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php echo do_shortcode("[ninja_form id=1]"); ?>
      </div>
     
    </div>
  </div>
</div><!-- End Modal -->

			<?php endwhile; // end of the loop. ?>


		
		
		<script type="text/javascript"> 
		var anchors = ['firstPanel', 'secondPanel', 'thirdPanel', 'fourthPanel', 'fifthPanel'];
    	var myFullpage = new fullpage('#fullpage', {
        anchors: anchors,
        sectionsColor: ['#f5f5f5', '#fff', '#f5f5f5', '#fff', '#f5f5f5'],
        fixedElements: '#header',
        scrollOverflow: true,
        responsiveWidth: 992,						//width were fullpage scroll is disabled//
        afterResponsive: function(isResponsive){

        },
        
        afterLoad: function(origin, destination, direction){
			if(origin){
				switch (origin.anchor) {
					case anchors[0]:
						slide1Out();
						break;
					case anchors[1]:
						slide2Out();
						break;
					case anchors[2]:
						slide3Out();
						break;
					case anchors[3]:
						slide4Out();
						break;
					case anchors[4]:
						slide5Out();
						
						
				}
			}
			if(destination){
				switch (destination.anchor) {
					case anchors[0]:
						slide1In();
						break;
					case anchors[1]:
						slide2In();
						break;
					case anchors[2]:
						slide3In();
						break;
					case anchors[3]:
						slide4In();
						break;
					case anchors[4]:
						slide5In();
						
				}
			}			
		}
        
        

  
    });
    
    
    
function slide1In(){
	console.log("Section firstPage animates in");

}
function slide1Out(){
	console.log("Section firstPage animates out");

}
			
			
function slide2In(){
	console.log("Section secondPage animates in");

  	
}
function slide2Out(){
	console.log("Section secondPage animates out");

  	
}
function slide3In(){
	console.log("Section thirdPage animates in");
	$('.debate-1').addClass('animated bounceInLeft delay-1'); 	
    $('.debate-1').removeClass('invisible');
    $('.debate-2').addClass('animated bounceInUp delay-3'); 	
    $('.debate-2').removeClass('invisible');
    $('.debate-3').addClass('animated bounceInRight delay-5'); 	
    $('.debate-3').removeClass('invisible');
   setTimeout(function() {
    $('#EmailForm').modal();
}, 5000);
 	
}
function slide3Out(){
	console.log("Section thirdPage animates out");
	$('.debate-1').removeClass('animated bounceInLeft delay-1'); 	
    $('.debate-1').addClass('invisible');
    $('.debate-2').removeClass('animated bounceInUp delay-3'); 	
    $('.debate-2').addClass('invisible');
    $('.debate-3').removeClass('animated bounceInRight delay-5'); 	
    $('.debate-3').addClass('invisible');
	
}
function slide4In(){
	console.log("Section fourthPage animates in");
	
    
  	
}
function slide4Out(){
	console.log("Section fourthPage animates out");
	
    
 	
}
function slide5In(){
	console.log("Section fifthPage animates in");
	$('.atomic-dog').addClass('animated fadeInUp delay-3'); 	//will break if the class doesn't exist//
    $('.atomic-dog').removeClass('invisible');
	
    
  	
}
function slide5Out(){
	console.log("Section fifthPage animates out");
	$('.atomic-dog').addClass('invisible');
    $('.atomic-dog').removeClass('animated fadeInUp delay-3'); 	//will break if the class doesn't exist//
   
    
 	
}

</script>

<script>$('.link').click(function(){
  location.href = $(this).attr('data-url');
});</script>



<?php get_footer(); ?>
