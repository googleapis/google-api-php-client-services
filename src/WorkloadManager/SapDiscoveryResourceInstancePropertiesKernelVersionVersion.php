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

namespace Google\Service\WorkloadManager;

class SapDiscoveryResourceInstancePropertiesKernelVersionVersion extends \Google\Model
{
  /**
   * @var int
   */
  public $build;
  /**
   * @var int
   */
  public $major;
  /**
   * @var int
   */
  public $minor;
  /**
   * @var int
   */
  public $patch;
  /**
   * @var string
   */
  public $remainder;

  /**
   * @param int
   */
  public function setBuild($build)
  {
    $this->build = $build;
  }
  /**
   * @return int
   */
  public function getBuild()
  {
    return $this->build;
  }
  /**
   * @param int
   */
  public function setMajor($major)
  {
    $this->major = $major;
  }
  /**
   * @return int
   */
  public function getMajor()
  {
    return $this->major;
  }
  /**
   * @param int
   */
  public function setMinor($minor)
  {
    $this->minor = $minor;
  }
  /**
   * @return int
   */
  public function getMinor()
  {
    return $this->minor;
  }
  /**
   * @param int
   */
  public function setPatch($patch)
  {
    $this->patch = $patch;
  }
  /**
   * @return int
   */
  public function getPatch()
  {
    return $this->patch;
  }
  /**
   * @param string
   */
  public function setRemainder($remainder)
  {
    $this->remainder = $remainder;
  }
  /**
   * @return string
   */
  public function getRemainder()
  {
    return $this->remainder;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SapDiscoveryResourceInstancePropertiesKernelVersionVersion::class, 'Google_Service_WorkloadManager_SapDiscoveryResourceInstancePropertiesKernelVersionVersion');
