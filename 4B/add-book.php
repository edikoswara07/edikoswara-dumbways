<?php
  include ('conn.php' );
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Book List</title>
  </head>
  <body>


  <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Book List
      </a>
    </div>
  </nav>


  <div class="container mt-5">
      <div class="row align-items-center">
        <div class="mb-5">
        <a href="/" class="m-5">Kembali</a>
        </div>
 
          <form action="add-book.php" method="POST" name="simpan">
          <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name" placeholder="Name" name="Name">
          </div>
          <div class="mb-3">
            <label for="Category" class="form-label">Category ID</label>
            <input type="text" class="form-control" id="Category" placeholder="Category" name="Category">
          </div>
          <div class="mb-3">
            <label for="Penulis" class="form-label">Penulis ID</label>
            <input type="text" class="form-control" id="Penulis" placeholder="Penulis" name="Penulis">
          </div>
          <div class="mb-3">
            <label for="Publication" class="form-label">Publication year</label>
            <input type="text" class="form-control" id="Publication" placeholder="Publication" name="Publication">
          </div>
           <div class="mb-3">
            <label for="Image" class="form-label">Image Url</label>
            <input type="text" class="form-control" id="Image" placeholder="Image" name="Image">
          </div>
          <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </form>
      </div>


  <?php
 
  if(isset($_POST['simpan'])) {
    $name = $_POST['Name'];
    $Category = $_POST['Category'];
    $Penulis = $_POST['Penulis'];
    $Publication = $_POST['Publication'];
    $Image = $_POST['Image'];

    $sql = "INSERT INTO book_tb
    VALUES ('10', '$name', $Category, $Penulis,$Publication, '$Image')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo "<a href='/'>Kembali</a>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
      
  }
  ?>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>