<?php
$bookname_error=$author_error=$price_error=$price_error=$category_error=$image_error=$audio_error="";
?>

<html>
<div class="container">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-12">
        <h4>Provide below details to add book</h4>
        <form class="form-inline" method="post">
        <div class="form-group">
        <label for="">
        Name of Book
        </label>
        <input type="text" name="book_name" value="" class="form-control">
        <span class="text-danger">
        <?php
        echo $bookname_error; 
        ?></span>
        </div>

        <div class="form-group">
        <label for="">
        Author
        </label>
        <input type="text" name="author" value="" class="form-control">
        <span class="text-danger">
        <?php
        echo $author_error; 
        ?></span>
        </div>

        <div class="form-group">
        <label for="">
        Price
        </label>
        <input type="text" name="price" value="" class="form-control">
        <span class="text-danger">
        <?php
        echo $price_error; 
        ?></span>
        </div>

        <div class="form-group">
        <label for="">
        Catrgory
        </label>
        <input type="text" name="Category" value="" class="form-control">
        <span class="text-danger">
        <?php
        echo $category_error; 
        ?></span>
        </div>

        <div class="form-group">
        <label for="">
        Upload Book Image
        </label>
        <input type="file" name="book_img" value="" class="form-control">
        <span class="text-danger">
        <?php
        echo $image_error; 
        ?></span>
        </div>

        <div class="form-group">
        <label for="">
        Upload Audio File
        </label>
        <input type="file" name="book_audio" value="" class="form-control">
        <span class="text-danger">
        <?php
        echo $audio_error; 
        ?></span>
        </div>

        <div class="form-group">
        <input type="submit" name="submit" value="Add Book" class="btn-btn-success">
        </div>
        </form>
  </div>
</nav>
        </div>
    </div> 

</html>