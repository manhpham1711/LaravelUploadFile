
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Bootstrap Example</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
   <a href="/photos"><button> Close </button></a>
   <div class="container-fluid mt-3">
      <h4 class="mb-2">Add Photo</h4><hr>
      <form action='/photos' method="POST" enctype="multipart/form-data">
       @csrf
       <div class="form-group col-sm-6">
         <label for="name">Name Photo</label>
         <input type="text" class="form-control"
         id="name" name="name" placeholder="Tên bức hình">
      </div>

      <div class="form-group">
         <label for="inputAddress">Image</label>
         <input type="file" class="form-control"
         id="myAddress" name="photo">
      </div>

      <button type="submit" class="btn btn-primary">Add</button>
   </form>
</div>

</body>
</html>