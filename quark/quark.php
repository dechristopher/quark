<?php

//TODO Complete the framework. :P

class qUark {

	public $edition = "alpha";
	public $version = "0.03";
	public $url; //Base URL qUark is initialized on
	public $mode; //qUark version
	public $db; //DB object reference
	public $dbc_debug; //DB error string
	public $secure;
	public $prefix;

	/**
	* @param $url - base domain name and directory if applicable as string.
	* @param $mode - boolean true if error reporitng (debugging) is enabled.
	* @param $secure - boolean true if SSL is enabled.
	*/
	public function __construct($url, $mode, $secure){
		$this->url = $url;
		$this->mode = $mode;
		$this->secure = $secure;
		$this->edition = $edition;
		$this->version = $version;
	}

	/**
	* @param $sec
	*/
<<<<<<< HEAD
	public function main($sec){
=======
	public function main($sec /** More vars to come */){
>>>>>>> origin/master

		require_once('qUark.config.php');
		init();

		switch($sec){
			case true:
				$prefix = "https://";
				break;
			case false:
				$prefix = "http://";
				break;
		}
	}

	/**
	* @return qUark version and edition in string formatted as 'qUark v.0.01 aplha'
	*/

	public function qUarkString(){
			return 'qUark v.' . $version . ' ' . $edition;
	}

	/**
	* Initializes the framework under either production or debug mode.
	* @return Error reporting is off message if error reporting is off
	*/
	public function init(){
		if($mode = true){
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(-1);
		}else{
			return "Error reporting for qUark version " . $version . " is turned off";
		}
	}

	/**
	* @return qUark version as a string.
	*/
	public function getVersion(){
		return $version;
	}

	/**
	* @param $ip - IP as string
	* @param $username - User's username as string.
	* @param $password - User's password as string.
	* @param $database - MySQL Database name as string.
	*
	* Initialize and connect to mysql database with mysqli driver.
	*/
	public function dbc($ip, $username, $password, $database){
		if($this->db = new mysqli($ip, $username, $password, $database)){
			$this->dbc_debug = "Connected.";
		}else{
			$this->dbc_debug = "Error connecting to database.";
		}
	}

	/**
	* Execute a database query.
	*/
	public function dbq(){
		//TODO Query DB
	}

	/**
	* @return remote user's IP as a string.
	*/
	public function getip(){
		return $_GLOBAL['REMOTE_ADDR'];
	}


	/**
	* @param $r - route as string
	*/
	public function route($r){
		header("Location : " . $prefix . $url . "/" . $r);
	}

}

?>
