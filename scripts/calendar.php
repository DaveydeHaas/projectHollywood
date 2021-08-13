<?php
//Allereerst gaan we alle maanden defineren
$maanden     = array(1 => 'Januari', 2 => 'Februari', 3 => 'Maart', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Augustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'December');

//De dagen in een week
$weekdagen    = array('maandag','dinsdag','woensdag','donderdag','vrijdag','zaterdag','zondag');

//En de jaren die we willen toestaan, in dit geval van 2020, 2027.
$jaren         = range(2020,2027);

//Wat als er een maand in de url staat?
if(isset($_GET['maand']))
{
    //Eerst kijken we of die maand wel bestaat
    if(array_key_exists($_GET['maand'], $maanden))
    {
        $maand = $_GET['maand'];
    }else{
        $maand = date('n');
    }    
}else{
    $maand = date('n');
}

//Wat als er een jaar in de url staat?
if(isset($_GET['jaar']))
{
    //Eerst kijken we of we dat jaar wel goedkeuren
    if(in_array($_GET['jaar'],$jaren))
    {
        $jaar = htmlentities($_GET['jaar']);
    }else{
        $jaar = date('Y');
    }    
}else{
    $jaar = date('Y');
}

//Omdat we nu het jaar en de maand weten kunnen we vaststellen welke dagen zijn toegestaan
$dagen = range(1,date('t', mktime(0,0,0,$maand,1,$jaar)));

//Wat als er een dag in de url staat?
if(isset($_GET['dag']))
{
    //Bestaat deze dag wel?
    if(in_array($_GET['dag'], $dagen))
    {
        $dag = htmlentities($_GET['dag']);
    }else{
        $dag = 1;
    }    
}else{
    //Wat als er geen dag is geselecteerd? Dan kijken we of het vandaag dezelfde maand is als wat er is opgevraagd en selecteren we vandaag!
    if($maand == date('n'))
    {
        $dag = date('j');
    }else{
        $dag = 1;
    }
}

//Tijd voor een formuliertje!
//echo '<form action="./index.php?content=reserve" method="GET">';

//We maken een selectbox met daarin een foreach met alle maanden
echo '<select name="maand" onchange="this.form.submit()">';
foreach($maanden as $maandnummer => $maandnaam)
{
    if($maandnummer == $maand)
    {
        echo '<option  selected value="'.$maandnummer.'">'.$maandnaam.'</option>';
    }else{
        echo '<option  value="'.$maandnummer.'">'.$maandnaam.'</option>';
    }
}
echo '</select> ';

//Vervolgens maken we een selectbox voor alle jaren
echo '<select name="jaar" onchange="this.form.submit()">';
foreach($jaren as $jaarnummer)
{
    if($jaarnummer == $jaar)
    {
        echo '<option selected value="'.$jaarnummer.'">'.$jaarnummer.'</option>';
    }else{
        echo '<option value="'.$jaarnummer.'">'.$jaarnummer.'</option>';
    }
}
echo '</select></form><hr>';

//Nu word het tijd om een mooi tabelletje te maken
echo '<table class="table">';

//We echoén alvast de bovenste rij
echo '<tr><th>M</th><th>D</th><th>W</th><th>D</th><th>V</th><th>Z</th><th>Z</th></tr><tr>';

//Wat is de eerste dag van de maand?
$eerstedag = date('w', mktime(0,0,0,$maand,1,$jaar));

//Deze hebben we nodig om wat lege ruimte te vullen als de week niet begint op maandag.
for($nummer = 1; $nummer <= 6; $nummer += 1)
{
    if($nummer != $eerstedag)
    {
        echo '<td></td>';
    }else{
        $nummer = 7;
    }
}
    
//Voor iedere dag in de week gaan we nu een loopje beginnen!
foreach($dagen as $dag2)
{
    //Welke weegdag is het?
    $dagindeweek = date('w', mktime(0,0,0,$maand,$dag2,$jaar));
            
    //Als het 1 is (maandag) begint er een nieuwe rij!
    if($dagindeweek == 1)
    {
        echo '<tr class="table">';
    }
    
    //Stel dat het toevallig dezelfde datum als vandaag is? Dan willen we een rood randje!
    if(($dag2 == date('j')) && ($maand == date('n')) && ($jaar == date('Y')))
    {
        echo '<td style="border: 3px solid white;">';
    }else{
        echo '<td>';
    }    

    //Stel dat het toevallig dezelfde dag is als de dag die we geselecteerd hebbeb? Dan willen we bold!
    if($dag2 == $dag)
    {
        echo '<a href="index.php?content=reserve&dag='.$dag2.'&amp;maand='.$maand.'&amp;jaar='.$jaar.'#calendar"><b>'.$dag2.'</b></a></td>';
    }else{
        echo '<a href="index.php?content=reserve&dag='.$dag2.'&amp;maand='.$maand.'&amp;jaar='.$jaar.'#calendar">'.$dag2.'</a></td>';
    }
    
    //Als het dag 0 is (zondag) willen we de rij eindigen!
    if($dagindeweek == 0)
    {
        echo '</tr>';
    }    
}

//Sluiten die handel! Huppakee!
echo '</table>';
echo '<div class="month-switch">';
//Uiteraard willen we een vorige maand...
if($maand == 1)
{
    echo '<a href="index.php?content=reserve&amp;jaar='.($jaar-1).'#calendar"><< Vorige</a>';
}else{
    echo '<a href="index.php?content=reserve&maand='.($maand-1).'&amp;jaar='.$jaar.'#calendar"><< Vorige</a>';
}

//... en volgende maand knopje! Als het Januari of December is doen er uiteraard 1 jaar eraf of erbij.
if($maand == 12)
{
    echo '  | <a href="index.php?content=reserve&maand=1&amp;jaar='.($jaar+1).'#calendar">Volgende >></a>';
}else{
    echo '  | <a href="index.php?content=reserve&maand='.($maand+1).'&amp;jaar='.$jaar.'#calendar">Volgende >></a>';
}
echo '</div>';
