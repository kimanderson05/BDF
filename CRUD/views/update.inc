<h1>Update your information</h1>

<?php

if(count($data) == 1){
$row = $data[0];
echo <<< __END

<form action="?" method="POST">
    <label for="firstName">First Name:</label>
    <input type="text" value="${row['firstName']}" name="firstName" id="firstName" maxlength="50" size="20"/><br/>
    <label for="lastName">Last Name:</label>
    <input type="lastName" value="${row['lastName']}" name="lastName" id="lastName" maxlength="50" size="20"/><br/>
    <label for="email">Email:</label>
    <input type="email" value="${row['email']}" name="lastName" id="lastName" maxlength="50" size="20"/><br/>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" maxlength="40" size="20"/><br/>
    <input type="submit" class="logout" value="Submit"/>
</form>

<a href="index.php" class="user">Back</a>

__END;
}
