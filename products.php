<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Ethica Fashions</title>
  </head>

  <body>
  <?php include 'navbar.php' ?> 

    <div class="shop">
      <div class="shop-catalogue">
        <form action="" method="post">
        <div class="product-catalogue">
          <div class="left-catalogue">
            <img src="assets/image1.jpg" alt="" />
          </div>
          <div class="right-catalogue">
            <div class="product-info">
              <div class="product-title">
                <h1>Trench Wear</h1>
                <div class="cart-icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
              </div>
              <div class="item-desc">
                <span
                  >Custom trench coat sourced from good will. Redesigned to fit
                  our standards</span
                >

                <div class="cart-buttons">
                  <button class="btn" name="trench_wear">Add to cart</button>
                  <button class="btn">Buy now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-catalogue">
          <div class="left-catalogue">
            <img src="assets/image2.jpg" alt="" />
          </div>
          <div class="right-catalogue">
            <div class="product-info">
              <div class="product-title">
                <h1>Sea Glass</h1>
                <div class="cart-icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
              </div>
              <div class="item-desc">
                <span
                  >Our sun glasses made out of sea shells. Helping in cleaning
                  up our oceans.</span  >

                <div class="cart-buttons">
                  <button class="btn" name="sea_glass">Add to cart</button>
                  <button class="btn">Buy now</button>
                </div>
               </div>
            </div>
          </div>
        </div>
        <div class="product-catalogue">
          <div class="left-catalogue">
            <img src="assets/image3.jpg" alt="" />
          </div>
          <div class="right-catalogue">
            <div class="product-info">
              <div class="product-title">
                <h1>Casual Blouse</h1>
                <div class="cart-icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
              </div>
              <div class="item-desc">
                <span
                  >Casual Blouse made out of reused clothing materials in a
                  factory that is sustainable to the environment.</span
                >

                <div class="cart-buttons">
                  <button class="btn" name="blouse">Add to cart</button>
                  <button class="btn">Buy now</button>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="product-catalogue">
          <div class="left-catalogue">
            <img src="assets/image4.jpg" alt="" />
          </div>
          <div class="right-catalogue">
            <div class="product-info">
              <div class="product-title">
                <h1>Maroon Jacket</h1>
                <div class="cart-icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
              </div>
              <div class="item-desc">
                <span
                  >Fully custom made jacket for women. Come with sustainable
                  fabric made out os reused cotton.</span
                >

                <div class="cart-buttons">
                  <button class="btn" name="jacket">Add to cart</button>
                  <button class="btn" name="order_jacket">Buy now</button>
                </div>
               </div>
            </div>
          </div>
        </div>
</form>
      </div>
    </div>
    <?php include 'footer.php' ?>

    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
