<?php
namespace Aloo\WordPress\Installer;

use Composer\Installer\PackageEvent;

class WordPressPlugin {
    public static function install(PackageEvent $event)
    {
        self::moveSourceToPluginsDir($event);
    }

    public static function update(PackageEvent $event)
    {
        self::moveSourceToPluginsDir($event);
    }

    private static function moveSourceToPluginsDir(PackageEvent $event) 
    {
        $installedPackage = $event->getOperation()->getPackage();
        file_put_contents('.output.js.txt', print_r($installedPackage, true));
    }
}