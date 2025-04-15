<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= base_url('assets/images/resource/mslider1.jpg')?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
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
                <h2 class="breadcrumb-title">Availability</h2>
            </div>
        </div>
    </div>
</section>
<section class="dashboard-gig Chat_User">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <?php $this->load->view('sidebar'); ?>
            <div class="col-md-10 col-sm-12 display-table-cell v-align">
                <div class="user-dashboard">
                    <div class="row row-sm">
                        <div class="col-xl-12 col-lg-12 col-md-12 chat-box">
                            <div class="cardak">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="col-md-7 col-7" style="display: inline-block; float: left; background: #ffddde; padding: 30px; border-radius: 10px;">
                                            <p style="color:red;" class="" id="validateerrschedule"></p>
                                            <p style="color:red;" class="" id="validateerrschedulefromtime"></p>
                                            <p style="color:red;" class="" id="validateerrscheduletotime"></p>
                                            <p style="color:red;" class="" id="errstartingdate"></p>
                                            <form id="myForm">
                                                <div class="form-group">
                                                    <h5 class="control-label" style="margin-bottom: 35px; width: 200px; display: flex; float: left; margin-right: 100px;">Weekly Schedule</h5>
                                                    <?php
                                                    date("Y-m-d", strtotime("+1 week"));
                                                    $startDate = date('Y-m');
                                                    $calenderday = $this->db->query("SELECT calender FROM setting WHERE id = '1'")->row();
                                                    $data = explode(',', $calenderday->calender);
                                                    $getstart_date = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".@$_SESSION['afrebay']['userId']."' ORDER BY `start_date` ASC")->result_array(); ?>
                                                    <div>
                                                        <label for = "timeZone" style="padding: 0;">Current Time Zone <span style="color:red"> * </span></label>
                                                        <select id="timeZone" name="timeZone" class="custom-select" style="margin-bottom: 20px; display: flex; width: 300px;">
                                                            <option value="">Select Time Zone</option>
                                                            <option value="America/Adak" <?php if($getstart_date[0]['timeZone'] == 'America/Adak') {echo "selected";}?>>America/Adak</option>
                                                            <option value="America/Anchorage" <?php if($getstart_date[0]['timeZone'] == 'America/Anchorage') {echo "selected";}?>>America/Anchorage</option>
                                                            <option value="America/Anguilla" <?php if($getstart_date[0]['timeZone'] == 'America/Anguilla') {echo "selected";}?>>America/Anguilla</option>
                                                            <option value="America/Antigua" <?php if($getstart_date[0]['timeZone'] == 'America/Antigua') {echo "selected";}?>>America/Antigua</option>
                                                            <option value="America/Araguaina" <?php if($getstart_date[0]['timeZone'] == 'America/Araguaina') {echo "selected";}?>>America/Araguaina</option>
                                                            <option value="America/Argentina/Buenos_Aires" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Buenos_Aires') {echo "selected";}?>>America/Argentina/Buenos Aires</option>
                                                            <option value="America/Argentina/Catamarca" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Catamarca') {echo "selected";}?>>America/Argentina/Catamarca</option>
                                                            <option value="America/Argentina/Cordoba" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Cordoba') {echo "selected";}?>>America/Argentina/Cordoba</option>
                                                            <option value="America/Argentina/Jujuy" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Jujuy') {echo "selected";}?>>America/Argentina/Jujuy</option>
                                                            <option value="America/Argentina/La_Rioja" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/La_Rioja') {echo "selected";}?>>America/Argentina/La Rioja</option>
                                                            <option value="America/Argentina/Mendoza" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Mendoza') {echo "selected";}?>>America/Argentina/Mendoza</option>
                                                            <option value="America/Argentina/Rio_Gallegos" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Rio_Gallegos') {echo "selected";}?>>America/Argentina/Rio Gallegos</option>
                                                            <option value="America/Argentina/Salta" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Salta') {echo "selected";}?>>America/Argentina/Salta</option>
                                                            <option value="America/Argentina/San_Juan" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/San_Juan') {echo "selected";}?>>America/Argentina/San Juan</option>
                                                            <option value="America/Argentina/San_Luis" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/San_Luis') {echo "selected";}?>>America/Argentina/San Luis</option>
                                                            <option value="America/Argentina/Tucuman" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Tucuman') {echo "selected";}?>>America/Argentina/Tucuman</option>
                                                            <option value="America/Argentina/Ushuaia" <?php if($getstart_date[0]['timeZone'] == 'America/Argentina/Ushuaia') {echo "selected";}?>>America/Argentina/Ushuaia</option>
                                                            <option value="America/Aruba" <?php if($getstart_date[0]['timeZone'] == 'America/Aruba') {echo "selected";}?>>America/Aruba</option>
                                                            <option value="America/Asuncion" <?php if($getstart_date[0]['timeZone'] == 'America/Asuncion') {echo "selected";}?>>America/Asuncion</option>
                                                            <option value="America/Atikokan" <?php if($getstart_date[0]['timeZone'] == 'America/Atikokan') {echo "selected";}?>>America/Atikokan</option>
                                                            <option value="America/Bahia" <?php if($getstart_date[0]['timeZone'] == 'America/Bahia') {echo "selected";}?>>America/Bahia</option>
                                                            <option value="America/Bahia_Banderas" <?php if($getstart_date[0]['timeZone'] == 'America/Bahia_Banderas') {echo "selected";}?>>America/Bahia Banderas</option>
                                                            <option value="America/Barbados" <?php if($getstart_date[0]['timeZone'] == 'America/Barbados') {echo "selected";}?>>America/Barbados</option>
                                                            <option value="America/Belem" <?php if($getstart_date[0]['timeZone'] == 'America/Belem') {echo "selected";}?>>America/Belem</option>
                                                            <option value="America/Belize" <?php if($getstart_date[0]['timeZone'] == 'America/Belize') {echo "selected";}?>>America/Belize</option>
                                                            <option value="America/Blanc-Sablon" <?php if($getstart_date[0]['timeZone'] == 'America/Blanc-Sablon') {echo "selected";}?>>America/Blanc-Sablon</option>
                                                            <option value="America/Boa_Vista" <?php if($getstart_date[0]['timeZone'] == 'America/Boa_Vista') {echo "selected";}?>>America/Boa Vista</option>
                                                            <option value="America/Bogota" <?php if($getstart_date[0]['timeZone'] == 'America/Bogota') {echo "selected";}?>>America/Bogota</option>
                                                            <option value="America/Boise" <?php if($getstart_date[0]['timeZone'] == 'America/Boise') {echo "selected";}?>>America/Boise</option>
                                                            <option value="America/Cambridge_Bay" <?php if($getstart_date[0]['timeZone'] == 'America/Cambridge_Bay') {echo "selected";}?>>America/Cambridge Bay</option>
                                                            <option value="America/Campo_Grande" <?php if($getstart_date[0]['timeZone'] == 'America/Campo_Grande') {echo "selected";}?>>America/Campo Grande</option>
                                                            <option value="America/Cancun" <?php if($getstart_date[0]['timeZone'] == 'America/Cancun') {echo "selected";}?>>America/Cancun</option>
                                                            <option value="America/Caracas" <?php if($getstart_date[0]['timeZone'] == 'America/Caracas') {echo "selected";}?>>America/Caracas</option>
                                                            <option value="America/Cayenne" <?php if($getstart_date[0]['timeZone'] == 'America/Cayenne') {echo "selected";}?>>America/Cayenne</option>
                                                            <option value="America/Cayman" <?php if($getstart_date[0]['timeZone'] == 'America/Cayman') {echo "selected";}?>>America/Cayman</option>
                                                            <option value="America/Chicago" <?php if($getstart_date[0]['timeZone'] == 'America/Chicago') {echo "selected";}?>>America/Chicago</option>
                                                            <option value="America/Chihuahua" <?php if($getstart_date[0]['timeZone'] == 'America/Chihuahua') {echo "selected";}?>>America/Chihuahua</option>
                                                            <option value="America/Ciudad_Juarez" <?php if($getstart_date[0]['timeZone'] == 'America/Ciudad_Juarez') {echo "selected";}?>>America/Ciudad Juarez</option>
                                                            <option value="America/Costa_Rica" <?php if($getstart_date[0]['timeZone'] == 'America/Costa_Rica') {echo "selected";}?>>America/Costa Rica</option>
                                                            <option value="America/Creston" <?php if($getstart_date[0]['timeZone'] == 'America/Creston') {echo "selected";}?>>America/Creston</option>
                                                            <option value="America/Cuiaba" <?php if($getstart_date[0]['timeZone'] == 'America/Cuiaba') {echo "selected";}?>>America/Cuiaba</option>
                                                            <option value="America/Curacao" <?php if($getstart_date[0]['timeZone'] == 'America/Curacao') {echo "selected";}?>>America/Curacao</option>
                                                            <option value="America/Danmarkshavn" <?php if($getstart_date[0]['timeZone'] == 'America/Danmarkshavn') {echo "selected";}?>>America/Danmarkshavn</option>
                                                            <option value="America/Dawson" <?php if($getstart_date[0]['timeZone'] == 'America/Dawson') {echo "selected";}?>>America/Dawson</option>
                                                            <option value="America/Dawson_Creek" <?php if($getstart_date[0]['timeZone'] == 'America/Dawson_Creek') {echo "selected";}?>>America/Dawson Creek</option>
                                                            <option value="America/Denver" <?php if($getstart_date[0]['timeZone'] == 'America/Denver') {echo "selected";}?>>America/Denver</option>
                                                            <option value="America/Detroit" <?php if($getstart_date[0]['timeZone'] == 'America/Detroit') {echo "selected";}?>>America/Detroit</option>
                                                            <option value="America/Dominica" <?php if($getstart_date[0]['timeZone'] == 'America/Dominica') {echo "selected";}?>>America/Dominica</option>
                                                            <option value="America/Edmonton" <?php if($getstart_date[0]['timeZone'] == 'America/Edmonton') {echo "selected";}?>>America/Edmonton</option>
                                                            <option value="America/Eirunepe" <?php if($getstart_date[0]['timeZone'] == 'America/Eirunepe') {echo "selected";}?>>America/Eirunepe</option>
                                                            <option value="America/El_Salvador" <?php if($getstart_date[0]['timeZone'] == 'America/El_Salvador') {echo "selected";}?>>America/El Salvador</option>
                                                            <option value="America/Fort_Nelson" <?php if($getstart_date[0]['timeZone'] == 'America/Fort_Nelson') {echo "selected";}?>>America/Fort Nelson</option>
                                                            <option value="America/Fortaleza" <?php if($getstart_date[0]['timeZone'] == 'America/Fortaleza') {echo "selected";}?>>America/Fortaleza</option>
                                                            <option value="America/Glace_Bay" <?php if($getstart_date[0]['timeZone'] == 'America/Glace_Bay') {echo "selected";}?>>America/Glace Bay</option>
                                                            <option value="America/Goose_Bay" <?php if($getstart_date[0]['timeZone'] == 'America/Goose_Bay') {echo "selected";}?>>America/Goose Bay</option>
                                                            <option value="America/Grand_Turk" <?php if($getstart_date[0]['timeZone'] == 'America/Grand_Turk') {echo "selected";}?>>America/Grand Turk</option>
                                                            <option value="America/Grenada" <?php if($getstart_date[0]['timeZone'] == 'America/Grenada') {echo "selected";}?>>America/Grenada</option>
                                                            <option value="America/Guadeloupe" <?php if($getstart_date[0]['timeZone'] == 'America/Guadeloupe') {echo "selected";}?>>America/Guadeloupe</option>
                                                            <option value="America/Guatemala" <?php if($getstart_date[0]['timeZone'] == 'America/Guatemala') {echo "selected";}?>>America/Guatemala</option>
                                                            <option value="America/Guayaquil" <?php if($getstart_date[0]['timeZone'] == 'America/Guayaquil') {echo "selected";}?>>America/Guayaquil</option>
                                                            <option value="America/Guyana" <?php if($getstart_date[0]['timeZone'] == 'America/Guyana') {echo "selected";}?>>America/Guyana</option>
                                                            <option value="America/Halifax" <?php if($getstart_date[0]['timeZone'] == 'America/Halifax') {echo "selected";}?>>America/Halifax</option>
                                                            <option value="America/Havana" <?php if($getstart_date[0]['timeZone'] == 'America/Havana') {echo "selected";}?>>America/Havana</option>
                                                            <option value="America/Hermosillo" <?php if($getstart_date[0]['timeZone'] == 'America/Hermosillo') {echo "selected";}?>>America/Hermosillo</option>
                                                            <option value="America/Indiana/Indianapolis" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Indianapolis') {echo "selected";}?>>America/Indiana/Indianapolis</option>
                                                            <option value="America/Indiana/Knox" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Knox') {echo "selected";}?>>America/Indiana/Knox</option>
                                                            <option value="America/Indiana/Marengo" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Marengo') {echo "selected";}?>>America/Indiana/Marengo</option>
                                                            <option value="America/Indiana/Petersburg" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Petersburg') {echo "selected";}?>>America/Indiana/Petersburg</option>
                                                            <option value="America/Indiana/Tell_City" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Tell_City') {echo "selected";}?>>America/Indiana/Tell City</option>
                                                            <option value="America/Indiana/Vevay" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Vevay') {echo "selected";}?>>America/Indiana/Vevay</option>
                                                            <option value="America/Indiana/Vincennes" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Vincennes') {echo "selected";}?>>America/Indiana/Vincennes</option>
                                                            <option value="America/Indiana/Winamac" <?php if($getstart_date[0]['timeZone'] == 'America/Indiana/Winamac') {echo "selected";}?>>America/Indiana/Winamac</option>
                                                            <option value="America/Inuvik" <?php if($getstart_date[0]['timeZone'] == 'America/Inuvik') {echo "selected";}?>>America/Inuvik</option>
                                                            <option value="America/Iqaluit" <?php if($getstart_date[0]['timeZone'] == 'America/Iqaluit') {echo "selected";}?>>America/Iqaluit</option>
                                                            <option value="America/Jamaica" <?php if($getstart_date[0]['timeZone'] == 'America/Jamaica') {echo "selected";}?>>America/Jamaica</option>
                                                            <option value="America/Juneau" <?php if($getstart_date[0]['timeZone'] == 'America/Juneau') {echo "selected";}?>>America/Juneau</option>
                                                            <option value="America/Kentucky/Louisville" <?php if($getstart_date[0]['timeZone'] == 'America/Kentucky/Louisville') {echo "selected";}?>>America/Kentucky/Louisville</option>
                                                            <option value="America/Kentucky/Monticello" <?php if($getstart_date[0]['timeZone'] == 'America/Kentucky/Monticello') {echo "selected";}?>>America/Kentucky/Monticello</option>
                                                            <option value="America/Kralendijk" <?php if($getstart_date[0]['timeZone'] == 'America/Kralendijk') {echo "selected";}?>>America/Kralendijk</option>
                                                            <option value="America/La_Paz" <?php if($getstart_date[0]['timeZone'] == 'America/La_Paz') {echo "selected";}?>>America/La Paz</option>
                                                            <option value="America/Lima" <?php if($getstart_date[0]['timeZone'] == 'America/Lima') {echo "selected";}?>>America/Lima</option>
                                                            <option value="America/Los_Angeles" <?php if($getstart_date[0]['timeZone'] == 'America/Los_Angeles') {echo "selected";}?>>America/Los Angeles</option>
                                                            <option value="America/Lower_Princes" <?php if($getstart_date[0]['timeZone'] == 'America/Lower_Princes') {echo "selected";}?>>America/Lower Princes</option>
                                                            <option value="America/Maceio" <?php if($getstart_date[0]['timeZone'] == 'America/Maceio') {echo "selected";}?>>America/Maceio</option>
                                                            <option value="America/Managua" <?php if($getstart_date[0]['timeZone'] == 'America/Managua') {echo "selected";}?>>America/Managua</option>
                                                            <option value="America/Manaus" <?php if($getstart_date[0]['timeZone'] == 'America/Manaus') {echo "selected";}?>>America/Manaus</option>
                                                            <option value="America/Marigot" <?php if($getstart_date[0]['timeZone'] == 'America/Marigot') {echo "selected";}?>>America/Marigot</option>
                                                            <option value="America/Martinique" <?php if($getstart_date[0]['timeZone'] == 'America/Martinique') {echo "selected";}?>>America/Martinique</option>
                                                            <option value="America/Matamoros" <?php if($getstart_date[0]['timeZone'] == 'America/Matamoros') {echo "selected";}?>>America/Matamoros</option>
                                                            <option value="America/Mazatlan" <?php if($getstart_date[0]['timeZone'] == 'America/Mazatlan') {echo "selected";}?>>America/Mazatlan</option>
                                                            <option value="America/Menominee" <?php if($getstart_date[0]['timeZone'] == 'America/Menominee') {echo "selected";}?>>America/Menominee</option>
                                                            <option value="America/Merida" <?php if($getstart_date[0]['timeZone'] == 'America/Merida') {echo "selected";}?>>America/Merida</option>
                                                            <option value="America/Metlakatla" <?php if($getstart_date[0]['timeZone'] == 'America/Metlakatla') {echo "selected";}?>>America/Metlakatla</option>
                                                            <option value="America/Mexico_City" <?php if($getstart_date[0]['timeZone'] == 'America/Mexico_City') {echo "selected";}?>>America/Mexico City</option>
                                                            <option value="America/Miquelon" <?php if($getstart_date[0]['timeZone'] == 'America/Miquelon') {echo "selected";}?>>America/Miquelon</option>
                                                            <option value="America/Moncton" <?php if($getstart_date[0]['timeZone'] == 'America/Moncton') {echo "selected";}?>>America/Moncton</option>
                                                            <option value="America/Monterrey" <?php if($getstart_date[0]['timeZone'] == 'America/Monterrey') {echo "selected";}?>>America/Monterrey</option>
                                                            <option value="America/Montevideo" <?php if($getstart_date[0]['timeZone'] == 'America/Montevideo') {echo "selected";}?>>America/Montevideo</option>
                                                            <option value="America/Montserrat" <?php if($getstart_date[0]['timeZone'] == 'America/Montserrat') {echo "selected";}?>>America/Montserrat</option>
                                                            <option value="America/Nassau" <?php if($getstart_date[0]['timeZone'] == 'America/Nassau') {echo "selected";}?>>America/Nassau</option>
                                                            <option value="America/New_York" <?php if($getstart_date[0]['timeZone'] == 'America/New_York') {echo "selected";}?>>America/New York</option>
                                                            <option value="America/Nome" <?php if($getstart_date[0]['timeZone'] == 'America/Nome') {echo "selected";}?>>America/Nome</option>
                                                            <option value="America/Noronha" <?php if($getstart_date[0]['timeZone'] == 'America/Noronha') {echo "selected";}?>>America/Noronha</option>
                                                            <option value="America/North_Dakota/Beulah" <?php if($getstart_date[0]['timeZone'] == 'America/North_Dakota/Beulah') {echo "selected";}?>>America/North Dakota/Beulah</option>
                                                            <option value="America/North_Dakota/Center" <?php if($getstart_date[0]['timeZone'] == 'America/North_Dakota/Center') {echo "selected";}?>>America/North Dakota/Center</option>
                                                            <option value="America/North_Dakota/New_Salem" <?php if($getstart_date[0]['timeZone'] == 'America/North_Dakota/New_Salem') {echo "selected";}?>>America/North Dakota/New Salem</option>
                                                            <option value="America/Nuuk" <?php if($getstart_date[0]['timeZone'] == 'America/Nuuk') {echo "selected";}?>>America/Nuuk</option>
                                                            <option value="America/Ojinaga" <?php if($getstart_date[0]['timeZone'] == 'America/Ojinaga') {echo "selected";}?>>America/Ojinaga</option>
                                                            <option value="America/Panama" <?php if($getstart_date[0]['timeZone'] == 'America/Panama') {echo "selected";}?>>America/Panama</option>
                                                            <option value="America/Paramaribo" <?php if($getstart_date[0]['timeZone'] == 'America/Paramaribo') {echo "selected";}?>>America/Paramaribo</option>
                                                            <option value="America/Phoenix" <?php if($getstart_date[0]['timeZone'] == 'America/Phoenix') {echo "selected";}?>>America/Phoenix</option>
                                                            <option value="America/Port-au-Prince" <?php if($getstart_date[0]['timeZone'] == 'America/Port-au') {echo "selected";}?>>America/Port-au-Prince</option>
                                                            <option value="America/Port_of_Spain" <?php if($getstart_date[0]['timeZone'] == 'America/Port_of_Spain') {echo "selected";}?>>America/Port of Spain</option>
                                                            <option value="America/Porto_Velho" <?php if($getstart_date[0]['timeZone'] == 'America/Porto_Velho') {echo "selected";}?>>America/Porto Velho</option>
                                                            <option value="America/Puerto_Rico" <?php if($getstart_date[0]['timeZone'] == 'America/Puerto_Rico') {echo "selected";}?>>America/Puerto Rico</option>
                                                            <option value="America/Punta_Arenas" <?php if($getstart_date[0]['timeZone'] == 'America/Punta_Arenas') {echo "selected";}?>>America/Punta Arenas</option>
                                                            <option value="America/Rankin_Inlet" <?php if($getstart_date[0]['timeZone'] == 'America/Rankin_Inlet') {echo "selected";}?>>America/Rankin Inlet</option>
                                                            <option value="America/Recife" <?php if($getstart_date[0]['timeZone'] == 'America/Recife') {echo "selected";}?>>America/Recife</option>
                                                            <option value="America/Regina" <?php if($getstart_date[0]['timeZone'] == 'America/Regina') {echo "selected";}?>>America/Regina</option>
                                                            <option value="America/Resolute" <?php if($getstart_date[0]['timeZone'] == 'America/Resolute') {echo "selected";}?>>America/Resolute</option>
                                                            <option value="America/Rio_Branco" <?php if($getstart_date[0]['timeZone'] == 'America/Rio_Branco') {echo "selected";}?>>America/Rio Branco</option>
                                                            <option value="America/Santarem" <?php if($getstart_date[0]['timeZone'] == 'America/Santarem') {echo "selected";}?>>America/Santarem</option>
                                                            <option value="America/Santiago" <?php if($getstart_date[0]['timeZone'] == 'America/Santiago') {echo "selected";}?>>America/Santiago</option>
                                                            <option value="America/Santo_Domingo" <?php if($getstart_date[0]['timeZone'] == 'America/Santo_Domingo') {echo "selected";}?>>America/Santo Domingo</option>
                                                            <option value="America/Sao_Paulo" <?php if($getstart_date[0]['timeZone'] == 'America/Sao_Paulo') {echo "selected";}?>>America/Sao Paulo</option>
                                                            <option value="America/Scoresbysund" <?php if($getstart_date[0]['timeZone'] == 'America/Scoresbysund') {echo "selected";}?>>America/Scoresbysund</option>
                                                            <option value="America/Sitka" <?php if($getstart_date[0]['timeZone'] == 'America/Sitka') {echo "selected";}?>>America/Sitka</option>
                                                            <option value="America/St_Barthelemy" <?php if($getstart_date[0]['timeZone'] == 'America/St_Barthelemy') {echo "selected";}?>>America/St Barthelemy</option>
                                                            <option value="America/St_Johns" <?php if($getstart_date[0]['timeZone'] == 'America/St_Johns') {echo "selected";}?>>America/St Johns</option>
                                                            <option value="America/St_Kitts" <?php if($getstart_date[0]['timeZone'] == 'America/St_Kitts') {echo "selected";}?>>America/St Kitts</option>
                                                            <option value="America/St_Lucia" <?php if($getstart_date[0]['timeZone'] == 'America/St_Lucia') {echo "selected";}?>>America/St Lucia</option>
                                                            <option value="America/St_Thomas" <?php if($getstart_date[0]['timeZone'] == 'America/St_Thomas') {echo "selected";}?>>America/St Thomas</option>
                                                            <option value="America/St_Vincent" <?php if($getstart_date[0]['timeZone'] == 'America/St_Vincent') {echo "selected";}?>>America/St Vincent</option>
                                                            <option value="America/Swift_Current" <?php if($getstart_date[0]['timeZone'] == 'America/Swift_Current') {echo "selected";}?>>America/Swift Current</option>
                                                            <option value="America/Tegucigalpa" <?php if($getstart_date[0]['timeZone'] == 'America/Tegucigalpa') {echo "selected";}?>>America/Tegucigalpa</option>
                                                            <option value="America/Thule" <?php if($getstart_date[0]['timeZone'] == 'America/Thule') {echo "selected";}?>>America/Thule</option>
                                                            <option value="America/Tijuana" <?php if($getstart_date[0]['timeZone'] == 'America/Tijuana') {echo "selected";}?>>America/Tijuana</option>
                                                            <option value="America/Toronto" <?php if($getstart_date[0]['timeZone'] == 'America/Toronto') {echo "selected";}?>>America/Toronto</option>
                                                            <option value="America/Tortola" <?php if($getstart_date[0]['timeZone'] == 'America/Tortola') {echo "selected";}?>>America/Tortola</option>
                                                            <option value="America/Vancouver" <?php if($getstart_date[0]['timeZone'] == 'America/Vancouver') {echo "selected";}?>>America/Vancouver</option>
                                                            <option value="America/Whitehorse" <?php if($getstart_date[0]['timeZone'] == 'America/Whitehorse') {echo "selected";}?>>America/Whitehorse</option>
                                                            <option value="America/Winnipeg" <?php if($getstart_date[0]['timeZone'] == 'America/Winnipeg') {echo "selected";}?>>America/Winnipeg</option>
                                                            <option value="America/Yakutat" <?php if($getstart_date[0]['timeZone'] == 'America/Yakutat') {echo "selected";}?>>America/Yakutat</option>
                                                            <option value="Asia/Kolkata" <?php if($getstart_date[0]['timeZone'] == 'Asia/Kolkata') {echo "selected";}?>>Asia/Kolkata</option>
                                                            <option value="Australia/Adelaide" <?php if($getstart_date[0]['timeZone'] == 'Australia/Adelaide') {echo "selected";}?>>Australia/Adelaide</option>
                                                            <option value="Australia/Brisbane" <?php if($getstart_date[0]['timeZone'] == 'Australia/Brisbane') {echo "selected";}?>>Australia/Brisbane</option>
                                                            <option value="Australia/Broken_Hill" <?php if($getstart_date[0]['timeZone'] == 'Australia/Broken_Hill') {echo "selected";}?>>Australia/Broken Hill</option>
                                                            <option value="Australia/Darwin" <?php if($getstart_date[0]['timeZone'] == 'Australia/Darwin') {echo "selected";}?>>Australia/Darwin</option>
                                                            <option value="Australia/Eucla" <?php if($getstart_date[0]['timeZone'] == 'Australia/Eucla') {echo "selected";}?>>Australia/Eucla</option>
                                                            <option value="Australia/Hobart" <?php if($getstart_date[0]['timeZone'] == 'Australia/Hobart') {echo "selected";}?>>Australia/Hobart</option>
                                                            <option value="Australia/Lindeman" <?php if($getstart_date[0]['timeZone'] == 'Australia/Lindeman') {echo "selected";}?>>Australia/Lindeman</option>
                                                            <option value="Australia/Lord_Howe" <?php if($getstart_date[0]['timeZone'] == 'Australia/Lord_Howe') {echo "selected";}?>>Australia/Lord Howe</option>
                                                            <option value="Australia/Melbourne" <?php if($getstart_date[0]['timeZone'] == 'Australia/Melbourne') {echo "selected";}?>>Australia/Melbourne</option>
                                                            <option value="Australia/Perth" <?php if($getstart_date[0]['timeZone'] == 'Australia/Perth') {echo "selected";}?>>Australia/Perth</option>
                                                            <option value="Australia/Sydney" <?php if($getstart_date[0]['timeZone'] == 'Australia/Sydney') {echo "selected";}?>>Australia/Sydney</option>
                                                            <option value="Europe/Amsterdam" <?php if($getstart_date[0]['timeZone'] == 'Europe/Amsterdam') {echo "selected";}?>>Europe/Amsterdam</option>
                                                            <option value="Europe/Andorra" <?php if($getstart_date[0]['timeZone'] == 'Europe/Andorra') {echo "selected";}?>>Europe/Andorra</option>
                                                            <option value="Europe/Astrakhan" <?php if($getstart_date[0]['timeZone'] == 'Europe/Astrakhan') {echo "selected";}?>>Europe/Astrakhan</option>
                                                            <option value="Europe/Athens" <?php if($getstart_date[0]['timeZone'] == 'Europe/Athens') {echo "selected";}?>>Europe/Athens</option>
                                                            <option value="Europe/Belgrade" <?php if($getstart_date[0]['timeZone'] == 'Europe/Belgrade') {echo "selected";}?>>Europe/Belgrade</option>
                                                            <option value="Europe/Berlin" <?php if($getstart_date[0]['timeZone'] == 'Europe/Berlin') {echo "selected";}?>>Europe/Berlin</option>
                                                            <option value="Europe/Bratislava" <?php if($getstart_date[0]['timeZone'] == 'Europe/Bratislava') {echo "selected";}?>>Europe/Bratislava</option>
                                                            <option value="Europe/Brussels" <?php if($getstart_date[0]['timeZone'] == 'Europe/Brussels') {echo "selected";}?>>Europe/Brussels</option>
                                                            <option value="Europe/Bucharest" <?php if($getstart_date[0]['timeZone'] == 'Europe/Bucharest') {echo "selected";}?>>Europe/Bucharest</option>
                                                            <option value="Europe/Budapest" <?php if($getstart_date[0]['timeZone'] == 'Europe/Budapest') {echo "selected";}?>>Europe/Budapest</option>
                                                            <option value="Europe/Busingen" <?php if($getstart_date[0]['timeZone'] == 'Europe/Busingen') {echo "selected";}?>>Europe/Busingen</option>
                                                            <option value="Europe/Chisinau" <?php if($getstart_date[0]['timeZone'] == 'Europe/Chisinau') {echo "selected";}?>>Europe/Chisinau</option>
                                                            <option value="Europe/Copenhagen" <?php if($getstart_date[0]['timeZone'] == 'Europe/Copenhagen') {echo "selected";}?>>Europe/Copenhagen</option>
                                                            <option value="Europe/Dublin" <?php if($getstart_date[0]['timeZone'] == 'Europe/Dublin') {echo "selected";}?>>Europe/Dublin</option>
                                                            <option value="Europe/Gibraltar" <?php if($getstart_date[0]['timeZone'] == 'Europe/Gibraltar') {echo "selected";}?>>Europe/Gibraltar</option>
                                                            <option value="Europe/Guernsey" <?php if($getstart_date[0]['timeZone'] == 'Europe/Guernsey') {echo "selected";}?>>Europe/Guernsey</option>
                                                            <option value="Europe/Helsinki" <?php if($getstart_date[0]['timeZone'] == 'Europe/Helsinki') {echo "selected";}?>>Europe/Helsinki</option>
                                                            <option value="Europe/Isle_of_Man" <?php if($getstart_date[0]['timeZone'] == 'Europe/Isle_of_Man') {echo "selected";}?>>Europe/Isle of Man</option>
                                                            <option value="Europe/Istanbul" <?php if($getstart_date[0]['timeZone'] == 'Europe/Istanbul') {echo "selected";}?>>Europe/Istanbul</option>
                                                            <option value="Europe/Jersey" <?php if($getstart_date[0]['timeZone'] == 'Europe/Jersey') {echo "selected";}?>>Europe/Jersey</option>
                                                            <option value="Europe/Kaliningrad" <?php if($getstart_date[0]['timeZone'] == 'Europe/Kaliningrad') {echo "selected";}?>>Europe/Kaliningrad</option>
                                                            <option value="Europe/Kirov" <?php if($getstart_date[0]['timeZone'] == 'Europe/Kirov') {echo "selected";}?>>Europe/Kirov</option>
                                                            <option value="Europe/Kyiv" <?php if($getstart_date[0]['timeZone'] == 'Europe/Kyiv') {echo "selected";}?>>Europe/Kyiv</option>
                                                            <option value="Europe/Lisbon" <?php if($getstart_date[0]['timeZone'] == 'Europe/Lisbon') {echo "selected";}?>>Europe/Lisbon</option>
                                                            <option value="Europe/Ljubljana" <?php if($getstart_date[0]['timeZone'] == 'Europe/Ljubljana') {echo "selected";}?>>Europe/Ljubljana</option>
                                                            <option value="Europe/London" <?php if($getstart_date[0]['timeZone'] == 'Europe/London') {echo "selected";}?>>Europe/London</option>
                                                            <option value="Europe/Luxembourg" <?php if($getstart_date[0]['timeZone'] == 'Europe/Luxembourg') {echo "selected";}?>>Europe/Luxembourg</option>
                                                            <option value="Europe/Malta" <?php if($getstart_date[0]['timeZone'] == 'Europe/Malta') {echo "selected";}?>>Europe/Malta</option>
                                                            <option value="Europe/Mariehamn" <?php if($getstart_date[0]['timeZone'] == 'Europe/Mariehamn') {echo "selected";}?>>Europe/Mariehamn</option>
                                                            <option value="Europe/Minsk" <?php if($getstart_date[0]['timeZone'] == 'Europe/Minsk') {echo "selected";}?>>Europe/Minsk</option>
                                                            <option value="Europe/Monaco" <?php if($getstart_date[0]['timeZone'] == 'Europe/Monaco') {echo "selected";}?>>Europe/Monaco</option>
                                                            <option value="Europe/Moscow" <?php if($getstart_date[0]['timeZone'] == 'Europe/Moscow') {echo "selected";}?>>Europe/Moscow</option>
                                                            <option value="Europe/Nicosia" <?php if($getstart_date[0]['timeZone'] == 'Europe/Nicosia') {echo "selected";}?>>Europe/Nicosia</option>
                                                            <option value="Europe/Oslo" <?php if($getstart_date[0]['timeZone'] == 'Europe/Oslo') {echo "selected";}?>>Europe/Oslo</option>
                                                            <option value="Europe/Paris" <?php if($getstart_date[0]['timeZone'] == 'Europe/Paris') {echo "selected";}?>>Europe/Paris</option>
                                                            <option value="Europe/Podgorica" <?php if($getstart_date[0]['timeZone'] == 'Europe/Podgorica') {echo "selected";}?>>Europe/Podgorica</option>
                                                            <option value="Europe/Prague" <?php if($getstart_date[0]['timeZone'] == 'Europe/Prague') {echo "selected";}?>>Europe/Prague</option>
                                                            <option value="Europe/Riga" <?php if($getstart_date[0]['timeZone'] == 'Europe/Riga') {echo "selected";}?>>Europe/Riga</option>
                                                            <option value="Europe/Rome" <?php if($getstart_date[0]['timeZone'] == 'Europe/Rome') {echo "selected";}?>>Europe/Rome</option>
                                                            <option value="Europe/Samara" <?php if($getstart_date[0]['timeZone'] == 'Europe/Samara') {echo "selected";}?>>Europe/Samara</option>
                                                            <option value="Europe/San_Marino" <?php if($getstart_date[0]['timeZone'] == 'Europe/San_Marino') {echo "selected";}?>>Europe/San Marino</option>
                                                            <option value="Europe/Sarajevo" <?php if($getstart_date[0]['timeZone'] == 'Europe/Sarajevo') {echo "selected";}?>>Europe/Sarajevo</option>
                                                            <option value="Europe/Sofia" <?php if($getstart_date[0]['timeZone'] == 'Europe/Sofia') {echo "selected";}?>>Europe/Sofia</option>
                                                            <option value="Europe/Stockholm" <?php if($getstart_date[0]['timeZone'] == 'Europe/Stockholm') {echo "selected";}?>>Europe/Stockholm</option>
                                                            <option value="Europe/Tallinn" <?php if($getstart_date[0]['timeZone'] == 'Europe/Tallinn') {echo "selected";}?>>Europe/Tallinn</option>
                                                            <option value="Europe/Tirane" <?php if($getstart_date[0]['timeZone'] == 'Europe/Tirane') {echo "selected";}?>>Europe/Tirane</option>
                                                            <option value="Europe/Uzhgorod" <?php if($getstart_date[0]['timeZone'] == 'Europe/Uzhgorod') {echo "selected";}?>>Europe/Uzhgorod</option>
                                                            <option value="Europe/Vaduz" <?php if($getstart_date[0]['timeZone'] == 'Europe/Vaduz') {echo "selected";}?>>Europe/Vaduz</option>
                                                            <option value="Europe/Vatican" <?php if($getstart_date[0]['timeZone'] == 'Europe/Vatican') {echo "selected";}?>>Europe/Vatican</option>
                                                            <option value="Europe/Vienna" <?php if($getstart_date[0]['timeZone'] == 'Europe/Vienna') {echo "selected";}?>>Europe/Vienna</option>
                                                            <option value="Europe/Vilnius" <?php if($getstart_date[0]['timeZone'] == 'Europe/Vilnius') {echo "selected";}?>>Europe/Vilnius</option>
                                                            <option value="Europe/Volgograd" <?php if($getstart_date[0]['timeZone'] == 'Europe/Volgograd') {echo "selected";}?>>Europe/Volgograd</option>
                                                            <option value="Europe/Warsaw" <?php if($getstart_date[0]['timeZone'] == 'Europe/Warsaw') {echo "selected";}?>>Europe/Warsaw</option>
                                                            <option value="Europe/Zagreb" <?php if($getstart_date[0]['timeZone'] == 'Europe/Zagreb') {echo "selected";}?>>Europe/Zagreb</option>
                                                            <option value="Europe/Zurich" <?php if($getstart_date[0]['timeZone'] == 'Europe/Zurich') {echo "selected";}?>>Europe/Zurich</option>
                                                        </select>
                                                    </div>
                                                    <?php for($i = 0; $i < count($data); $i++) {
                                                    $value = explode('.', $data[$i]);
                                                    $getavailability = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".@$_SESSION['afrebay']['userId']."' AND weekday = '".$value[1]."' AND is_datewise = '0' GROUP BY weekday")->result_array();
                                                    if(!empty($getavailability)) {
                                                        foreach ($getavailability as $key => $avail) { ?>
                                                        <div for="<?= $value[1]?>" class="col-12" style="width: 100%; display:inline-block;">
                                                            <div class="icheck-primary col-3" style="display: inline-block; float: left">
                                                                <input type="checkbox" id="checkboxPrimary<?= $value[0]?>" class="chooseday" name="weekDay<?= $value[0]?>" value='<?= $value[1]?>' checked>
                                                                <label for="checkboxPrimary<?= $value[0]?>"> <?= $value[1]?></label>
                                                            </div>
                                                            <div class="form-group date col-9" id="calenderDays<?= $value[0]?>" <?php if ($avail['weekday'] == $value[1]) { echo 'style="display: inline-block;background: #fcddde; border: 1px solid;border-radius: 12px;"'; } else { echo 'style="display: none; background: #fcddde; border: 1px solid;border-radius: 12px;"'; }?>>
                                                                <button type="button" class="btn btn-info addMoreBtn1" id="add_row_<?= $value[0]?>"><i class="fa fa-plus"></i></button>
                                                                <table class="table jobsites" id="purchaseTableclone<?= $value[0]?>">
                                                                    <tbody id="clonetable_feedback<?= $value[0]?>">
                                                                    <?php
                                                                    $getTimeslot = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".@$_SESSION['afrebay']['userId']."' AND weekday = '".$value[1]."' AND is_datewise = '0' GROUP BY weekdayslot")->result_array();
                                                                    foreach ($getTimeslot as $key => $timeslot) { ?>
                                                                        <?php
                                                                        $avail_time = $timeslot['weekdayslot'];
                                                                        $fromTime = explode(' to ', $avail_time); ?>
                                                                        <tr>
                                                                            <td><input type="time" class="form-control getfromtime" name="fromtime<?= $value[0]?>[]" id="fromtime" required value="<?= $fromTime[0]?>"></td>
                                                                            <td><input type="time" class="form-control gettotime" name="totime<?= $value[0]?>[]" id="totime" required value="<?= $fromTime[1]?>"></td>
                                                                            <td><a href="javascript:void(0)" title="Delete" class="text-danger" onclick="return remove(<?= $value[0]?>)">X</a></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    <?php } } else { ?>
                                                        <div for="<?= $value[1]?>" class="col-12" style="width: 100%; display:inline-block;">
                                                            <div class="icheck-primary col-3" style="display: inline-block; float: left">
                                                                <input type="checkbox" id="checkboxPrimary<?= $value[0]?>" class="chooseday" name="weekDay<?= $value[0]?>" value='<?= $value[1]?>'>
                                                                <label for="checkboxPrimary<?= $value[0]?>"> <?= $value[1]?></label>
                                                            </div>
                                                            <div class="form-group date col-9" id="calenderDays<?= $value[0]?>" style="display: none;background: #fcddde; border: 1px solid;border-radius: 12px;">
                                                                <button type="button" class="btn btn-info addMoreBtn1" id="add_row_<?= $value[0]?>"><i class="fa fa-plus"></i></button>
                                                                <table class="table jobsites" id="purchaseTableclone<?= $value[0]?>">
                                                                    <tbody id="clonetable_feedback<?= $value[0]?>">
                                                                        <tr>
                                                                            <td><input type="time" class="form-control getfromtime" name="fromtime<?= $value[0]?>[]" id="fromtime" required></td>
                                                                            <td><input type="time" class="form-control gettotime" name="totime<?= $value[0]?>[]" id="totime" required></td>
                                                                            <td><a href="javascript:void(0)" title="Delete" class="text-danger" onclick="return remove(<?= $value[0]?>)">X</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    <?php } } ?>
                                                </div>
                                                <div class="form-group" style="display: flex;">
                                                    <div class="col-12" style=" display: flex; align-items: center; justify-content: space-evenly; ">
                                                        <div class="col-6">
                                                            <h5 class="control-label">Start Date</h5>
                                                            <?php
                                                            if(!empty(@$getstart_date[0]['start_date'])) {
                                                                $date = date('Y-m-d', strtotime(@$getstart_date[0]['start_date']));
                                                                $val = '1';
                                                            } else {
                                                                $date = "";
                                                                $val = '0';
                                                            } ?>
                                                            <input type="text" id="starting_date" class="form-control" name="starting_date" style="background: #fff; padding: 15px; border-radius: 15px;" value="<?= $date?>"/>
                                                        </div>
                                                        <div class="icheck-primary col-6" style="text-align: end;">
                                                            <input type="checkbox" id="repeat_month" name="repeat_month" <?php if($getstart_date[0]['repeat_month'] == '1') {echo "checked value='1'"; } else {echo "value='0'"; }?>>
                                                            <label for="repeat_month">Repeat Every Month </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                        <input type="button" class="btn btn-success" id="submit-button" value="Save">
                                                        <input type="hidden" name="user_id" id="user_id" value="<?php echo @$_SESSION['afrebay']['userId']?>">
                                                        <input type="hidden" name="action_id" id="action_id" value="<?php echo @$val; ?>">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4 col-4" style="display: inline-block; float: left; background: #ffddde; padding: 30px; border-radius: 10px; margin-left: 45px;">
                                            <h5> Date-Specific Hours</h5>
                                            <p>Override your availability for specific dates when your hours differ from your regular weekly hours.</p>
                                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="background: #ed1c24;border: 1px solid #ed1c24;display: flex;flex-direction: row;justify-content: center;"><span>Add Date-Specific Hours</span></a>
                                            <?php
                                            $getdatespecificdata = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".@$_SESSION['afrebay']['userId']."' AND is_datewise = '1' GROUP BY start_date")->result_array();
                                            if(!empty($getdatespecificdata)) { ?>
                                            <div class="form-group" style="margin-top: 45px;">
                                            <?php foreach ($getdatespecificdata as $value) { ?>
                                                <div class="getdatespecificdata">
                                                    <div class="getdatespecificdate" style="width: 100%; margin-bottom: 5px; font-size: 16px; font-weight: 700;"><?= date('F j, Y' , strtotime($value['start_date'])) ?></div>
                                                    <?php
                                                    $getdatespecificslot = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".@$_SESSION['afrebay']['userId']."' AND start_date = '".$value['start_date']."' AND is_datewise = '1'")->result_array();
                                                    foreach ($getdatespecificslot as $key => $time) {
                                                        $slotTime = $time['weekdayslot'];
                                                        $stime = explode(' to ' , $slotTime); ?>
                                                        <div class="getdatespecificdatetime">
                                                            <p style="color: #fff; margin: 0px;"><?= date('h:i A', strtotime($stime[0]))." to ".date('h:i A', strtotime($stime[1])); ?></p>
                                                            <i class="fa fa-trash" onclick="deletedata('<?= $time['id']?>')" style="cursor: pointer;"></i>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 65%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Date-Specific Hours</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="myDateform">
                    <p style="color:red;" class="" id="errspecificdate"></p>
                    <p style="color:red;" class="" id="errfromtimedate"></p>
                    <p style="color:red;" class="" id="errtotimedate"></p>
                    <div class="col-12" style="display: inline-block;">
                        <?php $getstart_date = $this->db->query("SELECT * FROM user_availability_new WHERE user_id = '".@$_SESSION['afrebay']['userId']."'")->result(); ?>
                        <div class="col-6">
                            <label for="timeZonedate" style="padding: 0;">Current Time Zone <span style="color:red"> * </span></label>
                            <select id="timeZonedate" name="timeZonedate" class="custom-select" style="margin-bottom: 20px; display: flex; width: 300px;">
                                <option value="">Select Time Zone</option>
                                <option value="America/Adak" <?php if($getstart_date[0]->timeZone == 'America/Adak') {echo "selected";}?>>America/Adak</option>
                                <option value="America/Anchorage" <?php if($getstart_date[0]->timeZone == 'America/Anchorage') {echo "selected";}?>>America/Anchorage</option>
                                <option value="America/Anguilla" <?php if($getstart_date[0]->timeZone == 'America/Anguilla') {echo "selected";}?>>America/Anguilla</option>
                                <option value="America/Antigua" <?php if($getstart_date[0]->timeZone == 'America/Antigua') {echo "selected";}?>>America/Antigua</option>
                                <option value="America/Araguaina" <?php if($getstart_date[0]->timeZone == 'America/Araguaina') {echo "selected";}?>>America/Araguaina</option>
                                <option value="America/Argentina/Buenos_Aires" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Buenos_Aires') {echo "selected";}?>>America/Argentina/Buenos Aires</option>
                                <option value="America/Argentina/Catamarca" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Catamarca') {echo "selected";}?>>America/Argentina/Catamarca</option>
                                <option value="America/Argentina/Cordoba" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Cordoba') {echo "selected";}?>>America/Argentina/Cordoba</option>
                                <option value="America/Argentina/Jujuy" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Jujuy') {echo "selected";}?>>America/Argentina/Jujuy</option>
                                <option value="America/Argentina/La_Rioja" <?php if($getstart_date[0]->timeZone == 'America/Argentina/La_Rioja') {echo "selected";}?>>America/Argentina/La Rioja</option>
                                <option value="America/Argentina/Mendoza" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Mendoza') {echo "selected";}?>>America/Argentina/Mendoza</option>
                                <option value="America/Argentina/Rio_Gallegos" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Rio_Gallegos') {echo "selected";}?>>America/Argentina/Rio Gallegos</option>
                                <option value="America/Argentina/Salta" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Salta') {echo "selected";}?>>America/Argentina/Salta</option>
                                <option value="America/Argentina/San_Juan" <?php if($getstart_date[0]->timeZone == 'America/Argentina/San_Juan') {echo "selected";}?>>America/Argentina/San Juan</option>
                                <option value="America/Argentina/San_Luis" <?php if($getstart_date[0]->timeZone == 'America/Argentina/San_Luis') {echo "selected";}?>>America/Argentina/San Luis</option>
                                <option value="America/Argentina/Tucuman" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Tucuman') {echo "selected";}?>>America/Argentina/Tucuman</option>
                                <option value="America/Argentina/Ushuaia" <?php if($getstart_date[0]->timeZone == 'America/Argentina/Ushuaia') {echo "selected";}?>>America/Argentina/Ushuaia</option>
                                <option value="America/Aruba" <?php if($getstart_date[0]->timeZone == 'America/Aruba') {echo "selected";}?>>America/Aruba</option>
                                <option value="America/Asuncion" <?php if($getstart_date[0]->timeZone == 'America/Asuncion') {echo "selected";}?>>America/Asuncion</option>
                                <option value="America/Atikokan" <?php if($getstart_date[0]->timeZone == 'America/Atikokan') {echo "selected";}?>>America/Atikokan</option>
                                <option value="America/Bahia" <?php if($getstart_date[0]->timeZone == 'America/Bahia') {echo "selected";}?>>America/Bahia</option>
                                <option value="America/Bahia_Banderas" <?php if($getstart_date[0]->timeZone == 'America/Bahia_Banderas') {echo "selected";}?>>America/Bahia Banderas</option>
                                <option value="America/Barbados" <?php if($getstart_date[0]->timeZone == 'America/Barbados') {echo "selected";}?>>America/Barbados</option>
                                <option value="America/Belem" <?php if($getstart_date[0]->timeZone == 'America/Belem') {echo "selected";}?>>America/Belem</option>
                                <option value="America/Belize" <?php if($getstart_date[0]->timeZone == 'America/Belize') {echo "selected";}?>>America/Belize</option>
                                <option value="America/Blanc-Sablon" <?php if($getstart_date[0]->timeZone == 'America/Blanc-Sablon') {echo "selected";}?>>America/Blanc-Sablon</option>
                                <option value="America/Boa_Vista" <?php if($getstart_date[0]->timeZone == 'America/Boa_Vista') {echo "selected";}?>>America/Boa Vista</option>
                                <option value="America/Bogota" <?php if($getstart_date[0]->timeZone == 'America/Bogota') {echo "selected";}?>>America/Bogota</option>
                                <option value="America/Boise" <?php if($getstart_date[0]->timeZone == 'America/Boise') {echo "selected";}?>>America/Boise</option>
                                <option value="America/Cambridge_Bay" <?php if($getstart_date[0]->timeZone == 'America/Cambridge_Bay') {echo "selected";}?>>America/Cambridge Bay</option>
                                <option value="America/Campo_Grande" <?php if($getstart_date[0]->timeZone == 'America/Campo_Grande') {echo "selected";}?>>America/Campo Grande</option>
                                <option value="America/Cancun" <?php if($getstart_date[0]->timeZone == 'America/Cancun') {echo "selected";}?>>America/Cancun</option>
                                <option value="America/Caracas" <?php if($getstart_date[0]->timeZone == 'America/Caracas') {echo "selected";}?>>America/Caracas</option>
                                <option value="America/Cayenne" <?php if($getstart_date[0]->timeZone == 'America/Cayenne') {echo "selected";}?>>America/Cayenne</option>
                                <option value="America/Cayman" <?php if($getstart_date[0]->timeZone == 'America/Cayman') {echo "selected";}?>>America/Cayman</option>
                                <option value="America/Chicago" <?php if($getstart_date[0]->timeZone == 'America/Chicago') {echo "selected";}?>>America/Chicago</option>
                                <option value="America/Chihuahua" <?php if($getstart_date[0]->timeZone == 'America/Chihuahua') {echo "selected";}?>>America/Chihuahua</option>
                                <option value="America/Ciudad_Juarez" <?php if($getstart_date[0]->timeZone == 'America/Ciudad_Juarez') {echo "selected";}?>>America/Ciudad Juarez</option>
                                <option value="America/Costa_Rica" <?php if($getstart_date[0]->timeZone == 'America/Costa_Rica') {echo "selected";}?>>America/Costa Rica</option>
                                <option value="America/Creston" <?php if($getstart_date[0]->timeZone == 'America/Creston') {echo "selected";}?>>America/Creston</option>
                                <option value="America/Cuiaba" <?php if($getstart_date[0]->timeZone == 'America/Cuiaba') {echo "selected";}?>>America/Cuiaba</option>
                                <option value="America/Curacao" <?php if($getstart_date[0]->timeZone == 'America/Curacao') {echo "selected";}?>>America/Curacao</option>
                                <option value="America/Danmarkshavn" <?php if($getstart_date[0]->timeZone == 'America/Danmarkshavn') {echo "selected";}?>>America/Danmarkshavn</option>
                                <option value="America/Dawson" <?php if($getstart_date[0]->timeZone == 'America/Dawson') {echo "selected";}?>>America/Dawson</option>
                                <option value="America/Dawson_Creek" <?php if($getstart_date[0]->timeZone == 'America/Dawson_Creek') {echo "selected";}?>>America/Dawson Creek</option>
                                <option value="America/Denver" <?php if($getstart_date[0]->timeZone == 'America/Denver') {echo "selected";}?>>America/Denver</option>
                                <option value="America/Detroit" <?php if($getstart_date[0]->timeZone == 'America/Detroit') {echo "selected";}?>>America/Detroit</option>
                                <option value="America/Dominica" <?php if($getstart_date[0]->timeZone == 'America/Dominica') {echo "selected";}?>>America/Dominica</option>
                                <option value="America/Edmonton" <?php if($getstart_date[0]->timeZone == 'America/Edmonton') {echo "selected";}?>>America/Edmonton</option>
                                <option value="America/Eirunepe" <?php if($getstart_date[0]->timeZone == 'America/Eirunepe') {echo "selected";}?>>America/Eirunepe</option>
                                <option value="America/El_Salvador" <?php if($getstart_date[0]->timeZone == 'America/El_Salvador') {echo "selected";}?>>America/El Salvador</option>
                                <option value="America/Fort_Nelson" <?php if($getstart_date[0]->timeZone == 'America/Fort_Nelson') {echo "selected";}?>>America/Fort Nelson</option>
                                <option value="America/Fortaleza" <?php if($getstart_date[0]->timeZone == 'America/Fortaleza') {echo "selected";}?>>America/Fortaleza</option>
                                <option value="America/Glace_Bay" <?php if($getstart_date[0]->timeZone == 'America/Glace_Bay') {echo "selected";}?>>America/Glace Bay</option>
                                <option value="America/Goose_Bay" <?php if($getstart_date[0]->timeZone == 'America/Goose_Bay') {echo "selected";}?>>America/Goose Bay</option>
                                <option value="America/Grand_Turk" <?php if($getstart_date[0]->timeZone == 'America/Grand_Turk') {echo "selected";}?>>America/Grand Turk</option>
                                <option value="America/Grenada" <?php if($getstart_date[0]->timeZone == 'America/Grenada') {echo "selected";}?>>America/Grenada</option>
                                <option value="America/Guadeloupe" <?php if($getstart_date[0]->timeZone == 'America/Guadeloupe') {echo "selected";}?>>America/Guadeloupe</option>
                                <option value="America/Guatemala" <?php if($getstart_date[0]->timeZone == 'America/Guatemala') {echo "selected";}?>>America/Guatemala</option>
                                <option value="America/Guayaquil" <?php if($getstart_date[0]->timeZone == 'America/Guayaquil') {echo "selected";}?>>America/Guayaquil</option>
                                <option value="America/Guyana" <?php if($getstart_date[0]->timeZone == 'America/Guyana') {echo "selected";}?>>America/Guyana</option>
                                <option value="America/Halifax" <?php if($getstart_date[0]->timeZone == 'America/Halifax') {echo "selected";}?>>America/Halifax</option>
                                <option value="America/Havana" <?php if($getstart_date[0]->timeZone == 'America/Havana') {echo "selected";}?>>America/Havana</option>
                                <option value="America/Hermosillo" <?php if($getstart_date[0]->timeZone == 'America/Hermosillo') {echo "selected";}?>>America/Hermosillo</option>
                                <option value="America/Indiana/Indianapolis" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Indianapolis') {echo "selected";}?>>America/Indiana/Indianapolis</option>
                                <option value="America/Indiana/Knox" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Knox') {echo "selected";}?>>America/Indiana/Knox</option>
                                <option value="America/Indiana/Marengo" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Marengo') {echo "selected";}?>>America/Indiana/Marengo</option>
                                <option value="America/Indiana/Petersburg" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Petersburg') {echo "selected";}?>>America/Indiana/Petersburg</option>
                                <option value="America/Indiana/Tell_City" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Tell_City') {echo "selected";}?>>America/Indiana/Tell City</option>
                                <option value="America/Indiana/Vevay" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Vevay') {echo "selected";}?>>America/Indiana/Vevay</option>
                                <option value="America/Indiana/Vincennes" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Vincennes') {echo "selected";}?>>America/Indiana/Vincennes</option>
                                <option value="America/Indiana/Winamac" <?php if($getstart_date[0]->timeZone == 'America/Indiana/Winamac') {echo "selected";}?>>America/Indiana/Winamac</option>
                                <option value="America/Inuvik" <?php if($getstart_date[0]->timeZone == 'America/Inuvik') {echo "selected";}?>>America/Inuvik</option>
                                <option value="America/Iqaluit" <?php if($getstart_date[0]->timeZone == 'America/Iqaluit') {echo "selected";}?>>America/Iqaluit</option>
                                <option value="America/Jamaica" <?php if($getstart_date[0]->timeZone == 'America/Jamaica') {echo "selected";}?>>America/Jamaica</option>
                                <option value="America/Juneau" <?php if($getstart_date[0]->timeZone == 'America/Juneau') {echo "selected";}?>>America/Juneau</option>
                                <option value="America/Kentucky/Louisville" <?php if($getstart_date[0]->timeZone == 'America/Kentucky/Louisville') {echo "selected";}?>>America/Kentucky/Louisville</option>
                                <option value="America/Kentucky/Monticello" <?php if($getstart_date[0]->timeZone == 'America/Kentucky/Monticello') {echo "selected";}?>>America/Kentucky/Monticello</option>
                                <option value="America/Kralendijk" <?php if($getstart_date[0]->timeZone == 'America/Kralendijk') {echo "selected";}?>>America/Kralendijk</option>
                                <option value="America/La_Paz" <?php if($getstart_date[0]->timeZone == 'America/La_Paz') {echo "selected";}?>>America/La Paz</option>
                                <option value="America/Lima" <?php if($getstart_date[0]->timeZone == 'America/Lima') {echo "selected";}?>>America/Lima</option>
                                <option value="America/Los_Angeles" <?php if($getstart_date[0]->timeZone == 'America/Los_Angeles') {echo "selected";}?>>America/Los Angeles</option>
                                <option value="America/Lower_Princes" <?php if($getstart_date[0]->timeZone == 'America/Lower_Princes') {echo "selected";}?>>America/Lower Princes</option>
                                <option value="America/Maceio" <?php if($getstart_date[0]->timeZone == 'America/Maceio') {echo "selected";}?>>America/Maceio</option>
                                <option value="America/Managua" <?php if($getstart_date[0]->timeZone == 'America/Managua') {echo "selected";}?>>America/Managua</option>
                                <option value="America/Manaus" <?php if($getstart_date[0]->timeZone == 'America/Manaus') {echo "selected";}?>>America/Manaus</option>
                                <option value="America/Marigot" <?php if($getstart_date[0]->timeZone == 'America/Marigot') {echo "selected";}?>>America/Marigot</option>
                                <option value="America/Martinique" <?php if($getstart_date[0]->timeZone == 'America/Martinique') {echo "selected";}?>>America/Martinique</option>
                                <option value="America/Matamoros" <?php if($getstart_date[0]->timeZone == 'America/Matamoros') {echo "selected";}?>>America/Matamoros</option>
                                <option value="America/Mazatlan" <?php if($getstart_date[0]->timeZone == 'America/Mazatlan') {echo "selected";}?>>America/Mazatlan</option>
                                <option value="America/Menominee" <?php if($getstart_date[0]->timeZone == 'America/Menominee') {echo "selected";}?>>America/Menominee</option>
                                <option value="America/Merida" <?php if($getstart_date[0]->timeZone == 'America/Merida') {echo "selected";}?>>America/Merida</option>
                                <option value="America/Metlakatla" <?php if($getstart_date[0]->timeZone == 'America/Metlakatla') {echo "selected";}?>>America/Metlakatla</option>
                                <option value="America/Mexico_City" <?php if($getstart_date[0]->timeZone == 'America/Mexico_City') {echo "selected";}?>>America/Mexico City</option>
                                <option value="America/Miquelon" <?php if($getstart_date[0]->timeZone == 'America/Miquelon') {echo "selected";}?>>America/Miquelon</option>
                                <option value="America/Moncton" <?php if($getstart_date[0]->timeZone == 'America/Moncton') {echo "selected";}?>>America/Moncton</option>
                                <option value="America/Monterrey" <?php if($getstart_date[0]->timeZone == 'America/Monterrey') {echo "selected";}?>>America/Monterrey</option>
                                <option value="America/Montevideo" <?php if($getstart_date[0]->timeZone == 'America/Montevideo') {echo "selected";}?>>America/Montevideo</option>
                                <option value="America/Montserrat" <?php if($getstart_date[0]->timeZone == 'America/Montserrat') {echo "selected";}?>>America/Montserrat</option>
                                <option value="America/Nassau" <?php if($getstart_date[0]->timeZone == 'America/Nassau') {echo "selected";}?>>America/Nassau</option>
                                <option value="America/New_York" <?php if($getstart_date[0]->timeZone == 'America/New_York') {echo "selected";}?>>America/New York</option>
                                <option value="America/Nome" <?php if($getstart_date[0]->timeZone == 'America/Nome') {echo "selected";}?>>America/Nome</option>
                                <option value="America/Noronha" <?php if($getstart_date[0]->timeZone == 'America/Noronha') {echo "selected";}?>>America/Noronha</option>
                                <option value="America/North_Dakota/Beulah" <?php if($getstart_date[0]->timeZone == 'America/North_Dakota/Beulah') {echo "selected";}?>>America/North Dakota/Beulah</option>
                                <option value="America/North_Dakota/Center" <?php if($getstart_date[0]->timeZone == 'America/North_Dakota/Center') {echo "selected";}?>>America/North Dakota/Center</option>
                                <option value="America/North_Dakota/New_Salem" <?php if($getstart_date[0]->timeZone == 'America/North_Dakota/New_Salem') {echo "selected";}?>>America/North Dakota/New Salem</option>
                                <option value="America/Nuuk" <?php if($getstart_date[0]->timeZone == 'America/Nuuk') {echo "selected";}?>>America/Nuuk</option>
                                <option value="America/Ojinaga" <?php if($getstart_date[0]->timeZone == 'America/Ojinaga') {echo "selected";}?>>America/Ojinaga</option>
                                <option value="America/Panama" <?php if($getstart_date[0]->timeZone == 'America/Panama') {echo "selected";}?>>America/Panama</option>
                                <option value="America/Paramaribo" <?php if($getstart_date[0]->timeZone == 'America/Paramaribo') {echo "selected";}?>>America/Paramaribo</option>
                                <option value="America/Phoenix" <?php if($getstart_date[0]->timeZone == 'America/Phoenix') {echo "selected";}?>>America/Phoenix</option>
                                <option value="America/Port-au-Prince" <?php if($getstart_date[0]->timeZone == 'America/Port-au') {echo "selected";}?>>America/Port-au-Prince</option>
                                <option value="America/Port_of_Spain" <?php if($getstart_date[0]->timeZone == 'America/Port_of_Spain') {echo "selected";}?>>America/Port of Spain</option>
                                <option value="America/Porto_Velho" <?php if($getstart_date[0]->timeZone == 'America/Porto_Velho') {echo "selected";}?>>America/Porto Velho</option>
                                <option value="America/Puerto_Rico" <?php if($getstart_date[0]->timeZone == 'America/Puerto_Rico') {echo "selected";}?>>America/Puerto Rico</option>
                                <option value="America/Punta_Arenas" <?php if($getstart_date[0]->timeZone == 'America/Punta_Arenas') {echo "selected";}?>>America/Punta Arenas</option>
                                <option value="America/Rankin_Inlet" <?php if($getstart_date[0]->timeZone == 'America/Rankin_Inlet') {echo "selected";}?>>America/Rankin Inlet</option>
                                <option value="America/Recife" <?php if($getstart_date[0]->timeZone == 'America/Recife') {echo "selected";}?>>America/Recife</option>
                                <option value="America/Regina" <?php if($getstart_date[0]->timeZone == 'America/Regina') {echo "selected";}?>>America/Regina</option>
                                <option value="America/Resolute" <?php if($getstart_date[0]->timeZone == 'America/Resolute') {echo "selected";}?>>America/Resolute</option>
                                <option value="America/Rio_Branco" <?php if($getstart_date[0]->timeZone == 'America/Rio_Branco') {echo "selected";}?>>America/Rio Branco</option>
                                <option value="America/Santarem" <?php if($getstart_date[0]->timeZone == 'America/Santarem') {echo "selected";}?>>America/Santarem</option>
                                <option value="America/Santiago" <?php if($getstart_date[0]->timeZone == 'America/Santiago') {echo "selected";}?>>America/Santiago</option>
                                <option value="America/Santo_Domingo" <?php if($getstart_date[0]->timeZone == 'America/Santo_Domingo') {echo "selected";}?>>America/Santo Domingo</option>
                                <option value="America/Sao_Paulo" <?php if($getstart_date[0]->timeZone == 'America/Sao_Paulo') {echo "selected";}?>>America/Sao Paulo</option>
                                <option value="America/Scoresbysund" <?php if($getstart_date[0]->timeZone == 'America/Scoresbysund') {echo "selected";}?>>America/Scoresbysund</option>
                                <option value="America/Sitka" <?php if($getstart_date[0]->timeZone == 'America/Sitka') {echo "selected";}?>>America/Sitka</option>
                                <option value="America/St_Barthelemy" <?php if($getstart_date[0]->timeZone == 'America/St_Barthelemy') {echo "selected";}?>>America/St Barthelemy</option>
                                <option value="America/St_Johns" <?php if($getstart_date[0]->timeZone == 'America/St_Johns') {echo "selected";}?>>America/St Johns</option>
                                <option value="America/St_Kitts" <?php if($getstart_date[0]->timeZone == 'America/St_Kitts') {echo "selected";}?>>America/St Kitts</option>
                                <option value="America/St_Lucia" <?php if($getstart_date[0]->timeZone == 'America/St_Lucia') {echo "selected";}?>>America/St Lucia</option>
                                <option value="America/St_Thomas" <?php if($getstart_date[0]->timeZone == 'America/St_Thomas') {echo "selected";}?>>America/St Thomas</option>
                                <option value="America/St_Vincent" <?php if($getstart_date[0]->timeZone == 'America/St_Vincent') {echo "selected";}?>>America/St Vincent</option>
                                <option value="America/Swift_Current" <?php if($getstart_date[0]->timeZone == 'America/Swift_Current') {echo "selected";}?>>America/Swift Current</option>
                                <option value="America/Tegucigalpa" <?php if($getstart_date[0]->timeZone == 'America/Tegucigalpa') {echo "selected";}?>>America/Tegucigalpa</option>
                                <option value="America/Thule" <?php if($getstart_date[0]->timeZone == 'America/Thule') {echo "selected";}?>>America/Thule</option>
                                <option value="America/Tijuana" <?php if($getstart_date[0]->timeZone == 'America/Tijuana') {echo "selected";}?>>America/Tijuana</option>
                                <option value="America/Toronto" <?php if($getstart_date[0]->timeZone == 'America/Toronto') {echo "selected";}?>>America/Toronto</option>
                                <option value="America/Tortola" <?php if($getstart_date[0]->timeZone == 'America/Tortola') {echo "selected";}?>>America/Tortola</option>
                                <option value="America/Vancouver" <?php if($getstart_date[0]->timeZone == 'America/Vancouver') {echo "selected";}?>>America/Vancouver</option>
                                <option value="America/Whitehorse" <?php if($getstart_date[0]->timeZone == 'America/Whitehorse') {echo "selected";}?>>America/Whitehorse</option>
                                <option value="America/Winnipeg" <?php if($getstart_date[0]->timeZone == 'America/Winnipeg') {echo "selected";}?>>America/Winnipeg</option>
                                <option value="America/Yakutat" <?php if($getstart_date[0]->timeZone == 'America/Yakutat') {echo "selected";}?>>America/Yakutat</option>
                                <option value="Asia/Kolkata" <?php if($getstart_date[0]->timeZone == 'Asia/Kolkata') {echo "selected";}?>>Asia/Kolkata</option>
                                <option value="Australia/Adelaide" <?php if($getstart_date[0]->timeZone == 'Australia/Adelaide') {echo "selected";}?>>Australia/Adelaide</option>
                                <option value="Australia/Brisbane" <?php if($getstart_date[0]->timeZone == 'Australia/Brisbane') {echo "selected";}?>>Australia/Brisbane</option>
                                <option value="Australia/Broken_Hill" <?php if($getstart_date[0]->timeZone == 'Australia/Broken_Hill') {echo "selected";}?>>Australia/Broken Hill</option>
                                <option value="Australia/Darwin" <?php if($getstart_date[0]->timeZone == 'Australia/Darwin') {echo "selected";}?>>Australia/Darwin</option>
                                <option value="Australia/Eucla" <?php if($getstart_date[0]->timeZone == 'Australia/Eucla') {echo "selected";}?>>Australia/Eucla</option>
                                <option value="Australia/Hobart" <?php if($getstart_date[0]->timeZone == 'Australia/Hobart') {echo "selected";}?>>Australia/Hobart</option>
                                <option value="Australia/Lindeman" <?php if($getstart_date[0]->timeZone == 'Australia/Lindeman') {echo "selected";}?>>Australia/Lindeman</option>
                                <option value="Australia/Lord_Howe" <?php if($getstart_date[0]->timeZone == 'Australia/Lord_Howe') {echo "selected";}?>>Australia/Lord Howe</option>
                                <option value="Australia/Melbourne" <?php if($getstart_date[0]->timeZone == 'Australia/Melbourne') {echo "selected";}?>>Australia/Melbourne</option>
                                <option value="Australia/Perth" <?php if($getstart_date[0]->timeZone == 'Australia/Perth') {echo "selected";}?>>Australia/Perth</option>
                                <option value="Australia/Sydney" <?php if($getstart_date[0]->timeZone == 'Australia/Sydney') {echo "selected";}?>>Australia/Sydney</option>
                                <option value="Europe/Amsterdam" <?php if($getstart_date[0]->timeZone == 'Europe/Amsterdam') {echo "selected";}?>>Europe/Amsterdam</option>
                                <option value="Europe/Andorra" <?php if($getstart_date[0]->timeZone == 'Europe/Andorra') {echo "selected";}?>>Europe/Andorra</option>
                                <option value="Europe/Astrakhan" <?php if($getstart_date[0]->timeZone == 'Europe/Astrakhan') {echo "selected";}?>>Europe/Astrakhan</option>
                                <option value="Europe/Athens" <?php if($getstart_date[0]->timeZone == 'Europe/Athens') {echo "selected";}?>>Europe/Athens</option>
                                <option value="Europe/Belgrade" <?php if($getstart_date[0]->timeZone == 'Europe/Belgrade') {echo "selected";}?>>Europe/Belgrade</option>
                                <option value="Europe/Berlin" <?php if($getstart_date[0]->timeZone == 'Europe/Berlin') {echo "selected";}?>>Europe/Berlin</option>
                                <option value="Europe/Bratislava" <?php if($getstart_date[0]->timeZone == 'Europe/Bratislava') {echo "selected";}?>>Europe/Bratislava</option>
                                <option value="Europe/Brussels" <?php if($getstart_date[0]->timeZone == 'Europe/Brussels') {echo "selected";}?>>Europe/Brussels</option>
                                <option value="Europe/Bucharest" <?php if($getstart_date[0]->timeZone == 'Europe/Bucharest') {echo "selected";}?>>Europe/Bucharest</option>
                                <option value="Europe/Budapest" <?php if($getstart_date[0]->timeZone == 'Europe/Budapest') {echo "selected";}?>>Europe/Budapest</option>
                                <option value="Europe/Busingen" <?php if($getstart_date[0]->timeZone == 'Europe/Busingen') {echo "selected";}?>>Europe/Busingen</option>
                                <option value="Europe/Chisinau" <?php if($getstart_date[0]->timeZone == 'Europe/Chisinau') {echo "selected";}?>>Europe/Chisinau</option>
                                <option value="Europe/Copenhagen" <?php if($getstart_date[0]->timeZone == 'Europe/Copenhagen') {echo "selected";}?>>Europe/Copenhagen</option>
                                <option value="Europe/Dublin" <?php if($getstart_date[0]->timeZone == 'Europe/Dublin') {echo "selected";}?>>Europe/Dublin</option>
                                <option value="Europe/Gibraltar" <?php if($getstart_date[0]->timeZone == 'Europe/Gibraltar') {echo "selected";}?>>Europe/Gibraltar</option>
                                <option value="Europe/Guernsey" <?php if($getstart_date[0]->timeZone == 'Europe/Guernsey') {echo "selected";}?>>Europe/Guernsey</option>
                                <option value="Europe/Helsinki" <?php if($getstart_date[0]->timeZone == 'Europe/Helsinki') {echo "selected";}?>>Europe/Helsinki</option>
                                <option value="Europe/Isle_of_Man" <?php if($getstart_date[0]->timeZone == 'Europe/Isle_of_Man') {echo "selected";}?>>Europe/Isle of Man</option>
                                <option value="Europe/Istanbul" <?php if($getstart_date[0]->timeZone == 'Europe/Istanbul') {echo "selected";}?>>Europe/Istanbul</option>
                                <option value="Europe/Jersey" <?php if($getstart_date[0]->timeZone == 'Europe/Jersey') {echo "selected";}?>>Europe/Jersey</option>
                                <option value="Europe/Kaliningrad" <?php if($getstart_date[0]->timeZone == 'Europe/Kaliningrad') {echo "selected";}?>>Europe/Kaliningrad</option>
                                <option value="Europe/Kirov" <?php if($getstart_date[0]->timeZone == 'Europe/Kirov') {echo "selected";}?>>Europe/Kirov</option>
                                <option value="Europe/Kyiv" <?php if($getstart_date[0]->timeZone == 'Europe/Kyiv') {echo "selected";}?>>Europe/Kyiv</option>
                                <option value="Europe/Lisbon" <?php if($getstart_date[0]->timeZone == 'Europe/Lisbon') {echo "selected";}?>>Europe/Lisbon</option>
                                <option value="Europe/Ljubljana" <?php if($getstart_date[0]->timeZone == 'Europe/Ljubljana') {echo "selected";}?>>Europe/Ljubljana</option>
                                <option value="Europe/London" <?php if($getstart_date[0]->timeZone == 'Europe/London') {echo "selected";}?>>Europe/London</option>
                                <option value="Europe/Luxembourg" <?php if($getstart_date[0]->timeZone == 'Europe/Luxembourg') {echo "selected";}?>>Europe/Luxembourg</option>
                                <option value="Europe/Malta" <?php if($getstart_date[0]->timeZone == 'Europe/Malta') {echo "selected";}?>>Europe/Malta</option>
                                <option value="Europe/Mariehamn" <?php if($getstart_date[0]->timeZone == 'Europe/Mariehamn') {echo "selected";}?>>Europe/Mariehamn</option>
                                <option value="Europe/Minsk" <?php if($getstart_date[0]->timeZone == 'Europe/Minsk') {echo "selected";}?>>Europe/Minsk</option>
                                <option value="Europe/Monaco" <?php if($getstart_date[0]->timeZone == 'Europe/Monaco') {echo "selected";}?>>Europe/Monaco</option>
                                <option value="Europe/Moscow" <?php if($getstart_date[0]->timeZone == 'Europe/Moscow') {echo "selected";}?>>Europe/Moscow</option>
                                <option value="Europe/Nicosia" <?php if($getstart_date[0]->timeZone == 'Europe/Nicosia') {echo "selected";}?>>Europe/Nicosia</option>
                                <option value="Europe/Oslo" <?php if($getstart_date[0]->timeZone == 'Europe/Oslo') {echo "selected";}?>>Europe/Oslo</option>
                                <option value="Europe/Paris" <?php if($getstart_date[0]->timeZone == 'Europe/Paris') {echo "selected";}?>>Europe/Paris</option>
                                <option value="Europe/Podgorica" <?php if($getstart_date[0]->timeZone == 'Europe/Podgorica') {echo "selected";}?>>Europe/Podgorica</option>
                                <option value="Europe/Prague" <?php if($getstart_date[0]->timeZone == 'Europe/Prague') {echo "selected";}?>>Europe/Prague</option>
                                <option value="Europe/Riga" <?php if($getstart_date[0]->timeZone == 'Europe/Riga') {echo "selected";}?>>Europe/Riga</option>
                                <option value="Europe/Rome" <?php if($getstart_date[0]->timeZone == 'Europe/Rome') {echo "selected";}?>>Europe/Rome</option>
                                <option value="Europe/Samara" <?php if($getstart_date[0]->timeZone == 'Europe/Samara') {echo "selected";}?>>Europe/Samara</option>
                                <option value="Europe/San_Marino" <?php if($getstart_date[0]->timeZone == 'Europe/San_Marino') {echo "selected";}?>>Europe/San Marino</option>
                                <option value="Europe/Sarajevo" <?php if($getstart_date[0]->timeZone == 'Europe/Sarajevo') {echo "selected";}?>>Europe/Sarajevo</option>
                                <option value="Europe/Sofia" <?php if($getstart_date[0]->timeZone == 'Europe/Sofia') {echo "selected";}?>>Europe/Sofia</option>
                                <option value="Europe/Stockholm" <?php if($getstart_date[0]->timeZone == 'Europe/Stockholm') {echo "selected";}?>>Europe/Stockholm</option>
                                <option value="Europe/Tallinn" <?php if($getstart_date[0]->timeZone == 'Europe/Tallinn') {echo "selected";}?>>Europe/Tallinn</option>
                                <option value="Europe/Tirane" <?php if($getstart_date[0]->timeZone == 'Europe/Tirane') {echo "selected";}?>>Europe/Tirane</option>
                                <option value="Europe/Uzhgorod" <?php if($getstart_date[0]->timeZone == 'Europe/Uzhgorod') {echo "selected";}?>>Europe/Uzhgorod</option>
                                <option value="Europe/Vaduz" <?php if($getstart_date[0]->timeZone == 'Europe/Vaduz') {echo "selected";}?>>Europe/Vaduz</option>
                                <option value="Europe/Vatican" <?php if($getstart_date[0]->timeZone == 'Europe/Vatican') {echo "selected";}?>>Europe/Vatican</option>
                                <option value="Europe/Vienna" <?php if($getstart_date[0]->timeZone == 'Europe/Vienna') {echo "selected";}?>>Europe/Vienna</option>
                                <option value="Europe/Vilnius" <?php if($getstart_date[0]->timeZone == 'Europe/Vilnius') {echo "selected";}?>>Europe/Vilnius</option>
                                <option value="Europe/Volgograd" <?php if($getstart_date[0]->timeZone == 'Europe/Volgograd') {echo "selected";}?>>Europe/Volgograd</option>
                                <option value="Europe/Warsaw" <?php if($getstart_date[0]->timeZone == 'Europe/Warsaw') {echo "selected";}?>>Europe/Warsaw</option>
                                <option value="Europe/Zagreb" <?php if($getstart_date[0]->timeZone == 'Europe/Zagreb') {echo "selected";}?>>Europe/Zagreb</option>
                                <option value="Europe/Zurich" <?php if($getstart_date[0]->timeZone == 'Europe/Zurich') {echo "selected";}?>>Europe/Zurich</option>
                            </select>
                        </div>
                        <div class="col-6" style="display: inline-block; float: left;">
                            <p style="margin-bottom: 25px;">Select date(s) you want to assign specific hours.</p>
                            <input type="text" class="form-control" name="specific_date[]" id="specific_date">
                        </div>
                        <div class="col-6" style="display: inline-block; float: left;">
                            <p style="display: inline-block; float: left;">What hours are you available?</p>
                            <table class="table jobsites" id="purchaseTableclonedate1">
                                <button type="button" class="btn btn-info addMoreBtn1" id="add_rowdate1"><i class="fa fa-plus"></i></button>
                                <tbody id="clonetable_feedbackdate1">
                                    <tr>
                                        <td style="border: none;"><input type="time" class="form-control getfromtimedate" name="fromtimedate[]" id="fromtimedate" required></td>
                                        <td style="border: none;"><input type="time" class="form-control gettotimedate" name="totimedate[]" id="totimedate" required></td>
                                        <td style="border: none;"><a href="javascript:void(0)" title="Delete" class="text-danger" onclick="return removesdate1()">X</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <input type="button" class="btn btn-success" id="submit_buttonDate" value="Submit">
                            <input type="hidden" name="user_id" id="user_id" value="<?php echo @$_SESSION['afrebay']['userId']?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
.dashboard-gig a:focus,a,a:hover{text-decoration:none!important}#calendar{width:100%;margin:0 0 20px;box-shadow:0 0 10px #ddd;display:inline-block;padding:20px;border-radius:10px}.fc-event{border:1px solid #eee!important}.fc-content{padding:3px!important}.fc-content .fc-title{display:block!important;overflow:hidden;font-size:12px;font-weight:500;text-align:center}.fc-customButton-button{font-size:13px!important;position:absolute;top:60px;left:50%;transform:translateY(-50%)}.Calender_Pick .fc-button-group button span,.fa,.fas{font-size:13px}.form-group{margin-bottom:1rem}.form-group>label{margin-bottom:10px}#delete-modal .modal-footer>.btn{border-radius:3px!important;padding:0 8px!important;font-size:15px}.fc-scroller{overflow-y:hidden!important}.context-menu{position:absolute;z-index:1000;background-color:#fff;border:1px solid #ccc;border-radius:4px;box-shadow:2px 2px 6px rgba(0,0,0,.3);padding:5px}#submit-button,.addMoreBtn1{background:#ed1c24!important}.context-menu ul{list-style-type:none;margin:0;padding:0}.context-menu ul>li{padding:5px 15px;list-style-type:none;color:#333;display:block;cursor:pointer;margin:0 auto;transition:.1s;font-size:13px}.context-menu ul>li:hover{color:#fff;background-color:#007bff;border-radius:2px}.fa,.fas{margin-right:4px}button:focus{box-shadow:none!important}.Calender_Pick .fc-header-toolbar{display:flex;flex-direction:column;display:flex;flex-direction:column;margin-bottom:0!important}.Calender_Pick .fc-left{width:100%;height:35px;display:flex;justify-content:flex-start;align-items:flex-start}.Calender_Pick .fc-left h2{font-weight:600;font-size:18px}.Calender_Pick .fc-center{position:relative;height:45px;width:100%}.Calender_Pick .fc-center button{transform:translateY(0);position:absolute;top:0;height:35px;left:0;width:100px;border-radius:50px;background:linear-gradient(180deg,#fc7721 0,#f9501e 100%)!important;border:0;font-size:13px!important}.Calender_Pick .fc-button-group button,.Calender_Pick .fc-right button{background:linear-gradient(180deg,rgb(237 28 36) 0,rgb(237 28 36 / 79%) 100%)!important}.Calender_Pick .fc-right{width:100%;height:45px;display:flex;align-items:flex-start;justify-content:space-between}.Calender_Pick .fc-right button{border:0;height:35px;width:100px;border-radius:50px;opacity:1;font-size:13px!important}.Calender_Pick .fc-button-group{height:35px;border-radius:50px}.Calender_Pick .fc-button-group button{border:0;display:flex;align-items:center;justify-content:center;width:60px!important}.Calender_Pick .fc-day-grid-container{height:auto!important;border-bottom:1px solid #ddd}.Calender_Pick .fc-view-container .fc-head-container{color:#ed1c24!important}div.modal.edit-form.Modal_Show{display:flex!important;align-items:center;justify-content:center}.edit-form .modal-content{width:800px}.edit-form .modal-content .modal-body{border-radius:0}.edit-form .modal-content #myForm .form-group label{padding:0;font-size:16px}.edit-form .modal-content #myForm .form-group #event-title{padding:10px!important;font-size:15px}.edit-form .modal-content .modal-footer button{height:35px;display:flex;align-items:center;justify-content:center;border-radius:50px;background:linear-gradient(180deg,#fc7721 0,#f9501e 100%)!important;border:0;letter-spacing:1px}#err-messages{display:none;text-align:center}#submit-button{display:flex!important;align-items:center!important;justify-content:center!important;border-radius:50px!important;border:0!important;letter-spacing:1px!important}.addMoreBtn1{padding:4px!important;width:60px;letter-spacing:0;font-size:15px!important;position:relative;top:11px;border:1px solid #ed1c24!important;color:#fff!important}.jconfirm-content-pane{text-align:center!important}.jconfirm-buttons{margin-right:40%!important}.fc .fc-row .fc-content-skeleton table,.fc .fc-row .fc-content-skeleton td,.fc .fc-row .fc-helper-skeleton td{padding:0!important}.Calender_Pick .fc-center{display:none}.icheck-primary>input:first-child:checked+input[type=hidden]+label::before,.icheck-primary>input:first-child:checked+label::before{background-color:#ed1c24;border-color:#ed1c24}[class*=icheck-]>input:first-child+input[type=hidden]+label::before,[class*=icheck-]>input:first-child+label::before{content:"";display:inline-block;position:absolute;width:22px;height:22px;border:1px solid #ed1c24;border-radius:0;margin-left:2px}.profile-dsd label::before,label::after{position:absolute;top:-2px;left:1px;display:block;width:0!important;height:0!important}.form-group label{font-weight:600;letter-spacing:.010em;font-size:15px;margin-bottom:5px}.cardak .table{width:65%;max-width:65%;margin-bottom:0!important}.getdatespecificdatetime{background:green; border-radius:10px; width:210px; padding:10px; display:flex; text-align:center; font-size:12px; font-weight:600; margin-bottom:5px; flex-direction: row; justify-content: space-between; align-items: baseline;}.getdatespecificdata{display:inline-block; margin-bottom:10px; background:#efaf41; padding:10px; border-radius:15px; width: 100%;}
.jconfirm-title-c {display: none !important;}
.jconfirm-buttons {width: 100% !important; display: flex !important; float: none !important; text-align: center !important; justify-content: center !important; align-items: center !important;}
</style>
<link rel='stylesheet'href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
    $(function() {
        $("#starting_date").datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            immediateUpdates: true,
            todayHighlight: true,
            startDate:'+0d'
        }).datepicker("setDate", "0");
        $("#specific_date").datepicker({
            multidate: true,
            format: "yyyy-mm-dd",
            immediateUpdates: true,
            todayHighlight: true,
            startDate:'+0d'
        }).datepicker("setDate", "0");
    });
});

