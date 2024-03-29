<!doctype html>
<html lang="de" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" media="screen and (min-width: 1276px)" href="../css/index.css">
    <link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1275px)" href="../css/indexmedium.css">
    <link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/indexsmall.css">
    <link rel="icon" type="image/svg" href="../favicon.svg">
</head>

<body>
    <header>
        <?php include "templates/header.php" ?>
    </header>
    <nav>
        <?php include "templates/nav.php" ?>
    </nav>

    <section>
        <h2>Kontakt</h2>
        <div class="flex-container-feedback">
            <form method="post" action="form.php" autocomplete="off">
                <label for="name" class="form-label">Name: *</label>
                <input type="text" name="name" id="name" class="form-input">

                <label for="datum" class="form-label">Besucht am: *</label>
                <input type="date" name="datum" id="datum" class="form-input">

                <label for="art" class="form-label">Art: *</label>
                <select name="art" id="art" class="form-input">
                    <option value="Feedback">Kontaktanfrage</option>
                    <option value="Sonstiges">Sonstiges</option>
                </select>

                <label for="nachricht" class="form-label">Text: *</label>
                <textarea name="eintrag" id="nachricht" class="form-textarea" cols="30" rows="10"></textarea>

                <button type="submit" class="form-button">Absenden</button>
            </form>


            <div class="form-note">*Pflichtfelder</div>
        </div>



        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $schon_drin = "";
            $daten = "nix";
            $name = htmlspecialchars($_POST['name']);
            $datum = htmlspecialchars($_POST['datum']);
            $eintrag = htmlspecialchars($_POST['eintrag']);
            $art = htmlspecialchars($_POST["art"]);
            $user_info = array($name, $datum, $eintrag, $art);
            if (!empty($name) and !empty($datum) and !empty($eintrag) and !empty($art)) {
                $daten = implode(";", $user_info) . "\r\n";
                $zitate = file("../assets/data/kontactdata");
                for ($i = 0; $i < count($zitate); $i++) {
                    if ($daten != $zitate[$i]) {
                        $schon_drin = false;
                    } else {
                        $schon_drin = true;
                    }
                }
                if (!$schon_drin) {
                    file_put_contents("../assets/data/kontactdata", $daten, FILE_APPEND);
                } else {
                    echo "Bitte alle Felder ausfüllen" . "<br><br>";
                }
            }
        }
        ?>

        <div class="flex-container-feedback">

            <details>
                <summary><Strong>Einträge</Strong></summary>
                <p><?php
                    $zitate = file("../assets/data/kontactdata");
                    for ($i = 0; $i < count($zitate); $i++) {
                        echo $i + 1 . ": " . $zitate[$i] . "<br><br>";
                    }


                    ?></p>
            </details>


        </div>
    </section>
    <a href="../index.php">Startseite</a>

    <footer>
        <?php include "templates/footer.php" ?>
    </footer>

</body>

</html>