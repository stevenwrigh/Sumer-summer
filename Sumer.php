<?php
$gods = array(
    "Anu" => "God of the sky and heavens",
    "Enki" => "God of water, wisdom, and creation",
    "Enlil" => "God of wind, earth, and storms",
    "Nanna" => "God of the moon",
    "Utu" => "God of the sun and justice",
    "Inanna" => "Goddess of love, beauty, and war",
    "Ninhursag" => "Goddess of fertility, childbirth, and motherhood",
    "Dumuzid" => "God of shepherds and agriculture",
    "Marduk" => "God of Babylon and patron deity of Babylonian kings"
);

echo "Sumerian Gods and their Attributes:\n";
foreach($gods as $god => $attribute) {
    echo "- $god: $attribute\n";
}
?>
