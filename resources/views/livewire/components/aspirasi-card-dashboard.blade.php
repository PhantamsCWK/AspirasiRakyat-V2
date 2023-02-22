<div class="list-group-item list-group-item-action mb-3 border border-secondary" aria-current="true"  id="">
    <div class="d-flex w-100 justify-content-between">
      <div class="d-flex justify-start align-items-center">
        <h5>{{ $aspirasi->penduduk->nama }}</h5>
        <i class="bi bi-chevron-right"></i>
        <h6>{{ $aspirasi->penduduk->alamat }}</h6>
        <i class="bi bi-chevron-right"></i>
        <small>{{ $aspirasi->penduduk->nik }}</small>

      </div>
      <small>{{ $aspirasi->created_at }}</small>
    </div>
    <div class="d-flex w-100 justify-content-between">
      <p class="mb-1" style="max-width: 70%">{{ $aspirasi->keterangan }}</p>
      <div class="d-flex flex-row-reverse gap-2">
        <button 
            type="button" 
            class="btn btn-secondary" 
            wire:click="sendAspirasiId({{ $aspirasi->id }})"
            data-bs-toggle="modal" 
            data-bs-target="#exampleModal"
            style="max-height: 29px; --bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            {{ $aspirasi->status }}
        </button >
      </div>
    </div>
    @if($aspirasi->feedback)
      <div class="mt-2 pt-2 border-top border-secondary">
        {{ $aspirasi->feedback }}
      </div>
    @endif
</div>