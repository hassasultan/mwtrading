@extends('dashboard.admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="progress-container bg-white rounded-30 p-sm-5 p-3 mb-3">
                    <div class="d-md-flex mb-4">
                        <div class="align-self-center mb-3">
                            <h2 class="primary_title text-black ">Edit Coach Category</h2>
                        </div>
                        <div class="ms-auto ">
                            <p>
                                {{-- <span><i class="fa-solid fa-filter filter_icon me-3"></i></span>
                                <span class="sort_by">Sort by: Popular Class</span> --}}
                            </p>
                        </div>
                    </div>
                    <form class="needs-validation" method="post" action="{{ route('coupen.update',$coupen->id) }}" novalidate>
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Title</label>
                                <input type="text" class="form-control" name="name" id="validationTooltip02"
                                    placeholder="Title" value="{{ old('name',$coupen->name) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Coupen Code</label>
                                <input type="text" class="form-control" name="code" id="validationTooltip01"
                                placeholder="Enter Coupen Code..." value="{{ old('code',$coupen->code) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip03">Expiry Date</label>
                                <input type="date" class="form-control" name="expiry" id="validationTooltip03"
                                placeholder="Enter Expiry Date..." value="{{ old('expiry',$coupen->expiry) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('description',$coupen->description) }}</textarea>
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
