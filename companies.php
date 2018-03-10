<?php
	include_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/companies.css">

<div class="container">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Sök på företag..">
<input type="text" id="myInput1" onkeyup="myFunction_11()" placeholder="Sök på stad..">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Företag</th>
    <th style="width:40%;">Stad</th>
  </tr>
  <tr>
    <td>Statliga pensionsverket</td>
    <td>Sundsvall</td>
  </tr>
  <tr>
    <td>Mitt Media</td>
    <td>Sundsvall</td>
  </tr>
  <tr>
    <td>Swedbank</td>
    <td>Stockholm</td>
  </tr>
  <tr>
    <td>SCA</td>
    <td>Sundsvall</td>
  </tr>
</table>
</div>


<?php

	include_once 'footer.php';
?>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, td1;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function myFunction_11() {
  // Declare variables 
  var input, filter, table, tr, td, i, td1;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>