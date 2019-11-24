
<script>
    if (window.File && window.FileReader && window.FileList) {
    } else {
        alert('Ez a böngésző nem támogatja a fájlfeltöltést!');
    }
    var images = ['kep1.jpg'<?php
        if ($handle = opendir('./gallery')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && $entry != "kep1.jpg") {
                    echo ", '$entry'";
                }
            }
            closedir($handle);
        }
        ?>];
    let id = 0;
    function next(){
        let element = document.getElementById("gallery");
        id++;
        if (id >= images.length){
            id = 0;
        }
        element.src = "gallery/" + images[id];
    }
    function prev(){
        let element = document.getElementById("gallery");
        id--;
        if (id < 0){
            id = images.length - 1;
        }
        element.src = "gallery/" + images[id];
    }
</script>

<a href="javascript:prev()">Előző</a>&nbsp;<a href="javascript:next()">Következő</a><br><br>
<img id="gallery" width="600px" src="gallery/kep1.jpg" /><br><br><br>


<form action = "?oldal=feltolt" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Feltöltés</legend>
        <br>
        <input type="file" id="fajl" name="fajl" accept="image/png, image/jpeg" required><br><br>
        <input type="submit" name="feltoltes" value="Feltöltés">
        <br>&nbsp;
    </fieldset>
</form>
