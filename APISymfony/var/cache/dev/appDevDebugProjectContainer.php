<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9tydpbd\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9tydpbd/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9tydpbd.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9tydpbd\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container9tydpbd\appDevDebugProjectContainer([
    'container.build_hash' => '9tydpbd',
    'container.build_id' => 'f6baf38f',
    'container.build_time' => 1580228752,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9tydpbd');
