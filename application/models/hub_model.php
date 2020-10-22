<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Bbs_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        // databaseに接続
        $this->load->database();
    }
    // 配列に入れた情報をDBに格納する
    public function bbs_add($data)
    {
        $this->db->insert('user',$data);
    }

    public function bbs_get()
    {
        //idの降順要素を取り出す
        $query = $this->db->order_by('id','DESC');
        //delete_flagが０のもののみを取り出す
        $query = $this->db->where('delete_flag',0);
        //table名userから取得
        $query = $this->db->get('user');
        //結果を配列として返す
        $result = $query->result('array');
        return $result;
    }

    public function bbs_delete($data)
    {
        $this->db->where('id',$data);
        $this->db->update('user',array('delete_flag' => 1));
    }

    public function bbs_rows()
    {
        $query = $this->db->where('delete_flag',0);
        return $query = $this->db->get("user")->num_rows();
    }

    public function pagination($per_page)
    {
        $pagination = $this->db->get(
        "user",
        $per_page,
        $this->uri->segment(3)
    );
    return $pagination;
    }
}

?>