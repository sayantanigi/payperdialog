<?php
if (!empty($get_banner->image) && file_exists('uploads/banner/' . $get_banner->image)) {
    $banner_img = base_url("uploads/banner/" . $get_banner->image);
} else {
    $banner_img = base_url("assets/images/resource/mslider1.jpg");
} ?>
<style media="screen">
.postdetail {
    padding: 7px 33px;
    border-radius: 10px;
    background: red;
    color: #fff;
    margin: 10px;
    font-size: 20px;
}
.cstm_viewbid_btn {
    background: linear-gradient(180deg, rgb(237 28 36) 0%, rgb(237 28 36 / 75%) 100%) !important;
    border: 0;
    border-radius: 35px;
    letter-spacing: 0;
    font-weight: 600;
    width: 100%;
    display: block;
    color: #fff;
    padding: 10px;
    text-align: center;}
</style>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= $banner_img ?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
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
                                    <!-- <a class="btn btn-info" href="<?= base_url('employerdetail/' . base64_encode($post_data->user_id)) ?>">
                                        <?php
                                        if ($postedBy[0]['userType'] == 1) {
                                            echo $postedBy[0]['firstname'] . ' ' . $postedBy[0]['lastname'];
                                        } else if ($postedBy[0]['userType'] == 2) {
                                            echo $postedBy[0]['companyname'];
                                        } ?>
                                    </a> -->
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
                                            <a href="javascript:void(0)" class="btn btn-info cstm_applybtn">Already Applied</a>
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
                                                <!-- <li><a href="javascript:void(0)"><i class="fa fa-shield"></i></a></li> -->
                                                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i></a></li>
                                                <!-- <li><a href="javascript:void(0)"><i class="fa fa-user"></i></a></li> -->
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
    <!-- <div class="block no-padding Our_Jobs Employees_Search_List"> -->
    <div class="block no-padding Employees_Search_List">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row no-gape">
                        <h3>Recommended Employee</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 column Employees_Search_Result">
                    <div class="padding-left">
                        <div class="emply-resume-sec">
                            <div id="post_list">
                            <?php
                            $key_skills = explode(',', $post_data->required_key_skills);
                            $experience = $post_data->experience_level;
                            for ($i=0; $i < count($key_skills); $i++) {
                                //$recomendedEmployeeList = $this->db->query("SELECT * FROM users WHERE (skills = '".trim($key_skills[$i])."' OR skills LIKE '%".trim($key_skills[$i])."%') AND experience <= '".$experience."'")->result_array();
                                $recomendedEmployeeList = $this->db->query("SELECT * FROM `users` WHERE instr(concat(',', skills, ','), ',$key_skills[$i],') AND experience <= '".$experience."' AND `status` = 1 AND `email_verified` = 1 AND userType = '1' ORDER BY experience DESC")->result_array();
                                foreach ($recomendedEmployeeList as $value) {
                                    if(!empty($value['profilePic']) && file_exists('uploads/users/'.$value['profilePic'])) {
                                        $profile_pic= '<img src="'.base_url('uploads/users/'.$value['profilePic']).'" alt="" />';
                                    } else {
                                        $profile_pic= '<img src="'.base_url('uploads/no_user.png').'" alt="" />';
                                    }

                                    if(strlen($value['short_bio'])>100) {
                                        $desc= substr(strip_tags($value['short_bio']), 0,100).'...';
                                    } else {
                                        $desc= strip_tags($value['short_bio']);
                                    }
                                ?>
                                <div class="emply-resume-list">
                                    <div class="emply-resume-thumb"><?= $profile_pic ?></div>
                                    <div class="emply-resume-info">
                                        <h3>
                                            <a href="<?= base_url('employerdetail/'.base64_encode($value['userId']))?>" title=""><?= $value['firstname']." ".$value['lastname']?></a>
                                        </h3>
                                        <p><i class="la la-map-marker"></i><?= $value['address']?></p>
                                        <p><?= $value['address']?><?= $desc?></p>
                                        <p></p>
                                    </div>
                                    <div class="shortlists" style="width:50px;">
                                        <a href="<?= base_url('employerdetail/'.base64_encode($value['userId']))?>" title="">View Profile<i class="la la-plus"></i></a>
                                    </div>
                                </div>
                                <?php }
                            } ?>
                            </div>
                            <div align="center" id="pagination_link">Unfortunately, no employee has been identified with the specific skill set required for this job posting at this time.</div>
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

</script>
