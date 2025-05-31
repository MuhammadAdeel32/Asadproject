 <div class="container mt-3">
        <div class="row">
    <div class="col-lg-12">

       <div class="card shadow mb-3">
    <div class="card-header  text-white fw-bold"  style="background-color:#009933;">
        <i class="fa fa-users"></i> Users List
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                     <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @forelse($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                      
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        
                    </td>
                         <td>
                     <button class="btn btn-danger"  wire:click="deleteuser({{$user->id}})"  wire:confirm="Realy You want to Delete it"><i class="fa-solid fa-trash"></i></button>

                   </td>
                    </tr>

                     @empty
                    <tr>
                        <td colspan="5" class="text-center"> User Not found.</td>
                    </tr>
                  
                @endforelse
            </tbody>
        </table>
    </div>
</div>

       </div>

    </div>
</div>

