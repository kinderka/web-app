<?php include_once '../Config/database.php' ;?>
<?php include_once '../Model/User.php' ;?>

<?php 
    session_start(); 

    if(isset($_SESSION['logged']))
    {
        header('Location: index-login.php');
        exit();
    }

?>

<!DOCTYPE html>
<?php include_once 'header.php'; ?>
<html lang="en">
<link rel="Stylesheet" type="text/css" href="../Resources/css/index.css" />
<link href="https://fonts.googleapis.com/css?family=Jomhuria&amp;subset=latin-ext" rel="stylesheet"> <html lang="en">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo" rel="stylesheet">
<link rel="Stylesheet" type="text/css" href="../Resources/css/fontello/css/fontello.css" />


<?php //<script type="text/javascript" src="../Resources/js/whcookies.js"></script>?>

	
<link href="css/jquery.cookiepolicy.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.cookiepolicy.js"></script>
<body>
    <div class="container">
    
        <div class="header"> 
            <div class="logo">
                <a class="one" href ="index.php">
                    <img src="../Resources/image/logo.png"/> 
                    <span style="color: #0a663eaf"> korepetycje</span>.pl
                    <div style="clear:both;"></div>
                </a.login> 
            </div>
            <div class="nav">
                <a href="login.php">zaloguj</a>
                <div class="nav2">
                    <a href="../View/register.php">zarejestruj</a>
                </div>
            </div>
        </div>

        <div class="content">  
            <div class="left">
                Szukasz korepetytora?
                <div class="context"> Znajdziesz najlepsze <p></p>oferty tutaj.</div>
                    <div class="ldown">
                        <a href="search.php">
                            <button>wyszukaj</button>
                        </a>
                    </div>
                </div>
            <div class="right">
                Oferujesz korepetycje?
                <div class="context">Zapisz sie<p></p> i dodaj ogloszenie.</div>
                    <div class="rdown">
                        <a href="register.php">
                            <button>załóż konto</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="socials">
            <div class="socialsdivs">
                <div class="fb"><i class="icon-facebook"></i></div>
                <div class="yt"><i class="icon-youtube"></i></div>
                <div class="tw"><i class="icon-twitter"></i></div>
                <div class="gplus"><i class="icon-gplus"></i></div>
                <div style="clear:both"></div></div>
            </div>
        </div>
   
<?php include_once 'footer.php'; ?>

</div>

<script src="../Resources/js/jquery-3.3.1.min.js"></script>

<script>

	$(document).ready(function() {
	var NavY = $('.header').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.header').addClass('sticky');
	} else {
		$('.header').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>
</body>
</html>



