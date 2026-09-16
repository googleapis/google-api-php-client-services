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

class BatchUpdateMembersResponse extends \Google\Collection
{
  protected $collection_key = 'members';
  protected $membersType = Member::class;
  protected $membersDataType = 'array';

  /**
   * Members updated.
   *
   * @param Member[] $members
   */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /**
   * @return Member[]
   */
  public function getMembers()
  {
    return $this->members;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdateMembersResponse::class, 'Google_Service_Meet_BatchUpdateMembersResponse');
