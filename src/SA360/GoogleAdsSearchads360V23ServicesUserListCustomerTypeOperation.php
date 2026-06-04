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

class GoogleAdsSearchads360V23ServicesUserListCustomerTypeOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23ResourcesUserListCustomerType::class;
  protected $createDataType = '';
  /**
   * Remove an existing user list customer type. A resource name for the removed
   * user list customer type is expected, in this format: `customers/{customer_i
   * d}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
   *
   * @var string
   */
  public $remove;

  /**
   * Attach a user list customer type to a user list. No resource name is
   * expected for the new user list customer type.
   *
   * @param GoogleAdsSearchads360V23ResourcesUserListCustomerType $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesUserListCustomerType $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesUserListCustomerType
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Remove an existing user list customer type. A resource name for the removed
   * user list customer type is expected, in this format: `customers/{customer_i
   * d}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
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
class_alias(GoogleAdsSearchads360V23ServicesUserListCustomerTypeOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUserListCustomerTypeOperation');
