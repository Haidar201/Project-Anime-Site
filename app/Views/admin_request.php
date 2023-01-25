<?= $this->extend('layout/admin_templates'); //to tell the file this is inherit to templates.php 
?> 

<?= $this->section('content'); 
//to tell the parent that this is section with content as its name ?> 
<div class="home-content container-fluid py-5 bg-opacity-10" >    
  <div class="container-md bg-white text-dark py-3 px-5">
      <h2 class="py-4 px-2">Request List</h2>
      <table class="table table-bordered table-striped border-dark mb-5">
        <thead class="text-center">
          <tr>
            <th>Number</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Alasan Request</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($list as $film) : ?>
            <tr">
              <td class="text-center ps-3"><?= $i++; ?></td>
              <td class="text-center ps-3"><?= $film['Judul']; ?></td>
              <td class="text-center ps-3"><?= $film['Tahun_Terbit']; ?></td>
              <td><?= $film['Alasan_Request']; ?></td>
            </tr>
            <<?php endforeach;?>
        </tbody>
      </table>
  </div>
</div>



<?= $this->endSection(); //to tell the parent that this is the end of content section
?>