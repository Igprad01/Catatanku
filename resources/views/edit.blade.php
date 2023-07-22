<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div>
                <a href="/"><button type="button" class="btn btn-success mb-3"><i class="fas fa-sign-in-alt fa-rotate-180"></i> Kembali</button></a>
            </div>
         <form action="/update" method="get">
            <input type="hidden" class="form-control" id="id" name="id" value="{{$edit->id}}"
            aria-describedby="emailHelp">
          <div class="mb-3">
            <input type="text" class="form-control" name="judul" id="judul" value="{{$edit->judul}}">
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="isi" id="isi" rows="4"">{{$edit->isi}}</textarea>
          </div>
            <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Submit</button>
        </div>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>