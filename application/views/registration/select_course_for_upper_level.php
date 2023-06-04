<?php
if( $this->session->userdata('userType') == 1 && $this->session->userdata('registrationType') == ''){
    $this->session->set_userdata('userType', 6);
}
// print_r($this->session->userdata('user_id')) ;die();
 // if (isset($_POST['submit']) && $_POST['submit'] = 'submit')
 // {
 //    //echo "<pre>";print_r($_POST);die();
 //    $course_data['courses'] = $_POST['course'];
 //    $course_data['totalCost'] = $_POST['totalCost'];
 //    $course_data['token'] = $_POST['token'];
 //    $course_data['paymentType'] = $_POST['paymentType'];
 //    $course_data['children'] = $_POST['children'];
 //    $this->session->set_userdata($course_data);
 //    redirect('/paypal');
 // }

?>
<?php echo $header; ?>
<?php echo $header_sign_up; ?>  
<style>
    .direct_debit_1{
        background: #337ab7;
        height: 76px;
        font-size: 16px;
        color: #fff;
        padding-top: 25px;
    }
    .direct_deposit_1{
        background: #b3a2c7;
        height: 76px;
        font-size: 16px;
        color: #fff;
        padding-top: 25px;
    }

    .direct_debit_2{
        background: #337ab7;
        color: #fff; 
        height: 76px;
        margin-left: 2px;       
    }

    .direct_debit_2 p{
        color: #fff;       
    }
    .direct_debit_3{
        background: #337ab7;
        color: #fff; 
        height: 76px;
        margin-left: 2px;  
        padding-top: 25px;     
    }
    .direct_deposit_3{
        background: #b3a2c7;
        color: #fff; 
        height: 76px;
        margin-left: 2px;  
        padding-top: 25px;     
    }

    .no_direct_debit .direct_debit_1{
        background: #d99694;
        color: #fff; 
        height: 76px;
        padding-top: 25px;
    }
    .no_direct_debit .direct_debit_2{
        background: #d99694;
        color: #fff; 
        height: 76px;
        margin-left: 2px; 
    }
    .no_direct_debit .direct_debit_3{
        background: #d99694;
        color: #fff; 
        height: 76px;
        margin-left: 2px; 
        padding-top: 25px;
    }
    .direct_deposits .direct_debit_2{
        background: #b3a2c7;
        color: #fff; 
        height: 76px;
        margin-left: 2px;   
        padding-top: 25px;    
    }

    .hover_set .tooltiptext {
        visibility: hidden;
        width: 315px;
        background-color: #c8d9db;
        color: #100101;
        text-align: center;
        border-radius: 1px;
        padding: 7px 0;
        margin-top: -137px;
        margin-left: -119px;
        position: absolute;
        z-index: 1;

    }

    .hover_set:hover .tooltiptext {
        visibility: visible;
    }

    .course_checkbox{
        position:absolute !important;
        bottom: inherit !important;
        left: 13px !important;
        top: 10px;
    }
    .course_image{
        height: 200px;
        width: 200px;
    }
    .cost_box{
        position: absolute;
        bottom: 5px;
        height: 50px;
        width: 51px;
        border-radius: 50%;
        padding-top: 17px;
        padding-left: 10px;
        background-color: #b0e7fa;
    }
    .cost_box_second{
        height:50px;
        width:51px;
        border-radius:50%;
        padding-top: 14px;
        padding-left: 5px;
        background-color:#b0e7fa;
        bottom: 0px;
        position: absolute;
    }
    .course_one_serial{
        border: 1px solid #b6b6b6;
        padding: 15px;
        box-shadow: 0px 0px 10px #b6b6b6;
        border-radius: 10px;
        text-align:left;
        min-height:325px;
        cursor:pointer;
    }
    .course_two_serial{
        border: 1px solid #b6b6b6;
        box-shadow: 0px 0px 10px #b6b6b6;
        border-radius: 10px;
        text-align:left;
        min-height:325px;
        cursor:pointer;
    }
    .course_three_serial{
        border: 1px solid #b6b6b6;
        padding: 15px;
        box-shadow: 0px 0px 10px #b6b6b6;
        border-radius: 10px;
        text-align:left;
        min-height:325px;
    }
    .course_without_image{
        border: 1px solid #b6b6b6;
        box-shadow: 0px 0px 10px #b6b6b6;
        border-radius: 10px;
        text-align:left;
        min-height:325px;
        padding-bottom:14px;
        
    }
    .without_image_course_name{
        font-family: century-gothic, sans-serif;
        font-weight:bold;
        font-size:16px;
        text-align: center;
    }
    .without_image_course_grade{
        font-family: century-gothic, sans-serif;
        font-weight:bold;
        font-size:16px;
        text-align: center;
        color:#d63832;
    }
    .grade_row{
        position: absolute;
        top: 75px;
    }
    .course_infos{
        position: absolute;
        right: 15px;
        bottom: -125px;
    }

    .tooltiptext {
        visibility: hidden;
        width: 315px;
        background-color: #c8d9db;
        color: #100101;
        text-align: center;
        border-radius: 1px;
        padding: 7px 0;
        left: -100px;
        position: absolute;
        z-index: 1;
        border: 2px solid #938b8b;
        text-align: justify;
        padding: 4px;

    }


