<?php
/**
* Template Name: Home
 */

get_header(); ?>

		<!--About Us-->		
		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<h1 class="display-3">
						Lorem ipsum dolor sit amet
						</h1>
						<p class="lead">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						Cum sociis natoque penatibus et magnis dis parturient montes. 
						Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
						</p>
					</div>
					<div class="col-6">
						<img src="https://via.placeholder.com/550" alt="">
					</div>
				</div>
			</div>	
		</section>

		<!--Services-->			
		<section class="py-5">
			<div class="container">
				<div class="card-deck">
					<div class="card mb-3">
						<img class="card-img-top" src="https://via.placeholder.com/550" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card mb-3">
						<img class="card-img-top" src="https://via.placeholder.com/550" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card mb-3">
						<img class="card-img-top" src="https://via.placeholder.com/550" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>	
			</div>	
		</section>

		<!--Portfolio-->
		<section class="py-5">
			<div class="container">
				<div class="card-group">
					<div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
						<div class="card-header">Header</div>
						<div class="card-body">
							<h5 class="card-title">Primary card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
						<div class="card-header">Header</div>
						<div class="card-body">
							<h5 class="card-title">Primary card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
						<div class="card-header">Header</div>
						<div class="card-body">
							<h5 class="card-title">Primary card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>	
		</section>

		<!--Testimonials-->
		<section class="py-5 bg-secondary">
			<div class="container text-light">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="display-3 text-light">
						What our clients say about us 
						</h2>
						<p class="lead">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						Cum sociis natoque penatibus et magnis dis parturient montes. 
						Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
						</p>
						<p class="text-muted text-light">
							<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
						</p>
						<p class="font-weight-bold" style="32px;">
							Mary Donald
						</p>
					</div>
				</div>
			</div>	
		</section>

		<!--Contact Form-->
		<section class="py-5">
			<div class="container">
				<div class="text-center p-3"> 
					<h2 class="display-3">contact Us</h2>
					<p class="lead">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
					</p>
				</div>
				<form class="w-50 p-3 mx-auto">
					<div class="form">
						<div class="form-group">
							<label for="inputEmail4">Name*</label>
							<input type="name" class="form-control" id="inputEmail4" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="inputEmail4">Email*</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="inputPassword4">Phone</label>
							<input type="phone" class="form-control" id="inputPassword4" placeholder="Phone">
						</div>			
						<div class="form-group">
							<label for="inputPassword4">Website</label>
							<input type="website" class="form-control" id="inputPassword4" placeholder="www.yourdomain.co.uk">
						</div>	
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Message</label>
							<textarea class="form-control" id="message" rows="3"></textarea>
						</div>		
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</div>	
		</section>

<?php
get_footer();
