@extends('layouts.auth')

@section('body-class', 'login-page')

@section('content')
<div class="login-box">

      <div class="login-logo">
        <a href="../index2.html"><b>Gerenciador</b>BETA</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Faça login para inicar asua sessão</p>
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
              @error('email')
                <div class="invalid-feedback">  
                    {{$message}}
                </div>
              @enderror

            </div>

            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" placeholder="Password" />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
              @error('password')
                <div class="invalid-feedback">  
                    {{$message}}
                </div>
              @enderror

            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault"> Lembrar </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
          <!-- /.social-auth-links -->
          <div class="mt-2 text-center">
            <p class="mb-1">
                <a style="color:#0d6efd; text-decoration: underline;" href="forgot-password.html">Esqueci a minha senha</a></p>
            <p class="mb-0">
                <a style="color:#0d6efd; text-decoration: underline" href="register.html" class="text-center"> Registrar um novo usuário </a>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection