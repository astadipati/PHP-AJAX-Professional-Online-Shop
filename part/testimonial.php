  <?php if( !defined('APP') ) echo "Please use the script with entry point, you can't access script directly!"; ?>
  <div class="testimonial">
    <div class="container">
      <div class="testi text">TESTIMONIAL</div>
    <?php $testimonial->execute(); //exec for this foreach ?>
    <?php foreach($testimonial->fetchAll() as $testi){ ?>
      <div class="item">
        <div class="name"><?php echo user($testi['username'],'name'); ?></div>
        <div class="rating">
          <i class="rating star icon"></i>
          <i class="rating star icon"></i>
          <i class="rating star icon"></i>
        </div>
        <div class="message"><?php echo $testi['content']; ?></div>
      </div>     
    <?php } ?>
    </div>
  </div>