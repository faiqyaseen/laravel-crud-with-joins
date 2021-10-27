<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SMS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              <a class="nav-link" href="#">Services</a>
              <a class="nav-link" href="#">About</a>
              <a class="nav-link">Contact</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container my-3">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <h3>Teacher Update</h3>
            </div>                
          </div>
          
          <div class="row justify-content-center my-4 p-4 bg-warning">
            <div class="col-md-6">
              <form action="/update-teacher" method="POST">
                @csrf
                <input id="id" value="{{$teacher['id']}}" type="hidden" class="form-control" name="id" placeholder="Enter Teacher Name">
                <div class="fomr-group">
                  <label for="name">Name:</label>
                  <input id="name" value="{{$teacher['name']}}" type="text" class="form-control" name="name" placeholder="Enter Teacher Name">
                </div>
                <input type="submit" value="Update" class="btn btn-primary my-2">
              </form>
            </div>                
          </div>
      </div>
</body>
</html>