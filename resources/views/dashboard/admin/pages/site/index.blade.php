@extends('dashboard.admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="progress-container bg-white rounded-30 p-sm-5 p-3 mb-3">
                    <div class="d-md-flex mb-4">
                        <div class="align-self-center mb-3">
                            <h2 class="primary_title text-black ">Update Site Setting</h2>
                        </div>
                        <div class="ms-auto ">
                            <p>
                                {{-- <span><i class="fa-solid fa-filter filter_icon me-3"></i></span>
                                <span class="sort_by">Sort by: Popular Class</span> --}}
                            </p>
                        </div>
                    </div>
                    <form class="needs-validation" method="post" action="{{ route('store.site.setting') }}" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">logo</label>
                                <input type="file" class="form-control" name="logo" id="validationTooltip02icon"
                                    placeholder="Icon" value="{{ old('logo') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Contact Number</label>
                                <input type="tel" class="form-control" name="phone" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('phone',$site->phone) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Address</label>
                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('address',$site->address) }}</textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Contact Email</label>
                                <input type="email" class="form-control" name="email" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('email',$site->email) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Facebook Url</label>
                                <input type="url" class="form-control" name="fb" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('fb',$site->fb) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Twitter Url</label>
                                <input type="url" class="form-control" name="twiter" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('twiter',$site->twiter) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Pintrest Url</label>
                                <input type="url" class="form-control" name="pintrest" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('pintrest',$site->pintrest) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Instagram Url</label>
                                <input type="url" class="form-control" name="inst" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('inst',$site->inst) }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Youtube Url</label>
                                <input type="url" class="form-control" name="youtube" id="validationTooltip02"
                                    placeholder="Title"  value="{{ old('youtube',$site->youtube) }}">
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
