<?php
$options = ["feat", "fix", "docs", "style", "refactor", "test", "chore", "perf", "ci", "build", "revert"];

echo "Sélectionnez le type de commit :\n";
foreach ($options as $index => $opt) {
    echo "$index : $opt\n";
}

$choix = readline("Choisir numéro: ");

if (isset($options[$choix])) {
    $type = $options[$choix];
} else {
    $type = "feat";
}

$ticket = readline("Ticket (ex : BMP-48) : ");
$titre = readline("Titre du commit : ");
$description = readline("Description du commit (ligne 1) : ");
$description1 = readline("Description du commit (ligne 2) : ");
$description2 = readline("Description du commit (ligne 3) : ");

$wip = readline("Le commit est-il en cours (wip) ? oui/non : ");
$wipOui = (strtolower($wip) === "oui");

system('clear');

if ($wipOui) {
    echo "\nwip:([$ticket]) $titre\n";
    echo $description . "\n";
    echo $description1 . "\n";
    echo $description2 . "\n";
} else {
    echo "\n$type:([$ticket]) $titre\n";
    echo $description . "\n";
    echo $description1 . "\n";
    echo $description2 . "\n";
}
?>
