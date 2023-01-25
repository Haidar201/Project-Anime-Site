<?= $this->extend('layout/admin_templates'); //to tell the file this is inherit to templates.php 
?> 

<?= $this->section('content'); 
//to tell the parent that this is section with content as its name ?> 
<div class="home-content container-fluid py-5 bg-opacity-10" >    
  <div class="container-md bg-white text-dark py-3 px-5">
      <h2 class="py-4 px-2"><?php echo($musim[$index]);?> Season Anime</h2>
      <table class="table table-bordered table-striped border-dark mb-5">
        <thead class="text-center">
          <tr>
            <th>Number</th>
            <th colspan="2">Film</th>
            <th>Synopsis</th>
            <th>Rating</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($Anime as $film) : ?>
            <tr">
              <td class="text-center ps-3"><?= $i++; ?></td>
              <td class="text-center">
                <a href="/<?= $film['Judul']; ?>">
                  <img src="/assets/images/<?= $film['Cover']; ?>" alt="Ars no Kyojuu" class="cover">
                </a>
              </td>
              <td class="pe-5">
                <a href="/<?= $film['Judul']; ?>"><?= $film['Judul']; ?></a>
              </td>
              <td><?= $film['Synopsis']; ?></td>
              <td class="text-center pe-1"><i class="fa-solid fa-star pe-1"></i><?= $film['Rating']; ?></td>
            </tr>
            <<?php endforeach;?>
        </tbody>
      </table>
  </div>
</div>



<?= $this->endSection(); //to tell the parent that this is the end of content section
?>