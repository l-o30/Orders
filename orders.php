

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Orders</title>
    <link rel="stylesheet" href="Style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>
<body>
    <div class="menu-bar">
    <ul>
    <li class="active"><a href="#" ><i class="fa fa-home"></i>Home</li>
    <li><a href="#" ><i class="fa fa-user"></i>About Us>
    <div class="sub-menu-1">
        <ul>
            <li><a href="#">Mission</a></li>
            <li><a href="#">Vision</a></li>
            <li><a href="#">Team</a></li>
        </ul>
    </div>

   <ul>
    <li><a href="#" ><i class="fa fa-clone"></i>Services</li>
    <li><a href="#" ><i class="fa fa-users"></i>Clients</li>
    <li><a href="#" ><i class="fa fa-inr"></i>Pricing</li>
    </ul>
    </div>

    <h1>Place Your Orders here!</h1>
    <div class="order-table">
    <table class="table table-stripped table-dark">
        <thead> 
           <tr>
               <th>ID</th>
               <th>Order number</th>
               <th>Order Date</th>
               <th>Product</th>
               <th>Quantity</th>
               <th>Price</th>
           </tr>  
        </thead>
        <tbody id="tbody"></tbody>
        <tr>
            <td>1</td>
            <td>2030</td>
            <td>25/09/2020</td>
            <td>NFC Tags</td>
            <td>10</td>
            <td>300.99</td>
            <td><i class="fas fa-edit btnedit"></i></td>
        </tr>
    </table>
    </div>
    <form>
    <form action="" method="POST">    
    <label> Email</label>
    <input type="text" name="Email" value="Enter Your Email">
    <label>Password</label>
    <input type="text" name="password" value="Enter password">    
    </form>

 
</body>
</html>
