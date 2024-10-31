<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni
$months = array("Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec");

echo "Všechny měsíce: <br />";
echo '<br />';
foreach ($months as $month) {
    echo $month . '<br />';
}

echo '<br />';
echo "Měsíce 6-12: <br />";
echo '<br />';
foreach ($months as $key => $month) {
    if ($key >= 6 && $key <= 12) {
        echo $month . '<br />';
    }
}
?>
