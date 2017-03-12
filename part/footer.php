<?php if( !defined('APP') ) echo "Please use the script with entry point, you can't access script directly!"; ?>
<?php 
  if(!empty($_SESSION['n']))
  {
    $me = $_SESSION['u'];
    $cart = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='8' AND username='$me';"); 
  }
?>  
  <br>
    <div class="cart-dimmer" id="cart-dimmer" style="display:none;">
   <div class="cart-list">
    <div class="header">
      Your Cart
      <div class="cart order button">Order</div>
      <div onclick="carting('e','<?php echo $product['url']; ?>','634');$(this).hide();" class="cart empty button">Kosongkan</div>
    </div>
    <div class="content" id="cart-content">

    <?php $cart->execute(); //exec for this foreach ?>
    <?php foreach($cart->fetchAll() as $product){  
        $newprice = product($product['url'],'discount')/product($product['url'],'price');
        $discount = $newprice * 100;
        if(product($product['url'],'discount') == 0 
            || product($product['url'],'discount') == '0' 
            || product($product['url'],'discount') < '0' 
            || product($product['url'],'discount') < 0) { ?>
      <?php } ?>
      <div ondblclick="carting('d','<?php echo $product['url']; ?>','<?php echo $product['id']; ?>');$(this).remove();" class="item" title="Klik dua kali untuk menghapus">
        <div class="dimmer">
          <?php echo 'Rp.'.number_format(product($product['url'],'price')); ?>
        </div>
        <img src="<?php echo img.product($product['url'],'image'); ?>" alt="">
      </div>
    <?php } ?>

    </div>
   </div>
  </div>
  <div class="footer">

    <div class="footer subscribe">
      <div class="content">
        Dapatkan penawaran exclusive + voucher 25rb!
        <div class="subscribe form">
          <input type="text">
          <button type="" class="button">Subscribe</button>
        </div>
      </div>
    </div>
  
  <div class="footer content">
    <div class="container four grid">

      <div class="item">
        <div class="title">BELANJA</div>
        <div class="list">Panduan Ukuran</div>
        <div class="list">Cara Pemesanan</div>
        <div class="list">Aturan Pengembalian</div>
        <div class="list">Pelanggan Bahagia :)</div>
        <div class="list">Termin Pengguna</div>
      </div>
      <div class="item">
        <div class="title">JUALAN</div>
        <div class="list">Pembagian Keuntungan</div>
        <div class="list">Aturan Hak Cipta</div>
        <div class="list">Buat Toko Sendiri</div>
        <div class="list">Karir / Lowongan</div>
        <div class="list">Privacy Policy</div>
      </div>
      <div class="item">
        <div class="title">ENTIS.CO.ID</div>
        <div class="list">Panduan Ukuran</div>
        <div class="list">Cara Pemesanan</div>
        <div class="list">Aturan Pengembalian</div>
        <div class="list">Pelanggan Bahagia :)</div>
        <div class="list">Termin Pengguna</div>
      </div>
      <div class="item">
        <div class="title">KAMI MENERIMA</div>
        <i class="mastercard icon" style="font-size:40px;color:gray;"></i>
        <i class="paypal icon" style="font-size:40px;color:gray;"></i>
        <i class="visa icon" style="font-size:40px;color:gray;"></i>
      </div>

    </div>
  </div>
  
  <div class="footer foot">
    <div class="container">
      <i class="heart icon"></i> All Rights Reserved &copy; 2017 PT. Entis Sutama Indonesia | Tentang Entis.co.id
    </div>
  </div>

  </div>
  <?php if(!empty($_SESSION['u'])){ ?>
  <script type="text/javascript">
  var m = "<?php echo $_SESSION['u']; ?>";
  var b = "<?php echo $my; ?>";
  </script>
  <?php } ?>