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
$slug_exclude = 'exclude';
$category_exclude = get_category_by_slug($slug_exclude);
?>


<div class="container" style="margin-top:100px;" >




<h1 style="color:#ccc;">Learning Center</h1>

<div id="MyCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000" style="background:#f5f5f5">
   <!-- Wrapper for slides -->
		    <div class="carousel-inner">

				<?php
				$slug = 'learning_page_slider';
				$category = get_category_by_slug($slug);
				query_posts('cat=' . $category->cat_ID . '&posts_per_page=7');
				$count=0;
				?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				

				      					      	<div class="carousel-item <?php if($count<1) echo 'active' ?>" style="padding:15px 15px 5px;">
				      		<a style="color:black;text-decoration:none;" href="<?php 
												if($link['url'] != ""){
													echo $link['url'];
												} else {
													the_permalink();
												}
											?>"><div class="row">
				      			<div class="col-3">
				      					<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
				      			</div>	<!-- end col-3 -->
				      		<div class="col-9">
					      	
					      		<h5><?php the_title(); ?></h5>		      			
									<p><?php the_author(); ?></p>
									<p><?php the_excerpt(); ?></p> 
					      		
				      		</div><!-- end col-9 -->
				      		</div> <!-- end row --></a>
				      	</div> <!-- end carousel -->

				<?php $count++; ?>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>  <!-- end carousel -->
 
		    	
		    	
		    	
		    
</div>
<!-- Left and right controls -->
<div class="col-md-9 offset-md-3" style="height:0px;overflow:visible;position:relative;top:-50px;">
		    	<a href="#MyCarousel" role="button" data-slide="prev" style="color:#ec008c;">
		      			<span aria-hidden="true"><i class="material-icons" style="font-size:2.25em;">
arrow_back
</i></span>
    					<span class="sr-only">Previous</span>
		    	</a>
		    	<a href="#MyCarousel" role="button" data-slide="next" style="color:#ec008c;float:right;">
		      		 	<span aria-hidden="true"><i class="material-icons" style="font-size:2.25em;">
arrow_forward
</i></span>
    					<span class="sr-only">Next</span>
		    	</a>
		</div>
</div><!-- End Carousel -->





<!-- Collapse Component -->
<button type="button" class="readmore btn btn-info collapsed" data-toggle="collapse" data-target="#demo"></button><h5 style="margin-top:20px;">About our contributors</h5>
  <div id="demo" class="collapse" style="margin-top:10px;">
    
<div class="row">

<div class="col-3 text-center">
<!-- Button trigger modal -->
<a class="pop-up-bio" data-toggle="modal" href="#BioAlison" style="border: none !important;border: 1px solid blue;">
  	<div class="author-image" style="width:100%;">
		<img class="img-fluid" style="width:100%;" src="https://rtlgames.org/wp-content/uploads/2018/10/AlisonNew.png">
	</div>
	<div class="author-title">
		Alison Tepper
	</div>
</a>
</div>



<div class="col-3 text-center">
<!-- Button trigger modal -->
<a class="pop-up-bio" data-toggle="modal" href="#BioRachel" style="border: none !important;">
  	<div class="author-image" style="width:100%;">
		<img class="img-fluid" style="width:100%;height:auto;" src="https://rtlgames.org/wp-content/uploads/2018/10/rachaelNew.png">
	</div>
	<div class="author-title">
		Rachel Samuel
	</div>
</a>
</div>



</div><!-- row -->

<!-- Modal -->
<div class="modal fade" id="BioAlison" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alison Tepper</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="author-image">
	<img src="https://rtlgames.org/wp-content/uploads/2018/10/AlisonNew.png">
	</div>
	<p><strong>Director of Content and Curriculum</strong></p>
        <p>Ali is leading Classroom Inc.’s Online Educator Support Project to create web-based professional development and resources that will enable teachers to use our newest games successfully. Ali is a New York University graduate with an M.A. in Elementary Education from the University of South Florida. With a lifelong appreciation for children’s literature, her focus in education has been to create engaging literacy curricula while supporting teachers. Ali has taught in several high-need areas in Florida, New York, and Rhode Island. She served as the lead 2nd grade ELA teacher in East New York, Brooklyn for three years. During this time Ali mentored teachers in reading and writing instruction at TFA Institute and wrote curriculum for Amplify. She was awarded a Fulbright scholarship to Cyprus where she created a cross-cultural blog for American and Cypriot elementary students. Most recently, as Manager of Curriculum and Instruction at Advancement Courses, she helped develop online professional development courses for K-12 educators and wrote proposals for course approval in several districts across the US.</p>      </div>
      <div class="modal-footer">
        <a href="https://rtlgames.org/author/alison-tepper/" class="btn btn-primary">See all articles by Alison</a>
      </div>
    </div>
  </div>
</div><!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="BioRachel" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Rachel Samuel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="author-image">
	<img src="https://rtlgames.org/wp-content/uploads/2018/10/rachaelNew.png">
	</div>
	<p><strong>Product Marketing Manager</strong></p>
        <p>Rachel Samuel leads our marketing and communication strategy. Her vision is to help educators find, use, and enjoy Classroom, Inc. products. Our users are her top priority. She works with the team to create fresh and relevant content to share our story with the world.Rachel has led marketing efforts at two large organizations. Before Classroom Inc., Rachel worked for TIME for Kids, a K-8 current events magazine. She also piloted Amazon Art’s marketing and merchandising program. Rachel graduated with honors from the University of Washington in Seattle, WA. In her spare time, she writes a blog about faith, culture, and identity.</p>      
        </div>
      <div class="modal-footer">
        <a href="https://rtlgames.org/author/rachel-samuel/" class="btn btn-primary">See all articles by Rachel</a>
      </div>
    </div>
  </div>
</div><!-- End Modal -->


  </div><!-- End Collapse Component -->
  



<div class="row learn-articles" style="margin-top:30px;">
<?php
				$slug = 'learning-center';
				$category = get_category_by_slug($slug);
				query_posts('cat=' . $category->cat_ID . '&posts_per_page=24');
				$count=0;
				?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  	<div class="col-sm-3" style="float:left;">
  	<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
				      	
   		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	<p class="card-text"><?php the_excerpt(); ?></p>
        
	</div> <!-- col-sm-3-->
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	
	  
</div><!-- row --->


<?php get_footer(); ?>
