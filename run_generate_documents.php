<?php
// Set environment variables required by the Python script
putenv("PATH=C:\\Users\\Rettis\\AppData\\Local\\Microsoft\\WindowsApps:" . getenv("PATH")); // Adjust the path to include the directory containing the Python interpreter

// Define the path to the Python script
$pythonScriptPath = "./python/generate.py";

// Execute the Python script
$output = exec("python $pythonScriptPath");

// Output the result


echo $output;



?>






