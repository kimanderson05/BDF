<?php

if(count($data) == 1){
$row = $data[0];
echo <<< __END

<h2>Update information for ${row['firstName']} ${row['lastName']}</h2>

<form action="?updateAction=${row['userId']}" method="POST">
    <label for="email">Email:</label>
    <input type="email" value="${row['email']}" name="email" required id="email" maxlength="50" size="20"/><br/>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required maxlength="40" size="20"/><br/>
    <input type="submit" class="logout" value="Submit"/>
</form>

<a href="index.php" class="user">Back</a>

__END;
}
