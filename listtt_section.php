<?php  $this->load->view('include/header'); ?>
<?php  $this->load->view('include/sidebar'); ?>
<?php  $this->load->view('include/navbar'); ?>

<!DOCTYPE html>
<html>
<head>
   
    <title>List Subject</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('https:://bootstrap.css') ?>">

</head>
<body>
    <div class="navbar navbar-dark bg-dark">
    <div class="container">
   
    </div>
    </div>
      <div class="container" style="padding-top: 10px;"></div>             
      <h3>View Section</h3>
      <hr>
      <div class="row">
    <div class="col-md-12"> 
       <table class="table table-stripped">
                    <tr>
                        <th>#</th>
                        <th>Branch Name</th>
                        <th>Section Name</th>
                        <th>capacity</th>
                

                          <th>Edit</th>
                           <th>Delete</th>
                    </tr>
                    <?php  if(!empty($section)) { foreach($section as  $section) { ?>
                        <tr>
                            <td><?php echo $section['id']?></td> 
                             <td><?php echo$section['branch_name']?></td>
                            <td><?php echo $section['section_name']?></td>
                            <td><?php echo $section['capacity']?></td>
                      
                    
                            <td>
                          <a href="<?php echo base_url('section_con/edit/'. $section['branch_id']) ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                          <a href="<?php echo base_url('section_con/delete/'. $section['branch_id']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                  <?php  } } else {  ?>
                  <tr>
                    <td colspan="5">Records not found</td>
                  </tr>
                  <?php    } ?>
                </table>
                </div>
                </div>
                </div>
            </div>
            </div>
           </div>
           </body>
           </html>
           