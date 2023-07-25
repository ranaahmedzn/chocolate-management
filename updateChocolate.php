<?php
    include 'connection.php';

    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM crud WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $image = $row['image'];
        $name = $row['name'];
        $country = $row['country'];
        $category = $row['category'];

        // update code
        if(isset($_POST['name'])){

            $name = $_POST['name'];
            $image = $_POST['image'];
            $country = $_POST['country'];
            $category = $_POST['category'];
          
            $sql = "UPDATE `crud` SET `image`='$image',`name`='$name',`country`='$country',`category`='$category' WHERE id=$id";

            if (mysqli_query($conn, $sql)) {
            echo "Product updated successfully";
            } else {
            echo "Error updating record: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    }
?>



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
        >
          Chocolate Management System
        </h2>
        <button class="border-0 bg-transparent">
          <a class="text-black fw-bold text-decoration-none" href="displayChocolate.php"
            >All Chocolates</a
          >
        </button>
        <hr />

        <div class="bg-secondary-subtle px-5 py-3 rounded-3">
          <h4 class="text-center">Update Chocolate</h4>
          <p class="text-center">Use the below form to update your existing product</p>

          <form method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                required
                placeholder="Enter chocolate name"
                value="<?php echo $name; ?>"
              />
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input
                type="text"
                class="form-control"
                id="image"
                name="image"
                required
                placeholder="Product image url"
                value="<?php echo $image; ?>"
              />
            </div>
            <div class="mb-3">
              <label for="country" class="form-label">Country</label>
              <input
                type="text"
                class="form-control"
                id="country"
                name="country"
                required
                placeholder="Enter country name"
                value="<?php echo $country; ?>"
              />
            </div>

            <div class="mb-3">
              <label for="country" class="form-label">Category</label>
              <select value="<?php echo $image; ?>" name="category" class="form-select">
                <option value="Premium">Premium</option>
                <option value="Signature">Signature</option>
                <option value="Exclusive">Exclusive</option>
              </select>
            </div>

            <div class="mb-3 mt-4">
              <button
                type="submit"
                class="btn btn-dark w-100 fw-bold">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
