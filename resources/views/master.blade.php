<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 3</title>
</head>
<body>
 
	<header>
 
		<h2>kholifatulardli</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
	<center><p>&copy;kholifatulArdli 2020</p></center>
	</footer>
 <hr>
</body>
</html>