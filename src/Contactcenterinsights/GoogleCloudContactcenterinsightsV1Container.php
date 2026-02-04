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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1Container extends \Google\Collection
{
  protected $collection_key = 'widgets';
  /**
   * Output only. Unique ID for the container.
   *
   * @var string
   */
  public $containerId;
  protected $dateRangeConfigType = GoogleCloudContactcenterinsightsV1DateRangeConfig::class;
  protected $dateRangeConfigDataType = '';
  /**
   * Container description
   *
   * @var string
   */
  public $description;
  /**
   * User provided display name of the Container.
   *
   * @var string
   */
  public $displayName;
  /**
   * Filter applied to all charts in the container. Should support scope later.
   *
   * @var string
   */
  public $filter;
  /**
   * The height of the container in grid units.
   *
   * @var int
   */
  public $height;
  protected $widgetsType = GoogleCloudContactcenterinsightsV1Widget::class;
  protected $widgetsDataType = 'array';
  /**
   * The width of the container in grid units.
   *
   * @var int
   */
  public $width;

  /**
   * Output only. Unique ID for the container.
   *
   * @param string $containerId
   */
  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }
  /**
   * @return string
   */
  public function getContainerId()
  {
    return $this->containerId;
  }
  /**
   * Date range config applied to all charts in the container.
   *
   * @param GoogleCloudContactcenterinsightsV1DateRangeConfig $dateRangeConfig
   */
  public function setDateRangeConfig(GoogleCloudContactcenterinsightsV1DateRangeConfig $dateRangeConfig)
  {
    $this->dateRangeConfig = $dateRangeConfig;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1DateRangeConfig
   */
  public function getDateRangeConfig()
  {
    return $this->dateRangeConfig;
  }
  /**
   * Container description
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * User provided display name of the Container.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Filter applied to all charts in the container. Should support scope later.
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * The height of the container in grid units.
   *
   * @param int $height
   */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /**
   * @return int
   */
  public function getHeight()
  {
    return $this->height;
  }
  /**
   * Widgets in the Container.
   *
   * @param GoogleCloudContactcenterinsightsV1Widget[] $widgets
   */
  public function setWidgets($widgets)
  {
    $this->widgets = $widgets;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1Widget[]
   */
  public function getWidgets()
  {
    return $this->widgets;
  }
  /**
   * The width of the container in grid units.
   *
   * @param int $width
   */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /**
   * @return int
   */
  public function getWidth()
  {
    return $this->width;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1Container::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Container');
