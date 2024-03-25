<div>
    <x-page-title>
        <h3 class="mb-0">{{ __('Users') }}</h3>
        <x-button>
            {{ __('Add') }}
        </x-button>
    </x-page-title>

    <div class="row">
        <div class="col">
            <div class="card p-4">
                <table class="table  table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-capitalize">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge bg-{{ $user->status ? 'success' : 'danger' }}">{{ $user->status ?
                                    'Aktif' : 'Non Aktif' }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        {{ $users->links() }}
    </div>


</div>