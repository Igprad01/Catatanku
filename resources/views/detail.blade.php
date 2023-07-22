<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <div class="card-body">
          <table>
            <h2 class="mb-3 text-uppercase">Detail Catatan</h2>
            <tr> 
                <td style="width: 40%;">No</td>
                <td style="width: 5%;">: </td>
                <td style="width: 95%;">{{$item->id}}</td>
            </tr>
            <tr>
                <td style="width: 40%;">Judul</td>
                <td style="width: 5%;">: </td>
                <td style="width: 85%;">{{$item->judul}}</td>
            </tr>
            <tr>
              <td style="width: 40%;">Isi</td>
              <td style="width: 5%;">: </td>
              <td style="width: 65%;">{{$item->isi}}</td>
          </tr>
          <tr>
            <td style="width: 30%;">Tanggal Dibuat</td>
            <td style="width: 5%;">: </td>
            <td style="width: 65%;">{{$item->created_at->format('d:m:Y') }}</td>
        </tr>
        <tr>
          <td style="width: 30%;">Tanggal Edit</td>
          <td style="width: 5%;">: </td>
          <td style="width: 65%;">{{$item->updated_at->format('d:m:Y') }}</td>
       </tr>
        </table>
        <tr>
            <a href="/"><button type="button" class="btn btn-success mt-3"><i class="fas fa-sign-in-alt fa-rotate-180"></i> Kembali</button></a>
        </tr>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>