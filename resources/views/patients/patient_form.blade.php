<?php
//session_start();
//$patient_id = get_id_name($_SESSION['finance_patient_id'], "Patient_Number", "Patient_Id", "demographics");
//$episodeId = $_POST['episode_id'];

//this is for checking if consultation was paid
//$queryPaidCons = mysql_query("select * from patient_episodes where Episode_Id=$episodeId and Co_Payment='Paid'");
?>
<!-- Row -->
<div class="row-fluid">
    <!-- Column -->
    <div class="span4">
        <div id="number" style="display: none">
            <!-- Group -->
            <div class="control-group">
                <label class="control-label" for="insurance_number">Insurance Number</label>

                <div class="controls">
                    <select name="insurance_number" id="insurance_number" class="compulsory" onchange="get_details();
                            show('details');
                            hide('number')">
                                <?php
                                //echo custom_dropdown("insurance_members", "Insurance_Id", "Insurance_Number", "insurance number");
                                ?>
                    </select>
                </div>
            </div>
            <br/>
        </div>
        <!--This is the div for the insurance details in case they exist-->
        <div id="details"></div>

        <div id="insurance">
            <!-- Group -->
            <div class="control-group">
                <label class="control-label" for="firstname"><?php echo $translate->_('first_name'); ?></label>
                <div class="controls">
                    <input type="text" class="compulsory span10" placeholder="Christian name e.g. Fred" id="first_name" name="first_name"/>
                </div>
            </div>
            <!-- // Group END -->
            <!-- Group -->
            <div class="control-group">
                <label class="control-label" for="lastname"><?php echo $translate->_('last_name'); ?></label>
                <div class="controls">
                    <input type="text" placeholder="Surname e.g. Asiimwe" class="compulsory span10" id="last_name" name="last_name"/>
                </div>
            </div>
            <!-- // Group END -->

            <!-- Group -->
            <div class="control-group">
                <label class="control-label" style="display: inline" for="village">Gender</label> &nbsp;&nbsp;&nbsp;
                <div class="controls" style="display: inline">
                    <input type="radio" name="sex" class="compulsory checkbox" value="Male"/>
                    Male
                    <input type="radio" name="sex" class="compulsory checkbox" value="Female"/>
                    Female
                </div>
            </div>
            <!-- // Group END -->
            <!-- Group -->
            <div class="control-group">
                <label class="control-label" for="village"><?php echo $translate->_('National ID Number'); ?></label>

                <div class="controls">
                    <input class="span10" id="national_id" placeholder="" name="national_id" type="text"/></div>
            </div>
            <!-- // Group END -->
        </div>

        <div class="control-group">
            <label class="control-label" for="datebirth"><?php // echo $translate->_('date_of_birth'); ?></label>
            <div class="controls">
                <div class="input-append date">
                    <input class="span12 compulsory" required onchange="calculate_age();"  type="text" id="birthdate" name="birthdate"/>
                    <span class="add-on" id="start_date_trigger"><i class="icon-calendar"></i></span>
                </div>

                <script type="text/javascript">//<![CDATA[
                    Calendar.setup({
                        inputField: "birthdate",
                        trigger: "start_date_trigger",
                        onSelect: function () {
                            this.hide();
                            calculate_age();
                            calculate_months();
                        },
                        dateFormat: "%d/%m/%Y"
                    });
                    //]]>
                </script>

            </div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <label class="control-label" style="display: inline; font-weight: bold" for="village">Age</label> &nbsp;&nbsp;
            <div class="controls" style="display: inline">
                Years&nbsp;<input type="number" onfocus="calculate_age();" min="0" name="age" id="age" readonly class="compulsory span3" size="7"/>
                Months&nbsp;<input name="agemonths" class="span3" onfocus="calculate_months();" type="text" id="agemonths" size="7"/>
            </div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <label class="control-label" for="village"><?php // echo $translate->_('Marital Status'); ?></label>

            <div class="controls">
                <input type="radio" name="maritalstatus" class="compulsory checkbox" value="Single"/>
                Single
                <input type="radio" name="maritalstatus" class="compulsory checkbox" value="Married"/>
                Married
                <input type="radio" name="maritalstatus" class="compulsory checkbox" value="Widowed"/>
                Widowed
                <input type="radio" name="maritalstatus" class="compulsory checkbox" value="Other"/>
                Other

            </div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">

            <label class="control-label"><?php // echo $translate->_('Religion'); ?></label>

            <div class="controls">
                <select class="compulsory span9" name="religion" id="religion" required>
                </select>
                <a href="#modal-religion" data-toggle="modal"><font size="1">Add new</font></a>
            </div>
        </div>
        <!-- // Group END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span4">
        <!-- Group -->
        <div class="control-group">
            <label class="control-label" for="village"><?php echo $translate->_('Occupation'); ?></label>
            <div class="controls">
                <select class="compulsory span9" name="occupation" id="occupation">
                </select>
                <a href="#modal-occupation" data-toggle="modal"><font size="1">Add new</font></a>
            </div>
        </div>
        <!-- // Group END -->
        <!-- Group -->
        <div class="control-group">
            <label class="control-label" for="village"><?php echo $translate->_('Next of Kin'); ?></label>

            <div class="controls"><input class="span10" onchange="show('next_kin_div');" id="nextkin" name="nextkin" type="text"/></div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div id="next_kin_div" style="DISPLAY: none">
            <div class="control-group">
                <label class="control-label"
                       for="nextrelation"><?php echo $translate->_('Relationship to next of kin'); ?></label>

                <div class="controls" class="span10">
                    <select name="nextrelation" id="nextrelation" width="14px">
                        <option value="">Select Relationship</option>
                        <option value="Aunt">Aunt</option>
                        <option value="Brother">Brother</option>
                        <option value="Daughter">Daughter</option>
                        <option value="Father">Father</option>
                        <option value="Grand Father">Grand Father</option>
                        <option value="Grand Mother">Grand Mother</option>
                        <option value="Husband">Husband</option>
                        <option value="Mother">Mother</option>
                        <option value="Other">Other</option>
                        <option value="Sister">Sister</option>
                        <option value="Son">Son</option>
                        <option value="Uncle">Uncle</option>
                        <option value="Wife">Wife</option>

                    </select></div>
            </div>
        </div>
        <!-- // Group END -->


        <!-- Group -->
        <div class="control-group">
            <label class="control-label" for="village"><?php echo $translate->_('Mobile Number'); ?></label>

            <div class="controls"><input class="span10" id="mobilenumber" placeholder="Eg: 07xx123456"
                                         name="mobilenumber" type="text"/></div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <label class="control-label" for="village"><?php echo $translate->_('Mobile Owner'); ?></label>
            <div class="controls">
                <input type="radio" name="mobileowner" onfocus="hide('other_phone_owner_div');" class="checkbox" value="Self"/>
                Self
                <input type="radio" name="mobileowner" onfocus="show('other_phone_owner_div');" class="checkbox"  value="Other"/>
                Other
            </div>
        </div>
        <!-- // Group END -->
        <!-- Group -->
        <div class="control-group" id="other_phone_owner_div" style="DISPLAY: none">
            <label class="control-label">Owner's Name</label>
            <div class="controls">
                <input type="text" class="span10 compulsory" name="other_phone_owner" id="other_phone_owner"/>
            </div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <label class="control-label">Name of LC1 Chairman</label>

            <div class="controls">
                <input type="text" class="span10" name="chairman_name" id="chairman_name"/>
            </div>
        </div>
        <!-- // Group END -->
        <!-- Group -->
        <div class="control-group">
            <label class="control-label">Any Contact in <?php echo HOSP_NAME; ?></label>

            <div class="controls">
                <input type="radio" class="compulsory" onfocus="show('my_div');" name="any_contact" id="any_contact"
                       value="Yes"/>&nbsp;Yes
                <input type="radio" class="compulsory" onfocus="hide('my_div');" name="any_contact" id="any_contact"
                       value="No"/>&nbsp;No
            </div>
        </div>
        <!-- // Group END -->

        <div id="my_div" style="DISPLAY: none">
            <!-- Group -->
            <div class="control-group">
                <label class="control-label">Name of contact in <?php echo HOSP_NAME; ?></label>

                <div class="controls">
                    <input type="text" class="span10 compulsory" name="kisiizi_contact_name" id="kisiizi_contact_name"/>
                </div>
            </div>
            <!-- // Group END -->
        </div>

        <!-- Group -->
        <div class="control-group">
            <label class="control-label" for="district"><?php echo $translate->_('Patient Category'); ?></label>
            <div class="controls">
                <select class="span10 compulsory" required name="patient_category" id="patient_category">
                    <?php
                    $cat_query = mysql_query("select * from patient_category order by Category_Name");
                    echo '<option value="">select category</option>';
                    while ($cat_row = mysql_fetch_array($cat_query)) {
                        if ($cat_row[1] == "Public"):
                            echo "<option value='" . $cat_row[0] . "' selected='selected'>" . $cat_row[1] . "</option>";
                        endif;
                        $cat_dropdown .= "<option value='" . $cat_row[0] . "'>" . $cat_row[1] . "</option>";
                    }
                    echo $cat_dropdown;
                    ?>
                </select><br />
                <a href="#modal-patient_category" data-toggle="modal"><font size="1">Add new</font></a>
            </div>
        </div>
        <!-- // Group END -->

    </div>
    <!-- // Column END -->

    <div class="span4">
        <!-- Group -->
        <div class="control-group">
            <label class="control-label">Language Preference</label>

            <div class="controls">
                <select name="language" required class="compulsory span9">
                    <!--<option value="">-- select --</option>-->
                    <option value="vern" selected>Vernacular</option>
                    <option value="eng">English</option>
                </select>
            </div>
        </div>
        <!-- // Group END -->
        <!-- Group -->
        <div class="control-group">
            <!--<label class="control-label">Patient Number</label>-->

            <div class="controls">
                <input readonly class="compulsory span8" value="<?php echo $newPatId; ?>" id="patientnumber"
                       name="patientnumber" type="hidden"/>
            </div>
        </div>
        <!-- // Group END -->

        <input type="hidden" name="staff_id" value="<?php echo $_SESSION['user_id']; ?>">
        
        <?php if(isset($_GET["pat_id"])){ ?>
        
        <input type="hidden" name="from_pay_roll" value="0">
        
        <div class="control-group">
            <label class="control-label" for="position">Position</label>
            <div class="controls">
                <select class="span9 compulsory" required name="position" id="position">
                <?php echo custom_dropdown("staff_positions", 'Position_Id', 'Position_Name', ""); ?>
                </select>
                <a href="#modal-position" data-toggle="modal"><font size="1">Add new</font></a>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="department">Department</label>
            <div class="controls">
                <select class="span9 compulsory" required name="department" id="department">
                <?php echo custom_dropdown("departments", 'Department_Id', 'Department_Name', ""); ?>
                </select>
                <a href="#modal-department" data-toggle="modal"><font size="1">Add new</font></a>
            </div>
        </div>

       <?php } ?>
        <!-- Group -->
        <!-- To be used in Kisiizi -->
        <!---->
        <div class="control-group">
            <label class="control-label" for="district">Residence</label>
            <div class="controls">
                <select class="span9 compulsory" required name="district_id" id="district_id">
                </select>
                <a href="#modal-district" data-toggle="modal"><font size="1">Add new</font></a>
            </div>
        </div>

        <span id="wait_1" style="display: none;">
            <img alt="Please Wait" src="pages/patients/ajax-loader.gif"/>
        </span>
        <span id="result_1" style="display: none;"></span>

        <span id="wait_2" style="display: none;">
            <img alt="Please Wait" src="pages/patients/ajax-loader.gif"/>
        </span>
        <span id="result_2" style="display: none;"></span> 

        <span id="wait_3" style="display: none;">
            <img alt="Please Wait" src="pages/patients/ajax-loader.gif"/>
        </span>
        <span id="result_3" style="display: none;"></span> 

        <span id="wait_4" style="display: none;">
            <img alt="Please Wait" src="pages/patients/ajax-loader.gif"/>
        </span>
        <span id="result_4" style="display: none;"></span>


    </div>

</div>

<!--
<script>
    function calculate_months() {
        var bod = $("#birthdate").val();
        var bod = bod.split("/");
        var monthBirth = bod[1];
        var today = new Date();
        var monthToday = today.getMonth() + 1; //January is 0!
        if (monthToday > monthBirth) {
            var months = monthToday - monthBirth;
        } else if (monthToday == monthBirth) {
            var months = 0;
        } else if (monthToday < monthBirth) {
            var months = monthToday - monthBirth;
            months = months + 12;
        }
        if (months < 10) {
            months = '0' + months
        }
        $("#agemonths").val(months);
    }
</script>
-->
