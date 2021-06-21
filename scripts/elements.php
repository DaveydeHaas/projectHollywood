<?php

function employeDataSheet1($firstname,$lastname,$username,$job,$tel,$mail, $id){
    $element = '
        <tr class="employee">
            <td>' . $firstname . '</td>
            <td>' . $lastname . '</td>
            <td>' . $username . '</td>
            <td>' . $job . '</td>
            <td>' . $tel . '</td>
            <td>' . $mail . '</td>
            <td> <a name="update" href="./index.php?content=editEmployeAdmin&id='. $id .'"><i class="far fa-edit" style="font-size: 27px;"></i></a> </td>
            <td> <a name="delete" href="./index.php?content=deleteEmploye&id='. $id .'"><i class="far fa-trash-alt" style="font-size: 27px ;"></i></a> </td>
        </tr>
        ';
        
    echo $element;


}

function employeDataSheet2($firstname,$lastname,$username,$job,$tel,$mail, $id){
    $element = '
        <tr class="employee">
            <td>' . $firstname . '</td>
            <td>' . $lastname . '</td>
            <td>' . $username . '</td>
            <td>' . $job . '</td>
            <td>' . $tel . '</td>
            <td>' . $mail . '</td>
            <td> <a name="update" href="./index.php?content=editEmployeManager&id='. $id .'"><i class="far fa-edit" style="font-size: 27px;"></i></a> </td>
            <td> <a name="delete" href="./index.php?content=deleteEmploye&id='. $id .'"><i class="far fa-trash-alt" style="font-size: 27px ;"></i></a> </td>
        </tr>
        ';
        
    echo $element;


}

?>

