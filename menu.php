	<div id="header"></div>
	<div id="menu">
	<p class="club">THE BOOK CLUB</p>
		<a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" 
			href="index.php">
			HOME
		</a>
		<a class="<?php echo ($current_page == 'about.php') ? 'active' : NULL ?>" href="about.php">
			ABOUT
		</a>
		<a class="<?php echo ($current_page == 'browse.php') ? 'active' : NULL ?>" href="browse.php">
			SEARCH
		</a>
		<a class="<?php echo ($current_page == 'mybooks.php') ? 'active' : NULL ?>" href="mybooks.php">
			MY BOOKS
		</a>
		<a class="<?php echo ($current_page == 'contact.php') ? 'active' : NULL ?>" href="contact.php">
			CONTACT
		</a>
		<a class="<?php echo ($current_page == 'gallery.php') ? 'active' : NULL ?>" href="gallery.php">
			GALLERY
		</a>
	</div>

	<style>
	.active {
	display: inline;
	margin:10px;
	color: #000;
	font-family: open sans, helvetica;
	border-bottom: 2px solid #000;
	padding-left: 4px;
	}

	#menu {
	background-color: rgba(255,255,255, 0.7);
	width:100%;
	margin:auto;
	position: absolute;
	top:0;
	text-align: center;
	padding:5px;
	margin-left: -8px;
	padding-bottom: 15px;
	min-width: 450px;
}
	#header {
	background: url("") center left;
	width:100%;
	height: 150px;
	margin-left: -8px;
	margin-top: -8px;
	}

	.club {
	font-weight: bold;
	font-size: 48px;
	margin:10px;
	color: #000;
	font-family: open sans, helvetica;
	margin-bottom: 0px;

	}

	a {
	display: inline;
	margin:10px;
	color: #000;
	font-family: open sans, helvetica;

}

.btn:hover {
	font-weight: bold;
}
	</style>