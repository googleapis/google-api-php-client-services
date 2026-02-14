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

namespace Google\Service\CloudKMS;

class RetiredResource extends \Google\Model
{
  /**
   * Output only. The time at which the original resource was deleted and this
   * RetiredResource record was created.
   *
   * @var string
   */
  public $deleteTime;
  /**
   * Output only. Identifier. The resource name for this RetiredResource in the
   * format `projects/locations/retiredResources`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The full resource name of the original CryptoKey that was
   * deleted in the format `projects/locations/keyRings/cryptoKeys`.
   *
   * @var string
   */
  public $originalResource;
  /**
   * Output only. The resource type of the original deleted resource.
   *
   * @var string
   */
  public $resourceType;

  /**
   * Output only. The time at which the original resource was deleted and this
   * RetiredResource record was created.
   *
   * @param string $deleteTime
   */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /**
   * @return string
   */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /**
   * Output only. Identifier. The resource name for this RetiredResource in the
   * format `projects/locations/retiredResources`.
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
   * Output only. The full resource name of the original CryptoKey that was
   * deleted in the format `projects/locations/keyRings/cryptoKeys`.
   *
   * @param string $originalResource
   */
  public function setOriginalResource($originalResource)
  {
    $this->originalResource = $originalResource;
  }
  /**
   * @return string
   */
  public function getOriginalResource()
  {
    return $this->originalResource;
  }
  /**
   * Output only. The resource type of the original deleted resource.
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RetiredResource::class, 'Google_Service_CloudKMS_RetiredResource');
