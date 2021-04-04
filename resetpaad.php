<?php
 session_start();

?>


<html>
    <title>reset password admin</title>
      
    <body>
        <form action="resetadmin.php" method="post">
            <lable> enter your old password</lable>
             <input type="password" name="password1"><br> <br>
            
            
         <lable>reset password</lable>
             <input type="password" name="password"><br> <br>
             <button type="submit">submit</button>
        </form>
    
    </body>
</html>