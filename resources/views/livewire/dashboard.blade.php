<div>
    @include('livewire.components.navbar-admin')
    <div class="container-fluid">
        <div class="row">
          @include('livewire.components.sidebar-admin')
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">Aspirasi</h1>
            </div>
            @if (session()->has('status'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="d-flex justify-start align-items-center gap-2 my-3">
              <input type="date" wire:model="searchDate" class="form-control">
              <select class="form-select form-select" aria-label=".form-select-sm example" wire:model="category">
                <option selected value="">categories</option>
                @foreach($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
              </select>
              <select class="form-select form-select" aria-label=".form-select-sm example" wire:model="status">
                <option selected value="">status</option>
                <option value="menunggu">menunggu</option>
                <option value="proses">proses</option>
                <option value="selesai">selesai</option>
              </select>
            </div>
            <div class="list-group">
                @foreach ($aspirasis as $aspirasi)
                 @include('livewire.components.card-dashboard-aspirasi')
                @endforeach
            </div>
            @include('livewire.components.modal-feedback')
          </main>
        </div>
      </div>
</div>