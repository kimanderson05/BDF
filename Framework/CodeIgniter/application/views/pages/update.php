<?php

if(count($data) == 1){
    $row = $data[0];
    echo <<< __END

<h2>Update information for ${row['firstName']} ${row['lastName']}</h2>

<form action="?updateAction=${row['userId']}" method="POST">
    <label for="email" class="label">Email:</label>
    <input type="email" value="${row['email']}" name="email" id="email" class="input" maxlength="50" size="20" required/><br/>
    <label for="password" class="label">Password:</label>
    <input type="password" name="password" id="password" class="input" maxlength="40" size="20" required/><br/>
    <input type="submit" class="logout" value="Submit"/>
</form>

<a href="index.php" class="back2">Back</a>

__END;
}
