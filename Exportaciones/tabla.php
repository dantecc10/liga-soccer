<?php
    include"marcador/get_goals.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Liga Soccer</title>
    <meta name="description" content="Conoce los resultados, jugadores y todas las estadísticas de tu liga, con información actualizada.">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><i class="fa fa-soccer-ball-o"></i>&nbsp;Liga Soccer</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalog-page.html">Jugadores</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-post-list.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="product-page.html">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="registration.html">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Tabla general</h2>
                    <p>Aquí tienes las estadísticas generales de la liga, ubica la posición de tu equipo y fija tu objetivo en la posición. ¿Podrás liderar la liga?</p>
                </div>
                <div class="row justify-content-center"><table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Equipo</th>
      <th scope="col">PJ</th>
      <th scope="col">G</th>
      <th scope="col">E</th>
      <th scope="col">D</th>
      <th scope="col">GF</th>
      <th scope="col">GC</th>
      <th scope="col">DG</th>
      <th scope="col">Pts</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Team A</td>
      <td><?php echo $total_goals;?></td>
      <td>8</td>
      <td>1</td>
      <td>1</td>
      <td>25</td>
      <td>10</td>
      <td>+15</td>
      <td>25</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Team B</td>
      <td>10</td>
      <td>7</td>
      <td>2</td>
      <td>1</td>
      <td>20</td>
      <td>8</td>
      <td>+12</td>
      <td>23</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Team C</td>
      <td>10</td>
      <td>5</td>
      <td>2</td>
      <td>3</td>
      <td>15</td>
      <td>10</td>
      <td>+5</td>
      <td>17</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Team D</td>
      <td>10</td>
      <td>4</td>
      <td>3</td>
      <td>3</td>
      <td>13</td>
      <td>10</td>
      <td>+3</td>
      <td>15</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Team E</td>
      <td>10</td>
      <td>4</td>
      <td>2</td>
      <td>4</td>
      <td>12</td>
      <td>12</td>
      <td>0</td>
      <td>14</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Team F</td>
      <td>10</td>
      <td>3</td>
      <td>4</td>
      <td>3</td>
      <td>11</td>
      <td>10</td>
      <td>+1</td>
      <td>13</td>
    </tr>
  </tbody>
  
  </table>
</div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2023 Copyright Text</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="../assets/js/vanilla-zoom.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>