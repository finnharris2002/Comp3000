<?php
    function validate($con,$data){
        $newData=htmlspecialchars($data);
        $newData=mysqli_real_escape_string($con,$newData);


return $newData;
    }



?>