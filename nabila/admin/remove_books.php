<?php
require_once 'header.php';
?>
<html>
<div class="container">
    <div class="row">
        <div>

        </div>
        <div>
          <div class="container-fluid">
    
          <form  method="post">
          
            <input class="form-control me-2" type="search" placeholder="Enter Id to delete" aria-label="Search" name="book_id"><br>
            <button name="all" type="all">View All</button>
            <button name="submit" type="submit">DELETE</button>

            <br>
          </form>

          </div>
        </div>
        
        </div>
</div> 
  
</html>


<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "audible";
$conn = new mysqli($servername,$username,$password,$dbname);



if(isset($_POST['all'])){

    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
  
    if($result->num_rows>0){
      echo "<table border='1' align='center' cellpadding='15px'>";
  
      echo "<tr><th>Book Id</th><th>Book Name</th><th>Author</th><th>Category</th></tr>";
      while($row = $result->fetch_assoc()) {
       echo "<tr><td>". $row["book_id"] ."</td>
        <td>". $row["book_name"] ."</td><td>". $row["author"] ."</td><td>". $row["category"] ."</td></tr>";
        }
        echo "</table>";
      }
      else{
      echo "0 results";
    }
}

if(isset($_POST['submit'])){
  $book_id = $_POST['book_id'];
  $sql = "DELETE FROM books WHERE book_id='$book_id'";
  $result = $conn->query($sql);

  if($result->num_rows>0){
    echo "<table border='1' align='center' cellpadding='15px'>";

    echo "<tr><th>id</th><th>name</th></tr>";
    while($row = $result->fetch_assoc()) {
     echo "<tr><td>". $row["id"] ."</td>
      <td>". $row["username"] ."</td></tr>";
      }
      echo "</table>";
    }
    else{
    echo "0 results";
  }
}
?>
<br><br><br>
<?php
require_once 'footer.php';
?>
