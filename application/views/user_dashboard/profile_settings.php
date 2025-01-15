<?php
if(!empty($get_banner->image) && file_exists('uploads/banner/'.$get_banner->image)) {
    $banner_img=base_url("uploads/banner/".$get_banner->image);
} else {
    $banner_img=base_url("assets/images/resource/mslider1.jpg");
} ?>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= $banner_img; ?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header" style="padding-top: 90px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dashboardhak">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Profile Settings</h2>
            </div>
        </div>
    </div>
</section>

<?php
if($data_request=='user'){
    $this->load->view('sidebar');
    $container='';
} else {
    $container='container';
}
?>
<div class="<?php if(@$userinfo->userType=='1' || @$userinfo->userType=='3') { echo "col-md-10";} else {echo "col-md-12"; }?> col-sm-12 display-table-cell v-align">
    <div class="user-dashboard Admin_Profile form-design <?php echo $container;  ?> ">
        <form class="form" action="<?php echo base_url('user/Dashboard/update_profile')?>" method="post" id="registrationForm" enctype="multipart/form-data">
        <input type="hidden" name="from_data_request" value="<?=$data_request;?>">
            <div class="row row-sm">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="cardak profile-mobile">
                        <span class="text-success-msg f-20" style="text-align: center;">
                        <?php if($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                            unset($_SESSION['message']);
                        } ?>
                        </span>
                        <div class="bootstrap snippet">
                            <div class="new-pro">
                                <?php
                                if(!empty($userinfo->profilePic)) {
                                    if(!file_exists('uploads/users/'.$userinfo->profilePic)) {
                                ?>
                                <img class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px; height: 60px; object-fit: cover;" />
                                <?php } else { ?>
                                <img class="img-circle img-responsive" src="<?php echo base_url('uploads/users/'.$userinfo->profilePic); ?>" style="width:60px; height: 60px; object-fit: cover;" />
                                <?php } } else { ?>
                                <img class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px; height: 60px; object-fit: cover;" />
                                <?php } ?>
                                <input type="hidden" name="old_image" value="<?=$userinfo->profilePic ?>">
                                <input type="hidden" name="id" value="<?=$userinfo->userId  ?>">
                                <div class="profile-ak">
                                    <?php if(!empty($userinfo->profilePic)) { ?>
                                    <h6>Upload a different photo</h6>
                                    <input type="file" name="profilePic" class="text-center center-block file-upload"/>
                                    <?php } else { ?>
                                    <h6>Upload a photo</h6>
                                    <input type="file" name="profilePic" class="text-center center-block file-upload"/>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="profile-dsd">
                            <div class="tab-content">
                                <div class="tab-pane active" style="padding: 0px;">
                                    <hr />
                                    <div class="form-group">
                                        <div class="row">
                                            <?php //if(@$_SESSION['afrebay']['userType']=='2') { ?>
                                            <?php if(@$userinfo->userType=='2') { ?>
                                            <div class="col-lg-6">
                                                <label for="companyname">
                                                    <h4>Company Name <span style="color:red;">*</span></h4>
                                                </label>
                                                <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Company Name" value="<?php echo $userinfo->companyname;?>" />
                                                <div id="vld_companyname" style="color:red; margin-top: 10px;">Please enter Company Name.</div>
                                            </div>
                                            <?php } else { ?>
                                            <div class="col-lg-6">
                                                <label for="firstname">
                                                    <h4>First Name <span style="color:red;">*</span></h4>
                                                </label>
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $userinfo->firstname;?>"  onkeypress="only_alphabets(event)" />
                                                <div id="vld_firstname" style="color:red; margin-top: 10px;">Please enter First Name.</div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="lastname">
                                                    <h4>Last Name <span style="color:red;">*</span></h4>
                                                </label>
                                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $userinfo->lastname;?>"  onkeypress="only_alphabets(event)" />
                                                <div id="vld_lastname" style="color:red; margin-top: 10px;">Please enter Last Name.</div>
                                            </div>
                                            <?php } ?>
                                            <div class="col-lg-6">
                                                <label for="email">
                                                    <h4>Email Address <span style="color:red;">*</span></h4>
                                                </label>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="xyz@example.com" readonly value="<?php echo $userinfo->email;?>"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="mobile">
                                                    <h4>Phone Number </h4>
                                                </label>
                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Phone Number" value="<?php echo $userinfo->mobile;?>" onkeypress="only_number(event)" maxlength="10" />
                                            </div>

                                            <?php //if(@$_SESSION['afrebay']['userType']=='1') { ?>
                                            <?php if(@$userinfo->userType=='1' || @$userinfo->userType=='3') { ?>
                                            <div class="col-lg-6 gender">
                                                <label for="gender">
                                                    <h4>Gender<span style="color:red;">*</span></h4>
                                                </label>
                                                <select name="gender" id="gender" class="form-control"  style="height: 32px;" required>
                                                    <option value="">Choose an option</option>
                                                    <option value="Male" <?php if(@$userinfo->gender=='Male'){ echo "selected";}?>>Male</option>
                                                    <option value="Female" <?php if(@$userinfo->gender=='Female'){ echo "selected";}?>>Female</option>
                                                    <option value="Non-Binary" <?php if(@$userinfo->gender=='Non-Binary'){ echo "selected";}?>>Non-Binary</option>
                                                </select>
                                                <div id="vld_gender" style="color:red; margin-top: 10px;">Please Select Gender.</div>
                                            </div>
                                            <?php } ?>
                                            <div class="col-lg-6 location">
                                                <label for="address">
                                                    <h4>Address</h4>
                                                </label>
                                                <input type="text" class="form-control" name="address" id="location" placeholder="Address" value="<?= $userinfo->address ?>" style="height: 43px !important;" autocomplete="off" />
                                                <div id="vld_location" style="color:red; margin-top: 10px;">Please enter Legal Address.</div>
                                                <input type="hidden" name="latitude" id="search_lat" value="<?= $userinfo->latitude ?>">
                                                <input type="hidden" name="longitude" id="search_lon" value="<?= $userinfo->longitude ?> ">
                                            </div>
                                            <div class="col-lg-4 location" style="margin-bottom: 20px;">
                                                <label for="address">
                                                    <h4>Country </h4>
                                                </label>
                                                <select class="form-control" name="country-dropdown" id="country-dropdown" style="width: 100%;">
                                                    <option value="">Select Country</option>
                                                    <?php
                                                    $get_country = $this->Crud_model->GetData('countries', 'id, name', "");
                                                    foreach($get_country as $val) {?>
                                                        <option value="<?php echo $val->name; ?>" <?php if(@$val->name == @$userinfo->country) {echo "selected"; }?>><?php echo $val->name;?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="hidden" id="select_country_dropdown" value="<?php echo @$userinfo->country; ?>">
                                            </div>
                                            <div class="col-lg-4 location" style="margin-bottom: 20px;">
                                                <label for="address">
                                                    <h4>State </h4>
                                                </label>
                                                <select class="form-control" name="state-dropdown" id="state-dropdown">
                                                    <option value="">Select Country</option>
                                                </select>
                                                <input type="hidden" id="select_state_dropdown" value="<?php echo @$userinfo->state; ?>">
                                            </div>
                                            <div class="col-lg-4 location" style="margin-bottom: 20px;">
                                                <label for="address">
                                                    <h4>City </h4>
                                                </label>
                                                <select class="form-control" name="city-dropdown" id="city-dropdown">
                                                    <option value="">Select State</option>
                                                </select>
                                                <input type="hidden" id="select_city_dropdown" value="<?php echo @$userinfo->city; ?>">
                                            </div>



                                            <?php //if(@$_SESSION['afrebay']['userType']=='1') { ?>
                                            <?php if(@$userinfo->userType=='1' || @$userinfo->userType=='3') { ?>
                                            <div class="col-lg-6 key-skill">
                                                <label for="key-skill">
                                                    <h4>Skill Set</h4>
                                                </label>
                                                <div class="pf-field" style="margin-top: 0px;">
                                                    <select class="form-control key_skills" multiple="multiple" name="key_skills[]" id="key_skills" style="width: 100%;">
                                                    <?php
                                                    $key_skills = $this->Crud_model->GetData('specialist',"","status = 'Active'");
                                                    foreach($key_skills as $val) {?>
                                                        <option value="<?php echo $val->specialist_name; ?>"
                                                        <?php if(!empty($userinfo->skills)){
                                                            $skills = explode(",", $userinfo->skills);
                                                            for($i=0; $i<count($skills); $i++) {
                                                                if($skills[$i] == $val->specialist_name){
                                                                    echo "selected";
                                                                }
                                                            }
                                                        } ?>><?php echo $val->specialist_name;?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 key-skill">
                                                <label for="key-skill">
                                                    <h4>Total Experience <span style="color:red;">*</span></h4>
                                                </label>
                                                <div class="pf-field" style="margin-top: 0px;">
                                                    <select data-placeholder="Please Select Experience Level" class="form-control" name="experience" id="experience" required>
                                                        <option value="">Choose an option</option>
                                                        <option value="1" <?php if(@$userinfo->experience == 1) {echo "selected";}?>>0 to 02 Years</option>
                                                        <option value="2" <?php if(@$userinfo->experience == 2) {echo "selected";}?>>03 to 05 Years</option>
                                                        <option value="3" <?php if(@$userinfo->experience == 3) {echo "selected";}?>>06 to 08 Years</option>
                                                        <option value="4" <?php if(@$userinfo->experience == 4) {echo "selected";}?>>08 to 10 Years</option>
                                                        <option value="5" <?php if(@$userinfo->experience == 5) {echo "selected";}?>>> 10 Years</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php //if(@$_SESSION['afrebay']['userType']=='1') { ?>
                                            <?php if(@$userinfo->userType=='1' || @$userinfo->userType=='3') { ?>
                                            <div class="col-lg-4">
                                                <label for="zip">
                                                    <h4>Zip Code</h4>
                                                </label>
                                                <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip Code" value="<?php echo @$userinfo->zip;?>" onkeypress="only_number(event)" maxlength="6" />
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="rateperhour">
                                                    <h4>Rate per Hour ($)<span style="color:red;">*</span></h4>
                                                </label>
                                                <input type="text" class="form-control" name="rateperhour" id="rateperhour" placeholder="Rate per Hour" value="<?php echo @$userinfo->rateperhour;?>" required="" min="0" max="1000000"/>
                                                <div id="vld_rateperhour"></div>
                                            </div>
                                            <div class="col-lg-4">
                                                <?php if(!empty($userinfo->resume)) { ?>
                                                <label for="resume"><h4>Update Resume</h4></label>
                                                <input type="file" class="form-control" name="resume" id="resume"/>
                                                <a href="<?php echo base_url('uploads/users/resume/'.$userinfo->resume); ?>" >
                                                    <i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:40px; color:red;"></i>
                                                    <span><?php if(strlen($userinfo->resume) > 30){ echo substr($userinfo->resume, 0,30);}else{ echo $userinfo->resume; }?></span>
                                                </a>
                                                <input type="hidden" name="old_resume" value="<?= @$userinfo->resume ?>">
                                                <br>
                                                <?php } else { ?>
                                                <label for="resume"><h4>Resume upload <span style="color:red;">*</span></h4></label>
                                                <input type="file" class="form-control" name="resume" id="resume" required/>
                                                <?php } ?>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Portfolio</label>
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <table class="table jobsites" id="purchaseTableclone1">
                                                            <tr class="color">
                                                                <th>Contents</th>
                                                                <th><button type="button" class="btn btn-info addMoreBtn" onclick="add_row()" >Add Portfolio</button></th>
                                                            </tr>
                                                            <tbody id="clonetable_feedback1">
                                                                <?php if(!empty($portfolio_content)) {
                                                                $rows=1;
                                                                foreach ($portfolio_content as $key) { ?>
                                                                <tr>
                                                                    <td style="width: 72%;"><input type="text" name="content_title[]" id="content_title<?= $rows; ?>" class="form-control" placeholder="Content Title" value="<?= $key->content_title; ?>"></td>
                                                                    <td><input type="file" name="portfolio_file[]" id="portfolio_file<?= $rows; ?>" class="form-control" value="<?= $key->portfolio_file; ?>"></td>
                                                                    <td>
                                                                        <a href="<?php echo base_url('uploads/users/portfolio_file/'.$key->portfolio_file); ?>" target="_blank">
                                                                        <input type="text" name="old_portfolio_file" value="<?= $key->portfolio_file;?>">
                                                                    </td>
                                                                    <td><a href="javascript:void(0)" title="Delete" class="text-danger" onclick="return remove(this)">X</a></td>
                                                                </tr>
                                                                <?php } } else { ?>
                                                                    <tr>
                                                                        <td style="width: 72%;"><input type="text" name="content_title[]" id="content_title1" class="form-control" placeholder="Content Title"></td>
                                                                        <td><input type="file" name="portfolio_file[]" id="portfolio_file1" class="form-control"></td>
                                                                        <td><a href="javascript:void(0)" title="Delete" class="text-danger" onclick="return remove(this)">X</a></td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <?php //if(@$_SESSION['afrebay']['userType']=='2') { ?>
                                            <?php if(@$userinfo->userType=='2') { ?>
                                            <div class="col-lg-4" style="margin-bottom: 20px !important;">
                                                <label for="foundedyear">
                                                    <h4>Founded Year</h4>
                                                </label>
                                                <input type="text" class="form-control" name="foundedyear" id="foundedyear" placeholder="Founded Year" value="<?php echo $userinfo->foundedyear;?>"/>
                                            </div>
                                            <div class="col-lg-4" style="margin-bottom: 20px !important;">
                                                <label for="teamsize">
                                                    <h4>TAX ID <span style="color:red;">*</span></h4>
                                                </label>
                                                <input type="text" class="form-control" name="teamsize" id="teamsize" placeholder="TAX ID" value="<?php echo $userinfo->teamsize;?>" />
                                                <div id="vld_teamsize" style="color:red; margin-top: 10px;">Please enter TAX ID.</div>
                                            </div>
                                            <div class="col-lg-4" style="margin-bottom: 20px !important;">
                                                <label for="timeZone">
                                                    <h4>Current Time Zone <span style="color:red;">*</span></h4>
                                                </label>
                                                <div class="pf-field">
                                                    <select id="timeZone" name="timeZone" class="custom-select">
                                                        <option value="">Choose an option</option>
                                                        <option value="America/Adak" <?php if($userinfo->timeZone == 'America/Adak') {echo "selected";}?>>America/Adak</option>
                                                        <option value="America/Anchorage" <?php if($userinfo->timeZone == 'America/Anchorage') {echo "selected";}?>>America/Anchorage</option>
                                                        <option value="America/Anguilla" <?php if($userinfo->timeZone == 'America/Anguilla') {echo "selected";}?>>America/Anguilla</option>
                                                        <option value="America/Antigua" <?php if($userinfo->timeZone == 'America/Antigua') {echo "selected";}?>>America/Antigua</option>
                                                        <option value="America/Araguaina" <?php if($userinfo->timeZone == 'America/Araguaina') {echo "selected";}?>>America/Araguaina</option>
                                                        <option value="America/Argentina/Buenos_Aires" <?php if($userinfo->timeZone == 'America/Argentina/Buenos_Aires') {echo "selected";}?>>America/Argentina/Buenos Aires</option>
                                                        <option value="America/Argentina/Catamarca" <?php if($userinfo->timeZone == 'America/Argentina/Catamarca') {echo "selected";}?>>America/Argentina/Catamarca</option>
                                                        <option value="America/Argentina/Cordoba" <?php if($userinfo->timeZone == 'America/Argentina/Cordoba') {echo "selected";}?>>America/Argentina/Cordoba</option>
                                                        <option value="America/Argentina/Jujuy" <?php if($userinfo->timeZone == 'America/Argentina/Jujuy') {echo "selected";}?>>America/Argentina/Jujuy</option>
                                                        <option value="America/Argentina/La_Rioja" <?php if($userinfo->timeZone == 'America/Argentina/La_Rioja') {echo "selected";}?>>America/Argentina/La Rioja</option>
                                                        <option value="America/Argentina/Mendoza" <?php if($userinfo->timeZone == 'America/Argentina/Mendoza') {echo "selected";}?>>America/Argentina/Mendoza</option>
                                                        <option value="America/Argentina/Rio_Gallegos" <?php if($userinfo->timeZone == 'America/Argentina/Rio_Gallegos') {echo "selected";}?>>America/Argentina/Rio Gallegos</option>
                                                        <option value="America/Argentina/Salta" <?php if($userinfo->timeZone == 'America/Argentina/Salta') {echo "selected";}?>>America/Argentina/Salta</option>
                                                        <option value="America/Argentina/San_Juan" <?php if($userinfo->timeZone == 'America/Argentina/San_Juan') {echo "selected";}?>>America/Argentina/San Juan</option>
                                                        <option value="America/Argentina/San_Luis" <?php if($userinfo->timeZone == 'America/Argentina/San_Luis') {echo "selected";}?>>America/Argentina/San Luis</option>
                                                        <option value="America/Argentina/Tucuman" <?php if($userinfo->timeZone == 'America/Argentina/Tucuman') {echo "selected";}?>>America/Argentina/Tucuman</option>
                                                        <option value="America/Argentina/Ushuaia" <?php if($userinfo->timeZone == 'America/Argentina/Ushuaia') {echo "selected";}?>>America/Argentina/Ushuaia</option>
                                                        <option value="America/Aruba" <?php if($userinfo->timeZone == 'America/Aruba') {echo "selected";}?>>America/Aruba</option>
                                                        <option value="America/Asuncion" <?php if($userinfo->timeZone == 'America/Asuncion') {echo "selected";}?>>America/Asuncion</option>
                                                        <option value="America/Atikokan" <?php if($userinfo->timeZone == 'America/Atikokan') {echo "selected";}?>>America/Atikokan</option>
                                                        <option value="America/Bahia" <?php if($userinfo->timeZone == 'America/Bahia') {echo "selected";}?>>America/Bahia</option>
                                                        <option value="America/Bahia_Banderas" <?php if($userinfo->timeZone == 'America/Bahia_Banderas') {echo "selected";}?>>America/Bahia Banderas</option>
                                                        <option value="America/Barbados" <?php if($userinfo->timeZone == 'America/Barbados') {echo "selected";}?>>America/Barbados</option>
                                                        <option value="America/Belem" <?php if($userinfo->timeZone == 'America/Belem') {echo "selected";}?>>America/Belem</option>
                                                        <option value="America/Belize" <?php if($userinfo->timeZone == 'America/Belize') {echo "selected";}?>>America/Belize</option>
                                                        <option value="America/Blanc-Sablon" <?php if($userinfo->timeZone == 'America/Blanc-Sablon') {echo "selected";}?>>America/Blanc-Sablon</option>
                                                        <option value="America/Boa_Vista" <?php if($userinfo->timeZone == 'America/Boa_Vista') {echo "selected";}?>>America/Boa Vista</option>
                                                        <option value="America/Bogota" <?php if($userinfo->timeZone == 'America/Bogota') {echo "selected";}?>>America/Bogota</option>
                                                        <option value="America/Boise" <?php if($userinfo->timeZone == 'America/Boise') {echo "selected";}?>>America/Boise</option>
                                                        <option value="America/Cambridge_Bay" <?php if($userinfo->timeZone == 'America/Cambridge_Bay') {echo "selected";}?>>America/Cambridge Bay</option>
                                                        <option value="America/Campo_Grande" <?php if($userinfo->timeZone == 'America/Campo_Grande') {echo "selected";}?>>America/Campo Grande</option>
                                                        <option value="America/Cancun" <?php if($userinfo->timeZone == 'America/Cancun') {echo "selected";}?>>America/Cancun</option>
                                                        <option value="America/Caracas" <?php if($userinfo->timeZone == 'America/Caracas') {echo "selected";}?>>America/Caracas</option>
                                                        <option value="America/Cayenne" <?php if($userinfo->timeZone == 'America/Cayenne') {echo "selected";}?>>America/Cayenne</option>
                                                        <option value="America/Cayman" <?php if($userinfo->timeZone == 'America/Cayman') {echo "selected";}?>>America/Cayman</option>
                                                        <option value="America/Chicago" <?php if($userinfo->timeZone == 'America/Chicago') {echo "selected";}?>>America/Chicago</option>
                                                        <option value="America/Chihuahua" <?php if($userinfo->timeZone == 'America/Chihuahua') {echo "selected";}?>>America/Chihuahua</option>
                                                        <option value="America/Ciudad_Juarez" <?php if($userinfo->timeZone == 'America/Ciudad_Juarez') {echo "selected";}?>>America/Ciudad Juarez</option>
                                                        <option value="America/Costa_Rica" <?php if($userinfo->timeZone == 'America/Costa_Rica') {echo "selected";}?>>America/Costa Rica</option>
                                                        <option value="America/Creston" <?php if($userinfo->timeZone == 'America/Creston') {echo "selected";}?>>America/Creston</option>
                                                        <option value="America/Cuiaba" <?php if($userinfo->timeZone == 'America/Cuiaba') {echo "selected";}?>>America/Cuiaba</option>
                                                        <option value="America/Curacao" <?php if($userinfo->timeZone == 'America/Curacao') {echo "selected";}?>>America/Curacao</option>
                                                        <option value="America/Danmarkshavn" <?php if($userinfo->timeZone == 'America/Danmarkshavn') {echo "selected";}?>>America/Danmarkshavn</option>
                                                        <option value="America/Dawson" <?php if($userinfo->timeZone == 'America/Dawson') {echo "selected";}?>>America/Dawson</option>
                                                        <option value="America/Dawson_Creek" <?php if($userinfo->timeZone == 'America/Dawson_Creek') {echo "selected";}?>>America/Dawson Creek</option>
                                                        <option value="America/Denver" <?php if($userinfo->timeZone == 'America/Denver') {echo "selected";}?>>America/Denver</option>
                                                        <option value="America/Detroit" <?php if($userinfo->timeZone == 'America/Detroit') {echo "selected";}?>>America/Detroit</option>
                                                        <option value="America/Dominica" <?php if($userinfo->timeZone == 'America/Dominica') {echo "selected";}?>>America/Dominica</option>
                                                        <option value="America/Edmonton" <?php if($userinfo->timeZone == 'America/Edmonton') {echo "selected";}?>>America/Edmonton</option>
                                                        <option value="America/Eirunepe" <?php if($userinfo->timeZone == 'America/Eirunepe') {echo "selected";}?>>America/Eirunepe</option>
                                                        <option value="America/El_Salvador" <?php if($userinfo->timeZone == 'America/El_Salvador') {echo "selected";}?>>America/El Salvador</option>
                                                        <option value="America/Fort_Nelson" <?php if($userinfo->timeZone == 'America/Fort_Nelson') {echo "selected";}?>>America/Fort Nelson</option>
                                                        <option value="America/Fortaleza" <?php if($userinfo->timeZone == 'America/Fortaleza') {echo "selected";}?>>America/Fortaleza</option>
                                                        <option value="America/Glace_Bay" <?php if($userinfo->timeZone == 'America/Glace_Bay') {echo "selected";}?>>America/Glace Bay</option>
                                                        <option value="America/Goose_Bay" <?php if($userinfo->timeZone == 'America/Goose_Bay') {echo "selected";}?>>America/Goose Bay</option>
                                                        <option value="America/Grand_Turk" <?php if($userinfo->timeZone == 'America/Grand_Turk') {echo "selected";}?>>America/Grand Turk</option>
                                                        <option value="America/Grenada" <?php if($userinfo->timeZone == 'America/Grenada') {echo "selected";}?>>America/Grenada</option>
                                                        <option value="America/Guadeloupe" <?php if($userinfo->timeZone == 'America/Guadeloupe') {echo "selected";}?>>America/Guadeloupe</option>
                                                        <option value="America/Guatemala" <?php if($userinfo->timeZone == 'America/Guatemala') {echo "selected";}?>>America/Guatemala</option>
                                                        <option value="America/Guayaquil" <?php if($userinfo->timeZone == 'America/Guayaquil') {echo "selected";}?>>America/Guayaquil</option>
                                                        <option value="America/Guyana" <?php if($userinfo->timeZone == 'America/Guyana') {echo "selected";}?>>America/Guyana</option>
                                                        <option value="America/Halifax" <?php if($userinfo->timeZone == 'America/Halifax') {echo "selected";}?>>America/Halifax</option>
                                                        <option value="America/Havana" <?php if($userinfo->timeZone == 'America/Havana') {echo "selected";}?>>America/Havana</option>
                                                        <option value="America/Hermosillo" <?php if($userinfo->timeZone == 'America/Hermosillo') {echo "selected";}?>>America/Hermosillo</option>
                                                        <option value="America/Indiana/Indianapolis" <?php if($userinfo->timeZone == 'America/Indiana/Indianapolis') {echo "selected";}?>>America/Indiana/Indianapolis</option>
                                                        <option value="America/Indiana/Knox" <?php if($userinfo->timeZone == 'America/Indiana/Knox') {echo "selected";}?>>America/Indiana/Knox</option>
                                                        <option value="America/Indiana/Marengo" <?php if($userinfo->timeZone == 'America/Indiana/Marengo') {echo "selected";}?>>America/Indiana/Marengo</option>
                                                        <option value="America/Indiana/Petersburg" <?php if($userinfo->timeZone == 'America/Indiana/Petersburg') {echo "selected";}?>>America/Indiana/Petersburg</option>
                                                        <option value="America/Indiana/Tell_City" <?php if($userinfo->timeZone == 'America/Indiana/Tell_City') {echo "selected";}?>>America/Indiana/Tell City</option>
                                                        <option value="America/Indiana/Vevay" <?php if($userinfo->timeZone == 'America/Indiana/Vevay') {echo "selected";}?>>America/Indiana/Vevay</option>
                                                        <option value="America/Indiana/Vincennes" <?php if($userinfo->timeZone == 'America/Indiana/Vincennes') {echo "selected";}?>>America/Indiana/Vincennes</option>
                                                        <option value="America/Indiana/Winamac" <?php if($userinfo->timeZone == 'America/Indiana/Winamac') {echo "selected";}?>>America/Indiana/Winamac</option>
                                                        <option value="America/Inuvik" <?php if($userinfo->timeZone == 'America/Inuvik') {echo "selected";}?>>America/Inuvik</option>
                                                        <option value="America/Iqaluit" <?php if($userinfo->timeZone == 'America/Iqaluit') {echo "selected";}?>>America/Iqaluit</option>
                                                        <option value="America/Jamaica" <?php if($userinfo->timeZone == 'America/Jamaica') {echo "selected";}?>>America/Jamaica</option>
                                                        <option value="America/Juneau" <?php if($userinfo->timeZone == 'America/Juneau') {echo "selected";}?>>America/Juneau</option>
                                                        <option value="America/Kentucky/Louisville" <?php if($userinfo->timeZone == 'America/Kentucky/Louisville') {echo "selected";}?>>America/Kentucky/Louisville</option>
                                                        <option value="America/Kentucky/Monticello" <?php if($userinfo->timeZone == 'America/Kentucky/Monticello') {echo "selected";}?>>America/Kentucky/Monticello</option>
                                                        <option value="America/Kralendijk" <?php if($userinfo->timeZone == 'America/Kralendijk') {echo "selected";}?>>America/Kralendijk</option>
                                                        <option value="America/La_Paz" <?php if($userinfo->timeZone == 'America/La_Paz') {echo "selected";}?>>America/La Paz</option>
                                                        <option value="America/Lima" <?php if($userinfo->timeZone == 'America/Lima') {echo "selected";}?>>America/Lima</option>
                                                        <option value="America/Los_Angeles" <?php if($userinfo->timeZone == 'America/Los_Angeles') {echo "selected";}?>>America/Los Angeles</option>
                                                        <option value="America/Lower_Princes" <?php if($userinfo->timeZone == 'America/Lower_Princes') {echo "selected";}?>>America/Lower Princes</option>
                                                        <option value="America/Maceio" <?php if($userinfo->timeZone == 'America/Maceio') {echo "selected";}?>>America/Maceio</option>
                                                        <option value="America/Managua" <?php if($userinfo->timeZone == 'America/Managua') {echo "selected";}?>>America/Managua</option>
                                                        <option value="America/Manaus" <?php if($userinfo->timeZone == 'America/Manaus') {echo "selected";}?>>America/Manaus</option>
                                                        <option value="America/Marigot" <?php if($userinfo->timeZone == 'America/Marigot') {echo "selected";}?>>America/Marigot</option>
                                                        <option value="America/Martinique" <?php if($userinfo->timeZone == 'America/Martinique') {echo "selected";}?>>America/Martinique</option>
                                                        <option value="America/Matamoros" <?php if($userinfo->timeZone == 'America/Matamoros') {echo "selected";}?>>America/Matamoros</option>
                                                        <option value="America/Mazatlan" <?php if($userinfo->timeZone == 'America/Mazatlan') {echo "selected";}?>>America/Mazatlan</option>
                                                        <option value="America/Menominee" <?php if($userinfo->timeZone == 'America/Menominee') {echo "selected";}?>>America/Menominee</option>
                                                        <option value="America/Merida" <?php if($userinfo->timeZone == 'America/Merida') {echo "selected";}?>>America/Merida</option>
                                                        <option value="America/Metlakatla" <?php if($userinfo->timeZone == 'America/Metlakatla') {echo "selected";}?>>America/Metlakatla</option>
                                                        <option value="America/Mexico_City" <?php if($userinfo->timeZone == 'America/Mexico_City') {echo "selected";}?>>America/Mexico City</option>
                                                        <option value="America/Miquelon" <?php if($userinfo->timeZone == 'America/Miquelon') {echo "selected";}?>>America/Miquelon</option>
                                                        <option value="America/Moncton" <?php if($userinfo->timeZone == 'America/Moncton') {echo "selected";}?>>America/Moncton</option>
                                                        <option value="America/Monterrey" <?php if($userinfo->timeZone == 'America/Monterrey') {echo "selected";}?>>America/Monterrey</option>
                                                        <option value="America/Montevideo" <?php if($userinfo->timeZone == 'America/Montevideo') {echo "selected";}?>>America/Montevideo</option>
                                                        <option value="America/Montserrat" <?php if($userinfo->timeZone == 'America/Montserrat') {echo "selected";}?>>America/Montserrat</option>
                                                        <option value="America/Nassau" <?php if($userinfo->timeZone == 'America/Nassau') {echo "selected";}?>>America/Nassau</option>
                                                        <option value="America/New_York" <?php if($userinfo->timeZone == 'America/New_York') {echo "selected";}?>>America/New York</option>
                                                        <option value="America/Nome" <?php if($userinfo->timeZone == 'America/Nome') {echo "selected";}?>>America/Nome</option>
                                                        <option value="America/Noronha" <?php if($userinfo->timeZone == 'America/Noronha') {echo "selected";}?>>America/Noronha</option>
                                                        <option value="America/North_Dakota/Beulah" <?php if($userinfo->timeZone == 'America/North_Dakota/Beulah') {echo "selected";}?>>America/North Dakota/Beulah</option>
                                                        <option value="America/North_Dakota/Center" <?php if($userinfo->timeZone == 'America/North_Dakota/Center') {echo "selected";}?>>America/North Dakota/Center</option>
                                                        <option value="America/North_Dakota/New_Salem" <?php if($userinfo->timeZone == 'America/North_Dakota/New_Salem') {echo "selected";}?>>America/North Dakota/New Salem</option>
                                                        <option value="America/Nuuk" <?php if($userinfo->timeZone == 'America/Nuuk') {echo "selected";}?>>America/Nuuk</option>
                                                        <option value="America/Ojinaga" <?php if($userinfo->timeZone == 'America/Ojinaga') {echo "selected";}?>>America/Ojinaga</option>
                                                        <option value="America/Panama" <?php if($userinfo->timeZone == 'America/Panama') {echo "selected";}?>>America/Panama</option>
                                                        <option value="America/Paramaribo" <?php if($userinfo->timeZone == 'America/Paramaribo') {echo "selected";}?>>America/Paramaribo</option>
                                                        <option value="America/Phoenix" <?php if($userinfo->timeZone == 'America/Phoenix') {echo "selected";}?>>America/Phoenix</option>
                                                        <option value="America/Port-au-Prince" <?php if($userinfo->timeZone == 'America/Port-au') {echo "selected";}?>>America/Port-au-Prince</option>
                                                        <option value="America/Port_of_Spain" <?php if($userinfo->timeZone == 'America/Port_of_Spain') {echo "selected";}?>>America/Port of Spain</option>
                                                        <option value="America/Porto_Velho" <?php if($userinfo->timeZone == 'America/Porto_Velho') {echo "selected";}?>>America/Porto Velho</option>
                                                        <option value="America/Puerto_Rico" <?php if($userinfo->timeZone == 'America/Puerto_Rico') {echo "selected";}?>>America/Puerto Rico</option>
                                                        <option value="America/Punta_Arenas" <?php if($userinfo->timeZone == 'America/Punta_Arenas') {echo "selected";}?>>America/Punta Arenas</option>
                                                        <option value="America/Rankin_Inlet" <?php if($userinfo->timeZone == 'America/Rankin_Inlet') {echo "selected";}?>>America/Rankin Inlet</option>
                                                        <option value="America/Recife" <?php if($userinfo->timeZone == 'America/Recife') {echo "selected";}?>>America/Recife</option>
                                                        <option value="America/Regina" <?php if($userinfo->timeZone == 'America/Regina') {echo "selected";}?>>America/Regina</option>
                                                        <option value="America/Resolute" <?php if($userinfo->timeZone == 'America/Resolute') {echo "selected";}?>>America/Resolute</option>
                                                        <option value="America/Rio_Branco" <?php if($userinfo->timeZone == 'America/Rio_Branco') {echo "selected";}?>>America/Rio Branco</option>
                                                        <option value="America/Santarem" <?php if($userinfo->timeZone == 'America/Santarem') {echo "selected";}?>>America/Santarem</option>
                                                        <option value="America/Santiago" <?php if($userinfo->timeZone == 'America/Santiago') {echo "selected";}?>>America/Santiago</option>
                                                        <option value="America/Santo_Domingo" <?php if($userinfo->timeZone == 'America/Santo_Domingo') {echo "selected";}?>>America/Santo Domingo</option>
                                                        <option value="America/Sao_Paulo" <?php if($userinfo->timeZone == 'America/Sao_Paulo') {echo "selected";}?>>America/Sao Paulo</option>
                                                        <option value="America/Scoresbysund" <?php if($userinfo->timeZone == 'America/Scoresbysund') {echo "selected";}?>>America/Scoresbysund</option>
                                                        <option value="America/Sitka" <?php if($userinfo->timeZone == 'America/Sitka') {echo "selected";}?>>America/Sitka</option>
                                                        <option value="America/St_Barthelemy" <?php if($userinfo->timeZone == 'America/St_Barthelemy') {echo "selected";}?>>America/St Barthelemy</option>
                                                        <option value="America/St_Johns" <?php if($userinfo->timeZone == 'America/St_Johns') {echo "selected";}?>>America/St Johns</option>
                                                        <option value="America/St_Kitts" <?php if($userinfo->timeZone == 'America/St_Kitts') {echo "selected";}?>>America/St Kitts</option>
                                                        <option value="America/St_Lucia" <?php if($userinfo->timeZone == 'America/St_Lucia') {echo "selected";}?>>America/St Lucia</option>
                                                        <option value="America/St_Thomas" <?php if($userinfo->timeZone == 'America/St_Thomas') {echo "selected";}?>>America/St Thomas</option>
                                                        <option value="America/St_Vincent" <?php if($userinfo->timeZone == 'America/St_Vincent') {echo "selected";}?>>America/St Vincent</option>
                                                        <option value="America/Swift_Current" <?php if($userinfo->timeZone == 'America/Swift_Current') {echo "selected";}?>>America/Swift Current</option>
                                                        <option value="America/Tegucigalpa" <?php if($userinfo->timeZone == 'America/Tegucigalpa') {echo "selected";}?>>America/Tegucigalpa</option>
                                                        <option value="America/Thule" <?php if($userinfo->timeZone == 'America/Thule') {echo "selected";}?>>America/Thule</option>
                                                        <option value="America/Tijuana" <?php if($userinfo->timeZone == 'America/Tijuana') {echo "selected";}?>>America/Tijuana</option>
                                                        <option value="America/Toronto" <?php if($userinfo->timeZone == 'America/Toronto') {echo "selected";}?>>America/Toronto</option>
                                                        <option value="America/Tortola" <?php if($userinfo->timeZone == 'America/Tortola') {echo "selected";}?>>America/Tortola</option>
                                                        <option value="America/Vancouver" <?php if($userinfo->timeZone == 'America/Vancouver') {echo "selected";}?>>America/Vancouver</option>
                                                        <option value="America/Whitehorse" <?php if($userinfo->timeZone == 'America/Whitehorse') {echo "selected";}?>>America/Whitehorse</option>
                                                        <option value="America/Winnipeg" <?php if($userinfo->timeZone == 'America/Winnipeg') {echo "selected";}?>>America/Winnipeg</option>
                                                        <option value="America/Yakutat" <?php if($userinfo->timeZone == 'America/Yakutat') {echo "selected";}?>>America/Yakutat</option>
                                                        <option value="Asia/Kolkata" <?php if($userinfo->timeZone == 'Asia/Kolkata') {echo "selected";}?>>Asia/Kolkata</option>
                                                        <option value="Australia/Adelaide" <?php if($userinfo->timeZone == 'Australia/Adelaide') {echo "selected";}?>>Australia/Adelaide</option>
                                                        <option value="Australia/Brisbane" <?php if($userinfo->timeZone == 'Australia/Brisbane') {echo "selected";}?>>Australia/Brisbane</option>
                                                        <option value="Australia/Broken_Hill" <?php if($userinfo->timeZone == 'Australia/Broken_Hill') {echo "selected";}?>>Australia/Broken Hill</option>
                                                        <option value="Australia/Darwin" <?php if($userinfo->timeZone == 'Australia/Darwin') {echo "selected";}?>>Australia/Darwin</option>
                                                        <option value="Australia/Eucla" <?php if($userinfo->timeZone == 'Australia/Eucla') {echo "selected";}?>>Australia/Eucla</option>
                                                        <option value="Australia/Hobart" <?php if($userinfo->timeZone == 'Australia/Hobart') {echo "selected";}?>>Australia/Hobart</option>
                                                        <option value="Australia/Lindeman" <?php if($userinfo->timeZone == 'Australia/Lindeman') {echo "selected";}?>>Australia/Lindeman</option>
                                                        <option value="Australia/Lord_Howe" <?php if($userinfo->timeZone == 'Australia/Lord_Howe') {echo "selected";}?>>Australia/Lord Howe</option>
                                                        <option value="Australia/Melbourne" <?php if($userinfo->timeZone == 'Australia/Melbourne') {echo "selected";}?>>Australia/Melbourne</option>
                                                        <option value="Australia/Perth" <?php if($userinfo->timeZone == 'Australia/Perth') {echo "selected";}?>>Australia/Perth</option>
                                                        <option value="Australia/Sydney" <?php if($userinfo->timeZone == 'Australia/Sydney') {echo "selected";}?>>Australia/Sydney</option>
                                                        <option value="Europe/Amsterdam" <?php if($userinfo->timeZone == 'Europe/Amsterdam') {echo "selected";}?>>Europe/Amsterdam</option>
                                                        <option value="Europe/Andorra" <?php if($userinfo->timeZone == 'Europe/Andorra') {echo "selected";}?>>Europe/Andorra</option>
                                                        <option value="Europe/Astrakhan" <?php if($userinfo->timeZone == 'Europe/Astrakhan') {echo "selected";}?>>Europe/Astrakhan</option>
                                                        <option value="Europe/Athens" <?php if($userinfo->timeZone == 'Europe/Athens') {echo "selected";}?>>Europe/Athens</option>
                                                        <option value="Europe/Belgrade" <?php if($userinfo->timeZone == 'Europe/Belgrade') {echo "selected";}?>>Europe/Belgrade</option>
                                                        <option value="Europe/Berlin" <?php if($userinfo->timeZone == 'Europe/Berlin') {echo "selected";}?>>Europe/Berlin</option>
                                                        <option value="Europe/Bratislava" <?php if($userinfo->timeZone == 'Europe/Bratislava') {echo "selected";}?>>Europe/Bratislava</option>
                                                        <option value="Europe/Brussels" <?php if($userinfo->timeZone == 'Europe/Brussels') {echo "selected";}?>>Europe/Brussels</option>
                                                        <option value="Europe/Bucharest" <?php if($userinfo->timeZone == 'Europe/Bucharest') {echo "selected";}?>>Europe/Bucharest</option>
                                                        <option value="Europe/Budapest" <?php if($userinfo->timeZone == 'Europe/Budapest') {echo "selected";}?>>Europe/Budapest</option>
                                                        <option value="Europe/Busingen" <?php if($userinfo->timeZone == 'Europe/Busingen') {echo "selected";}?>>Europe/Busingen</option>
                                                        <option value="Europe/Chisinau" <?php if($userinfo->timeZone == 'Europe/Chisinau') {echo "selected";}?>>Europe/Chisinau</option>
                                                        <option value="Europe/Copenhagen" <?php if($userinfo->timeZone == 'Europe/Copenhagen') {echo "selected";}?>>Europe/Copenhagen</option>
                                                        <option value="Europe/Dublin" <?php if($userinfo->timeZone == 'Europe/Dublin') {echo "selected";}?>>Europe/Dublin</option>
                                                        <option value="Europe/Gibraltar" <?php if($userinfo->timeZone == 'Europe/Gibraltar') {echo "selected";}?>>Europe/Gibraltar</option>
                                                        <option value="Europe/Guernsey" <?php if($userinfo->timeZone == 'Europe/Guernsey') {echo "selected";}?>>Europe/Guernsey</option>
                                                        <option value="Europe/Helsinki" <?php if($userinfo->timeZone == 'Europe/Helsinki') {echo "selected";}?>>Europe/Helsinki</option>
                                                        <option value="Europe/Isle_of_Man" <?php if($userinfo->timeZone == 'Europe/Isle_of_Man') {echo "selected";}?>>Europe/Isle of Man</option>
                                                        <option value="Europe/Istanbul" <?php if($userinfo->timeZone == 'Europe/Istanbul') {echo "selected";}?>>Europe/Istanbul</option>
                                                        <option value="Europe/Jersey" <?php if($userinfo->timeZone == 'Europe/Jersey') {echo "selected";}?>>Europe/Jersey</option>
                                                        <option value="Europe/Kaliningrad" <?php if($userinfo->timeZone == 'Europe/Kaliningrad') {echo "selected";}?>>Europe/Kaliningrad</option>
                                                        <option value="Europe/Kirov" <?php if($userinfo->timeZone == 'Europe/Kirov') {echo "selected";}?>>Europe/Kirov</option>
                                                        <option value="Europe/Kyiv" <?php if($userinfo->timeZone == 'Europe/Kyiv') {echo "selected";}?>>Europe/Kyiv</option>
                                                        <option value="Europe/Lisbon" <?php if($userinfo->timeZone == 'Europe/Lisbon') {echo "selected";}?>>Europe/Lisbon</option>
                                                        <option value="Europe/Ljubljana" <?php if($userinfo->timeZone == 'Europe/Ljubljana') {echo "selected";}?>>Europe/Ljubljana</option>
                                                        <option value="Europe/London" <?php if($userinfo->timeZone == 'Europe/London') {echo "selected";}?>>Europe/London</option>
                                                        <option value="Europe/Luxembourg" <?php if($userinfo->timeZone == 'Europe/Luxembourg') {echo "selected";}?>>Europe/Luxembourg</option>
                                                        <option value="Europe/Malta" <?php if($userinfo->timeZone == 'Europe/Malta') {echo "selected";}?>>Europe/Malta</option>
                                                        <option value="Europe/Mariehamn" <?php if($userinfo->timeZone == 'Europe/Mariehamn') {echo "selected";}?>>Europe/Mariehamn</option>
                                                        <option value="Europe/Minsk" <?php if($userinfo->timeZone == 'Europe/Minsk') {echo "selected";}?>>Europe/Minsk</option>
                                                        <option value="Europe/Monaco" <?php if($userinfo->timeZone == 'Europe/Monaco') {echo "selected";}?>>Europe/Monaco</option>
                                                        <option value="Europe/Moscow" <?php if($userinfo->timeZone == 'Europe/Moscow') {echo "selected";}?>>Europe/Moscow</option>
                                                        <option value="Europe/Nicosia" <?php if($userinfo->timeZone == 'Europe/Nicosia') {echo "selected";}?>>Europe/Nicosia</option>
                                                        <option value="Europe/Oslo" <?php if($userinfo->timeZone == 'Europe/Oslo') {echo "selected";}?>>Europe/Oslo</option>
                                                        <option value="Europe/Paris" <?php if($userinfo->timeZone == 'Europe/Paris') {echo "selected";}?>>Europe/Paris</option>
                                                        <option value="Europe/Podgorica" <?php if($userinfo->timeZone == 'Europe/Podgorica') {echo "selected";}?>>Europe/Podgorica</option>
                                                        <option value="Europe/Prague" <?php if($userinfo->timeZone == 'Europe/Prague') {echo "selected";}?>>Europe/Prague</option>
                                                        <option value="Europe/Riga" <?php if($userinfo->timeZone == 'Europe/Riga') {echo "selected";}?>>Europe/Riga</option>
                                                        <option value="Europe/Rome" <?php if($userinfo->timeZone == 'Europe/Rome') {echo "selected";}?>>Europe/Rome</option>
                                                        <option value="Europe/Samara" <?php if($userinfo->timeZone == 'Europe/Samara') {echo "selected";}?>>Europe/Samara</option>
                                                        <option value="Europe/San_Marino" <?php if($userinfo->timeZone == 'Europe/San_Marino') {echo "selected";}?>>Europe/San Marino</option>
                                                        <option value="Europe/Sarajevo" <?php if($userinfo->timeZone == 'Europe/Sarajevo') {echo "selected";}?>>Europe/Sarajevo</option>
                                                        <option value="Europe/Sofia" <?php if($userinfo->timeZone == 'Europe/Sofia') {echo "selected";}?>>Europe/Sofia</option>
                                                        <option value="Europe/Stockholm" <?php if($userinfo->timeZone == 'Europe/Stockholm') {echo "selected";}?>>Europe/Stockholm</option>
                                                        <option value="Europe/Tallinn" <?php if($userinfo->timeZone == 'Europe/Tallinn') {echo "selected";}?>>Europe/Tallinn</option>
                                                        <option value="Europe/Tirane" <?php if($userinfo->timeZone == 'Europe/Tirane') {echo "selected";}?>>Europe/Tirane</option>
                                                        <option value="Europe/Uzhgorod" <?php if($userinfo->timeZone == 'Europe/Uzhgorod') {echo "selected";}?>>Europe/Uzhgorod</option>
                                                        <option value="Europe/Vaduz" <?php if($userinfo->timeZone == 'Europe/Vaduz') {echo "selected";}?>>Europe/Vaduz</option>
                                                        <option value="Europe/Vatican" <?php if($userinfo->timeZone == 'Europe/Vatican') {echo "selected";}?>>Europe/Vatican</option>
                                                        <option value="Europe/Vienna" <?php if($userinfo->timeZone == 'Europe/Vienna') {echo "selected";}?>>Europe/Vienna</option>
                                                        <option value="Europe/Vilnius" <?php if($userinfo->timeZone == 'Europe/Vilnius') {echo "selected";}?>>Europe/Vilnius</option>
                                                        <option value="Europe/Volgograd" <?php if($userinfo->timeZone == 'Europe/Volgograd') {echo "selected";}?>>Europe/Volgograd</option>
                                                        <option value="Europe/Warsaw" <?php if($userinfo->timeZone == 'Europe/Warsaw') {echo "selected";}?>>Europe/Warsaw</option>
                                                        <option value="Europe/Zagreb" <?php if($userinfo->timeZone == 'Europe/Zagreb') {echo "selected";}?>>Europe/Zagreb</option>
                                                        <option value="Europe/Zurich" <?php if($userinfo->timeZone == 'Europe/Zurich') {echo "selected";}?>>Europe/Zurich</option>
                                                    </select>
                                                </div>
                                                <div id="vld_timeZone" style="color:red; margin-top: 10px;">Please select time zone.</div>
                                            </div>
                                            <?php } ?>
                                            <?php if(@$userinfo->userType == '2') {
                                                $text = "Please let us know about you";
                                            } else {
                                                $text = "Please let us know what differentiates you as a candidate";
                                            }?>
                                            <div class="col-lg-12">
                                                <label for="short_bio">
                                                    <h4><?= $text; ?> <span style="color:red;">*</span></h4>
                                                </label>
                                                <textarea class="form-control" name="short_bio" id="short_bio" placeholder="<?= $text; ?>" maxlength="500"><?= @$userinfo->short_bio ?></textarea>
                                                <div id="the-count">
                                                    <span id="current">0</span>
                                                    <span id="maximum">/ 500</span>
                                                </div>
                                                <div id="vld_shrtBio" style="color:red; margin-top: 10px;">This field is mandatory.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 aksek">
                                            <button class="post-job-btn pull-right" type="submit">Save Changes</button>
                                            <!-- <input type="hidden" name="utype" id="utype" value="<?= @$_SESSION['afrebay']['userType']?>"> -->
                                            <input type="hidden" name="utype" id="utype" value="<?= @$userinfo->userType?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>
<style>
.Admin_Profile .cardak .gender select {margin-bottom: 0px !important;}
.form-design form .cardak .profile-dsd input  {margin-bottom: 0px !important;}
.col-lg-6 {margin-bottom: 20px !important;}
#vld_shrtBio {display: none;}
#vld_firstname {display: none;}
#vld_lastname {display: none;}
#vld_gender {display: none;}
#vld_location {display: none;}
#vld_companyname {display: none;}
#vld_teamsize {display: none;}
#vld_timeZone {display: none;}
.container:before,
.container:after { display: none !important; }
#timeZone {
    padding: 10px 10px !important;
    border-bottom: 2px solid #B1B1B1;
    border-radius: 10px !important;
    box-shadow: 0 0 10px #E1E1E1;
}
@media (min-width: 1250px) {
    .container.Header_Menu_Nav {width: 1250px !important;}
}
.addMoreBtn {background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important; border: 0 !important; font-family: Open Sans; font-size: 15px !important; color: #ffffff !important; padding: 10px 27px !important; border-radius: 40px !important;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script type="text/javascript">
//CKEDITOR.replace('short_bio');
$('#skills').tagsinput({
    confirmKeys: [13, 44],
    maxTags: 20,
});
$('.key_skills').select2({
    tags: true,
    //maximumSelectionLength: 10,
    tokenSeparators: [','],
    placeholder: "Select or Type Skills"
});

function add_row() {
    var y=document.getElementById('clonetable_feedback1');
    var new_row = y.rows[0].cloneNode(true);
    var len = y.rows.length;
    new_number=Math.round(Math.exp(Math.random()*Math.log(10000000-0+1)))+0;
    var inp0 = new_row.cells[0].getElementsByTagName('input')[0];
    inp0.value = '';
    inp0.defaultValue = '';
    inp0.id = 'service'+(len+1);
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.value = '';
    inp1.defaultValue = '';
    inp1.id = 'service'+(len+1);
    if(new_row.cells.length > 3) {
        new_row.cells[2].remove();
    }
    var submit_btn =$('#submit').val();
    y.appendChild(new_row);
}

function remove(row) {
    var y=document.getElementById('purchaseTableclone1');
    var len = y.rows.length;
    if(len>2) {
        var i= (len-1);
        document.getElementById('purchaseTableclone1').deleteRow(i);
    }
}

$('#short_bio').keyup(function() {
    var characterCount = $(this).val().length,
    current = $('#current'),
    maximum = $('#maximum'),
    theCount = $('#the-count');

    current.text(characterCount);

    /*This isn't entirely necessary, just playin around*/
    if (characterCount < 70) {
        current.css('color', '#666');
    }
    if (characterCount > 70 && characterCount < 90) {
        current.css('color', '#6d5555');
    }
    if (characterCount > 90 && characterCount < 100) {
        current.css('color', '#793535');
    }
    if (characterCount > 100 && characterCount < 120) {
        current.css('color', '#841c1c');
    }
    if (characterCount > 120 && characterCount < 139) {
        current.css('color', '#8f0001');
    }

    if (characterCount >= 140) {
        maximum.css('color', '#8f0001');
        current.css('color', '#8f0001');
        theCount.css('font-weight','bold');
    } else {
        maximum.css('color','#666');
        theCount.css('font-weight','normal');
    }
});
$("form").submit( function(e) {
    if($('#utype').val() == 1 || $('#utype').val() == 3) {
        if($('#firstname').val() == ''){
            $('#firstname').focus().attr('placeholder', 'This field is required');
            $('#vld_firstname').show();
            $('#firstname').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_firstname").hide();},5000)
            e.preventDefault();
        }
        if($('#lastname').val() == ''){
            $('#lastname').focus().attr('placeholder', 'This field is required');
            $('#vld_lastname').show();
            $('#lastname').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_lastname").hide();},5000)
            e.preventDefault();
        }
        if($('#gender').val() == ''){
            $('#gender').focus().attr('placeholder', 'This field is required');
            $('#vld_gender').show();
            $('#gender').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_gender").hide();},5000)
            e.preventDefault();
        }
        if($('#location').val() == ''){
            $('#location').focus().attr('placeholder', 'This field is required');
            $('#vld_location').show();
            $('#location').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_location").hide();},5000)
            e.preventDefault();
        }
        if($('#short_bio').val() == ''){
            $('#short_bio').focus().attr('placeholder', 'This field is required');
            $('#vld_shrtBio').show();
            $('#short_bio').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_shrtBio").hide();},5000)
            e.preventDefault();
        }
        if($('#rateperhour').val() > 1000000){
            $('#rateperhour').focus().attr('placeholder', 'This field is required');
            $('#vld_rateperhour').html('Input value must be between 0 to 1000000').css('color', 'red').show();
            $('#rateperhour').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_rateperhour").hide();},5000)
            e.preventDefault();
        }
    } else {
        if($('#companyname').val() == ''){
            $('#companyname').focus().attr('placeholder', 'This field is required');
            $('#vld_companyname').show();
            $('#companyname').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_companyname").hide();},5000)
            e.preventDefault();
        }
        if($('#location').val() == ''){
            $('#location').focus().attr('placeholder', 'This field is required');
            $('#vld_location').show();
            $('#location').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_location").hide();},5000)
            e.preventDefault();
        }
        if($('#teamsize').val() == ''){
            $('#teamsize').focus().attr('placeholder', 'This field is required');
            $('#vld_teamsize').show();
            $('#teamsize').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_teamsize").hide();},5000)
            e.preventDefault();
        }
        if($('#short_bio').val() == ''){
            $('#short_bio').focus().attr('placeholder', 'This field is required');
            $('#vld_shrtBio').show();
            $('#short_bio').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_shrtBio").hide();},5000)
            e.preventDefault();
        }
        if($('#timeZone').val() == ''){
            $('#timeZone').focus().attr('placeholder', 'This field is required');
            $('#vld_timeZone').show();
            $('#timeZone').focus().css('border', '1px solid red');
            setTimeout(function(){$("#vld_timeZone").hide();},5000)
            e.preventDefault();
        }
    }
});
$('#country-dropdown').on('change', function() {
    var country_name = this.value;
    $.ajax({
        url: "<?php echo base_url()?>Welcome/states_by_country",
        type: "POST",
        data: {
            country_name: country_name
        },
        cache: false,
        success: function(result){
            //console.log(result);
            $("#state-dropdown").html(result);
            $('#city-dropdown').html('<option value="">Select State First</option>');
        }
    });
});

$('#state-dropdown').on('change', function() {
    var state_name = this.value;
    $.ajax({
        url: "<?php echo base_url()?>Welcome/cities_by_state",
        type: "POST",
        data: {
            state_name: state_name
        },
        cache: false,
        success: function(result){
            $("#city-dropdown").html(result);
        }
    });
});

$("#location").on("input",function(event) {
    var inputValue = this.value;
    console.log(inputValue);
    this.value = this.value.replace(/[0-9]/g,"")
});

$(document).ready(function(){
    if($('#select_country_dropdown').val() != '') {
        var country_name = $('#select_country_dropdown').val();
        $.ajax({
            url: "<?php echo base_url()?>Welcome/states_by_country",
            type: "POST",
            data: {
                country_name: country_name
            },
            cache: false,
            success: function(result){
                //console.log(result);
                $("#state-dropdown").html(result);
                $("#state-dropdown").val(state_name);
            }
        });
    }

    if($('#select_state_dropdown').val() != '') {
        var state_name = $('#select_state_dropdown').val();
        $.ajax({
            url: "<?php echo base_url()?>Welcome/cities_by_state",
            type: "POST",
            data: {
                state_name: state_name
            },
            cache: false,
            success: function(result){
                console.log(result);
                $("#city-dropdown").html(result);
                $("#city-dropdown").val($('#select_city_dropdown').val());
            }
        });
    }
})
</script>
