<form action="index.php" method="post">
    <fieldset>
        <legend>
            Il te reste X essais pour sauver ta peau
        </legend>
        <label for="triedLetter">Choisis ta lettre</label>
        <select name="triedLetter" id="triedLetter">
           <!-- répéter 26 fois -->
            <?php foreach ($lettersArray as $letter =>$status):?>
            <?php if ($status):?>
            <option value="<?= $letter ?>"><?= $letter ?></option>
            <?php endif;?>
            <?php endforeach;?>
        </select>
        <input type="hidden" name="lettersArray" value="<?= $serializedLetterArray ?>;">
        <input type="submit" value="Envoyez">
    </fieldset>
</form>