
<div> <!-- Single root element -->
<div class="container-fluid mb-3">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <!-- Card Start -->
            <div class="card shadow">
                <div class="card-header border-0 text-light fw-bold" style="background-color:#009933;">
                    <i class="fa fa-plus-circle"></i> Create New Customer
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="customersave"> <!-- Form -->
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name" class="form-label"><i class="fa-solid fa-user"></i> Name</label>
                                <input type="text" class="form-control" wire:model="name" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="form-label"><i class="fa-solid fa-envelope"></i> Email (optional)</label>
                                <input type="text" class="form-control" wire:model="email">
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="number" class="form-label"><i class="fa-solid fa-phone"></i> Phone Number</label>
                                <input type="tel" class="form-control" wire:model="phone" required>
                            </div>

                            <!-- Address -->
                            <div class="form-group">
                                <label for="address" class="form-label"><i class="fa-solid fa-location-dot"></i> Address</label>
                                <textarea class="form-control" wire:model="address" rows="3" required></textarea>
                            </div>


                        <div class="d-flex mt-1">
                            <button type="submit" class="btn text-white fw-bold" style="background-color:#009933;">Create</button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- Card End -->
        </div>
       <div class="col-lg-8">



       <div class="card shadow">
    <div class="card-header  text-white fw-bold"  style="background-color:#009933;">
        <i class="fa fa-users"></i> Customer List
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($customers as $index => $customer)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email ?? 'N/A' }}</td>
                        <td>{{ $customer->phone }}</td>
                         <td>
                    <a href="{{route('customers.edit.customer',$customer->id)}}"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></a>
                     <button class="btn btn-danger"  wire:click="customerDelete({{$customer->id}})" wire:confirm="Realy You want to Delete it"><i class="fa-solid fa-trash"></i></button>

                    </td>
 
                    </tr>
                    <tr>
                        <th colspan="4">Address</th>
                    </tr>
                    <tr>
                        <td colspan="4">{{ $customer->address }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No customers found.</td>
                    </tr>

                    
                @endforelse
            </tbody>
        </table>
    </div>
</div>

         

       </div>

    </div>
</div>


</div> <!-- Single root element ends here -->

