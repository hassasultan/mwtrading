@extends('dashboard.admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="progress-container bg-white rounded-30 p-sm-5 p-3 mb-3">
                    <div class="d-md-flex mb-4">
                        <div class="align-self-center mb-3">
                            <h2 class="primary_title text-black ">Edit Banner</h2>
                        </div>
                        <div class="ms-auto ">
                            <p>
                                {{-- <span><i class="fa-solid fa-filter filter_icon me-3"></i></span>
                                <span class="sort_by">Sort by: Popular Class</span> --}}
                            </p>
                        </div>
                    </div>
                    <form class="needs-validation" action="{{ route('banner.update',$banner->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Button Title</label>
                                <input type="text" class="form-control" name="title" id="validationTooltip02"
                                    placeholder="Title" required value="{{ old('title',$banner->title) }}">
                            </div>
                            {{-- <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Price Description</label>
                                <input class="form-control" name="price_desc" id="exampleFormControlTextarea1" placeholder="Price Description" value="{{ old('price_desc',$banner->price_desc) }}">
                            </div> --}}
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Link</label>
                                <input type="url" class="form-control" name="link" id="validationTooltip02"
                                    placeholder="Link" required value="{{ old('link',$banner->link) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Banner</label>
                                <input type="file" class="form-control" name="banner" id="validationTooltip02"
                                      value="{{ old('banner') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1" @if ($banner->status == 1) selected @endif>Active</option>
                                    <option value="0" @if ($banner->status == 0) selected @endif>De-Active</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bottom_script')
@endsection
