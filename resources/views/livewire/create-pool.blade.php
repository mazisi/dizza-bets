<div wire:ignore class="modal fade show" id="exampleModal" aria-modal="true" role="dialog" >
    <div class="modal-dialog modal-dialog-centered">
      
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="color: #000" id="exampleModalLabel">Create Pool</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         
          <div class="setting-personal-details p-5">
            <h5>KYC Personal Details</h5>
            
                <form wire:submit.prevent='submitPool' class="row">
                  <div class="col-12">
                    <div class="single-input mb-3">
                        <input wire:model='poolName' type="text" id="logemail" placeholder="Type here">
                    </div>
                </div>
                    <button type="submit" class="cmn-btn">Submit</button>
            </form>
              </div>
           
        </div>
        </div>
    </div>