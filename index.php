<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-success bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img height="55px" src="data:image/jpeg;base64,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IEREAREQBERAExYigtRSjC4O+ZYgGotnwT5Wu1I/CeI/36ecsqOMc2ZKe/cWZQLfZvLfFYZaqlHFwf3ccjNYrUamCbi9EnfxX9D8jLp31KNUW3uXq/4rZh9RRlX7XFvPTpLKlTyj96dBK7A41WGZDccf9xwMskqA7jIkSj3E8lgOMr9o7YSloO853KN5PDwkUS2TcRiAgueJsBxYncAJir/4lI886+oDf6ZF2ZhnLe+rG9QjugbqangOvMyVjPipHlU/FHH5wCo2fsjFJj62JqYovh3SyUNbIe7Y23LazajU5td0t02fTFVq4Ue8ZQpbjlW9lHIXJkktbfPsgsm0fLT7EQQJXYTY9OlXrYlR362QN9gEC3jf5CWE+yKJUmk0u5U7O2Vld6tTVmcsBwUX08TaW0RIjBRVImc3N2xERLFRERAEREAREQBERAEREAREQBPjqCLEXB3g8Z9iAUGL7PWbPhnyN9U/D5Hh4G8wA4xdDRVuoI19GmzRJ3MrtRri4TGVdGK0h03+VifxEscBsWnS11Z+LHf5cpZRFsnajGlO3GeMVTLAW3h1PkGF/leZ4kEmvdq+ylPaJoGo9RPcVM65CBc6b7jQ90WYajXnNgn2IAny0+xAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAP//Z" alt="" width="30" height="24" class="d-inline-block align-top">
        Archies Kitchen
      </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">OUR RECIPIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">NEW REGISTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  </nav>
  <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-6 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img height="500px" src="https://cdn.vox-cdn.com/thumbor/fWdJKI_dirNSL2bBWVVWVW_I4-Q=/0x0:7360x4912/1200x800/filters:focal(3092x1868:4268x3044)/cdn.vox-cdn.com/uploads/chorus_image/image/67000785/shutterstock_1435374326.0.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img height="500px" src="https://www.supermarketperimeter.com/ext/resources/2019/2/AfricanFoods_Lead.jpg?1551280728" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img height="500px" src="https://img.etimg.com/thumb/msid-72299767,width-1200,height-900,imgsize-365179,overlay-etpanache/photo.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
          <div class="col col-12 col-sm-6 col-lg-6">
              <h2><i><center>Login</center></i></h2>
              <table class="table">
                  <tr>
                      <td>Username</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="password" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><button class="btn btn-Success">LOGIN</button></td>
                  </tr>
              </table>
          </div>
      </div>
      <div class="container">
          <h2><center><i>The Best and soul touched RECIPIES!!!</i></center></h2>
      </div>
      

      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>