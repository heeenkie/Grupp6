<?php
	include_once 'header.php';
  include_once 'includes/dbh.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/companies.css">

       <?php 
  
        $sql = "SELECT * FROM company_info";
        $result = mysqli_query($conn, $sql);

        //$row = mysqli_fetch_assoc($result);
        
       // $num_rows = mysqli_num_rows($result);
    
      ?> 

<div class="container">
  <div id="input_div">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Sök på företag, stad eller utbildning..">
</div>
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Företag</th>
    <th style="width:40%;">Stad</th>
    <th style="display: none;">Utbildning</th>
  </tr>
<?php 
 while($row = $result->fetch_assoc()) { 
    echo '<tr>';
      echo '<td>' .$row["company_info_name"].  '</td>';
       echo '<td>' .$row["company_info_id"].  '</td>';
    echo '</tr>';

}?>
  <!--<tr>
    <td>Statliga pensionsverket</td>
    <td>Sundsvall</td>
    <td style="display: none;">Datateknik</td>
  </tr>
  <tr>
    <td>Mitt Media</td>
    <td>Sundsvall</td>
    <td style="display: none;">Datateknik</td>
  </tr>
  <tr>
    <td>Swedbank</td>
    <td>Stockholm</td>
    <td style="display: none;">indek</td>
  </tr>
  <tr>
    <td>SCA</td>
    <td>Sundsvall</td>
    <td style="display: none;">indek</td>
  </tr>-->
</table>
</div>


<?php

	include_once 'footer.php';
?>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, td1, td2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    if (td || td1 || td2) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

</script>