$("#repeat_month").click(function(){
    if($("#repeat_month").is(':checked')) {
        $("#repeat_month").val("1");
    } else {
        $("#repeat_month").val("0");
    }
})

$('#submit-button').on('click', function() {
    var action_id = $('#action_id').val();
    var schedule = $(".chooseday:checked").val();
    var from_time = $('.getfromtime').val().length;
    var to_time = $('.gettotime').val().length;
    var starting_date = $('#starting_date').val().length;
    var timeZone = $("#timeZone").val();
    if (schedule === undefined || schedule.trim() === '') {
        $('#validateerrschedule').text('Please enter schedule');
        setInterval(function () {
            $('#validateerrschedule').empty();
        }, 5000);
    /*} else if(from_time === 0){
        $('#validateerrschedule').text('Please enter from time');
        setInterval(function () {
            $('#validateerrschedule').empty();
        }, 5000);
    } else if(to_time === 0){
        $('#validateerrschedule').text('Please enter to time');
        setInterval(function () {
            $('#validateerrschedule').empty();
        }, 5000);*/
    } else if(timeZone === ''){
        $('#validateerrschedule').text('Please enter your timezone');
        setInterval(function () {
            $('#validateerrschedule').empty();
        }, 5000);
    } else if(starting_date === 0){
        $('#validateerrschedule').text('Please enter start date');
        setInterval(function () {
            $('#validateerrschedule').empty();
        }, 5000);
    } else {
        var date1 = new Date('1970-01-01T'+$('.getfromtime').val()+':00');
        var date2 = new Date('1970-01-01T'+$('.gettotime').val()+':00');
        var differenceiInms = date2 - date1;
        //var differenceInDays = Math.floor(differenceiInms / (1000 * 60));
        //if(differenceInDays > 60) {
            //$('#validateerrschedule').text('Please select 60 minutes interval slot');
        //} else {
            var form_data = $('#myForm').serialize();
            $.ajax({
                type:"post",
                url:"<?php echo base_url()?>user/Dashboard/create_availability",
                data: form_data,
                success:function(returndata) {
                    if(returndata == 1) {
                        $.confirm({
                            title: '',
                            content: "Data added successfuly",
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
            return false;
        //}
    }
})

function updateschedule(slotid) {
    var slotid = slotid;
    alert(slotid);
}

function closeAvail() {
    location.reload();
}

<?php
for($i = 0; $i < count($data); $i++) {
    $value = explode('.', $data[$i]); ?>
    $("#checkboxPrimary<?= $value[0]?>").click(function(){
        if($("#checkboxPrimary<?= $value[0]?>").is(':checked')) {
            $("#calenderDays<?= $value[0]?>").css("display", "inline-block");
        } else {
            $("#calenderDays<?= $value[0]?>").css("display", "none");
        }
    })
    $("#add_row_<?= $value[0]?>").click(function() {
        var y = document.getElementById('clonetable_feedback<?= $value[0]?>');
        var new_row = y.rows[0].cloneNode(true);
        var len = y.rows.length;
        new_number=Math.round(Math.exp(Math.random()*Math.log(10000000-0+1)))+0;
        var inp0 = new_row.cells[0].getElementsByTagName('input')[0];
        inp0.value = '';
        inp0.id = 'service'+(len+1);
        var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
        inp1.value = '';
        inp1.id = 'service'+(len+1);
        var submit_btn =$('#submit').val();
        y.appendChild(new_row);
    })
<?php } ?>

function remove(row) {
    var y=document.getElementById('purchaseTableclone'+row);
    var len = y.rows.length;
    console.log(len);
    if(len>1) {
        var i= (len-1);
        document.getElementById('purchaseTableclone'+row).deleteRow(i);
    }
}

$("#add_rowdate1").click(function() {
    var y = document.getElementById('clonetable_feedbackdate1');
    var new_row = y.rows[0].cloneNode(true);
    var len = y.rows.length;
    new_number=Math.round(Math.exp(Math.random()*Math.log(10000000-0+1)))+0;
    var inp0 = new_row.cells[0].getElementsByTagName('input')[0];
    inp0.value = '';
    inp0.id = 'service'+(len+1);
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.value = '';
    inp1.id = 'service'+(len+1);
    var submit_btn =$('#submit').val();
    y.appendChild(new_row);
})

function removesdate1(row) {
    var y=document.getElementById('purchaseTableclonedate1');
    var len = y.rows.length;
    console.log(len);
    if(len>1) {
        var i= (len-1);
        document.getElementById('purchaseTableclonedate1').deleteRow(i);
    }
}

$('#submit_buttonDate').on('click', function() {
    var specificdate = $('#specific_date').val().length;
    var fromtimedate = $('.getfromtimedate').val().length;
    var totimedate = $('.gettotimedate').val().length;
    var timeZone = $("#timeZonedate").val();
    if(specificdate === 0) {
        $('#errspecificdate').text('Please enter starting date');
        setInterval(function () {
            $('#errspecificdate').empty();
        }, 5000);
    } /*else if(fromtimedate === 0){
        $('#errfromtimedate').text('Please enter from time');
        setInterval(function () {
            $('#errfromtimedate').empty();
        }, 5000);
    }*/
    else if(timeZone === ''){
        $('#validateerrschedule').text('Please enter your timezone');
        setInterval(function () {
            $('#validateerrschedule').empty();
        }, 5000);
    } else if(totimedate === 0){
        $('#errtotimedate').text('Please enter to time');
        setInterval(function () {
            $('#errtotimedate').empty();
        }, 5000);
    } else {
        var form_datadate = $('#myDateform').serialize();
        $.ajax({
            type:"post",
            url:"<?php echo base_url()?>user/Dashboard/createdatewiseavailability",
            data: form_datadate,
            success:function(returndata) {
                if(returndata == 1) {
                    $.confirm({
                        title: '',
                        content: "Data added successfuly",
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
        return false;
    }
})

function deletedata(id) {
    var slotid = id;
    $.confirm({
	    title: 'Confirm!',
	    content: confirmTextDelete,
	    buttons: {
	        confirm: function () {
                var base_url = $('#base_url').val();
                $.ajax({
                    url: "<?php echo base_url()?>user/Dashboard/deletedatewiseavailability",
                    method:"POST",
                    data: {slotid: slotid},
                    beforeSend : function(){
                        $("#loader").show();
                    },
                    success:function(data) {
                        if (data == '1'){
                            $.confirm({
                                title: '',
                                content: "You already have a booking for this slot",
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
                        } else if(data == '2') {
                            $.confirm({
                                title: '',
                                content: "Data deleted successfuly",
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
                })
	        },
	        cancel: function () {
	            location.reload();
	        },
	    }
	});
}

</script>