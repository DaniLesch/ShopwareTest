<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFEOHHng\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFEOHHng/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFEOHHng.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFEOHHng\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerFEOHHng\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'FEOHHng',
    'container.build_id' => 'dd987b67',
    'container.build_time' => 1622455393,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFEOHHng');
