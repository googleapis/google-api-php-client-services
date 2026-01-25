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

namespace Google\Service\HangoutsChat;

class ForwardedMetadata extends \Google\Model
{
  /**
   * Output only. The resource name of the source space. Format: spaces/{space}
   *
   * @var string
   */
  public $space;
  /**
   * Output only. The display name of the source space or DM at the time of
   * forwarding. For `SPACE`, this is the space name. For `DIRECT_MESSAGE`, this
   * is the other participant's name (e.g., "User A"). For `GROUP_CHAT`, this is
   * a generated name based on members' first names, limited to 5 including the
   * creator (e.g., "User A, User B").
   *
   * @var string
   */
  public $spaceDisplayName;

  /**
   * Output only. The resource name of the source space. Format: spaces/{space}
   *
   * @param string $space
   */
  public function setSpace($space)
  {
    $this->space = $space;
  }
  /**
   * @return string
   */
  public function getSpace()
  {
    return $this->space;
  }
  /**
   * Output only. The display name of the source space or DM at the time of
   * forwarding. For `SPACE`, this is the space name. For `DIRECT_MESSAGE`, this
   * is the other participant's name (e.g., "User A"). For `GROUP_CHAT`, this is
   * a generated name based on members' first names, limited to 5 including the
   * creator (e.g., "User A, User B").
   *
   * @param string $spaceDisplayName
   */
  public function setSpaceDisplayName($spaceDisplayName)
  {
    $this->spaceDisplayName = $spaceDisplayName;
  }
  /**
   * @return string
   */
  public function getSpaceDisplayName()
  {
    return $this->spaceDisplayName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ForwardedMetadata::class, 'Google_Service_HangoutsChat_ForwardedMetadata');
