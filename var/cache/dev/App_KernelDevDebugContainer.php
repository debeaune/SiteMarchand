<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9hUPVwF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9hUPVwF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9hUPVwF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9hUPVwF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9hUPVwF\App_KernelDevDebugContainer([
    'container.build_hash' => '9hUPVwF',
    'container.build_id' => '0abd54a4',
    'container.build_time' => 1648669562,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9hUPVwF');
