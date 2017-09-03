

<?php echo file_get_contents("./src/modules/_head.php") ?>

<body>
      
  <nav class="home-nav row between-xs">
    <a href="#" class="home-nav-logo col-xs-2">Logo</a>

    <ul class="home-nav-logo-list col-lg-6">
			<li>
				<a href="#" class="brand-logo dim">
					<img src="#">
				</a>
			</li>
		</ul>

    <div class="home-nav-icons col-xs-2">
      <a href="#" class="icon-link-facebook">FB</a>
      <a href="#" class="icon-link-search">SEARCH</a>
    </div>

  </nav>

  <!-- Splash Header -->
	<header class="splash row">
		<article class="splash-container row">
			<div class="splash-details col-lg-6">
				<span class="post-crumb-category">Health</span>
				<span class="post-crumb-datetime">July 15th, 2017</span>
				<a href="#" class="post-title-large">
					<h1>8 Ways to Refresh and Personalize Your Home</h1>
				</a>
				<p class="post-description">8 Ways to Refresh and Personalize Your Home</p>

				<div class="post-author-slug-large">
					<img src="#" class="author-slug-image">
					<span class="author-slug-title">
						<em>by</em> Julia Morrow
					</span>
				</div>
			</div>
			<div class="splash-image-container col-lg-6">
				<a href="#" alt="{post title}">
					<img src="#">
				</a>
			</div>
		</article>
	</header>

	<!-- Recent Posts -->
	<section class="section row">
		<h2 class="section-title col-lg-12">Section Title</h2>
		<article class="post-medium col-lg-3">
			<div class="post-image-container">
				<a href="#{post link}" class="post-image" alt="{post title}">
					<img src="#" class="author-slug-image">
				</a>
				<span class="post-image-slug bottom">
					<img src="#">
				</span>
			</div>
			<div class="post-details">
				<a href="#" class="post-title-medium">
					<h3>8 Ways to Refresh and Personalize Your Home</h3>
				</a>

				<div class="post-author-slug-medium">
					<img src="#" class="author-slug-image">
					<span class="author-slug-title">
						<em>by</em> John Nolan
					</span>
				</div>

				<span class="post-crumb-datetime">July 15th, 2017</span>

			</div>
		</article>
	</section>


	<!-- sponsored post section -->
	<section class="section row">

		<article class="post-large col-lg-8">

			<div class="post-image-container">
				<span class="post-image-slug top">
					<img src="#">
				</span>
				<a href="#{post link}" class="post-image" alt="{post title}">
					<img src="#">
				</a>
			</div>
			<div class="post-details">
				<a href="#" class="post-title-medium">
					<h3>Sponsored Post Title</h3>
				</a>

				<div class="post-author-slug-medium">
					<img src="#" class="author-slug-image">
					<span class="author-slug-title">
						<em>by</em> John Nolan
					</span>
				</div>

				<span class="post-crumb-datetime">July 15th, 2017</span>

			</div>

		</article>

		<aside class="col-lg-4">
			<figure class="subscribe-block">
				<h4>Stay Updated w/SBLY</h4>
				<h5>Get uplifting and insightful news daily.</h5>
				<div class="subscribe-block-search">
					<input class="search-input" type="text" name="subscribeBlockEmail">
					<button class="search-button-submit"></button>
				</div>
			</figure>

			<ul class="recommended-posts">
				<li class="post-listing">
					<div class="row">
						<div class="post-image-container col-lg-3">
							<a href="#{post link}" class="post-image" alt="{post title}">
								<img src="#">
							</a>
						</div>
						<div class="post-details col-lg-9">
							<a href="#" class="post-title-medium">
								<h3>Sponsored Post Title</h3>
							</a>
							<span class="post-crumb-datetime">July 5th 2017</span>
						</div>
					</div>
				</li>
			</ul>
		</aside>
	</section>


	<!-- large post section -->
	<section class="section row">

		<article class="post-large col-lg-6">

			<div class="post-image-container">
				<span class="post-image-slug top">
					<img src="#">
				</span>
				<a href="#{post link}" class="post-image" alt="{post title}">
					<img src="#">
				</a>
			</div>
			<div class="post-details">
				<a href="#" class="post-title-medium">
					<h3>Large Post 1</h3>
				</a>

				<div class="post-author-slug-medium">
					<img src="#" class="author-slug-image">
					<span class="author-slug-title">
						<em>by</em> John Nolan
					</span>
				</div>

				<span class="post-crumb-datetime">July 15th, 2017</span>

			</div>

		</article>

		<article class="post-large col-lg-6">

			<div class="post-image-container">
				<span class="post-image-slug top">
					<img src="#">
				</span>
				<a href="#{post link}" class="post-image" alt="{post title}">
					<img src="#">
				</a>
			</div>
			<div class="post-details">
				<a href="#" class="post-title-medium">
					<h3>Large Post 1</h3>
				</a>

				<div class="post-author-slug-medium">
					<img src="#" class="author-slug-image">
					<span class="author-slug-title">
						<em>by</em> John Nolan
					</span>
				</div>

				<span class="post-crumb-datetime">July 15th, 2017</span>

			</div>

		</article>
	</section>


	<!-- top trending -->
	<section class="section top-trending row">

		<div class="col-lg-6">
			<ul class="trending-posts">
				<li class="post-trending">
					<div class="row">
						<div class="post-image-container col-lg-4">
							<a href="#{post link}" class="post-image" alt="{post title}">
								<img src="#">
							</a>
						</div>
						<div class="post-details col-lg-8">
							<a href="#" class="post-title-medium">
								<h3>Sponsored Post Title</h3>
							</a>
							<span class="post-crumb-datetime">July 5th 2017</span>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="col-lg-6">
			<ul class="trending-posts">
				<li class="post-trending">
					<div class="row">
						<div class="post-image-container col-lg-4">
							<a href="#{post link}" class="post-image" alt="{post title}">
								<img src="#">
							</a>
						</div>
						<div class="post-details col-lg-8">
							<a href="#" class="post-title-medium">
								<h3>Sponsored Post Title</h3>
							</a>
							<span class="post-crumb-datetime">July 5th 2017</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
	</section>


	<!-- Inspiring Posts -->
	<section class="section row">
		<h2 class="section-title col-lg-12">Inspiring Posts</h2>
		<div class="col-lg-9">
			<div class="posts">
				<article class="post-small col-lg-4">
					<div class="post-image-container">
						<a href="#{post link}" class="post-image" alt="{post title}">
							<img src="#" class="author-slug-image">
						</a>
					</div>
					<div class="post-details">
						<a href="#" class="post-title-medium">
							<h3>8 Ways to Refresh and Personalize Your Home</h3>
						</a>

						<div class="post-author-slug-medium">
							<img src="#" class="author-slug-image">
							<span class="author-slug-title">
								<em>by</em> John Nolan
							</span>
						</div>

						<span class="post-crumb-datetime">July 15th, 2017</span>
					</div>
				</article>
			</div>
		</div>
		<div class="col-lg-3">
			<figure class="ad-small">
				Ad
			</figure>
		</div>
	</section>


	<?php echo file_get_contents("./src/modules/_footer.php") ?>


	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <!-- <script type="text/javascript" src="dist/js/remodal.min.js"></script> -->
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>