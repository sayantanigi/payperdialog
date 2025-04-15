<style type="text/css">
.dashboard {box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; height: 150px;}
.dashboard h4 {padding: 10px;}
.dashboard h3 {padding: 5px;}
.list_profile li {list-style: none; padding: 10px; display: block; font-size: 18px; margin-left: 20px;}
.CustomDesign .CustomBlock {min-height: 40vh !important;}
</style>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= base_url('assets/images/resource/mslider1.jpg') ?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
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
                <h2 class="breadcrumb-title">Dashboard</h2>
                <!-- <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('sidebar'); ?>
<div class="<?php if(@$_SESSION['afrebay']['userType'] == '1') { echo "col-md-10";} else {echo "col-md-12"; }?> col-sm-12 display-table-cell v-align">
    <div class="user-dashboard">
        <div class="row row-sm">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="text-success-msg f-20" style="text-align: center;">
                    <?php if ($this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                        unset($_SESSION['message']);
                    } ?>
                </div>
                <!-- employer list -->
                <?php if ($_SESSION['afrebay']['userType'] == 2) { ?>
                <div class="row justify-content-md-center">
                    <div class="col-12 v-align CustomDesign">
                        <div class="col-md-8 col-6 v-align CustomDesign" style="display: inline-block; float: left; margin-top: 10px;">
                            <?php
                            $profile_check = $this->db->query("SELECT `profilePic`, `companyname`, `email`, `mobile`,`address`, `foundedyear`, `teamsize`, `short_bio` FROM `users` WHERE userId = '" . @$_SESSION['afrebay']['userId'] . "'")->result_array();
                            if (empty($profile_check[0]['companyname']) || empty($profile_check[0]['email']) || empty($profile_check[0]['address']) || empty($profile_check[0]['teamsize']) || empty($profile_check[0]['short_bio'])) { ?>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>My Jobs</center></h4>
                                        <h3><center><?= count($get_job); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Applications to your jobs</center></h4>
                                        <h3><center><?= count($bid_job); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Interviews conducted</center></h4>
                                        <h3><center><?= count($interview_conducted); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Average cost of interviews</center></h4>
                                        <h3><center><?= "$".number_format($average_cost->average_rate, 2); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Payments Made</center></h4>
                                        <h3><center><?= count($payment_made); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <?php } else { ?>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="<?= base_url('myjob') ?>">
                                    <div class="dashboard">
                                        <h4><center>My Jobs</center></h4>
                                        <h3><center><?= count($get_job); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="<?= base_url('jobbid') ?>">
                                    <div class="dashboard">
                                        <h4><center>Applications to your jobs</center></h4>
                                        <h3><center><?= count($bid_job); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Interviews conducted</center></h4>
                                        <h3><center><?= count($interview_conducted); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Average cost of interviews</center></h4>
                                        <h3><center><?= "$".number_format($average_cost->average_rate, 2); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                                <a href="javascript:void(0)" onclick="completeSub()">
                                    <div class="dashboard">
                                        <h4><center>Payments Made</center></h4>
                                        <h3><center><?= count($payment_made); ?></center></h3>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-4 col-6 v-align CustomDesign" style="display: inline-block; float: left; margin-top: 10px;">
                            <p class="CustomPara">Upcoming Interview</p>
                            <div class="CustomBlock">
                                <?php
                                $selectDate = date('Y-m-d');
                                $employeeId = $_SESSION['afrebay']['userId'];
                                $availableData = $this->db->query("SELECT user_availability.*, user_booking.* FROM user_availability JOIN user_booking ON user_availability.id = user_booking.available_id WHERE start_date > '" . $selectDate . "' AND user_id ='" . @$employeeId . "'")->result_array();
                                foreach ($availableData as $value) { ?>
                                    <p class="ParaHeading"><?= $value['start_date'] ?></p>
                                    <div style='width: 100%; display: inline-block; padding: 0 10px; margin-bottom: 20px;'>
                                        <div style='width: 100%; display: inline-block; border-radius: 10px; box-shadow: 0 0 10px #dddddd; padding: 10px 0 10px 0;'>
                                            <?php $getBookSlot = explode(',', $value['bookingTime']);
                                            $meetingLink = explode(',', $value['meeting_link']);
                                            for ($i = 0; $i < count($getBookSlot); $i++) { ?>
                                                <?php
                                                $booking_id = $value[$i]['id'];
                                                $employee_id = $value[$i]['employee_id'];
                                                $employer_id = $value[$i]['employer_id'];
                                                $available_id = $value[$i]['available_id'];
                                                $bookingTime = $value[$i]['bookingTime'];
                                                ?>
                                                <div style='width: 100%;float: left;display: flex; position: relative; align-items: center; justify-content: space-between; flex-direction: row;'>
                                                    <p style='width: 100%;display: inline-block;float: left;margin: 0px;font-size: 12px; padding-left: 20px;'>
                                                        <?= date('h:i A', strtotime($getBookSlot[$i])) ?> to
                                                        <?= date('h:i A', strtotime($getBookSlot[$i]) + 60 * 60) ?>
                                                    </p>
                                                    <p style="width: 100%;display: inline-block;float: left;margin: 0px;font-size: 12px; padding-left: 20px;"><a href="<?= $meetingLink[$i] ?>">Meeting Link</a></p>
                                                    <!-- <input type='checkbox' style='position: unset; z-index: 1; opacity: 1; margin: 0px 10px 0px 0px;' id='completecheck' name='completecheck' value='1' onclick='completecheck(<?= $booking_id; ?>)'> -->
                                                </div>
                                            <?php }
                                            $getEmployer = $this->db->query("SELECT * FROM users WHERE userId = '" . @$value['employer_id'] . "'")->row(); ?>
                                            <div>
                                                <p style='width: 100%;display: inline-block;float: left;margin: 0px;font-size: 14px;'>Booked By:
                                                    <?= @$getEmployer->companyname ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="root"></div>
                </div>
                <?php } else if($_SESSION['afrebay']['userType'] == '1' || @$_SESSION['afrebay']['userType'] == '3') { ?>
                    <div class="col-md-8 col-6 v-align CustomDesign" style="display: inline-block; float: left; margin-top: 10px;">
                    <?php
                    $profile_check = $this->db->query("SELECT * FROM `users` WHERE userId = '" . @$_SESSION['afrebay']['userId'] . "'")->result_array();
                    if (empty($profile_check[0]['firstname']) || empty($profile_check[0]['lastname']) || empty($profile_check[0]['email']) || empty($profile_check[0]['gender']) || empty($profile_check[0]['address']) || empty($profile_check[0]['short_bio'])) { ?>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)" onclick="completeSub()">
                            <div class="dashboard">
                                <h4><center>Total job bids</center></h4>
                                <h3><center><?= count($job_bid); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)" onclick="completeSub()">
                            <div class="dashboard">
                                <h4><center>Interviews conducted</center></h4>
                                <h3><center><?= count($interview_conducted); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)" onclick="completeSub()">
                            <div class="dashboard">
                                <h4><center>Average cost of interviews</center></h4>
                                <h3><center><?= "$".number_format($average_cost->average_rate, 2); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)" onclick="completeSub()">
                            <div class="dashboard">
                                <h4><center>Payments Made</center></h4>
                                <h3><center><?= count($payment_made); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)">
                            <div class="dashboard">
                            <h4><center>Total job bids</center></h4>
                            <h3><center><?= count($job_bid); ?></center></h3>
                            </div>
                        </a>
                    </div><div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)">
                            <div class="dashboard">
                                <h4><center>Interviews conducted</center></h4>
                                <h3><center><?= count($interview_conducted); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)">
                            <div class="dashboard">
                                <h4><center>Average cost of interviews</center></h4>
                                <h3><center><?= "$".number_format($average_cost->average_rate, 2); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="display: inline-block;float: left;margin-bottom: 10px;">
                        <a href="javascript:void(0)">
                            <div class="dashboard">
                                <h4><center>Payments Made</center></h4>
                                <h3><center><?= count($payment_made); ?></center></h3>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-4 col-6 v-align CustomDesign" style="display: inline-block; float: left; margin-top: 10px;">
                    <p class="CustomPara">Upcoming Interview</p>
                    <div class="CustomBlock">
                        <?php
                        $selectDate = date('Y-m-d');
                        $employeeId = $_SESSION['afrebay']['userId'];
                        $availableData = $this->db->query("SELECT user_availability.*, user_booking.* FROM user_availability JOIN user_booking ON user_availability.id = user_booking.available_id WHERE start_date > '" . $selectDate . "' AND user_id ='" . @$employeeId . "'")->result_array();
                        foreach ($availableData as $value) { ?>
                            <p class="ParaHeading"><?= $value['start_date'] ?></p>
                            <div style='width: 100%; display: inline-block; padding: 0 10px; margin-bottom: 20px;'>
                                <div style='width: 100%; display: inline-block; border-radius: 10px; box-shadow: 0 0 10px #dddddd; padding: 10px 0 10px 0;'>
                                    <?php $getBookSlot = explode(',', $value['bookingTime']);
                                    $meetingLink = explode(',', $value['meeting_link']);
                                    for ($i = 0; $i < count($getBookSlot); $i++) { ?>
                                        <?php
                                        $booking_id = $value[$i]['id'];
                                        $employee_id = $value[$i]['employee_id'];
                                        $employer_id = $value[$i]['employer_id'];
                                        $available_id = $value[$i]['available_id'];
                                        $bookingTime = $value[$i]['bookingTime'];
                                        ?>
                                        <div style='width: 100%;float: left;display: flex; position: relative; align-items: center; justify-content: space-between; flex-direction: row;'>
                                            <p style='width: 100%;display: inline-block;float: left;margin: 0px;font-size: 12px; padding-left: 20px;'>
                                                <?= date('h:i A', strtotime($getBookSlot[$i])) ?> to
                                                <?= date('h:i A', strtotime($getBookSlot[$i]) + 60 * 60) ?>
                                            </p>
                                            <p style="width: 100%;display: inline-block;float: left;margin: 0px;font-size: 12px; padding-left: 20px;"><a href="<?= $meetingLink[$i] ?>">Meeting Link</a></p>
                                            <!-- <input type='checkbox' style='position: unset; z-index: 1; opacity: 1; margin: 0px 10px 0px 0px;' id='completecheck' name='completecheck' value='1' onclick='completecheck(<?= $booking_id; ?>)'> -->
                                        </div>
                                    <?php }
                                    $getEmployer = $this->db->query("SELECT * FROM users WHERE userId = '" . @$value['employer_id'] . "'")->row(); ?>
                                    <div>
                                        <p style='width: 100%;display: inline-block;float: left;margin: 0px;font-size: 14px;'>Booked By:
                                            <?= @$getEmployer->companyname ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<script>
function completeSub() {
    $('.completeSub').show();
    setTimeout(function () {
        $('.completeSub').fadeOut('slow');
    }, 4000);
}
</script>