<?php 
   class section_model extends CI_Model
{
  function all()
  {
   
   return $qury = $this->db->select('s.*,b.*,d.*')

    ->join('branch as b','s.branch_id = b.branch_id')
    ->join('section_dropdown as d','s.section_id = d.section_id')
    ->get('section as s')
    ->result_array();
   
  }

   


      public function insert_section($Array) 
    {
      return  $this->db->insert('section' , $Array);
    }  

           public function editsection($id)
    {
      $query = $this->db->get('section' , $id);
        return $query->row_array();
    }
    function getsection($section_id)
    {
       $this->db->where('id', $section_id);
       return $section = $this->db->get('section')->row_array();
    }
  
    function update($id, $formArray)
    {
       $this->db->where('id', $id);
       $this->db->update('section', $formArray);
 
    }
    function updateUser($section_id, $formArray)
    {
       $this->db->where('id', $section_id);
       $this->db->update('section', $formArray);
 
    }
   //  function get($id)
   //  {
   //     $this->db->where('id', $id);
   //     return $section = $this->db->get('section')->row_array();
   //     print_r($id);exit;
   //  }
    function delete($id)
    {
       $this->db->where('id', $id);
       $this->db->delete('section');
    }
    function get_branch()
    {
       $qury = $this->db->get('branch');
       return $qury->result_array();
    }
   //  function get($section_id)
   //  {
   //    $this->db->where('id',$section_id);
   //     $qury = $this->db->get('section');
   //     return $qury->row_array();
   //  }
    function get_section()
    {
       $qury = $this->db->get('section_dropdown');
       return $qury->result_array();
    }


    function get()
    {
       //$this->db->where('id', $section_id);
       return $section = $this->db->get('section')->row_array();
    } 
}


?>