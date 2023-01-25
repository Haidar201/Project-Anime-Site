<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url('/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ＡｎｉＷｅｅｂｓ　テス - Anime list and Reviews</title>

    <!--Navbar-->
    <div class="header container-md-fluid- text-white px-5 py-5 ">
        <div class="container-md px-0">
            <h1 class="py-3 ps-2">ＡｎｉＷｅｅｂｓ　テス</h1>

        <nav class="navbar navbar-expand-lg navbar-dark fw-bold py-0 " style="background-color: #55555570;">
        <div class="container-fluid py-2">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">ＡｎｉＷｅｅｂｓ　テス゜</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=<?= base_url('/'); ?>>Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href=<?= base_url('/Request'); ?>>Request Anime</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href=<?= base_url('/Rating_Anime'); ?>>Rate Anime</a>
                </li>
            </ul>
            <form action="/Login" class="d-flex">
                <button class="btn btn-success" type="submit">Login</button>
            </form>
            </div>
        </div>
    </div>
    </nav>
    </div>

</head>
<body>

<?= $this->renderSection('content'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>/assets/js/MyJavascript.js"></script>
</body>
</html>