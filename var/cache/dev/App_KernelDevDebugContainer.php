<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKfTIOui\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKfTIOui/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKfTIOui.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKfTIOui\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKfTIOui\App_KernelDevDebugContainer([
    'container.build_hash' => 'KfTIOui',
    'container.build_id' => '99a137e1',
    'container.build_time' => 1646750366,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKfTIOui');
