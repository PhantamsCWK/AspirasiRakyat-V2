<div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          @if($notAdmin)
           <h2 class="fw-bold mb-0">Are you admin <span>&#129320;</span></h2>
          @else
            <h2 class="modal-title">Admin</h2> 
          @endif
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body p-5 pt-0">
          <form class="">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="floatingInput" wire:model="name" placeholder="Name">
              <label for="floatingInput">Name</label>
              @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="floatingPassword" wire:model="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
              @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="button" wire:click="login">Login</button>
            <small class="text-muted">By clicking Login, you agree to the terms of use.</small>
          </form>
        </div>
      </div>
    </div>
</div>