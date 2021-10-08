<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/main.css">

  <title>Home</title>
</head>



<body>


    <header>

      @include('includes.header')

    </header>

    <main>
        <div id="content-container">
              <div id="sidebar-main">
                @include('includes.sidenav')
              </div>
              <div id="content-main">
                {{ $content }}
              </div>
        </div>
    </main>
</body>
