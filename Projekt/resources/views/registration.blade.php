<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
  <div class="login-box">
    <h2>Registration</h2>
    <div class="mt-5">
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>
    <form action="{{route('registration.post')}}" method="POST">

        @csrf

      <div class="user-box">
            <input type="email" name="email" required>
            <label>Email</label>
      </div>
      <div class="user-box">
        <input type="text" name="name" required pattern="[a-zA-Z\s]+" title="Name must contain only letters">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="last_name" required pattern="[a-zA-Z\s]+" title="Last name must contain only letters">
        <label>Last name</label>
      </div>
      <div class="user-box">
        <input type="text" name="user_name" required minlength="5">
        <label>User name</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required minlength="8">
        <label>Password</label>
      </div>
      <div class="user-box">
        <input type="password" name="password_confirmation" required minlength="8">
        <label>Repeat password</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ route('login') }}" class="btn btn-primary">
        Go to login
      </a>
    </form>
  </div>
</body>
</html>
