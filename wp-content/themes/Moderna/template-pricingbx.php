<?php 
/*
 Template Name: Pricing Box Page
*/

?>

<?php get_header();?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Features</a><i class="icon-angle-right"></i></li>
					<li class="active">Pricing box</li>
				</ul>
			</div>
		</div>
	</div>
	<section id="content">
	<div class="container">
		<div class="row">

			<!--<div class="col-lg-12">
				<strong><h4>Example on 3 columns</h4></strong>
			</div>-->
            <?php
             $obj = new WP_Query(array(
               'post_type' => 'pricingbox',             	 
                'p' => 240,
              ));
          if($obj->have_posts())
          {
          	 $obj->the_post();?>
              <?php the_content();?>

         <?php }
         else{
         	echo "no posts here";
         }
         wp_reset_postdata();
      ?>

			<!--<div class="col-lg-4">
				<div class="pricing-box-alt">
					<div class="pricing-heading">
						<h3>Very <strong>Basic</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>&#36;15.00 / Month</h6>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 100 applications</li>
							<li><i class="icon-ok"></i> 24x7 support available</li>
							<li><i class="icon-ok"></i> No hidden fees</li>
							<li><i class="icon-ok"></i> Free 30-days trial</li>
							<li><i class="icon-ok"></i> Stop anytime easily</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pricing-box-alt special">
					<div class="pricing-heading">
						<h3>Good <strong>Choice</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>&#36;25.00 / Month</h6>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 100 applications</li>
							<li><i class="icon-ok"></i> 24x7 support available</li>
							<li><i class="icon-ok"></i> No hidden fees</li>
							<li><i class="icon-ok"></i> Free 30-days trial</li>
							<li><i class="icon-ok"></i> Stop anytime easily</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pricing-box-alt">
					<div class="pricing-heading">
						<h3>Just <strong>Happy</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>&#36;35.00 / Month</h6>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i> 100 applications</li>
							<li><i class="icon-ok"></i> 24x7 support available</li>
							<li><i class="icon-ok"></i> No hidden fees</li>
							<li><i class="icon-ok"></i> Free 30-days trial</li>
							<li><i class="icon-ok"></i> Stop anytime easily</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
					</div>
				</div>
			</div>-->


		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<div class="row">


       <?php
             $obj = new WP_Query(array( 
                'post_type' => 'pricingbox',
                'p' => 243,
              ));
          if($obj->have_posts())
          {
          	 $obj->the_post();?>

              <?php the_content();?>

         <?php }
         else{
         	echo "no posts here";
         }
         wp_reset_postdata();
      ?>

	</div>
	</section>
	<?php get_footer();?>