<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4><?php if(isset($this->admin_data)){ echo $this->admin_data['name']; }?> Edit Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url('dashboard');?>"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('profile');?>"> Profile </a>
                                    </li>
                                    <li class="breadcrumb-item">Change Password
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <div class="tab-content">
                                <!-- tab panel personal start -->
                                <div class="tab-pane active" id="personal" role="tabpanel">
                                    <!-- personal card start -->
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div id="wizard">
                                                            <section>
                                                                <form method="post" action='' class="change_password_from">
                                                                    <fieldset>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                        <label class="block">Old Password</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                        <input type="password" name="old_pass" id="name" placeholder="Old Password" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                        <label>New Password</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                        <input type="password" name="new_pass" id="password" placeholder="New Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                        <label>Confirm Password</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                        <input type="password" name="confirm_pass" id="password" placeholder="Confirm Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /><br/>
                                                                        </div>
                                                                    </div>
                                                                    <p><b>Note:Use one number and one upper [A-Z] and lower case letter [a-z] and at least 8 or more characters.</b></p>
                                                                    <button type="submit" class="btn btn-primary m-r-10 m-b-5" name="change_password">Change Password</button>
                                                                    </fieldset>
                                                                </form>
                                                            </section>
                                                        </div>
                                                    <!-- end of general info -->
                                                    </div>
                                                <!-- end of col-lg-12 -->
                                                </div>
                                            <!-- end of row -->
                                            </div>
                                        <!-- end of view-info -->                                  
                                        </div>
                                    <!-- end of card-block -->
                                    </div>                                    
                            </div>                  
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>
    </div>
</div>