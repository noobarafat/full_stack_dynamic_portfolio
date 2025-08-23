<?php

// Simple script to clear Laravel cache
echo "Clearing Laravel cache...\n";

// Change to the Laravel directory
chdir(__DIR__);

// Clear configuration cache
echo "Clearing config cache...\n";
exec('php artisan config:clear', $output1, $return1);
print_r($output1);

// Clear application cache
echo "Clearing application cache...\n";
exec('php artisan cache:clear', $output2, $return2);
print_r($output2);

// Clear route cache
echo "Clearing route cache...\n";
exec('php artisan route:clear', $output3, $return3);
print_r($output3);

echo "Cache clearing complete!\n";
