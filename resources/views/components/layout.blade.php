<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Caveat">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/55668a3b00.js" crossorigin="anonymous"></script>

    <title>Asana Cake</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary py-4 mb-4">

            <h3 class="row">
                <a href="{{ url('/') }}" class="title-logo text-light text-decoration-none ms-5">Asana Cake</a>
            </h3>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#drop">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="drop">
                <ul class="navbar-nav ms-auto">

                        <a href="{{ url('/about') }}" class="text-light text-decoration-none">
                            <li class="me-3">店舗詳細</li>
                        </a>
                        <a href="{{ url('/products') }}" class="text-light text-decoration-none">
                            <li class="me-3">商品一覧</li>
                        </a>

                    @guest

                        <a href="{{ url('login') }}" class="text-light text-decoration-none">
                            <li class="me-3">ログイン</li>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-light text-decoration-none">
                                <li class="me-3">新規登録</li>
                            </a>
                        @endif

                    @else

                        <a href="{{ route('users.edit') }}" class="text-light text-decoration-none">
                            <li class="me-3">マイページ</li>
                        </a>

                        <a href="{{ route('logout') }}" class="text-light text-decoration-none"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <li class="me-3">ログアウト</li>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <a class="me-4 text-light text-decoration-none" href="{{ route('cart.index') }}">
                            <li>
                                <i class="fas fa-shopping-cart fa-2x"></i>
                            </li>
                        </a>

                    @endguest

                </ul>
            </div>

        </nav>
    </header>

    <main>
        {{-- @yeild('content') --}}
        {{ $slot }}
    </main>

    <footer>
        <div class='container mt-5'>
            <div class='row'>
                <p class="small text-center text-muted">© 2021　Ayumu Noda　All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>
