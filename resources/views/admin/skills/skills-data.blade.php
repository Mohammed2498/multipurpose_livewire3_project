<div>
    <div class="mb-3">
        <input wire:model.live="search" type="text" class="form-control w-25" placeholder="Search">
    </div>
    <x-flash-message message="success" />
    {{-- <h5 class="card-header">Table Basic</h5> --}}
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="45%">Name</th>
                        <th width="45%">Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                <strong>{{ $item->name }}</strong>
                            </td>
                            <td>{{ $item->progress }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a wire:click.prevent="$dispatch('skillUpdate',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a wire:click.prevent="$dispatch('skillDelete',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <a wire:click.prevent="$dispatch('skillShow',{id:{{ $item->id }}})"
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
