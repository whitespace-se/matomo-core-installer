<?php

/**
 * WordPress Core Installer - A Composer to install WordPress in a webroot subdirectory
 * Copyright (C) 2013    John P. Bloch
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace whitespace\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class MatomoCoreInstaller extends LibraryInstaller
{
  const TYPE = "matomo-core";
  const DEFAULT_DIR = "web";
  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package)
  {
    if ($this->composer->getPackage()) {
      $extra = $this->composer->getPackage()->getExtra();
      return $extra["matomo-install-dir"] ?? self::DEFAULT_DIR;
    }

    return parent::getInstallPath($package);
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return self::TYPE === $packageType;
  }
}
