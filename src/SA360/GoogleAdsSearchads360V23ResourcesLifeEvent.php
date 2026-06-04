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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesLifeEvent extends \Google\Collection
{
  protected $collection_key = 'availabilities';
  protected $availabilitiesType = GoogleAdsSearchads360V23CommonCriterionCategoryAvailability::class;
  protected $availabilitiesDataType = 'array';
  /**
   * Output only. The ID of the life event.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. True if the life event is launched to all channels and
   * locales.
   *
   * @var bool
   */
  public $launchedToAll;
  /**
   * Output only. The name of the life event, for example,"Recently Moved"
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The parent of the life_event.
   *
   * @var string
   */
  public $parent;
  /**
   * Output only. The resource name of the life event. Life event resource names
   * have the form: `customers/{customer_id}/lifeEvents/{life_event_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. Availability information of the life event.
   *
   * @param GoogleAdsSearchads360V23CommonCriterionCategoryAvailability[] $availabilities
   */
  public function setAvailabilities($availabilities)
  {
    $this->availabilities = $availabilities;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCriterionCategoryAvailability[]
   */
  public function getAvailabilities()
  {
    return $this->availabilities;
  }
  /**
   * Output only. The ID of the life event.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. True if the life event is launched to all channels and
   * locales.
   *
   * @param bool $launchedToAll
   */
  public function setLaunchedToAll($launchedToAll)
  {
    $this->launchedToAll = $launchedToAll;
  }
  /**
   * @return bool
   */
  public function getLaunchedToAll()
  {
    return $this->launchedToAll;
  }
  /**
   * Output only. The name of the life event, for example,"Recently Moved"
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
   * Output only. The parent of the life_event.
   *
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * Output only. The resource name of the life event. Life event resource names
   * have the form: `customers/{customer_id}/lifeEvents/{life_event_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesLifeEvent::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLifeEvent');
