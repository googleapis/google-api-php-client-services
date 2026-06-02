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

class GoogleCloudSecuritycenterV2Issue extends \Google\Collection
{
  public const ISSUE_TYPE_ISSUE_TYPE_UNSPECIFIED = 'ISSUE_TYPE_UNSPECIFIED';
  public const ISSUE_TYPE_CHOKEPOINT = 'CHOKEPOINT';
  public const ISSUE_TYPE_TOXIC_COMBINATION = 'TOXIC_COMBINATION';
  public const ISSUE_TYPE_INSIGHT = 'INSIGHT';
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  public const SEVERITY_CRITICAL = 'CRITICAL';
  public const SEVERITY_HIGH = 'HIGH';
  public const SEVERITY_MEDIUM = 'MEDIUM';
  public const SEVERITY_LOW = 'LOW';
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  public const STATE_ACTIVE = 'ACTIVE';
  public const STATE_INACTIVE = 'INACTIVE';
  protected $collection_key = 'securityContexts';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $detection;
  protected $domainsType = GoogleCloudSecuritycenterV2IssueDomain::class;
  protected $domainsDataType = 'array';
  public $exposureScore;
  /**
   * @var string
   */
  public $issueType;
  /**
   * @var string
   */
  public $lastObservationTime;
  protected $muteType = GoogleCloudSecuritycenterV2IssueMute::class;
  protected $muteDataType = '';
  /**
   * @var string
   */
  public $name;
  protected $primaryResourceType = GoogleCloudSecuritycenterV2IssueResource::class;
  protected $primaryResourceDataType = '';
  protected $relatedFindingsType = GoogleCloudSecuritycenterV2IssueFinding::class;
  protected $relatedFindingsDataType = 'array';
  /**
   * @var string[]
   */
  public $remediations;
  protected $secondaryResourcesType = GoogleCloudSecuritycenterV2IssueResource::class;
  protected $secondaryResourcesDataType = 'array';
  protected $securityContextsType = GoogleCloudSecuritycenterV2IssueSecurityContext::class;
  protected $securityContextsDataType = 'array';
  /**
   * @var string
   */
  public $severity;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $updateTime;

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
   * @param string $detection
   */
  public function setDetection($detection)
  {
    $this->detection = $detection;
  }
  /**
   * @return string
   */
  public function getDetection()
  {
    return $this->detection;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueDomain[] $domains
   */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueDomain[]
   */
  public function getDomains()
  {
    return $this->domains;
  }
  public function setExposureScore($exposureScore)
  {
    $this->exposureScore = $exposureScore;
  }
  public function getExposureScore()
  {
    return $this->exposureScore;
  }
  /**
   * @param self::ISSUE_TYPE_* $issueType
   */
  public function setIssueType($issueType)
  {
    $this->issueType = $issueType;
  }
  /**
   * @return self::ISSUE_TYPE_*
   */
  public function getIssueType()
  {
    return $this->issueType;
  }
  /**
   * @param string $lastObservationTime
   */
  public function setLastObservationTime($lastObservationTime)
  {
    $this->lastObservationTime = $lastObservationTime;
  }
  /**
   * @return string
   */
  public function getLastObservationTime()
  {
    return $this->lastObservationTime;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueMute $mute
   */
  public function setMute(GoogleCloudSecuritycenterV2IssueMute $mute)
  {
    $this->mute = $mute;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueMute
   */
  public function getMute()
  {
    return $this->mute;
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
   * @param GoogleCloudSecuritycenterV2IssueResource $primaryResource
   */
  public function setPrimaryResource(GoogleCloudSecuritycenterV2IssueResource $primaryResource)
  {
    $this->primaryResource = $primaryResource;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResource
   */
  public function getPrimaryResource()
  {
    return $this->primaryResource;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueFinding[] $relatedFindings
   */
  public function setRelatedFindings($relatedFindings)
  {
    $this->relatedFindings = $relatedFindings;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueFinding[]
   */
  public function getRelatedFindings()
  {
    return $this->relatedFindings;
  }
  /**
   * @param string[] $remediations
   */
  public function setRemediations($remediations)
  {
    $this->remediations = $remediations;
  }
  /**
   * @return string[]
   */
  public function getRemediations()
  {
    return $this->remediations;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueResource[] $secondaryResources
   */
  public function setSecondaryResources($secondaryResources)
  {
    $this->secondaryResources = $secondaryResources;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueResource[]
   */
  public function getSecondaryResources()
  {
    return $this->secondaryResources;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IssueSecurityContext[] $securityContexts
   */
  public function setSecurityContexts($securityContexts)
  {
    $this->securityContexts = $securityContexts;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IssueSecurityContext[]
   */
  public function getSecurityContexts()
  {
    return $this->securityContexts;
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
  /**
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
class_alias(GoogleCloudSecuritycenterV2Issue::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Issue');
