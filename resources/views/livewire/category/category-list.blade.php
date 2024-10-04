<div>
    <content>
        <div class="container py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <p class="fs-2 fw-bold">Category</p>
                    </div>
                    <div class="col-4 text-end"> <a wire:navigate href="{{ route('category.create') }}"
                            class="btn btn-sm btn-primary">Add Category</a> </div>
                </div>


                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row p-0">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a wire:navigate href="{{ route('category.edit', $item->id) }}"
                                                            class="btn btn-warning btn-sm ">
                                                            <i class="bx bx-edit"></i> Edit
                                                        </a>
                                                        <button wire:confirm="Are you sure you want to delete ?"
                                                            wire:click="delete({{ $item->id }})"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="bx bx-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </content>
</div>
