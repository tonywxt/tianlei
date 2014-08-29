<?php
wp_enqueue_script ( 'jquery' );
wp_enqueue_script ( '6ld-form-validate', plugin_dir_url ( dirname ( __FILE__ ) ) . 'js/jquery.validate.min.js' );
wp_enqueue_script ( '6ld-addtional-methods', plugin_dir_url ( dirname ( __FILE__ ) ) . 'js/additional-methods.min.js' );
?>

<script type="text/javascript">
		jQuery(function($) {
				$( "#signupform" ).validate({
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
							
						rules: {
								username: {
									required: true
								},
								email: {
									required: true,
									email: true
								},
								password: {
									required: true
								},
								confirmPassword: {
									required: true,
									equalTo: "#password"
							    }			
						}, // end rules
						
						messages:{
								username: {
									required: 'Enter your username'
								},
								email: {
									required: 'Enter your email address',
									email: 'Enter a VALID email address'
								},
								password: {
									required: 'Enter your password'
								},
								confirmPassword: {
									required: 'Confirm your password',
									equalTo: 'Password not match'
							    }												
						}, // end messages
						
						highlight: function(element, errorClass, validClass) {
								$(element).closest('.field').addClass(errorClass).removeClass(validClass);
						}, // end highlight
						
						unhighlight: function(element, errorClass, validClass) {
								$(element).closest('.field').removeClass(errorClass).addClass(validClass);
						}, // end unhighlight
													
						errorPlacement: function(error, element) {
								error.insertAfter(element.parent());
						} // end errorPlacement															
								
				}); // end validate	
		});				
</script>

<div class="smart-wrap">
	<div class="smart-forms smart-container wrap-3">
		<form method="post" action="/" id="signupform">
			<div class="form-body">
				<div class="spacer-b30">
					<div class="tagline">
						<span>User Information</span>
					</div>
				</div>
			
				<div class="section">
						<label for="username" class="field prepend-icon"> <input
							type="text" name="username" id="username" class="gui-input"
							placeholder="Enter username"> <label for="username" class="field-icon"><i
								class="fa fa-user"></i></label>
						</label>
				</div>
				<!-- end section -->
				
				<div class="section">
					<label for="email" class="field prepend-icon"> <input type="email"
						name="email" id="email" class="gui-input"
						placeholder="Enter email address"> <label for="email"
						class="field-icon"><i class="fa fa-envelope"></i></label>
					</label>
				</div>
				<!-- end section -->

				<div class="section">
					<label for="password" class="field prepend-icon"> <input
						type="password" name="password" id="password" class="gui-input" placeholder="Create password"> <label
						for="password" class="field-icon"><i class="fa fa-lock"></i></label>
					</label>
				</div>
				<!-- end section -->

				<div class="section">
					<label for="confirmPassword"
						class="field prepend-icon"> <input type="password"
						name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="Confirm password"> <label
						for="confirmPassword" class="field-icon"><i
							class="fa fa-unlock-alt"></i></label>
					</label>
				</div>
				<!-- end section -->

				<!-- div class="section">
					<label for="verify" class="field-label">Prove you're not a robot </label>
					<div class="smart-widget sm-left sml-80">
						<label for="verify" class="field prepend-icon"> <input type="text"
							name="verify" id="verify" class="gui-input"
							placeholder="Enter captcha"> <label for="verify"
							class="field-icon"><i class="fa fa-shield"></i></label>
						</label> <label for="verify" class="button">4 + 12</label>
					</div>
				</div>
				
				<div class="section">
					<label class="option"> <input type="checkbox" name="check1"><span
						class="checkbox"></span> Agree to our <a href="#"
						class="smart-link"> terms of service </a>
					</label>
				</div -->

			</div>
			<!-- end .form-body section -->
			<div class="form-footer">
				<button type="submit" class="button btn-primary">Create Account</button>
			</div>
			<!-- end .form-footer section -->
		</form>

	</div>
	<!-- end .smart-forms section -->
</div>
<!-- end .smart-wrap section -->