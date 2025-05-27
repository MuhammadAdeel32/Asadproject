

<div> <!-- Single root element -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Card Start -->
                <div class="card shadow">
                    <div class="card-header text-center bg-success text-white">
                        <h5 class="mb-0">Edit Info</h5>
                    </div>
                    <div class="card-body">

                        <form wire:submit.prevent="updateCustomer"> <!-- Form -->

                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" wire:model="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control" wire:model="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="number" class="form-label">Phone Number:</label>
                                <input type="tel" class="form-control" wire:model="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <textarea class="form-control" wire:model="address" rows="3" required></textarea>
                            </div>

                            <div class="d-flex ">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Card End -->
            </div>
        </div>
    </div>
</div> <!-- Single root element ends here -->


