<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGNcSFdQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGNcSFdQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGNcSFdQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGNcSFdQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGNcSFdQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'GNcSFdQ',
    'container.build_id' => '34e3df77',
    'container.build_time' => 1676536189,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGNcSFdQ');
