<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CobaBmt extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        //$this->load->model('Tagihan_model','tagihan');
        $this->load->helper('url');
    }
	
	public function index()
	{
		$this->load->view('coba');
	}

	public function bmtyasma()
	{
		$details = [
            'detail_1' => 'Komite TK,30000'        
            ];
		$data =
            [
                'group_id' => '11',
                'customer_id' => '4433',
                'customer_name' => 'KIANO ALVIN NALADHIPA',
                'period' => '202103',
                'nominal' => '30000',
                'admin' => '0',
                'total' => '30000',
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

        $id = $this->input->get('group_id');

        if ($id == $data['group_id']) {
        //
         echo json_encode($data, JSON_PRETTY_PRINT);
        } elseif ($id == null) {
		//
		echo json_encode($data_already_paid, JSON_PRETTY_PRINT);
        } else {
        //
        echo json_encode($data_not_found, JSON_PRETTY_PRINT);
        
        }
	}
}
