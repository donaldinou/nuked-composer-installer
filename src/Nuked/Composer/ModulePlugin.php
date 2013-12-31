<?php

namespace Nuked\Composer {

    use Composer\Composer;
    use Composer\IO\IOInterface;
    use Composer\Plugin\PluginInterface;

    class ModulePlugin implements PluginInterface {

        public function activate(Composer $composer, IOInterface $io) {
            $installer = new ModuleInstaller($io, $composer);
            $composer->getInstallationManager()->addInstaller($installer);
        }

    }

}