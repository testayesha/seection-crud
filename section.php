<?php  $this->load->view('include/header'); ?>
<?php  $this->load->view('include/sidebar'); ?>
<?php  $this->load->view('include/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
           <h5>
            Section Control
            <a href="<?php echo base_url('section_con/section'); ?>" class="btn btn-danger float-right">Assign Section</a>
           </h5>
            </div> 
            <div class="card-body"> 
                <form action="" method="POST">
                

                    <div class="form-group">
                        <label for="">Branch Name</label>
                     <select type="text" name="branch_id" class="form-control">
                        <option value="">Select Branch</option>
                      
                          
                        <?php 
                
                        foreach($get_branch as $branch)
                          {   ?>
                            <option value="<?php echo $branch['branch_id']; ?>"><?php echo $branch['branch_name']; ?></option>
                    <?php   }  ?>
                       
                         <!-- <small><?php echo form_error('branch_name');  ?></small> -->
                    </div> 
                    </select>
                    <div class="form-group">
                        <label for="" >Section Name</label>
                        <select type="text" name="section_id" class="form-control">
                        <option value="">Select Section </option>
                        <?php 
                
                foreach($get_section as $section)
                  {   ?>
                    <option value="<?php echo $section['section_id']; ?>"><?php echo $section['section_name']; ?></option>
            <?php   }  ?>
               
                      
                    </div>
                    </select>
                    <!-- <div class="form-group">
                        <label for="">Subject Code</label>
                        <input type="num"  name= "subject_code"  class="form-control">
                          <small>// echo form_error('subject_code');  ?></small>
                    </div> -->
   
                       <div class="form-group">
                        <label for="">Capacity</label>
                        <input type="text" name="capacity" class="form-control">
                           <small><?php echo form_error('capacity');  ?></small>
                       </div>

                    <!-- <div class="form-group">
                        <label for="">Subject Type</label>
                        <input type="text" name="subject_type" class="form-control">
                        <small>< echo form_error('subject_type');  ?></small>
                    </div> -->
                            
                    <div class="form-group">
                                <div class="input-group">
                                    <div class="form-actions form-group"><button type="submit"
                                            class="btn btn-primary btn_lg">Submit</button>
                                        <a href="<?php echo base_url('section_con/list_section'); ?>">
                                    </div>
                                </div>
                            </div>            
                                </div>
                                
                </form>
            </div>
        </div>
        </div>
       </div>
      </div>
