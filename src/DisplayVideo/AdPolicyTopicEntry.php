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

namespace Google\Service\DisplayVideo;

class AdPolicyTopicEntry extends \Google\Collection
{
  protected $collection_key = 'policyTopicEvidences';
  protected $appealInfoType = AdPolicyTopicAppealInfo::class;
  protected $appealInfoDataType = '';
  /**
   * @var string
   */
  public $helpCenterLink;
  /**
   * @var string
   */
  public $policyDecisionType;
  /**
   * @var string
   */
  public $policyEnforcementMeans;
  /**
   * @var string
   */
  public $policyLabel;
  /**
   * @var string
   */
  public $policyTopic;
  protected $policyTopicConstraintsType = AdPolicyTopicConstraint::class;
  protected $policyTopicConstraintsDataType = 'array';
  /**
   * @var string
   */
  public $policyTopicDescription;
  protected $policyTopicEvidencesType = AdPolicyTopicEvidence::class;
  protected $policyTopicEvidencesDataType = 'array';
  /**
   * @var string
   */
  public $policyTopicType;

  /**
   * @param AdPolicyTopicAppealInfo
   */
  public function setAppealInfo(AdPolicyTopicAppealInfo $appealInfo)
  {
    $this->appealInfo = $appealInfo;
  }
  /**
   * @return AdPolicyTopicAppealInfo
   */
  public function getAppealInfo()
  {
    return $this->appealInfo;
  }
  /**
   * @param string
   */
  public function setHelpCenterLink($helpCenterLink)
  {
    $this->helpCenterLink = $helpCenterLink;
  }
  /**
   * @return string
   */
  public function getHelpCenterLink()
  {
    return $this->helpCenterLink;
  }
  /**
   * @param string
   */
  public function setPolicyDecisionType($policyDecisionType)
  {
    $this->policyDecisionType = $policyDecisionType;
  }
  /**
   * @return string
   */
  public function getPolicyDecisionType()
  {
    return $this->policyDecisionType;
  }
  /**
   * @param string
   */
  public function setPolicyEnforcementMeans($policyEnforcementMeans)
  {
    $this->policyEnforcementMeans = $policyEnforcementMeans;
  }
  /**
   * @return string
   */
  public function getPolicyEnforcementMeans()
  {
    return $this->policyEnforcementMeans;
  }
  /**
   * @param string
   */
  public function setPolicyLabel($policyLabel)
  {
    $this->policyLabel = $policyLabel;
  }
  /**
   * @return string
   */
  public function getPolicyLabel()
  {
    return $this->policyLabel;
  }
  /**
   * @param string
   */
  public function setPolicyTopic($policyTopic)
  {
    $this->policyTopic = $policyTopic;
  }
  /**
   * @return string
   */
  public function getPolicyTopic()
  {
    return $this->policyTopic;
  }
  /**
   * @param AdPolicyTopicConstraint[]
   */
  public function setPolicyTopicConstraints($policyTopicConstraints)
  {
    $this->policyTopicConstraints = $policyTopicConstraints;
  }
  /**
   * @return AdPolicyTopicConstraint[]
   */
  public function getPolicyTopicConstraints()
  {
    return $this->policyTopicConstraints;
  }
  /**
   * @param string
   */
  public function setPolicyTopicDescription($policyTopicDescription)
  {
    $this->policyTopicDescription = $policyTopicDescription;
  }
  /**
   * @return string
   */
  public function getPolicyTopicDescription()
  {
    return $this->policyTopicDescription;
  }
  /**
   * @param AdPolicyTopicEvidence[]
   */
  public function setPolicyTopicEvidences($policyTopicEvidences)
  {
    $this->policyTopicEvidences = $policyTopicEvidences;
  }
  /**
   * @return AdPolicyTopicEvidence[]
   */
  public function getPolicyTopicEvidences()
  {
    return $this->policyTopicEvidences;
  }
  /**
   * @param string
   */
  public function setPolicyTopicType($policyTopicType)
  {
    $this->policyTopicType = $policyTopicType;
  }
  /**
   * @return string
   */
  public function getPolicyTopicType()
  {
    return $this->policyTopicType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdPolicyTopicEntry::class, 'Google_Service_DisplayVideo_AdPolicyTopicEntry');
