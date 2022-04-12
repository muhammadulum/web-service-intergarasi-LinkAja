<?php 
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;


//defined('BASEPATH') or exit('No direct script access allowed');

class ApiDemoController extends RestController
{

    public function inquery_get()
    {
        echo "tes authentication api berhasil";
    }

}

?>