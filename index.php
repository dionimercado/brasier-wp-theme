<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Brasier
 */

get_header(); ?>

	<section class="showcase">
		<?php echo do_shortcode( '[rev_slider alias="main-slider"]' ) ?>
	</section><!-- .showcase -->

	<main class="main-content">
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="block-header mb-3">
							<h2>Welcome</h2>
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-liner-text.svg" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 my-auto d-block d-md-none">
						<div class="border-1"></div>
						<img class="img-fluid" src="/wp-content/uploads/2018/07/about.jpg" alt="">
					</div>
					<div class="col-md-7 my-auto">
						<div class="about-text">
							<p>Brasier opened its doors in September of 2016 on the border of Inwood & Washington Heights, NYC.   The motivation behind this “outside the box” concept for the neighborhood was to bring a true and much needed European Style Bistro to this diverse community.  Reminiscent of an old country home with floor to ceiling wallpaper on one side and decorative plates & coffee mugs on the other, Brasier will make you feel at home once you step inside.</p>
							<p>From a large variety of plates coming from a high end French, Italian and Latin cuisine, we offer a unique menu of Risottos, an exquisite selection of Steaks to Croquettes and even a Cheese & Charcuterie board.  Our seasonally driven menus are sure to have something to please all tastes.  Compliment your meal with an ice cold Draft from our Craft Beer list, a tasty Sangria or a well-balanced wine from our international wine selection.</p>
						</div>
					</div>
					<div class="col-md-5 my-auto d-none d-md-block">
						<img class="img-fluid" src="/wp-content/uploads/2018/07/about.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<section id="events" class="mx-auto" style="max-width: 1200px;">
			<div class="block-header mb-3">
				<h2>Events</h2>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-liner-text.svg" alt="">
			</div>
			<div class="brasier-events owl-carousel owl-theme">
				<?php
				$query = new WP_Query( array(
					'post_type' => 'tribe_events',
					'showposts' => 6,
					// 'meta_query' => array(
					//   array(
					//     'key' => 'event_end_date_time',
					//     'value' => date( 'Y-m-d H:i', strtotime( "- 6 hours" ) ),
					//     'compare' => '>=',
					//     'type'  => 'DATETIME'
					//   )
					// ),
					// 'meta_key'  => 'event_date_time',
					// 'orderby' => 'meta_value',
					'order' => 'ASC'
				) );
				while ( $query->have_posts() ) : $query->the_post();

				?>
				<div class="item">
					<div class="brasier-event wow zoomIn" data-wow-delay="0ms" data-wow-duration="1000ms">
					<?php
					$img_src = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full' );
					$img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id($post->ID), 'fullss' );
					?>
					<a data-fancybox="flyer" href="<?php echo esc_url( $img_src ); ?>">
						<img data-date="<?php echo date( 'Y-m-d H:i', strtotime( "- 6 hours" ) ) ?>" src="<?php echo esc_url( $img_src ); ?>"
						 srcset="<?php echo esc_attr( $img_srcset ); ?>"
						 sizes="(max-width: 50em) 87vw, 680px" class="img-fluid" alt="<?php the_title() ?>" <?php if ($query->post_count == 1) : echo 'style="width: 100%; height: auto;"'; endif; ?>>
					 </a>
				 </div>
				</div>
				<?php endwhile; ?>
			</div>
		</section>

		<section id="newsletter">
      <div class="container">
					<div class="row">
						<div class="col-12">
							<div class="block-header mb-3">
								<h2>Subscribe</h2>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-liner-white.svg" alt="">
							</div>
						</div>
					</div>
	        <div class="row">
	          <div class="col-lg-6 ml-auto mr-auto">
	            <!-- MailChimp Signup Form -->
	            <div id="mc_embed_signup">
	              <!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
	              <form role="form" action="//dionimercado.us14.list-manage.com/subscribe/post?u=c84d33d7d0a554f6988195f5b&amp;id=1833d9d4d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
	                <div class="input-group input-group-lg">
	                  <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Enter your email address...">
	                  <span class="input-group-btn">
	                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms">Subscribe!</button>
	                  </span>
	                </div>
	                <div id="mce-responses">
	                  <div class="response" id="mce-error-response" style="display:none"></div>
	                  <div class="response" id="mce-success-response" style="display:none"></div>
	                </div>
	              </form>
	            </div>
	            <!-- End MailChimp Signup Form -->
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>

		<section id="menu">
			<header class="py-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="block-header mb-3">
								<h2>Menu</h2>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-liner-text.svg" alt="">
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="menu-content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php
							$terms = get_terms( 'category', array( 'orderby' => 'slug', 'parent' => 0 ) );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						    echo '<nav class="nav nav-tabs tabs-up justify-content-center" id="brasier-menu">';
								$is_active = '';
						    foreach ( $terms as $term ) {
									if( $term->slug == 'brunch' ) {
										$is_active = 'active';
									}else{
										$is_active = '';
									}
					        echo '<a href="' . esc_url( get_term_link($term ))  . '" data-target="#' . $term->slug . '" class="nav-item nav-link border-bottom-0 rounded-top ' . $is_active . '" id="' . $term->slug . '-tab" data-toggle="tabajax" rel="tooltip"> ' . $term->name . ' </a>';
						    }
						    echo '</nav>';

								echo '<div class="tab-content p-3 p-lg-5 mb-0 mb-lg-5">';
								?>
									<div class="tab-pane active" id="brunch">
										<div class="row">
										  <?php
										  $terms = get_terms( 'category', array( 'orderby' => 'slug', 'parent' => 2 ) );
										  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
										    foreach( $terms as $term ) {
										      ?>
										      <div class="col-md-6">
										        <h4><?php echo $term->name ?> </h4>
										      <?php
													$query = new WP_Query(
										        array(
										          'post_type' => 'menus',
										          'order' => 'asc',
										          'tax_query' => array(
										            array(
										        			'taxonomy' => 'category',
										        			'field'    => 'term_id',
										        			'terms'    => array( $term->term_id ),
										        			'operator' => 'IN',
										        		)
										          )
										        )
										      );
										      while( $query->have_posts() ) :
										        $query->the_post(); ?>
										        <h3><?php the_title() ?> <small><?php echo get_post_meta( $post->ID, 'price', true ) ?></small></h3>
										        <?php the_content() ?>
										      <?php endwhile; ?>
										      </div>
										    <?php
										  }
										  ?>
										</div>
										<?php
										}
										?>
									</div>
									<div class="tab-pane" id="brunch-w-drinks">
										<div class="row">
										  <?php
										  $terms = get_terms( 'category', array( 'orderby' => 'slug', 'parent' => 7 ) );
										  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
										    foreach( $terms as $term ) {
										      ?>
										      <div class="col-md-6">
										        <h4><?php echo $term->name ?> </h4>
										      <?php
													$query = new WP_Query(
										        array(
										          'post_type' => 'menus',
										          'order' => 'asc',
										          'tax_query' => array(
										            array(
										        			'taxonomy' => 'category',
										        			'field'    => 'term_id',
										        			'terms'    => array( $term->term_id ),
										        			'operator' => 'IN',
										        		)
										          )
										        )
										      );
										      while( $query->have_posts() ) :
										        $query->the_post(); ?>
										        <h3><?php the_title() ?> <small><?php echo get_post_meta( $post->ID, 'price', true ) ?></small></h3>
										        <?php the_content() ?>
										      <?php endwhile; ?>
										      </div>
										    <?php
										  }
										  ?>
										</div>
										<?php
										}
										?>
									</div>
									<div class="tab-pane" id="dinner">
s
									</div>
								<?php
								// echo '<div class="tab-pane" id="' . $term->slug . '"></div>';
								echo '</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="gallery">
			<header class="py-4">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="block-header mb-3">
								<h2>Recent Activities</h2>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-liner-text.svg" alt="">
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="container-fluid">
				<div class="row">
					<?php echo do_shortcode( '[elfsight_instagram_feed id="1"]' ) ?>
				</div>
			</div>
		</section>

		<section id="rsvp">
			<header class="header reservation parallax bg-rsvp">
				<div class="reservation-overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-8 mx-auto text-center padding reservation">
								<div class="block-header mb-3">
									<h2>Book a Table</h2>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/header-liner-white.svg" alt="">
								</div>
								<p style="color: #808487;">Thank you for inquiring about a reservation. Someone from Brasier will contact you shortly to confirm your reservation. We look forward to hosting you!</p>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="container">
				<div class="row">
					<div class="col-md-8 my-5 mx-auto">
						<div class="rtb-booking-form">
							<?php echo do_shortcode( '[booking-form]' ) ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php
get_footer();
