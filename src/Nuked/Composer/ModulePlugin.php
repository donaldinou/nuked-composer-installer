<?php

namespace Nuked\Composer {

    use Composer\Composer;
    use Composer\IO\IOInterface as IOComposer;
    use Composer\Plugin\PluginInterface;

    class ModulePlugin implements PluginInterface {

        public function activate(Composer $composer, IOComposer $io) {
            $installer = new ModuleInstaller($io, $composer);
            $composer->getInstallationManager()->addInstaller($installer);
        }

    }

}