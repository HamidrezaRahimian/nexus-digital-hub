<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalisierung</title>
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

        <h2>Zahlensysteme</h2>



        <table>
            <caption>Binäre Umrechnung</caption>
            <thead>
                <tr>
                    <th>Dezimalwert</th>
                    <th colspan="8">Exponent zur Basis 2</th>
                    <th>Binärzahl</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>7</td>
                    <td>6</td>
                    <td>5</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>1</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>128</td>
                    <td>64</td>
                    <td>32</td>
                    <td>16</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2</td>
                    <td>1</td>
                    <td></td>
                </tr>
                <tr>
                    <th>222<sub>10</sub></th>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>11011110<sub>2</sub></td>
                </tr>
                <tr>
                    <th>111<sub>10</sub></th>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>01101111<sub>2</sub></td>
                </tr>
                <tr>
                    <th>55<sub>10</sub></th>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>00110111<sub>2</sub></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>

                    <td>128</td>

                    <td>64</td>

                    <td>32</td>

                    <td>16</td>

                    <td>8</td>

                    <td>4</td>

                    <td>2</td>

                    <td>1</td>

                    <td></td>
                </tr>

            </tfoot>

        </table>


        <h3>Umrechnung von Dezimal zu Binär</h3>
        <p class="textoflist">Die Umrechnung von Dezimal zu Binär ist ein grundlegender Schritt in der Informatik und Programmierung.
            Dabei wird eine Dezimalzahl, die im Zehnersystem geschrieben ist, in ihre binäre Darstellung umgewandelt,
            die aus Nullen und Einsen besteht. Der Prozess beinhaltet das wiederholte Teilen der Dezimalzahl durch
            2 und das Festhalten der Reste in umgekehrter Reihenfolge. Dieser Vorgang setzt sich fort, bis die
            Dezimalzahl auf null reduziert ist. Das Ergebnis ist die Binärdarstellung der ursprünglichen Dezimalzahl. Diese Umrechnung ist besonders wichtig in der digitalen Welt, in der Computer und elektronische Systeme mit Binärzahlen arbeiten. Es ist eine grundlegende Fertigkeit, die für das Verständnis von Datenverarbeitung und Codierung von wesentlicher Bedeutung ist.
        </p>
        <div class="umrechner">
            <iframe src="https://bin-dez-hex-umrechner.de/" height="530" width="600" allowfullscreen></iframe>
        </div>
        <h3>
            Erläuterung
        </h3>

        <dl>
            <dt>XXX<span style="color: #c0392b"><sub>10</sub></span></dt>
            <dd>Die Zahl wird in 10er Zahlensystem angegeben</dd>
            <dt>XXX<span style="color: #c0392b"><sub>2</sub></span></dt>
            <dd>Die Zahl wird im <abbr title="Binär">2er Zahlensytem</abbr> angegeben</dd>
        </dl>
        <div class="video-div">
            <video controls>
                <source src="../assets/videos/binarsystem.mp4">
            </video>
        </div>
        <br>

        <a href="../index.php">Startseite</a>

    </section>



    <footer>
        <?php include "templates/footer.php" ?>
    </footer>

</body>

</html>