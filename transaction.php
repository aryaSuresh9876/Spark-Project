<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <?php include 'tablelinks.php' ?>
    <?php include 'tablestyles.php' ?>
  </head>
  <body>
    <div class="main-div">
      <center style="margin-top:20px;"><h4><i class="icon-edit icon-large" ></i>TRANSACTION HISTORY</h4></center>
       <hr>
       <div class="table-div">
         <table>
           <tr>
             <th>Sender</th>
             <th>Receiver</th>
             <th>Amount</th>
           </tr>
           <?php
            include 'auth.php';
            $sql = "SELECT * FROM transaction";
            $query = mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_array($query))
            {
              ?>
              <tr>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['transfer_to']; ?></td>
                <td><?php echo $rows['amount']; ?></td>
              </tr>
           <?php
             }
            ?>
         </table>
         <center class="btn-1">
           <a href="customers.php"><button type="button" class="btn btn-lg btn-dark" name="button">View Customers</button></a>
         </center>
       </div>
    </div>
  </body>
</html>
