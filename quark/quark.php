<?php

//TODO Complete the framework. :P
class quark {
	public $version = "0.1";
	public $url; //Base URL qUark is initialized on
	public $mode; //qUark version
    public $db; //DB object reference
    public $dbc_debug;

    /**
     * @param $url
     * @param $mode
     */
    function __construct($url, $mode){
		$this->url = $url;
		$this->mode = $mode;
	}

    /**
     *Initializes the framework under either production or debug mode.
     */
    public function init(){
		if($this->mode = true){
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
            error_reporting(-1);
		}else{
            return "Error reporting for qUark version " . $this->version . " is turned off";
		}
	}

    /**
     * @return string as qUark version
     */
    public function getVersion(){
        return $this->version;
    }

    /**
     * @param $ip
     * @param $username
     * @param $password
     * @param $database
     *
     * Initialize and connect to mysql database with mysqli driver.
     */
    public function dbc($ip, $username, $password, $database){
        if($this->db = new mysqli($ip, $username, $password, $database)){
            $this->dbc_debug = "Connected";
        }else{
            $this->dbc_debug = "";
        }
    }

    /**
     * Execute a database query.
     */
    public function dbq(){

    }
}

?>