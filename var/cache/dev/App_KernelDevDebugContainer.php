<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPaeKqxK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPaeKqxK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPaeKqxK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPaeKqxK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPaeKqxK\App_KernelDevDebugContainer([
    'container.build_hash' => 'PaeKqxK',
    'container.build_id' => '2847393f',
    'container.build_time' => 1594668844,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPaeKqxK');
