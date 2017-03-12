<?php  
  $t = $data['title'];
  $c = $data['category'];
  $u = $data['username'];
  $a = $data['url'];

  $like = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' AND title LIKE '%$t%' AND category='$c' ORDER BY id DESC LIMIT 4;");
  $otherproduct = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' AND username='$u' ORDER BY id DESC LIMIT 4;");

  $images = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='7' AND url='$a' ORDER BY id DESC;");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $data['title']; ?></title>
  <link rel="stylesheet" href="<?php echo css; ?>style.css">
</head>
<body>

<?php 
  include 'part/nag.php';
  include 'part/topmenu.php';
  include 'part/secondmenu.php';
?>

  <div class="container">
    <div class="breadcumbs">
      <a href="" title="" class="item">Semua Produk / </a>
      <a href="" title="" class="item">Komik Faktap / </a>
      <a href="" title="" class="item"><?php echo $data['category']; ?> / </a>
      <a href="<?php echo $my.'product/buy/'.$data['url']; ?>" title="" class="active item"><?php echo $data['title']; ?></a>
    </div>    
  </div>

<div class="container">

  <div class="product">

    <div class="images">
    <?php $images->execute(); //exec for this foreach ?>
    <?php foreach($images->fetchAll() as $image){ ?>
      <img image-id="<?php echo $image['id'] ?>" onclick="changeMainImage('<?php echo img.$image['image']; ?>','<?php echo $image['id'] ?>');" src="<?php echo img.$image['image']; ?>" alt="">
    <?php } ?>
    </div>
    <div class="image">
      <img src="<?php echo img.$data['image']; ?>" alt="" id="detailproductimage">
    </div>
    <div style="width:10%;display:inline-block;"></div>

    <div class="content">
      <div class="title"><?php echo $data['title']; ?></div>
      <div class="from">
          karya 
          <a href="" title="">
          <?php echo user($data['username'],'name'); ?>
        </a>
      </div>
      <div class="rating">
        <i class="rating star icon"></i>
        <i class="rating star icon"></i>
        <i class="rating star icon"></i>
      </div>
      <div class="prices">
        <?php if($data['discount'] == 0 || $data['discount'] == '0' || $data['discount'] < '0' || $data['discount'] < 0) { ?>
        <b class="fixedprice">
          <?php echo $moneyinfo; ?><?php echo number_format($data['price']); ?>
        </b>
        <?php } 
              else { 
        ?>
        <b class="fixedprice">
          <?php echo $moneyinfo; ?><?php echo number_format($data['discount']); ?>
        </b>
        <b class="oldprice">
           <?php echo $moneyinfo; ?><?php echo number_format($data['price']); ?>
         </b>
        <?php } ?>

      </div>
      <?php if($data['stock'] == 1 || $data['stock'] == '1'){ ?>
      <div class="avaible status">Stok tersedia</div>
      <?php } else { ?>
      <div class="avaible status">Stok habis</div>
      <?php  } ?>
      <div class="description">
        <b><?php echo $data['title']; ?></b>
        <?php echo $data['description']; ?>
      </div>

      <div class="cc">
        <a title="" class="cctext">Pilih Warna :</a>
        <div class="white"><div></div> Putih</div>
        <div class="red"><div></div> Merah</div>
        <div class="blue"><div></div> Biru</div>
        <div class="green"><div></div> Hijau</div>
      </div>

      <div class="ts">
        <div>
 <select name="cars">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
        </div>
        <div>
 <select name="cars">
  <option value="M">M</option>
  <option value="X">X</option>
  <option value="XS">XS</option>
  <option value="G">G</option>
</select>
        </div>
      </div>

    <div class="buy button" add-to-cart="<?php echo $data['url']; ?>" onclick="carting('a','<?php echo $data['url']; ?>','62')">
      <i class="shopping cart icon"></i> BELI
    </div>

    <div class="ws">
      <div><i class="empty heart icon"></i> Tambah ke wishlist</div>
      <div>
        <i class="facebook link icon"></i>
        <i class="twitter link icon"></i>
        <i class="mail outline link icon"></i>
        <i class="whatsapp link icon"></i>
        <i class="google plus link icon"></i>
      </div>
    </div>

    <div class="pd">
      <div class="active button">Deskripsi Produk</div>
      <div class="button">Panduan Produk</div>
      <div class="content">
        <?php echo $data['content']; ?>
        <a class="label">INDONESIA</a>
        <a class="label">SATU</a>
      </div>
      <div class="report button"><i class="flag icon"></i> Laporkan produk ini</div>
    </div>

    </div>
  </div>

<div class="on-sale border">
  <div></div>
</div>
<h2 class="rec-text">TERSEDIA JUGA DI</h2>
  <div class="main product container">
    <div class="products">
    <?php $like->execute(); //exec for this foreach ?>
    <?php foreach($like->fetchAll() as $product){ 
        $newprice = $product['discount']/$product['price'];
        $discount = $newprice * 100;
      ?>
      <div class="item">
        <?php 
        if($product['discount'] > 0 || $product['discount'] > '0')
          echo '<div class="status">'.$discount.'%</div>';
        ?>
        <img src="<?php echo img.$product['image']; ?>" alt="">
        <a class="title" href="<?php echo $my.'product/buy/'.$product['url']; ?>"><?php echo $product['title']; ?></a>
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
<h2 class="rec-text">KARYA LAIN DARI TOKO INI</h2>
  <div class="main product container">

    <div class="products">
    <?php $otherproduct->execute(); //exec for this foreach ?>
    <?php foreach($otherproduct->fetchAll() as $product){ 
        $newprice = $product['discount']/$product['price'];
        $discount = $newprice * 100;
      ?>
      <div class="item">
        <?php 
        if($product['discount'] > 0 || $product['discount'] > '0')
          echo '<div class="status">'.$discount.'%</div>';
        ?>
        <img src="<?php echo img.$product['image']; ?>" alt="">
        <a class="title" href="<?php echo $my.'product/buy/'.$product['url']; ?>"><?php echo $product['title']; ?></a>
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


</div><br><br>

<div class="detail-testimonial">
  <div class="container">
    <div style="font-family: 'Gadugi';font-size:25px;text-align:left;" class="title">Ulasan Pelanggan</div>
    <i class="rating star icon"></i>
    <i class="rating star icon"></i>
    <i class="rating star icon"></i>
    <i class="rating star icon"></i>
    <i class="rating empty star icon"></i>
<br><br>
    <b>10 Ulasan Teratas</b>

    <div class="review">
      <div class="name">Rubi Jihantoro</div>
      <div class="date">2017-02-13 09:27:32</div>

      <div class="content">
        Lorem ipsum dolor sit amet
      </div>
    </div>

    <div class="review">
      <div class="name">Sukonto Legowo</div>
      <div class="date">2017-02-13 09:27:32</div>

      <div class="content">
        dolor sit amet !!
      </div>
    </div>
    <div class="review">
      <div class="name">Joanna Mongodebe</div>
      <div class="date">2017-02-13 09:27:32</div>

      <div class="content">
         Amet amet amet Lorem
      </div>
    </div>
  </div>
</div>
<br>

<div class="product type info">
  <div class="container">
    <div class="title">SEMAKIN KEREN DENGAN KAOS ENTEES.CO.ID</div>
    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor i Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. n reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

    <div class="title">KAOS</div>
    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

    <div class="title">KENAPA BELI KAOS DI ENTEES.CO.ID ?</div>
    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
  </div>
</div>

  <br>
<?php include 'part/footer.php'; ?>
  <script src="<?php echo js; ?>bundle.js"></script>
</body>
</html>