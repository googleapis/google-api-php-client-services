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

class GoogleAdsSearchads360V23CommonPolicyTopicEntry extends \Google\Collection
{
  /**
   * No value has been specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The resource will not be served.
   */
  public const TYPE_PROHIBITED = 'PROHIBITED';
  /**
   * The resource will not be served under some circumstances.
   */
  public const TYPE_LIMITED = 'LIMITED';
  /**
   * The resource cannot serve at all because of the current targeting criteria.
   */
  public const TYPE_FULLY_LIMITED = 'FULLY_LIMITED';
  /**
   * May be of interest, but does not limit how the resource is served.
   */
  public const TYPE_DESCRIPTIVE = 'DESCRIPTIVE';
  /**
   * Could increase coverage beyond normal.
   */
  public const TYPE_BROADENING = 'BROADENING';
  /**
   * Constrained for all targeted countries, but may serve in other countries
   * through area of interest.
   */
  public const TYPE_AREA_OF_INTEREST_ONLY = 'AREA_OF_INTEREST_ONLY';
  protected $collection_key = 'evidences';
  protected $constraintsType = GoogleAdsSearchads360V23CommonPolicyTopicConstraint::class;
  protected $constraintsDataType = 'array';
  protected $evidencesType = GoogleAdsSearchads360V23CommonPolicyTopicEvidence::class;
  protected $evidencesDataType = 'array';
  /**
   * Policy topic this finding refers to. For example, "ALCOHOL",
   * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
   * policy topics is not fixed for a particular API version and may change at
   * any time.
   *
   * @var string
   */
  public $topic;
  /**
   * Describes the negative or positive effect this policy will have on serving.
   *
   * @var string
   */
  public $type;

  /**
   * Indicates how serving of this resource may be affected (for example, not
   * serving in a country).
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicConstraint[] $constraints
   */
  public function setConstraints($constraints)
  {
    $this->constraints = $constraints;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicConstraint[]
   */
  public function getConstraints()
  {
    return $this->constraints;
  }
  /**
   * Additional information that explains policy finding (for example, the brand
   * name for a trademark finding).
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEvidence[] $evidences
   */
  public function setEvidences($evidences)
  {
    $this->evidences = $evidences;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEvidence[]
   */
  public function getEvidences()
  {
    return $this->evidences;
  }
  /**
   * Policy topic this finding refers to. For example, "ALCOHOL",
   * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
   * policy topics is not fixed for a particular API version and may change at
   * any time.
   *
   * @param string $topic
   */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /**
   * @return string
   */
  public function getTopic()
  {
    return $this->topic;
  }
  /**
   * Describes the negative or positive effect this policy will have on serving.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PROHIBITED, LIMITED, FULLY_LIMITED,
   * DESCRIPTIVE, BROADENING, AREA_OF_INTEREST_ONLY
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
class_alias(GoogleAdsSearchads360V23CommonPolicyTopicEntry::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyTopicEntry');
