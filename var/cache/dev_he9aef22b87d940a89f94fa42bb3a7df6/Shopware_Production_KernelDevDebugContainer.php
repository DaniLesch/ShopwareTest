<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNojoMCr\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNojoMCr/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNojoMCr.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNojoMCr\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerNojoMCr\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'NojoMCr',
    'container.build_id' => 'b71430da',
    'container.build_time' => 1622469080,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNojoMCr');