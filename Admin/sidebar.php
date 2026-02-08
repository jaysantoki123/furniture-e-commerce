<!-- FontAwesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<div class="sidebar">
    <div class="sidebar-header">
        <h3>Furni Admin</h3>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="products.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'products.php' || basename($_SERVER['PHP_SELF']) == 'add_product.php' ? 'active' : ''; ?>">
                <i class="fas fa-box"></i> Products
            </a>
        </li>
        <li>
            <a href="orders.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'orders.php' || basename($_SERVER['PHP_SELF']) == 'add_order.php' ? 'active' : ''; ?>">
                <i class="fas fa-shopping-cart"></i> Orders
            </a>
        </li>
        <li>
            <a href="users.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'users.php' || basename($_SERVER['PHP_SELF']) == 'add_user.php' ? 'active' : ''; ?>">
                <i class="fas fa-users"></i> Users
            </a>
        </li>
        <li>
            <a href="review%26rating.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'review%26rating.php' || basename($_SERVER['PHP_SELF']) == 'add_review.php' ? 'active' : ''; ?>">
                <i class="fas fa-star"></i> Review & rating
            </a>
        </li>
        <li>
            <a href="cart.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'cart.php' || basename($_SERVER['PHP_SELF']) == 'add_cart.php' ? 'active' : ''; ?>">
                <i class="fas fa-shopping-cart"></i> Cart
            </a>
        </li>
        <li>
            <a href="../index.php">
                <i class="fas fa-sign-out-alt"></i> Back to Shop
            </a>
        </li>
    </ul>
</div>