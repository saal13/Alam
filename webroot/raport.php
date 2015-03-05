<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
 
$Alam['pageId'] = "raport";
// Do it and store it all in variables in the Anax container.
$Alam['title'] = "RAPORT";

include('incl/header.php');
$Alam['main'] = <<<EOD

<article class='raports'>
<img src='img/blommor.gif' alt='Blommor'>
<h1>Kmom01: Kom igång med programmering i PHP</h1>


<h3> Utvecklingsmiljö</h3>
<b>Operativsystem:</b> Microsoft Window 7<br>
<b>Webläsare:</b>      Google Chorme, Mozilla Firefox, Window Internet Explorer<br>
<b>Editor:</b>         jEdit, Notepadd++, Dreamweaver cs5<br>
<b>FTB:</b>            SFTP FileZilla<br>



<h3> Rapport</h3>
<p>Kursmomentet var okej. Jag  gjorde menyn av funktion istället för klass. Det pekas med body id och class för nuverande val. 
Då om det skulle byggas menyn på klass tänkte jag att det inte ska vara markören id på body. Samt jag tänkte att det är bättre än att göra med klass.
Då blir det mer kode än vad det behövs! Samt jag behöver att gå djupare innan jag startar med klasser. 
Det kommer att vara på nästa kursmoment med klasser då kommer menyn byggas av klass.</p>

<p>Eftersom jag gjorde innan kursmomenten. Jag har gått igenom  hela guiden 20-steg istället att bläddra, jag försökte  så att det ska sitta fast. 
Det var inte något nytt, förutom det blev en extra igenom gång.</p> 
<p>Webbmallen kallas Alam. Ordet på svenskan är flagga. Det  är  arabiska ord alam. Jag tyckte att webbmallen skulle kallas på det.
Webbmall strukturen är komplicerad men är väl-ordinerat, jag läggte till i webrooten en undermabb incl  där läggts till header och footer
då vi har lärt oss i kursen htmlphp.</p> 

<p>På source koden försökte jag göra eget. Men det gick inte så bra. Så att jag kopierat Mikeals och includerat det!
Jag gått igenom git & github skapat konto, laddat programmet och kommit igång med det men som prövning. Jag har inte publicerat Alam på git.
Jag har set några video kilpper på Git.</p>
</article>

EOD;
 
include('incl/footer.php');
 
 
// Finally, leave it all to the rendering phase of Anax.
include(ALAM_THEME_PATH);