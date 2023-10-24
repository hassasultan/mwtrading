@extends('dashboard.admin.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="progress-container bg-white rounded-30 p-sm-5 p-3 mb-3">
                <div class="d-md-flex mb-4">
                    <div class="align-self-center mb-3">
                        <h2 class="primary_title text-black ">Brand List</h2>
                    </div>
                    <div class="ms-auto ">
                        <p>
                            {{--<span><i class="fa-solid fa-filter filter_icon me-3"></i></span>
                            <span class="sort_by">Sort by: Popular Class</span>--}}
                            <a class="sort_by" id="" href="{{ route('brand.create') }}">Add Brand</a>
                        </p>
                    </div>
                </div>
                <div class="row row-cols-xxl-3 row-cols-sm-2 row-cols-1">
                    {{--@foreach ($cat as $row)--}}
                        {{--<div class="col mb-box-150">
                            <div class="courses_box position-relative">
                                <div class="img">
                                    <img src="{{ asset('images/img_dsh_1.png') }}" alt="" class="w-100">
                                </div>
                                <div class="content position-absolute">
                                    <h3 class="title">title</h3>
                                    <p class="desc">description</p>
                                    <div class="d-flex">
                                        <div class="">
                                            <p class="time">
                                                <svg id="Component_icon_ic_Activity"
                                                    data-name="Component/icon/ic_Activity"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.666" height="14.666"
                                                    viewBox="0 0 14.666 14.666">
                                                    <path id="Combined_Shape" data-name="Combined Shape"
                                                        d="M0,7.333a7.333,7.333,0,1,1,7.333,7.333A7.341,7.341,0,0,1,0,7.333Zm1.333,0a6,6,0,1,0,6-6A6.007,6.007,0,0,0,1.333,7.333Zm8.591,2.859-3-2.333a.667.667,0,0,1-.257-.527v-4A.667.667,0,0,1,8,3.334V7.007L10.742,9.14a.666.666,0,1,1-.818,1.052Z"
                                                        fill="#d4af37" />
                                                </svg>
                                                {{-- <span>50 Min / 2 Videos</span> --}}
                                            </p>
                                        </div>
                                        <div class="ms-auto">
                                            <p class="rate">
                                                {{-- $ 99.00 --}}
                                            {{--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_courses text-center position-absolute w-100 ">
                                    <a href="" class="btn_courses_btn">
                                        Edit Category
                                    </a>
                                </div>
                            </div>--}}
                            <table id="example1" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($brand) > 0)
                                @foreach ($brand as $key=>$row)
                                <tr>
                                    <td>{{ ++$key }}. </td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->description }}</td>

                                    <td style="width: 11rem">
                                    <a href="{{ route('brand.edit', $row->id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-edit mr-2"></i> Edit</a>

                                    {{--<a onclick="admindelete({{$row->id}})" class="btn btn-danger btn-sm"><i
                                        class="fa fa-trash mr-2"></i> Delete</a>--}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6" align="center">No data available</td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom_script')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection
