<?php

echo <<< __END
<h1>Registration Form</h1>

<form action="?addAction=true" method="POST">
    <label for="firstName" class="label">First Name:</label>
    <input type="text" name="firstName" id="firstName" class="input" maxlength="50" size="20"/><br/>
    <label for="lastName" class="label">Last Name:</label>
    <input type="lastName" name="lastName" id="lastName" class="input" maxlength="50" size="20"/><br/>
    <label for="email" class="label">Email:</label>
    <input type="email" name="email" id="email" class="input" maxlength="50" size="20" required/><br/>
    <label for="userName" class="label">User Name:</label>
    <input type="text" name="userName" id="userName" class="input" maxlength="50" size="20" required/><br/>
    <label for="password" class="label">Password:</label>
    <input type="password" name="password" id="password" class="input" maxlength="40" size="20" required/><br/>
    <input type="submit" class="logout" value="Submit"/>
</form>

<a href="index.php" class="user">Back</a>
__END;
