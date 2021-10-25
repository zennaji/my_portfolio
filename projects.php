<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/reset.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>Projects</title>
</head>

<body>



  <!-- Navbar -->
  <nav class="na navbar navbar fixed-top  navbar-expand-lg     shadow-sm p-3 mb-5  navbar-light rounded" id="menu">
    <a class="navbar-brand" id="logo" href="index.php"><img src="IMGS/social_media/mylogo.png" style="width: 50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto   ">
        <li class="nav-item ">
          <a class="menu-item nav-link " href="index.php"> <i class="fa fa-home"></i> Home </a>
        </li>
        <li class="nav-item ">
          <a class="menu-item nav-link " href="#about-me"> About Me </a>
        </li>
        <li class="nav-item ">
          <a class="menu-item nav-link " href="/projects.php"> Projects </a>
        </li>
        <li class="nav-item ">
          <a class="menu-item nav-link " href="brpfl.html"> Beroeps profile </a>
        </li>
        <li class="nav-item ">
          <a class="menu-item nav-link " href="#cnt"> Contact &#160; </a>
        </li>
      </ul>
      <img src="./IMGS/moon.png" id="icon">
    </div>

  </nav>
  <!-- Projects -->
  <h1 class="title_prj">Projects</h1>
  <p class="mini_title_prj">here are a few projects i've worked on recently </p>

  <?php
  try {
    include 'db_connection.php';

    $query = $db->prepare("SELECT * FROM project");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($request as $data) {

      /////////////////////////
      echo "<div class='projects_section'>";
      echo "<div class='all_projects'>";
      echo "<div class='project'>";
      echo "<img src=" . $data['image'] . " width='300px'>";
      echo "<div class='project_01_presentation'>";
      echo "<h3>" . $data['name'] . "</h3>";
      echo "<p>" . $data['discription'] . "</p>";
      echo "<a href=" . $data['link'] . "> <input id='btn'  type='button' value='See'> </a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
  } catch (PDOException $e) {
    die("Error!:" . $e->getMessage());
  }


  ?>

  <!-- Footer -->
  <div class="footer">
    <p>2021 © Devoloped by Zakaria Ennaji | <a href="mailto:zakaria.inho@gmail.com"> <img src="imgs/em.png" alt="" width="20px"></a> | Tel: 0685686808 </p>
  </div>


  <script src="JS/script.js"></script>
  <script src="JS/jquery-3.5.1.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
</body>

</html>