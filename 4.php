<?php
	include_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="img_container">
    <div class="img">
        <img src="image/Company/papper.jpg" alt="pappersbruk" width="100%" height="100%">
    </div>
</div>
<div class="name">
    Isacs pappersbruk
</div>

 <div class="field">

        <button id="apply" onclick="document.getElementById('pitch_view').style.display='block'">Pitcha här</button>


    <div id="tf">
        <h1>
            Om företaget
        </h1>
        <p>
        I Katrineholm, cirka 10 mil från järna, finns ett av de finast belägna pappersbruk i världen, Isacs pappersbruk. Platsen valdes med omsorg - men vi var inte där först. Det var munkarna som senare gav sitt namn till området, pappersbruket, byn, kommunen och – slutligen – vårt varumärke. På platsen där Katrineholms- och Örekilsälven flyter samman, brukade munkarna från klostret i Bokenäset fiska lax.<br>

        Detta var för åtta hundra år sedan, men Örekilsälven anses än i dag vara en av landets finaste laxälvar, med många besökande fiskentusiaster varje år.<br>

        De senaste 20 åren har det gjorts stora investeringar, och fabriken är i dag ett av de miljövänligaste pappersbruken i världen. Idag är vi en av Europas ledande tillverkare av obestruket papper, med en betydande export till stora delar av världen.<br>
      </p>
    </div>

    <div id="edu">
        <h2>Intressanta Utbildningar</h2>
        <p>
            Industriell ekonomi<br><br>Kemiteknik
        </p>
       
    </div>

</div>
<div class="field" style="height: 300px;">
    <div class="job">
        <h1> Tidigare ex-jobb</h1>
        <p>
            Kartläggning av pH och COD vid pappersbruk.<br><br><br>
        </p>
    </div>

    <div class="job">
        <h1> Tidigare ex-jobb</h1>
        <p>
        Energieffektivisering av industriell avloppsrening <br>
        - En studie om utbyte av mekaniska bottenluftare i
        aktivslamprocessen vid Kvarnsvedens pappersbruk
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