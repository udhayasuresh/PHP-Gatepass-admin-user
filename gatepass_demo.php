<?php 
    include('config.php');
    session_start();
    $result = $db->query('SELECT id,date,code,name,place,TIME_FORMAT(time, "%r")time,emp_sign,status,auth_sign FROM gatepass ORDER BY id DESC');
    $data_record = $result->num_rows;
?>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
   </script>
   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>
<br/><br/>

<div class="row">
      <div class="col-md-4"></div>
	  
      <div class="col-md-4"> <h2> <!--<a href="http://www.mostlikers.com/2017/04/ajax-add-edit-bootstrap-model-php-jquery.html"></a>--></h2></div>
      <div class="col-md-4">
        <?php $apage = array('id'=>'','date'=>'');?>
        <script>var page_0 = <?php echo json_encode($apage)?></script>
		 <a href ="http://192.168.0.64/viaridash/" class="btn btn-primary back">Go Back</a>
        <p></p>
      </div>
  </div>
  
  
 <div class="container-fluid mt--7">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
<!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">GatePass</h3>
                </div>
				<?php $apage = array('id'=>'','date'=>'');?>
                <script>var page_0 = <?php echo json_encode($apage)?></script>
				<h3><a data="page_0" class="model_form btn btn-sm btn-danger" href="#"><i class="fas fa-plus-circle"></i> Add New</a></h3>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
					<th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Place</th>
                    <th scope="col">Time</th>
					<th scope="col">Emp.Sign</th>
					<th scope="col">Status</th>
					<th scope="col">Auth.Sign</th>
                  </tr>
                </thead>
				
				<tbody id="myTable">
                <?php if(isset($result) && ($data_record) > 0)  : $i=1; ?>
                    <?php  while ($users = mysqli_fetch_object($result)) { ?>

                        <tr class="<?=$users->id?>_del">
                            
                            <td><?=$users->date;?></td>
                            <td><?=$users->code;?></td>
                            <td><?=$users->name;?></td>
                            <td><?=$users->place;?></td>
                            <td><?=$users->time;?></td>
                            <td><?=$users->emp_sign;?></td>
							<td><?=$users->status;?></td>
							<td><?=$users->auth_sign;?></td>
							
                            <script>var page_<?php echo $users->id ?> = <?php echo json_encode($users);?></script>
                            <td><a data="<?php echo 'page_'.$users->id ?>" class="model_form btn btn-info btn-sm" href="#"> <span> <i class="fas fa-edit"></i></span></a>
                            <a data="<?php echo  $users->id ?>" title="Delete <?php echo $users->date;?>" class="tip delete_check btn btn-info btn-sm "><span> <i class="fas fa-trash-alt"></i></span> </a>  
							<!--<a data="<?php //echo  $users->id ?>" title="print" onclick="window.print()"  class="tip  btn btn-info btn-sm "><span> <i class="fas fa-print"></i></span> </a>-->
                            </td>
                        </tr>
                <?php $i++; } ?>
            <?php else : echo '<tr><td colspan="8"><div align="center">-------No record found -----</div></td></tr>'; ?>
           <?php endif; ?>               
            </tbody>
			
				
              </table>
			 
    </div>
	
	</div>
            </div>
          </div>
		  <br/>
	
        </div>
       
      </div>
      <!-- Footer -->
    <script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on('click','.model_form',function(){
        $('#form_modal').modal({
          keyboard: false,
          show:true,
          backdrop:'static'
        });
        var data = eval($(this).attr('data'));
        $('#id').val(data.id);
        $('#date').val(data.date);
        $('#code').val(data.code);
        $('#name').val(data.name);
        $('#place').val(data.place);
        $('#time').val(data.time);
        $('#emp_sign').val(data.emp_sign);
		$('#status').val(data.status);
		$('#auth_sign ').val(data.auth_sign );
		//$('#s_price').val(data.s_price);
		//$('#batch').val(data.batch);
        if(data.id!="")
            $('#pop_title').html('Edit');
        else
            $('#pop_title').html('Add');
       
    });  
    $(document).on('click','.delete_check',function(){
      if(confirm("Are you sure to delete data")){
        var current_element = $(this);
        url = "add_edit.php";
        $.ajax({
        type:"POST",
        url: url,
        data: {ct_id:$(current_element).attr('data')},
        success: function(data) { //location.reload(); 
          $('.'+$(current_element).attr('data')+'_del').animate({ backgroundColor: "#003" }, "slow").animate({ opacity: "hide" }, "slow");
        } 
      });
      }
     });     
});
</script>  
    <!-- Form modal -->
	
  <div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><i class="icon-paragraph-justify2"></i><span id="pop_title">Add</span> GatePass information</h4>
        </div>
        <!-- Form inside modal -->
        <form method="post" action="add_edit.php" id="cat_form">
          <div class="modal-body with-padding">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>DATE :</label>
                   <input type="date" name="date" id="date"  class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>CODE :</label>
                   <input type="code" name="code" id="code" class="form-control" required="true">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>NAME :</label>
                   <input type="name" name="name" id="name"  class="form-control" required="true">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>PLACE :</label>
                   <input type="place" name="place" id="place" class="form-control" required="true">
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>TIME :</label>
                   <input type="time" name="time" id="time" class="form-control">
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>EMP.SIGN :</label>
                   <input type="emp_sign" name="emp_sign" id="emp_sign" class="form-control" required="true">
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label> STATUS:</label>
				  
				   <select   class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" name="status" id="status">
				   
        <option selected>None</option>
        <option value="Approved" class="btn btn-success">Approved</option> <!-- first option contains value="" -->
        <option value="Pending">Pending</option> 
        <option value="Rejected" class="btn btn-danger">Rejected</option> 
    </select>
	
               
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>AUTH.SIGN :</label>
                   <input type="auth_sign" name="auth_sign" id="auth_sign" class="form-control">
                </div>
              </div>
            </div>	
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
            <span id="add">
              <input type="hidden" name="id" value="" id="id">
              <button type="submit" name="form_data" class="btn btn-primary">Submit</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  
 <script>
 $(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});
 </script>
       <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
   <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
