

<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/10/14
 * Time: 9:03 PM
 */

if(count($data) == 1){
    $row = $data[0];
    echo <<< __END

<h2>${row['firstName']} ${row['lastName']}</h2>
<ul class="ul_info">
    <li class="li_info">Username: ${row['userName']}</li>
    <li class="li_info">Email: ${row['email']}</li>
</ul>

<a href="index.php?updateUser=${row['userId']}" class="user">Update</a>
<a href="index.php?deleteUser=${row['userId']}" class="user">Delete</a>

__END;
}

