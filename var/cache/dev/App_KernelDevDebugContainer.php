<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7fdR48N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7fdR48N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7fdR48N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7fdR48N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7fdR48N\App_KernelDevDebugContainer([
    'container.build_hash' => '7fdR48N',
    'container.build_id' => '90d5709d',
    'container.build_time' => 1574593766,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7fdR48N');
