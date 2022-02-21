<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Wikrama</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!--Navbar-->

    <nav>
        <a href="index.php?page=home"><img src="img/logo.png"></a>

        <ul>
            <li><a href="index.php?page=home">HOME</a></li>
            <li><a href="index.php?page=about">ABOUT</a></li>
            <li><a href="index.php?page=matrik">MATRICULATION</a></li>
            <li><a href="index.php?page=fasilitas">FACILITY</a></li>
            <li><a href="index.php?page=aboutme">ABOUT ME</a></li>
        </ul>

        <div class="menu-toggle"> 
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'home':
						include "halaman/home.php";
						break;
					case 'about':
						include "halaman/about.php";
						break;
					case 'fasilitas':
						include "halaman/fasilitas.php";
						break;
                    case 'matrik':
                        include "halaman/matrik.php";
                        break;
                    case 'aboutme':
                        include "halaman/aboutme.php";
                        break;         			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include "halaman/home.php";
			}
	    ?>
    <script src="script.js"></script>
</body>
</html>