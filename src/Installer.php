<?php

namespace eccemedia\composer;

use Composer\Composer;
use Composer\Installer\BinaryInstaller;
use Composer\Installer\LibraryInstaller as BaseLibraryInstaller;

use Composer\IO\IOInterface;
use Composer\Util\Filesystem;

class Installer extends BaseLibraryInstaller
{
    const TEMPLATES_VENDOR_DIR = './templates/_vendor';
    const PACKAGE_TYPE = 'ecce-lima-twig';
    
    public function __construct(IOInterface $io, Composer $composer, $type = self::PACKAGE_TYPE, Filesystem $filesystem = null, BinaryInstaller $binaryInstaller = null)
    {
        parent::__construct($io, $composer, $type, $filesystem, $binaryInstaller);
        $this->vendorDir = rtrim(self::TEMPLATES_VENDOR_DIR, '/');
        $this->type = self::PACKAGE_TYPE;
    }

    public function supports($packageType)
    {
        return $packageType === self::PACKAGE_TYPE;
    }
}