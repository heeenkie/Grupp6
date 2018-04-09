<?php
	include_once 'header.php';
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/1.css">
<div class="img_container">
    <div class="img">
        <img src="image/Company/kebab.jpg" alt="Kebab" width="100%" height="100%">
    </div>
</div>
<div class="name">
    Adrians Kebab
</div>

 <div class="field">

    <button id="apply" onclick="document.getElementById('pitch_view').style.display='block'">Pitcha här</button>

    <div id="tf">
        <h1>
            Om företaget
        </h1>
        <p>
        Välkommen till restaurangen som älskar kebab. <br><br>

        Adrians kebab har fyra restauranger i Sundsvallsområdet – alla i familjen Emins regi. Vi vet att det inte finns några genvägar när det gäller god mat. Därför använder vi bara de bästa, färska råvarorna. Men mat är en helhetsupplevelse och en fräsch restaurang är därför ett måste, liksom att vi serverar maten med ett leende.<br>

        Hos oss hittar du alltid något som passar alla, ung som gammal. Självklart kan du få allt på menyn till avhämtning. Adrians kebab ska vara det första valet när det gäller pizza, kebab, sallad och take away.<br>
        
        Idag driver vi även laboratorium där vi forskar inom kebab och restaurangmarknadsföring och har därför exjobbs platser för ingenjörer.
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
            Vulkanen. Vårat största framtagande i labbet är vårat flaggskepp "vulkanen" som en exjobbare tog fram 2015.
        </p>
    </div>

    <div class="job">
        <h1> Tidigare ex-jobb</h1>
        <p>
            Hos oss har det genom åren varit populärt att effektivisera organisation i allt från brödbakningen till marknadsföringen.
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