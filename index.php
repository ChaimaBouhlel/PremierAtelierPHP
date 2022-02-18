<?php $name='Roua' ;
        $t = count_chars($name,1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Worlddxxbgx!</h1>

   
    <table border="1">
        <tr>
            <th>Caractere</th>
            <th>NB Occ</th>
        </tr>
        <?php
        foreach($t as $key=>$val){
         
        ?>
        <tr>
            <td>
                <?=chr($key)?>
            </td>
            <td>
                <?= $val ?>
            </td>
        </tr>
<?php }?>
    </table>
   
</body>
</html>