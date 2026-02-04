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

class GoogleCloudContactcenterinsightsV1Dashboard extends \Google\Model
{
  /**
   * Output only. Dashboard creation time.
   *
   * @var string
   */
  public $createTime;
  protected $dateRangeConfigType = GoogleCloudContactcenterinsightsV1DateRangeConfig::class;
  protected $dateRangeConfigDataType = '';
  /**
   * Dashboard description
   *
   * @var string
   */
  public $description;
  /**
   * User provided display name of the dashboard.
   *
   * @var string
   */
  public $displayName;
  /**
   * Filter applied to all charts in the dashboard. Should support scope later.
   *
   * @var string
   */
  public $filter;
  /**
   * Identifier. Dashboard resource name. Format:
   * projects/{project}/locations/{location}/dashboards/{dashboard}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Whether the dashboard is read-only. All predefined dashboards
   * are read-only and cannot be modified by the user.
   *
   * @var bool
   */
  public $readOnly;
  protected $rootContainerType = GoogleCloudContactcenterinsightsV1Container::class;
  protected $rootContainerDataType = '';
  /**
   * Output only. Dashboard last update time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Dashboard creation time.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Date range config applied to all charts in the dashboard.
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
   * Dashboard description
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
   * User provided display name of the dashboard.
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
   * Filter applied to all charts in the dashboard. Should support scope later.
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
   * Identifier. Dashboard resource name. Format:
   * projects/{project}/locations/{location}/dashboards/{dashboard}
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
   * Output only. Whether the dashboard is read-only. All predefined dashboards
   * are read-only and cannot be modified by the user.
   *
   * @param bool $readOnly
   */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /**
   * @return bool
   */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /**
   * The dashboard's root widget container. We want to display the dashboard
   * layout in a tree-like structure, where the root container contains other
   * widgets (containers or charts) as children.
   *
   * @param GoogleCloudContactcenterinsightsV1Container $rootContainer
   */
  public function setRootContainer(GoogleCloudContactcenterinsightsV1Container $rootContainer)
  {
    $this->rootContainer = $rootContainer;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1Container
   */
  public function getRootContainer()
  {
    return $this->rootContainer;
  }
  /**
   * Output only. Dashboard last update time.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1Dashboard::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Dashboard');
