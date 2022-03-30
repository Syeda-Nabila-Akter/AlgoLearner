<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "audible";
$conn = new mysqli($servername,$username,$password,$dbname);

$var = $_POST['action'];

switch($var){
    case 'add_to_cart':
        $book_id = $_POST['book_id'];
        $book_name = $_POST['book_name'];
        $image = $_POST['image'];
        $audio = $_POST['audio'];
        $price = $_POST['price'];
        $user_id = $_POST['id'];

        $sql = "select * from cart where user_id = $user_id and book_id = $book_id";
        
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)==1){
            $status = '<div class="alert alert-danger role="alert">Item is already added to the cart</div>';
        }else{
            $sql = "INSERT INTO cart(order_id, book_id, book_name, image, audio, price, total_price, user_id) VALUES ('', '$book_id','$book_name', '$image', '$audio', '$price','$price', '$user_id')";

            if(mysqli_query($conn, $sql)){
                $status = '<div class="alert alert-danger role="alert">Item added to cart</div>';
            }else{
                $status = '<div class="alert alert-danger role="alert">Cannot add to cart</div>';
            }
        }

        echo $status;
        break;

        default:

        break;
}

?>