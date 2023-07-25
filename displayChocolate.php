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
  </head>
  <body>
    <div class="bg-secondary-subtle py-5">
      <div class="w-75 mx-auto bg-white rounded-3 p-5">
        <h2
          class="bg-black w-75 text-white mx-auto text-center py-2 mb-4 rounded-3"
        >Chocolate Management System </h2>
        <button class="border-0 bg-transparent">
          <a class="text-black fw-bold text-decoration-none" href="addChocolate.php">New Chocolate</a>
        </button>

        <table class="table mt-3">
          <thead>
          <tr>
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
                  $image = $row['image'];
                  $name = $row['name'];
                  $country = $row['country'];
                  $category = $row['category'];
                  echo '<tr>
                          <th><img class="rounded-3" width="70" src="'.$image.'" alt=""></th>
                          <td class="pt-4">'.$name.'</td>
                          <td class="pt-4">'.$country.'</td>
                          <td class="pt-4">'.$category.'</td>
                          <td class="pt-4">
                            <button class="btn btn-primary"><a class="text-white text-decoration-none" href="addChocolate.php">Update</a></button>
                            <button class="btn btn-danger"><a class="text-white text-decoration-none" href="addChocolate.php">Delete</a></button>
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
