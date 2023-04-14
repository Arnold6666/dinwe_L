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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Log in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-warning mt-5 text-center fs-3" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="col-6 m-auto mt-5 border p-4 border-info rounded">
                <form action="/storeRes" method="post" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    @method('post')
                    <div class="mb-3">
                        <label for="name" class="form-label">餐廳名字</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">餐廳地址</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="imag1e" class="form-label">餐廳照片1</label>
                        <input type="file" class="form-control" id="image1" name="image1" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="image2" class="form-label">餐廳照片2</label>
                        <input type="file" class="form-control" id="image2" name="image2" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="image3" class="form-label">餐廳照片3</label>
                        <input type="file" class="form-control" id="image3" name="image3" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="menu1" class="form-label">餐廳菜單1</label>
                        <input type="file" class="form-control" id="menu1" name="menu1" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="menu2" class="form-label">餐廳菜單2</label>
                        <input type="file" class="form-control" id="menu2" name="menu2" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="menu3" class="form-label">餐廳菜單3</label>
                        <input type="file" class="form-control" id="menu3" name="menu3" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="intro" class="form-label">餐廳簡介</label>
                        <textarea class="form-control" style="resize: none; height: 150px" id="intro" name="intro"></textarea>
                    </div>
                    <p class="text-center mb-0">
                        <button type="submit" class="btn btn-primary w-50">新增餐廳</button>
                    </p>
                </form>
            </div>
        </div>
    </section>

    {{-- bootstrap5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
