<?= $this->extend('layout/templates'); //to tell the file this is inherit to templates.php 
?> 

<?= $this->section('content'); 
//to tell the parent that this is section with content as its name ?> 
<div class="home-content container-fluid py-5 bg-opacity-10" >    
  <div class="container-md bg-white text-dark py-3 px-5">
    <h2 class="py-4 px-2">Give your Rating</h2>

    <form action="/Rating/submit_rating" method="post">
        <?= csrf_field(); // to protect the page if it been used in another website ?>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" aria-describedby="Name" name="nama" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" aria-describedby="Email" name="email" />
            </div>
        </div>
        <div class="row mb-5">
            <label for="Judul_Anime" class="col-sm-2 col-form-label">Anime</label>
            <div class="col-sm-4">
                <select id="Judul_Anime" name="Judul_Anime" class="form-select">
                    <?php foreach($Anime as $anime): ?>
                        <option selected><?= $anime['Judul']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="rating" class="col-sm-2 col-form-label mb-3">Rating</label>
            <div class="col-sm-8">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div> 
            </div>
            <input type="number" class="number d-none" id="rating" name="rating" max="10" />
        </div>
        <button type="submit" class="btn btn-dark my-3">Submit Rating</button>
        <!--Button Pop up
        <button class="btn btn-primary my-3" data-toggle="berhasil" data-target="#popup">Send Request</button>
        -->
    </form>
    
  
  </div>
</div>
<?= $this->endSection(); //to tell the parent that this is the end of content section
?>