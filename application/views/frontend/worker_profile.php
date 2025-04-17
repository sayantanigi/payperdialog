<?php
if (!empty($get_banner->image) && file_exists('uploads/banner/' . $get_banner->image)) {
    $banner_img = base_url("uploads/banner/" . $get_banner->image);
} else {
    $banner_img = base_url("assets/images/resource/mslider1.jpg");
}
?>

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= $banner_img ?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Job Seeker Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="overlape freelancer-details-page">
    <div class="block remove-top Worker_Detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="cand-single-user"> -->
                    <div class="worker_cand-single-user">
                        <div class="row m-0">
                            <div class="col-lg-2 col-md-4 col-sm-12">
                                <div class="can-detail-s">
                                    <div class="cst">
                                        <?php if (!empty($user_detail->profilePic) && file_exists('uploads/users/' . @$user_detail->profilePic)) { ?>
                                            <img src="<?= base_url('uploads/users/' . @$user_detail->profilePic) ?>" alt="" />
                                        <?php } else { ?>
                                            <img src="<?= base_url('uploads/users/user.png') ?>" alt="" />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-12 Worker_Head_Text">
                                <div class="Worker_Head_Text_Data">
                                    <h3><?php if (!empty($user_detail->firstname)) {
                                            echo $user_detail->firstname . ' ' . $user_detail->lastname;
                                        } else {
                                            echo $user_detail->username;
                                        } ?></h3>
                                    <p>Member Since, <?= date('Y', strtotime(@$user_detail->created)) ?></p>
                                    <p><i class="la la-map-marker"></i><?= @$user_detail->address ?></p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 Worker_Head_Social">
                                <div class="Worker_Head_Social_Data">
                                    <div class="download-cv">
                                        <a class="btn btn-info" href="<?= base_url('uploads/users/resume/' . @$user_detail->resume) ?>" title="" download>Download CV <i class="la la-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <ul class="cand-extralink">
                        <li><a href="#about" title="">About</a></li>
                        <li><a href="#education" title="">Education</a></li>
                        <li><a href="#experience" title="">Work Experience</a></li>
                        <li><a href="#skills" title="">Professional Skill Set</a></li>
                    </ul>
                    <div class="cand-details-sec">
                        <div class="row">
                            <div class="col-lg-8 column">
                                <div class="cand-details" id="about">
                                    <h2>About This Job Seeker</h2>
                                    <p>
                                        <?= @$user_detail->short_bio; ?>
                                    </p>

                                    <div class="edu-history-sec" id="education">
                                        <h2>Education</h2>
                                        <?php if (!empty($user_education)) {
                                            foreach ($user_education as $edu) { ?>
                                                <div class="edu-history">
                                                    <i class="la la-graduation-cap"></i>
                                                    <div class="edu-hisinfo">
                                                        <h3><?= ucfirst($edu->education) ?> in <?= $edu->department ?> depertment</h3>
                                                        <i><?= $edu->passing_of_year ?></i>
                                                        <span><?= $edu->college_name ?></span>
                                                        <p><?= $edu->description ?></p>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>
                                    </div>
                                    <div class="edu-history-sec" id="experience">
                                        <h2>Work & Experience</h2>
                                        <?php if (!empty($user_work)) {
                                            foreach ($user_work as $row) { ?>
                                                <div class="edu-history style2">
                                                    <i></i>
                                                    <div class="edu-hisinfo">
                                                        <h3><?= ucfirst($row->designation) ?><span><?= $row->company_name ?></span></h3>
                                                        <i><?= date('d-m-Y', strtotime($row->from_date)) . ' to ' . date('d-m-Y', strtotime($row->to_date)) ?></i>
                                                        <p><?= $row->description ?></p>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>
                                    </div>
                                    <?php if (!empty($user_detail->skills)) { ?>
                                    <div class="progress-sec" id="skills">
                                        <h2>Professional Skill Set</h2>
                                        <div class="progress-sec" style="text-transform: uppercase;">
                                            <span><?= @$user_detail->skills ?></span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-4 column">
                                <div class="job-overview" id="job-overview">
                                    <h3>Candidate Overview</h3>
                                    <ul>
                                        <li>
                                            <i class="la la-mars-double"></i>
                                            <h3>Gender</h3>
                                            <span><?= @$user_detail->gender ?></span>
                                            <input type="hidden" name="rateperhour" id="rateperhour" value="<?= @$user_detail->rateperhour?>">
                                        </li>
                                    </ul>
                                </div>
                                <!-- Calender -->
                                <div class="Calender_Pick" id="calendar">
                                    <div style="display: flex; flex-direction: row; justify-content: space-around; margin-top: 10px;">
                                        <p style="margin: 0px !important;display: flex;align-items: center;">
                                            <span style="background: #008000; display: inline-block; width: 10px; height: 10px; margin-right: 10px;">&nbsp;</span>
                                            <span> Available</span>
                                        </p>
                                        <p style="margin: 0px !important;display: flex;align-items: center;">
                                            <span style="background: #fe0000; display: inline-block; width: 10px; height: 10px; margin-right: 10px;"></span>
                                            <span> Booked</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="quick-form-job availtimedata" style="">
                                    <h3>Selected Date: <p class="choosendate"></p></h3>
                                    <div class="getdatespecificdata"></div>
                                    <div style="display: inline-block;">
                                        <button id="confirmSlotsButton" style="display: none;">Confirm Slots</button>
                                    </div>
                                    <div id="paypal-button-container"></div>
                                </div>
                                <div class="availslotdata"></div>
                                <?php if (!empty($_SESSION['afrebay']['userId']) && $_SESSION['afrebay']['userType'] == 2) { ?>
                                <div class="quick-form-job">
                                    <h3>Rate This Freelancer</h3>
                                    <form method="post" action="<?= base_url('user/dashboard/save_employer_rating') ?>">
                                        <div class="row m-0">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <span class="star-rating star-5">
                                                    <input type="radio" name="rating" value="1"><i></i>
                                                    <input type="radio" name="rating" value="2"><i></i>
                                                    <input type="radio" name="rating" value="3"><i></i>
                                                    <input type="radio" name="rating" value="4"><i></i>
                                                    <input type="radio" name="rating" value="5"><i></i>
                                                </span>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 Form_Subject">
                                                <input type="text" placeholder="Enter Subject" name="subject" required />
                                                <input type="hidden" value="<?= @$user_detail->userId ?>" name="user_id">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 Form_Textarea">
                                                <textarea placeholder="Enter review" name="review"></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 Form_Btn">
                                                <button class="submit btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$link_array = explode('/',$actual_link);
$workers = base64_decode(end($link_array));
?>
<input type="hidden" name="workers_id" id="workers_id" value="<?php echo @$user_detail->userId?>">
<input type="hidden" name="user_id" id="user_id" value="<?php echo @$_SESSION['afrebay']['userId']?>">
<input type="hidden" name="jobID" id="jobID" value="<?php echo @$jobID?>">
<input type="hidden" name="selectedSlotIds" id="selectedSlotIds" value="">
<input type="hidden" name="rateperhour" id="rateperhour" value="<?php echo @$user_detail->rateperhour ?>">
<input type="hidden" name="total_amount" id="total_amount" value="">
<style>
.dashboard-gig a:focus, a:hover, a {text-decoration: none !important;}#calendar {width: 100%;margin: 0;box-shadow: 0 0 10px #dddddd;display: inline-block;padding: 20px;border-radius: 10px;margin-bottom: 20px;}.fc-event {border: 1px solid #eee !important;}.fc-content {padding: 3px !important;}.fc-content .fc-title {display: block !important;overflow: hidden;text-align: center;font-size: 12px;font-weight: 500;text-align: center;}.fc-customButton-button {font-size: 13px !important;position: absolute;top: 60px;left: 50%;transform: translateY(-50%);}.form-group {margin-bottom: 1rem;}.form-group>label {margin-bottom: 10px;}#delete-modal .modal-footer>.btn {border-radius: 3px !important;padding: 0px 8px !important;font-size: 15px;}.fc-scroller {overflow-y: hidden !important;}.context-menu {position: absolute;z-index: 1000;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);padding: 5px;}.context-menu ul {list-style-type: none;margin: 0;padding: 0;}.context-menu ul>li {display: block;padding: 5px 15px;list-style-type: none;color: #333;display: block;cursor: pointer;margin: 0 auto;transition: 0.10s;font-size: 13px;}.context-menu ul>li:hover {color: #fff;background-color: #007bff;border-radius: 2px;}.fa, .fas {font-size: 13px;margin-right: 4px;}button:focus {box-shadow: none !important;}.Calender_Pick .fc-header-toolbar {display: flex;flex-direction: column;}.Calender_Pick .fc-header-toolbar {display: flex;flex-direction: column;margin-bottom: 0px !important;}.Calender_Pick .fc-left {width: 100%;height: 35px;display: flex;justify-content: flex-start;align-items: flex-start;}.Calender_Pick .fc-left h2 {font-weight: 600;font-size: 18px;}.Calender_Pick .fc-center {position: relative;height: 45px;width: 100%; display: none;}.Calender_Pick .fc-center button {transform: translateY(0);position: absolute;top: 0;height: 35px;left: 0;width: 100px;border-radius: 50px;background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important;border: 0;font-size: 13px !important;}.Calender_Pick .fc-right {width: 100%;height: 45px;display: flex;align-items: flex-start;justify-content: space-between;}.Calender_Pick .fc-right button {border: 0;height: 35px;width: 100px;border-radius: 50px;background: linear-gradient(180deg, rgb(237 28 36) 0%, rgb(237 28 36 / 79%) 100%) !important; opacity: 1;font-size: 13px !important;}.Calender_Pick .fc-button-group {height: 35px;border-radius: 50px;}.Calender_Pick .fc-button-group button {background: linear-gradient(180deg, rgb(237 28 36) 0%, rgb(237 28 36 / 79%) 100%) !important; border: 0;display: flex;align-items: center;justify-content: center;width: 60px !important;}.Calender_Pick .fc-button-group button span {font-size: 13px;}.Calender_Pick .fc-day-grid-container {height: auto !important;border-bottom: 1px solid #ddd;}.Calender_Pick .fc-view-container .fc-head-container {color: #ED1C24 !important;}div.modal.edit-form.Modal_Show {display: flex !important;align-items: center;justify-content: center;}.edit-form .modal-content {width: 500px;}.edit-form .modal-content .modal-body {border-radius: 0;}.edit-form .modal-content #myForm .form-group label {padding: 0;font-size: 16px;}.edit-form .modal-content #myForm .form-group #event-title {padding: 10px !important;font-size: 15px;}.edit-form .modal-content .modal-footer button {height: 35px;display: flex;align-items: center;justify-content: center;border-radius: 50px;background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important;border: 0;letter-spacing: 1px;}
#err-messages{display: none; text-align: center;}
#submit-button {/*height: 35px !important;*/display: flex !important;align-items: center !important;justify-content: center !important;border-radius: 50px !important;background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important;border: 0 !important;letter-spacing: 1px !important;}
.jconfirm-content-pane {text-align: center !important;}
/*.jconfirm-buttons {margin-right: 21% !important;}*/
.fc .fc-row .fc-content-skeleton table, .fc .fc-row .fc-content-skeleton td, .fc .fc-row .fc-helper-skeleton td {padding: 0px !important;}
.fc-event:before, .fc-event-dot:before {bottom: -3px !important; width: 45px !important;}
.fc-content .fc-title {font-size: 9px !important;}
.jobsites tbody td {padding: 5px;}
.jobsites tbody td input {position: unset; opacity: 1; margin-right: 10px;}
.jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button.btn-default, .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button.btn-default {float: left;}
.paynow_btn {margin-right: 130px !important;}
.prompt_login {margin-right: 156px !important;}
.book_warning {margin-right: 160px !important;}
.paydone_btn {margin-right: 160px !important;}
.getdatespecificdatetime {border-radius: 10px; width: 150px; padding: 10px; display: inline-block; text-align: center; font-size: 12px; font-weight: 600; margin-bottom: 5px; border: 1px solid #000; margin-right: 12px; }
.getdatespecificdata {display: inline-block; margin-bottom: 10px; padding: 10px; border-radius: 15px;}
.availtimedata{display: none; margin-top: 0px; text-align: center; margin-bottom: 20px;}
.availtimedata .selected {background: green; color: #fff;}
.choosendate {display: inline; font-size: 18px;}
.availslotdata {text-align: center; border-radius: 10px; box-shadow: 0 0 10px #dddddd; margin-top: 0px; display: none; width: 100%; flex-wrap: wrap; justify-content: center;}
.availslotdataheader {background: #eee; width: 100%; display: inline-block; height: 50px;}
.availslotdataheaderdata {display: flex; margin-top: 10px;}
.availslotdataheaderdataleft{display: inline; font-size: 18px; text-align: justify;}
.availslotdataheaderdataright{display: inline; font-size: 18px; text-align: end;}
.getdatespecificslotdata{width: 100%;text-align: justify;display: flex;flex-direction: column; padding: 10px 30px;}
#bookthisslot {margin-bottom: 20px; }
.getdatespecificslotdataname{display: flex; align-items: center; font-size: 16px; margin-bottom: 10px;}
.getdatespecificslotdataname .fa-user {font-size: 18px; margin-right: 15px;}
.getdatespecificslotdatacal{display: flex; align-items: center; font-size: 16px; margin-bottom: 10px;}
.getdatespecificslotdatacal .fa-calendar {font-size: 18px; margin-right: 15px;}
#confirmSlotsButton{width: auto !important;margin: 0 !important;background: linear-gradient(180deg, rgb(237 28 36) 0%, rgb(237 28 36 / 79%) 100%) !important;border: 0;color: #fff;border-radius: 30px;letter-spacing: 0;pointer-events: auto !important;}
.paypal-button-row.paypal-button-number-1.paypal-button-layout-vertical.paypal-button-number-multiple.paypal-button-env-sandbox.paypal-button-color-black.paypal-button-text-color-white.paypal-logo-color-white.paypal-button-shape-rect {
    display: none;
}
</style>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AeiNnCmTK7o6KYDGukt8JkLVWybra1zSBZlJC6dSJHprrHqHBPe-AZHuvMAmtvIUVc9qxomMB7mJTWoD&currency=USD"></script>

<script>
function aggrement1() {
    const aggrementmodal = new bootstrap.Modal(document.getElementById('aggrementmodal'));
    aggrementmodal. show();
}

function bookNow() {
    if($("#aggrchck").is(":checked")) {
        var avail_id = $('#avail_id').val();
        var startDate = $('#start_date').val();
        var employeeID = $('#userID').val();
        var employerID = $('#employerID').val();
        var bookTime = [];
        $(".pasthours:checked").each(function(){
            bookTime.push($(this).val());
        });
        var arr = [];
        var bookTime = bookTime.toString();
        var output = bookTime.split(',');
        //alert(output.length);
        $.each(output,function(i) {
            s_time = parseFloat(output[i]) + 1;
            arr.push("<div>"+output[i]+" to "+s_time+":00</div>");
        });
        var rate = output.length * $('#rateperhour').val();
        var finalrate = "<div><p style='color: #000;'>Total Rate: "+rate+"</p><div>";
        finalshow = arr.join('')+ "" + finalrate;
        $('#bookTime').val(bookTime);
        $.ajax({
            type:"post",
            url:"<?php echo base_url()?>user/Dashboard/addBookingTimeData",
            data:{avail_id: avail_id, startDate: startDate, employeeID: employeeID, employerID: employerID, bookTime: bookTime},
            success:function(returndata) {
                if(returndata == 1) {
                    $.confirm({
                        title: '',
                        content: finalshow+" Pay now to book your slot.",
                        buttons: {
                            somethingElse: {
                                text: 'Pay Now',
                                btnClass: 'btn-secondary paynow_btn',
                                keys: ['enter', 'shift'],
                                action: function(){
                                    $.ajax({
                                        type:"post",
                                        url:"<?php echo base_url()?>user/Dashboard/paymentforslotbook",
                                        data:{avail_id: avail_id, employeeID: employeeID, employerID: employerID, rate: rate},
                                        success:function(returndata) {
                                            if(returndata == 1) {
                                                $.confirm({
                                                    title: '',
                                                    content: rate+" Paid. Your slot booked successfuly.",
                                                    buttons: {
                                                        somethingElse: {
                                                            text: 'Ok',
                                                            btnClass: 'btn-secondary paydone_btn',
                                                            keys: ['enter', 'shift'],
                                                            action: function(){
                                                                location.reload();
                                                            }
                                                        }
                                                    }
                                                });
                                            } else {
                                                $.alert({
                                                    title: '',
                                                    content: "Something went wrong. Please try again later.",
                                                });
                                                return false;
                                            }
                                        }
                                    });
                                }
                            }
                        }
                    });
                } else {
                    $.alert({
                        title: '',
                        content: "Something went wrong. Please try again later.",
                    });
                    return false;
                }
            }
        });
    } else {
        $('.erroraggr').show();
        setTimeout(() => {
            $('.erroraggr').hide();
        }, 5000);
    }
}

$(window).on('load', function() {
    $(".fc-center button").click(function() {
        $(".edit-form").addClass("Modal_Show");
    });

    $(".edit-form .btn-close").click(function() {
        $(".edit-form").removeClass("Modal_Show");
    });
});

function closeBook() {
    location.reload();
}

function closeaggrmnt() {
    location.reload();
}

function bookSlot(id) {
    //alert(id);
    var available_id = id;
    var employee_id = $('#employee_id').val();
    var employer_id = $('#employer_id').val();
    $.ajax({
        type:"post",
        url:"<?php echo base_url()?>user/Dashboard/bookSlotforuser",
        data:{available_id: available_id, employee_id: employee_id, employer_id: employer_id},
        success:function(returndata) {
            if(returndata == 1) {
                $.confirm({
                    title: '',
                    content: "Slot Booked successfuly",
                    buttons: {
                        somethingElse: {
                            text: 'Ok',
                            btnClass: 'btn-secondary',
                            keys: ['enter', 'shift'],
                            action: function(){
                                location.reload();
                            }
                        }
                    }
                });
            } else {
                $.alert({
                    title: '',
                    content: "Something went wrong. Please try again later.",
                });
                return false;
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const myEvents = [
        <?php
        if(!empty(@$_SESSION['afrebay']['userId'])) {
            $getTimeZone = $this->db->query("SELECT * FROM users WHERE userId = '".@$_SESSION['afrebay']['userId']."'")->row();
            @$timeZone = $getTimeZone->timeZone;
            $availability = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".$user_detail->userId."' ")->result_array();
            if(!empty($timeZone)){
                if(!empty($availability)) {
                    foreach ($availability as $value) {
                        $fromtime = explode(' to ', $value['utcTime']);
                        $utcDateTime = new DateTime($value['utcStartDate']." ".$fromtime[0], new DateTimeZone('UTC'));
                        $localTimeZone = new DateTimeZone($timeZone);
                        $utcDateTime->setTimezone($localTimeZone);
                        if(!empty($value['is_booked'] == '1')) { ?>
                            {
                                title:'',
                                start: '<?= $utcDateTime->format('Y-m-d'); ?>',
                                color: 'red'
                            },
                        <?php } else { ?>
                            {
                                title:'',
                                start: '<?= $utcDateTime->format('Y-m-d'); ?>',
                                backgroundColor: 'green'
                            },
                        <?php }
                    }
                }
            }
        } ?>
    ];
    const calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            center: 'title',
            right: 'today, prev,next '
        },
        plugins: ['dayGrid', 'interaction'],
        selectable: true,
        events: myEvents
    });

    let selectedSlots = [];
    calendar.on('select', function(info) {
        $('.choosendate').text(new Date(info.startStr).toDateString());
        <?php if(@$_SESSION['afrebay']['userType'] == '2') { ?>
        var choosendate = info.startStr;
        var workers_id = $("#workers_id").val();
        var loggeduser_id = $("#user_id").val();
        $.ajax({
            type:"post",
            url:"<?php echo base_url()?>user/Dashboard/getUserAvailability",
            data:{choosendate: choosendate, workers_id: workers_id},
            success:function(returndata) {
                //console.log(returndata);
                $('.getdatespecificdata').html(returndata);
                $('.availtimedata').show();
                $('.availslotdata').hide();

                $('.getdatespecificdatetime').on('click', function() {
                    $('#confirmSlotsButton').prop('disabled', false);
                    $("#paypal-button-container").html('');
                    const slotId = $(this).data('slot-id');
                    const hiddenInput = $("#selectedSlotIds");
                    const confirmButton = $("#confirmSlotsButton");
                    const selectedSlotList = $("#selectedSlotList");
                    const ratePerHour = parseFloat($("#rateperhour").val() || 0); // Get the rate per hour
                    const totalAmountInput = $("#total_amount");

                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                        selectedSlots = selectedSlots.filter(id => id !== slotId);
                    } else {
                        $(this).addClass('selected');
                        selectedSlots.push(slotId);
                    }
                    hiddenInput.val(selectedSlots.join(','));
                    const totalAmount = selectedSlots.length * ratePerHour;
                    totalAmountInput.val(totalAmount.toFixed(2));
                    if (selectedSlots.length > 0) {
                        confirmButton.show(); // Show the button if slots are selected
                        //selectedSlotList.parent().show(); // Show the selected slots container
                    } else {
                        confirmButton.hide(); // Hide the button if no slots are selected
                        //selectedSlotList.parent().hide(); // Hide the selected slots container
                    }
                });
            }
        });
        <?php } else if(@$_SESSION['afrebay']['userType'] == '1') { ?>
        $.confirm({
            title: '',
            content: "Booking feature is not available for employee",
            buttons: {
                somethingElse: {
                    text: 'Ok',
                    btnClass: 'btn-secondary book_warning',
                    keys: ['enter', 'shift'],
                    action: function(){
                        location.reload();
                    }
                }
            }
        });
        <?php } else { ?>
        $.confirm({
            title: '',
            content: "Please login to book your slots",
            buttons: {
                somethingElse: {
                    text: 'Ok',
                    btnClass: 'btn-secondary prompt_login',
                    keys: ['enter', 'shift'],
                    action: function(){
                        location.reload();
                    }
                }
            }
        });
    <?php } ?>
    });
    calendar.render();
});

$('#confirmSlotsButton').on('click', function() {
    $("#paypal-button-container").html('');
    var workers_id = $('#workers_id').val();
    var user_id = $('#user_id').val();
    var job_id = $('#jobID').val();
    var selectedSlots = $('#selectedSlotIds').val();
    var total_amount = $('#total_amount').val();
    //alert(total_amount);
    $('#confirmSlotsButton').prop('disabled', true);
    if (selectedSlots.length > 0) {
        $("#paypal-button-container").show();
        /*$.ajax({
            type: "post",
            url: "<?php echo base_url()?>user/Dashboard/addBookingTimeData",
            data: {workers_id: workers_id, user_id: user_id, job_id: job_id, slotid: selectedSlots},
            success: function(response) {
                if(response == 1) {
                    $.confirm({
                        title: '',
                        content: "Slot booked",
                        buttons: {
                            somethingElse: {
                                text: 'Ok',
                                btnClass: 'btn-secondary paydone_btn',
                                keys: ['enter', 'shift'],
                                action: function(){
                                    //location.reload();
                                    window.location.href = "<?php echo base_url()?>booking-history";
                                }
                            }
                        }
                    });
                } else {
                    $.alert({
                        title: '',
                        content: "Something went wrong. Please try again later.",
                    });
                    $('#confirmSlotsButton').prop('disabled', false);
                    return false;
                }
            }
        });*/
        paypal.Buttons({
            createOrder: function (data, actions) {
                // Call the backend to create the order
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: total_amount // Replace with the calculated total cost
                        }
                    }]
                });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    const transactionId = details.id; // Transaction ID
                    const transactionDate = details.create_time; // Transaction date
                    const paymentStatus = details.status; // Payment status
                    //const invoiceId = details.purchase_units[0].payments.captures[0].invoice_id || "N/A"; // Invoice ID, if available
                    //const links = details.purchase_units[0].payments.captures[0].links || []; // Links array
                    //const invoiceUrl = links.find(link => link.rel === 'self')?.href || "N/A"; // Invoice URL

                    //Payment was successful, call the backend to create the meeting link
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url()?>user/Dashboard/addBookingTimeData",
                        data: { workers_id: workers_id, user_id: user_id, job_id: job_id, slotid: selectedSlots, total_amount: total_amount, transaction_id: transactionId, transactionDate: transactionDate, paymentStatus: paymentStatus},
                        success: function (response) {
                            if (response == 1) {
                                $.confirm({
                                    title: '',
                                    content: "Slot booked and payment successful",
                                    buttons: {
                                        somethingElse: {
                                            text: 'Ok',
                                            btnClass: 'btn-secondary paydone_btn',
                                            keys: ['enter', 'shift'],
                                            action: function () {
                                                // Redirect to booking history
                                                window.location.href = "<?php echo base_url()?>booking-history";
                                            }
                                        }
                                    }
                                });
                            } else {
                                $.alert({
                                    title: '',
                                    content: "Something went wrong. Please try again later.",
                                });
                                $('#confirmSlotsButton').prop('disabled', false);
                                return false;
                            }
                        }
                    });
                });
            },
            onError: function (err) {
                // Handle errors
                console.error('PayPal Checkout Error:', err);
                $.alert({
                    title: 'Error',
                    content: 'An error occurred during payment. Please try again later.'
                });
                $('#confirmSlotsButton').prop('disabled', false);
            }
        }).render('#paypal-button-container');
    } else {
        $.alert({
            title: '',
            content: "No slots selected.",
        });
        $('#confirmSlotsButton').prop('disabled', false);
    }
});

$(document).ready(function() {
    $('.erroraggr').hide();
    <?php $i=1;
    foreach ($availability as $value) { ?>
    $('#job_overview_sub_<?= $i?>').hide();
    $('#job_overview_main_<?= $i?>').on('click', function() {
        $('#job_overview_sub_<?= $i?>').toggle();
    })
    <?php $i++; } ?>
})

function removeSlot(id) {
    if($("#pastHours_"+id)[0].checked) {
        return false;
    } else {
        $.confirm({
            title: '',
            content: "Are you sure you want to remove this slot?",
            buttons: {
                confirm: function() {
                    $("#pastHours_"+id).removeAttr('checked');
                    return true;
                },
                cancel: function() {
                    $("#pastHours_"+id).prop("checked", true);
                },
            }
        });
    }
}

function booktheslot(slotid) {
    $('#getdatespecificdatetime_'+slotid).addClass('selected').siblings().removeClass('selected');
    $.ajax({
        type:"post",
        url:"<?php echo base_url()?>user/Dashboard/getUsersAvailableslot",
        data:{slotid: slotid},
        success:function(returndata) {
            $('.availslotdata').html(returndata);
            $('.availslotdata').css('display','flex')
        }
    });
}

function bookthisslot(slotid) {
    $('#bookthisslot').prop('disabled', true);
    var slotid = slotid;
    var workers_id = $('#workers_id').val();
    var user_id = $('#user_id').val();
    var job_id = $('#jobID').val();
    $.ajax({
        type:"post",
        url:"<?php echo base_url()?>user/Dashboard/addBookingTimeData",
        data:{slotid: slotid, workers_id: workers_id, user_id: user_id, job_id: job_id},
        success:function(returndata) {
            if(returndata == 1) {
                $.confirm({
                    title: '',
                    content: "Slot booked",
                    buttons: {
                        somethingElse: {
                            text: 'Ok',
                            btnClass: 'btn-secondary paydone_btn',
                            keys: ['enter', 'shift'],
                            action: function(){
                                //location.reload();
                                window.location.href = "<?php echo base_url()?>booking-history";
                            }
                        }
                    }
                });
            } else {
                $.alert({
                    title: '',
                    content: "Something went wrong. Please try again later.",
                });
                $('#bookthisslot').prop('disabled', false);
                return false;
            }
        }
    });
}
</script>