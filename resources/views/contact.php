<h3> Ja vēlies sazināties ar mani, lūdzu aizpildi formu </h3>
<form name="form" onsubmit="return parbaudit_formu()">
  <div class="form-group">
    <label for="email">E-pasta adrese</label>
    <input type="email" value="email"class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Piezīmes</label>
    <textarea class="form-control" value="textarea" rows="3"></textarea>
  </div>
  <div class="form group">
  <label for="captcha">Captcha <?php captcha(); echo "Cik ir " . $first_Number . " + " . $second_Number. " = " . $total_Sum; ?></label>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
  function captcha () {
  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
  }
?>