<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/main.css">
  <script src="/js/app.js"></script>
  <script src="https://kit.fontawesome.com/cd35332ff4.js"
    crossorigin="anonymous"></script>
  <title>Home</title>
</head>



<body>




    <main>
        <div id="content-container">
              @include('includes.sidenav')
              <div id="site-overlay"></div>
              <div id="container">
                  <header>

                    @include('includes.header')

                  </header>
                  {{ $content }}
                </div>
        </div>
    </main>

    <script>
          $(document).ready(function(){
              $('.alert-success').fadeIn().delay(5000).fadeOut();
               $('.btn-primary').tooltip({show: {effect:"none", delay:0}});
          });
    </script>


</body>
