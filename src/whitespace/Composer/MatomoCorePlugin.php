<?php

namespace whitespace\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class MatomoCorePlugin implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $composer
      ->getInstallationManager()
      ->addInstaller(new MatomoCoreInstaller($io, $composer));
  }

  /**
   * {@inheritDoc}
   */
  public function deactivate(Composer $composer, IOInterface $io)
  {
  }

  /**
   * {@inheritDoc}
   */
  public function uninstall(Composer $composer, IOInterface $io)
  {
  }
}
