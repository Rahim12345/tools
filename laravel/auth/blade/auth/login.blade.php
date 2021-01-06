@extends('auth.layout.app')

@section('title')
    Login
@endsection

@section('css')

@endsection

@section('content')
    <div class="container col-sm-10 col-md-8 col-xl-4 mx-auto" style="margin-top: 150px;">
        <div class="card">
            <h3 class="card-header">Login</h3>
            @isset($error)<div class="alert alert-danger" style="border-radius: 0px;">{{$error}}</div>@endif
            <div class="card-block">
                <form action="{{route('post.login')}}" method="post">
                    @csrf
                    <div class="form-group @if($errors->first('email')) has-danger @endif">
                        <div class="col-sm-12">
                            <input value="{{old('email')}}" type="email" name="email" class="form-control @if($errors->first('email')) form-control-danger @endif" placeholder="Email">
                        </div>
                        @if($errors->first('email'))
                            <div class="form-control-feedback" style="margin-left: 20px;">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group @if($errors->first('password')) has-danger @endif">
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control @if($errors->first('password')) form-control-danger @endif" placeholder="Password">
                        </div>
                        @if($errors->first('password'))
                            <div class="form-control-feedback" style="margin-left: 20px;">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary float-right">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
