<?php
/**
 * Plugin Name: Crapcha
 * Description: Protect your WordPress site with a completely ridiculous and phony captcha that hassles for amusement. Or just use a strong password.
 * @see http://crapcha.com/
 */
class Crapcha_Plugin {
	function __construct() {
		add_action( 'login_form', array( $this, 'login_form' ) );
	}

	function login_form() {
		?>
		<style>
			#login { width: 358px; }
		</style>
		<p>
			<label>Security</label>
			<iframe src="http://crapcha.com/embed/" frameborder="0" scrolling="0" width="300" height="150" style="margin-top: 4px;"></iframe>
		</p>
		<?php
	}
}
new Crapcha_Plugin;