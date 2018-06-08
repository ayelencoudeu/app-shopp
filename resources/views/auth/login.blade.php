@extends('layouts.app')

@section('body-class', 'signup-page sidebar-collapse')

@section('content')
 <div class="page-header header-filter" filter-color="purple" style="background-image: url('{{ asset('img/bg7.jpg')}}')">
<div class="container">
  <div class="row">
    <div class="col-md-10 ml-auto mr-auto">
      <div class="card card-signup">
        <h2 class="card-title text-center">Inicio de Sesión</h2>
        <div class="card-body">
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="info info-horizontal">
                <div class="icon icon-rose">
                  <i class="material-icons">timeline</i>
                </div>
                <div class="description">
                  <h4 class="info-title">Marketing</h4>
                  <p class="description">
                    We've created the marketing campaign of the website. It was a very interesting collaboration.
                  </p>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-primary">
                  <i class="material-icons">code</i>
                </div>
                <div class="description">
                  <h4 class="info-title">Fully Coded in HTML5</h4>
                  <p class="description">
                    We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                  </p>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-info">
                  <i class="material-icons">group</i>
                </div>
                <div class="description">
                  <h4 class="info-title">Built Audience</h4>
                  <p class="description">
                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-5 mr-auto">
              <!-- <div class="social text-center">
                <button class="btn btn-just-icon btn-round btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
                <h4> or be classical </h4>
              </div> -->
              <form class="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
               
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email..." value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                   
                    <input id="password" type="password" placeholder="Password..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                  </div>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                    Recordar Contraseña
                    <a href="#something">temas y condiciones</a>.
                  </label>
                </div>
                <div class="text-center">
                      <button type="submit" class="btn btn-primary">
                        Empezar
                    </button>
                 
                </div>
                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }} -->
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <nav class="float-left">
      <ul>
        <li>
          <a href="https://www.creative-tim.com">
            Creative Tim
          </a>
        </li>
        <li>
          <a href="https://presentation.creative-tim.com">
            About Us
          </a>
        </li>
        <li>
          <a href="https://blog.creative-tim.com">
            Blog
          </a>
        </li>
        <li>
          <a href="https://www.creative-tim.com/license">
            Licenses
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, made with <i class="material-icons">favorite</i> by
      <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
    </div>
  </div>
</footer>
</div>
  
@endsection
