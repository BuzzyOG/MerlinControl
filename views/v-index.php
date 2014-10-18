<div class="abovetop">
	<h1>Welcome to the next generation of website management</h1>
</div>
<div class="top"></div>


<!-- ////////////////////////////////////
	HOMEPAGE HEADER
///////////////////////////////////// -->

<div id="header">
	<div class="main">
	    <div class="blur"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="bs-example">
    <div id="merlinslider" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#merlinslider" data-slide-to="0" class="active"></li>
            <li data-target="#merlinslider" data-slide-to="1"></li>
            <li data-target="#merlinslider" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
             	<div class="row">
		            <div class="col-md-5">
						<img src="http://luke.sx/assets/img/SlashCraft.png" width="100%" align="right">
					</div>
					<div class="col-md-7">

						<h1>SlashCraft</h1>

						<h4>This is clearly just an example, but imagine if this was your product featured here? Wouldn't that be amazing right?</h4>
						<button href="#Download" class="btn btn-default">Read Case</button>

						<p>0.0.1-indev</p>
						<div class="carousel-caption">Slide 1</div>

					</div>
				</div>
            </div>
            <div class="item">
               <div class="row">
		            <div class="col-md-5">
						<img src="http://luke.sx/assets/img/SlashCraft.png" width="100%" align="right">
					</div>
					<div class="col-md-7">

						<h1>SlashCraft</h1>

						<h4>This is clearly just an example, but imagine if this was your product featured here? Wouldn't that be amazing right?</h4>
						<button href="#Download" class="btn btn-default">Read Case</button>

						<p>0.0.1-indev</p>
						<div class="carousel-caption">Slide 2</div>

					</div>
				</div>
            </div>
            <div class="item">
           		<div class="row">
		            <div class="col-md-5">
						<img src="http://luke.sx/assets/img/SlashCraft.png" width="100%" align="right">
					</div>
					<div class="col-md-7">

						<h1>SlashCraft</h1>

						<h4>This is clearly just an example, but imagine if this was your product featured here? Wouldn't that be amazing right?</h4>
						<button href="#Download" class="btn btn-default">Read Case</button>

						<p>0.0.1-indev</p>

						<div class="carousel-caption">Slide 3</div>

					</div>
				</div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="merlin-slider left" href="#merlinslider" data-slide="prev">
            <span class="fa fa-2x fa-chevron-left"></span>
        </a>
        <a class="merlin-slider right" href="#merlinslider" data-slide="next">
            <span class="fa fa-2x fa-chevron-right"></span>
        </a>
    </div>
</div>
			

		</div><!--ROW-->
	</div><!--CONTAINER-->
</div><!--HEADER-->
<div class="bottom"></div>

<!-- ////////////////////////////////////
	MAIN BODY ELEMENTS BEGIN
///////////////////////////////////// -->

<div id="second">
	<div class="container space">
		<div class="row">
			<div class="col-md-12">
				<h1 class="main">So what's all the fuss about?</h1>
				<script type="text/javascript">
					$('.carousel').carousel();
					var caption = $('div.item:nth-child(1) .carousel-caption');
					$('#right h1').html(caption.html());
					caption.css('display','none');
					$(".carousel").on('slide.bs.carousel', function(evt) {
					 
					   
					   var caption = $('div.item:nth-child(' + ($(evt.relatedTarget).index()+1) + ') .carousel-caption');
					   $('h1.backing').html(caption.html());
					   caption.css('display','none');
					});
				</script>


             <h1 class="backing">This is where I'm trying to put the carousel image captions :/</h1>

 
				<p align="center" class="main">We are a devoted development team that specialises in web development and design for any online presence. Using our skills and our client's ideas, we combined creativity and innovation together to produce a responsive, dynamic site that the client can manage from our own control platform.</p>
			</div>
		</div>


		<hr>


		<div class="row">

			<div class="col-md-4">
				<h1 class="main side">Trusted</h1>
				<span class="fa-stack fa-5x">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-check fa-stack-1x fa-inverse"></i>
				</span>
				<p align="center">
					Used by over 50 companies from around the globe. Big or small, there's a reason why we're trusted as the number one solution.
				</p>
			</div>

			<div class="col-md-4">
				<h1 class="main side">Scalable</h1>
				<span class="fa-stack fa-5x">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
				</span>
				<p align="center">
					Using PHP, HTML, JS, CSS, JSON, XML and other neat tools we have the knowhow and power to make your online endevour successful.
				</p>

			</div>

			<div class="col-md-4">
				<h1 class="main side">Diverse</h1>
				<span class="fa-stack fa-5x">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
				</span>
				<p align="center">
					Supported by all devices, make your site really pop no matter where it's viewed from. With instant access for you to update it on the fly.
				</p>
			</div>

		</div>


	</div>
</div>

<div class="shadow white">
	<div class="container space">
		<h1 class="main">Trusted and used by companies such as</h1>
		<div class="row">
			<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/envisoned.png" width="100%"></div>
			<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/gunsdaily.png" width="100%"></div>
			<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/galacticservers.png" width="100%"></div>
			<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/minereach.png" width="100%"></div>
			<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/chromahills.png" width="100%"></div>
			<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/paradisemc.png" width="100%"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/craftgasm.png" width="100%"></div>
				<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/nirvanamc.png" width="100%"></div>
				<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/timelessmc.png" width="100%"></div>
				<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/minetract.png" width="100%"></div>
				<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/syclonestudios.png" width="100%"></div>
				<div class="col-md-2 clients"><img src="http://localhost/merlin.luke.sx/assets/img/logos/joemethven.png" width="100%"></div>
			</div>
		</div>
		<a href=""><h5 class="main link center">See why so many people love us</h5></a>
	</div>
</div>

<div id="second">
	<div class="container space">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-12">
					<h1 class="main">Read Our Latest Blogs</h1>
				</div>
				<div class="col-md-6">
					<a href=""><h3 class="main left">Automatic Link Shortener</h3></a>
					<p class="blog">Viewing images is fun, viewing lots of images and having to manually add and change the code for each image is no so fun. Now imagine all you had to do was upload the photos to the server and that was it. Pretty nifty right?</p>
					<a href="" class="red-button">Coming Soon</a>
				</div>
				<div class="col-md-6">
					<a href=""><h3 class="main left">Link Shortening Magic</h3></a>
					<p class="blog">For years people have been passing long links to and fro in emails, social media and instant messaging applications. Then the link shortening came about, for a while people were happy. But they wanted more; they wanted own personalised link shortener.</p>
					<a href="" class="red-button">Coming Soon</a>
				</div>
			</div>
		</div>
		<hr>
	</div>
	<div class="container space">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-12">
					<h1 class="main">So Let's Begin</h1>
					<a href=""><h5 class="main link center">How nice to meet you</h5></a>
				</div>
			</div>
		</div>
	</div>
</div>