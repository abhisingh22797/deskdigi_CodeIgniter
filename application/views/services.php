<div class="content-wrapper">

	<!-- Stunning Header -->

	<div class="stunning-header stunning-header-bg-violet">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= $allSer['ptitle']; ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index.html">Home</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Our Services</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning Header -->

	<!-- Overlay Search -->


	<div class="overlay_search">
		<div class="container">
			<div class="row">
				<div class="form_search-wrap">
					<form>
						<input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
						<a href="#" class="overlay_search-close">
							<span></span>
							<span></span>
						</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- End Overlay Search -->


	<!-- Services Items -->


	<div class="container">
		<div class="row pt120 pb30">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="services-main">
					<div class="heading">
						<h4 style="color: black;" class="h1 heading-title"><?= $allSer['title']; ?></h4>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
						<p class="heading-text"><?= $allSer['stitle']; ?>
						</p>
					</div>


				</div>
			</div>



			<?php $i = 0;

			foreach ($allCat as $cat) :
			?>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="servises-item bg-primary-color">
						<div class="servises-item__thumb">
							<img src="<?php echo  base_url(); ?>uploads/brands/<?= $cat->image; ?>" alt="service">
						</div>
						<div class="servises-item__content">
							<h4 class="servises-title"><?= $cat->title; ?></h4>
							<p class="servises-text"><?= $cat->tech; ?>
							</p>
						</div>

						<a href="05_service_details_localseo.html" class="read-more"><i class="seoicon-right-arrow"></i></a>

					</div>
				</div>
				<?php $i++;
				if ($i == 2) {
				?>

		</div>
	<?php } ?>
<?php endforeach; ?>
<!--

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<div class="servises-item bg-secondary-color">
		<div class="servises-item__thumb">
			<img src="img/services3.png" alt="service">
		</div>
		<div class="servises-item__content">
			<h4 class="servises-title">Social Media
				Marketing</h4>
			<p class="servises-text">Investigationes demonstraverunt legere
				me lius quod ii legunt saepius.
			</p>
		</div>

		<a href="06_service_detail.html" class="read-more"><i class="seoicon-right-arrow"></i></a>

	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<div class="servises-item bg-orange-color">
		<div class="servises-item__thumb">
			<img src="img/services4.png" alt="service">
		</div>
		<div class="servises-item__content">
			<h4 class="servises-title">Email Marketing</h4>
			<p class="servises-text">Nam liber tempor cum soluta nobis eleifend
				option congue nihil imperdiet doming id quod mazim placerat assum.
			</p>
		</div>

		<a href="07_service_email_marketing.html" class="read-more"><i class="seoicon-right-arrow"></i></a>

	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<div class="servises-item bg-green-color">
		<div class="servises-item__thumb">
			<img src="img/services5.png" alt="service">
		</div>
		<div class="servises-item__content">
			<h4 class="servises-title">Pay Per Click
				Management</h4>
			<p class="servises-text">Eodem modo typi, qui nunc nobis videntur parum clari,
				fiant sollemnes in futurum.
			</p>
		</div>

		<a href="08_service_ppc_management.html" class="read-more"><i class="seoicon-right-arrow"></i></a>

	</div>
</div>-->

	</div>


	<!-- End Services Items -->


	<!-- Features Item -->


	<div class="container-fluid">
		<div class="row bg-border-color medium-padding120">
			<div class="container">
				<div class="row pb30">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">

							<div class="features-item__thumb">
								<img src="<?php echo  base_url(); ?>assets/frontend/img/features1.png" alt="image">
							</div>

							<div class="features-content">
								<a href="#" class="features-title"><?= $allSer['description1']; ?></a>
								<p class="features-text"><?= $allSer['description2']; ?>
								</p>
							</div>



						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">

							<div class="features-item__thumb">
								<img src="<?php echo  base_url(); ?>assets/frontend/img/features2.png" alt="image">
							</div>

							<div class="features-content">
								<a href="#" class="features-title"><?= $allSer['sec2title']; ?></a>
								<p class="features-text"><?= $allSer['sec2description']; ?>
								</p>
							</div>



						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">

							<div class="features-item__thumb">
								<img src="<?php echo  base_url(); ?>assets/frontend/img/features3.png" alt="image">
							</div>

							<div class="features-content">
								<a href="#" class="features-title"><?= $allSer['support']; ?></a>
								<p class="features-text"><?= $allSer['Awesome']; ?>
								</p>
							</div>



						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">

							<div class="features-item__thumb">
								<img src="<?php echo  base_url(); ?>assets/frontend/img/features4.png" alt="image">
							</div>

							<div class="features-content">
								<a href="#" class="features-title"><?= $allSer['vision_title']; ?></a>
								<p class="features-text"><?= $allSer['Performance']; ?>
								</p>
							</div>



						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">

							<div class="features-item__thumb">
								<img src="<?php echo  base_url(); ?>assets/frontend/img/features6.png" alt="image">
							</div>

							<div class="features-content">
								<a href="#" class="features-title"><?= $allSer['vision_description']; ?></a>
								<p class="features-text"><?= $allSer['clint_title']; ?>
								</p>
							</div>


						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">

							<div class="features-item__thumb">
								<img src="<?php echo  base_url(); ?>assets/frontend/img/features5.png" alt="image">
							</div>

							<div class="features-content">
								<a href="#" class="features-title"><?= $allSer['client_descriptionq']; ?></a>
								<p class="features-text"><?= $allSer['client_description']; ?>
								</p>
							</div>



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Features Item -->


	<div class="container pb120 pt120">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading">
					<h4 style="color: black;" class="h1 heading-title"><?= $allSer['titlesec3']; ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text c-dark"><?= $allSer['descriptionsec3']; ?>
					</p>
				</div>
			</div>
		</div>



	</div>


	<!-- Subscribe Form -->

	<div class="container-fluid bg-green-color">
		<div class="row">
			<div class="container">

				<div class="row">

					<div class="subscribe scrollme">

						<div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
							<h4 class="subscribe-title">Email Newsletters!</h4>
							<form class="subscribe-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="https://html.crumina.net/html-seosight/modules/forms/submit.php">
								<input class="email input-standard-grey input-white" name="email" placeholder="Your Email Address" type="email" required>
								<button class="subscr-btn">subscribe
									<span class="semicircle--right"></span>
								</button>
							</form>
							<div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

						</div>

						<div class="images-block">
							<img src="img/subscr-gear.png" alt="gear" class="gear">
							<img src="img/subscr1.png" alt="mail" class="mail">
							<img src="img/subscr-mailopen.png" alt="mail" class="mail-2">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Subscribe Form -->

</div>