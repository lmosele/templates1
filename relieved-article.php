

<?php echo file_get_contents("./src/modules/_head.php") ?>

<body>

  <?php echo file_get_contents("./src/modules/_relieved-navbar.php") ?>

  <main class="page-container row">
		<header class="content-splash col-xs-12 center-xs">
  		<div class="content-image-container ">
  			<img class="content-splash-image" src="./dist/img/photos/article-header1.jpg" />
  			<figcaption class="content-image-source">
  				sourced from John Weisner
  			</figcaption> 
				</a>
				<div class="post-image-slug middle">
					Beauty Tips
				</div>
  		</div>
  		<div class="content-details-container">
  			<h1 class="content-title">Article Template Title</h1>
  			<span class="post-crumb-datetime">July 15th, 2017</span>
  			<div class="post-author-slug">
					<img src="./dist/img/photos/author1.png" class="author-slug-image">
					<span class="author-slug-title">
						By John Nolan
					</span>
					<span class="author-slug-description">
						staff writer at sbly
					</span>
				</div>
  		</div>
  	</header>
  	<content class="content-container col-xs-7">
	  	<article class="content-article row">
	  		<p class="article-text-foreword">You may diligently customize your skin-care routine throughout the year, but many of us neglect the changing needs of our hair as the weather evolves outside. As summer hits, the sun, surf, and flat irons can cause damage that will stick around long past Labor Day.</p>

	  		<p>
	  			“In winter, hair can get dry thanks to the absence of moisture in the air, like from forced air,” explains Kevin Mancuso, celebrity stylist and global creative director of Nexxus. “But in the summer you’re exposed to more sources of damage that can harm the structure of your hair and the amount of moisture it can hold.”
	  		</p>

	  		<figure class="article-media"> 
	  			<img class="article-image" src="./dist/img/photos/article-image1.jpg">
	  			<figcaption class="article-image-caption">Let Your Hair Shine!</figcaption>
	  		</figure>

	  		<h2 class="article-text-subheaders">1. Recognize the Power of a Shower (With the Right Shampoo and Conditioner)</h2>

	  		<p>
	  			Protecting your hair against sun damage is just as important as protecting your skin. “Any source of heat is going to burn your hair and the sun will do the same: lightening the hair, making it more brittle,” warns Mancuso. “Virgin hair is always more resistant because of natural oils, but when it’s stripped with color, hot tools, etc., there’s no resistance in the outer layer. And once hair is more porous, it’s easier for damage to happen to it because it doesn’t have its natural coating.” Mancuso recommends wearing a hat whether you’re at the beach or running errands, and rebalancing hair’s hydration with shampoo and conditioner to help replenish the barrier hair naturally offers. Similar to your daily face moisturizer, a cream or serum with <a href="#" class="article-text-link">built in UV protection</a> will also counteract the damage.
	  		</p>

	  		<blockquote class="article-text-blockquote">
	  			“Every time you rinse and wash your hair you lose proteins because water itself is eroding,”
	  		</blockquote>

	  		<figure class="article-ad-horizontal">
	  			<figcaption class="article-ad-caption">Advertisement</figcaption>
	  			<img src="./dist/img/photos/advertisement1.png">
	  		</figure>

	  		<p>There’s nothing more invigorating during the summer than that first dip in the ocean, but before you dive headlong into the waves, make sure your strands are well-protected. “Salt water from the ocean dries hair out because salt purges moisture, just like when you put salt on eggplant before you cook it,” explains Mancuso. “And then when it crystallizes on hair as it dries, that’s even more damaging. People say they love the crunchiness because it makes their hair feel thick and textured, but when you brush it through it’s in a more brittle condition and you can cause more damage.” Use Nexxus Humectress Ultimate Moisture Masque at least once a week if not every other day. Pro tip: Prep for a beach vacation by using the mask preemptively before you take off, or better yet, toss a few single-use pouches in your beach bag so you always have one handy.</p>

	  		<figure class="article-media"> 
	  			<!-- this would probably be an iframe -->
	  			<img class="article-video" src="./dist/img/photos/article-video1.png">
	  			<figcaption class="article-image-caption">Video by nexus</figcaption>
	  		</figure>

	  		<div class="post-author-slug">
					<img src="./dist/img/photos/author1.png" class="author-slug-image">
					<span class="author-slug-title">
						John Nolan
					</span>
					<span class="author-slug-contact">inno@shareably.net</span>
					<span class="author-slug-description">
						staff writer at sbly
					</span>
				</div>

				<div class="ad-small horizontal">
					<h4 class="ad-small-title">Like us on Facebook to get our stories delivered in your News Feed.</h4>
					<button class="reset-button button-blue ad-small-like-button">Like</button>
				</div>
	  		
	  	</article>
	  	
	  </content>

	  <aside class="content-recommended-posts col-xs-5">
	  	
	  </aside>
  </main>

	<?php echo file_get_contents("./src/modules/_inspiring_posts_section.php") ?>

	<?php echo file_get_contents("./src/modules/_footer.php") ?>

	<?php echo file_get_contents("./src/modules/_script.php") ?>
	
</body>
</html>