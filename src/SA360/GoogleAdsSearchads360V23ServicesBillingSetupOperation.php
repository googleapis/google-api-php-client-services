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

class GoogleAdsSearchads360V23ServicesBillingSetupOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23ResourcesBillingSetup::class;
  protected $createDataType = '';
  /**
   * Resource name of the billing setup to remove. A setup cannot be removed
   * unless it is in a pending state or its scheduled start time is in the
   * future. The resource name looks like
   * `customers/{customer_id}/billingSetups/{billing_id}`.
   *
   * @var string
   */
  public $remove;

  /**
   * Creates a billing setup. No resource name is expected for the new billing
   * setup.
   *
   * @param GoogleAdsSearchads360V23ResourcesBillingSetup $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesBillingSetup $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBillingSetup
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Resource name of the billing setup to remove. A setup cannot be removed
   * unless it is in a pending state or its scheduled start time is in the
   * future. The resource name looks like
   * `customers/{customer_id}/billingSetups/{billing_id}`.
   *
   * @param string $remove
   */
  public function setRemove($remove)
  {
    $this->remove = $remove;
  }
  /**
   * @return string
   */
  public function getRemove()
  {
    return $this->remove;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesBillingSetupOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesBillingSetupOperation');
