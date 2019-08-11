<?php


    
   class UserModel extends CI_Model
   {
   	public function __construct(){
   		parent::__construct();
   		$this->load->database();
   	}

   	  public function getAll()
   	  {
   	  	 
   	  	 $r = $this->db->get('phonebook');
              return $r->result();
   	  }


   	  public function insert_data($x)
   	  {
   	  	
   	  	$this->db->insert('phonebook',$x);
   	  	$r = $this->db->affected_rows();
   	  	return $r;
   	  }


   	  public function fetchOne($id)
   	  {
   	  	
   	  	$q=$this->db->get_where('phonebook',['id'=>$id]);
   	  	return $q->result();
   	  }
   	  public function updateOne($id,$data)
   	  {
   	  	
   	  	$this->db->update('phonebook',$data,['id'=>$id]);
   	  	$r=$this->db->affected_rows();
   	  	return $r;
   	  }


   	  public function deleteData($id)
   	  {
   	  	
   	  	$this->db->delete('phonebook',['id'=>$id]);
   	  	$r=$this->db->affected_rows();
   	  	return $r;
   	  }

       public function check($email,$mobile){
        $q = $this->db->query("select * from phonebook where email='".$email."' and mobile='".$mobile."'");
        return $q->result();
        
     }

   }

?>