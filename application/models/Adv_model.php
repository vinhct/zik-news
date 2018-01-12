<?php
Class Adv_model extends MY_Model
{
    var $table = 'adv';

    function get_adv_left(){
        $this->db->where('position',0);
        $this->db->order_by('orderNo','ASC');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }
    }
    function get_adv_right(){
        $this->db->where('position',1);
        $this->db->where('status',1);
        $this->db->order_by('orderNo','ASC');
        $query = $this->db->get($this->table);

        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }
    }
}
