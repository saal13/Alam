<?php

include(__DIR__. '/config.php');
$Alam['pageId'] = "me";
$Alam['title'] = "HOME";

include(__DIR__. '/incl/header.php');

$Alam['main'] ="
<article class='homes'>
<img src='img/blommor.gif' alt= 'Blommor'>

<p> Jag heter Sarah Abdirahman Ali, studerar i BTH på webbprogrammering.</p>
<p>Webbprogrammering kursen var en av min favorita lektioner under gymnasiet. Första hemsidan gjorde jag var helt underbart för mig. 
Det var som magic! 
Man kodar och därefter får man någont på skärmen!
Nu är jag på Blekinge tekniskahögskola och lär mig mer om kodning.
Innan dess bodde jag i Malmö med min underbar familje.</p>

<p>Vägen till att vara webbprogrammerare kom till när jag gjorde projektarabetet på en hemsida.
Det skulle vara till eleverna på gymnasiet. Då hade jag stora och fina tankar till hemsidan. 
Likasom att det ska vara 3D hemsida och avancerad, där skall finnas inloggning, chattning, läxhjälp osv. 

Jag kunde inte slutföra projektet efter låg kunskaper på språket php, mysql, databas, javascript etc. 
</p>

</article>";
include(__DIR__. '/incl/footer.php');
include (ALAM_THEME_PATH);