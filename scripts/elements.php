<?php

function employeDataSheet($firstname,$lastname,$username,$job,$tel,$mail){
    $element = '
        <tr>
            <td>' . $firstname . '</td>
            <td>' . $lastname . '</td>
            <td>' . $username . '</td>
            <td>' . $job . '</td>
            <td>' . $tel . '</td>
            <td>' . $mail . '</td>
            <td> Edit </td>
            <td> Delete </td>
        </tr>';
    echo $element;


}

?>

