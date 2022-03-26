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
                                            <h3 class="text-center title-2">Add Category</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Name</label>
                                                <input  name="category_name" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label  class="control-label mb-1">Description</label>
                                                {{-- <input name="category_desc" type="text" class="form-control cc-name valid"> --}}
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Image</label>
                                                <input  name="category_img" type="file" class="form-control cc-number identified visa">
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
