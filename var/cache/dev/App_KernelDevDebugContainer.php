<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYltU5iE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYltU5iE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYltU5iE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYltU5iE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYltU5iE\App_KernelDevDebugContainer([
    'container.build_hash' => 'YltU5iE',
    'container.build_id' => 'd63b0058',
    'container.build_time' => 1595165907,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYltU5iE');
