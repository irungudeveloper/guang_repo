<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Guang Project</title>
  </head>
  <body>
    
    <div class="row m-0 p-2 justify-content-center">
      <div class="col-10 m-0 p-2">
        <div class="card">
          <div class="card-header">
            <h3>Product Edit Form</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-12">
                  <label for="p_name">Product Name</label>
                  <input type="text" name="p_name" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <label for="p_image">Product Image</label>
                  <input type="file" name="p_image" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-6">
                  <label for="quantity">Product Quantity</label>
                  <input type="number" name="quantity" class="form-control">
                </div>
                <div class="col-6">
                  <label for="price">Product Price</label>
                  <input type="number" name="price" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <label for="description">Product Description</label>
                  <textarea class="form-control" name="description">
                    
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 text-center">
                  <input type="submit" name="submit" value="Update Product" class="btn btn-solid btn-success">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
