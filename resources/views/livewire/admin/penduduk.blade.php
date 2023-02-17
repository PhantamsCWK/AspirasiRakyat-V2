<livewire:navbar-admin />
<div class="container-fluid">
    <div class="row">
      <livewire:sidebar-admin />
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
            <h1 class="h2">Penduduk</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penduduks as $penduduk)
                  <tr>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->alamat }}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
      </main>
    </div>
  </div>