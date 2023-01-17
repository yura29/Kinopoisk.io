<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsApi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="adapta">
        <nav class="navigation">
            <div class="logotype">NewsApi</div>
            <ul class="categories">
                <li class="category-item"><a href="profile.php" >Главная</a></li>
                <li class="category-item"><a href="profile1.php" >Аккаунт</a></li>
			  <li class="category-item"><a href="profile2.php" >Кино</a></li>
                <li class="category-item"><a href="vendor/logout.php" >Выход</a></li>
            </ul>
        </nav>

        <form>
          <input type="text" class="header__search" placeholder="Поиск" />
        </form>
      </div>
    </header>
    <div class="wrapper">
      <aside class="sidebar">
          <ul class="sidebar-list">
              <li class="sidebar-item"><i class="fa fa-newspaper-o" href="#"></i></li>
              <li class="sidebar-item sb-active"><i class="fa fa-th"></i></li>
              
              
          </ul>
      </aside>
    <div class="content1">
      <div class="movies"></div>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
    