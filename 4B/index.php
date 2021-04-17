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
        <a href="/add-penulis.php" class="m-5">Tambah data penulis</a>
        <a href="/add-book.php" class="m-5">Tambah data buku</a>
        <a href="/add-category.php" class="m-5">Tambah data category</a>
        </div>
        <h1>List Penulis</h1>
        <?php


  $sql = "select * from penulis";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    ?>
          <div class="col-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?= $row['name']; ?></h5>
                <p class="card-text"><?= $row['age']; ?></p>
                <a href="/delete-penulis.php?id=<?=$row['id'] ?>">Hapus</a>
              </div>
            </div>
          </div>
    <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();

        ?>

        <h1>List ALL</h1>
        <?php


  $sql = "select book_tb.name as book_name , book_tb.img as image, penulis.name as penulis_name  , category_tb.name from
((book_tb inner join penulis on book_tb.penulis_id = penulis.id) 
inner join category_tb on book_tb.category_id = category_tb.id);
";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    ?>
          <div class="col-4 mb-3">
            <div class="card">
              <img src="<?=  $row['image']; ?>" class="card-img-top img-thumbnail img-fluid" alt="cover" style="height: 200px; object-fit:cover">
              <div class="card-body">
                <h5 class="card-title"><?= $row['book_name']; ?></h5>
                <p class="card-text"><?= $row['penulis_name']; ?></p>
              </div>
            </div>
          </div>
    <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();

        ?>

      </div>
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