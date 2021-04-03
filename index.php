<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Infomation Page</h1>
        <a href="insert.php" class="btn btn-success">Go to Insert</a>
        <hr>
        <div align="center">  
            <input type="text" name="search" id="search" class="form-control" placeholder="Search..." />  
        </div>
    </br>  
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th colspan="2">Action</th>
        </thead>

        <tbody id="tablebody">
            <?php 

            include_once('functions.php');
            $fetchdata = new DB_Conn();
            $sql = $fetchdata->fetch_record();
            $i = 1;
            while($row = mysqli_fetch_array($sql)) {

                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['adress']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><a href="update.php?empno=<?php echo $row['empno']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?empno=<?php echo $row['empno']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

                <?php 
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
      $('#search').keyup(function(){
       search($(this).val());
   });
  });
    function search(value){
     $('#mytable tr').each(function(){
         var found = 'false';
         $(this).each(function(){
            if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){
                found = 'true';
            }
        });
         if(found == 'true'){
            $(this).show();
        } else {
            $(this).hide();
        }
    });
 }
</script>
</body>
</html>