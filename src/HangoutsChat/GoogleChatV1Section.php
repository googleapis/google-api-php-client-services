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

class GoogleChatV1Section extends \Google\Model
{
  /**
   * Unspecified section type.
   */
  public const TYPE_SECTION_TYPE_UNSPECIFIED = 'SECTION_TYPE_UNSPECIFIED';
  /**
   * Custom section.
   */
  public const TYPE_CUSTOM_SECTION = 'CUSTOM_SECTION';
  /**
   * Default section containing [DIRECT_MESSAGE](https://developers.google.com/w
   * orkspace/chat/api/reference/rest/v1/spaces#spacetype) between two human
   * users or [GROUP_CHAT](https://developers.google.com/workspace/chat/api/refe
   * rence/rest/v1/spaces#spacetype) spaces that don't belong to any custom
   * section.
   */
  public const TYPE_DEFAULT_DIRECT_MESSAGES = 'DEFAULT_DIRECT_MESSAGES';
  /**
   * Default spaces that don't belong to any custom section.
   */
  public const TYPE_DEFAULT_SPACES = 'DEFAULT_SPACES';
  /**
   * Default section containing a user's installed apps.
   */
  public const TYPE_DEFAULT_APPS = 'DEFAULT_APPS';
  /**
   * Optional. The section's display name. Only populated for sections of type
   * `CUSTOM_SECTION`. Supports up to 80 characters. Required when creating a
   * `CUSTOM_SECTION`.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. Resource name of the section. For system sections, the section
   * ID is a constant string: - DEFAULT_DIRECT_MESSAGES:
   * `users/{user}/sections/default-direct-messages` - DEFAULT_SPACES:
   * `users/{user}/sections/default-spaces` - DEFAULT_APPS:
   * `users/{user}/sections/default-apps` Format:
   * `users/{user}/sections/{section}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The order of the section in relation to other sections.
   * Sections with a lower `sort_order` value appear before sections with a
   * higher value.
   *
   * @var int
   */
  public $sortOrder;
  /**
   * Required. The type of the section.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The section's display name. Only populated for sections of type
   * `CUSTOM_SECTION`. Supports up to 80 characters. Required when creating a
   * `CUSTOM_SECTION`.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Identifier. Resource name of the section. For system sections, the section
   * ID is a constant string: - DEFAULT_DIRECT_MESSAGES:
   * `users/{user}/sections/default-direct-messages` - DEFAULT_SPACES:
   * `users/{user}/sections/default-spaces` - DEFAULT_APPS:
   * `users/{user}/sections/default-apps` Format:
   * `users/{user}/sections/{section}`
   *
   * @param string $name
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
   * Output only. The order of the section in relation to other sections.
   * Sections with a lower `sort_order` value appear before sections with a
   * higher value.
   *
   * @param int $sortOrder
   */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /**
   * @return int
   */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
  /**
   * Required. The type of the section.
   *
   * Accepted values: SECTION_TYPE_UNSPECIFIED, CUSTOM_SECTION,
   * DEFAULT_DIRECT_MESSAGES, DEFAULT_SPACES, DEFAULT_APPS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChatV1Section::class, 'Google_Service_HangoutsChat_GoogleChatV1Section');
