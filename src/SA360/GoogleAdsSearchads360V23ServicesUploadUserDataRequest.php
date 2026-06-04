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

class GoogleAdsSearchads360V23ServicesUploadUserDataRequest extends \Google\Collection
{
  protected $collection_key = 'operations';
  protected $customerMatchUserListMetadataType = GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata::class;
  protected $customerMatchUserListMetadataDataType = '';
  protected $operationsType = GoogleAdsSearchads360V23ServicesUserDataOperation::class;
  protected $operationsDataType = 'array';

  /**
   * Metadata for data updates to a Customer Match user list.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata $customerMatchUserListMetadata
   */
  public function setCustomerMatchUserListMetadata(GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata $customerMatchUserListMetadata)
  {
    $this->customerMatchUserListMetadata = $customerMatchUserListMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata
   */
  public function getCustomerMatchUserListMetadata()
  {
    return $this->customerMatchUserListMetadata;
  }
  /**
   * Required. The list of operations to be done.
   *
   * @param GoogleAdsSearchads360V23ServicesUserDataOperation[] $operations
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesUserDataOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUploadUserDataRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUploadUserDataRequest');
