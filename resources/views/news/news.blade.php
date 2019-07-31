<!doctype html>
<html lang="ru" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Пример на bootstrap 4: Прижатый футер отображается в нижней части страницы, когда содержимое окна слишком короткое. Панель навигации в верхней части.">

  <title>Прижатый футер с меню | Sticky Footer Navbar Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="css/pacetges/bootstrap-4.3.1-dist/css/bootstrap.min.css">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(d, w, c) {
      (w[c] = w[c] || []).push(function() {
        try {
          w.yaCounter39705265 = new Ya.Metrika({
            id: 39705265,
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
          });
        } catch (e) {}
      });
      var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function() {
          n.parentNode.insertBefore(s, n);
        };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";
      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else {
        f();
      }
    })(document, window, "yandex_metrika_callbacks");
  </script> <noscript>
    <div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div>
  </noscript> <!-- /Yandex.Metrika counter -->

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Отсортировать</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="filter">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>


      <div class=container>
        <form>
          <div class="form-check form-check-inline">
            <h5>Категории:&#8194;</h5>
            <input class="form-check-input" type="radio" name="buizness" id="buizness">
            <label class="form-check-label" for="inlineCheckbox1">Бизнес</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sport" id="sport">
            <label class="form-check-label" for="inlineCheckbox2">Спорт</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="music" id="music" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Музыка</label>
          </div>
      </div>      
      </form>
    </div>


    <div class=container>
      <div class="listNews">
        <h1 class="mt-5">Новости</h1>
        <p class="lead">
          @foreach($articles as $article)
          <p>{{ $article->id }}</p>
          <h5>{{ $article->topic }}</h5>
          <p>{{ $article->body }}</p>

          @endforeach
      </div>
      {{ $articles->links()}}

    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">Place sticky footer content here.</span>
    </div>
  </footer>

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> -->
  <script src="css/pacetges/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
</body>