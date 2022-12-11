<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-5">
<form action="/admin-editBuku" method="POST">
  <input type="hidden" name="Buks" value="{{ $bukus->id }}">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $bukus->nama }}">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="text" class="form-control" name="harga" value="{{ $bukus->harga }}">
    </div>
    <div class="mb-3">
      <label for="tglMasuk" class="form-label">Tanggal Masuk</label>
      <input type="text" class="form-control" name="tglMasuk" value="{{ $bukus->tglMasuk }}">
    </div>
    <div class="mb-3">
      <label for="kategori_buku_id" class="form-label">Kategori</label>
      <select name="kategori_buku_id" class="form-control" id="exampleFormControlSelect1">
        @foreach ($categories as $c)
        <option value="{{ $c->id }}">{{ $c->namaKategori }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="thnTerbit" class="form-label">Tahun Terbit</label>
      <input type="text" class="form-control" name="thnTerbit" value="{{ $bukus->thnTerbit }}">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Gambar</label>
      <input type="file" class="form-control" name="image" value="{{ $bukus->image }}">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Save">
  </form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>