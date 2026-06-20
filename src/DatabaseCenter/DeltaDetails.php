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

namespace Google\Service\DatabaseCenter;

class DeltaDetails extends \Google\Collection
{
  protected $collection_key = 'increasedResources';
  protected $decreasedResourcesType = ResourceDetails::class;
  protected $decreasedResourcesDataType = 'array';
  protected $increasedResourcesType = ResourceDetails::class;
  protected $increasedResourcesDataType = 'array';

  /**
   * Details of resources that have decreased.
   *
   * @param ResourceDetails[] $decreasedResources
   */
  public function setDecreasedResources($decreasedResources)
  {
    $this->decreasedResources = $decreasedResources;
  }
  /**
   * @return ResourceDetails[]
   */
  public function getDecreasedResources()
  {
    return $this->decreasedResources;
  }
  /**
   * Details of resources that have increased.
   *
   * @param ResourceDetails[] $increasedResources
   */
  public function setIncreasedResources($increasedResources)
  {
    $this->increasedResources = $increasedResources;
  }
  /**
   * @return ResourceDetails[]
   */
  public function getIncreasedResources()
  {
    return $this->increasedResources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeltaDetails::class, 'Google_Service_DatabaseCenter_DeltaDetails');
