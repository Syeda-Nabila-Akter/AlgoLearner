<?php
require_once 'header.php';
$error = "";
?>

<html>
<body bgcolor = "#FFFFFF">


<div align="center">
<div style = "width:400px; border: solid 1px #333333; " align = "left">
<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Add Books</b></div>
<div style = "margin:30px">
<form action="" method="post" enctype="multipart/form-data">

<label>Name of Book:</label> <br>
<input type="text" name="book_name" required><br><br>

<label>Author:</label> <br>
<input type="text" name="author" required><br><br>

<label>Price:</label> <br>
<input type="text" name="price" required><br><br>

<label>Category:</label> <br>
<input type="text" name="category" required><br><br>

<label>Upload Book Image:</label> <br>
<input type="file" name="img" required><br><br>

<label>Upload Audio File: </label><br>
<input type="file" name="audio" required><br><br>

<input type="submit" name="submit">

</form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "audible";
$conn = new mysqli($servername,$username,$password,$dbname);

?>

<?php
if(isset($_POST['submit'])){
  $book_name = $_POST['book_name'];
  $author = $_POST['author'];
  $price = $_POST['price'];
  $category = $_POST['category'];

  $img = $_FILES['img']['name'];
  $tempname = $_FILES['img']['tmp_name'];

  $audio = $_FILES['audio']['name'];
  $tempaudio = $_FILES['audio']['tmp_name'];
  
  $import = "INSERT INTO book (book_name, author, price,category, image, audio) values('$book_name', '$author','$price','$category', '$img', '$audio')";
  $qu = mysqli_query($conn, $import) or die(mysqli_error());
  move_uploaded_file($tempname, "../pic/".$img);
  move_uploaded_file($tempaudio, "../audio/".$audio);
  
}

?>

<br><br><br><br><br><br><br><br><br>
<?php
require_once 'footer.php';
?>