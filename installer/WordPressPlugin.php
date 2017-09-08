<?php
namespace Aloo\WordPress\Installer;

use Composer\Installer\PackageEvent;

class WordPressPlugin {
    public static function install(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        print_r($installedPackage);
    }

    public static function update(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        print_r($installedPackage);
    }
}