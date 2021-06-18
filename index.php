<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>E-Kamers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="navigation">
        <span class="nav"><i id="navStore" class="fas fa-store"></i></span>
        <span class="nav"><i id="navUser" class="fas fa-user"></i></span>
      </div>
      <div id="store">
        <div id="categories">
          <span>Shoes</span>
          <span>Electronic Accessories</span>
          <span>TV & Home Appliances</span>
          <input id="search" type="text" placeholder="Search product">
        </div>
        <div class="row">
          <div class="product" name="Adidas Unisex VS Set Mule FX4849 White">
            <img id="productImage" src="images/shoes/adidas-1.png">
            <span>Adidas Unisex VS Set Mule FX4849 White</span>
            <span id="price">299$</span>
            <div id="quantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
              <button type="submit"><i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="product" name="Adidas Response CI">
            <img id="productImage" src="images/shoes/adidas-2.png">
            <span>Adidas Response CI</span>
            <span id="price">299$</span>
            <div id="quantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
              <button type="submit"><i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="product" name="Converse Chuck Taylor All Star Tangerine">
            <img id="productImage" src="images/shoes/converse-1.png">
            <span>Converse Chuck Taylor All Star Tangerine</span>
            <span id="price">299$</span>
            <div id="quantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
              <button type="submit"><i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="product" name="Converse All Star Red">
            <img id="productImage" src="images/shoes/converse-2.png">
            <span>Converse All Star Red</span>
            <span id="price">299$</span>
            <div id="quantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
              <button type="submit"><i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="product" name="Nike Zoom">
            <img id="productImage" src="images/shoes/nike.png">
            <span>Nike Zoom</span>
            <span id="price">299$</span>
            <div id="quantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
              <button type="submit"><i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="product" name="Vans Edvard Munch">
            <img id="productImage" src="images/shoes/vans.png">
            <span>Vans Edvard Munch</span>
            <span id="price">299$</span>
            <div id="quantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
              <button type="submit"><i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div id="user">
        <div>
          <span id="usernameValid" class="hidden"><i class="fas fa-exclamation-triangle"></i>No username registered! Click register to continue</span>
          <input id="username" type="text" placeholder="Username">
          <input id="password" type="password" placeholder="Password">
          <br>
          <button id="loginButton" type="submit">Login</button>
          <button id="registerButton" type="submit">Register</button>
        </div>
      </div>
      <div id="userInteract">
        <div class="row">
          <div class="order">
            <img src="images/shoes/converse-1.png">
            <span>Converse Chuck Taylor All Star Tangerine</span>
            <div id="userQuantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
            </div>
            <input type="button" value="Buy">
          </div>
        </div>
        <div class="row">
          <div class="order">
            <img src="images/shoes/converse-1.png">
            <span>Converse Chuck Taylor All Star Tangerine</span>
            <div id="userQuantity">
              <input type="button" value="-">
              <input type="number" value="0" min="0" placeholder="Quantity">
              <input type="button" value="+">
            </div>
            <input type="button" value="Buy">
          </div>
        </div>
      </div>
    </div>
    <script src="design.js"></script>
    <script src="login.js"></script>
    <script src="search.js"></script>
  </body>
</html>
