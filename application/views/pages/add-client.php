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
                                    <h4>Add Client</h4>
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
                                    <li class="breadcrumb-item">Add Client
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
                                                                <form method="post" action='' class="add_client_from">
                                                                    <fieldset>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Client Company Name *</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                                <input type="text" name="company_name" id="company_name" placeholder="Company Name" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Company Address *</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                                <!--<input type="text" name="company_address" id="company_address" placeholder="Company Address" required />-->
                                                                                <textarea cols="40" maxlength="200" name="company_address" class="company_address"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Company Email Address *</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                                <input type="email" name="company_email" id="company_email" placeholder="Company Email Address" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Company Phone Number</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                                <input type="text" name="company_phone_number" id="company_phone_number" placeholder="Company Phone Number" onkeypress="javascript:return isNumber(event)" maxlength="15" minlength="10" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Contact Person *</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                            <input type="text" name="company_contact_person" id="company_contact_person" placeholder="Contact Person" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Contact Person Phone</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                            <input type="text" name="company_contact_person_phone" id="company_contact_person_phone" placeholder="Contact Person Phone"
                                                                             onkeypress="javascript:return isNumber(event)" maxlength="15" minlength="10" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Contact Person Mobile</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                            <input type="text" name="company_contact_person_mob" id="company_contact_person_mob" placeholder="Contact Person Mobile" onkeypress="javascript:return isNumber(event)" maxlength="15" minlength="10" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label class="block">Fax</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                            <input type="text" name="company_fax" id="company_fax" placeholder="Fax" onkeypress="javascript:return isNumber(event)" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4 col-lg-2">
                                                                                <label>Paid</label>
                                                                            </div>
                                                                            <div class="col-md-8 col-lg-10">
                                                                                <input type="checkbox" value="1" class="paid_client" name="is_paid">
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                    <button type="submit" class="btn btn-primary m-r-10 m-b-5">Add Client</button>
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