<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title><?php echo $title; ?></title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">
		<link href="<?php base_url()?>assets/outbound/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php base_url() ?>assets/outbound/css/animate.min.css">
		<link rel="stylesheet" href="<?php base_url() ?>assets/outbound/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="slider-collapse">
		
		<div id="site-content">
			
			<?php
				$this->load->view("header");
			?>
			
			<main class="content">
				<div class="slider">
					<ul class="slides">
						<li data-background="<?php base_url() ?>assets/outbound/dummy/image-1.jpg">
							<div class="container">
								<div class="slide-caption col-md-4" >
									<h2 class="slide-title">Adventures</h2>
									<p>Consectetur adipisicing elit. Dignissimos fuga eos nihil repellat et enim, neque, aliquid delectus quia hic praesentium sit, repudiandae pariatur deleniti vero.</p>
								</div>
							</div>
						</li>
						<li data-background="<?php base_url() ?>assets/outbound/dummy/image-2.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Rafting</h2>
									<p>Consectetur adipisicing elit. Pariatur, ut assumenda, delectus illo est dignissimos maiores quisquam rem nulla harum ratione, dolorum recusandae, unde cumque sint</p>
								</div>
							</div>
						</li>
						<li data-background="<?php base_url() ?>assets/outbound/dummy/image-3.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Paintball</h2>
									<p>Consectetur adipisicing elit. Facere excepturi itaque quasi dolorem deserunt nesciunt neque debitis incidunt voluptatem, laudantium, odio fugit. Obcaecati fugiat perferendis numquam?</p>
								</div>
							</div>
						</li>
						<li data-background="<?php base_url() ?>assets/outbound/dummy/image-4.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Adventures</h2>
									<p>Consectetur adipisicing elit. Facere excepturi itaque quasi dolorem deserunt nesciunt neque debitis incidunt voluptatem, laudantium, odio fugit. Obcaecati fugiat perferendis numquam?</p>
								</div>
							</div>
						</li>
						<li data-background="<?php base_url() ?>assets/outbound/dummy/image-5.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Rafting</h2>
									<p>Consectetur adipisicing elit. Facere excepturi itaque quasi dolorem deserunt nesciunt neque debitis incidunt voluptatem, laudantium, odio fugit. Obcaecati fugiat perferendis numquam?</p>
								</div>
							</div>
						</li>
						<li data-background="<?php base_url() ?>assets/outbound/dummy/image-6.jpg">
							<div class="container">
								<div class="slide-caption col-md-4" >
									<h2 class="slide-title">Paintball</h2>
									<p>Consectetur adipisicing elit. Facere excepturi itaque quasi dolorem deserunt nesciunt neque debitis incidunt voluptatem, laudantium, odio fugit. Obcaecati fugiat perferendis numquam?</p>
								</div>
							</div>
						</li>
					</ul>
					<div class="flexslider-controls">
						<div class="container">
							<ol class="flex-control-nav">
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
								<li><a>4</a></li>
								<li><a>5</a></li>
								<li><a>6</a></li>
							</ol>
						</div>
					</div>
				</div>

				<div class="fullwidth-block features-section">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft" data-wow-delay=".3s">
									<i class="icon-ticket"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Laborum expedita fugiat et quas quia! Odio dignissimos beatae aspernatur in vero culpa excepturi consequatur!</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft">
									<i class="icon-plane"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lectetur recusandae quasi repellendus accusamus ipsa sed quibusdam officia aspernatur natus itaque, asperiores impedit numquam dolorum.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight">
									<i class="icon-jetski"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>L culpa ex dolorum ipsa, maxime soluta repudiandae officia corrupti. Doloribus iste voluptatibus nostrum?</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight" data-wow-delay=".3s">
									<i class="icon-shuttelcock"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lam sit, facere dicta libero ipsa. Repellat deleniti dignissimos, excepturi minima voluptatibus mollitia adipisci iusto.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
					<div class="container">
						<h2 class="section-title">The newest holiday offers</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn">
									<figure class="featured-image"><img src="<?php base_url() ?>assets/outbound/dummy/offer-thumbnail-1.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="<?php echo base_url('First_page/gallery'); ?>" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".2s">
									<figure class="featured-image"><img src="<?php base_url() ?>assets/outbound/dummy/offer-thumbnail-2.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="<?php echo base_url('First_page/gallery'); ?>" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".4s">
									<figure class="featured-image"><img src="<?php base_url() ?>assets/outbound/dummy/offer-thumbnail-3.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="<?php echo base_url('First_page/gallery'); ?>" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".6s">
									<figure class="featured-image"><img src="<?php base_url() ?>assets/outbound/dummy/offer-thumbnail-4.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="<?php echo base_url('First_page/gallery'); ?>" class="button">See details</a>
								</article>
							</div>
						</div>
					</div>
				</div>

				<!--<div class="fullwidth-block testimonial-section">
					<div class="container">
						<h2 class="section-title">Testimonials</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp">
									<figure class="avatar"><img src="<?php base_url() ?>assets/outbound/dummy/person-1.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Jessica Tracy</cite>
										<span>Creative agency CEO</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".2s">
									<figure class="avatar"><img src="<?php base_url() ?>assets/outbound/dummy/person-2.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>John Smith</cite>
										<span>Traveler</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".4s">
									<figure class="avatar"><img src="<?php base_url() ?>assets/outbound/dummy/person-3.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Susan Webb</cite>
										<span>Hairdresser</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".6s">
									<figure class="avatar"><img src="<?php base_url() ?>assets/outbound/dummy/person-4.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Sarah Brown</cite>
										<span>Athlete</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</main> <!-- .content -->

			<?php
			$this->load->view("footer");
			?>
		</div> <!-- #site-content -->
		<script src="<?php base_url() ?>assets/outbound/js/jquery-1.11.1.min.js"></script>
		<script src="<?php base_url() ?>assets/outbound/js/min/plugins-min.js"></script>
		<script src="<?php base_url() ?>assets/outbound/js/min/app-min.js"></script>
		
	</body>

</html>