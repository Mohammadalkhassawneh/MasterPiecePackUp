@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Edit Admin</div>
                            <div class="card-body card-block">
                                <form action="{{route("user.update",$edited_user->id)}}" method="POST"  enctype='multipart/form-data'>
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="username2" name="name" value="{{$edited_user->name}}" placeholder="Admin Name" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="email" id="email2" name="email" placeholder="Email" class="form-control" value="{{$edited_user->email}}">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" id="password2" name="password" placeholder="Password" class="form-control" value="{{$edited_user->password}}">
                                            <div class="input-group-addon">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="phone" name="phone" placeholder="Phone" class="form-control" value="{{$edited_user->phone}}">
                                            <div class="input-group-addon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <div class="input-group">
                                            <input type="file" id="image" name="image" value="{{$edited_user->image}}" placeholder="Image" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
