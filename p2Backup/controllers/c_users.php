<?php

class users_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
		echo "terratron terrorize!<br>";	
	}

	public function index() {
		echo "welcome to the user's controller";
	}

	public function signup() {
		
		# Setup view
			$this->template->content = View::instance('v_users_signup');
			$this->template->title   = "Signup";
			
		# Render template
			echo $this->template;
		
	}
	
	public function p_signup() {
		
	# Dump out the results of POST to see what the form submitted
	// print_r($_POST);
		
	# encrypt password
	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	$_POST['created'] = Time::now();
	$_POST['modified'] = Time::now();
	$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());	
		
	# Insert this user into the database
	$user_id = DB::instance(DB_NAME)->insert("users", $_POST);
	
	# For now, just confirm they've signed up - we can make this fancier later
	echo "You're signed up";
	
	}
	
	public function login() {

	# Setup view
		$this->template->content = View::instance('v_users_login');
		$this->template->title   = "Login";
		
	# Render template
		echo $this->template;
	}
	
	public function p_login() {
	
	# Hash submitted password so we can compare it against one in the db
	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	
	# Search the db for this email and password
	# Retrieve the token if it's available
	$q = "SELECT token 
		FROM users 
		WHERE email = '".$_POST['email']."' 
		AND password = '".$_POST['password']."'";
	
	$token = DB::instance(DB_NAME)->select_field($q);	
				
	# If we didn't get a token back, login failed
	if(!$token) {
			
		# Send them back to the login page
		Router::redirect("/users/login/");
		
	# But if we did, login succeeded! 
	} else {
			
		# Store this token in a cookie
		@setcookie("token", $token, strtotime('+2 weeks'), '/');
		
		# Send them to the main page - or whever you want them to go
		Router::redirect("/");

					
	}

}
	
	
	public function logout() {
		echo "display the logout page";
	}
	
	public function profile($user_name) {
	
			#only want logged in users
			if (!$this->user) {
				echo "Members only, please login";
				return false;
			
			}else{
		
			# Setup the view
			$this->template->content = View::instance("v_users_profile");
			$this->template->title = $user_name."'s Profile";
			$this->template->content->user_name = $user_name;
			
			# Setup client Files
			$client_files = Array("/css/users.css", "/js/users.js");
			$this->template->client_files = Utils::load_client_files($client_files);
			
			
			# Render the view
			echo $this->template;	
		}
	}



}