<?php require 'auth.php'; ?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php error_reporting (E_ALL ^ E_WARNING); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <?php include 'tablelinks.php' ?>
    <?php include 'tablestyles.php' ?>
    <style>
      table{
        padding-top: 30px;
      }
    </style>
  </head>
  <body>
    <?php
    include 'auth.php';
    $id = $_GET['id'];
    $selectquery ="select * from customers where id = $id";
    $query = mysqli_query($conn, $selectquery);

    while($res = mysqli_fetch_array($query))
    {?>
      <center style="margin-top:20px;"><h4><i class="icon-edit icon-large" ></i>Customer Information</h4></center>
 <hr>
      <table>
        <tr>
          <th> Name </th>
          <th>E-mail</th>
          <th>Current Balance</th>
        </tr>
        <tr>
          <td><?php echo $res['name']; ?></td>
          <td><?php echo $res['email']; ?></td>
          <td><?php echo $res['current_balance']; ?></td>
        </tr>
      </table>
    <?php } ?>
    <form method="POST">
      <div class="form">
        <select name="to" class="form-select" required aria-label="Default select example">
         <option selected hidden>Transfer Money</option>
         <?php
         include('auth.php');
           $sql = "select * from customers where id NOT LIKE $id";
           $result = mysqli_query($conn, $sql);
          while($rows=mysqli_fetch_array($result))
          {?>
         <option name="transfer_to" value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
       <?php } ?>
        </select>
        <div class="mb-3 row">
          <label for="amount" class="col-sm-2 col-form-label">Amount</label>
          <div class="col-sm-10">
            <input required type="text" placeholder="1000" name="amount" class="form-control" id="amount">
          </div>
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="button-container">
          <button name="submit" class="btn btn-lg btn-dark">Submit</button>
        </div>
        <?php
        include 'auth.php';
        if(isset($_POST['submit'])){

         $from=$_GET['id'];
         $to=$_POST['to'];
         $amount=$_POST['amount'];

         $sql = "SELECT * from customers where id=$from";
         $query = mysqli_query($conn, $sql);
         $sql1 = mysqli_fetch_array($query);

         $sql = "SELECT * from customers where id=$to";
         $query = mysqli_query($conn, $sql);
         $sql2 = mysqli_fetch_array($query);

         if(($amount)>$sql1['current_balance'])
         {
           echo '<script type="text/javascript">';
           echo 'alert("Insufficient Balance!!")';
           echo '</script>';
         }
         else{
           $senderbalance = $sql1['current_balance'];
           $receiverbalance = $sql2['current_balance'];
           $newbalance = $senderbalance - $amount;
           $sql = "UPDATE customers set current_balance=$newbalance where id=$from";
           mysqli_query($conn,$sql);

           $newbalance = $receiverbalance + $amount;
           $sql = "UPDATE customers set current_balance=$newbalance where id=$to";
           mysqli_query($conn, $sql);

           $sender = $sql1['name'];
           $receiver = $sql2['name'];
           $sql = "INSERT INTO transaction(`name`, `transfer_to`, `amount`) VALUES ('$sender', '$receiver', '$amount')";
           $query=mysqli_query($conn, $sql);

           if($query){
             echo"<script> alert('Transaction Successful');
                           window.location='transaction.php';
                  </script>";
           }
         }
}
         ?>
     </div>
    </form>
  </body>
</html>