</style>
<?php //echo "<pre>";print_r($user_info);die(); 

    $end_subs = $user_info[0]['end_subscription'];
    $payment_status = $user_info[0]['payment_status'];
    $subscription_type = $user_info[0]['subscription_type'];
    if (isset($end_subs)) {
        $d1 = date('Y-m-d',strtotime($end_subs));
        $d2 = date('Y-m-d');
        $diff = strtotime($d1) - strtotime($d2);
        $r_days = floor($diff/(60*60*24));
    }
    
?>

<div class="container">
    <div class="row">
        <p class="alert alert-success" id="help_denied" style="margin: 0 28%;"  > 
            <b> Before you select the subject please watch the video help. </b>
        </p>
        <div class="col-sm-12">
            <h6 style="color: #053167;font-weight: 600;text-decoration: underline;text-align: center;padding-top: 15px;">Select Your Course</h6>
            <!--<div class="disabled_option_error text-danger" style="font-size: 18px;font-weight: bold;text-align: center;margin-top: 5px;"></div>-->
            <form class="ss_form text-center form-inline" method="post" action="">
                <div class="ss_top_s_course">

                    <div class="row" style="display:flex;justify-content:center;">
                      <?php 
                        
                        $i=1;
                        $j=1;
                        $k=2;
                        $l=3;
                        foreach($courses as $course_info){ ?>

                            <div class="col-md-4" style="margin-top: 15px;">
                                <div style="position:relative;">
                                    <input type="checkbox" name="course[]" id="course_<?php echo $i; ?>" class="course_checkbox"  data-id="<?=$i;?>" value="<?php echo $course_info['id'] ?>" data="<?php echo $course_info['courseCost'] ?>" <?php if(in_array($course_info['id'],$register_course)){echo "checked";} ?>>
                                    <label for="course_<?php echo $i; ?>" style="display: block;">
                                        <div class="course_one_serial selected_course selected_course<?=$i;?>" data-id="<?=$i;?>">
                                            <?php if(in_array($course_info['id'],$register_course)){ ?>
                                            <i class="fa fa-check" style="color:green;font-size:18px;bottom:5px;"></i>
                                            <?php }?>
                                            <div class="row">
                                            <div class="col-md-12" style="padding-right:0px;padding-left:8px;">
                                            <?php $course_name = preg_split('#<p([^>])*>#',$course_info['courseName']);
                                                //echo "<pre>";print_r(array_filter($course_name));die();
                                                $course_name = array_filter($course_name);
                                                $course = '';
                                                $grade = '';
                                                if(isset($course_name[0])){
                                                    $course = $course_name[0];
                                                }else if(isset($course_name[1])){
                                                    $course = $course_name[1];
                                                }
                                                if(isset($course_name[2])){
                                                    $grade =  $course_name[2];
                                                }
                                                ?>
                                                <br>
                                                <p class="courseName<?=$i;?>" style="font-family: century-gothic, sans-serif;font-weight:bold;font-size:16px;text-align: center;"><?php echo $course?></p>
                                                <br>
                                                <br>
                                                <p class="gradeName<?=$i;?> grade_row" style="font-family: century-gothic, sans-serif;font-weight:bold;font-size:14px;text-align: left;color:#d63832;"><?php echo $grade?></p>
                                                
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3" style="min-height:175px;">
                                                    <div class="cost_box cost_box_no<?=$i;?>" style="position: absolute; bottom:-57px; height: 50px;width: 51px;border-radius: 50%;padding-top: 16px;padding-left: 10px;background-color: #b0e7fa;">$<?=$course_info['courseCost']?></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div>
                                                        <img src="assets/course_image/<?=$course_info['image_name']?>" class="course_image_show_<?=$i?>" style="height: 174px;width: 185px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                      <?php $i++;}?>

                    </div>
                    <br><br><br><br><br>


                </div>

                <div class="ss_bottom_s_course">
                    <div class="form-group">
                        <label class="label-inline">Number of children</label>  

                        <input type="Number" id="children" class="form-control ss_number" name="children" value='1' onclick="getChildreen();" onkeyup="getChildreen();" readonly>
                    </div>
                    <?php if ($this->session->userdata('registrationType') != 'trial') { ?>
                        <?php if (!empty($refferalUser)) { ?>
                            <div class="select active r4" data="4" checked onclick="myR4Func();">3 Months</div>
                            <!--<div class="select active r2" data="2" checked onclick="myR2Func();">6 Months</div>-->
                            <div class="select r2" data="2" onclick="myR2Func();">6 Months</div>
                            <div class="select r3" data="3" onclick="myR3Func();">1Year</div>
                            
                        <?php }else{ ?>
                            <div class="select active r1" data="1" checked onclick="myR1Func();">Per month</div>
                            <div class="select  r4" data="4"  onclick="myR4Func();">3 Months</div>
                            <div class="select  r2" data="2"  onclick="myR2Func();">6 Months</div>
                            <div class="select r3" data="3" onclick="myR3Func();">1Year</div>
                        <?php } ?>

                        <div class="total">Total<br/><b id="dolar">$0</b></div>
                        <input type="hidden" name="paymentType" value="" id="paymentType" />
                        <input type="hidden" name="totalCost" value="" id="totalCost" />
                    <?php } ?>
                </div>
                   <br> 
                <?php if ($this->session->userdata('registrationType') != 'trial') { ?>
                <div class="text-center" style="padding: 15px 185px;"> 
                    <button class="btn btn-primary" style="margin-right: 50px;">Choose Option</button>
                    <br>
                    <br>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-2 direct_debit_1">Option 1</div>
                        <div class="col-md-7 direct_debit_2">
                            <p style="font-weight: bold;">Direct Debit</p>
                            <p>Your membership will be renewed automatically. You may cancel anytime</p>
                        
                        </div>
                        <div class="col-md-2 direct_debit_3">
                            <input type="checkbox" class="ck_direct_debit payment_process" id="ck_direct_debit" name="direct_debit" value="1">
                        </div>
                    </div>
                    <div class="row no_direct_debit" style="margin-bottom: 5px;">
                        <div class="col-md-2 direct_debit_1">Option 2</div>
                        <div class="col-md-7 direct_debit_2">
                            <p style="font-weight: bold;">No direct debit</p>
                            <p>One time payment without no automatic renewel.</p>
                        </div>
                        <div class="col-md-2 direct_debit_3">
                            <input type="checkbox" class="ck_no_direct_debit payment_process" id="ck_no_direct_debit" name="no_direct_debit" value="2">
                        </div>
                    </div>
                    <?//php if($direct_deposit_by_contry == 1) { ?>
                    <div class="row direct_deposits">
                        <div class="col-md-2 direct_deposit_1">Option 3</div>
                        <div class="col-md-7 direct_debit_2">
                            <p style="font-weight: bold;">Direct Deposit</p>
                        </div>
                        <div class="col-md-2 direct_deposit_3">
                            <input type="checkbox" class="ck_direct_deposit payment_process" id="ck_direct_deposit" name="direct_deposit" value="3">
                        </div>
                    </div>
                    <?//php } ?>
                    <div class="payment_option_error text-danger" style="font-size: 18px;font-weight: bold;text-align: left;margin-top: 5px;"></div>
                </div>
                <?php } ?>
                <?php if ($this->session->userdata('registrationType') != 'trial') { ?>
                    <!-- <p class="warnin_text">“Your membership will be renewed automatically. You may cencel anytime”</p> -->
                <?php } else {
                    echo '<br>';
                } ?>

                <input type="hidden" value="1" name="token">    
                <div class="text-center" > 
                    <button type="submit" class="btn btn_next" id="must_select" name="submit" value="submit"> 
                        <img src="<?php echo base_url(); ?>assets/images/icon_save.png"/>Save & Proceed
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
<?php echo $footer; ?>

<script>
$(document).ready(function(){
   courseClick(); 
    $('.course_infos').mouseenter(function(){
        $('.tooltiptext').css('visibility','visible');
    });
    $('.course_infos').mouseleave(function(){
        $('.tooltiptext').css('visibility','hidden');
    });
});

<?php if ($this->session->userdata('registrationType') != 'trial') { ?>

    $('#must_select').click(function(){
        if ($('#ck_direct_debit').prop('checked')) {
            var result = "OK";
        }else if ($('#ck_no_direct_debit').prop('checked')) {
            var result = "OK";
        }else if ($('#ck_direct_deposit').prop('checked')) {
            var result = "OK";
        }else{
            var result = "NO";
        }
  
        if (result == "NO") {
            $('.payment_option_error').html('Please select the payment option first !!');
            // alert('Please select the payment option first !!')
            return false;
        }else{
            $('.payment_option_error').html('');
            return true;
        }
    })
    
<?php } ?>


<?php if (!empty($refferalUser)) { ?>
    myR4Func();
<?php }else{ ?>
     myR1Func();
<?php } ?>

<?php if ($this->session->userdata('registrationType') != 'trial') { ?>

        if (true) {}
        function myR1Func() {
            var davalue = $('.r1').attr('data');
            var Period = $("#paymentType").val();
            var totalCostWithPeriod = $("#totalCost").val();
            document.getElementById("paymentType").value = davalue;
            countTotal(Period,totalCostWithPeriod,1);
        }
        function myR2Func() {
            var davalue2 = $('.r2').attr('data');
            var Period = $("#paymentType").val();
            var totalCostWithPeriod = $("#totalCost").val();
            document.getElementById("paymentType").value = davalue2;
            countTotal(Period,totalCostWithPeriod,6);
            
        }
        function myR3Func() {
            var davalue3 = $('.r3').attr('data');
            var Period = $("#paymentType").val();
            var totalCostWithPeriod = $("#totalCost").val();
            document.getElementById("paymentType").value = davalue3;
            countTotal(Period,totalCostWithPeriod,12);
        }
        function myR4Func() {
            
            var davalue4 = $('.r4').attr('data');
            var Period = $("#paymentType").val();
            var totalCostWithPeriod = $("#totalCost").val();
            document.getElementById("paymentType").value = davalue4;
            countTotal(Period,totalCostWithPeriod,3);
        }
        function countTotal(Period,totalCostWithPeriod,select) {
         
            <?php if(!empty($r_days)){ ?>
                var has_total_days = <?=$r_days?>;
            <?php    }else{ ?>
                var has_total_days = 0;
            <?php }?>
            
            var amountTotal = 0 ;
            var newDays = 0 ;
            if (Period == 1)
            {
                amountTotal = totalCostWithPeriod/1;
                amountTotal = amountTotal*select;
                newDays = select*30;

            }else if (Period == 2)
            {
                amountTotal = totalCostWithPeriod/6;
                amountTotal = amountTotal*select;
                newDays = select*30;
            }else if (Period == 3)
            {
                amountTotal = totalCostWithPeriod/12;
                amountTotal = amountTotal*select;
                newDays = select*30;
            }else if (Period == 4)
            {
                amountTotal = totalCostWithPeriod/3;
                amountTotal = amountTotal*select;
                newDays = select*30;
            }
            
            $('#dolar').html('$' + amountTotal);
          
            document.getElementById("totalCost").value = amountTotal;
            
        
            if(amountTotal !=0){
                if(has_total_days>newDays){
                   alert('If you buy this course then all subcription goes down with this course days ! ');
                }
            }
            
        }

        $('.ck_direct_debit').change(function(){
            if ($('#ck_direct_debit').prop('checked')) {
                $('#ck_no_direct_debit').prop('checked',false);
                $('#ck_direct_deposit').prop('checked',false);
                
            }
        })
        $('.ck_no_direct_debit').change(function(){
            if ($('#ck_no_direct_debit').prop('checked')) {
                $('#ck_direct_debit').prop('checked',false);
                $('#ck_direct_deposit').prop('checked',false);
                
            }
        })
        $('.ck_direct_deposit').change(function(){
            if ($('#ck_direct_deposit').prop('checked')) {
                $('#ck_direct_debit').prop('checked',false);
                $('#ck_no_direct_debit').prop('checked',false);
            }
        })

<?php } ?>
    var courseNumber = document.getElementsByName('course[]');
    var amit = 0;
    for (i = 1; i <= courseNumber.length; i++) {
        if ($("#course_" + i).is(":checked")) {
            amit++;
        }
    }
    
    // if (amit == 0) {
    //     $("#must_select").attr('disabled', true);
    // } else {
    //     $("#must_select").attr('disabled', false);
    // }

    function getChildreen() {
        var noOfChildreen = $('#children').val();
        if (noOfChildreen < 1) {
            document.getElementById("children").value = 1;
        }
        courseClick();
    }

    function courseClick() {

        var courseNumber = document.getElementsByName('course[]');
        var checkCourseNum = 0;
        for (i = 1; i <= courseNumber.length; i++) {
            if ($("#course_" + i).is(":checked")) {
                checkCourseNum++;
            }
        }
        
        
        var j = 0;
        var total_cost = 0;
        var is_st_colaburation = 0;
        var is_three_courses = 0;
        // var three_course_disable = 0;
        for (i = 1; i <= courseNumber.length; i++) {
            if ($("#course_" + i).is(":checked")) {
              
                var course_cost = $("#course_" + i).attr('data');
                var course_val = $("#course_" + i).attr('value');
                
                var total_cost = parseInt(total_cost) + parseInt(course_cost);
                j++;
            }
        }
        
        var children = $('#children').val();
        var total_amount = total_cost * children;

      <?php if ($this->session->userdata('registrationType') != 'trial') { ?>
        
        var Period = $("#paymentType").val();
        <?php if(!empty($r_days)){ ?>
            var has_total_days = <?=$r_days?>;
        <?php    }else{ ?>
            var has_total_days = 0;
        <?php }?>
       
        if (Period == 1)
        {
            total_amount = total_amount*1;
            newDays = 1*30;
        }else if (Period == 2)
        {
            total_amount = total_amount*6;
            newDays = 6*30;
        }else if (Period == 3)
        {
            total_amount = total_amount*12;
            newDays = 12*30;
        }else if (Period == 4)
        {
            total_amount = total_amount*3;
            newDays = 3*30;
        }
        
            $('#dolar').html('$' + total_amount);
            document.getElementById("totalCost").value = total_amount;
            // if(amountTotal !=0){
                if(has_total_days>newDays){
                //    alert('You Already have '+newDays+' days ! ');
                }
            // }
      <?php } ?>
      
        
       for (s = 1; s <= courseNumber.length; s++) {
            if ($("#course_" + s).is(":checked")) {
                var course_value = $("#course_" + s).attr('value');
                if(course_value == 62){
                    // alert(s);
                }
            }
             if(!$("#course_" + s).is(":checked")){
                var course_value = $("#course_" + s).attr('value');
                if(course_value == 62){
                    $("#course_7").attr('disabled',false);
                }
                if(course_value == 63){
                    $("#course_6").attr('disabled',false);
                }
            }
        }
    }
</script>
<script>
    $(document).ready(function(){
        $('#help_denied').fadeOut(15000);

        $('.course_checkbox').click(function(){
       
          var get_id =$(this).attr('data-id');
          if($('#course_'+get_id).is(':checked')){
             var course_val= $('#course_'+get_id).val();
             var course_val = $('#course_'+get_id).attr('data');
             
             if(course_val == 44){
                var courseNumber = document.getElementsByName('course[]');
                for (i = 1; i <= courseNumber.length; i++) {
                    var courseVal =  $('#course_'+i).val();
                    $('#course_'+i).removeAttr('checked');
                }
                $('#course_1').removeAttr('checked');
                $('#course_'+get_id).attr('checked',true);

            }
            $('.cost_box_no'+get_id).css({'background-color':'red','color':'white','font-weight':'bold'});
            $('#course_'+get_id).attr('checked',true);
          }else{
            $('.cost_box_no'+get_id).css({'background-color':'#b0e7fa','color':'black'});
          }
          courseClick();
        });








        $('.course_without_image').click(function(){
          var get_id =$(this).attr('data-id');
          if($('#course_'+get_id).is(':checked')){

            $('#course_'+get_id).attr('checked',false);
            $('.cost_box_no'+get_id).css({'background-color':'#b0e7fa','color':'black'});
            // $('.course_without_image_box'+get_id).attr('style','min-height:219px;background-color:#c3eaf1;border-top-right-radius: 10px;border-top-left-radius: 10px;width:100%;text-align: center;display:table;');
            // $('.without_image_course_name'+get_id).attr('style','color:black;');
            // $('.without_image_course_grade'+get_id).attr('style','color:black;');
            // $(this).attr('style','background-color:white;');
          }else{
            $('#course_'+get_id).attr('checked',true);
            $('.cost_box_no'+get_id).css({'background-color':'red','color':'white','font-weight':'bold'});
            // $('.course_without_image_box'+get_id).attr('style','min-height:219px;background-color:#ed1c24;border-top-right-radius: 10px;border-top-left-radius: 10px;width:100%;text-align: center;display:table;');
            // $('.without_image_course_name'+get_id).attr('style','color:white;');
            // $('.without_image_course_grade'+get_id).attr('style','color:white;');
            // $(this).attr('style','background-color:#ed1c24');
            // $('.courseName'+get_id).attr('style','color:white;');
            // $('.gradeName'+get_id).attr('style','color:white;');
           
          }
          courseClick();
         
        });
        
    });
</script>