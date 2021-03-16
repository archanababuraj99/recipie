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
    <nav class="navbar navbar-success bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img height="55px" src="https://previews.123rf.com/images/tigatelu/tigatelu1311/tigatelu131100120/23826071-chef-cartoon-holding-platter.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
            TASTY KITCHEN
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
                <img height="500px" src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="col col-12 col-sm-6 col-lg-6">
                <h2><center>How can we help you??????</center></h2>
                <p><i><span style="font-size: x-large;">Contact with Us</span></i></p>
                <p><i><span style="font-size: x-large;">Our Office: 34/67 Lane, Rose Garden, North</span></i></p>
                <p>Ph no:0648939</p>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
</body>
</html>