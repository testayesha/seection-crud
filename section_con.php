<?php 

 defined('BASEPATH') OR exit('No direct script access allowed');

 class section_con extends CI_Controller 
 {     
      
      function __construct()
      {
        parent::__construct(); 
        $this->load->model("section_model");
    
      }

  //  public function create() 
  //  {
  //     $this->load->view('include/header');
  //      $this->load->view('Users/section'); 

  //  } 
   public function section() {
    $page_data['get_branch'] = $this->section_model->get_branch();
    $page_data['get_section'] = $this->section_model->get_section();

    $this->load->model('section_model');
          // $page_data['get_branch'] = $this->section_model->get_branch();
          // $page_data['get_s'] = $this->section_model->get_section();
          $this->form_validation->set_rules('branch_id' , 'Branch Name' , 'required');
          // $this->form_validation->set_rules('section_id' , 'Section id' , 'required');
          $this->form_validation->set_rules('capacity' , 'Capacity' , 'required');
          $this->form_validation->set_rules('section_id', 'section_id', 'required');

      
          if($this->form_validation->run() == False)
{

  $this->load->view('Users/section',$page_data);
} else 
          {

//save in database
            $data = array();
            // $formArray['section_name'] = $this->input->post('section_name');
            // $formArray['capacity'] = $this->input->post('capacity');
            // $formArray['branch_id'] = $this->input->post('branch_id');


            $data =[
              'branch_id' =>$this->input->post('branch_id'),
                'section_id' =>$this->input->post('section_id'),
                'capacity' =>$this->input->post('capacity'),
              
            ];   
            $this->load->model('section_model');
            $this->section_model->insert_section($data);
            redirect(base_url('section_con/list_section')); 
          } 
          
        
        }
//         public function list_section()
// {
//   $this->load->model('section_model');
//   $section = $this->section_model->all();
//   $data = array();
//   $data['section'] = $section;
  
//   $this->load->view('Users/list_section',$data);
// } 

 function list_section()
{
  $this->load->model('section_model');
  $section = $this->section_model->all();
  $data = array();
  $data['section'] = $section;
  $this->load->view('Users/list_section',$data);
} 


// function edit($id)
//      {
  
//    $this->load->model('section_model');
//    $page_data['get_branch'] = $this->section_model->get_branch();
//    $page_data['get_section'] = $this->section_model->get_section();
   
//    $page_data['s'] = $this->section_model->get($id);
//   //  print_r("");die;

   
//    $this->form_validation->set_rules('branch_id', 'Branch', 'required');
//    $this->form_validation->set_rules('section_id', 'Section', 'required');
//    $this->form_validation->set_rules('capacity' , 'Capacity' , 'required');

//   if ($this->form_validation->run() == false) {
//     $this->load->view('Users/edit_section', $page_data);
    
//   } else {
//     //update user record
//     $formArray = array();
//     $formArray['branch_id'] = $this->input->post('branch_id');
//     $formArray['section_id'] = $this->input->post('section_id');
//     $formArray['capacity'] = $this->input->post('capacity');

//   $this->section_model->update($id, $formArray);
//   $this->session->set_flashdata('success', 'Record updated successfully');
//   redirect(base_url() . 'section_con/list_section');
// }
//      }
     

//      public function edit($id)
//      {
//        $this->load->model('section_model');
//        $section = $this->section_model->get($id);
//        $data = array();
//        $data['section'] = $section;
//        $data['get_branch'] = $this->section_model->get_branch();
//        $data['get_section'] = $this->section_model->get_section();
// // print_r($section);exit;
//        $this->form_validation->set_rules('branch_id', 'Branch', 'required');
//        $this->form_validation->set_rules('section_id', 'Section', 'required');
//        $this->form_validation->set_rules('capacity' , 'capacity' , 'required');
      //      $this->form_validation->set_rules('address', 'address', 'required');
      //  $this->form_validation->set_rules('mobile_no', 'mobile_no', 'required');
      //  $this->form_validation->set_rules('D_O_B', 'D_O_B', 'required');
      //  $this->form_validation->set_rules('role_id', 'role_id', 'required');
   
   
      //  if ($this->form_validation->run() == false) {
      //    $page_data['get_branch'] = $this->section_model->get_branch();
      //    $page_data['get_section'] = $this->section_model->get_section();

      //    $this->load->view('Users/edit_section', $data);
   
      //  } else {
      //    $formArray = array();
      //    $formArray['branch_id'] = $this->input->post('branch_id');
      //    $formArray['section_id'] = $this->input->post('section_id');
      //    $formArray['capacity'] = $this->input->post('capacity');
      //   //       $formArray['address'] = $this->input->post('address');
      //   //  $formArray['mobile_no'] = $this->input->post('mobile_no');
      //   //  $formArray['D_O_B'] = $this->input->post('D_O_B');
      //   //  $formArray['role_id'] = $this->input->post('role_id');
      //    $this->section_model->updateUser($id, $formArray);
      //    $this->session->set_flashdata('success', 'record updated successfully');
        //  redirect(base_url() . 'section_con/list_section');
      //  }
   
   
   
      public function edit($id)
      {
        $this->load->model('section_model');
        $manage = $this->section_model->get($id);
        $data = array();
      // print_r($manage);exit;

        $data['manage'] = $manage;
        $data['get_branch'] = $this->section_model->get_branch();
        $data['get_section'] = $this->section_model->get_section();
        // $data['get_leave_category'] = $this->section_model->get_leave_category();
        // $data['get_branch'] = $this->section_model->get_branch();
        
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('branch_id', 'branch_id', 'required');
        $this->form_validation->set_rules('section_id', 'section_id', 'required');
        // $this->form_validation->set_rules('start_date', 'start_date', 'required');
        // $this->form_validation->set_rules('end_date', 'end_date', 'required');
        // $this->form_validation->set_rules('reasons', 'reasons', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');
      
      
        if ($this->form_validation->run() == false) {
          // $page_data['get_leave_category'] = $this->section_model->get_leave_category();
          $page_data['get_branch'] = $this->section_model->get_branch();
          $page_data['get_section'] = $this->section_model->get_section();
      
          $this->load->view('Users/edit_section', $data);
        } else {
          $formArray = array();
         
          $formArray['capacity'] = $this->input->post('capacity');
          $formArray['branch_id'] = $this->input->post('branch_id');
          $formArray['section_id'] = $this->input->post('section_id');
          // $formArray['start_date'] = $this->input->post('start_date');
          // $formArray['end_date'] = $this->input->post('end_date');
          // $formArray['reasons'] = $this->input->post('reasons');
          // $formArray['status'] = $this->input->post('status');
      
          $this->section_model->update($id, $formArray);
          $this->session->set_flashdata('success', 'record updated successfully');
          redirect(base_url() . 'section_con/list_section');
        }}
   
     






     
  




  // }
       
 

  function delete($id)
  {
      $this->load->model('section_model');
      $section = $this->section_model->get($id);
      if (empty($section)) {
      
          redirect(base_url(). 'section_con/list_section');
      }
      $this->section_model->delete($id);
  
      redirect(base_url(). 'section_con/list_section');
  } 
       

}
 
     
            
          

        

?>