<?php
include_once('functions.php');
if(isset($_POST['insert'])) {
  
  $insertData = new DB_Conn();
  $msg = ' ';
  $class = ' ';
  $name = $_POST['name'];
  $address = $_POST['address'];
  $salary = $_POST['salary'];
  
  $sql = $insertData->insert($name,$address,$salary);
  if($sql){
    $class = 'alert-success';
    $msg = 'Data Saved';
  } else {
    $class = 'alert-danger';
    $msg = 'Data not saved';
  }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <?php
        if(isset($msg)) { ?>
            <div class="alert <?php echo $class; ?>" role="alert" id="alert_box">
              <?php echo $msg; ?>
            </div>
       <?php } ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="mb-3">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
     <script>
        $(document).ready(function(){
            $("#alert_box").fadeTo(2000, 500).slideUp(500, function(){
                $(this).slideUp(500);
             });
        }); 
     </script>

</body>
</html>