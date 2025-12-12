<?php
require dirname(__DIR__).'/vendor/autoload.php';
try {
    $r = new ReflectionClass(\App\Entity\Project::class);
    echo "Project class found at: " . $r->getFileName();
} catch (ReflectionException $e) {
    echo "Project class NOT found: " . $e->getMessage();
}
