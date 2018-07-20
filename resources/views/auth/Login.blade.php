@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="block-center mt-xl wd-xl">
      <div class="panel panel-green panel-flat">
        <div class="panel-heading text-center">
          <h4>
            FORM LOGIN
          </h4>
        </div>
        <div class="panel-body">
          <form class="mb-lg" role="form" data-parsley-validate="" novalidate="" method="POST" action="{{ route('Login') }}">
            @csrf
            <div class="form-group has-feedback">
              <input class="form-control" id="exampleInputEmail1" type="text" placeholder="Username" autocomplete="off" name="username" required>
              <span class="fa fa-user form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
              <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required>
              <span class="fa fa-lock form-control-feedback text-muted"></span>
            </div>
            <button class="btn btn-block btn-success mt-lg" type="submit">Masuk</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection
