<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:03 PM
 */

echo <<< __END

<h2>${row['firstName']} ${row['lastName']}</h2>
<ul>
    <li>Username: ${row['userName']}</li>
    <li>Password: ******</li>
</ul>

__END;
