<?php include "header.php";
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    include "connection.php";
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM colleges WHERE ID = $ID";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $ID = $row['ID'];
            $name = $row['Name'];
            $phone = $row['Phone_no'];
            $establishment_date = $row['Est_date'];
            $opening_time = $row['opening_time'];
            $closing_time = $row['closing_time'];
        }
    }}
?>
  <div class="m-5">
    <h3 class="text-center">Edit Details</h3>
<form method="POST" class="w-50 m-auto" action="update.php">
  <div class="mb-3">
    <label for="ID" class="form-label">ID</label>
    <input type="number" name="ID" class="form-control" id="ID" aria-describedby="ID" value="<?php echo $ID;?>">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">NAME</label>
    <input type="name" class="form-control" name="name" id="name" value="<?php echo $name;?>">
  </div>
    <div class="mb-3">
        <label for="phone" class="form-label">PHONE</label>
        <input type="phone" class="form-control" id="phone" name="phone" value="<?php echo $phone;?>">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">ESTABLISHMENT DATE</label>
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $establishment_date;?>">
    </div>
    <div class="mb-3">
        <label for="opening" class="form-label">OPENING TIME</label>
        <input type="time" class="form-control" id="opening" name="opening_time"
        value="<?php echo $opening_time;?>">
    </div>
    <div class="mb-3">
        <label for="closing" class="form-label">CLOSING TIME</label>
        <input type="time" class="form-control" id="closing" name="closing_time"
        value="<?php echo $closing_time;?>">
    </div>
  <button type="submit" class="btn btn-primary">UPDATE</button>
  <a href="index.php" class="btn btn-danger" >Back</a>
</form>
</div>
<?php
include "footer.php";
?>