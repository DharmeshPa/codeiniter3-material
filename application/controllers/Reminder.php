<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Super Class
 *
 * @package     Sending emails
 * @subpackage  stats
 * @category    Statistics - stats
 * @author      
 * @link        
 */
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//get the autoload
require str_replace("administrator/","",FCPATH ) . 'vendor/autoload.php';

class Reminder extends CI_Controller {

	public function index()
	{
		$mail = new PHPMailer(true);

		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);

		echo "<pre>";
		print_r ($mail);
		echo "</pre>";
		//other sending email options
	}
}
/* End of file Reminder.php */
/* Location: ./application/controllers/Reminder.php */