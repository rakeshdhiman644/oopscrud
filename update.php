<?php
include_once('functions.php');
$updatedata = new DB_Conn();
if(isset($_POST['update'])){
    $empno = $_GET['empno'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = $updatedata->update_data($empno,$name,$address,$salary);
    if($sql){ ?>
           <script>
            alert("Data updated!");
            window.location.href="index.php"
           </script>
    <?php } else { ?>
            <script>
            alert("Something wrong!");
            window.location.href="update.php?empno=<?php echo $empno;?>";
           </script>
  <?php  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Update Page</h1>
        <hr>
        <?php
        $empno = $_GET['empno'];
        $EditData = new DB_Conn();
        $sql = $EditData->edit_data($empno);
        while ($row = mysqli_fetch_assoc($sql)) {
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" 
                    value="<?php echo $row['name']; ?>" >
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" 
                    value="<?php echo $row['adress']; ?>" >
            </div>
            <div class="mb-3">
                <label for="salary">Address</label>
                <input type="text" class="form-control" name="salary" 
                    value="<?php echo $row['salary']; ?>" >
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    
</body>
</html>