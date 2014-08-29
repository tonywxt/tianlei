<?php
wp_enqueue_script ( 'jquery' );
wp_enqueue_script ( '6ld-form-validate', plugin_dir_url ( dirname ( __FILE__ ) ) . 'js/jquery.validate.min.js' );
wp_enqueue_script ( '6ld-addtional-methods', plugin_dir_url ( dirname ( __FILE__ ) ) . 'js/additional-methods.min.js' );
?>

<script type="text/javascript">
		jQuery(function($) {
				$( "#loginform" ).validate({
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
							
						rules: {
								username: {
										required: true
								},
								password: {
										required: true
								}							
						}, // end rules
						
						messages:{
								username: {
										required: 'Enter your username'
								},
								password: {
										required: 'Enter your password'
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
		<form method="post" action="/" id="loginform">
			<div class="form-body">
				<div class="spacer-b30">
					<div class="tagline">
						<span>User Credential</span>
					</div>
				</div>

				<!-- div class="section">
					<a href="#" class="button btn-social facebook span-left"> <span><i
							class="fa fa-facebook"></i></span> Facebook
					</a> <a href="#" class="button btn-social twitter span-left"> <span><i
							class="fa fa-twitter"></i></span> Twitter
					</a> <a href="#" class="button btn-social googleplus span-left"> <span><i
							class="fa fa-google-plus"></i></span> Google+
					</a>
				</div>

				<div class="spacer-t30 spacer-b30">
					<div class="tagline">
						<span> Login Information </span>
					</div>
				</div-->

				<div class="section">
					<label for="username" class="field prepend-icon"> <input
						type="text" name="username" id="username" class="gui-input"
						placeholder="Enter username"> <label for="username"
						class="field-icon"><i class="fa fa-user"></i></label>
					</label>
				</div>
				<!-- end section -->

				<div class="section">
					<label for="password" class="field prepend-icon"> <input
						type="password" name="password" id="password" class="gui-input"
						placeholder="Enter password"> <label for="password"
						class="field-icon"><i class="fa fa-lock"></i></label>
					</label>
				</div>
				<!-- end section -->

				<div class="section">
					<label class="switch block"> <input type="checkbox" name="remember"
						id="remember" checked> <label for="remember" data-on="YES"
						data-off="NO"></label> <span> Keep logged in ?</span>
					</label>
				</div>
				<!-- end section -->

			</div>
			<!-- end .form-body section -->
			<div class="form-footer">
				<button type="submit" class="button btn-primary">Log in</button>
			</div>
			<!-- end .form-footer section -->
		</form>

	</div>
	<!-- end .smart-forms section -->
</div>
<!-- end .smart-wrap section -->