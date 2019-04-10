<?php 
    session_start();
    require("../config.php");
    if(isset($_POST['form_data'])) :
        $date = $db->real_escape_string($_POST['date']);
        $time = $db->real_escape_string($_POST['time']);
        $name = $db->real_escape_string($_POST['name']);
        $visitor_from = $db->real_escape_string($_POST['visitor_from']);
        $visit = $db->real_escape_string($_POST['visit']);
		$requested = $db->real_escape_string($_POST['requested']);
		$status = $db->real_escape_string($_POST['status']);
		$auth_sign = $db->real_escape_string($_POST['auth_sign']);
		
        $v_id = ($_POST['v_id']!="") ? $_POST['v_id'] : '';
        if($v_id!="") :
        	$query = " UPDATE visitor_pass SET date= '$date',time='$time',
             name='$name', visitor_from='$visitor_from',visit='$visit',
             requested='$requested',status='$status',auth_sign='$auth_sign'
			 WHERE v_id=$v_id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO visitor_pass SET date= '$date',time='$time',
             name='$name', visitor_from='$visitor_from', visit='$visit',
             requested='$requested', status='$status',auth_sign='$auth_sign'
			 ";
			 echo $query;
        	$msg = "Successfully Inserted Your Record"; 
		
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:visitorpass.php");
    endif;
    
    if(isset($_POST['ct_id'])) :
        $v_id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($v_id!="") :
            $query = "DELETE FROM late_slip WHERE v_id =$v_id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>

