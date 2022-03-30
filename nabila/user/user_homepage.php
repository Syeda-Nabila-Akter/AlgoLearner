<?php
require_once 'header2.php';

$output="";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "audible";
$conn = new mysqli($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.sidebar tr td{
    width: 200px;
    height: 39px;
    text-align: center;
    border-collapse: collapse;
}

.sidebar tr:nth-child(even){
    background-color: dimgray;
    
}

.sidebar tr:nth-child(even):hover{
    background-color: #a39c8b;
    
}

.sidebar tr:nth-child(odd){
    background-color: dimgray;
    
}

.sidebar tr:nth-child(odd):hover{
    background-color: #a39c8b;
    
}


.sidebar tr:nth-child(1){
    background-color: crimson;
    color:white;
}

.sidebar tr:nth-child(1):hover{
    background-color: crimson;
    color:white;
}

.sidebar tr td a{
    color: white;
    text-decoration: none;
}

.tag{
    width: 100%;
    display: inline-table;
    height: 30px;
    background-color: dimgray;
    text-align: center;
    font-weight: bold;
    color: white;
}

#product
{
    padding: 15px;
}

</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <table class="sidebar">
            <tr><td>CATEGORIES</td></tr>
            <tr><td><a href="bestseller.php">Best Sellers</a></td></tr>
            <tr><td><a href="action.php">Action & Adventures</a></td></tr>
            <tr><td><a href="biography.php">Biography</a></td></tr>
            <tr><td><a href="comics.php">Comics</a></td></tr>
            <tr><td><a href="sifi.php">Fantasy and Scicence Fiction</a></td></tr>
            <tr><td><a href="novel.php">Novels</a></td></tr>
            <tr><td><a href="Science.php">Science & Technology</a></td></tr>
            
            </table>
        </div>
        <div class="col-sm-9">
        <div class="tag">
        BEST SELLERS
        </div>
        <div class="row">
        <?php
        $sql = "SELECT * FROM book WHERE category = 'Best Seller' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <br><br>
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3; " src="'.$row['audio'].'" >
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
            
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="audio" id="audio'.$row['audio'].'" value="'.$row['audio'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

            
            </form> </div>';
        }

        echo $output;
        ?>
        <div class="more"><a href="best_sellers.php">View more of bestsellers</a></div>
        </div>
        <br>
        <div class="tag">
        ACTION AND ADVENTURES
        </div>
        <div class="row">
        <?php

        $output="";
        $sql = "SELECT * FROM book WHERE category = 'Action and Adventures' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3;" src="'.$row['audio'].'">
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
           
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

            
            
            </form> </div>';
        }

        echo $output;
        ?>
        </div>
        <div class="more"><a href="best_sellers.php">View more of Action and Adventures</a></div>
        <br>
        <div class="tag">
        BIOGRAPHY
        </div>
        <div class="row">
        <?php
        $output="";
        $sql = "SELECT * FROM book WHERE category = 'Biography' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3;" src="'.$row['audio'].'">
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
            
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

            
            
            </form> </div>';
        }

        echo $output;
        ?>
        </div>
        <div class="more"><a href="best_sellers.php">View more of Biographies</a></div>
        <br>
        <div class="tag">
        COMICS
        </div>
        <div class="row">
        <?php
        $output="";
        $sql = "SELECT * FROM book WHERE category = 'Comics' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3;" src="'.$row['audio'].'">
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
            
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

            
            
            </form> </div>';
        }

        echo $output;
        ?>
        </div>
        <div class="more"><a href="best_sellers.php">View more of Comics</a></div>
        <br>
        <div class="tag">
        FANTASY AND SCIENCE FICTION
        </div>
        <div class="row">
        <?php
        $output="";
        $sql = "SELECT * FROM book WHERE category = 'Fantasy and Science Fiction' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3;" src="'.$row['audio'].'">
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
            
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

            
            
            </form> </div>';
        }

        echo $output;
        ?>
        </div>
        <div class="more"><a href="best_sellers.php">View more of Fantasy and Science Fictions</a></div>
        <br>

        <div class="tag">
        NOVELS
        </div>
        <div class="row">
        <?php
        $output="";
        $sql = "SELECT * FROM book WHERE category = 'Novel' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3;" src="'.$row['audio'].'">
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
            
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

            
            
            </form> </div>';
        }

        echo $output;
        ?>
        
        <div class="more"><a href="best_sellers.php">View more of Novels</a></div></div>
        <br>
        <div class="tag">
        SCIENCE AND TECHNOLOGY
        </div>
        <div class="row">
        <?php
        $output="";
        $sql = "SELECT * FROM book WHERE category = 'Science and Technology' ORDER BY book_id ASC";

        $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)){
            $output .= '<div class="col-sm-4" id="product">
            <img src="'.$row['image'].'" width="80%" height = "200">
            <iframe style="height: 60px; border:1px solid black; width: 204px; margin:0px; padding:0px; opacity: 0.3;" src="'.$row['audio'].'">
            </iframe>
            <h5 style ="font-size:medium">'.$row['book_name'].'</h5>
            <h5 style ="font-size:small">'.$row['author'].'</h5>
            
            
            <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">   

            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">

            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">

            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">

           
            
            </form> </div>';
        }

        echo $output;
        ?>
        </div>
        <div class="more"><a href="best_sellers.php">View more of Science and Technology books</a></div>
        </div>
    </div>

</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>

</html>
<br>
<?php
require_once 'footer.php';
?>