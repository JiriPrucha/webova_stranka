<!DOCTYPE html>

<html lang="cs">
    <head>
        <meta charset='utf-8'>
        <meta name='description' content='Největší Aeroklub v širokém okolí.'>
        <meta name='keywords' content='aeroklub, Tábor, letadla, letiště Tábor'>
        <meta name='author' content='Jiří Průcha'>
        <meta name='robots' content='all'>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="zaklad.css" type="text/css" >
        
        <title> Aeroklub Tábor </title>
        <link rel="icon" href="Obrazky/icons/icon_top.png">
    </head>
    
    <body>
        <header>
            <div class="uprava-sirka">
                <a href="index.html"><img class="logo" src="Obrazky/Logo.png" alt="Aeroklub Tábor logo"></a>
                <nav class="menu">
                    <ul class="vyber-right">
                        <li class="menu-item"><a href="vyhlidkove-lety.html">VYHLÍDKOVÉ LETY</a></li>
                        <li class="menu-item"><a href="fotogalerie.html">FOTOGALERIE</a></li>
                        <li class="menu-item"><a href="kontakty.html">REZERVACE</a></li>
                        <li class="menu-item"><a href="http://www.jiriprucha.cz/maturitni_prace/tmavy/posli.php"><img class="ikona-domu" src="Obrazky/icons/icon_svetly.png" alt="ikona noční režim"></a></li>
                        <li class="menu-item"><a href="index.html"><img class="ikona-domu" src="Obrazky/icons/icon_home.png" alt="ikona domů"></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <h1>Odesílání emailu</h1>
        
        <?
		$predmet = $_POST['predmet'];
		$email = $_POST['email'];
		$zprava = $_POST['zprava'];
    
		if ($predmet!="" and $email!="" and $zprava!="")
		{
		Mail("pruchaj@post.cz", $predmet, $zprava, "From:" . $email);
		echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
		}
		else
		{
		echo "<p>Váš e-mail se <strong>nepodařilo odeslat</strong> pravděpodobně jste nevyplnili všechny údaje!</p>";
		} 
		?>
        
        <footer>
            <div class="footer-kontakty">
                <div class="kontaky-dole">
                    <a class="menu-item" target="_blank" href="https://www.facebook.com/AKTabor/"><img class="ikona-kontakty" src="Obrazky/icons/icon_facebook.png" alt="ikona facebook"></a>
                    <a class="menu-item" target="_blank" href="http://www.instagram.com"><img class="ikona-kontakty" src="Obrazky/icons/icon_instagram.png" alt="ikona instagram"></a>
                    <a class="menu-item" target="_blank" href="http://www.twitter.com"><img class="ikona-kontakty" src="Obrazky/icons/icon_twitter.png" alt="ikona twitter"></a>
                </div>
            </div>
            <div class="ja">
                <div class="ja-text">
                    <p>Jiří Průcha 2020</p>
                </div>
            </div>
        </footer>
    </body>
</html>