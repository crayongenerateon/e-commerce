<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	function get($params = array())
    {
        if(isset($params['id']))
        {
            $this->db->where('customer.customer_id', $params['id']);
        }

        if(isset($params['customer_email']))
        {
            $this->db->where('customer_email', $params['customer_email']);
        }

        if(isset($params['customer_password']))
        {
            $this->db->where('customer_password', $params['customer_password']);
        }
        
        if(isset($params['date_start']) AND isset($params['date_end']))
        {
            $this->db->where('customer_created_date', $params['date_start']);
            $this->db->or_where('customer_created_date', $params['date_end']);
        }

        if(isset($params['limit']))
        {
            if(!isset($params['offset']))
            {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if(isset($params['order_by']))
        {
            $this->db->order_by($params['order_by'], 'desc');
        }
        else
        {
            $this->db->order_by('customer_last_update', 'desc');
        }

        $this->db->select('customer_id, customer_full_name, customer_email, customer_password, customer_phone, customer_address, 
        	customer_created_date, customer_last_update');
        
        $res = $this->db->get('customer');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }

    // Add and update to database
    function add($data = array()) {
        
         if(isset($data['customer_id'])) {
            $this->db->set('customer_id', $data['customer_id']);
        }
        
         if(isset($data['customer_full_name'])) {
            $this->db->set('customer_full_name', $data['customer_full_name']);
        }
        
         if(isset($data['customer_email'])) {
            $this->db->set('customer_email', $data['customer_email']);
        }
        
         if(isset($data['customer_password'])) {
            $this->db->set('customer_password', $data['customer_password']);
        }
        
         if(isset($data['customer_phone'])) {
            $this->db->set('customer_phone', $data['customer_phone']);
        }
        
         if(isset($data['customer_address'])) {
            $this->db->set('customer_address', $data['customer_address']);
        }
        
         if(isset($data['customer_created_date'])) {
            $this->db->set('customer_created_date', $data['customer_created_date']);
        }
        
         if(isset($data['customer_last_update'])) {
            $this->db->set('customer_last_update', $data['customer_last_update']);
        }
        
        if (isset($data['customer_id'])) {
            $this->db->where('customer_id', $data['customer_id']);
            $this->db->update('customer');
            $id = $data['customer_id'];
        } else {
            $this->db->insert('customer');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }
    
    // Delete to database
    function delete($id) {
        $this->db->where('customer_id', $id);
        $this->db->delete('customer');
    }
	

}

/* End of file customer_model.php */
/* Location: ./application/models/customer_model.php */