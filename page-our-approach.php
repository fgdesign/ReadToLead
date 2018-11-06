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

<style>
.speech-bubble-1 {
	position: absolute;
	bottom:0;
	left:0;
	background: #00aabb;
	border-radius: .5vw;
	padding:1vw .85vw 1.25vw;
	color:white;
	font-size: 36px;
	line-height: 1.1em;
	max-width:650px;
	font-weight:300;
	margin: 0 auto;
	
}

.speech-bubble-1:after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 20%;
	width: 0;
	height: 0;
	border: 2vw solid transparent;
	border-top-color: #00aabb;
	border-bottom: 0;
	border-left: 0;
	margin-left: -1vw;
	margin-bottom: -1.9vw;
}
.speech-bubble-2 {
	position: absolute;
	bottom:0;
	right:0;
	background: #ec008c;
	border-radius: .5vw;
	padding:1vw .85vw 1.25vw;
	color:white;
	font-size: 36px;
	line-height: 1.1em;
	max-width:750px;
	font-weight:300;
	margin: 0 auto;
	
	
}

.speech-bubble-2:after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 80%;
	width: 0;
	height: 0;
	border: 2vw solid transparent;
	border-top-color: #ec008c;
	border-bottom: 0;
	border-right: 0;
	margin-left: -1vw;
	margin-bottom: -1.9vw;
}

.speech-bubble-3 {
	
	background: #ec008c;
	border-radius: .5vw;
	padding:1vw .85vw 1.25vw;
	width:text;
	color:white;
	font-size: 36px;
	line-height: 1.1em;
	max-width:750px;
	font-weight:300;
	margin: 0 auto;
	
	
}
</style>
			

			<?php
			while ( have_posts() ) :
				the_post();
?>
				
<div class="container-fluid text-center" style="padding-left:0px;padding-right:0px;">

<div id="fullpage">
    
    <div class="section" id="section1">
    
    <!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	
        
        <!-- page-body start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body-short text-center" style="border:1px solid #f5f5f5;" >
        
        <div class="row">
 <div class="container" style="margin-top:-8px;padding-top:30px;">
 <div class="col-md-10">
	 
	     
        <div id="carouselExampleSlidesOnly" class="carousel carousel-fade" data-ride="carousel" data-interval="6500" data-pause="false">
  <div class="carousel-inner" style="overflow:visible!important;">
    
    
    <div class="carousel-item active js-equal-height"> 
		<div class="speech-bubble-2 animated bounceInRight delay-3"> 
			Aha! Just what I need -- a doctor!
		</div>
	</div><!-- end item-->
    <div class="carousel-item js-equal-height">
		<div class="speech-bubble-1"> 
			Very funny, Sasha. Seriously, how are you feeling?
    	</div>
    </div><!-- end item-->
    <div class="carousel-item js-equal-height">
      	<div class="speech-bubble-2"> 
			A little better, out here. But whatever is causing it, this is the worst allergic reaction I've had in years. As soon as I go into the office, my eyes are watering, I'm coughing constantly. I can't see patients like that!
		</div>
    </div><!-- end item-->
    <div class="carousel-item js-equal-height">
      	<div class="speech-bubble-1 "> 
			Let's try to figure out what's causing this. Remind me what you're allergic to again? I know peanut butter . . .
		</div>
	</div><!-- end item-->
	
    </div><!-- end carousel inner-->
  </div><!-- end carousel -->
	 </div>  
</div><!-- end container -->
</div><!-- end row -->
        
        <div class="container text-left" style="padding-top:100px; "><!--content-->
 			<div class="col-8">
				<?php get_template_part( 'content', 'page' ); ?>
			</div>
    			
    		
    	</div><!-- end top counter segment-->
    	
    	 
		 
    		
        </div><!-- end page-body -->
        
        	<!-- bottom arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#secondPanel"><i class="material-icons">arrow_downward</i></span></div></div>
    		<!-- end bottom arrow-->
    		
    	<div style="position:absolute;bottom:0;overflow:hidden;max-height:85vh;" class="col-4 offset-8">
			<img class="fluid shasha" style="width:100%;" src="https://rtlgames.org/wp-content/uploads/2018/10/sashabig2.png">	
		</div>
		
	</div><!-- END #section1-->			
	
<div class="section" id="section2">	

			<!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	<!-- top arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#firstPanel"><i class="material-icons">arrow_upward</i></span></div></div>
        	<!-- end top arrow-->
        
        <!-- start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body d-flex align-items-center text-center">
        	<div class="container-fluid text-center"><!--content-->
  					<?php
					$post_id = 25;  // specific subpage 
					$queried_post = get_post($post_id);
					?>
					<?php echo $queried_post->post_content; ?>
  			</div><!--end container-->
        </div><!-- end page-body -->
        
        	<!-- bottom arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#thirdPanel"><i class="material-icons">arrow_downward</i></span></div></div>
    		<!-- end bottom arrow-->
    		
    	
