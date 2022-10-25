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
                        <td><a href="{{ route('fixtures',$pool->id) }}" class="cmn-btn">Add Fixture</a></td>
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
  </div>
