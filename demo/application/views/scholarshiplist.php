<?php
if (isset($listdata)){
  
 //print_r($listdata);    
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>scholarship</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src=" https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="  https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
</head>

<body>
<div class="adminmain">
<div class="adminpart1">    
 <div class="adminnavabar">
    <div class="adminlog"> 
<img src="<?php echo base_url('asset/img/logo1.jpeg'); ?>" id="lo" > 
</div>
<<div class="adminoption">
    <h3>Stats</h3>
    <ul>
    <!-- <li>Dashboard</li> -->
    <li><a href="<?php echo base_url('admin/userlist'); ?>"><i class="fas fa-users"></i> &nbsp;User List </a></li>

    <li class="running"><a href="<?php echo base_url('admin/postscholarship'); ?>"> <i class="far fa-calendar-plus"></i> &nbsp;Add scholarship </a></li>
    <li><a href="<?php echo base_url('admin/scholarshiplist'); ?>"><i class="fas fa-cogs"></i>&nbsp; Manage scholarship </a></li>
    </ul>
    <h3>Account</h3>
    <ul>
    <li><a href="<?php echo base_url('home/index'); ?>">logout&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
  
</div>
 </div>

</div>

<div class="adminpart2">
  <div class="admin1">
    <div style="display: flex; width: 1300;">
    <div class="admin1part1">
    <h1 class="admintext">Admin!</h1>
    <h1 class="admintext2"> We are glad to see you again!</h1>
  </div>
    <div class="admin1part2">
        <a href=""><img src="img/profile.jpg" class="loginimage"></a>
    </div>
  </div>
    <!-- <div class="admin1part3">
    
    </div> -->
  </div>
  <div class="admin2">
    <div class="dataofuser" style="padding: 10px;">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>

                <th>Scholarship name</th>
                <th>eligibility</th>
                <th>benefits</th>
                <th>documents</th>
                <th>To apply</th>
                <th>course</th>
                <th>course</th>
                <th>branch</th>
            </tr>
        </thead>
        <tbody>
            <?php  
 
            foreach ($listdata as $data1 => $data) {
                
                 ?>
            <tr>
                <td><?php echo($data->sname); ?></td>
                <td><?php echo($data->eligibility); ?></td>
                <td><?php echo($data->benefits); ?></td>
                <td><?php echo($data->documents); ?></td>
                <td><?php echo($data->apply); ?></td>
                <td><?php echo($data->course); ?></td>
                <td><?php echo($data->branch); ?></td>
                <td><a href="<?php  echo base_url('admin/deletedata/').$data->suid.'/scholarshiplist/suid' ?>">delete </a>/<a href="<?php  echo base_url('admin/editdata/').$data->suid.'/scholarshiplist/usuid' ?>"> edit</a></td>
            </tr>
          <?php } ?>
           
        </tbody>
    </table>
    </div>
</div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">
    
</script>
</html>
<?php } ?>