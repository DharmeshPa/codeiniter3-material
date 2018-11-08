<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Super Class
 *
 * @package     
 * @subpackage  stats
 * @category    Statistics - stats
 * @author      
 * @link        
 */
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
//get the autoload
require str_replace("administrator/","",FCPATH ) . 'vendor/autoload.php';

class Reports extends CI_Controller {

	public function index()
	{
		//create new instance of the excel file
		$spreadsheet = new Spreadsheet();


		echo "<pre>";
		print_r ($spreadsheet);
		echo "</pre>";
	}

	/**
	*
	* // Creates and returns the Analytics Reporting service object.
	*  // Use the developers console and download your service account
	*  // credentials in JSON format. Place them in this directory or
	*  // change the key file location if necessary.
	*
	*/
	function initializeAnalytics()
	{
	  	// Creates and returns the Analytics Reporting service object.
		// Use the developers console and download your service account
		// credentials in JSON format. Place them in this directory or
		// change the key file location if necessary.
		$KEY_FILE_LOCATION = FCPATH . $this->config->item('statsAPIKeyPath');
		// Create and configure a new client object.
		$client = new Google_Client();
		$client->setApplicationName($this->config->item('initializeAnalytics'));
		$client->setAuthConfig($KEY_FILE_LOCATION);
		$client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
		
		$analytics = new Google_Service_Analytics($client);

		return $analytics;
	}
}

/* End of file Reports.php */
/* Location: ./application/controllers/Reports.php */