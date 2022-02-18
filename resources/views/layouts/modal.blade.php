<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-popout" role="document">
      <div class="modal-content">
         <div class="block block-rounded block-themed block-transparent mb-0">

            <div class="block-header bg-primary-dark">
               <h3 class="block-title">Tambah Asset</h3>
               <div class="block-options">
                  <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                     <i class="fa fa-fw fa-times"></i>
                  </button>
               </div>
            </div>
            <!-- Content Modal -->
            <form action="{{ route('asset.store') }}" method="post" class="js-validation" novalidate>
               @csrf
               <div class="block-content">
                  <div class="form-floating mb-4">
                     <input type="text" class="form-control  @error('nama_asset') is-invalid @enderror" id="nama_asset"
                        placeholder="nama_asset" name="nama_asset" autofocus required>
                     <label class="form-label" for="nama_asset">Nama Asset</label>
                     @error('nama_asset')
                        <div class="invalid-feedback">
                           Please enter a asset name
                        </div>
                     @enderror
                  </div>
                  <div class="form-floating mb-4">
                     <input type="text" class="form-control @error('lokasi_point') is-invalid @enderror"
                        id="lokasi_point" name="lokasi_point" placeholder="lokasi_point" required>
                     <label class="form-label" for="lokasi_point">Lokasi Point</label>
                     @error('lokasi_point')
                        <div class="invalid-feedback">
                           Please enter a lokasi_point
                        </div>
                     @enderror
                  </div>

                  <div class="mb-3">
                     <label class="form-label" for="deskripsi">Deskripsi <span class="text-danger">*</span>
                     </label>
                     <textarea id="deskripsi" class="form-control" cols="20" rows="10"></textarea>
                  </div>

                  <div class="form-floating mb-4">
                     <input type="text" class="form-control @error('jenis_asset') is-invalid @enderror" id="jenis_asset"
                        name="jenis_asset" placeholder="name@example.com" required>
                     <label class="form-label" for="jenis_asset">Jenis Asset</label>
                     @error('jenis_asset')
                        <div class="invalid-feedback">
                           Please enter a jenis_asset
                        </div>
                     @enderror
                  </div>

               </div>
               <div class="block-content block-content-full text-end bg-body">
                  <button type="submit" class="btn btn-sm btn-primary" onclick=""
                     data-bs-dismiss="modal">Submit</button>
               </div>
            </form>

         </div>
      </div>
   </div>
</div>
