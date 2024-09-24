<?php
$entered_password = 'arvin'; // The password you used during registration
$new_hash = password_hash($entered_password, PASSWORD_DEFAULT);

echo "Newly generated hash: " . $new_hash . "<br>";
echo "Stored hash: " . $stored_hash . "<br>";

if (password_verify($entered_password, $stored_hash)) {
    echo "Password is correct!";
} else {
    echo "Invalid password!";
}
?>