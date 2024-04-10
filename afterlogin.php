<?php
session_start();
$user=$_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/tejasproject/web icon.png">

    <title>BAKERY MANAGE-MENT SYSTEM</title>
</head>
<body>
    
    <nav class="navbar">
        <img src="./logo.png" alt=""  height="50px" class="logo">
        <h1>Welcome to online Bakery</h1>
        <div class="links">
        
        <a href="http://localhost/tejasproject/User dash bord/index.php" class="specificlinks"><?php echo "HELLO $user";?>

                <a href="http://localhost/tejasproject/logout.php" class="specificlinks"><img src="/tejasproject//admin/icon.svg" alt="Admin" height="30px" id="admin-logo" title="Log Out"></a> 
            </div>
        </nav>
        
        
        <section class="main">
            <h2>We Make Your Happy Day More Happy</h2>
            <p>scroll up to see more variety of our bakery and products.</p>
            <br><br><br><br>
            <!-- Button trigger modal -->   
            
        </section>
        <form action="http://localhost/tejasproject/bill.php"method="post">
    <div class="cake-card">
        <img src="https://www.fnp.com/images/pr/l/v20221205202754/chocolate-rose-designer-cake-2-kg_1.jpg" alt="cake1" class="cake-image">
        <h2 class="cake-name">Chocolate Fudge Cake</h2>
        <p class="cake-description">A rich and decadent chocolate cake with a fudgy frosting.</p>
        <p class="cake-description" ><b> ₹ 399</b></p>

        <input type="submit" value="Chocolate Cake" class="buy-button" name="choco_fudge"/>

    </div>
    <div class="cake-card">
        <img src="https://www.fnp.com/images/pr/l/v20221130174932/rose-paradise-chocolate-cake-eggless-half-kg_2.jpg" alt="cake2" class="cake-image">
        <h2 class="cake-name">Vanilla Bean Cake</h2>
        <p class="cake-description">A classic vanilla cake made with real vanilla beans.</p>
        <p class="cake-description"><b> ₹ 599</b></p>
        <input type="submit" value="venilla Cake" class="buy-button" name="choco_fudge">

    </div>
    
    <div class="cake-card">
        <img src="https://assets.winni.in/product/primary/2023/4/84499.jpeg?dpr=1&w=1000" alt="cake3" class="cake-image">
        <h2 class="cake-name">Chocolate Lava Cake</h2>
        <p class="cake-description">A moist and tangy Chocolate lava cake with cream cheese frosting.</p>
        <p class="cake-description"><b> ₹ 799</b></p>
        <input type="submit" value="Chocolate Lava Cake" class="buy-button" name="choco_fudge">

    </div>
    <div class="cake-card">
        <img src="https://flowera.in/wp-content/uploads/2023/05/Heart-Shape-Red-velvet-cake.jpg" alt="cake1" class="cake-image">
        <h2 class="cake-name">Red Velvet Anivarcery Cake</h2>
        <p class="cake-description">A rich and decadentRed Velvet Cake with a fudgy frosting.</p>
        <p class="cake-description"><b> ₹ 299</b></p>
        <input type="submit" value="Red Velvet Anivarcery Cake" class="buy-button" name="choco_fudge">

    </div>
    
    <div class="cake-card">
        <img src="https://rukminim2.flixcart.com/image/850/1000/kl175ow0/baking-sparkle-topper/w/h/9/ct178-decor-kafe-original-imagy9y5zfgeyc6h.jpeg?q=90&crop=false" alt="cake2" class="cake-image">
        <h2 class="cake-name">Wedding Anivarcery Cake</h2>
        <p class="cake-description">A classic vanilla cake with  white cream also a decorative.</p>
        <p class="cake-description"><b> ₹ 999</b></p>
        <input type="submit" value="Wedding Anivarcery Cake" class="buy-button" name="choco_fudge">

    </div>
    
    <div class="cake-card">
        <img src="https://www.cakeplaza.in/cdn/shop/products/panda-cake_x700.jpg?v=1608191522" alt="cake3" class="cake-image">
        <h2 class="cake-name">Black Forest Panda cake</h2>
        <p class="cake-description">A classical Chocolate Lava Cake with decoration of sweet little panda .</p>
        <p class="cake-description"><b> ₹ 499</b></p>

        <input type="submit" value="Black Forest Panda cake" class="buy-button" name="choco_fudge">
    </div>
</form>
    
</body>
</html>