<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function email_template($emailContent)
{
	$message = '';
	$message .= '<div style="width:95%; margin: auto; font-family: Roboto, sans-serif; padding:30px;">
 				 <table width="60%" border="0" cellpadding="0" cellspacing="0" style="margin: auto; min-height: 200px; padding: 25px 0px 0px;">
 				 	<tr>
 				 		<td align="center" style="padding: 0px;">
 				 				<img  style="margin:0px 0px 30px; padding:0px;" src="'.base_url().'assets/images/footerlogoemail.png" alt="" />
 				 
 				 		</td>
 				 	</tr>
 				 	<tr>
		                <td align="left" style="padding:40px; background-color: #155CA4; border-radius: 10px 10px;">
		                    <div style="color:#ffffff; font-size:16px; line-height: 150%;">
		                    '.$emailContent.'
		                    <div>
		                </td>
		            </tr>
		            <!--<tr>
		                <td style="border:1px solid #1181DF; padding:20px 20px; margin: 20px; border-radius: 0px 0px 10px 10px; background-color:#135393;">
		                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
		                         <tr>
		                       <td align="center">
		                            <p style="color: #EF6620; font-size: 14px; letter-spacing: 10px; font-weight: bold;">FOLLOW US</p>
		                            <a style="padding:0px 5px;" href="#"><img src="'.base_url().'assets/images/facebook.png"></a>
		                            <a style="padding:0px 5px;" href="#"><img src="'.base_url().'assets/images/instagram.png"></a>
		                            <a style="padding:0px 5px;" href="#"><img src="'.base_url().'assets/images/linkedin.png"></a>
		                            <a style="padding:0px 5px;" href="#"><img src="'.base_url().'assets/images/twitter.png"></a>
		                        </td>
		                        </tr>
		                    </table>
		                </td>
		            </tr>-->
 				 </table>
			</div>';

	return $message;
}

// $valueArray = array(
// 	'toEmail' => '',
// 	'fromEmail' => '',
// 	'fromName' => '',
// 	'subject' => '',
// 	'message' => '',
// );
function custom_email_function($valueArray)
{
	if(empty($valueArray))
	{
		return false;
	}

	$emailconfig = Array( 
		'protocol'  => 'smtp', 
		'smtp_host' => 'ssl://smtp.gmail.com', 
		'smtp_port' =>  465, 
		'smtp_user' => 'armentum.testing@gmail.com', 
		'smtp_pass' => 'armentum@123', 
		'_smtp_auth' => TRUE,
		// 'smtp_crypto' => 'tls',
		'charset' => 'utf-8',
		'wordwrap' => TRUE,
		'crlf'      => "\r\n", 
		'newline'   => "\r\n"
		);

	$CI =& get_instance();
	$CI->load->library('email');

	//$emailconfig = $CI->config->item('email');
	//print_r($emailconfig); exit;
	$CI->email->initialize($emailconfig);
	$CI->email->set_mailtype("html");
	$CI->email->set_newline("\r\n");

	$CI->email->from($valueArray['fromEmail'], $valueArray['fromName']);
	$CI->email->to($valueArray['toEmail']);
	$CI->email->subject($valueArray['subject']);
	$CI->email->message($valueArray['message']);
	$success = $CI->email->send();
	if($success) 
	{
		return true;
	}
	else {
		return false;
	}
}

