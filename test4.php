<!doctype html>
<?php
$number = (isset($_POST["number"]) && is_string($_POST["number"])) ? $_POST["number"] : "-1";
$number = intval($number);
$number++;
?>
    <html>

    <body>

        <form method="post">
            <p>
                <input type="hidden" name="number" value="<?php echo $number; ?>">
                <input type="submit" value="Klick mich">
            </p>
        </form>

        <p>Anzahl an Klicks:
          <?php echo $number; ?> 
        </p>

    </body>

    </html>
