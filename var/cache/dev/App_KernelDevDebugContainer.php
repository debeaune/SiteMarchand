<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqx3iNM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqx3iNM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXqx3iNM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXqx3iNM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXqx3iNM\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xqx3iNM',
    'container.build_id' => '9715a9de',
    'container.build_time' => 1648303967,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqx3iNM');
