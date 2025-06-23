<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-3">
                <div class="card-header text-white fw-bold" style="background-color:#009933;">
                    <i class="fa fa-users"></i> {{ __('users.users_list') }}
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('users.name') }}</th>
                                <th>{{ __('users.email') }}</th>
                                <th>{{ __('users.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <button class="btn btn-danger" wire:click="deleteuser({{ $user->id }})" wire:confirm="{{ __('users.delete_confirm') }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">{{ __('users.not_found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
