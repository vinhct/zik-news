<?php
Class Rate_model extends MY_Model
{
    var $table = 'news_rating';

    function get_count_rate_by_newsID($newsid)
    {
        $this->db->select('id,news_id,rating')
            ->from('news_rating')
            ->where('news_id', $newsid);
       		$query = $this->db->get();
            return $query->num_rows();
    }
    function get_info_rate_by_newsID($newsid)
    {
        $this->db->select('id,news_id,rating,count')
            ->from('news_rating')
            ->where('news_id', $newsid);
       		$query = $this->db->get();
           if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    function reportRate($newsid)
    {
    	$query = $this->db->query("SELECT ROUND(AVG(rating), 1) AS average,rating,count FROM news_rating where news_id=".$newsid);
		foreach($query->result_array() as $row){
		   	$rate_db = $row['count'];
    		$sum_rates[] = $row['rating'];
            $average= $row['average'];
		}
		if(@count($rate_db)){
    	$rate_times = $rate_db;
    	$sum_rates = array_sum($sum_rates);
    	$rate_value =$average;
    	$rate_bg = (($rate_value)/5)*100;
		}
		else{
		    $rate_times = 0;
		    $rate_value = 0;
		    $rate_bg = 0;
		}
		$result=round($rate_value)." ( ".round($rate_bg)." % ) ".$rate_times." votes";
		return $result;
    }
}
