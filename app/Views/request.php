<?= $this->extend('layout/templates'); //to tell the file this is inherit to templates.php 
?> 

<?= $this->section('content'); 
//to tell the parent that this is section with content as its name ?> 
<div class="home-content container-fluid py-5 bg-opacity-10" >    
  <div class="container-md bg-white text-dark py-3 px-5">
    <h2 class="py-4 px-2"><?php echo($title); ?></h2>

    <form action="/Request/save_request" method="post">
        <?= csrf_field(); // to protect the page if it been used in another website ?>
        <div class="row mb-3">
            <label for="Judul" class="col-sm-2 col-form-label">Judul Anime</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="Judul" name= "judul" required autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Year" class="col-sm-2 col-form-label">Premier Year</label>
            <div class="col-sm-2">
            <input type="number" class="form-control" id="Year" name= "year" min=1990 max="2023">
            </div>
        </div>
        <div class="row mb-3">
            <label for="Reasson" class="col-sm-2 col-form-label">Why You Request This</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="Reasson" name="reasson" rows="5"></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-dark my-3">Send</button>
        <!--Button Pop up
        <button class="btn btn-primary my-3" data-toggle="berhasil" data-target="#popup">Send Request</button>
        -->
    </form>
    
  
  </div>
</div>

<!--popup
<div class="berhasil fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myPopUp" aria-hidden="true">
    <div class="berhasil-dialog">
        <div class="berhasil-content">
            <div class="berhasil-header">
                <button type="button" class="close" data-dismiss = "berhasil" aria-hidden="true">
                    &times;
                </button>
                <h4 class="berhasil-title" id="popupLabel">
                    Success!
                </h4>
            </div>
            <div class="berhasil-body">
                Your request has been sent successfully!
            </div>
            <div class="berhasil-footer">
                <button type="submit" class="btn btn-success" data-dismiss="berhasil">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
-->

<?= $this->endSection(); //to tell the parent that this is the end of content section
?>