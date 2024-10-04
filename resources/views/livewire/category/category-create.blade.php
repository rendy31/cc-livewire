<div>
    <content>
        <div class="container py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <p class="fs-2 fw-bold">Add Category</p>
                    </div>
                    <div class="col-4 text-end"> <a wire:navigate href="{{ route('category.index') }}"
                            class="btn btn-sm btn-secondary">Back</a> </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <form wire:submit="save">
                                <div class="mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="categoryName" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">save</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </content>
</div>
