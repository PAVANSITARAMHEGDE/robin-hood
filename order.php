<?php
 session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

$hid = $_POST['id'];
$name=$_SESSION['username1'];
$id =$_SESSION['id1']; 
$_SESSION['id6']= $hid;
$_SESSION['id2']=$id;
$_SESSION['usernam3']=$name;

$s= "SELECT food FROM hoteler WHERE hotel_id='$hid'";
            
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

?>
<html>
    <body>
          <table>
               <tr>
                   <th>food</th>
                   </tr>
                   <?php
                     while($rows= $result-> fetch_assoc())
                    {
                    ?>  
                     <tr>
                          <td><?php echo $rows['food'];?></td>
                   </tr>
                 <?php
                     }
                    ?>    
               </table>
        <br><br>
        Can you serve the food ?
       <form action="confm.php" method="post">  
           <button type="submit" name="id" value="0">yes</button>&nbsp;<button type="submit" name="id" value="1">no</button>
        </form>
        
        
    </body>
</html>
