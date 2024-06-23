<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">Edit Data Pegawai</h1>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card shadow-sm">
            <div class="card-body">
              <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="namaPegawai" class="form-label">Nama Pegawai</label>
                  <input type="text" name="nama" class="form-control" id="namaPegawai" aria-describedby="namaHelp" value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                  <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-select" id="jenisKelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki - laki" {{ $data->jenis_kelamin == 'Laki - laki' ? 'selected' : '' }}>Laki - laki</option>
                    <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="nomorHp" class="form-label">Nomor Hp</label>
                  <input type="text" name="no_hp" class="form-control" id="nomorHp" aria-describedby="hpHelp" value="{{ $data->no_hp }}">
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamatHelp" value="{{ $data->alamat }}">
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="d-grid gap-2 mt-3">
            <a href="{{ route('pegawais') }}" class="btn btn-outline-success">Home</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
