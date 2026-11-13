<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Bigquery;

class InstalledPackage extends \Google\Model
{
  /**
   * Output only. The name of the installed package.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The source repository from which this package was installed.
   * Populated only when the package was installed from an additional package
   * repository. E.g. 'https://my-region-python.pkg.dev/my-project/my-
   * repo/simple'
   *
   * @var string
   */
  public $sourceRepository;
  /**
   * Output only. The version of the installed package.
   *
   * @var string
   */
  public $version;

  /**
   * Output only. The name of the installed package.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The source repository from which this package was installed.
   * Populated only when the package was installed from an additional package
   * repository. E.g. 'https://my-region-python.pkg.dev/my-project/my-
   * repo/simple'
   *
   * @param string $sourceRepository
   */
  public function setSourceRepository($sourceRepository)
  {
    $this->sourceRepository = $sourceRepository;
  }
  /**
   * @return string
   */
  public function getSourceRepository()
  {
    return $this->sourceRepository;
  }
  /**
   * Output only. The version of the installed package.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstalledPackage::class, 'Google_Service_Bigquery_InstalledPackage');
