<?php

/**
 * This is the template for our login form. It should contain as less logic as possible
 */
wp_enqueue_style ( 'smart-form', plugins_url('../css/smart-forms.css', __FILE__));
wp_enqueue_style ( 'smart-form-fontawesome', plugins_url('../css/font-awesome.min.css', __FILE__));
?>
<div class="smart-wrap">
	<div class="smart-forms smart-container wrap-3">
		<form method="post" action="/" id="contact">
			<div class="form-body">

				<div class="spacer-b30">
					<div class="tagline">
						<span>Sign in With </span>
					</div>
					<!-- .tagline -->
				</div>

				<div class="section">
					<a href="#" class="button btn-social facebook span-left"> <span><i
							class="fa fa-facebook"></i></span> Facebook
					</a> <a href="#" class="button btn-social twitter span-left"> <span><i
							class="fa fa-twitter"></i></span> Twitter
					</a> <a href="#" class="button btn-social googleplus span-left"> <span><i
							class="fa fa-google-plus"></i></span> Google+
					</a>
				</div>
				<!-- end section -->

				<div class="spacer-t30 spacer-b30">
					<div class="tagline">
						<span> OR Login </span>
					</div>
					<!-- .tagline -->
				</div>

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
						type="text" name="password" id="password" class="gui-input"
						placeholder="Enter password"> <label for="password"
						class="field-icon"><i class="fa fa-lock"></i></label>
					</label>
				</div>
				<!-- end section -->

				<div class="section">
					<label class="switch block"> <input type="checkbox" name="remember"
						id="remember" checked> <label for="remember" data-on="YES"
						data-off="NO"></label> <span> Keep me logged in ?</span>
					</label>
				</div>
				<!-- end section -->

			</div>
			<!-- end .form-body section -->
			<div class="form-footer">
				<button type="submit" class="button btn-primary">Sign in</button>
			</div>
			<!-- end .form-footer section -->
		</form>

	</div>
	<!-- end .smart-forms section -->
</div>
<!-- end .smart-wrap section -->