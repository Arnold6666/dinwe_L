<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap 5  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark px-5" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DinWe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">UploadNews</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-primary mt-5 text-center fs-3" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="col-12 m-auto mt-5 border p-4 border-info rounded">
                <form action="/facilitiesStore" method="post" enctype="multipart/form-data" class="d-flex">
                    {{-- @csrf --}}
                    @method('post')
                    <div class="mb-3 d-flex align-items-center col-3">
                        <label for="cash" class="form-label m-0">現金</label>
                        <input type="checkbox" class="form-check-input m-0 border-primary ms-2" id="cash" name="cash" value="1">
                    </div>
                    <div class="mb-3 d-flex align-items-center col-3">
                        <label for="visa" class="form-label m-0">VISA金融卡</label>
                        <input type="checkbox" class="form-check-input m-0 border-primary ms-2" id="visa" name="visa" value="1">
                    </div>
                    <div class="mb-3 d-flex align-items-center col-3">
                        <label for="visa" class="form-label m-0">信用卡</label>
                        <input type="checkbox" class="form-check-input m-0 border-primary ms-2" id="visa" name="visa" value="1">
                    </div>
                    <p class="text-center mb-0">
                        <button type="submit" class="btn btn-primary w-50">新增消息</button>
                    </p>
                </form>
            </div>
        </div>
    </section>

    {{-- bootstrap5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
