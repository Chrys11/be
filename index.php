<?php 
	require_once("header.php");
?>
    <!-- =============== header =============== -->
    <header id="home" class="header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
				

				<div id="owl-demo" class="owl-carousel header1">
				  <div>
				  <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s"><span></span> YOUR <br/>STATIONERY NEEDS</h2>
                    <h3 class="wow bounceIn animated" data-wow-delay=".50s">99% THIS WEEKEND </h3>
                    <p class="wow bounceIn animated" data-wow-delay=".60s">Come exxxxxxxxxxxxxxxxxxxx</p>
                    <p>
                        <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Click Here</span></i>
                        </div>
                    </p>
					</div>               
				</div>
				 <div>
				  <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s">FRIENDLY <span>THIS</span> FOR <br/>YOUR WEBSITE</h2>
                    <h3 class="wow bounceIn animated" data-wow-delay=".50s">FOR YOUR WEBSITE </h3>
                    <p class="wow bounceIn animated" data-wow-delay=".60s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.We ensure sit amet, consectetur adipiscing elit</p>
                    <p>
                        <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Click Here</span></i>
                        </div>
                    </p>
					</div>               
				</div>
				</div>				 
				</div>


                
        </div>
		<!-- =============== container end =============== -->
    </header>
    <div id="Services">
		<section class="for-box">
	 <div class="container">
		<div class="row">
			<?php 
			$services = [['WEB DESIGN',"Come get yourself a cheap website",'yellow','gears',"We build high quality websites for commercial and personal websites at affordable prices.",'#'],
						['E - TYPING','Get you documents digitally typed right away.','blue','keyboard','Just take a picture of your document and we will make it soft for you in almost no time.','showTyping()'],
						['Light PRINTING','Convert your soft documents into instant hard copies.','brown','pages','All you need to do is upload your soft copy and we are good to go. Get the hard copy instantly and cheaply.','showPrinting()']];
			foreach($services as $service){
			?>		
			<div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownLeft animated" data-wow-delay=".1s">
				<div class="for-box-crecl">
					<i class="fa fa-<?php echo $service[3]; ?>" style="color:<?php echo $service[2]; ?>;"></i>
				</div>
				<div class="clr1" style="background:<?php echo $service[2];?>">				
				<h2>
					<a onclick="<?php echo $service[5]; ?>" href="#ServiceArea"><?php echo $service[0]; ?></a>
				</h2>
				</div>
				<div class="wbox">
					<strong><?php echo $service[1]; ?></strong>
					<p><?php echo $service[4]; ?></p>
					<a href="#ServiceArea" class="clr1-a"><i class="fa fa-eye"></i></a>
				</div>
			</div>
			<?php } ?>
		</div>
	 </div>
	</section>
    </div>
    <section class="counter">
        <div class="container">            
            <div class="row">
			<div class="title">
				<h2>we are   awesome,   check some interesting facts</h2>				
				</div>
			 <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".1s">
                            <i class="fa fa-clock-o size"></i>
							<h2>522</h2>
							<span>Hour of Work</span>
                  </div>     
               <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".2s">
                            <i class="fa fa-coffee size"></i>
							<h2>888</h2>
							<span>Cup of Coffee</span>
                  </div>  
				   <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".3s">
                            <i class="fa fa-trophy size"></i>
							<h2>11</h2>
							<span>Awards Won</span>
                  </div>  
				   <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".4s">
                            <i class="fa fa-code size"></i>
							<h2>55566</h2>
							<span>Line of Code</span>
                  </div>  
				   <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".5s">
                            <i class="fa fa-globe size"></i>
							<h2>133</h2>
							<span>Clients Worldwide</span>
                  </div>  
				   <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".6s">
                            <i class="fa fa-rocket size"></i>
							<h2>77</h2>
							<span>Projects Delivered</span>
                  </div>  
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>	
				<!--button onclick="showTyping()"></button-->
	<div id="ServiceArea">
		<section id="typing" style="display:none">
			<div class="container">
					<div class="row">
					<div class="title">
					<h2>Typing</h2>
					<p>Get all you documents typed at cheap prices</p>
					</div>
				</div>

				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">

						<form action="#" method="post">
							<div class="ajax-hidden">
								<div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_name" class="sr-only">Phone Number</label>
									<input type="number" placeholder="Phone( e.g. 0750960329)" name="phone" class="form-control" id="phone" required="">
								</div>

								<div data-wow-delay=".1s" class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_email" class="sr-only">Email</label>
									<input type="email" placeholder="E-mail" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12 form-group wow fadeInUp animated">
									<label for="c_name" class="sr-only">Phone Number</label>
									<select onchange="showUploaders()" name="pages_count" class="form-control" id="pages_count" required="">
										<option value="0">Choose Number of Pages</option>
										<option value="1">1 Page</option>
										<?php 
										for($p=2;$p<1001;$p++){
										?>
										<option value="<?php echo $p?>"><?php echo $p ?> Pages</option>
										<?php
										}
										?>
									</select>
								</div>
								<div id="uploaders" style="display:none"></div>
								<div class="md5"></div>

								<button data-wow-delay=".3s" class="col-md-12 btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
							</div>
							<div class="ajax-response"></div>
						</form>


					</div>              
				</div>
			</div>
		</section>
		<section id="printing" style="display:none">
			<div class="container">
					<div class="row">
					<div class="title">
					<h2>Printing</h2>
					<p>Get all you soft documents printed at cheap prices</p>
					</div>
				</div>

				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">

						<form action="#" method="post">
							<div class="ajax-hidden">
								<div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_name" class="sr-only">Phone Number</label>
									<input type="number" placeholder="Phone( e.g. 0750960329)" name="phone" class="form-control" id="phone" required="">
								</div>

								<div data-wow-delay=".1s" class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_email" class="sr-only">Email</label>
									<input type="email" placeholder="E-mail" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_name" class="sr-only">Page Orientation</label>
									<select name="orientation" class="form-control" id="orientation" required="">
										<option value="0">Choose Orientation</option>
										<option value="portrait">Portrait</option>
										<option value="landscape">LandScape</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_name" class="sr-only">Print On Sides</label>
									<select name="sides" class="form-control" id="sides" required="">
										<option value="0">Choose Print On Sides</option>
										<option value="1">Single Side</option>
										<option value="2">Both Sides</option>
									</select>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
									<div class="tm-product-img-dummy mx-auto">
										<i class="fas fa-5x fa-cloud-upload-alt" onclick="document.getElementById('softFile').click();"></i>
									</div>
									<div class="custom-file mt-3 mb-3">
										<input id="softFile" type="file" style="display:none;" />
										<input type="button" class="btn btn-primary d-block mx-auto" value="Upload File" onclick="upload1()"/>
									</div>
								</div>
								<div class="md5"></div>

								<button data-wow-delay=".3s" class="col-md5 btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
							</div>
							<div class="ajax-response"></div>
						</form>


					</div>              
				</div>
			</div>
		</section>
	</div>
    
<?php
	require_once("footer.php");
?>