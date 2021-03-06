<?php
// git@github.com:imie-source/DL17Regex.git
// https://github.com/imie-source/DL17Regex.git

$examples = [
    [
        "regex" => "/DL/",
        "goods" => ['Salut les DLs!', 'DLOUDLOU', 'LDLDLDLDL'],
        "bads" => ['Salut les CDI!', 'LD'],
        "statement" => 'Exemple'
    ],
    [
        "regex" => "/^DL/",
        "goods" => ['DL, c\'est la vie.', 'DLOUDLOU'],
        "bads" => ['Salut les DL', "LDLDLDLDL"],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/DL$/",
        "goods" => ['Salut les DL', 'DL', "LDLDLDLDL", ],
        "bads" => ['DL, c\'est la vie.', 'DLOUDLOU'],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/^DL$/",
        "goods" => ['DL'],
        "bads" => ['DL, c\'est la vie.', 'DLOUDLOU', 'DLDLDL'],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/t.t./",
        "goods" => ['tata', 'titi', 'tttt', 'taratata', 't8t9', 't@t#', 't t t t t'],
        "bads" => ['toutou', 'tartine', 'tot', 'to'],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/^t[aeiou]t[aeiou]$/",
        "goods" => ['tata', 'tati', 'toto', 'totu', 'tito'],
        "bads" => ['toutou', 'tyty', 'tut', 'tsts', 'tttt', 'totototo'],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/^t[a-tA-C1-5]t[A-Z]$/",
        "goods" => ['tAtA', 't1tZ', 'tatZ'],
        "bads" => ['tata', 'tutA', 'tEtA', 'tat1'],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/^[abc].[def]$/",
        "goods" => ['bad', 'bof', 'bid', 'cif'],
        "bads" => ['daf'],
        "statement" => "Exemple"
    ],
    [
        "regex" => "/^(oui|non)$/",
        "goods" => ['oui', 'non'],
        "bads" => ['ouais', 'bod', 'nop', 'nan'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^ch(ien|at)$/",
        "goods" => ['chien', 'chat'],
        "bads" => ['cheval', 'chameau'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^(t[aeiou]){2}$/",
        "goods" => ['tata', 'tito', 'tati'],
        "bads" => ['toutou'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^.{4,6}$/",
        "goods" => ['tata', 'tito', 'tati', '      '],
        "bads" => ['top', '1234567'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^0{1,9}[A-Z]{3}$/",
        "goods" => ['000AZE', '0TRE'],
        "bads" => ['TRE', '000aze'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^1[2-8]?9$/",
        "goods" => ['19', '129', '139', '149'],
        "bads" => ['119'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^bo*m$/",
        "goods" => ['boooooooooooooooooom', 'booom', 'booooooom'],
        "bads" => ['bim'],
        "statement" => "Exemple",
    ],
    [
        "regex" => "/^ta+$/",
        "goods" => ['taaaaaaaaaaaa', 'ta', 'taaaaa'],
        "bads" => ['bim'],
        "statement" => "Exemple",
    ]
];

$exercises = [
    [
        "regex" => "/^\.od[tps]$/",
        "goods" => ['.odt', '.ods', '.odp'],
        "bads" => ['odt', '.odf', 'test.odt', ',odt', '.exe', 'oodt'],
        "statement" => "Vérifier qu'une extension est une extension LibreOffice (.odt, .odp, .ods).",
    ],
    [
        "regex" => "/^.{1,9}$/",
        "goods" => ['.odt', '@', '123456789', 'héhéhé'],
        "bads" => ['skfhskdjfhkjsdhfjkh', ''],
        "statement" => "Une chaîne non vide de moins de 10 caractères.",
    ],
    [
        "regex" => "/^\d{4,8}$/",
        "goods" => ['0000', '1234', '12345678'],
        "bads" => ['abcdef', '000', '123456789'],
        "statement" => "Un code PIN de téléphone portable (entre 4 et 8 chiffres).",
    ],
    [
        "regex" => "/^J(im|oe)$/",
        "goods" => ['Jim', 'Joe'],
        "bads" => ['Jimmy', 'Joey', 'JOE'],
        "statement" => "Jim ou Joe.",
    ],
    [
        "regex" => "/^[A-ZÉ][a-zàëïüöéèç]+(-[A-Z][a-zàëïüöéèç]+)*$/u",
        "goods" => ['Élise','Jean', 'Jean-François', 'Gülistan', 'Xi', 'Tétiana', 'Laëticia', 'Jean-François-Richard'],
        "bads" => ['Jean-', 'jean', 'JEAN', 'X', 'JeaN', 'Jean François'],
        "statement" => "Un prénom.",
    ],
    [
        "regex" => "/^[aeiouyAEIOUY]([a-z]*[aeiouy])?$/",
        "goods" => ['Y', 'y', 'arbre', 'ertyi'],
        "bads" => ['toto', 'test'],
        "statement" => "Un mot qui commence et fini par une voyelle.",
    ],
    [
        "regex" => "/^([01][0-9]|2[0-3]):[0-5][0-9]$/",
        "goods" => ['00:00', '15:15', '13:37', '01:12'],
        "bads" => ['24:00', '21:60', '02:00am', '12:', '1:12'],
        "statement" => "Une heure au format 24h (Ex: 19:30).",
    ],
    [
        "regex" => "/^(0[1-9]|1[0-2]):[0-5][0-9][ap]m$/",
        "goods" => ['01:00am', '12:30pm', '02:00am'],
        "bads" => ['24:00', '15:15pm', '13:37', '21:60', '12:', '1:12'],
        "statement" => "Une heure au format anglais (12:30am).",
    ],
    [
        "regex" => "/^[12]\d\d(0[1-9]|1[0-2])([1-9]\d|0[1-9])\d{6}([1-8]\d|0[1-9]|9[0-7])$/",
        "goods" => ['200010100000097'],
        "bads" => ['300010100000001', '100000100000001', '100130100000001', '100010000000001', '100010100000000', '100010100000098', '100010100000099'],
        "statement" => "Un numéro de sécurité sociale.",
    ],
    [
        //"regex" => "/^[A-HJ-NP-TV-Z]{2}-(\d\d[1-9]|\d[1-9]0|[1-9]00)-[A-HJ-NP-TV-Z]{2}$/",        
        "regex" => "/^[A-HJ-NP-TV-Z]{2}-([1-9]\d\d|0[1-9]\d|00[1-9])-[A-HJ-NP-TV-Z]{2}$/",
        "goods" => ['AA-001-AA'],
        "bads" => ['AI-001-AI', 'AU-001-AA', 'AA-000-AA', 'aa-000-aa'],
        "statement" => "Une plaque d'imatriculation.",
    ],
    [
        "regex" => "/^[1-9]\d*$/",
        "goods" => ['1', '10', '314'],
        "bads" => ['0', '01', '001'],
        "statement" => "Un entier naturel supérieur à 0.",
    ],
    [
        "regex" => "/^([1-9]\d*|0)$/",
        "goods" => ['1', '10', '314', '0'],
        "bads" => ['01', '001', '00'],
        "statement" => "Un entier naturel supérieur ou égal à 0.",
    ],
    [
        "regex" => "/^([+-]?(([1-9]\d*|0)[,.]\d?\d?[1-9]|[1-9]\d*)|0)$/",
        "goods" => ['10', '-0.3', '+110'],
        "bads" => ['010', '123.20'],
        "statement" => "Un nombre potentiellement signé et pouvant avoir 1 à 3 chiffres après la virgule à condition que le dernier chiffre ne soit pas un zéro.",
    ]
];

function printExercises($exercises){
    foreach($exercises as $id => $exercise){
        printExercise($exercise["regex"], $exercise["goods"], $exercise["bads"], $exercise["statement"], $id + 1);
    }
}

function printExercise($regex, $goods, $bads, $statement, $nb = 0){
    echo "<h2 class=\"number\">$nb</h2>";
    echo "<p>$statement</p>";
    echo "<p class=\"alert alert-info\">REGEX : $regex</p>";
    echo "<p>Taille : " . strlen($regex) . " caractères</p>";
    printResult($regex, $goods);
    printResult($regex, $bads, false);
    echo "<hr/>";
}

function printResult($regex, $subjects, $flag = 1){
    echo "<div class=\"card\">";
    echo "<h4>" . ($flag ? "Bons" : "Mauvais") . " cas :</h4>";
    echo "<table class=\"table\">";
    echo "<tr>";
    echo "<th>Sujet</th>";
    echo "<th>Résultat</th>";
    echo "</tr>";
    foreach($subjects as $subject){
        $result = preg_match($regex, $subject);
        echo "<tr>";
        echo "<td>$subject</td>";
        echo "<td class=\"alert " . ($result ? "alert-success" : "alert-danger") . "\">";
        echo $result ? "OK" : "KO";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>REGEX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    .card {
        background: #fff;
        border-radius: 2px;
        margin: 1rem;
        padding: 1em;
    }
    body{
        background-color: #f9f9f9;
    }
    .number{
        font-size: 1.8em;
        border: 1px solid grey;
        display: inline-block;
        width: 1.2em;
        height: 1.2em;
        text-align: center;
        border-radius: 1.2em;
        background-color: white;
    }
    .number, .card{
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    }
    </style>
</head>
<body>
    <main class="container">
        <h2>Exemples :</h2>
        <?php printExercises($examples) ?>
        <h2>Exercices :</h2>
        <?php printExercises($exercises) ?>
    </main>
</h1>
</body>
</html>