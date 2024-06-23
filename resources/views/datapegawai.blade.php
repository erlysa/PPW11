<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      th {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">Data Pegawai</h1>
      <div class="d-flex justify-content-start mb-3">
        <a href="tambahdata" class="btn btn-outline-success">Tambah</a>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">No Hp</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $row)
                <tr>
                  <th scope="row">{{ $row->id }}</th>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->jenis_kelamin }}</td>
                  <td>{{ $row->no_hp }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>
                    <a href="editdata/{{ $row->id }}" class="btn btn-outline-warning btn-sm">Edit</a>
                    <a href="delete/{{ $row->id }}" class="btn btn-outline-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
