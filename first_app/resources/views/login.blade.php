<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>Login</title>
</head>
<body>
<main>
     
    @if (@session()->has('error')&& session('error')=='fail')
      <div class="alert alert-danger" role="alert">
        Giriş Bilgileri Hatalı
      </div>
    @endif
    
    @if (@session()->has('success'))
      <div class="alert alert-success" role="alert">
       {{session('success')}}
      </div>
    @endif

    <form action="{{route('loginpost')}}" method="post">
        @csrf
        <h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <section>
            <button type="submit">Login</button>
            <a href="{{route('register')}}">Register</a>
        </section>
    </form>
</main>
</body>
</html>