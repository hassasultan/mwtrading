@extends('dashboard.admin.layout.app')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="progress-container bg-white rounded-30 p-sm-5 p-3 mb-3">
                    <div class="d-md-flex mb-4">
                        <div class="align-self-center mb-3">
                            <h2 class="primary_title text-black ">Add Product</h2>
                        </div>
                        <div class="ms-auto ">
                            <p>
                                {{-- <span><i class="fa-solid fa-filter filter_icon me-3"></i></span>
                                <span class="sort_by">Sort by: Popular Class</span> --}}
                            </p>
                        </div>
                    </div>
                    <form class="needs-validation" method="post" action="{{ route('product.update',$product->id) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            {{--<div class="col-md-12 mb-3">
                                <label for="inputState">Seller</label>
                                <select id="inputState" class="form-control" name="seller" required>
                                    @foreach ($seller as $row)
                                        <option @if (old('seller') == $row->id) selected @endif
                                            value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>--}}
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip02">Title</label>
                                    <input type="text" class="form-control" name="name" id="validationTooltip02" placeholder="Enter Product Title" value="{{ old('name',$product->title) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState">Category</label>
                                    <select id="select-category" class="form-control select2-multiple" name="category_id" required>
                                        @foreach ($category as $row)
                                            <option @if (old('category_id',$product->category_id) == $row->id) selected @endif
                                                value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputStatesubCat">Sub-Category</label>
                                    <select id="subcategory" class="form-control select2-multiple" name="subcategory" required>
                                        @foreach ($subcategory as $row)
                                            <option @if (old('subcat_id',$product->subcat_id) == $row->id) selected @endif
                                                value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                {{-- <div class="col-md-6 mb-3">
                                    <label for="inputState">Brand</label>
                                    <select id="inputState" class="form-control select2-multiple" name="brand" required>
                                        <option value="" selected>Select Brand</option>
                                        @foreach ($brand as $row)
                                            <option @if (old('brand',$product->subcat_id) == $row->id) selected @endif
                                                value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}


                                <div class="col-md-6 mb-3">
                                    <label for="inputFea">Is Feature</label>
                                    <select id="inputFea" class="form-control" name="IsFeature" required>
                                        <option value="">Select Featured</option>
                                        <option value="1" @if (old('IsFeature',$product->IsFeature) == 1) selected @endif>Yes</option>
                                        <option value="0" @if (old('IsFeature',$product->IsFeature) == 0) selected @endif>No</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip04">Default Image</label>
                                    <input type="file" class="form-control" name="fea_img" id="validationTooltip04" >
                                    <img src="{{ asset('public/storage/' . $product->fea_img) }}" style="height: 150px; width: 150px"/>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip05">Description</label>
                                    <textarea class="form-control" name="description" id="validationTooltip05" rows="3">{{ old('description',$product->description) }}</textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltipOldprice">Old Price</label>
                                    <input type="number" class="form-control"  value="{{ old('old_price',$product->old_price) }}" name="old_price" id="validationTooltipOldprice" step="any" min=”0″  required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltipnewprice">New Price</label>
                                    <input type="number" class="form-control"  value="{{ old('new_price',$product->new_price) }}" name="new_price" id="validationTooltipnewprice" step="any" min=”0″ required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip0Link">Redirect Link</label>
                                    <input type="url" class="form-control" name="link" id="validationTooltip0Link" value="{{ $product->link }}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Status">Status</label>
                                    <select id="Status" class="form-control" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="1" @if (old('status',$product->status) == 1) selected @endif>Active</option>
                                        <option value="0" @if (old('status',$product->status) == 0) selected @endif>DeActive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter Product Meta Title" value="{{ old('meta_title',$product->meta_title) }}" >
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" rows="3" placeholder="Meta Description">{{ old('meta_description',$product->meta_description) }}</textarea>
                            </div>
                            <div class="text-right" style="margin-bottom : 2%">
                                <button type="button" onclick="addedudetails()" class="btn btn-primary">+ Add Image(s)</button>
                                <br />
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="preempform">
                                    <thead>
                                        <p>More Images</p>
                                        <tr>
                                            <th style="white-space: nowrap;">S.NO.</th>
                                            <th style="white-space: nowrap;">Select Image</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($productImg) > 0)
                                            @foreach ($productImg as $key=> $row)
                                                <?php $cnt = $key+1; ?>
                                                <tr>
                                                    <td><input type='number' step='any' class='form-control required_colom'
                                                            required='required' placeholder='' value="{{ $cnt }}"
                                                            readonly /></td>
                                                    <td>
                                                        {{-- <input type='file' step='any' name='image[]'
                                                            id="video0"
                                                            onchange="selectVideo(0)" class='form-control required_colom address form-input'
                                                            required='required' multiple>
                                                        <div id="videos0" class="mt-3"></div> --}}
                                                        <img src="{{ asset('public/storage/' . $row->image) }}" style="height: 150px; width: 150px"/>
                                                    </td>
                                                    <!--<td><input type='radio' value='0' checked="checked" name='Showimage[]'-->
                                                    <!--        class='form-control required_colom address' required='required'></td>-->
                                                    <td>
                                                        {{-- @if ($cnt != 1) --}}
                                                            <a href="{{ route('product.image.delete',$row->id) }}"
                                                                class='btn btn-danger remove' onclick="return confirm('Are you sure You want to delete this Item?')">remove</a>
                                                        {{-- @endif --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <?php $cnt = 1; ?>
                                            <tr>
                                                <td><input type='number' step='any' class='form-control required_colom'
                                                        required='required' placeholder='' value="{{ $cnt }}"
                                                        readonly /></td>
                                                <td>
                                                    <input type='file' step='any' name='image[]'
                                                        id="video0"
                                                        onchange="selectVideo(0)" class='form-control required_colom address form-input'
                                                        required='required' multiple>
                                                    <div id="videos0" class="mt-3"></div>
                                                </td>
                                                <!--<td><input type='radio' value='0' checked="checked" name='Showimage[]'-->
                                                <!--        class='form-control required_colom address' required='required'></td>-->
                                                <td>
                                                    @if ($cnt != 1)
                                                        <button onclick="removeRow(1)" type='button'
                                                            class='btn btn-danger remove'>remove</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-2 mb-3">
                                <button class="btn btn-primary" type="submit">Add Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bottom_script')
    <script>
        $("#select-category").on("change",function(){
            var category = $(this).val();
            console.log(category);
            $.ajax({
                type: "get",
                url: "{{ route('subcat.by.cat') }}",
                data: {
                    'category':category,
                },
                success: function (data) {
                    $("#subcategory").html("");
                    var your_html = "";
                        $.each(data, function (key, val) {
                            your_html += "<option value="+val['id']+">" +  val['name'] + "</option>"
                        });
                    $("#subcategory").append(your_html); //// For Append
                },
                error: function() {
                    console.log(data);
                }
            });
        });
        function selectVideo(id) {
            video = document.getElementById("video" + id).files[0];
            getImgData(id);


        }
        function getImgData(id) {
            const chooseFile = document.getElementById("video" + id);
            const imgPreview = document.getElementById("videos" + id);
          const files = chooseFile.files[0];
          if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function () {
              imgPreview.style.display = "block";
              imgPreview.innerHTML = '<img style="width:100px;height:100px;" src="' + this.result + '" />';
            });
          }
        }
        // document.querySelector("input[type=file]").onchange = function(event) {
        //     var numberOfVideos = event.target.files.length;
        //     for (var i = 0; i < numberOfVideos; i++) {
        //         var file = event.target.files[i];
        //         var blobURL = URL.createObjectURL(file);
        //         var video = document.createElement('video');
        //         video.src = blobURL;
        //         video.setAttribute("controls", "")
        //         var videos = document.getElementById("videos");
        //         videos.appendChild(video);
        //     }
        // }}
        function addedudetails() {

            var table = document.getElementById("preempform");
            var rowCount = $('#preempform tr').length;
            var row = table.insertRow(rowCount);
            // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
            var hotelLocationId = "HotelLocation" + rowCount;


            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            // var cell4 = row.insertCell(3);
            // var cell5 = row.insertCell(4);
            // var cell6 = row.insertCell(5);

            var jaja = 1;
            var pappu = rowCount;
            var jhama = pappu - jaja;

            var indexrowcount = jhama - jaja;

            console.log(indexrowcount);

            cell1.innerHTML =
                "<input type='number' step='any'  class='form-control required_colom' required='required' placeholder='' value=" +
                jhama + " readonly />";
            // cell2.innerHTML =
            //     "<input type='file' step='any' name='video_title[]' id='can_edu_year'  class='form-control required_colom datepick' required='required' placeholder='Alternate Text' />";
            cell2.innerHTML = "<input type='file' step='any' name='image[]' onchange='selectVideo(" + indexrowcount +
                ")'  id='video" + indexrowcount +
                "'  class='form-control required_colom address' required='required' /> <div id='videos" + indexrowcount +
                "' class='mt-3'></div>";
            // cell4.innerHTML = "<input type='text' readonly step='any' name='duration[]' id='dur" + indexrowcount +
            //     "'  class='form-control required_colom datepick' required='required' placeholder='Duration' />";
            // cell5.innerHTML = "<input type='text' readonly step='any' name='ext[]' id='ext" + indexrowcount +
            // "'  class='form-control required_colom datepick' required='required' placeholder='Extension' />";
            // cell6.innerHTML = "<input type='radio'  name='Showimage[]' value=" + indexrowcount +
            //     " class='form-control required_colom address' required='required'>"
            $("#can_edu_year").each(function() {

            });
            if (jhama == 1) {
                cell3.innerHTML = "<button  type='button' class='btn btn-danger ' >remove</button>";
            } else {
                cell3.innerHTML = "<button  type='button' class='btn btn-danger remove' >remove</button>";
            }

        }

        $('#preempform').on('click', '.remove', function(e) {
            $(this).closest('tr').remove();
        });
    </script>
@endsection
