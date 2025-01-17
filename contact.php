

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="navbar-top">
            <div class="social-link">
                <i><img src="/image/twitter.png" alt="" style="width: 30px;"></i>
                <i><img src="/image/facebook.png" alt="" style="width: 30px;"></i>
                <i><img src="/image/google-plus.png" alt="" style="width: 30px;"></i>
            </div>
            <div class="logo">
                <h3><span>Luxe</span>Home</h3>
            </div>
            <div class="icon">
                <i><img src="/image/search.png" alt="" style="width: 20px;"></i>
                <i><img src="/image/heart.png" alt="" style="width: 20px;"></i>
                <i><img src="/image/shopping-cart.png" alt="" style="width: 25px;"></i>
            </div>
        </div>
    </div>
    
    <div class="content-page">
        <nav class="navbar navbar-expand-sm" id="navbar-color">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span><i><img src="/image/menu.png" alt="" style="width: 30px;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="boutique.html">Boutique</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">A Propos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Blog.html">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>



    <h3 class="text-center" style="margin-top: 50px;">Nous contactez</h3>
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-6 my-3 my-md-0">
        <div class="card">
          <img src="/image/about.png" alt="">
        </div>
      </div>
      <div class="col-md-6 py-3 py-md-0">
        <h5 class="text-center">Veillez Nous Contactez</h5>


<!--------- FORMULAIRE Lier à formtraitement  ---------------->


        <form method="post" action="formtraitement.php">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="nom et prenom" name="name">
              </div>
              <div class="col">
                <input type="email" class="form-control" placeholder="manbypass@gmail.com" name="email">
              </div>
            </div>
            <label for="comment">Commentaire:</label>
            <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            <button type="submit" class="btn btn-success mt-4" name="envoyez">Envoyez</button>
          </form>
      </div>
    </div>



    <!--------- Footer   ----->
    <footer id="footer">
        <h1 class="text-center">LuxeHome</h1>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptas!</p>
        <div class="icon text-center">
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-twitter"></i>
          <i class="bx bxl-whatsapp"></i>
          <i class="bx bxl-instagram"></i>
        </div>
        <div class="copyright text-center">
          &copy; copyright <strong><span>LuxeHome</span></strong>. All Right Reserved
        </div>
        <div class="crdite text-center">
          <p>Designed By <a href="#">El Professor KABRE Coding</a></p>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>