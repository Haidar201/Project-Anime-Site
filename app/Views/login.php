<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" 
    href = "<?php echo base_url('/assets/css/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ＡｎｉＷｅｅｂｓ　テス - Anime list and Reviews</title>
</head>
<body>
    <div class="header-login container-fluid py-5" > 
        <div class="position-absolute top-50 start-50 translate-middle">   
            <div class="card" style="width: 30rem; height:20rem; background-color:#f25811">
            <form action="/Login_confirmation" method="post">
                <div class="row mt-5 mx-3 my-3">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="row m-3">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">

                    <button type="submit" class="btn btn-primary ">Sign in</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>/assets/js/MyJavascript.js"></script>
</body>
</html>