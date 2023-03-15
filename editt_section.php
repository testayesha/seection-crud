<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidebar'); ?>
<?php $this->load->view('include/navbar'); ?>

<!-- Main Content -->


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">

            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="padding-top: 10px; ">
    <h3>Update leave</h3>
    <form method="post" name="section" action="<?php echo base_url() . 'section_con/edit/' . $manage['id']; ?>">
        <div class="row">
            <!-- <div class="col-md-6">
                <label for="validation" class="form-label">category</label>
                <select class="form-select" name="branch_id" class="form-control" id="validation"
                    value="<?php //////echo set_value('branch_id'); ?>" required>
                    <option selected disabled value="<?php //echo set_value('branch_id'); ?>">
                        <?php //echo set_value('branch_id', $manage['branch_id']); ?>
                    </option>
                    <?php// foreach ($get_branch as $get_branch) {
                                //if ($get_branch['id'] == $leaves['user_id']) {
                                ?>
                    <option value="<?php// echo $get_branch['branch_id']; ?>" selected class="form-control" required="">
                        <?php// echo $get_branch['branch_name']; ?>
                    </option>
                    <?php
                                //}
                           // }
                            ?>
                </select>
                <?php echo form_error('request'); ?>

                <div class="valid-feedback">
                    <?php //echo set_value('branch_id'); ?>
                </div>
            </div> -->





            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Category</label>
                                <select class="form-select" name="branch_id" class="form-control" id="validation"
                                    value="<?php echo set_value('branch_id');?>">
                                    <?php foreach($get_branch as $branch)
{                                    if ($get_branch['branch_id'] == $manage['branch_id']) {
    ?>
                                    <option value="<?php echo $branch['branch_id'];?>" selected class="form-control"
                                        required=""><?php echo $branch['branch_name']?>
                                    </option>
                                    <?php 
} else {
    ?>
                                    <option value="<?php echo $branch['branch_id']; ?>" class="form-control" required="">
                                        <?php echo $branch['branch_name']; ?>
                                    </option>
                                    <?php  }
    }
?>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('branch_id');?>
                                </div>
                            </div>

            




            <br>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Capacity</label>
                    <input type="text" name="capacity" value="<?php echo set_value('Capacity', $manage['capacity']); ?>"
                        class="form-control">
                    <?php echo form_error('capacity'); ?>
                </div><!-- .animated -->
            </div>

        </div>

        <!-- Roles -->

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="<?php echo base_url() . 'section_con/list_section/'; ?>" class="btn btn-secondary">Cancel</a>

        </div>

</div>
</div><!-- .animated -->
</div>
<!-- .content -->
</form>


<div class="clearfix"></div>
<?php $this->load->view('include/footer'); ?>
</div>
<!-- /#right-panel -->


<?php $this->load->view('include/script'); ?>