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
                                    <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
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
                                    <li class="breadcrumb-item">Edit Profile
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
                                        <!-- <div class="card-header">
                                            <h5 class="card-header-text">About Me</h5>
                                        </div> -->
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div id="wizard">
                                                            <section>
                                                            <form class="wizard-form" id="example-advanced-form" action="" name="edit_profile" method="POST" enctype="multipart/form-data">
                                                                <fieldset>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                            <label for="userName" class="block">Name *</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                            <input id="userName" name="userName" type="text" class="form-control" value="<?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['name']); }?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                            <label for="email" class="block">Email *</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                            <input id="email" name="email" type="email" class="form-control" value="<?php if(isset($this->admin_data['email'])){ echo $this->admin_data['email']; }?>" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                            <label for="phoneNumber" class="block">Phone Number *</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                            <input id="phoneNumber" name="phoneNumber" type="number" class="required form-control" value="<?php if(isset($this->admin_data['phone_number'])){ echo ucwords($this->admin_data['phone_number']); }?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                            <label for="skype" class="block">Skype</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                            <input id="skype" name="skype" type="text" class=" form-control" value="<?php if(isset($this->admin_data['skype'])){ echo $this->admin_data['skype']; }?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                            <label for="twitter" class="block">Twitter</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                            <input id="twitter" name="twitter" type="card-header-text" class="form-control" value="<?php if(isset($this->admin_data['twitter'])){ echo $this->admin_data['twitter']; }?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4 col-lg-2">
                                                                            <label for="website" class="block">Website</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-lg-10">
                                                                            <input id="website" name="website" type="text" class="form-control" value="<?php if(isset($this->admin_data['website'])){ echo $this->admin_data['website']; }?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group profl-pc">
                                                                      <div>
                                                                        <label for="exampleInputFile">Upload Profile Pic</label>
                                                                      </div>
                                                                      <div class="profile_pic_cnt">
                                                                          <img class="profile-user-img img-responsive img-circle blah_profile" src="<?php if(isset($this->admin_data['profile_pic']) && trim($this->admin_data['profile_pic'])!=""){ echo base_url().$this->admin_data['profile_pic'];}else{echo $this->config->item('base_url')."assets/images/avatar-4.jpg";} ?>" alt="User profile picture">
                                                                          <input type="file" name="img" class="profile_img" >
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <button type="submit" class="update_profile_btn btn btn-primary m-r-10 m-b-5">Update</button>
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