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

class GoogleCloudSecuritycenterV1p1beta1Finding extends \Google\Model
{
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  public const SEVERITY_CRITICAL = 'CRITICAL';
  public const SEVERITY_HIGH = 'HIGH';
  public const SEVERITY_MEDIUM = 'MEDIUM';
  public const SEVERITY_LOW = 'LOW';
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  public const STATE_ACTIVE = 'ACTIVE';
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * @var string
   */
  public $canonicalName;
  /**
   * @var string
   */
  public $category;
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $eventTime;
  /**
   * @var string
   */
  public $externalUri;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $parent;
  /**
   * @var string
   */
  public $resourceName;
  protected $securityMarksType = GoogleCloudSecuritycenterV1p1beta1SecurityMarks::class;
  protected $securityMarksDataType = '';
  /**
   * @var string
   */
  public $severity;
  /**
   * @var array[]
   */
  public $sourceProperties;
  /**
   * @var string
   */
  public $state;

  /**
   * @param string $canonicalName
   */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /**
   * @return string
   */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /**
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
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
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * @param string $externalUri
   */
  public function setExternalUri($externalUri)
  {
    $this->externalUri = $externalUri;
  }
  /**
   * @return string
   */
  public function getExternalUri()
  {
    return $this->externalUri;
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
  /**
   * @param GoogleCloudSecuritycenterV1p1beta1SecurityMarks $securityMarks
   */
  public function setSecurityMarks(GoogleCloudSecuritycenterV1p1beta1SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /**
   * @return GoogleCloudSecuritycenterV1p1beta1SecurityMarks
   */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
  }
  /**
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * @param array[] $sourceProperties
   */
  public function setSourceProperties($sourceProperties)
  {
    $this->sourceProperties = $sourceProperties;
  }
  /**
   * @return array[]
   */
  public function getSourceProperties()
  {
    return $this->sourceProperties;
  }
  /**
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV1p1beta1Finding::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1p1beta1Finding');
