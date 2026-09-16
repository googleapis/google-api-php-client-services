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

class UpdateMemberRequest extends \Google\Model
{
  protected $memberType = Member::class;
  protected $memberDataType = '';
  /**
   * Optional. Field mask used to specify the fields to be updated in the
   * member. If update_mask isn't provided(not set, set with empty paths, or
   * only has "" as paths), it defaults to update all fields provided with
   * values in the request. Using "*" as update_mask will update all fields,
   * including deleting fields not set in the request. In case of BatchUpdate,
   * it must be absent or the same as the update_mask in
   * BatchUpdateMembersRequest when UpdateMemberRequest is built as a child
   * request of BatchUpdateMembersRequest.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Required. The Member to update. Format: spaces/{space}/members/{member}
   *
   * @param Member $member
   */
  public function setMember(Member $member)
  {
    $this->member = $member;
  }
  /**
   * @return Member
   */
  public function getMember()
  {
    return $this->member;
  }
  /**
   * Optional. Field mask used to specify the fields to be updated in the
   * member. If update_mask isn't provided(not set, set with empty paths, or
   * only has "" as paths), it defaults to update all fields provided with
   * values in the request. Using "*" as update_mask will update all fields,
   * including deleting fields not set in the request. In case of BatchUpdate,
   * it must be absent or the same as the update_mask in
   * BatchUpdateMembersRequest when UpdateMemberRequest is built as a child
   * request of BatchUpdateMembersRequest.
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
class_alias(UpdateMemberRequest::class, 'Google_Service_Meet_UpdateMemberRequest');
