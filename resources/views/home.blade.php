<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
      <div class="card">
        <div class="card-body">
         <form action="/create" method="post">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="isi" id="isi" rows="4" placeholder="Buat Catatan...."></textarea>
          </div>
            <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Submit</button>
        </div>
      </div>
    </form>
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Catatan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lihat as $item)
            <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->judul}}</td>
             <td>{{$item->isi}}</td>
             <td>
                <a href="/detail/{{$item->id}}"><button type="button" class="btn btn-info me-2"><i class="far fa-eye"></i> Detail</button></a>
                <a href="/edit/{{$item->id}}"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Update</button></a>
                <a href="/delete/{{$item->id}}"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></a>
             </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>