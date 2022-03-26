@extends('publicSite.layout.master')

@section('content')
<!-- Sahar Start -->
<div class="main-content edit_user_form">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Edit User Profile</div>
                        <div class="card-body card-block">
                            <form action="{{route('userprofile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <div class="input-group position-relative">
                                        <input type="text" id="username2" name="name" placeholder="Admin Name" class="form-control" value="{{$user->name}}" style="padding-left: 40px">
                                            <span style="left: 8px; z-index:5" class="position-absolute"><i class="fa fa-user"></i></span>
                                            @error ('name')
                                            <strong>{{ $message }}</strong>

                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group position-relative">
                                        <input type="email" id="email2" name="email" placeholder="Email" class="form-control" value="{{$user->email}}" style="padding-left: 40px">
                                            <span style="left: 8px; z-index:5" class="position-absolute"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group position-relative">
                                        <input type="password" id="password2" name="password" placeholder="Password" class="form-control" value="{{$user->password}}" style="padding-left: 40px">
                                    <span style="left: 8px; z-index:5" class="position-absolute"><i class="fa fa-asterisk"></i></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group position-relative">
                                        <input type="number" id="phone" name="phone" placeholder="Phone" class="form-control" value="{{$user->phone}}" style="padding-left: 40px">
                                    <span style="left: 8px; z-index:5" class="position-absolute"><i class="fa fa-phone"></i></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group position-relative">
                                        <input type="file" id="image" name="image" class="form-control" value="{{$user->image}}"></div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm user-edit-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sahar End -->
@endsection
