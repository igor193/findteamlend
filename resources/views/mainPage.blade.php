
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Простой одностраничный шаблон для фотогалереи, портфолио и многого другого.">

    <title>Find Team</title>

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/pacetges/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/album.css') }}" rel="stylesheet">
  </head>

  <body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4481610-59', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39705265 = new Ya.Metrika({ id:39705265, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript> <!-- /Yandex.Metrika counter -->

    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">О проекте</h4>
          <p class="text-muted">{{ $mainscreen->intro }}</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Контакты</h4>
          <ul class="list-unstyled">
            <li><a href="https://teleg.one/mmaksteterin" target="_blank" class="text-white">Follow on Telegram</a></li>
            <li><a href="https://vk.com/official_findteam" target="_blank" class="text-white">Follow on VK</a></li>
            <li><a href="https://instagram.com/official_findteam?igshid=16d9hhhbbvzy6" target="_blank" class="text-white">Instagram</a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.company.trn" target="_blank" class="text-white">Find Team - Apps on Google Play</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="images/icon.png" class="rounded mx-auto d-block" alt="icon find team">      
        <strong>Find Team</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">{{ $mainscreen->topic }}</h1>
      <p class="lead text-muted">{{ $mainscreen->intro }}</p>
      <a href="https://play.google.com/store/apps/details?id=com.company.trn" class="btn btn-primary btn-lg">Скачать</a>      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
    <div class="row">
      
    @foreach ($articles as $article)
    
      <div class="col-md-4">
        <a href="https://play.google.com/store/apps/details?id=com.company.trn" class="link">
          <div class="card mb-4 shadow-sm">
            <h2 class="jumbotron-heading topic">{{ $article->topic }}</h2>             
            <img src="{{ asset('/images/small/') . '/' . $article->typeofcotigory . '.jpg' }}" class="rounded float-left" alt="Бизнес картинка">
            <div class="card-body">
              <p class="card-text">{{ $article->intro }}</p>
              <div class="d-flex justify-content-between align-items-center">                               
              </div>
            </div>
          </div>
          </a>
        </div>      
    @endforeach

    </div>
  </div>
        

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Вверх</a>
    </p>
    <p class="footerTM">&copy; Find Team <?php echo date ( 'Y' ) ; ?></p> 
    <p class="footerTM">Created by DIM group</p> 
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte"></div> 
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="facebook"></div>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="telegram"></div>   
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="css/pacetges/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</body>
</html>