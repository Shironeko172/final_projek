<?php
class Data_Model extends SENE_Model
{
    public $tbl = 'data';
    public $tbl_as = 'dt';

    public function __construct()
    {
        parent::__construct();
        $this->db->from($this->tbl, $this->tbl_as);
    }
    public function get()
    {
        return $this->db->get();
    }
    public function getById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get_first();
    }
    public function getdata($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($id);
    }
    public function getps()
    {
        $sql = "SELECT `model`,`id` From `$this->tbl` WHERE merek = 'PLAYSTATION'";
        return $this->db->query($sql);
    }
    public function getxbox()
    {
        $sql = "SELECT `model`,`id` From `$this->tbl` WHERE merek = 'XBOX'";
        return $this->db->query($sql);
    }
    public function getnintendo()
    {
        $sql = "SELECT `model`,`id` From `$this->tbl` WHERE merek = 'NINTENDO'";
        return $this->db->query($sql);
    }
}