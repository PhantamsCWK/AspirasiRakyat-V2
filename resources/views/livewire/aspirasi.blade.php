<div>
  @include('livewire.components.navbar-aspirasi')
  @include('livewire.components.modal-aspirasi')

  <main>
    <section class="text-center container">
      <div class="row py-lg-5">
        <div class="col-8 col-md-8 mx-auto">
            <h1 class="fw-light">Aspirasi</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ @session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ @session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          </div>
          <div class="d-flex justify-center align-items-center col-4 w-max">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
              Apa Aspirasi Anda
            </button>
          </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="d-flex flex-column justify-center align-items-center gap-3 mb-4">
          <h1>Cari Aspirasi mu</h1>
          <div class="input-group mb-3" style="max-width: 50%;">
            <input type="text" class="form-control" placeholder="Search" wire:model="searchNIK">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" wire:click="findAspirasi">Search</button>
          </div>
        </div>
        @if (count($aspirasis))
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            @foreach ($aspirasis as $aspirasi)
              @include('livewire.components.card-aspirasi')
            @endforeach
          </div>
        @else
          <h1 class="text-center">Not Found</h1>
        @endif
    </div>
  </main>
</div>