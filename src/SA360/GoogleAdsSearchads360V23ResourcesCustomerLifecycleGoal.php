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

class GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal extends \Google\Model
{
  protected $customerAcquisitionGoalValueSettingsType = GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings::class;
  protected $customerAcquisitionGoalValueSettingsDataType = '';
  /**
   * Output only. The resource name of the customer which owns the lifecycle
   * goal.
   *
   * @var string
   */
  public $ownerCustomer;
  /**
   * Immutable. The resource name of the customer lifecycle goal. Customer
   * lifecycle resource names have the form:
   * `customers/{customer_id}/customerLifecycleGoal`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. Customer acquisition goal customer level value settings.
   *
   * @param GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings $customerAcquisitionGoalValueSettings
   */
  public function setCustomerAcquisitionGoalValueSettings(GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings $customerAcquisitionGoalValueSettings)
  {
    $this->customerAcquisitionGoalValueSettings = $customerAcquisitionGoalValueSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLifecycleGoalValueSettings
   */
  public function getCustomerAcquisitionGoalValueSettings()
  {
    return $this->customerAcquisitionGoalValueSettings;
  }
  /**
   * Output only. The resource name of the customer which owns the lifecycle
   * goal.
   *
   * @param string $ownerCustomer
   */
  public function setOwnerCustomer($ownerCustomer)
  {
    $this->ownerCustomer = $ownerCustomer;
  }
  /**
   * @return string
   */
  public function getOwnerCustomer()
  {
    return $this->ownerCustomer;
  }
  /**
   * Immutable. The resource name of the customer lifecycle goal. Customer
   * lifecycle resource names have the form:
   * `customers/{customer_id}/customerLifecycleGoal`
   *
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerLifecycleGoal');
