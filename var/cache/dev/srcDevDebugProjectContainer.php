<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEroisku\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEroisku/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEroisku.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEroisku\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerEroisku\srcDevDebugProjectContainer([
    'container.build_hash' => 'Eroisku',
    'container.build_id' => '40d5f862',
    'container.build_time' => 1586607659,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEroisku');
