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

namespace Google\Service\ThreatIntelligenceService;

class Association extends \Google\Model
{
  /**
   * Unspecified object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_UNSPECIFIED = 'THREAT_INTEL_OBJECT_TYPE_UNSPECIFIED';
  /**
   * Threat actor object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_THREAT_ACTOR = 'THREAT_INTEL_OBJECT_TYPE_THREAT_ACTOR';
  /**
   * Malware object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_MALWARE = 'THREAT_INTEL_OBJECT_TYPE_MALWARE';
  /**
   * Report object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_REPORT = 'THREAT_INTEL_OBJECT_TYPE_REPORT';
  /**
   * Campaign object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_CAMPAIGN = 'THREAT_INTEL_OBJECT_TYPE_CAMPAIGN';
  /**
   * IoC Collection object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_IOC_COLLECTION = 'THREAT_INTEL_OBJECT_TYPE_IOC_COLLECTION';
  /**
   * Software and toolkits object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_SOFTWARE_AND_TOOLKITS = 'THREAT_INTEL_OBJECT_TYPE_SOFTWARE_AND_TOOLKITS';
  /**
   * Vulnerability object type.
   */
  public const TYPE_THREAT_INTEL_OBJECT_TYPE_VULNERABILITY = 'THREAT_INTEL_OBJECT_TYPE_VULNERABILITY';
  /**
   * Required. The ID of the association.
   *
   * @var string
   */
  public $id;
  /**
   * Required. The type of the association.
   *
   * @var string
   */
  public $type;

  /**
   * Required. The ID of the association.
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
   * Required. The type of the association.
   *
   * Accepted values: THREAT_INTEL_OBJECT_TYPE_UNSPECIFIED,
   * THREAT_INTEL_OBJECT_TYPE_THREAT_ACTOR, THREAT_INTEL_OBJECT_TYPE_MALWARE,
   * THREAT_INTEL_OBJECT_TYPE_REPORT, THREAT_INTEL_OBJECT_TYPE_CAMPAIGN,
   * THREAT_INTEL_OBJECT_TYPE_IOC_COLLECTION,
   * THREAT_INTEL_OBJECT_TYPE_SOFTWARE_AND_TOOLKITS,
   * THREAT_INTEL_OBJECT_TYPE_VULNERABILITY
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Association::class, 'Google_Service_ThreatIntelligenceService_Association');
