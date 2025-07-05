@extends('layouts.auth')

@section('body-class', 'register-page')

@section('content')
    <div class="register-box">
      <div class="register-logo">
        <a href="../index2.html"><b>Gerenciador</b>BETA</a>
      </div>
      <!-- /.register-logo -->
      <div class="card">
        <div class="card-body register-card-body">
          <p class="register-box-msg">Registrar um novo usuário</p>
          <form action="{{ route('register')}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Full Name" />
              <div class="input-group-text"><span class="bi bi-person"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="passoword" class="form-control" placeholder="Password" />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="passoword_confirmation" class="form-control" placeholder="Password Confirmation" />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>

            <!--begin::Row-->
            <div class="row">
              <!-- /.col -->
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
          <!-- /.social-auth-links -->
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>

@endsection