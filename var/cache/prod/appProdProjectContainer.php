<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ7vpn5x\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ7vpn5x/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerZ7vpn5x.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerZ7vpn5x\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerZ7vpn5x\appProdProjectContainer([
    'container.build_hash' => 'Z7vpn5x',
    'container.build_id' => '73d72c2f',
    'container.build_time' => 1580851287,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ7vpn5x');
