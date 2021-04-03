<?php
include_once('functions.php');
if (isset($_GET['empno'])) {
        $empno = $_GET['empno'];
        $deletedata = new DB_Conn();
        $sql = $deletedata->delete_record($empno);

        if ($sql) { ?>
           <script>
           	alert("Data Deleted!");
           	window.location.href="index.php"
           </script>
       <?php }
    }
?>