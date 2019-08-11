<?php
  
   class Intermediate extends CI_Controller
   {


   	 public function __construct(){
        parent::__construct();
        $this->load->model('UserModel','um');
         $this->load->library('session');
     }


     
   	  public function index()
   	  {
            
   	  	
   	  	$r=$this->um->getAll();
   	  	$this->load->view('users/showall',['users'=>$r]);

   	  }



   	  public function ins()
   	  {
   	  		if($this->input->post('btn')!=null)
   	  	{
   	  		$arr= [
             'fname' => $this->input->post('fname'),
             'lname' => $this->input->post('lname'),
             'mobile' => $this->input->post('mobile'),
             'email' => $this->input->post('email')

   	  		];
   	  		//var_dump($arr);
   	  		// $this->load->model('UserModel','um');
   	  		$r=$this->um->insert_data($arr);
   	  		if($r==1)
   	  			$this->index();
   	  		else
   	  			echo "Error";

   	  	}
   	  	else
   	  	{
                  $this->load->view('users/insert');
   	  	}
   	  }



   	  public function read($id)
   	  {
   	  	echo $id;
   	  	$data=$this->um->fetchOne($id);
   	  	$this->load->view('users/updatedata',['users'=>$data]);

   	  }
   	  public function update($id)
   	  {
   	  	$arr=[
         'fname'=>$this->input->post('fname'),
         'lname'=>$this->input->post('lname'),
         'mobile'=>$this->input->post('mobile'),
         'email'=>$this->input->post('email')
   	  	];
   	  	$q=$this->um->updateOne($id,$arr);
   	  	if($q==1)
   	  	{
   	  		// alert("One row updated");
   	  		$this->index();
   	  	}
   	  	else
   	  		echo "Error!!";
   	  }


   	  public function delete($id)
   	  {
   	  	//echo $id;
   	  	$q=$this->um->deleteData($id);
   	  	if($q==1)
   	  		$this->index();
   	  	else
   	  		echo "Error!!";
   	  }

       public function login_check()
       {
       	  if($this->input->post('login_btn')!=null)
       	  {
       	  	$email = $this->input->post('email');
       	  	$mobile =  $this->input->post('mobile');
            $data = $this->um->check($email,$mobile);
            // var_dump($data);
             $arr = [];
              if(count($data)==1) 
                 {
                  foreach($data as $d){
                     $arr = [
                     'id' => $d->id,
                     'fname' => $d->fname,
                     'role' => $d->role

                     ];
                  }


                  $this->session->set_userdata('usersession',$arr);
                  if ($arr['role']=="admin") {
                    $this->index();                  
                  }
                  else
                  {
                    $data=$this->um->fetchOne($arr['id']);
                    $this->load->view('users/showall',['users'=>$data]);

                  }
                }
                else
                {

                   $this->load->view('users/login',['msg'=>'Invalid Username or Password']);
                 }
                
          }
          else
          {
            $this->load->view('users/login');
          }
       	 
       }


        public function logout(){
        $arr = ['id'=>0,'fname'=>NULL];
        $this->session->unset_userdata('usersession',$arr);
        echo "<script>alert('You have Successfully Logged Out')</script>";
        $this->login_check();
        
       }



   }

?>