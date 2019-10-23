<div id="showEmail" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<p>CONTACT US</p>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
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
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>