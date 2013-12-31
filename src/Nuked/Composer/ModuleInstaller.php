<?php

namespace Nuked\Composer {

    use Composer\Composer;
    use Composer\Package\PackageInterface;
    use Composer\Installer\LibraryInstaller;
    use Composer\IO\IOInterface;

    class ModuleInstaller extends LibraryInstaller {

        private $installationManager;
        private static $classCounter = 0;

        /**
         * Initializes Plugin installer.
         *
         * @param IOInterface $io
         * @param Composer    $composer
         * @param string      $type
         */
        public function __construct(IOInterface $io, Composer $composer, $type = 'nuked-module') {
            parent::__construct($io, $composer, $type);
            $this->installationManager = $composer->getInstallationManager();

        }

        /**
         * {@inheritDoc}
         */
        public function getPackageBasePath(PackageInterface $package) {
            return 'UPLOAD/modules';
        }

    }

}