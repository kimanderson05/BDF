<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:02 PM
 */

foreach ($value as $row){
    echo <<< __END
<a href="index.php?userId=${row['userId']}">${row['firstName']} ${row['lastName']}</a><br/>
__END;

}