<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJc3yAdg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJc3yAdg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJc3yAdg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJc3yAdg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJc3yAdg\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jc3yAdg',
    'container.build_id' => '56ed18aa',
    'container.build_time' => 1648822295,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJc3yAdg');
