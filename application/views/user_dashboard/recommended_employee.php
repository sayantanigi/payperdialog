<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1"
        style="background: url('<?= base_url('assets/images/resource/mslider1.jpg')?>') repeat scroll 50% 422.28px transparent;"
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
                <h2 class="breadcrumb-title">Recommended Job</h2>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('sidebar');?>
<div class="col-md-12 col-md-12 col-sm-12 display-table-cell v-align">
    <div class="col-sm-12" style="display: inline-block">
        <div class="col-sm-6" style="display: inline-block; float: left;">
            <p style="text-align: right;align-items: center;display: grid; ">Filter By Job Title</p>
        </div>
        <div class="col-sm-6" style="display: inline-block; float: left;">
        <select class="form-control" name="remote" id="FilterByJobTitle">
                <option value="">Select Option</option>
                <?php foreach ($jobTitleByemployer as $value) { ?>
                <option value="<?= $value['id']?>"><?= $value['post_title']?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="user-dashboard">
        <div class="row row-sm">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="cardak custom-cardak">
                    <table class="table table-modific">
                        <tbody>
                        <?php
                        //echo "<pre>"; print_r($jobListByemployer);
                        if(!empty($jobListByemployer)){
                            foreach ($jobListByemployer as $key) { 
                                if($key['userType'] == 1){
                                    $name = $key['firstname'].' '.$key['lastname'];
                                } else {
                                    $name = $key['companyname'];
                                }
                                if(!empty($key['profilePic']) && file_exists('uploads/users/'.$key['profilePic'])){
                                    $profile_pic= '<img src="'.base_url('uploads/users/'.$key['profilePic']).'" alt="" />';
                                } else {
                                    $profile_pic= '<img src="'.base_url('uploads/users/user.png').'" alt="" />';
                                }
                                $string = strip_tags($key['short_bio']);
                                if (strlen($string) > 200) {
                                    $stringCut = substr($string, 0, 200);
                                    $endPoint = strrpos($stringCut, ' ');
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '...';
                                }
                        ?>
                        <div class="emply-resume-list">
                            <div class="emply-resume-thumb"><?= $profile_pic ?></div>
                            <div class="emply-resume-info">
                                <h3><a href="<?= base_url('worker-detail/'.base64_encode($key['userId']))?>" title=""><?= $name?></a></h3>
                                <p><i class="la la-map-marker"></i><?= $key["address"]?></p>
                                <div class="Employee-Details">
                                    <div class="MoreDetailsTxt_<?= $key['id']?>"><?= $string?></div>
                                </div>
                            </div>
                        </div> 
                        <?php $i++; } } else { ?>
                        <tr>
                            <td colspan="6">
                                <center>No Data Found</center>
                                <?php if(@$_SESSION['afrebay']['userType'] == '2') {
                                $get_sub_data = $this->db->query("SELECT * FROM employer_subscription where employer_id = ".$_SESSION['afrebay']['userId']." and payment_status = 'paid'")->result_array();
                                if(!empty($get_sub_data)) {
                                $profile_check = $this->db->query("SELECT * FROM `users` WHERE userId = '".@$_SESSION['afrebay']['userId']."'")->result_array();
                                if(empty($profile_check[0]['companyname']) || empty($profile_check[0]['email']) || empty($profile_check[0]['address']) || empty($profile_check[0]['teamsize'])  || empty($profile_check[0]['short_bio'])) { ?>
                                <button class="post-job-btn pull-right" type="submit" style=" background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important; border: 0 !important; "><a href="javascript:void(0)" onclick="completeSub()">Post Jobs</a></button>
                                <?php } else { ?>
                                <button class="post-job-btn pull-right" type="submit" style=" background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important; border: 0 !important; "><a href="<?= base_url('postjob')?>" title="" target="_blank">Post Jobs</a></button>
                                <?php } } else { ?>
                                <button class="post-job-btn pull-right" type="submit" style=" background: linear-gradient(180deg, rgba(252, 119, 33, 1) 0%, rgba(249, 80, 30, 1) 100%) !important; border: 0 !important; "><a href="javascript:void(0)" onclick="completeSub()">Post Jobs</a></button>
                                <?php } } ?>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
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
<style>
#product-messages{display: none; text-align: center;}
#err-messages{display: none; text-align: center;}
.emply-resume-thumb {display: inline-block !important;}
.emply-resume-list {padding: 30px !important; margin: 10px 0 0 0 !important;}
</style>
<script>
function jobDelete(id) {
    var p_id = id;
    $.confirm({
	    title: 'Confirm!',
	    content: confirmTextDelete,
	    buttons: {
	        confirm: function () {
                var base_url = $('#base_url').val();
                $.ajax({
                    url:base_url+"user/dashboard/delete_job",
                    method:"POST",
                    data:{id: p_id},
                    beforeSend : function(){
                        $("#loader").show();
                    },
                    success:function(data) {
                        if (data == '1'){
                            setTimeout(function () {
                                $("#loader").hide();
                                window.scroll({top: 0, behavior: "smooth"});
                                $('#product-messages').show();
                            }, 7000);
                            setTimeout(function () {
                                $('#product-messages').hide();
                            }, 9000);
                            setTimeout(function () {
                                location.reload(true);
                            }, 10000);
                        } else {
                            $('#err-messages').show();
                            setTimeout(function () {
                                window.scroll({top: 0, behavior: "smooth"})
                            }, 7000);
                            setTimeout(function () {
                                $('#err-messages').hide();
                            }, 9000);
                            setTimeout(function () {
                                location.reload(true);
                            }, 10000);
                        }
                    }

                })
	        },
	        cancel: function () {
	            location.reload();
	        },
	    }
	});
}

function MoreDetailsTxt(id) {
    //$(".MoreTxt_"+id).toggle();
    $(".MoreDetailsTxt_"+id).toggleClass('MoreDetailsTxtShow');
}

$(document).ready(function(){
    $('#FilterByJobTitle').change(function() {
        alert($(this).val());
    })
})
</script>
