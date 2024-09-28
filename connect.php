<?php
$secret = "YOUR_GITHUB_SECRET";
$signature = "sha1=" . hash_hmac('sha1', file_get_contents('php://input'), $secret);

if (hash_equals($signature, $_SERVER['HTTP_X_HUB_SIGNATURE'])) {
    // Change to the project directory
    chdir('/path/to/your/project');
    
    // Pull the latest changes from the repository
    shell_exec('git pull');
} else {
    header('HTTP/1.1 403 Forbidden');
    echo 'Invalid Signature';
}
?>
