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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1Assessment extends \Google\Model
{
  /**
   * @var GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment
   */
  public $accountDefenderAssessment;
  protected $accountDefenderAssessmentType = GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment::class;
  protected $accountDefenderAssessmentDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1AccountVerificationInfo
   */
  public $accountVerification;
  protected $accountVerificationType = GoogleCloudRecaptchaenterpriseV1AccountVerificationInfo::class;
  protected $accountVerificationDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1Event
   */
  public $event;
  protected $eventType = GoogleCloudRecaptchaenterpriseV1Event::class;
  protected $eventDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1FirewallPolicyAssessment
   */
  public $firewallPolicyAssessment;
  protected $firewallPolicyAssessmentType = GoogleCloudRecaptchaenterpriseV1FirewallPolicyAssessment::class;
  protected $firewallPolicyAssessmentDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1FraudPreventionAssessment
   */
  public $fraudPreventionAssessment;
  protected $fraudPreventionAssessmentType = GoogleCloudRecaptchaenterpriseV1FraudPreventionAssessment::class;
  protected $fraudPreventionAssessmentDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1FraudSignals
   */
  public $fraudSignals;
  protected $fraudSignalsType = GoogleCloudRecaptchaenterpriseV1FraudSignals::class;
  protected $fraudSignalsDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification
   */
  public $privatePasswordLeakVerification;
  protected $privatePasswordLeakVerificationType = GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification::class;
  protected $privatePasswordLeakVerificationDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1RiskAnalysis
   */
  public $riskAnalysis;
  protected $riskAnalysisType = GoogleCloudRecaptchaenterpriseV1RiskAnalysis::class;
  protected $riskAnalysisDataType = '';
  /**
   * @var GoogleCloudRecaptchaenterpriseV1TokenProperties
   */
  public $tokenProperties;
  protected $tokenPropertiesType = GoogleCloudRecaptchaenterpriseV1TokenProperties::class;
  protected $tokenPropertiesDataType = '';

  /**
   * @param GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment
   */
  public function setAccountDefenderAssessment(GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment $accountDefenderAssessment)
  {
    $this->accountDefenderAssessment = $accountDefenderAssessment;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1AccountDefenderAssessment
   */
  public function getAccountDefenderAssessment()
  {
    return $this->accountDefenderAssessment;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1AccountVerificationInfo
   */
  public function setAccountVerification(GoogleCloudRecaptchaenterpriseV1AccountVerificationInfo $accountVerification)
  {
    $this->accountVerification = $accountVerification;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1AccountVerificationInfo
   */
  public function getAccountVerification()
  {
    return $this->accountVerification;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1Event
   */
  public function setEvent(GoogleCloudRecaptchaenterpriseV1Event $event)
  {
    $this->event = $event;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1Event
   */
  public function getEvent()
  {
    return $this->event;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1FirewallPolicyAssessment
   */
  public function setFirewallPolicyAssessment(GoogleCloudRecaptchaenterpriseV1FirewallPolicyAssessment $firewallPolicyAssessment)
  {
    $this->firewallPolicyAssessment = $firewallPolicyAssessment;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1FirewallPolicyAssessment
   */
  public function getFirewallPolicyAssessment()
  {
    return $this->firewallPolicyAssessment;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1FraudPreventionAssessment
   */
  public function setFraudPreventionAssessment(GoogleCloudRecaptchaenterpriseV1FraudPreventionAssessment $fraudPreventionAssessment)
  {
    $this->fraudPreventionAssessment = $fraudPreventionAssessment;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1FraudPreventionAssessment
   */
  public function getFraudPreventionAssessment()
  {
    return $this->fraudPreventionAssessment;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1FraudSignals
   */
  public function setFraudSignals(GoogleCloudRecaptchaenterpriseV1FraudSignals $fraudSignals)
  {
    $this->fraudSignals = $fraudSignals;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1FraudSignals
   */
  public function getFraudSignals()
  {
    return $this->fraudSignals;
  }
  /**
   * @param string
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
   * @param GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification
   */
  public function setPrivatePasswordLeakVerification(GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification $privatePasswordLeakVerification)
  {
    $this->privatePasswordLeakVerification = $privatePasswordLeakVerification;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1PrivatePasswordLeakVerification
   */
  public function getPrivatePasswordLeakVerification()
  {
    return $this->privatePasswordLeakVerification;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1RiskAnalysis
   */
  public function setRiskAnalysis(GoogleCloudRecaptchaenterpriseV1RiskAnalysis $riskAnalysis)
  {
    $this->riskAnalysis = $riskAnalysis;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1RiskAnalysis
   */
  public function getRiskAnalysis()
  {
    return $this->riskAnalysis;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1TokenProperties
   */
  public function setTokenProperties(GoogleCloudRecaptchaenterpriseV1TokenProperties $tokenProperties)
  {
    $this->tokenProperties = $tokenProperties;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1TokenProperties
   */
  public function getTokenProperties()
  {
    return $this->tokenProperties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1Assessment::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1Assessment');
