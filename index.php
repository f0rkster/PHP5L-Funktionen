<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen und Schleifen</title>
</head>
<body>
<?php
    //Globale/Lokale Variablen

    $var1 = 'Hier ist der globale Bereich';

    function printVar () {
        $var1 = 'Hier ist der Lokale Bereich';
        echo $var1;
    }

    echo '<h4>printVar</h4>';
    echo $var1 . '<br>';
    printVar();

    echo '<hr>';

    function testGlobal()
    {
        global $var1, $var2; // Verweis auf die globalen Variablen
        $var2 = 'Diese Variable wurde in einer Funktion globalisiert';
    }

    echo '<h4>testGlobal</h4>';

    testGlobal(); // durch das Ausführen der Funktion wird $var2 global definiert
    echo $var2;

    echo '<hr>';

    function testGlobal_2()
    {
        $var1 = 'Hier ist der Lokale Bereich';
        echo $var1 . '<br>';
        echo $GLOBALS['var1'];
    }

    echo '<h4>testGlobal</h4>';
    testGlobal_2();
    echo '<hr>';

    // Statische Variablen

    function testStatic()
    {
        $a = 0;
        echo $a.'<br>';
        $a++;
    }

    function testStatic_2()
    {
        static $a = 0; // bei jedem Aufruf wird dieselbe Variable verwendet
        echo $a.'<br>';
        $a++;
    }

    echo '<h4>ohne statische Variable</h4>';
    testStatic();
    testStatic();
    testStatic();
    testStatic();
    echo '<h4>mit statischer Variable</h4>';
    testStatic_2();
    testStatic_2();
    testStatic_2();
    testStatic_2();
    echo '<hr>';

    // Eigene Funktion mit Parmetern
    function printTable($content, $rows = 3, $cols = 3, $borderIsVisible = true)
    {
        $border = $borderIsVisible ? 'border="1"' : '';
        $html = '<table '.$border.'>';
        for($row = 0; $row < $rows; ++$row)
        {
            $html .= '<tr>';
            for($col = 0; $col < $cols ; ++$col)
            {
                $html .= '<td>';
                $html .= isset($content[$row][$col]) ? $content[$row][$col] : '---';
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        echo $html;
    }
    $myArray = array(
            array('Name','Alter','Ort'),
            array('Matthias', '26', 'Erfurt'),
            array('Julian', 21, 'Weimar'),
            array('Julia', 26, 'Berlin')
        );
    echo '<h4>Eigene Funktion printTable</h4>';
    printTable($myArray,4,3);
?>
</body>
</html>