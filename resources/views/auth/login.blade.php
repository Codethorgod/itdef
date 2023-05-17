<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel Login | Optishine</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/admin_login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="workSpace">
        {{-- <div class="avatar" style="background: white;">
            <div id="infinity">
               <img src="{{ asset('admin-assets/images/optishinelogo.png')}}" style="margin-top: 28px;height: 90px" alt="">
            </div>
        </div> --}}
        <div class="left">
            <img class="img-fluid" src="{{ asset('admin-assets/images/it-definitions.png') }}" alt="">
            <h1 class="logo">Welcome to IT-Definitions</h1>
            <p>Emproving Your Digital World
            </p>
        </div>
        <div class="right">
            <form action="{{ route('login') }}" id="" method="post">
                @csrf
                <h1>SignIn</h1>
                <p class="invalid-feedback" role="alert">
                    <strong id="Message"></strong>
                </p>
                @error('error')
                  <p class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </p>
               @enderror
                @error('email')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
                @error('password')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
                <input class="input" type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}"
                    required autocomplete="off">
                <input class="input" name="password" type="password" placeholder="Enter your password" required
                    autocomplete="off">
                <div class="login-btn-box">
                    <button class="submit">Log In</button>
                </div>
            </form>
           
        </div>
    </div>
    <script src="{{ asset('admin-assets/js/app.min.js')}}"></script> 

    <script>
        $(document).ready(function(){
            @if(Session::has('5fernsadminerror'))
               
                $('#Message').html("{{ Session::get('5fernsadminerror') }}");
            @elseif(Session::has('5fernsadminsuccess'))
                $('#Message').html("{{ Session::get('5fernsadminsuccess') }}");
            @endif
            });

    </script>
</body>

</html>