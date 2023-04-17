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
                <form action="/storeActivity" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <input type="hidden" name="resturant_id" value={{$id}}>
                        <label for="image" class="form-label">活動照片</label>
                        <input type="file" class="form-control" id="image" name="image" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">活動名稱</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">活動內文</label>
                        <textarea class="form-control" id="text" name="text" cols="30" rows="10" style="resize: none"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="begin_date" class="form-label">開始日期</label>
                        <input type="date" class="form-control" id="begin_date" name="begin_date">
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">結束日期</label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                    <p class="text-center mb-0">
                        <button type="submit" class="btn btn-primary w-50">建立活動</button>
                    </p>
                </form>
            </div>
        </div>
    </section>

    {{-- bootstrap5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
