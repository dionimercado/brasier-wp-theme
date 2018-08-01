<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Bocaditos
*/

?>

<footer id="contact" class="footer" style="background-image: url('/wp-content/uploads/2018/07/footer.jpg'); background-position: center center; background-attachment: initial;">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="contact-details">
					<h4><i class="fa fa-phone"></i> Call</h4>
					<p class="mb-0">+1(212) 567-1601</p>
					<p><a href="mailto:info@brasiernyc.com">info@brasiernyc.com</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4><i class="fas fa-map-marker-alt"></i> Location</h4>
					<p><a href="https://goo.gl/maps/uLQYSwcy8oT2" target="_blank">3775 10th Ave<br />
						New York, NY 10034</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4><i class="far fa-clock"></i> Hours</h4>
					<p class="mb-0">Mon - Friday from 5 PM to 4 AM</p>
					<p>Sat - Sun from 1 PM to 4 AM</p>
				</div>
			</div>
		</div>
			<div class="row social">
				<div class="col-lg-12">
					<ul class="list-inline p-0 m-0">
						<li class="list-inline-item"><a href="https://www.facebook.com/Brasier.NYC/" target="_blank"><i class="fab fa-facebook-f fa-fw fa-2x"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/brasier.nyc/" target="_blank"><i class="fab fa-instagram fa-fw fa-2x"></i></a></li>
						<li class="list-inline-item"><a href="https://www.yelp.com/biz/brasier-grill-and-rooftop-new-york" target="_blank"><i class="fab fa-yelp fa-fw fa-2x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="row copyright">
				<div class="col-lg-12">
					<p class="small">&copy; <?php echo date("Y") ?> Brasier. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
