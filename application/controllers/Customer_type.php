<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_type extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = "Customers";
        $data['customerType'] = $this->admin->get('customer_type');
        $this->template->load('templates/dashboard', 'customer_type/data', $data);
    }
}
