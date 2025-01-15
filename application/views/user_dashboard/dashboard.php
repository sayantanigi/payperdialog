<style type="text/css">
    .dashboard {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        height: 150px;
    }

    .dashboard h4 {
        padding: 10px;
    }

    .dashboard h3 {
        padding: 5px;
    }

    .list_profile li {
        list-style: none;
        padding: 10px;
        display: block;
        font-size: 18px;
        margin-left: 20px;
    }
</style>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1"
            style="background: url('<?= base_url('assets/images/resource/mslider1.jpg') ?>') repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
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
                    <?php
                    $profile_check = $this->db->query("SELECT `profilePic`, `companyname`, `email`, `mobile`,`address`, `foundedyear`, `teamsize`, `short_bio` FROM `users` WHERE userId = '" . @$_SESSION['afrebay']['userId'] . "'")->result_array();
                    if (empty($profile_check[0]['companyname']) || empty($profile_check[0]['email']) || empty($profile_check[0]['address']) || empty($profile_check[0]['teamsize']) || empty($profile_check[0]['short_bio'])) { ?>
                    <div class="col-md-4 col-sm-12">
                        <a href="javascript:void(0)" onclick="completeSub()">
                            <div class="dashboard">
                                <h4>
                                    <center>My Jobs</center>
                                </h4>
                                <h3>
                                    <center>
                                        <?= count($get_job); ?>
                                    </center>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-4 col-sm-12">
                        <a href="<?= base_url('myjob') ?>">
                            <div class="dashboard">
                                <h4>
                                    <center>My Jobs</center>
                                </h4>
                                <h3>
                                    <center>
                                        <?= count($get_job); ?>
                                    </center>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <?php } ?>

                    <?php $profile_check = $this->db->query("SELECT `profilePic`, `companyname`, `email`, `mobile`,`address`, `foundedyear`, `teamsize`, `short_bio` FROM `users` WHERE userId = '" . @$_SESSION['afrebay']['userId'] . "'")->result_array();
                    if (empty($profile_check[0]['companyname']) || empty($profile_check[0]['email']) || empty($profile_check[0]['address']) || empty($profile_check[0]['teamsize']) || empty($profile_check[0]['short_bio'])) { ?>
                    <div class="col-md-4 col-sm-12">
                        <a href="javascript:void(0)" onclick="completeSub()">
                            <div class="dashboard">
                                <h4>
                                    <center>Applications to your jobs</center>
                                </h4>
                                <h3>
                                    <center>
                                        <?= count($bid_job); ?>
                                    </center>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-4 col-sm-12">
                        <a href="<?= base_url('jobbid') ?>">
                            <div class="dashboard">
                                <h4>
                                    <center>Applications to your jobs</center>
                                </h4>
                                <h3>
                                    <center>
                                        <?= count($bid_job); ?>
                                    </center>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <div id="root"></div>
                </div>
                <?php } else if($_SESSION['afrebay']['userType'] == '1' || @$_SESSION['afrebay']['userType'] == '3') { ?>
                <div class="col-md-6 col-6 v-align CustomDesign" style="display: inline-block; float: left; margin-top: 10px;">
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
<div id="add_project" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header login-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Project Title" name="name" />
                <input type="text" placeholder="Post of Post" name="mail" />
                <input type="text" placeholder="Author" name="passsword" />
                <textarea placeholder="Desicrption"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                <button type="button" class="add-project" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
</section>
<script type="module">
    import { isSupported, setup } from "./node_modules/@loomhq/loom-sdk/";
    //import { oembed } from "../node_modules/@loomhq/loom-embed";
    const BUTTON_ID = "unique-button";
    async function init() {
        const root = document.getElementById("root");
        root.innerHTML = `<button id="${BUTTON_ID}" class="btn btn-primary">Record</button>`;
        const button = root.querySelector(`#${BUTTON_ID}`);
        if (button == null || !isSupported()) {
            return;
        }
        const { configureButton } = await setup({
            apiKey: "796fefe8-3e98-4284-9f96-1f15f9d461ff"
        });
        configureButton({
            element: button,
            hooks: {
                onInsertClicked: (shareLink) => {
                    console.log('clicked insert');
                    console.log(shareLink);
                },
                onStart: () => console.log("start"),
                onCancel: () => console.log('canceled'),
                onCompleted: () => console.log('completed'),
            }
        });
    }
    init();
</script>
<script>
    function completeSub() {
        $('.completeSub').show();
        setTimeout(function () {
            $('.completeSub').fadeOut('slow');
        }, 4000);
    }
</script>