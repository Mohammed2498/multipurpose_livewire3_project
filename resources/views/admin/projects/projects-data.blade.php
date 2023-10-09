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
                        <th>Image</th>
                        <th>Link</th>
                        <th>Category</th>
                        <th>Description</th>
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
                            <td><img src="{{ asset($item->image) }}" width="50px" height="50px"></td>
                            <td>{{ $item->link }}</td>
                            <td>{{ $item->category?->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a wire:click.prevent="$dispatch('projectUpdate',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a wire:click.prevent="$dispatch('projectDelete',{id:{{ $item->id }}})"
                                            class="dropdown-item" href="#"><i class="bx bx-trash me-1"></i>
                                            Delete</a>

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
