<div>
    <content>
        <div class="container py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <p class="fs-2 fw-bold">Add Post</p>
                    </div>
                    <div class="col-4 text-end"> <a wire:navigate href="{{ route('post.index') }}"
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
                                    <label  class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title"  autofocus>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Post Category</label>
                                    <select wire:model="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                        <option>== Select Category ==</option>
                                        @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
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
