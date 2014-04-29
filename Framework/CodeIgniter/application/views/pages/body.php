<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:02 PM
 */
echo <<< __END

<p>Choose a trainer to view details.</p>

__END;

foreach ($query as $row){
echo "<a href="
    . site_url("details/${row['userId']}")
    . ">${row['firstName']} ${row['lastName']}</a><br/>";
}

?>

