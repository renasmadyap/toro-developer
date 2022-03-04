<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CostumerType extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = "customer_type";
        $data['customer_type'] = $this->admin->get('customer_type');
        $this->template->load('templates/dashboard', 'customer_type/data', $data);
    }
}
