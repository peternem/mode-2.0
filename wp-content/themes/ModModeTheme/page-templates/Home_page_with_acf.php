<?php

/**
 * Template Name: Home Page - Full Width w/ACF x
 * The template used for displaying page content in page.php
 *
 * @author Mpeternell
 * @package upBootWP 0.1
 */
get_header(); ?>

<!-- Carousel ================================================== -->

<div class="jumbotron">
    <div id="myCarousel" class=" carousel slide container" data-ride="carousel" >
	    <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	        <li data-target="#myCarousel" data-slide-to="3"></li>
	        <li data-target="#myCarousel" data-slide-to="4"></li>
	        <li data-target="#myCarousel" data-slide-to="5"></li>
	        <li data-target="#myCarousel" data-slide-to="6"></li>
	        <li data-target="#myCarousel" data-slide-to="7"></li>
	        <li data-target="#myCarousel" data-slide-to="8"></li>
	    	<li data-target="#myCarousel" data-slide-to="9"></li>
	    	<li data-target="#myCarousel" data-slide-to="10"></li>
	    </ol>
		<div class="carousel-inner">
	        <div class="item active">
	          	<img src="<?php header_image(); ?>" alt="Welcome to Mode Distributing" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	            		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Mode Distributing<?php //the_title(); ?></h1>
		            			<?php //if(function_exists('the_subtitle')) the_subtitle( '<p class="subtitle">', '</p>');?>
		            			<p class="subtitle">The premier home appliance distributor in the Western United States.</p>
		            		</div>
					 		<div class="col-xs-3 col-sm-2 col-md-2">
					 			<div class="btn-group"><a class="btn btn-sm btn-primary" href="#mrktg-content" role="button">Learn More &raquo;</a></div>
							</div>
		        		</div>
	            	</div>
	          	</div>
	        </div>
	        <div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/11/mode_vah_hero_image_6.1.jpg" alt="Vent-A-Hood" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	            		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Vent-A-Hood</h1>
	              				<p>Providing a vast range of options to meet your ventilation needs.</p>
					  		</div>
					  		<div class="col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/vent-a-hood/" role="button">Visit page &raquo;</a></div>
					  		</div>
						</div>
					</div>
	          </div>
	        </div>
	        <div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2013/11/mode_marvel_hero_image_8.1.jpg" alt="Marvel" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	            		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Marvel</h1>
	              				<p>The undisputed leader in refrigeration technology.</p>		
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/marvel/" role="button">Visit page &raquo;</a></div>
					  		</div>
						</div>
					</div>
	          	</div>
	        </div>
	        <div class="item">
	        	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/06/mode_lynx_hero_image_1_REVISED.jpg" alt="Lynx" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	               		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Lynx</h1>
	              				<p>Exquisite professional appliances for your outdoor kitchen.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/lynx/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	             	</div>
	          	</div>
	        </div>
	       	<div class="item">
	        	<img src=" <?php get_site_url(); ?>/wp-content/uploads/2014/11/mode_sedona_hero_image_2.jpg" alt="Lynx" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	               		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Sedona by Lynx</h1>
	              				<p>Quality products designed with the family in mind.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/sedona-by-lynx/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	             	</div>
	          	</div>
	        </div>
	        
	        <div class="item">
	          <img src="<?php get_site_url(); ?>/wp-content/uploads/2014/06/hero_img_caliber_grill.jpg" alt="Lynx" class="img-responsive">
	          <div class="container">
	            <div class="carousel-caption">
	            	<div class="row">
					  	<div class="col-xs-9 col-sm-10 col-md-10">
					  		<h1>Caliber</h1>
					  		<p>Outstanding culinary design and elegant engineering for your outdoor collection.</p>
					  	</div>
					  	<div class="col-xs-3 col-sm-2 col-md-2">
					  		<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/caliber/" role="button">Visit Page &raquo;</a></div>
					  	</div>
					</div>
	            </div>
	          </div>
	        </div>
	       	<div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/06/mode_aga_hero_image_4.jpg" alt="AGA" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	            		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>AGA</h1>
	              				<p>Exceptional quality and style in high performance stoves, ovens, and ranges.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/aga/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	          		</div>
	          	</div>
	        </div>
	        <div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/06/mode_amer_range_hero_image_3.jpg" alt="American Range" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	                	<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>American Range</h1>
	              				<p>Inspired by a passion for perfection of the residential home range.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/american-range/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	            	</div>
	          	</div>
	        </div>
	        <div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/10/mode_verona_hero_image_1.jpg" alt="Verona" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	                	<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Verona</h1>
	              				<p>Stunning European designs perfect for any kitchen.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/verona/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	            	</div>
	          	</div> 
	        </div>
	        <div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/10/mode_ilve_hero_image_2.jpg" alt="ILVE" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	               		<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>ILVE</h1>
	              				<p>Capturing the beauty, style, and performance of custom Italian ranges.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/ilve/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	            	</div>
	          	</div> 
	        </div>
	        <div class="item">
	          	<img src="<?php get_site_url(); ?>/wp-content/uploads/2014/10/mode_heartland_hero_image_1.jpg" alt="Heartland" class="img-responsive">
	          	<div class="container">
	            	<div class="carousel-caption">
	                	<div class="row">
					  		<div class="col-xs-9 col-sm-10 col-md-10">
					  			<h1>Heartland</h1>
	              				<p>Combining nostalgic beauty with outstanding modern performance.</p>
					  		</div>
					  		<div class="col-xs-3 col-sm-2 col-md-2">
					  			<div class="btn-group"><a class="btn btn-sm btn-primary" href="<?php get_site_url(); ?>/product/heartland/" role="button">Visit Page &raquo;</a></div>
					  		</div>
						</div>
	            	</div>
	          	</div> 
	        </div>        
		</div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<?php while (have_posts()) : the_post(); ?>
	<div id="mrktg-content" class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
			</div>
		</div>
		<div class="row">
			<header class="col-md-12 entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
		</div>
		<div class="row entry-content marketing">
			<div class="col-md-12">		
					<?php
 					// Advanced Custom Fieldset - Featurette
					if(get_field('intro_paragraph'))
					{
						echo get_field('intro_paragraph');
						echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_a'))
					{
						echo get_field('featurette_a');
						//echo "<hr class=\"featurette-divider\" />";
					}
					
					if(get_field('featurette_b'))
					{
						echo get_field('featurette_b');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_c'))
					{
						echo get_field('featurette_c');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_d'))
					{
						echo get_field('featurette_d');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_e'))
					{
						echo get_field('featurette_e');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_f'))
					{
						echo get_field('featurette_f');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_g'))
					{
						echo get_field('featurette_g');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_h'))
					{
						echo get_field('featurette_h');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_i'))
					{
						echo get_field('featurette_i');
						//echo "<hr class=\"featurette-divider\" />";
					}
					if(get_field('featurette_j'))
					{
						echo get_field('featurette_j');
						//echo "<hr class=\"featurette-divider\" />";
					}
					?>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
					<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
			</div>
		</div>
		<div class="row marketing">
			<div id="footer-widgets" class="col-md-12 widget-area four">
			<!-- Three columns of text below the carousel -->
			<?php
				/* Product footer sidebar */
				if ( ! is_404() ) : ?>
						<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-7' ); ?>
							
						<?php endif; ?>
		
						<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-8' ); ?>
							
						<?php endif; ?>
		
						<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-9' ); ?>
							
						<?php endif; ?>
					<!-- #footer-widgets -->
			<?php endif; ?>
			</div>
			
		</div>
		<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="row entry-meta"><div class="col-md-12"><span class="edit-link">', '</span></div></footer>' ); ?>	
	</div>
<?php get_footer(); ?>