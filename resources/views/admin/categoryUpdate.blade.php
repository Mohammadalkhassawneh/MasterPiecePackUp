@extends("admin.layout.master")

@section('content')

     <!-- MAIN CONTENT-->
     <div class="main-content" style="margin-left:300px;">
                <div class="section__content section__content--p30" >
                    <div class="container-fluid" >
                        <div class="row" >
                            <div class="col-lg-8">
                                <div class="card" >
                                    <div class="card-header">Category</div>
                                    <div class="card-body" style="margin:auto;">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit Category</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('categories.update', $Category->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Name</label>
                                                <input  name="category_name" type="text" class="form-control" value='{{ $Category->category_name}}' >
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">Image</label>
                                                <input  name="category_img" type="file" class="form-control cc-number identified visa" value='{{ $Category->category_img}}'>
                                            </div>

                                            </div>
                                            <div style="margin:0 0 10px 100px;">
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
    </div>
    </div>
    </div>
    @endsection
