<?php
require_once('functions/function.php');
get_header();

?>

	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<h1 class="text-white">Our Services</h1>
					<p>Days so us evening for herb bearing lesser man female night</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-section Area -->

	<!-- Start features Area -->
	<section class="features-area section-gap-top" id="news">
		<div class="container">
			<div class="row feature_inner">
				<!--  PHP CODE & MYSQLI QUERY START HERE ===========-->
			<?php
            $sel = "SELECT* FROM cs_services" ;
            $q=mysqli_query($con,$sel);
            $i=1;
            while($data=mysqli_fetch_assoc($q)){
                                        
            ?>	



				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4><?= $data['service_title'];?></h4>
						<p><?= $data['service_detels'];?></p>
					</div>
				</div>
			<?php  } ?>

<!--  PHP CODE & MYSQLI QUERY END  HERE ===========-->

			</div>
		</div>
	</section>
	<!-- End features Area -->

	<!-- Start Offer Area -->
	<section class="offer-area relative">
		<div class="container">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-8 offer-right">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-left mb-5">
								<h4>Our Service</h4>
								<h2>What We Offer For Your <br /> Dream House</h2>
							</div>
						</div>
					</div>

					<div class="row">

							<?php
								$sel = "SELECT* FROM cs_offers" ;
								$q=mysqli_query($con,$sel);
								$i=1;
								while($data=mysqli_fetch_assoc($q)){
															
								?>	
						<div class="col-lg-6 col-md-6">
							<div class="single-offer">
								<a href="#">
									<h4><?= $data['offer_title'];?></h4>
								</a>
								<p>
								<?= $data['offer_detels'];?>
								</p>
							</div>
						</div>
						  <?php  } ?>	
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Offer Area -->







<?php
get_footer();

?>