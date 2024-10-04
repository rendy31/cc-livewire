<div>
    <content>
        <div class="container py-3">
            <div class="container-fluid">
                <p class="fs-4">Category</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <h5 class="card-header p-0"><button type="button" class="btn">Add Category</button></h5>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" name="name" id="categoryName"
                                            autofocus>
                                        <div class="invalid-tooltip">
                                            Please the field is required.
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <h5 class="card-header p-0"><button type="button" class="btn">List Category</button>
                            </h5>
                            <div class="card-body">
                                <!-- <h5 class="card-title">Special title treatment</h5> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
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
                                                            <a wire:navigate href="{{route('category.edit',$item->id)}}" class="btn btn-warning btn-sm ">
                                                                <i class="bx bx-edit"></i> Edit
                                                            </a>
                                                            <button wire:confirm="Are you sure you want to delete ?" wire:click="delete({{ $item->id }})"
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

        </div>
    </content>
</div>
