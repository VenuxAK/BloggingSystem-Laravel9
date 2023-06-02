<x-admin.layout>
    <x-admin.header name="Create Blog" />
    <div class="row justify-content-center">
        <div class="col-12 col-lg-12 grid-margin stretch-card">
            <div class="card px-4">
                <div class="card-body">
                    <h4 class="card-title">Create new blog</h4>
                    <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data"
                        class="forms-sample mt-4">
                        @csrf
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                id="inputTitle" placeholder="Title">
                            <x-error name="title" />
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Categories</label>
                            <select class="form-control" value="{{ old('category_id') }}" name="category_id"
                                id="exampleSelectGender">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }} </option>
                                @endforeach
                            </select>
                            <x-error name="category_id" />
                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" value="{{ old('thumbnail') }}" name="thumbnail"
                                class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            <x-error name="thumbnail" />
                        </div>
                        <div class="form-group">
                            <label for="inputBody">Body</label>
                            <textarea class="form-control editor" name="body" id="inputBody">{{ old('body') }}</textarea>
                            <x-error name="body" />
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
                        <a href="/admin/blogs" class="btn btn-light">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
