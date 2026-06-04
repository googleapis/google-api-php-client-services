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

class GoogleAdsSearchads360V23ResourcesCustomerLabel extends \Google\Model
{
  /**
   * Output only. The resource name of the customer to which the label is
   * attached. Read only.
   *
   * @var string
   */
  public $customer;
  /**
   * Output only. The resource name of the label assigned to the customer. Note:
   * the Customer ID portion of the label resource name is not validated when
   * creating a new CustomerLabel.
   *
   * @var string
   */
  public $label;
  /**
   * Immutable. Name of the resource. Customer label resource names have the
   * form: `customers/{customer_id}/customerLabels/{label_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. The resource name of the customer to which the label is
   * attached. Read only.
   *
   * @param string $customer
   */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return string
   */
  public function getCustomer()
  {
    return $this->customer;
  }
  /**
   * Output only. The resource name of the label assigned to the customer. Note:
   * the Customer ID portion of the label resource name is not validated when
   * creating a new CustomerLabel.
   *
   * @param string $label
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * Immutable. Name of the resource. Customer label resource names have the
   * form: `customers/{customer_id}/customerLabels/{label_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesCustomerLabel::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerLabel');
