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

namespace Google\Service\CustomerEngagementSuite;

class ImportAppResponse extends \Google\Collection
{
  protected $collection_key = 'warnings';
  /**
   * The resource name of the app that was imported.
   *
   * @var string
   */
  public $name;
  /**
   * Warning messages generated during the import process. If errors occur for
   * specific resources, they will not be included in the imported app and the
   * error will be mentioned here.
   *
   * @var string[]
   */
  public $warnings;

  /**
   * The resource name of the app that was imported.
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
   * Warning messages generated during the import process. If errors occur for
   * specific resources, they will not be included in the imported app and the
   * error will be mentioned here.
   *
   * @param string[] $warnings
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return string[]
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportAppResponse::class, 'Google_Service_CustomerEngagementSuite_ImportAppResponse');
