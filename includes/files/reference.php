
<?php while($product = mysqli_fetch_assoc($featured)): ?>
    <div class ="col-md-3 text-center">
        <h4><?= $product['image']; ?></h4>
        <img src="<? $product['image']; ?>" class="img=thumb">
        <div class="caption">
                <p class="price">our price: $<?= $product['price']; ?></p>
        </div>
    </div>
<?php endwhile; ?>



echo "<script type='text/javascript'>alert('Only JPG,JPEG,PNG and GIF file format are allowed to Upload')</script>";

<?php if (isset($_GET['msg'])) {

echo "<div class = 'alert alert-success alert-dismissible'>";
      echo $_GET['msg'];
      echo "</div>";
}
?>




              <?php if (count($errors) > 0): ?>
                <div class = 'error'>
                  <?php foreach ($errors as $error) ?>
                      <p><?php echo $error; ?></p>
                  <?php endforeach ?>
                </div>
              <?php endif ?>

              <div class ="form-container text-center col-xs-5">

                  <div class="head">left side</div>
                  <p>wertfgyhgfdfghjkh<br>
                  wertfgyhgfdfghjkh<br>
                wertfgyhgfdfghjkh<br>
              wertfgyhgfdfghjkh<br></p>
              </div>
