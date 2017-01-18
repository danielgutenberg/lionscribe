@extends('layout')
@section('content')
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="panel-heading">
                        <strong> Register to continue</strong>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['action' => 'Auth\RegisterController@register', 'method' => 'post']) !!}
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group">
                                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus value="{{old('name')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-envelope"></i>
												</span>
                                                <input class="form-control" placeholder="Email" name="email" type="text" autofocus value="{{old('email')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                                <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-footer ">
                        Already have an account! <a href="{{ url('login') }}" onClick=""> Log In Here </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection