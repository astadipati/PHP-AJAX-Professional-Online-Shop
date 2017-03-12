<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hope Modern Admin Template</title>
<link rel="stylesheet" href="<?php echo css; ?>admin/style.css">
<link rel="stylesheet" href="<?php echo css; ?>admin/cs.css">
</head>
<body>
<div class="base">
  <div class="home">
  	<div class="sidebar">
  		<div class="profile">
  			<img src="<?php echo img.$_SESSION['i']; ?>" class="avatar" alt="">
  			<div class="name"><?php echo $_SESSION['n']; ?></div>
  		</div>
  		<div class="menu" active-menu="1">
  			<div class="item" menu-id="1"><i class="home icon"></i> Dashboard</div>
  			<div class="item" menu-id="2"><i class="desktop icon"></i> 
  				Products
  				<div class="dropdown more">
  					<div class="item"><i class="info icon"></i> All Product</div>
  					<div class="item"><i class="leaf icon"></i> Add Product</div>
  				</div>
  			</div>
  			<div class="item" menu-id="7"><i class="edit icon"></i> Order</div>
  			<div class="item" menu-id="3"><i class="tags icon"></i> Category</div>
  			<div class="item" menu-id="4"><i class="image icon"></i> Media</div>
  			<div class="item" menu-id="5"><i class="mail outline icon"></i> Mail</div>
  			<div class="item" menu-id="6"><i class="users icon"></i> Users</div>
  			<div class="item" menu-id="8"><i class="cubes icon"></i> Ads</div>
  			<div class="item" menu-id="8"><i class="settings icon"></i> Settings</div>
  		</div>
  	</div>
  	<div class="top menu">
  		<div class="right menu">
  			<div class="item" couple-id="inbox">
  				<i class="mail outline link icon"></i>
				<div class="mail dropdown" couple-data="inbox">
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
  			<div class="item" couple-id="notification">
  				<i class="alarm link icon"></i>
				<div class="alarm dropdown" couple-data="notification">
					<div class="header">
						Notification
						<a href="" title="Read All Message" class="mark read icon"> 
							<i class="chevron right link icon"></i>
						</a>
					</div>
					<div class="list">
						<div class="item">
							<div class="icon"><i class="heart icon"></i></div>
							<div class="content">
								Someone like your post about cat
							</div>
							<div class="date">3 Minute ago</div>
						</div>

						<div class="item">
							<div class="icon"><i class="info icon"></i></div>
							<div class="content">
								Server status has been stable
							</div>
							<div class="date">5 Hours ago</div>
						</div>

						<div class="item">
							<div class="icon"><i class="ticket icon"></i></div>
							<div class="content">
								Someone wanna buy your ticket
							</div>
							<div class="date">7 Hours ago</div>
						</div>	
					</div>
				</div>  
  			</div>
  			<div class="item" couple-id="tasks">
  				<i class="tasks link icon"></i>
				<div class="tasks dropdown" couple-data="tasks">
					<div class="header">
						Tasks
						<a href="" title="Read All Message" class="mark read icon"> 
							<i class="chevron right link icon"></i>
						</a>
					</div>
					<div class="list">

						<div class="item">
							<div class="progress">
							  <div>
							    <div class="percent">10%</div>
							  </div>Server Upgrade&nbsp;
							</div>
						</div>
						
						<div class="item">
							<div class="progress">
							  <div style="width:75%;">
							    <div class="percent">75%</div>
							  </div>Change Harddisk&nbsp;
							</div>
						</div>

					</div>
				</div>  
  			</div>
  			<div class="item" couple-id="ayam">
  				<i class="user link icon"></i>
				<div class="user dropdown" couple-data="ayam">
					<div class="header">
						Your Account
					</div>
					<div class="list">
						<div class="item">
							<div class="icon"><i class="user icon"></i></div>
							<div class="content">
								Profile
							</div>
						</div>
						<div class="item">
							<div class="icon"><i class="setting icon"></i></div>
							<div class="content">
								Settings
							</div>
						</div>
						<a href="<?php echo $my.'admin/logout/'; ?>" class="item">
							<div class="icon"><i class="sign out icon"></i></div>
							<div class="content">
								Logout
							</div>
						</a>

					</div>
				</div>  
  			</div>
  		</div>
  	</div>

	<div class="main-content" style="height:1000px;"><br>
		<div style="height:13px;"></div>
		<div class="main grid">
			<div class="ten column">
				<div class="demo-container">
				    <div id="placeholderRT" class="demo-placeholder"></div>
			    </div>
			    <br>

			    <div class="four cards">

			    	<div class="card">
			    		<div class="bottom info basic">
			    			<i class="inbox icon" style="font-size:50px;color:grey;"></i>
			    			<br><br>
			    			<b class="title">62% Message</b>
			    		</div>
			    	</div>
			    	<div class="card">
			    		<div class="bottom info basic">
			    			<i class="tasks icon" style="font-size:50px;color:grey;"></i>
			    			<br><br>
			    			<b class="title">25 Question</b>
			    		</div>
			    	</div>
			    	<div class="card">
			    		<div class="bottom info basic">
			    			<i class="heart icon" style="font-size:50px;color:grey;"></i>
			    			<br><br>
			    			<b class="title">51 Feedback</b>
			    		</div>
			    	</div>
			    	<div class="card">
			    		<div class="bottom info basic">
			    			<i class="shipping icon" style="font-size:50px;color:grey;"></i>
			    			<br><br>
			    			<b class="title">102+ Order</b>
			    		</div>
			    	</div>

			    </div>
<br>
			    <div class="two cards">
			    	<div class="card">

						<div class="chat block">

							<div class="head">
								Chat
							</div>

							<div class="chat list" style="min-height:400px;max-height:401px;">
								<div class="item">
									<img src="assets/images/cutecat.jpg" class="avatar" alt="">
									<div class="content">
										<div class="name">Cat</div>
										lorem ipsum ne!
									</div>
								</div>
							</div>
						<div class="input act">
							<input placeholder="write and press enter" type="text">
							<i class="send icon"></i>
						</div>

					    </div>

			    	</div>
			    	<div class="card">

						<div class="chat block">

							<div class="head">
								Client Chat
							</div>

							<div class="chat list" style="min-height:400px;max-height:401px;">

								<div class="item">
									<img src="assets/images/cutecat.jpg" class="avatar" alt="">
									<div class="content">
										<div class="name">Rubi</div>
										lorem ipsum ne!
									</div>
								</div>
								<div class="item">
									<img src="assets/images/jack.jpg" class="avatar" alt="">
									<div class="content">
										<div class="name">Jack Spears</div>
										aha ne, soma takashu nagato? hoh?
									</div>
								</div>

							</div>
						<div class="input act">
							<input placeholder="write and press enter" type="text">
							<i class="send icon"></i>
						</div>

					    </div>
					    
			    	</div>
			    </div>

			</div>
			<div class="six column">
				<div class="block">

					<div class="head">
						Orders
					</div>

					<div class="scrolled list" style="max-height:395px;">

						<div class="item">
							<img src="assets/images/jack.jpg" class="avatar" alt="">
							<div class="content">
								Seseorang membeli produk anda - 2h
								<div class="act">
									<a>Lihat rincian</a> - 
									<a class="">Info Pembeli</a> - 
									<a href="" title="">Proses</a>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="assets/images/jack.jpg" class="avatar" alt="">
							<div class="content">
								Seseorang membeli produk anda - 2h
								<div class="act">
									<a>Lihat rincian</a> - 
									<a class="">Info Pembeli</a> - 
									<a href="" title="">Proses</a>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="assets/images/jack.jpg" class="avatar" alt="">
							<div class="content">
								Seseorang membeli produk anda - 2h
								<div class="act">
									<a>Lihat rincian</a> - 
									<a class="">Info Pembeli</a> - 
									<a href="" title="">Proses</a>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="assets/images/jack.jpg" class="avatar" alt="">
							<div class="content">
								Seseorang membeli produk anda - 2h
								<div class="act">
									<a>Lihat rincian</a> - 
									<a class="">Info Pembeli</a> - 
									<a href="" title="">Proses</a>
								</div>
							</div>
						</div>
						
						<div class="item">
							<img src="assets/images/jack.jpg" class="avatar" alt="">
							<div class="content">
								Seseorang membeli produk anda - 2h
								<div class="act">
									<a>Lihat rincian</a> - 
									<a class="">Info Pembeli</a> - 
									<a href="" title="">Proses</a>
								</div>
							</div>
						</div>

					</div>

				</div>

				<div class="upload block">
					<i class="plus icon"></i>
				</div>
				<br><br>
				<div class="block">

					<div class="head">
						Files
					</div>

					<div class="scrolled list" style="max-height:395px;">

						<div class="item">
							<i class="avatar image icon"></i>
							<div class="content">
								New catalogue
								<div class="act">
									<a>Lihat rincian</a> - 
									<a class="">Info Pembeli</a> - 
									<a href="" title="">Proses</a>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
  	</div>
  
  </div>
</div>
<script src="<?php echo js; ?>/admin/jquery.js"></script>
<script src="<?php echo js; ?>/admin/cs.js"></script>
<script src="<?php echo js; ?>/admin/jquery.flot.js"></script>
<script src="<?php echo js; ?>/admin/jquery.flot.resize.js"></script>
<script src="<?php echo js; ?>/admin/app.js"></script>
</body>
</html>