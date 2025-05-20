<?php
if (!empty($get_banner->image) && file_exists('uploads/banner/' . $get_banner->image)) {
    $banner_img = base_url("uploads/banner/" . $get_banner->image);
} else {
    $banner_img = base_url("assets/images/resource/mslider1.jpg");
} ?>
<style media="screen">
.postdetail {padding: 7px 33px; border-radius: 10px; background: red; color: #fff; margin: 10px; font-size: 20px;}
.cstm_viewbid_btn {background: linear-gradient(180deg, rgb(237 28 36) 0%, rgb(237 28 36 / 75%) 100%) !important; border: 0; border-radius: 35px; letter-spacing: 0; font-weight: 600; width: 100%; display: block; color: #fff; padding: 10px; text-align: center;}
.Employees_Search_List {padding: 0 !important;}
aside .widget {margin-top: 5px !important; margin-bottom: 5px !important; border-bottom: 1px solid #eee !important;}
.Employees_Search_List .Employees_Search_Result .emply-resume-list .shortlists a:nth-last-child(1) {background: none !important; color: #000 !important;}
</style>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= $banner_img ?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header text-center">
                        <h3 style="text-transform: uppercase;">
                            <?php if (!empty($post_data->post_title)) {
                                echo $post_data->post_title;
                            } ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dashboard-gig Bid-page">
    <div class="text-success-msg f-20" style="text-align: center; margin-bottom: 20px;">
    <?php if ($this->session->flashdata('message')) {
        echo $this->session->flashdata('message');
        unset($_SESSION['message']);
    } ?>
    </div>
    <div class="container display-table">
        <div class="row display-table-row">
            <div class="col-md-12 col-sm-12 display-table-cell v-align">
                <div class="user-dashboard">
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                            <div class="bid-dis">
                                <a href="<?=base_url(); ?>myjob" style="display: inline-block;float: left;margin-bottom: 25px;padding: 5px 8px;background: linear-gradient(180deg, rgba(249, 80, 30, 1) 0%, rgba(252, 119, 33, 1) 100%);border: 0;border-radius: 25px;font-size: 15px;font-weight: 600;letter-spacing: 0;color: #fff;"><i class="fa fa-arrow-circle-left" aria-hidden="true" style=" display: inline-flex; "></i> Back to Dashboard</a>
                                <?php $postedBy = $this->db->query("SELECT * FROM users WHERE userId = '" . $post_data->user_id . "'")->result_array(); ?>
                                <ul style="display: inline-block; width: 100%;">
                                    <li style="display: inline-block; width: 85%;">
                                        <span>Job Title </span>
                                        <a href="<?= base_url('postdetail/' . base64_encode($post_data->id)) ?>" style="text-transform: uppercase;">
                                        <?php if (!empty($post_data->post_title)) {
                                            echo $post_data->post_title;
                                        } ?>
                                        </a>
                                    </li>
                                    <?php if (!empty($post_data->description)) { ?>
                                    <li class="cstm_desc"><span>Description</span><?php echo $post_data->description; ?>
                                    <?php } ?>
                                    </li>
                                    <?php
                                    if ($postedBy[0]['userType'] == 1) {
                                        $full_name = $postedBy[0]['firstname'] . ' ' . $postedBy[0]['lastname'];
                                    } else if ($postedBy[0]['userType'] == 2) {
                                        $full_name = $postedBy[0]['companyname'];
                                    } ?>
                                    <li class="cstm_desc"><span>Posted By </span><?php echo $full_name; ?></li>
                                    <div class="Bid-Data">
                                        <?php if (!empty($post_data->required_key_skills)) { ?>
                                            <li><span>Required key skills </span><?php echo ucfirst($post_data->required_key_skills); ?></li>
                                        <?php } ?>
                                        <?php if (!empty($post_data->appli_deadeline)) { ?>
                                            <li><span>Application Deadline Date </span><?php echo $post_data->appli_deadeline; ?></li>
                                        <?php } ?>
                                    </div>
                                    <div class="Bid-Data">
                                        <?php if (!empty($post_data->category_id)) { ?>
                                        <li><span>Industry </span>
                                            <?php
                                            $cname = $this->db->query("SELECT * FROM category WHERE id = '" . $post_data->category_id . "'")->result_array();
                                            echo $cname[0]['category_name'];
                                            ?>
                                        </li>
                                        <?php } ?>
                                        <?php if (!empty($post_data->experience_level)) { ?>
                                        <li><span>Experience Level </span>
                                            <?php
                                            if($post_data->experience_level == '1') {
                                                echo "0 to 02 Years";
                                            } else if($post_data->experience_level == '2') {
                                                echo "03 to 05 Years";
                                            } else if($post_data->experience_level == '3') {
                                                echo "06 to 08 Years";
                                            } else if($post_data->experience_level == '4') {
                                                echo "08 to 10 Years";
                                            } else if($post_data->experience_level == '5') {
                                                echo "> 10 Years";
                                            } else {
                                                echo "";
                                            } ?>
                                        </li>
                                        <?php } ?>
                                    </div>
                                    <div class="Bid-Data">
                                        <?php if (!empty($post_data->education)) { ?>
                                        <li><span>Education Type </span>
                                            <?php
                                            if($post_data->education == '1') {
                                                echo "Professional Certificate";
                                            } else if($post_data->education == '2') {
                                                echo "Undergraduate Degrees";
                                            } else if($post_data->education == '3') {
                                                echo "Transfer Degree";
                                            } else if($post_data->education == '4') {
                                                echo "Associate Degree";
                                            } else if($post_data->education == '5') {
                                                echo "Bachelor Degree";
                                            } else if($post_data->education == '6') {
                                                echo "Graduate Degrees";
                                            } else if($post_data->education == '7') {
                                                echo "Master Degree";
                                            } else if($post_data->education == '8') {
                                                echo "Doctoral Degrees";
                                            } else {
                                                echo "";
                                            } ?>
                                        </li>
                                        <?php } ?>
                                        <?php if (!empty($post_data->duration)) { ?>
                                        <li>
                                            <span>Employment Duration </span>
                                            <?php
                                            if($post_data->duration == '1') {
                                                echo "Permanent";
                                            } else {
                                                echo "Contract";
                                            } ?>
                                        </li>
                                        <?php } ?>
                                    </div>
                                    <div class="Bid-Data">
                                        <?php if (!empty($post_data->remote)) { ?>
                                        <li><span>Job Type </span>
                                            <?php
                                            if($post_data->remote == '3') {
                                                echo "Remote Only";
                                            } else if($post_data->remote == '2') {
                                                echo "Hybrid";
                                            } else {
                                                echo "On Site";
                                            } ?>
                                        </li>
                                        <?php } ?>
                                        <?php if (!empty($post_data->job_type)) { ?>
                                        <li><span>Job Type </span>
                                            <?php
                                            if($post_data->job_type == '1') {
                                                echo "Full-time";
                                            } else {
                                                echo "Part-time";
                                            } ?>
                                        </li>
                                        <?php } ?>
                                        <?php if (!empty($post_data->charges)) { ?>
                                        <li><span>Charges </span><?php echo $post_data->charges." ".$post_data->currency ?></li>
                                        <?php } ?>
                                    </div>
                                    <div class="Bid-Data">
                                    </div>
                                    <?php if (!empty($post_data->country)) { ?>
                                    <li><span>Complete Address </span><?php echo $post_data->city . ', ' . $post_data->state . ', ' . $post_data->country; ?></li>
                                    <?php } ?>
                                </ul>
                                <form action="<?= base_url('user/dashboard/save_postbid') ?>" method="post">
                                    <input type="hidden" name="postjob_id" value="<?php if (!empty($post_data->id)) { echo $post_data->id; } ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['afrebay']['userId'] ?>">
                                    <?php if (!empty(@$_SESSION['afrebay']['userType'])) {
                                        if(@$_SESSION['afrebay']['userType'] == '1' || @$_SESSION['afrebay']['userType'] == '3') {
                                        $profile_check = $this->db->query("SELECT * FROM `users` WHERE userId = '".@$_SESSION['afrebay']['userId']."'")->result_array();
                                        if(empty($profile_check[0]['firstname']) || empty($profile_check[0]['lastname']) || empty($profile_check[0]['email']) || empty($profile_check[0]['gender']) || empty($profile_check[0]['address']) || empty($profile_check[0]['short_bio']) || empty($profile_check[0]['rateperhour']) || empty($profile_check[0]['resume'])) { ?>
                                            <a href="<?= base_url('profile')?>" class="btn btn-info cstm_applybtn">Please complete your profile to apply</a>
                                        <?php } else {
                                            $userBidData = $this->db->query("SELECT * FROM `job_bid` WHERE postjob_id = '".$post_data->id."' and user_id = '".@$_SESSION['afrebay']['userId']."'")->result_array();
                                            if(!empty($userBidData)) { ?>
                                            <a href="javascript:void(0)" class="btn btn-info cstm_applybtn">Application successful</a>
                                        <?php } else { ?>
                                            <input type="submit" class="btn btn-info cstm_applybtn" value="Apply Now">
                                            <input type="hidden" name="postjob_id" value="<?php if (!empty($post_data->id)) { echo $post_data->id; } ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['afrebay']['userId'] ?>">
                                        <?php } } ?>
                                    <?php } else { ?>
                                    <!-- <a href="javascript:void(0)" class="btn btn-info cstm_applybtn">Employers are not eligible to apply for jobs</a> -->
                                    <?php }} else { ?>
                                    <a href="<?= base_url('login')?>" class="btn btn-info cstm_applybtn">Login to apply</a>
                                    <?php } ?>
                                </form>
                            </div>
                            <div class="employe-about d-none">
                                <ul>
                                    <li>
                                        <span class="rat-b">0.0</span>
                                        <span class="fa fa-star checked1"></span>
                                        <span class="fa fa-star checked1"></span>
                                        <span class="fa fa-star checked1"></span>
                                        <span class="fa fa-star checked1"></span>
                                        <span class="fa fa-star checked1"></span>
                                        <span>( 0 reviews )</span>
                                    </li>
                                    <li>
                                        <div class="hope-aus">
                                            <span>
                                            <?php if (!empty($post_data->user_address)) {
                                                echo $post_data->user_address;
                                            } ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hope-aus1">
                                            <ul>
                                                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-phone"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php if(@$_SESSION['afrebay']['userType'] == '2') { ?>
<section class="max_height">
    <div class="block no-padding Employees_Search_List">
        <div class="container">
            <h3 style="padding: 0 0px 0px 15px;">Recommended Employee</h3>
            <div class="row no-gape">
            <?php
                $key_skills = explode(',', $post_data->required_key_skills);
                $experience = $post_data->experience_level;
                $noEmployeesFound = true; // Flag to track if any employees are found
                $rankedEmployees = []; // Array to store ranked employees

                foreach ($key_skills as $skill) {
                    $recomendedEmployeeList = $this->db->query("SELECT * FROM `users` WHERE instr(concat(',', skills, ','), ',$skill,') AND experience <= '".$experience."' AND `status` = 1 AND `email_verified` = 1 AND userType = '1' ORDER BY experience DESC")->result_array();
                    if (!empty($recomendedEmployeeList)) {
                        $noEmployeesFound = false; // Employees found, set flag to false
                        foreach ($recomendedEmployeeList as $employee) {
                            $matchScore = substr_count($employee['skills'], $skill); // Count occurrences of the skill for ranking
                            $employee['rank'] = $matchScore;
                            $rankedEmployees[] = $employee;
                        }
                    }
                }

                // Sort employees by rank in descending order
                usort($rankedEmployees, function($a, $b) {
                    return $b['rank'] - $a['rank'];
                });
                ?>
                <?php if (!$noEmployeesFound) { ?>
                <aside class="col-lg-3 column border-right Employees_Search_Panel">
                    <div class="Employees_Search_Panel_Data">
                        <form method="post" id="filter_form">
                            <input type="hidden" name="key_skill" id="key_skill" value="<?= $post_data->required_key_skills; ?>" />
                            <input type="hidden" name="job_experience" id="job_experience" value="<?= $post_data->experience_level; ?>" />
                            <div class="widget">
                                <h3 class="sb-title closed">Employment Duration</h3>
                                <div class="specialism_widget">
                                    <select class="form-control" name="duration" onchange="filter_job();">
                                        <option value="">Select Option</option>
                                        <option value="1" <?php if(@$duration == 1) {echo 'selected';}?>>Permanent</option>
                                        <option value="2" <?php if(@$duration == 2) {echo 'selected';}?>>Contract</option>
                                    </select>
                                </div>
                            </div>
                            <div class="widget">
                                <h3 class="sb-title closed">Industry</h3>
                                <div class="specialism_widget">
                                    <select data-placeholder="Select Industry" class="form-control" name="industry" onchange="filter_job();">
                                        <option value="">Select Option</option>
                                        <?php
                                        $getcategory = $this->Crud_model->GetData('category', 'id, category_name', "");
                                        foreach($getcategory as $key) {?>
                                            <option value="<?= $key->id; ?>" <?php if($key->id == $category) {echo "selected"; }?>><?php echo $key->category_name;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="widget">
                                <h3 class="sb-title closed">Experience Level</h3>
                                <div class="specialism_widget">
                                    <select data-placeholder="Select Experience Level" class="form-control" name="experience_level" onchange="filter_job();">
                                        <option value="">Select Option</option>
                                        <option value="1" <?php if(@$experience_level == 1) {echo 'selected';}?>>0 to 02 Years</option>
                                        <option value="2" <?php if(@$experience_level == 2) {echo 'selected';}?>>03 to 05 Years</option>
                                        <option value="3" <?php if(@$experience_level == 3) {echo 'selected';}?>>06 to 08 Years</option>
                                        <option value="4" <?php if(@$experience_level == 4) {echo 'selected';}?>>08 to 10 Years</option>
                                        <option value="5" <?php if(@$experience_level == 5) {echo 'selected';}?>>> 10 Years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="widget">
                                <h3 class="sb-title closed">Education</h3>
                                <div class="specialism_widget">
                                    <select class="form-control" data-placeholder="Select Education" name="education" onchange="filter_job();">
                                        <option value="">Select Option</option>
                                        <option value="1" <?php if(@$education == 1) {echo 'selected';}?>>Professional Certificate</option>
                                        <option value="2" <?php if(@$education == 2) {echo 'selected';}?>>Undergraduate Degrees</option>
                                        <option value="3" <?php if(@$education == 3) {echo 'selected';}?>>Transfer Degree</option>
                                        <option value="4" <?php if(@$education == 4) {echo 'selected';}?>>Associate Degree</option>
                                        <option value="5" <?php if(@$education == 5) {echo 'selected';}?>>Bachelor Degree</option>
                                        <option value="6" <?php if(@$education == 6) {echo 'selected';}?>>Graduate Degrees</option>
                                        <option value="7" <?php if(@$education == 7) {echo 'selected';}?>>Master Degree</option>
                                        <option value="8" <?php if(@$education == 8) {echo 'selected';}?>>Doctoral Degrees</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="widget">
                                <h3 class="sb-title closed">Application Deadline Date</h3>
                                <div class="specialism_widget">
                                    <input type="date" placeholder="Select a Date" name="appli_deadeline" class="form-control datepicker" id="datepicker" onchange="filter_job();"/>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </aside>
                <?php } ?>
                <div class="col-lg-9 column Employees_Search_Result">
                    <div class="padding-left">
                        <div class="emply-resume-sec">
                            <div id="post_list">
                            <?php
                            if (!$noEmployeesFound) {
                                foreach ($rankedEmployees as $value) {
                                    $profile_pic = (!empty($value['profilePic']) && file_exists('uploads/users/'.$value['profilePic']))
                                        ? '<img src="'.base_url('uploads/users/'.$value['profilePic']).'" alt="" />'
                                        : '<img src="'.base_url('uploads/no_user.png').'" alt="" />';

                                    $desc = (strlen($value['short_bio']) > 100)
                                        ? substr(strip_tags($value['short_bio']), 0, 100).'...'
                                        : strip_tags($value['short_bio']);
                                ?>
                                <div class="emply-resume-list">
                                    <div class="emply-resume-thumb"><?= $profile_pic ?></div>
                                    <div class="emply-resume-info">
                                        <h3>
                                            <a href="<?= base_url('employerdetail/'.base64_encode($value['userId'])) ?>" title=""><?= $value['firstname']." ".$value['lastname'] ?></a>
                                        </h3>
                                        <p><i class="la la-map-marker"></i><?= $value['address'] ?></p>
                                        <p style="width: 80% !important;"><?= $desc ?></p>
                                        <p>Rank: <?= $value['rank'] ?></p>
                                    </div>
                                    <div class="shortlists" style="width:50px;">
                                        <a href="<?= base_url('readyforinterview?uID='.base64_encode($value['userId']).'&jobID='.base64_encode($post_data->id)) ?>" title="" style=" width: 170px !important; text-align: center;">Ready for Interview</a>
                                        <a href="<?= base_url('chatforinterview?uID='.base64_encode($value['userId']).'&jobID='.base64_encode($post_data->id)) ?>" title="" style=" width: 170px !important; text-align: center;">Chat</a>
                                    </div>
                                </div>
                                <?php
                                }
                            } else { ?>
                                <div id="pagination_link" style="text-align: center;">Unfortunately, no employee has been identified with the data set required for this job posting at this time.</div>
                            <?php } ?>
                            </div>
                            <div class="emply-resume-sec" id="show"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<style type="text/css">
    .cstm_applybtn {position: absolute; right: 40px; bottom: 21px; background: linear-gradient(180deg, rgba(249, 80, 30, 1) 0%, rgba(252, 119, 33, 1) 100%); border: 0; border-radius: 25px; letter-spacing: 0; font-size: 15px !important; text-transform: uppercase; font-weight: 700; font-family: 'Nunito', sans-serif; box-shadow: none !important; border: 0; padding: 10px 20px !important; color: #fff;}
</style>
<script>
$(document).ready(function(){
    $("#bid_amount").on("keypress keyup blur", function (event) {
        var patt = new RegExp(/(?<=\.\d\d).+/i);
        $(this).val($(this).val().replace(patt, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
})
function filter_job() {
    var base_url = $("#base_url").val();
    var formData = $('#filter_form').serialize();
    $.ajax({
        method:"POST",
        cache:false,
        url:base_url+"Welcome/filter_recommended_employer",
        data: formData,
        beforeSend:function(){},
        success:function(returndata) {
            $('#post_list').hide();
            $('#show').html(returndata);
        }
    });
}
</script>
