<?php

namespace eccemedia\composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        // return 'templates/' . $package->getPrettyName();
        return 'templates/ecce-lima-twig';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'ecce-lima-twig' === $packageType;
    }
}