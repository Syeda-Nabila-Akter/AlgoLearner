<?php
require_once 'header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert success" style="background-color: green; color:white; text-align: center">
            <h5>Welcome to Admin Panel</h5>
            </div>

            <div class="card-deck">
            
            
            <div class="card" style="width: 18rem;">
  <img src="../images/book_insert.png" class="card-img-top" height="200" width="100" alt="...">
  <div class="card-body">
    <h3 class="card-title" text-primary>Insert Books</h3>
    
    <a href="insert_books.php" class="btn btn-primary" style="width:100%;">Insert Books</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="../images/books.png" class="card-img-top" height="200" width="100" alt="...">
  <div class="card-body">
    <h3 class="card-title">View Books</h3>
    <a href="view_books.php" class="btn btn-primary" style="width:100%;">View Books</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="../images/remove_books.png" class="card-img-top" height="200" width="100" alt="...">
  <div class="card-body">
    <h3 class="card-title">Remove Books</h3>
    <a href="../orderHistory.php" class="btn btn-primary" style="width:100%;">Remove Books</a>
  </div>
  </div>

  
  

</div>       
        </div>
    </div>
</div>