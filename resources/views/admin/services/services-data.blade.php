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
                        <th width="40%">Description</th>
                        <th>Icon</th>
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
                            <td>{{ $item->description }}</td>
                            <td><i class="{{ $item->icon }}"></i></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a wire:click.prevent="$dispatch('serviceUpdate',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a wire:click.prevent="$dispatch('serviceDelete',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <a wire:click.prevent="$dispatch('serviceShow',{id:{{ $item->id }}})"
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
