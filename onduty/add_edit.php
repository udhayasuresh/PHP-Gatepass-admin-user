<?php 
    session_start();
    require("../config.php");
    if(isset($_POST['form_data'])) :
        $date = $db->real_escape_string($_POST['date']);
        $name = $db->real_escape_string($_POST['name']);
        $code = $db->real_escape_string($_POST['code']);
        $time = $db->real_escape_string($_POST['time']);
		$out_time = $db->real_escape_string($_POST['out_time']);
		$place = $db->real_escape_string($_POST['place']);
		$reason = $db->real_escape_string($_POST['reason']);
		$emp_sign = $db->real_escape_string($_POST['emp_sign']);
		$status = $db->real_escape_string($_POST['status']);
		$auth_sign = $db->real_escape_string($_POST['auth_sign']);
		
        $onduty_id = ($_POST['onduty_id']!="") ? $_POST['onduty_id'] : '';
        if($onduty_id!="") :
        	$query = " UPDATE on_duty SET date= '$date',
             name='$name',code='$code', time='$time',out_time='$out_time',place='$place',
			 reason='$reason',
             emp_sign='$emp_sign',status='$status',auth_sign='$auth_sign'
			 WHERE onduty_id=$onduty_id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO on_duty SET date= '$date',
             name='$name', code='$code', time='$time',out_time='$out_time',place='$place',
			 reason='$reason',
             emp_sign='$emp_sign',status='$status',auth_sign='$auth_sign'
			 ";
        	$msg = "Successfully Inserted Your Record"; 
		
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:onduty.php");
    endif;
    
    if(isset($_POST['ct_id'])) :
        $onduty_id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($onduty_id!="") :
            $query = "DELETE FROM on_duty WHERE onduty_id =$onduty_id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>

