<!DOCTYPE html>
<html lang="en">
<head>
  <title>Incorrect email or password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .center-div {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .custom-border {
      border: 2px solid grey; 
    }
  </style>
</head>
<body>

<div class="center-div">
  <div class="container-lg p-5 my-5 custom-border"> <!-- Apply custom border class -->
    <h2 class="text-center">Log in</h2>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="login-conn.php" method="post">
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
          </div>
          <div class="text-center">
             <button type="submit" class="btn btn-primary btn-block" name="sub">Log in</button>
          </div>
          <div class="text-center">
          <a href="register.php">Register?</a>
          </div>
          <p style="color:red; text-align:center;">Incorrect email or pasword!</p>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
