<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;


//defined('BASEPATH') or exit('No direct script access allowed');

class TkitmsPayment extends RestController
{
    public function __construct()
    {

        parent::__construct();
        //$this->load->model('Tagihan_model','tagihan');
        $this->load->library('form_validation');
        $this->methods['inquery_get']['limit'] = 800;
        $this->methods['pay_post']['limit'] = 800;
        $this->methods['check_status_get']['limit'] = 800;
    }

    public function inquiry_get()
    {
        // Users from a data store e.g. database
        $details = [
            'detail_1' => 'test',
            'detail_2' => 'test2'
        ];
        $data =
            [
                'customer_id' => '12312',
                'customer_name' => 'Test',
                'period' => '202103',
                'nominal' => '100000',
                'admin' => '2500',
                'total' => '102500',
                'details' => $details,
                'respon_code' => 0,
                'message' => 'SUCCESS'


            ];
        $data_not_found = [
            'respon_code' => 14,
            'message' => 'Number not Found'
        ];

        $data_already_paid=[
            'respon_code' => 11,
            'message' => 'Bill already paid'
        ];

        $id = $this->get('customer_id');


        if ($id == $data['customer_id']) {
            //$this->set_response($user, RestController::HTTP_OK); // OK (200) being the HTTP response code
            $this->response(
                $data
            , RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        } elseif ($id == null) {


            $this->set_response($data_already_paid, RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        } else {
            $this->set_response(
            $data_not_found, RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code
        }
        //}
    }

    public function pay_post()
    {
       

        $details = [
            'detail_1' => 'test',
            'detail_2' => 'test2'
        ];
        $data =
            [
                'customer_id' => '12312',
                'customer_name' => 'Test',
                'period' => '202103',
                'nominal' => '100000',
                'admin' => '2500',
                'total' => '102500',
                'details' => $details,
                'no_ref'=>'43932jfdaiwof',
                'respon_code' => 0,
                'message' => 'SUCCESS'


            ];
        $data_pending = [
                'customer_id' => '12312',
                'customer_name' => 'Test',
                'period' => '202103',
                'nominal' => '100000',
                'admin' => '2500',
                'total' => '102500',
                'details' => $details,
                'no_ref'=>'',
                'respon_code' => 39,
                'message' => 'PENDING'
        ];

        $id = $this->post('customer_id');

        if ($id==$data['customer_id']) {
            //$this->set_response($message, RestController::HTTP_CREATED); // CREATED (201) being the HTTP response code
            $this->response(
                $data, RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        } else {
            $this->response(
                $data_pending, RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        }
    }





    public function check_status_get()
    {
        // $this->some_model->update_user( ... );
        $details = [
            'detail_1' => 'test',
            'detail_2' => 'test2'
        ];
        $data =
            [
                'customer_id' => '12312',
                'customer_name' => 'Test',
                'period' => '202103',
                'nominal' => '100000',
                'admin' => '2500',
                'total' => '102500',
                'details' => $details,
                'no_ref'=>'43932jfdaiwof',
                'respon_code' => 0,
                'message' => 'SUCCESS'


            ];
        $data_pending = [
                'customer_id' => '12312',
                'customer_name' => 'Test',
                'period' => '202103',
                'nominal' => '100000',
                'admin' => '2500',
                'total' => '102500',
                'details' => $details,
                'no_ref'=>'',
                'respon_code' => 39,
                'message' => 'PENDING'
        ];
        $id = $this->get('customer_id');
        if ($id == $data['customer_id']) {


            //$this->set_response($message, RestController::HTTP_CREATED); // CREATED (201) being the HTTP response code
            $this->response($data, RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        } else {
            $this->response($data_pending, RestController::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        }
    }
}
