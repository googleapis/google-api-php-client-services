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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2ContainerStatus extends \Google\Model
{
  /**
   * ImageDigest holds the resolved digest for the image specified and resolved
   * during the creation of Revision. This field holds the digest value
   * regardless of whether a tag or digest was originally specified in the
   * Container object.
   *
   * @var string
   */
  public $imageDigest;
  /**
   * The name of the container, if specified.
   *
   * @var string
   */
  public $name;

  /**
   * ImageDigest holds the resolved digest for the image specified and resolved
   * during the creation of Revision. This field holds the digest value
   * regardless of whether a tag or digest was originally specified in the
   * Container object.
   *
   * @param string $imageDigest
   */
  public function setImageDigest($imageDigest)
  {
    $this->imageDigest = $imageDigest;
  }
  /**
   * @return string
   */
  public function getImageDigest()
  {
    return $this->imageDigest;
  }
  /**
   * The name of the container, if specified.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2ContainerStatus::class, 'Google_Service_CloudRun_GoogleCloudRunV2ContainerStatus');
