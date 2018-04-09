<?php
	include_once 'header.php';
  include_once 'includes/dbh.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/companies.css">

       <?php 
        /*
        $sql = "SELECT * FROM company_info";
        $result = mysqli_query($conn, $sql);

        //$row = mysqli_fetch_assoc($result);
        
       // $num_rows = mysqli_num_rows($result);
    */
      ?>

<div class="container">
  <div id="input_div">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Sök på företag, stad eller utbildning..">
</div>
<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Företag</th>
    <th style="width:30%;">Stad</th>
    <th style="width:30%">Utbildning</th>
  </tr>
<?php 
/*
 while($row = $result->fetch_assoc()) { 
    echo '<tr>';
      echo '<td>' .$row["company_info_name"].  '</td>';
       echo '<td>' .$row["company_info_id"].  '</td>';
    echo '</tr>';

}*/?>

  <tr>

    <td><a href="1.php">Adrians kebab</a></td>
    <td><a href="1.php">Sundsvall</a></td>
    <td><a href="1.php">Industriell ekonomi</a></td>
  </tr>
  <tr>
    <td><a href="2.php">Augusts nyhetsbyrå</a></td>
    <td><a href="2.php">malmö</a></td>
    <td><a href="2.php">Datateknik</a></td>
  </tr>
  <tr>
    <td><a href="3.php">Britans casino</a></td>
    <td><a href="3.php">Stockholm</a></td>
    <td>  a href="3.php">Industriell ekonomi</td>
  </tr>
  <tr>
    <td><a href="4.php">Isacs pappersbruk</a></td>
    <td><a href="4.php">Katrineholm</a></td>
    <td> <a href="3.php">Industriell ekonomi</a></td>
  </tr>
  <tr>
    <td><a href="5.php">Andreas städservice AB</a></td>
    <td><a href="5.php">Stockholm</a></td>
    <td ><a href="5.php">Kemiteknik</a></td>
  </tr>
  <tr>
    <td><a href="6.php">Victors Mobiler</a></td>
    <td><a href="6.php">Sundsvall</a></td>
    <td> <a href="6.php">Datateknik </a></td>
  </tr>
  <tr>
    <td><a href="7.php">Marcus elektronik</a></td>
    <td><a href="7.php">Sundsvall</a></td>
    <td> <a href="7.php">Elektroteknik</a></td>
  </tr>
  <tr>
    <td><a href="8.php">StudentPitchen AB</a></td>
    <td><a href="8.php">Sundsvall</a></td>
    <td> <a href="8.php">Industriell ekonomi, Datateknik</a></td>
  </tr>
  <tr>
    <td><a href="9.php">bord&stol AB</a></td>
    <td><a href="9.php">Malmö</a></td>
    <td ><a href="9.php">Teknisk design</a></td>
  </tr>
  <tr>
    <td><a href="10.php">Yiglo</a></td>
    <td><a href="10.php">Katrineholm</a></td>
    <td ><a href="10.php">Elektroteknik</a></td>
  </tr>  <tr>
    <td><a href="11.php">Mittuniversitetet</a></td>
    <td><a href="11.php">Stockholm</a></td>
    <td><a href="11.php">Industriell Ekenomi, Datateknik, Elektroteknik, Tekniskdesign, Kemiteknik</a></td>
  </tr>
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