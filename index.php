<?php

$name = "John";
$isDev = true;
$age = 21;

const apellido = "Angel";

is_string($name);
is_bool($isDev);
is_int($age);

$outputAge = match (true) {
    $age <= 2 => "Eres un bebe, $name 👶🏼.",
    $age <=10 => "Eres un nino, $name 👦🏼.",
    $age <= 18 => "Eres un adolecente, $name 🧑🏼‍🦱.",
    default => "Eres un adulto, $name 👨🏼‍🦰.",
};

$bestLanguajes = ["PHP", "JavaScript", "Python"];
$bestLanguajes[] = "Java";
$bestLanguajes[] = "TypeScript";
$bestLanguajes[] = "Ruby";

$outputLanguajes = "Tu lenguaje favorito es $bestLanguajes[4]";

$person = [
    "name" => "Angel",
    "age" => 211,
    "isDev" => false,
    "languajes" => ["PHP", "JavaScript", "Python"]
];

$person["nane"] = "pheralb";
$person["languajes"][] = "Java";

?>

    <h1><?= $outputAge ?></h1>
    <h2><?= $outputLanguajes?></h2>
    <ul>
        <?php foreach($bestLanguajes as $key => $languaje) : ?>
        <li><?= $key . " => " . $languaje ?></li>
        <?php endforeach; ?>
    </ul>


<style>

:root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center;
}

</style>