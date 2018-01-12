<?php
Class Faq_model extends MY_Model
{
    var $table = 'faq';
}
 function get_list_faq_home(){
        $this->db->where('status',1);
        $this->db->order_by('orderNo','DESC');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }
    }
