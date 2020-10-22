<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bbs extends CI_Controller
{
    public function index()
    {
        $this->load->model('bbs_model');
        //配列として返ってきた結果を$dataに格納する
        $data['array_inf'] = $this->bbs_model->bbs_get();
        //paginationの作成
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/codeigniter/bbs/index';
        $config['total_rows'] = $this->bbs_model->bbs_rows();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->bbs_model->pagination($config['per_page']);
        //$dataを第２引数にいれviewに送る
        $this->load->view('bbs_view',$data);
    }

    public function add()
    {
        // postの受け取り
        $username = $this->input->post('username');
        $message = $this->input->post('message');
        //空の場合エラーメッセージを表示する
        if($username == "" || $message == "") {
            if($username == ""){
                $data['error_username'] = ["username" => "表示名を入力してください"
                ];
            }
            if($message == ""){
                $data['error_message'] = ["message" => "メッセージを入力してください"
                ];
            }
            $this->load->model('bbs_model');
            // 配列として返ってきた結果を$dataに格納する
            $data['array_inf'] = $this->bbs_model->bbs_get();
            // $dataを第2引数にいれviewに送る
            $this->load->view('bbs_view',$data);
        }else{
        // XSS フィルタリング
        $username = $this->security->xss_clean($username);
        $message = $this->security->xss_clean($message);
        // post情報を配列に格納
        $data = [
            'username' => $username,
            'message' => $message
        ];
            //Modelsディレクトリーのbbs_modelにアクセス
        $this->load->model('bbs_model');
            //bbs_modelのbbs_addメソッドにアクセスしpost情報を渡す
        $this->bbs_model->bbs_add($data);
            //redirect機能を使うためにhelper(url)を呼び出す
        $this->load->helper('url');
        redirect('http://localhost/codeigniter/');
        }
    }

    public function delete()
    {
        $delete_num = $this->input->get('num',true);
        $this->load->model('bbs_model');
        $this->bbs_model->bbs_delete($delete_num);
        header('location: http://localhost/codeigniter/');
    }
}

?>
