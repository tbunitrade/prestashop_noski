<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3epbz0h\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3epbz0h/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3epbz0h.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3epbz0h\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container3epbz0h\appDevDebugProjectContainer(array(
    'container.build_hash' => '3epbz0h',
    'container.build_id' => '45692031',
    'container.build_time' => 1535314863,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3epbz0h');
