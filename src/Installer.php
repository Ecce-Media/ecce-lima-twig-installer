<?php

namespace eccemedia\composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return 'templates/' . $package->getPrettyName();
        // return 'templates/ecce-lima-twig';
    }
    public function supports($packageType)
    {
        return 'ecce-lima-twig' === $packageType;
    }
}