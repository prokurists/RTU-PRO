<div class="container" id="top-container">
<h1 class="display-4">Aleksejs Porftolio</h1>
<p class="lead">Fit fabricando faber.</p>
</div>

<?php
if ($alert == ""){
  // nekas nenotiek
  echo "nav kludas";
}
else{
  echo "
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Kļūda!</strong>" . $alert. "
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
  ";

}?>
