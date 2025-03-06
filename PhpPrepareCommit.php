<?php
$options = ["feat", "fix", "docs", "style", "refactor", "test", "chore", "perf", "ci", "build", "revert"];

echo "Sélectionnez le type de commit :\n";
foreach ($options as $index => $opt) {
    echo "$index : $opt\n";
}

do {
    $choix = readline("Choisir numéro: ");
    if (!isset($options[$choix])) {
        echo "Option invalide. Veuillez prendre une option valide.\n";
    }
} while (!isset($options[$choix]));

$type = $options[$choix];

$ticket = readline("Ticket (ex : BMP-48) : ");
$titre = readline("Titre du commit : ");

$descriptions = [];
while (true) {
    $description = readline("Description du commit / ou tapez 'fin' pour terminer : ");
    if (strtolower($description) === 'fin') {
        break;
    }
    $descriptions[] = $description;
}

$wip = readline("Le commit est-il en cours (wip) ? oui/non : ");
$wipOui = (strtolower($wip) === "oui");

$clear = readline("Voulez-vous clear la console ? oui/non : ");
if (strtolower($clear) === "oui") {
    system('clear');
}

echo "\n" . ($wipOui ? "wip" : $type) . ":([$ticket]) $titre\n";

foreach ($descriptions as $desc) {
    echo $desc . "\n";
}
?>
