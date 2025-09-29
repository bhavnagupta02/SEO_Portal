<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4><?php if(isset($this->admin_data)){ echo $this->admin_data['name']; }?> Profile</h4>
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
                                    <li class="breadcrumb-item">User Profile
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <!--profile cover start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <img class="profile-bg-img img-fluid" src="<?php echo base_url('assets/images/bg-img1.jpg'); ?>" alt="bg-img">
                                    <div class="card-block user-info">
                                        <div class="col-md-12">
                                            <div class="media-left">
                                                <a href="#" class="profile-image">
                                                    <img class="user-img img-radius" src="<?php echo base_url('assets/images/avatar-4.jpg'); ?>" alt="user-img">
                                                </a>
                                            </div>
                                            <div class="media-body row">
                                                <div class="col-lg-12">
                                                    <div class="user-title">
                                                        <h2><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['name']); }?></h2>
                                                        <span class="text-white">Administrator</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="pull-right cover-btn">
                                                        <!-- <?php if(isset($this->admin_data)){ $id = $this->admin_data['id']; }?> -->
                                                        <a href="<?php echo base_url('edit-profile/');?><?php if(isset($this->admin_data)){ echo $this->admin_data['id']; }?>" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i>Edit Profile</a>
                                                        <a href="<?php echo base_url('change-password');?>" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i>Change Password</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--profile cover end-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- tab header start -->
                            <div class="tab-header card">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                        <div class="slide"></div>
                                    </li>
                                </ul>
                            </div>
                            <!-- tab header end -->
                            <!-- tab content start -->
                            <div class="tab-content">
                                <!-- tab panel personal start -->
                                <div class="tab-pane active" id="personal" role="tabpanel">
                                    <!-- personal card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">About Me</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Full Name</th>
                                                                                    <td><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['name']); }?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Email</th>
                                                                                    <td><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['email']); }?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Mobile Number</th>
                                                                                    <td><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['phone_number']); }?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!-- end of table col-lg-6 -->
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Twitter</th>
                                                                                    <td><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['twitter']); }?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Skype</th>
                                                                                    <td><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['skype']); }?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Website</th>
                                                                                    <td><a href="<?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['website']); }?>" target="_blank"><?php if(isset($this->admin_data)){ echo ucwords($this->admin_data['website']); }?></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!-- end of table col-lg-6 -->
                                                            </div>
                                                            <!-- end of row -->
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