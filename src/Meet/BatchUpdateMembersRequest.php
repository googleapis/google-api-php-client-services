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

namespace Google\Service\Meet;

class BatchUpdateMembersRequest extends \Google\Collection
{
  protected $collection_key = 'requests';
  protected $requestsType = UpdateMemberRequest::class;
  protected $requestsDataType = 'array';
  /**
   * Optional. Top-level field mask used to specify the fields to be updated in
   * the member for all UpdateMemberRequests. There are 4 possible scenarios for
   * top-level and child field mask: 1. top-level and child field mask is
   * absent: All fields provided in the requests are updated, including deleting
   * fields not set in the requests. 2. top-level field mask is present but
   * child field mask is absent: The fields specified in the top-level field
   * mask are updated. 3. top-level and child field mask is present: The child
   * field mask must be the same as the top-level field mask. 4. top-level field
   * mask is absent but child field mask is present: It isn't supported and will
   * return an error.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Required. The request message specifying the resources to update. A maximum
   * of 500 members can be modified in a batch.
   *
   * @param UpdateMemberRequest[] $requests
   */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /**
   * @return UpdateMemberRequest[]
   */
  public function getRequests()
  {
    return $this->requests;
  }
  /**
   * Optional. Top-level field mask used to specify the fields to be updated in
   * the member for all UpdateMemberRequests. There are 4 possible scenarios for
   * top-level and child field mask: 1. top-level and child field mask is
   * absent: All fields provided in the requests are updated, including deleting
   * fields not set in the requests. 2. top-level field mask is present but
   * child field mask is absent: The fields specified in the top-level field
   * mask are updated. 3. top-level and child field mask is present: The child
   * field mask must be the same as the top-level field mask. 4. top-level field
   * mask is absent but child field mask is present: It isn't supported and will
   * return an error.
   *
   * @param string $updateMask
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdateMembersRequest::class, 'Google_Service_Meet_BatchUpdateMembersRequest');
