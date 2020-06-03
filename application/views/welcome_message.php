<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
 main
 {
 background:grey;
 width:100%;
 height:650px;
 overflow:hidden;
 }
 header
 {
 background:linear-gradient(to right, #ffab02 0%, #ffda00 51%, #ffab02 100%);
 height:60px;
 float:left;
 width:100%;
 }
 aside{
 background:#EFE7E5;
 width:60px;
 height:590px;
 float:left;
 }
 article{
background:#fff;
 width:95.5%;
 height:590px;
 float:left;
 }
 .pt20{
 padding:20px 8px 0 8px;
overflow-y: auto;
  height:535px;
 }
 h1{
 margin:8px;
 }
 .btn{
 float:right;
 margin-right:8px;
 }
 
 </style>
</head>
<body>
<main>
<!-- Top header -->
<header>

</header>
<!-- End Top header -->
<!-- Left Nav-->
<aside>
</aside>
<!-- End Left Nav-->
<!-- List View -->
<article>
<h1>List View
<a href="filter.html" class="btn btn-lg btn-success">Filter</a></h1>
	<div class="table-responsive pt20" >
	<table class="table table-bordered" id="employee_table" >
	<tr class="active">
	<th>Date</th>
	<th>Region</th>
	<th>Rep</th>
	<th>Item</th>
	<th>Units</th>
	<th>UnitCost</th>
	<th>Total</th>
	</tr>
	
	</table>
	</div>
</article>
<!-- End List View -->

</main>
<script type="text/javascript">
	var bool = <?php echo json_encode($emp) ?>;
	console.log(bool);
$(document ).ready(function() {
	var employee_data = '';
      $.each(bool, function(key, value){
          employee_data += '<tr>';
          employee_data += '<td>'+value.date+'</td>';
          employee_data += '<td>'+value.region+'</td>';
          employee_data += '<td>'+value.rep+'</td>';
          employee_data += '<td>'+value.item+'</td>';
          employee_data += '<td>'+value.units+'</td>';
          employee_data += '<td>'+value.unit_cost+'</td>';
          employee_data += '<td>'+value.total+'</td>';
          employee_data += '</tr>';


      });
      $('#employee_table').append(employee_data);    


 });

 </script>   
</body>
</html>
