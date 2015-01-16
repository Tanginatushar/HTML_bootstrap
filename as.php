<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<h2></h2>
<table border="1" style="width:70%">
    <tr>
        <td>Title</td>
        <td>Genre</td>
        <td>Stars</td>
    </tr>
    <?php

    $films=array(
        array('title'=>'funny movie',
            'genre'=>'comedy',
            'stars'=>array('leading actress','leading actor','expandable dude')

        ),
        array('title'=>'Mirror',
            'genre'=>'Horror',
            'stars'=>array('actress','actor','expandable dude')

        )


    );
    foreach($films as $row){
        ?>
        <tr>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['genre']?></td>
            <td><?php
                $stars=array('leading actress','leading actor','expandable dude');
                foreach($stars as $wish){
                ?>
                    <ul>
                    <li><?php echo $wish?></li>
                    </ul>
                <?php }?>


            </td>

        </tr>

    <?php } ?>
</table>

</body>
</html>