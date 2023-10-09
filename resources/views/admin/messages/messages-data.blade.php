<div>
    <div class="mb-3">
        <input wire:model.live="search" type="text" class="form-control w-25" placeholder="Search">
    </div>


    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>
                                <strong>{{ $key + 1 }}</strong>
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->message }}</td>
                            <td>
                                @if ($item->status == '1')
                                    <span class="badge bg-label-primary">Seen</span>
                                @else
                                    <span class="badge bg-label-danger">Not Seen</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a wire:click.prevent="$dispatch('messageDelete',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <a wire:click.prevent="$dispatch('messageShow',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-trash me-1"></i>
                                            Show</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        @else
            <span class="text-danger">No Data Found</span>
        @endif
    </div>
</div>
