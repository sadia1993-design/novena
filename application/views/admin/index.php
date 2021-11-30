<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_assets/css/style.css">

    <title>Login Form</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>admin_assets/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">

        <div class="form-title text-center mb-5">
            <h1>Login Form</h1>
        </div>
        <form method="post" action="<?php echo base_url('Admin/login')?>" class="mb-5">
            <label for="user" class="fw-bold mb-3">Enter Email</label>
            <input class="form-control random mb-4 btn-lg" type="email" name="email" id="user" placeholder="E-mail Address" required>
            <label for="password" class="fw-bold mb-3">Enter Password</label>
            <input class="form-control mb-4 btn-lg" type="password" id="password" name="passwd" placeholder="Password" required>
            <div class="form-button text-center">
                <button type="submit" name="submit" class="btn btn-navy submit  " id="submit">Login</button>
            </div>
        </form>

        <?php 
           $msg= $this->session->userdata('msg');
           $mdgColor = $this->session->userdata('msgColor');
           if($mdgColor== 'red_color'){
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>oops!</strong> $msg
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
            $this->session->unset_userdata('msg');
           }
           elseif($mdgColor== 'green_color'){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Hei buddy!</strong> $msg
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
            $this->session->unset_userdata('msg');
           }
        ?>

    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>