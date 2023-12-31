<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"><?= $heading;?></h3>
                </div>
                <div class="col-auto text-right">
                    <!-- <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                    <i class="fas fa-filter"></i>
                </a> -->
                <!-- <a href="#" class="btn btn-primary add-button ml-3" data-toggle="modal" data-target="#createModal">
                <i class="fas fa-plus"></i>
            </a> -->
        </div>
    </div>
</div>


<div class="card filter-card" id="filter_inputs">
    <div class="card-body pb-0">
        <form action="#" method="post">
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control select filter_search_data6" name="">
                            <option value="">Select category</option>
                            <?php
                            if(!empty($get_category)){
                                foreach($get_category as $item){ ?>
                                    <option value="<?= $item->id?>"><?= ucfirst($item->category_name)?></option>
                                <?php   } } ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>From Date</label>
                            <div class="cal-icon">
                                <!--  datetimepicker -->
                                <input class="form-control  filter_search_data5" type="date" name="from_date" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>To Date</label>
                            <div class="cal-icon">
                                <input class="form-control  filter_search_data7" type="date" name="to_date" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <a class="btn btn-primary btn-block" href="<?= admin_url('Category')?>">Refresh</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="table" class="table table-hover table-center mb-0 example_datatable" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                //echo "<pre>"; print_r($userbookingDetails);
                                if(!empty($userbookingDetails)) {
                                    $i=1;
                                    foreach ($userbookingDetails as $value) { ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $value['userType'] == '1'?'Employee':'Employer'; ?></td>
                                    <td><?= $value['firstname']." ".$value['lastname']?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td>
                                        <a href="<?= base_url()?>admin/userbookingDetails/<?= $value['userId']?>"><span class="btn btn-sm bg-success-light mr-2" data-toggle="modal" data-target="#editModal" data-placement="right"><i class="far fa-eye mr-1"></i>View Availablility Details</span></a>
                                    </td>
                                </tr>
                                <?php $i++; } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(window).scroll(function(){
    var filter_inputs = $('#filter_inputs');
    var table_wrapper = $('#table_wrapper .row:nth-child(1)');
    var table_header = $('#table thead');
    scroll = $(window).scrollTop();
    if (scroll >= 100) {
        table_wrapper.addClass('sticky_thead');
        table_header.addClass('sticky_thead1');
    } else {
        table_wrapper.removeClass('sticky_thead');
        table_header.removeClass('sticky_thead1');
    }
});

$('#refreshForm').click(function(){
    $('#categorySearch').trigger("reset");
    $('.filter_search_data6').val('').trigger('change');
})
</script>
<style>
.sticky_thead1 {
    position: sticky;
    top: 96px;
    background: #fff;
    z-index: 100;
}
</style>
