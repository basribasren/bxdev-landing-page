<!-- Contact Us Section -->
<section id="contact-map" class="contact section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title-header text-center">
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Hubungi Kami</h2>
					<p class="wow fadeInDown" data-wow-delay="0.2s">Ingin konsultasi terlebih dahulu, maka jangan ragu untuk menghubungi kami, <br>anda dapat mengirimkan kami e-mail melalui form di bawah ini.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12 col-xs-12">
				<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
					<div class="form-wrapper">
						<form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="<?php echo base_url('welcome/send_email')?>">
							<div class="row">
								<div class="col-md-6 form-line">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="First Name" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6 form-line">
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12 form-line">
									<div class="form-group">
										<input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" rows="4" id="message" name="message" required data-error="Write your message"></textarea>
									</div>
									<div class="form-submit">
										<button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="contact-img">
					<img src="assets/img/contact/01.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Us Section End -->