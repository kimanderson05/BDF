<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:03 PM
 */

echo <<< __END

<h2>${row['firstName']} ${row['lastName']}</h2>
<ul class="ul_info">
    <li class="li_info">Username: ${row['userName']}</li>
    <li class="li_info">Password: ${row['password']}</li>
</ul>

__END;
