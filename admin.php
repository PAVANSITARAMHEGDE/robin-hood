<?php
 session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

$query="select * from feedback";

$result = mysqli_query($con,$query);

$y="select * from statastics";

$result3 = mysqli_query($con,$y);


?>

<html>
    <title>admin page</title>
      
    <body style="background-color:pink;">
       
<h1>welcome <?php echo $_SESSION['username'];?></h1>
        <h1>Feed back</h1> 
        <table border="20px;">
               <tr>
                   <th>from</th>
                   <th>robins</th>
                   <th>feed back </th>
                   
                   </tr>
                   <?php
                     while($rows= $result-> fetch_assoc())
                    {
                    ?>  
                     <tr>
                        <td><?php echo $rows['feedback_given_by'];?></td>
                         <td><?php echo $rows['our_ppl'];?></td>
                          <td><?php echo $rows['feed_back'];?></td>

                   
                   
                   </tr>
                   
                   
                   
                 <?php
                     }
                    ?>    
                     
                  
               </table>
               <br> <br> <br> <br>
        <h1>Statistics</h1>
         <table border="10px;">
               <tr>
                   <th>Hotel id</th>
                   <th>Hotel names</th>
                   <th>Robin id</th>
                   <th>Robin name</th>
                   <th>Date</th>
                   
                   </tr>
                   <?php
                     while($rows4= $result3-> fetch_assoc())
                    {
                    ?>  
                     <tr>
                        <td><?php echo $rows4['h_id'];?></td>
                         <td><?php echo $rows4['hotelname'];?></td>
                          <td><?php echo $rows4['robin_id'];?></td>
                            <td><?php echo $rows4['robin_n'];?></td>
                              <td><?php echo $rows4['date'];?></td>
                   </tr>
                   
                   
                   
                 <?php
                     }
                    ?>    
                     
                  
               </table>
        
        <a href="resetpaad.php">reset password</a><br>
        <a href="loginad.php">log out</a>
    
    </body>
</html>