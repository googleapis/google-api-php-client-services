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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2AiModel extends \Google\Model
{
  public const DEPLOYMENT_PLATFORM_DEPLOYMENT_PLATFORM_UNSPECIFIED = 'DEPLOYMENT_PLATFORM_UNSPECIFIED';
  public const DEPLOYMENT_PLATFORM_VERTEX_AI = 'VERTEX_AI';
  public const DEPLOYMENT_PLATFORM_GKE = 'GKE';
  public const DEPLOYMENT_PLATFORM_GCE = 'GCE';
  public const DEPLOYMENT_PLATFORM_FINE_TUNED_MODEL = 'FINE_TUNED_MODEL';
  /**
   * @var string
   */
  public $deploymentPlatform;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $domain;
  /**
   * @var string
   */
  public $library;
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $publisher;
  /**
   * @var string
   */
  public $usageCategory;

  /**
   * @param self::DEPLOYMENT_PLATFORM_* $deploymentPlatform
   */
  public function setDeploymentPlatform($deploymentPlatform)
  {
    $this->deploymentPlatform = $deploymentPlatform;
  }
  /**
   * @return self::DEPLOYMENT_PLATFORM_*
   */
  public function getDeploymentPlatform()
  {
    return $this->deploymentPlatform;
  }
  /**
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
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * @param string $library
   */
  public function setLibrary($library)
  {
    $this->library = $library;
  }
  /**
   * @return string
   */
  public function getLibrary()
  {
    return $this->library;
  }
  /**
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
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
   * @param string $publisher
   */
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  /**
   * @return string
   */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /**
   * @param string $usageCategory
   */
  public function setUsageCategory($usageCategory)
  {
    $this->usageCategory = $usageCategory;
  }
  /**
   * @return string
   */
  public function getUsageCategory()
  {
    return $this->usageCategory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2AiModel::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2AiModel');
