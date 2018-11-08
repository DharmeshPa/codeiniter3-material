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
require str_replace("administrator/", "", FCPATH) . 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

class Backup extends CI_Controller {
	//s3 credentials
	public $s3Config = array();
	//constructor
	public function __construct()
	{
		parent::__construct();
		//S3 crentials
		$this->s3Config = array(
			'version' => 'latest',
		    'region'  => 'eu-west-1',
		    'credentials' => array(
			    'key'=>'',
				'secret'=>''
	    	)
		);
	}
	//default method
	public function index()
	{
		// Instantiate an Amazon S3 client.
		$s3 = new S3Client($this->s3Config);
		//
		$s3->putObject([
	        'Bucket' => 'main_bucket',
	_       'Key'    => 'folder_inside_main_bucket/another_folder/test.pdf',
	        'SourceFile'   => 'where_the_file_is_on_server',
	        'ACL'    => 'public-read',
	    ]);
	}
}
