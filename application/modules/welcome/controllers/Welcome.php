<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	protected $developers_url = 'https://api.worldbank.org/v2/country?format=json';
    protected $token = '';
	public function index()
	{
		$bank_data = $this->view('bank',array(array('order_by'=>'id ASC')));
		if(empty($bank_data)){
		$url = $this->developers_url;
        $fields = array("token" => $this->token);
        $result = $this->_post_api($fields, $url);
		$data=array();
		if(!empty($result)){
			foreach($result as $val){
				if(is_array($val)){

					foreach($val as $value){
						$data['iso2Code']=isset($value->iso2Code)?$value->iso2Code:'';
						$data['name']=isset($value->name)?$value->name:'';
						$data['region']=isset($value->region->value)?$value->region->value:'';
						$data['incomeLevel']=isset($value->incomeLevel->value)?$value->incomeLevel->value:'';
						$data['capitalCity']=isset($value->capitalCity)?$value->capitalCity:'';
						$data['latitude']=isset($value->latitude)?$value->latitude:'';
						$data['longitude']=isset($value->longitude)?$value->longitude:'';
						$this->add('bank',$data);
					}
				}
			}

		}
	}
		$datas['banks']= $this->view('bank',array(array('order_by'=>'id ASC')));
		$this->load->view('list',$datas);
	}
	public function update($id){
		if($id)
					$data['bank'] = $this->get_row('bank',array('id'=>$id)); 
		$this->load->view('form',$data);
	} 
	public function save(){
		$inputAll=$this->input->post();
		$this->form_validation->set_rules('incomeLevel', 'income level', 'trim|required|xss_clean');	
		$this->form_validation->set_rules('latitude', 'latitude', 'trim|required|xss_clean');	
		$this->form_validation->set_rules('longitude', 'longitude', 'trim|required|xss_clean');	
		$this->form_validation->set_rules('capitalCity', 'capital city', 'trim|required|xss_clean');	
    	if ($this->form_validation->run() != FALSE){
			$inputdata['incomeLevel'] = $inputAll['incomeLevel'];
			$inputdata['latitude'] = $inputAll['latitude'];
			$inputdata['longitude'] = $inputAll['longitude'];
			$inputdata['capitalCity'] = $inputAll['capitalCity'];
			$where = array('id'=>$inputAll['id']);
			$this->edit('bank', $inputdata,$where);
			redirect('/');
		}
	} 

	public function add($table_name, $data){
		return $this->db->insert($table_name, $data); 
	}
	public function edit($table_name, $data, $where){
		return $this->db->update($table_name, $data, $where);
	} 
	public function view($table_name, $where, $output="ARRAY"){
		$dbobj =$this->db;		
		$dbobj->from($table_name);
		foreach($where as $field => $value){
			if(is_array($value)){
				foreach($value as $ci_db_fun => $where_array){
					if($ci_db_fun == "select") $dbobj->$ci_db_fun($where_array,false);
					else  $dbobj->$ci_db_fun($where_array);
				}
			}else{
				$dbobj->where($field, $value);
			}
		}
		$query=$dbobj->get();
		
		if($output=="OBJECT") return $query->result();
		else return $query->result_array();
	}

	public function get_row($table_name, $where, $field=""){
		$query = $this->db->get_where($table_name, $where);
		if($query->row())
		{
			if($field)
			return $query->row()->$field;
			else 
			return $query->row();	
		}
		else 
			return false;
	}

	private function _post_api(Array $fields, $url) {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            $result = curl_exec($ch);
        } catch (Exception $e) {
            return false;
        }
        curl_close($ch);
        if ($result)
            return json_decode($result);
        else
            return false;
    }
}
