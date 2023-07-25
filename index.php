<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chocolate Management System</title>
    <!-- bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/e713737a14.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-secondary-subtle">
    <div class="container py-5">
      <div class="product-container mx-auto bg-white shadow-md rounded-3 p-5">
        <h2 class="bg-black text-white mx-auto text-center py-2 rounded-3 heading"
        >Chocolate Management System </h2>
        <button class="border border-secondary-subtle bg-transparent rounded-1 p-2 mb-2">
          <a class="text-black fw-medium text-decoration-none d-flex justify-content-center align-items-center gap-2" href="addChocolate.php">
          <i class="fa-solid fa-plus"></i>  
          <span>New Chocolate</span>
          <img width="20" src="./chocolate-bar.png" alt="">
          </a>
        </button>

        <table class="mt-3">
          <thead>
          <tr id="heading-row">
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Country/Factory</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include 'connection.php';

              $sql = 'SELECT * FROM crud';
              $result = mysqli_query($conn, $sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $image = $row['image'];
                  $name = $row['name'];
                  $country = $row['country'];
                  $category = $row['category'];
                  echo '<tr id="product-row">
                          <th><img class="rounded-3" width="70" src="'.$image.'" alt=""></th>
                          <td>'.$name.'</td>
                          <td>'.$country.'</td>
                          <td>'.$category.'</td>
                          <td>
                            <button class="update-btn"><a class="text-primary text-decoration-none" href="updateChocolate.php?updateid='.$id.'"><i class="fa-regular fa-pen-to-square"></i></a></button>

                            <button class="delete-btn"><a class="text-danger text-decoration-none" href="deleteChocolate.php?deleteid='.$id.'">
                            <i class="fa-solid fa-trash-can"></i>
                            </a></button>
                          </td>
                        </tr>';
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
