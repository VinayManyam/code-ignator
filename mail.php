<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		//load model -> model_products 
               
		
		 $this->load->helper('url');
	}
    
    
public function index()
	{
           	$ci = get_instance();
$ci->load->library('email');
$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.gmail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "email@gmail.com"; 
$config['smtp_pass'] = "password";
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

$ci->email->initialize($config);

$ci->email->from('replay@gmail.com', 'Blabla');
$ci->email->to('destination@gmail.com');
$ci->email->subject('This is an email test');
$ci->email->message('hithis is email testing 2');
$res=$ci->email->send();
if($res){
    echo "sent successfully";
}else{
    echo "mail sending failed";
}

  
		
	}
        
    

}