<?php include "header.php";
?>

<!-- data table -->
<br>
  <h3 class="text-center">Colleges List</h3>
  <br>
<div class="mt-10 table-responsive">

<table class="table w-75 mx-auto table-hover">
  <thead>
    <tr class="table-info">
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PHONE NO</th>
      <th scope="col">EST DATE</th>
      <th scope="col">OPENING TIME</th>
      <th scope="col">CLOSING TIME</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $SQL = "SELECT * FROM colleges";
    $result = $conn->query($SQL);
    ?>
    <tbody> 
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>"; 
        echo "<th scope='row'>" . $row['ID'] . "</th>"; 
        echo "<td>". $row["Name"] ."</td>";
        echo "<td>". $row["Phone_no"] ."</td>";
        echo "<td>". $row["Est_date"] ."</td>";
        echo "<td>". $row["opening_time"] ."</td>";
        echo "<td>". $row["closing_time"] ."</td>";
        echo "<td><a href='edit.php?ID=".$row['ID']."' class='btn btn-primary'>Edit</a></td>";
        echo "</tr>"; 
      }
    }
?>
  </tbody>
</table>
</div>
<!-- data table ends -->

<?php
include "footer.php";
?>
