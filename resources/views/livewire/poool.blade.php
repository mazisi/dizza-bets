<div class="img-area">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Pool Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pools as $pool)
                    <tr>
                        <td>{{ $pool->name }}</td>
                        <td>{{ $pool->created_at->diffForHumans() }}</td>
                        <td><a wire:click="getPoolId('{{ $pool->id }}')" data-bs-toggle="modal" data-bs-target="#add-fixture" href="#!" class="cmn-btn">Add Fixture</a></td>
                    </tr>
                @empty
                <tr>                                            
                    <td></td>
                    <td>Empty</td>
                    <td></td>
                </tr>
                @endforelse
                
              
            </tbody>
        </table>
    </div>

    <div wire:ignore class="modal fade show" id="add-fixture" aria-modal="true" role="dialog" >
        <div class="modal-dialog modal-dialog-centered">
          
            <div class="modal-content">
              <div class="modal-header">
                <h5 style="color: #000" id="exampleModalLabel">Add Fixture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="setting-personal-details p-5">                
                    <form wire:submit.prevent='submitFixtureId' class="row">
                        <input wire:model='pool_id' type="hidden">
                        <div class="col-12">
                            <div class="single-input mb-3">
                                <input wire:model.defer='pool_name' type="text" id="logemail" disabled>
                            </div>
                        </div>

                      <div class="col-12">
                        <div class="single-input mb-3">
                            <input wire:model.defer='fixture_id' type="text" id="logemail" placeholder="Paste Fixture ID">
                        </div>
                        </div>

                    <div class="col-12 w-100">
                        <div class="st">
                            <label>Select M-Group</label>
                            <select wire:model.defer='m_series'>
                                <option value="M1">M1</option>
                                <option value="M2">M2</option>
                                <option value="M3">M3</option>
                                <option value="M4">M4</option>
                                <option value="M5">M5</option>
                                <option value="M6">M6</option>
                                <option value="M7">M7</option>
                                <option value="M8">M8</option>
                                <option value="M9">M9</option>
                                <option value="M10">M10</option>
                            </select>
                        </div>
                    </div>
                        <button type="submit" class="cmn-btn">Submit</button>
                </form>
                  </div>
               
            </div>
            </div>
        </div>
  </div>
