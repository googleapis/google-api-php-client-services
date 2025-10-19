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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1LicenseConfig extends \Google\Model
{
  /**
   * @var bool
   */
  public $autoRenew;
  protected $endDateType = GoogleTypeDate::class;
  protected $endDateDataType = '';
  /**
   * @var bool
   */
  public $freeTrial;
  /**
   * @var bool
   */
  public $geminiBundle;
  /**
   * @var string
   */
  public $licenseCount;
  /**
   * @var string
   */
  public $name;
  protected $startDateType = GoogleTypeDate::class;
  protected $startDateDataType = '';
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $subscriptionTerm;
  /**
   * @var string
   */
  public $subscriptionTier;

  /**
   * @param bool
   */
  public function setAutoRenew($autoRenew)
  {
    $this->autoRenew = $autoRenew;
  }
  /**
   * @return bool
   */
  public function getAutoRenew()
  {
    return $this->autoRenew;
  }
  /**
   * @param GoogleTypeDate
   */
  public function setEndDate(GoogleTypeDate $endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return GoogleTypeDate
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * @param bool
   */
  public function setFreeTrial($freeTrial)
  {
    $this->freeTrial = $freeTrial;
  }
  /**
   * @return bool
   */
  public function getFreeTrial()
  {
    return $this->freeTrial;
  }
  /**
   * @param bool
   */
  public function setGeminiBundle($geminiBundle)
  {
    $this->geminiBundle = $geminiBundle;
  }
  /**
   * @return bool
   */
  public function getGeminiBundle()
  {
    return $this->geminiBundle;
  }
  /**
   * @param string
   */
  public function setLicenseCount($licenseCount)
  {
    $this->licenseCount = $licenseCount;
  }
  /**
   * @return string
   */
  public function getLicenseCount()
  {
    return $this->licenseCount;
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
   * @param GoogleTypeDate
   */
  public function setStartDate(GoogleTypeDate $startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return GoogleTypeDate
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setSubscriptionTerm($subscriptionTerm)
  {
    $this->subscriptionTerm = $subscriptionTerm;
  }
  /**
   * @return string
   */
  public function getSubscriptionTerm()
  {
    return $this->subscriptionTerm;
  }
  /**
   * @param string
   */
  public function setSubscriptionTier($subscriptionTier)
  {
    $this->subscriptionTier = $subscriptionTier;
  }
  /**
   * @return string
   */
  public function getSubscriptionTier()
  {
    return $this->subscriptionTier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1LicenseConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1LicenseConfig');
