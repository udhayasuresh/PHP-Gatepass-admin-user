<?php 
    session_start();
    require("../config.php");
    if(isset($_POST['form_data'])) :
        $date = $db->real_escape_string($_POST['date']);
        $code =$db->real_escape_string($_POST['code']);
         $name = $db->real_escape_string($_POST['name']);
        
        $time = $db->real_escape_string($_POST['time']);
		$emp_sign = $db->real_escape_string($_POST['emp_sign']);
		$status = $db->real_escape_string($_POST['status']);
		$auth_sign = $db->real_escape_string($_POST['auth_sign']);
		
        $p_id = ($_POST['p_id']!="") ? $_POST['p_id'] : '';
        if($p_id!="") :
        	$query = " UPDATE permission_slip SET date= '$date',code='$code',
             name='$name', time='$time',
             emp_sign='$emp_sign',status='$status',auth_sign='$auth_sign'
			 WHERE p_id=$p_id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO permission_slip SET date= '$date',code='$code',
             name='$name', time='$time',
             emp_sign='$emp_sign',status='$status',auth_sign='$auth_sign'
			 ";
        	$msg = "Successfully Inserted Your Record"; 
		
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:permission.php");
    endif;
    
    if(isset($_POST['ct_id'])) :
        $p_id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($p_id!="") :
            $query = "DELETE FROM permission_slip WHERE p_id =$p_id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>

