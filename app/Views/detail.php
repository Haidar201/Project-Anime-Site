<?= $this->extend('layout/templates'); //to tell the file this is inherit to templates.php 
?> 

<?= $this->section('content'); 
//to tell the parent that this is section with content as its name ?> 
<div class="home-content container-fluid py-5 bg-opacity-10" >    
  <div class="container-md bg-white text-dark py-3 px-5">
    <?php foreach($detail as $isi) : ?>
      <h2 class="py-4 text-center"><?php echo($isi["Nama"]);?></h2>
      <img src="/assets/images/<?= $isi['Cover']; ?>" alt="<?= $isi["Nama"]; ?>" class="mx-auto d-block">
      <p class="mt-5">Anime Title = <?php echo($isi["Nama"]);?></p>
      <p>Status = <?= $isi['Status']; ?></p>
      <p>Genre = <?= $isi['Genre']; ?></p>
      <p>Total Episodes = <?= $isi['Episode']; ?>
      <p>Synopsis = <?= $isi['Synopsis']; ?></p>
    <?php endforeach ?>
    <div class="d-flex justify-content-center my-5">
        <button onclick="location.href='/'" type="button" class="btn btn-dark">
            Back to Home        
        </button>
    </div>
  </div>
</div>



<?= $this->endSection(); //to tell the parent that this is the end of content section
?>