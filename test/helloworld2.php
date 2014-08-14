<?php
/*
Plugin Name: Hello World 2
Plugin URI: http://ocaoimh.ie/
Description: A simple hello world plugin
Version: 0.1
Author: Donncha O Caoimh
Author URI: http://ocaoimh.ie/
*/

function hello_world_two_pages() {
	add_options_page('Hello World 2', 'Hello World 2', 'manage_options', 'helloworld2', 'hello_world_two');
}
add_action('admin_menu', 'hello_world_two_pages');


function hello_world_two() {
	$nonce = wp_create_nonce( 'helloworld' );
	?>
<script  type='text/javascript'>
<!--
// When the document loads do everything inside here ...
jQuery(document).ready(function(){
	jQuery.ajax({
		type: "post",url: "admin-ajax.php",data: { action: 'gethello', _ajax_nonce: '<?php echo $nonce; ?>' },
		beforeSend: function() {jQuery("#loading").show("slow");}, //show loading just when link is clicked
		complete: function() { jQuery("#loading").hide("fast");}, //stop showing loading when the process is complete
		success: function(html){ //so, if data is retrieved, store it in html
			jQuery("#helloworld").html(html); //show the html inside helloworld div
			jQuery("#helloworld").show("slow"); //animation
		}
	}); //close jQuery.ajax(
})
-->
</script>
<div class="wrap">
<div id='loading'>LOADING!</div>
<div id='helloworld'></div>
</div><?php
}

function get_hello_ajax() {
	check_ajax_referer( "helloworld" );
	?>Hello World!<?php
	die();
}
add_action( 'wp_ajax_gethello', 'get_hello_ajax' );
?>
