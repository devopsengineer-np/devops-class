<?php
// A simple PHP script to display a welcome message and server info
echo "<h1>Welcome to the LEMP Stack!</h1>";
echo "<p>Your Nginx server with PHP 8.1 is running successfully.</p>";
echo "<h2>Server Information:</h2>";
echo "<ul>";
echo "<li><strong>PHP Version:</strong> " . phpversion() . "</li>";
echo "<li><strong>Server Software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</li>";
echo "<li><strong>Document Root:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</li>";
echo "<li><strong>Client IP:</strong> " . $_SERVER['REMOTE_ADDR'] . "</li>";
echo "<li><strong>
