<?php
Class Bonusvip_model extends MY_Model
{
    var $table = 'bonusvip`';
    function get_list_bonusvip()
    {
        $sort_order = "asc";
        $sort_by = 'orderNo';
        $q = $this->db->select('*')
            ->from('bonusvip')
            ->order_by($sort_by, $sort_order)
            ->limit(1000);
        if ($this->input->get('title')) {
            $q->where('title', $this->input->get('title'));
        }
        if ($this->input->get('minvalue') && $this->input->get('maxvalue')) {
            $vp_from = str_replace('.','',$this->input->get('minvalue'));
            $vp_to   = str_replace('.','',$this->input->get('maxvalue'));
            $q->where('vippoint >='.$vp_from);
            $q->where('vippoint <='.$vp_to);
        }
        //nếu dữ liệu trả về hợp lệ
        $ret['rows'] = $q->get()->result();
        return $ret;
    }
}