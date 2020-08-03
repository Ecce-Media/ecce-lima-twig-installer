<?php
/*
namespace eccemedia\composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        // return 'templates/' . $package->getPrettyName();
        return 'templates/ecce-lima-twig';
    }
    public function supports($packageType)
    {
        return 'ecce-lima-twig' === $packageType;
    }
}

*/ ?>
<?php

namespace ecceemdia\composer;

use Composer\Composer;
use Composer\Installer\BinaryInstaller;
use Composer\Installer\LibraryInstaller as BaseLibraryInstaller;

use Composer\IO\IOInterface;
use Composer\Util\Filesystem;

class Installer extends BaseLibraryInstaller
{
    
    const TEMPLATES_VENDOR_DIR = './templates/vendor';
    const TWIG_PACKAGE_TYPE = 'ecce-lima-twig';
    
    public function __construct(IOInterface $io, Composer $composer, $type = self::TWIG_PACKAGE_TYPE, Filesystem $filesystem = null, BinaryInstaller $binaryInstaller = null)
    {
        parent::__construct($io, $composer, $type, $filesystem, $binaryInstaller);
        $this->vendorDir = rtrim(self::TEMPLATES_VENDOR_DIR, '/');
        $this->type = self::TWIG_PACKAGE_TYPE;
    }
    
    public function supports($packageType)
    {
        return $packageType === self::TWIG_PACKAGE_TYPE;
    }
}
