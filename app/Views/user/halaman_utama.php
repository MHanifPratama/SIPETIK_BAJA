<!DOCTYPE html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css">
  </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Daftar Tabel</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="beli_tiket.php">Pesan Tiket Bus</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="lihat_tiket.php">Lihat Tiket</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                  </li>
              </ul>
            </div>
          </div>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/Arsha/assets/css/style_hu.css">
    <title>Video-2</title>
</head>
<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1>Book Now</h1>
            <p>Tes.</p>
        </div>
        <div class="main-form">
            <form action="index.php" method="get">
                <div>
                    <span>Full Name</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Email Address</span>
                    <input type="email" name="name" id="name" placeholder="Write your email here..." required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>Number of People</span>
                    <select name="people" id="people" required>
                        <option value=""><---People---></option>
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span>Time</span>
                    <input type="text" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>Date</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div>
                    <span>Phone Number</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here..." required>
                </div>
                <div id="submit">

                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</body>

</html>