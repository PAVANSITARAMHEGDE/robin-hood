<?php
        session_start();
//header('location:login.php');



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

$p = "SELECT `hotel_id` FROM `hoteler` " ;                            
    $result = mysqli_query($con,$p);                            
     ?> 
<html>
<body>
<div class="col-mid-6 login-right">
<h2> TELL US ABOUT YOU</h2>
<form action="consdet.php" method="post">
<div class="form-group">
<label>Consumer-Id</label>
<input type="text" name="consumer-id" class="form-control" required>
</div>
<div class="form-group">
<label>Consumer-Name</label>
<input type="text" name="consumer-name" class="form-control" required>
</div>
<div class="form-group">
<label>Consumer-mobile</label>
<input type="text" name="consumer-mobile" class="form-control" required>
</div>
<div class="form-group">
<label>Consumer-email</label>
<input type="text" name="consumer-email" class="form-control" required>
</div>
<div class="form-group">
Farmer-Id<select name="p">
   <?php 
           while ($row = $result->fetch_assoc())  { 
       ?> <Option>                 
    <?php  echo $row["hotel_id"]; ?>
    </Option>
<?php
}
    
    ?>

</select>

</div>
<button type="submit" class="btn btn-primary"> Iam Done </button>

</form>
    </div>

</body>
</html>