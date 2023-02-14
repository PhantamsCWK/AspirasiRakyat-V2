<div class="modal fade" tabindex="-1" role="dialog" id="modalForm">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <!-- <h5 class="modal-title">Modal title</h5> -->
          <h2 class="fw-bold mb-0">APA ASPIRASI ANDA</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body p-5 pt-0">
            <form class="needs-validation" action="" method="POST" enctype="multipart/form-data">
                <div class="row g-3 mb-5">
      
                  <div class="col-sm-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="name" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik name="nik" placeholder="" value="" required>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="" value="" required>
                  </div>
      
                  <div class="col-12">
                    <label for="message">Keterangan</label>
                    <textarea class="form-control" placeholder="" id="message" name="message" style="height: 160px"></textarea>
                  </div>
      
                </div>
      
                <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit" value="formAspirasi">Send</button>
              </form>
        </div>
      </div>
    </div>
  </div>