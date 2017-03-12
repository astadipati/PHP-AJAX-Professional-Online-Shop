<?php if( !defined('APP') ) echo "Please use the script with entry point, you can't access script directly!"; ?>
<?php 
if(!empty($_SESSION['u']))
{
	$me = $_SESSION['u'];
	$cart = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='8' AND username='$me';");
	$cart->execute();
	$t = $cart->rowCount();
}
?>
 <div class="first menu">
 	<a href="<?php echo $my; ?>" title="">
 		<img src="<?php echo img; ?>logo.jpg" class="logo" alt="">
 	</a>
  	
  	<div class="list item">
	  	<div class="item">
	  		CREATE
	  	</div>
	  	<div class="item">
	  		SHOP
	  	</div>
	  	<div class="item">
	  		SELL <i class="dropdown icon"></i>
	  	</div>
	  	<div class="red item">
	  		PROMO
	  	</div>
	  	<div class="search form item">
	  		<input type="text" placeholder="Cari Produk atau Nama Toko">
	  		<button type="submit"><i class="search icon"></i></button>
	  	</div>
	  	<div class="right floated cart item">
	  		<i class="shop icon"></i> CART
	  		(<div class="cart total"><?php echo $t; ?></div>) 
	  	<i class="dropdown icon"></i>
	  	</div>
	  	<div class="right floated user item">
	  		<i class="user icon"></i> 
	  		<?php if(!empty($_SESSION['n'])) echo $_SESSION['n']; ?>
	  		<i class="dropdown icon"></i>
				<div class="logged user dropdown" couple-data="inbox">
					<div class="header">
						Inbox
						<a href="" title="Read All Message" class="mark read icon"> 
							<i class="chevron right link icon"></i>
						</a>
					</div>

					<div class="item">
						<div class="avatar"><img src="assets/images/jack.jpg" alt=""></div>
						<div class="content">
							i just know really person a person and yup. stupid,
						</div>
						<div class="date">Jack Spears - 3 Minute ago</div>
					</div>

					<div class="item">
						<div class="avatar"><img src="assets/images/rubi.jpg" alt=""></div>
						<div class="content">
							she extremly stupid goddamn hell
						</div>
						<div class="date">Jono Doe - 2 Hours ago</div>
					</div>

					<div class="item">
						<div class="avatar"><img src="assets/images/cutecat.jpg" alt=""></div>
						<div class="content">
							Rubii, i need some food :(, i'm hungry 
						</div>
						<div class="date">My Cat - 5 Hours ago</div>
					</div>

					<div class="item">
						<div class="avatar"><img src="assets/images/ciayo.png" alt=""></div>
						<div class="content">
							Hey, how are you, i just coming
						</div>
						<div class="date">Alexandra Blaze - 6 Hours ago</div>
					</div>

				</div>  
	  		</div>
	  	</div>
  	</div>

  </div>