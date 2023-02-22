<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h5 class="fw-bold mb-0">APA ASPIRASI ANDA</h5>
      </div>

      <div class="modal-body p-5 pt-0">
          <form class="needs-validation" wire:submit.prevent="submit">
              <div class="row g-3 mb-5">
    
                <div class="col-sm-12">
                  <label for="nik class="form-label">NIK</label>
                  <input type="number" class="form-control" wire:model="nik" id="nik" name="nik" value="{{ old('nik') }}" required>
                </div>
    
                <div class="col-sm-12">
                  <label for="name" class="form-label">Kategori</label>
                  <select class="form-select form-select" aria-label=".form-select-sm example" wire:model="category_id" id="category_id" name="category_id" required>
                    <option value="" selected disabled>Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
    
                <div class="col-12">
                  <label for="message">Keterangan</label>
                  <textarea class="form-control" wire:model="keterangan" id="message" style="height: 160px" name="keterangan"></textarea>
                </div>
    
              </div>
    
              <button class="w-100 btn btn-primary btn-lg" type="submit">Send</button>
            </form>
      </div>
    </div>
  </div>
</div>