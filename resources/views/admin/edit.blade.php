<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form action="/admin/{{ $pgn->id }}/edit" method="POST">
    @method('put')
    {{ csrf_field() }}
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $pgn->nama }}">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-Mail</label>
      <input type="text" class="form-control" name="email" value="{{ $pgn->email }}">
    </div>
    <div class="mb-3">
      <label for="umur" class="form-label">Umur</label>
      <input type="number" class="form-control" name="umur" value="{{ $pgn->umur }}">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Save">
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>