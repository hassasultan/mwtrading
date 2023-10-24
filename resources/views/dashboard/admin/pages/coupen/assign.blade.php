@extends('dashboard.admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="progress-container bg-white rounded-30 p-sm-5 p-3 mb-3">
                    <div class="d-md-flex mb-4">
                        <div class="align-self-center mb-3">
                            <h2 class="primary_title text-black ">Assign Coupen to Products</h2>
                            <p>
                                {{-- <span><i class="fa-solid fa-filter filter_icon me-3"></i></span>
                                <span class="sort_by">Sort by: Popular Class</span> --}}
                                Coupen: {{ $coupen->name }}
                            </p>
                            <p>Coupen Code: {{ $coupen->code }}</p>
                        </div>
                        <div class="ms-auto ">

                        </div>
                    </div>
                    <form class="needs-validation" method="post" action="{{ route('assign.coupen.store') }}" novalidate>
                        @csrf
                        <div class="form-row">
                            <input type="hidden" name="coupen_id" value="{{ $coupen->id }}"/>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Products</label>
                                <select class="form-control select2-multiple" multiple name="product_id[]">
                                    @if ($coupen->products == "[]")
                                        @foreach ($product as $row)
                                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                                        @endforeach
                                    @else
                                        @foreach ($product as $row)
                                            <option value="{{ $row->id }}"  @foreach ($coupen->products as $item) @if($item->id == $row->id) selected @endif @endforeach >{{ $row->title }}</option>
                                        @endforeach
                                    @endif
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
