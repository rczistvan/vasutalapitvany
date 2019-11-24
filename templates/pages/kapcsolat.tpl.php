
<form action = "?oldal=uzen" method="post">
    <fieldset>
        <legend>E-mail küldése</legend>
        <br>
        <label>Név: </label>&nbsp;<input type="text" id="nev" name="nev" accept="image/png, image/jpeg" placeholder="Név" required><br><br>
        <label>Üzenet: (maximum 2000 karakter)</label><br>
        <textarea rows="10" cols="100" maxlength="2000" id="uzenet" name="uzenet" placeholder="Üzenet..." required></textarea>
        <br>
        <input type="submit" name="kuldes" id="kuldes" value="Küldés" formtarget="_blank">
        <input type="button" onclick="window.open('index.php?oldal=uzenetek')" value="Üzenetek" formtarget="_blank">
        <br>
    </fieldset>
</form>
