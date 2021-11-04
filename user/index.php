<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="mark Otto jacob thornton, and boostrap contibutors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login Siswa</title>

    <link rel="canonical" herf="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
      <div class="container">
          <main class="from-signin">
          <form action="proses_login.php" method="POST">
          <h1>PERPUSTAKAAN</h1>
          <br>
          <h1 class="h3 mb- fw-normal">Please Sign In</h1>
      <div class="form-floating">
      <input type="username" class="form-control" id="floatingInput" name="username" placeholder="Insert Username" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>

</head>
<body>
    
</body>
</html>