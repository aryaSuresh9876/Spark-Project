<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Customers</title>
    <?php include 'tablelinks.php' ?>
    <?php include 'tablestyles.php' ?>
    <link rel="stylesheet" href="../customers.css">
  </head>
  <body>
   <div class="main-div">
     <table>
       <thead>
         <tr>
           <th>Name</th>
           <th>E-mail</th>
           <th>Current Balance</th>
         </tr>
         <tbody>
           <?php
             include 'auth.php';

               $sql = "SELECT * FROM `customers`";
               $result = mysqli_query($conn, $sql);;
              while($res=mysqli_fetch_array($result))
               {?>
                 <tr>
                   <td><?php echo $res['name']; ?></td>
                   <td><?php echo $res['email']; ?></td>
                   <td><?php echo $res['current_balance']; ?></td>
                   <td><a href="#"><i class="fa fa-id-badge" ></i></a></td>
                 </tr>

          <?php
            }
           ?>
         </tbody>
       </thead>
     </table>
   </div>
  </body>
</html>
