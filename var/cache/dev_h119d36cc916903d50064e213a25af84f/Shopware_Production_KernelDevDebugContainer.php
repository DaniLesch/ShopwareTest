<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXtHVIxx\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXtHVIxx/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXtHVIxx.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXtHVIxx\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerXtHVIxx\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'XtHVIxx',
    'container.build_id' => '21a8844a',
    'container.build_time' => 1622209654,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXtHVIxx');