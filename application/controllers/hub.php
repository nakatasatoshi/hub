<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends CI_Controller
{
    public function index()
    {
        
    }

    public function add()
    {
        // postの受け取り
        $income = $this->input->post('income');
        $food_cost = $this->input->post('food_cost');
        $utility_cost = $this->input->post('utility_cost');
        $rent = $this->input->post('rent');
        $etc = $this->input->post('etc');
        $budget = $this->input->post('budget');
        $name = $this->input->post('name');
        $age = $this->input->post('age');
        $from = $this->input->post('from');
        $job = $this->input->post('job');
        // post情報を配列に格納
        $data = [
        'income' => $income,
        'food_cost' => $food_cost,
        'utility_cost' => $utility_cost,
        'rent' => $rent,
        'etc' => $etc,
        'budget' => $budget,
        'name' => $name,
        'age' => $age,
        'from' => $from,
        'job' => $job
        ];
        // Modelsディレクトリーのhub_modelにアクセス
        $this->load->model('hub_model');
        // hub_modelのhub_addメソッドにアクセスしpost情報を渡す
        $this->hub_model->hub_add($data);
        // redirect機能を使うためにhelper(url)を呼び出す
        // $this->load->helper('url');
        // redirect('http://localhost/Hub/setting/');
        header('location: http://localhost/Hub/setting/');
    }

    public function setting()
    {
        $this->load->view('setting_view');
        $this->load->view('header_view.php');
    }

}

?>
