<?php
// update-cart.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'update') {
        // Get the cart data from the client-side
        $cartData = json_decode($_POST['cartData'], true);
        $_SESSION['giohang'] = $cartData;
        

        // Respond with a success message
        echo true;
    }
}
?>
