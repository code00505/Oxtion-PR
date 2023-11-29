<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    
    <div>
        <?php
        // Check if product is added to the cart
        if(isset($_GET['product'])) {
            $product = $_GET['product'];
            echo "<p>Added $product to the cart.</p>";
            // Here you can add the product to the cart or perform other actions
        } else {
            echo "<p>No product added to the cart.</p>";
        }
        ?>
        <a href="products.html">Back to Products</a>
    </div>
</body>
</html>