</div><!-- END #section2-->

<div class="section" id="section3">

			<!-- menu spacer--><div class="menu-space"></div><!-- end menu spacer-->
        
        	<!-- top arrow--><div class="hold-arrows"><div class="slider-links text-center">
    		<span class="link" data-url="#secondPanel"><i class="material-icons">arrow_upward</i></span></div></div>
        	<!-- end top arrow-->
        
        <!-- start page use "page-body-short" for panels with just one arrow-->
        <div class="page-body-short d-flex align-items-center text-center">
        <div class="container">
			
			
        	
        	
<?php
$post_id = 19;
$queried_post = get_post($post_id);
?>
<?php echo $queried_post->post_content; ?>


</div>
       
        </div><!-- end page-body -->
        
        	
    		
    		<div class="each-footer donate-footer"><div class="atomic-dog invisible"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topdogsmall.png"></div></div>Help students become tomorrow’s leaders!  <a class="btn btn-primary" href="#">DONATE</a></div>
    
    
    


</div><!-- END #section3-->	

</div><!-- END .container-fluid-->
</div><!-- END #fullpage-->		

			<?php endwhile; // end of the loop. ?>


		
		
		<script type="text/javascript"> 
		var anchors = ['firstPanel', 'secondPanel', 'thirdPanel'];
    	var myFullpage = new fullpage('#fullpage', {
        anchors: anchors,
        sectionsColor: ['#f5f5f5', '#fff', '#f5f5f5'],
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
	$('.techdirector').removeClass('invisible');
	$('.techdirector').addClass('animated bounceInLeft delay-1'); 
	$('.claude').removeClass('invisible');
	$('.claude').addClass('animated bounceInRight delay-3'); 
	
  	
}
function slide2Out(){
	console.log("Section secondPage animates out");
	$('.techdirector').removeClass('animated bounceInLeft delay-1'); 	
    $('.techdirector').addClass('invisible');
    $('.claude').removeClass('animated bounceInRight delay-3');
	$('.claude').addClass('invisible'); 
	
  	
}
function slide3In(){
	console.log("Section thirdPage animates in");	
	$('.atomic-dog').addClass('animated fadeInUp delay-3'); 	//will break if the class doesn't exist//
    $('.atomic-dog').removeClass('invisible');
  	
}
function slide3Out(){
	console.log("Section thirdPage animates out");
	$('.atomic-dog').addClass('invisible');
    $('.atomic-dog').removeClass('animated fadeInUp delay-3'); 	//will break if the class doesn't exist//
    
 	
}

</script>

<script>$('.link').click(function(){
  location.href = $(this).attr('data-url');
});</script>

<script>
function heightsEqualizer(selector) {
    var elements = document.querySelectorAll(selector),
        max_height = 0,
        len = 0,
        i;
 
    if ( (elements) && (elements.length > 0) ) {
        len = elements.length;
 
        for (i = 0; i < len; i++) { // get max height
			elements[i].style.height = ''; // reset height attr
            if (elements[i].clientHeight > max_height) {
                max_height = elements[i].clientHeight;
            }
        }
 
        for (i = 0; i < len; i++) { // set max height to all elements
            elements[i].style.height = max_height + 'px';
        }
    }
}
 
if (document.addEventListener) {
    document.addEventListener('DOMContentLoaded', function() {
        heightsEqualizer('.js-equal-height');
    });
	window.addEventListener('resize', function(){
		heightsEqualizer('.js-equal-height');
	});
}
 
setTimeout(function () { // set 1 second timeout for having all fonts loaded
	heightsEqualizer('.js-equal-height');
}, 10);
</script>

<script>
$(document).ready(function(){ 
    
    $("#carouselExampleSlidesOnly").on('slid.bs.carousel', function () {
        $('.speech-bubble-1').addClass('animated bounceInLeft'); 
        $('.speech-bubble-2').addClass('animated bounceInRight'); 
    });
});
</script>

<div class="speech-bubble-3 js-equal-height" style="position: absolute:top:-400px;left:-500px;opacity:0;"> 


A little better, out here. But whatever is causing it, this is the worst allergic reaction I've had in years. As soon as I go into the office, my eyes are watering, I'm coughing constantly. I can't see patients like that!
</div>

<?php get_footer(); ?>
