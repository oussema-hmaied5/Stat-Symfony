<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVV55ggJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVV55ggJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVV55ggJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVV55ggJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVV55ggJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'VV55ggJ',
    'container.build_id' => 'd10a4f35',
    'container.build_time' => 1709479152,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVV55ggJ');