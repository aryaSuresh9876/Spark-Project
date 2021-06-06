<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Banking System</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">

    <!-- css-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css">
  </head>
  <body>
    <div class="container">
      <nav>
        <h4 class="logo">CashFly</h4>
      </nav>
      <table>
        <tr>
          <td class="main-content">
            <h1 class="main">PAYMENTS HAVE NEVER BEEN EASIER</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             <div class="btn">
               <a href="customers.php" style="text-decoration: none;" ><div class="button">
                 view customers
               </div></a>
             </div>
          </td>
          <td>
            <div class="card">
              <form>
                <h1 class="card_title">Enter Payment Information</h1>
                <div class="card_row">
                  <div class="card_col">
                    <label for="cardNumber" class="card_label">Card Number</label>
                    <input type="text" class="card_input card_input_large" placeholder="xxxx-xxxx-xxxx-xxxx" id="cardNumber"name="" value="">
                  </div>
                  <div class="card_col card_chip">
                    <img src='images/chip-img.png' alt="">
                  </div>
                </div>
                <div class="card_row">
                  <div class="card_col">
                    <label class="card_label">Expiry Date</label>
                    <input type="text" class="card_input" id="cardExpiry" placeholder="xx/xx" name="" value="">
                  </div>
                  <div class="card_col">
                    <label class="card_label">CCV</label>
                    <input type="text" class="card_input" id="cardCcv" placeholder="xxx">
                  </div>
                  <div class="card_col card_brand">
                    <i id="cardBrand"></i>
                  </div>
                </div>
              </form>
            </div>
          </td>
        </tr>
      </table>


      </div>
    </div>
  </body>
</html>
