<?php
	include_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="img_container">
    <div class="img">
        <img src="image/Company/cleaner.jpg" alt="Kebab" width="100%" height="100%">
    </div>
</div>
<div class="name">
    Andreas städservice AB
</div>

 <div class="field">

        <button id="apply" onclick="document.getElementById('pitch_view').style.display='block'">Pitcha här</button>


    <div id="tf">
        <h1>
            Om företaget
        </h1>
        <p>
        Vi är uppstickaren på den svenska marknaden för hemstädning och utför idag 100 städuppdrag varje månad. Vi städar också ett stort antal kontor i Göteborg, Alingsås, Kungsbacka, Sundsvall och Kungälv.
        </p>
    </div>

    <div id="edu">
        <h2>Intressanta Utbildningar</h2>
        <p>
            Kemiteknik
        </p>
       
    </div>

</div>
<div class="field" style="height: 300px;">
    <div class="job">
        <h1> Tidigare ex-jobb</h1>
        <p>
            Effektivisera rengöringsmedel. <br>
            - kan fettet lösas upp snabbare?
        </p>
    </div>

    <div class="job">
        <h1> Tidigare ex-jobb</h1>
        <p>
            Ergonomiska hjälpmeldel<br>
            - Förbättra ergonomin i städbranchen med smarta hjälpmedel.
        </p>
    </div>
</div>


<div id="extra">
<h1>Länkar:</h1>
Våran hemsida
</div>
<div class="container">
    <div id="pitch_view" class="w3-modal">

        <h1>Pitcha din idé</h1>
       
        <div class="center_container">
        <span onclick="document.getElementById('pitch_view').style.display='none'" 
        class="w3-button" id="exit">&times;</span>
            
            <textarea name="pitch" id="pitch"  placeholder="pitcha din idé här!" ></textarea>
            <button id="send" type="submit">Skicka in!</button>
            <button id="send" onclick="document.getElementById('info').style.display='block'">info</button>
        </div>
    </div>
</div>
<div class="container">
    <div id="info" class="w3-modal">
        <div id="box">
            <h1>Info</h1>
            <p>
                Pitcha din idé här! <br>
                Använd dig av en NABC-pitch för att nå fram med just din idé men gör det kort och på max 300ord för att inte tråka ut läsaren.<br><br>
                Vad är en NABC-pitch? Läs mer om det <a target="_blank" href="guide.php">här</a><br> (Öppnas i ny flik) <br><br>
                OBS: När du skickar trycker på "skicka in" kommer personlig information från din profil att följa med i brevet för att läsaren skall få en tydligare helhetsuppfattning.
            </p>
        </div>
    </div>
</div>

<script>
// Get the modal
var modal1 = document.getElementById('info');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

<?php

	include_once 'footer.php';
?>