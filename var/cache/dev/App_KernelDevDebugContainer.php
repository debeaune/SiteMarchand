<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBN8tQAB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBN8tQAB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBN8tQAB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBN8tQAB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBN8tQAB\App_KernelDevDebugContainer([
    'container.build_hash' => 'BN8tQAB',
    'container.build_id' => '518bb154',
    'container.build_time' => 1642670843,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBN8tQAB');
