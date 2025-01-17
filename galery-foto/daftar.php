<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
      ></script>
      <link rel="stylesheet" href="css/stylelogin.css" />
      <title>DAFTAR</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="proses_daftar.php" method="post" class="sign-in-form">
            <h2 class="title">DAFTAR</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="namalengkap" placeholder="Nama Lengkap" />
            </div>
            <div class="input-field">
              <i class="fas fa-map-marker"></i>
              <input type="text" name="alamat" placeholder="Alamat" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" name="submit" value="Daftar" required>
            </div>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>GALERY FOTO</h3>
            <p>
              Galery Foto adalah sebuah web yang berguna untuk pengelolaan foto kenangan yang pernah ada.
            </p>
            <img src="gambar/logo foto.png" class="image" alt="" />
          </div>
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
