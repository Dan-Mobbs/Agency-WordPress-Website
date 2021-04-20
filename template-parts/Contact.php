<?php
/**
* Template Name: Contact
 */

get_header();?>

		<!--Reasons-->		
		<section class="py-5 bg-secondary">
            <div class="container w-50">
                <div class="row">                   
                    <div class="col-12 mx-auto text-center">
                        <h1 class="display-3 text-light">
                        Lorem ipsum dolor sit amet
                        </h1>
                        <p class="lead text-light">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes. 
                        Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
                        </p>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-lg">Visit Us</button>
                        </div>    
                    </div>				
                </div>
            </div>    
		</section>		

        <!--Contact-->
        <section class="py-5">
			<div class="text-center p-3"> 
				<h2 class="display-3">contact Us</h1>
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
		</section>

        <!--Our Services-->
		<section class="py-5 bg-success">
            <div class="container w-50 text-light text-center">
                <h1 class="display-3 text-light">
                   Visit Us
                </h1>
                <div class="py-1">
                    <h2>Our Branch</h2>
                    <address>                   
                        Example.com<br>
                        Box 564, Disneyland<br>
                        USA
                    </address>
                </div>    
                <div class="py-1">
                    <h2>Call</h2>
                    <p class="lead">
                    01539 545 698
                    </p>
                </div>  	
                <div class="py-1">
                    <h2>Email</h2>
                    <p class="lead">
                    email@Agency.co.uk
                    </p>
                </div>  	
            </div>    
		</section>

<?php
get_footer();
