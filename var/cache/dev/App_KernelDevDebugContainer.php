<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJcNc9kk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJcNc9kk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJcNc9kk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJcNc9kk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJcNc9kk\App_KernelDevDebugContainer([
    'container.build_hash' => 'JcNc9kk',
    'container.build_id' => 'b70a0620',
    'container.build_time' => 1649756567,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJcNc9kk');
