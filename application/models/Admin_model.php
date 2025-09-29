<?php
class Admin_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function checkuser($data){
        $query = $this->db->get_where('super_admin', array('email'=>$data['email'], 'password' => base64_encode($data['password'])));
        $user = $query->row_array();
        return $user;
    }
    public function admin_details($pdata){
        $query = $this->db->get_where('super_admin', array('id'=>$pdata, 'status' =>1 ));
        $admin = $query->row_array();
        return $admin;
    }
    public function update_profile($data){
        if(isset($data['img']) and $data['img']!=''){
            $profile_pic='uploads/profile_pic/'.$data['img'];
        }
        $data = array('name'=>$data['userName'],'email'=>$data['email'],'phone_number'=>$data['phoneNumber'],'skype'=>$data['skype'],'twitter'=>$data['twitter'],'website'=>$data['website'],'profile_pic'=>$profile_pic);
        $query = $this->db->where('email',$data['email'])->update('super_admin',$data);
        if($query){
            return true;
        }
    }
    public function fetch_pass($session_id)
    {
        $fetch_pass=$this->db->get_where('super_admin', array('id'=>$session_id,));
        $res=$fetch_pass->row()->password;
        $password = base64_decode($res);
        return $password;
    }
    public function change_pass($session_id,$new_pass)
    {
        $newpassword = base64_encode($new_pass);
        $update_pass=$this->db->query("UPDATE super_admin set password='$newpassword' where id='$session_id'");
        if($update_pass){
            return true;
        }
        else{
            return false;
        }
    }
    public function add_client($post_data)
    {
       $add_client = $this->db->insert('clients',$post_data);
       if($add_client){
           return true;
       }
       else{
        return false;
       }
    }    
}
?>