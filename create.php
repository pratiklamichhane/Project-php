<?php include "header.php";
?>


  <div class="m-5">
    <h3 class="text-center">Create Details</h3>
<form method="POST" class="w-50 m-auto">
  <div class="mb-3">
    <label for="ID" class="form-label">ID</label>
    <input type="number" name="ID" class="form-control" id="ID" aria-describedby="ID">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">NAME</label>
    <input type="name" class="form-control" name="name" id="name">
  </div>
    <div class="mb-3">
        <label for="phone" class="form-label">PHONE</label>
        <input type="phone" class="form-control" id="phone" name="phone">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">ESTABLISHMENT DATE</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="mb-3">
        <label for="opening" class="form-label">OPENING TIME</label>
        <input type="time" class="form-control" id="opening" name="opening_time">
    </div>
    <div class="mb-3">
        <label for="closing" class="form-label">CLOSING TIME</label>
        <input type="time" class="form-control" id="closing" name="closing_time">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php" class="btn btn-danger" >Back</a>
</form>
</div>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $establishment_date = $_POST['date'];
    $opening_time = $_POST['opening_time'];
    $closing_time = $_POST['closing_time'];
    echo $ID."<br>";
    echo $name."<br>";
    echo $phone."<br>";
    echo $establishment_date."<br>";
    echo $opening_time."<br>";
    echo $closing_time."<br>";
     include 'connection.php';
        $sql = "INSERT INTO colleges ( ID , Name , Phone_no , Est_date , opening_time , closing_time ) VALUES ('$ID', '$name', '$phone' , '$establishment_date' , '$opening_time' , '$closing_time')";
        $result = $conn->query($sql);
        if($result==true){
            echo "<div class='alert alert-dismissible alert-success' bis_skin_checked='1'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Well done!</strong> You successfully read <a href='#' class='alert-link'>this important alert message</a>.
            </div>";
            
            header("Location: index.php");
            exit();
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
}
include "footer.php";