<?php if( !defined('APP') ) echo "Please use the script with entry point, you can't access script directly!"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $hometitle; ?></title>
	<link rel="stylesheet" href="<?php echo css; ?>style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
  include 'part/nag.php';
  include 'part/topmenu.php';
  include 'part/secondmenu.php';
  include 'part/bigcategory.php';
  include 'part/normalcategory.php';
?>

<br>
<h2 class="rec-text">DIREKOMENDASIKAN</h2>
<br>

	<div class="main product container">

		<div class="products">
    <?php $new->execute(); //exec for this foreach ?>
    <?php foreach($new->fetchAll() as $product){ 
        $newprice = $product['discount']/$product['price'];
        $discount = $newprice * 100;
      ?>
			<div class="item">
				<?php 
        if($product['discount'] > 0 || $product['discount'] > '0')
          echo '<div class="status">'.$discount.'%</div>';
        ?>
				<img src="<?php echo img.$product['image']; ?>" alt="">
				<a href="<?php echo $my.'product/buy/'.$product['url']; ?>" class="title"><?php echo $product['title']; ?></a>
				<div class="desc"><?php echo $product['category'].' Oleh '.user($product['username'],'name'); ?></div>

        <?php if($product['discount'] == 0 || $product['discount'] == '0' || $product['discount'] < '0' || $product['discount'] < 0) { ?>
				<div class="price"><?php echo $moneyinfo; ?><?php echo number_format($product['price']); ?></div>
        <?php } 
              else { 
        ?>
        <div class="price"><?php echo $moneyinfo; ?><?php echo number_format($product['discount']); ?></div>
        <div class="oldprice"><?php echo $moneyinfo; ?><?php echo number_format($product['price']); ?></div>
        <?php } ?>

			</div>
    <?php } ?>
		</div>

	</div>
<br><br>

<?php include 'part/testimonial.php'; ?>

<br><br>
<h2 class="rec-text">TERBARU DAN TRENDING &rarr;</h2>
<br>

  <div class="main product container">

    <div class="products">
    <?php $popular->execute(); //exec for this foreach ?>
    <?php foreach($popular->fetchAll() as $product){ 
        $newprice = $product['discount']/$product['price'];
        $discount = $newprice * 100;
      ?>
      <div class="item">
        <?php 
        if($product['discount'] > 0 || $product['discount'] > '0')
          echo '<div class="status">'.$discount.'%</div>';
        ?>
        <img src="<?php echo img.$product['image']; ?>" alt="">
        <a href="<?php echo $my.'product/buy/'.$product['url']; ?>" class="title"><?php echo $product['title']; ?></a>
        <div class="desc"><?php echo $product['category'].' Oleh '.user($product['username'],'name'); ?></div>

        <?php if($product['discount'] == 0 || $product['discount'] == '0' || $product['discount'] < '0' || $product['discount'] < 0) { ?>
        <div class="price"><?php echo $moneyinfo; ?><?php echo number_format($product['price']); ?></div>
        <?php } 
              else { 
        ?>
        <div class="price"><?php echo $moneyinfo; ?><?php echo number_format($product['discount']); ?></div>
        <div class="oldprice"><?php echo $moneyinfo; ?><?php echo number_format($product['price']); ?></div>
        <?php } ?>

      </div>
    <?php } ?>
    </div>

  </div>

<br><br>
<div class="on-sale border">
  <div></div>
</div>
<h2 class="rec-text">ON SALE &rarr;</h2>
<br>

  <div class="main product container">
    <div class="products">

    <?php $popular->execute(); //exec for this foreach ?>
    <?php foreach($popular->fetchAll() as $product){ 
        $newprice = $product['discount']/$product['price'];
        $discount = $newprice * 100;
      ?>
      <div class="item">
        <?php 
        if($product['discount'] > 0 || $product['discount'] > '0')
          echo '<div class="status">'.$discount.'%</div>';
        ?>
        <img src="<?php echo img.$product['image']; ?>" alt="">
        <a href="<?php echo $my.'product/buy/'.$product['url']; ?>" class="title"><?php echo $product['title']; ?></a>
        <div class="desc"><?php echo $product['category'].' Oleh '.user($product['username'],'name'); ?></div>

        <?php if($product['discount'] == 0 || $product['discount'] == '0' || $product['discount'] < '0' || $product['discount'] < 0) { ?>
        <div class="price"><?php echo $moneyinfo; ?><?php echo number_format($product['price']); ?></div>
        <?php } 
              else { 
        ?>
        <div class="price"><?php echo $moneyinfo; ?><?php echo number_format($product['discount']); ?></div>
        <div class="oldprice"><?php echo $moneyinfo; ?><?php echo number_format($product['price']); ?></div>
        <?php } ?>

      </div>
    <?php } ?>
    </div>
  </div>
  <div class="join us image">
    <img src="img/joinus.jpg" alt="">
    <div class="divider"></div>
  </div>
  <br>
<div class="container">
  <div class="two site description">
    <div class="item">
      <div class="title">Jual Kaos, Casing HP, Tas dengan desain unik dan terlengkap</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="item">
      <div class="title">Kaos Berkualitas untuk Berbagai Kegiatan</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="item">
      <div class="title">Bikin T-Shirt dan Kaos Custom Online</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="item">
      <div class="title">Buat Toko Merchandise dengan Desain Sendiri, Tanpa Modal!</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
</div>
  <br>

<?php  include 'part/footer.php'; ?>



  <script src="<?php echo js; ?>bundle.js"></script>
  <script type="text/javascript">
$(window).on({
    resize: function(){
        $('#ayam').val(window.innerWidth);
    }
});
  </script>
</body>
</html>