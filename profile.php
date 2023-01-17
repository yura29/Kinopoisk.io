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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92019529, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92019529" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
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
        
    </header>
    <div class="wrapper">
        <aside class="sidebar">
            <ul class="sidebar-list">
                <li class="sidebar-item"><i class="fa fa-newspaper-o" href="#"></i></li>
                <li class="sidebar-item sb-active"><i class="fa fa-th"></i></li>
                
                
            </ul>
        </aside>
        <main class="content">
            <div class="feed-grid" id="feed-grid">

                <!--<div class="card-half wide">
                    <div class="card-img">
                        <p id="img_0"></p>
                    </div>
                    <div class="card-text ">
                        <h1 id="title_0"> </h1>
                        <p id="description_0"></p>
                        <p id="author_0"></p>
                    </div>
                </div>-->
                
                
                
            </div>
        </main>
    </div>
    
   <script src="script.js"></script>
</body>

</html>