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

class Audience extends \Google\Model
{
  /**
   * The resource name of the [target
   * audience](https://support.google.com/a/answer/9934697) who can discover or
   * join the space. For details, see [Make a space discoverable to a target
   * audience](https://developers.google.com/workspace/chat/space-target-
   * audience). Format: `audiences/{audience}` To use the default target
   * audience for the Google Workspace organization, set to `audiences/default`.
   *
   * @var string
   */
  public $name;

  /**
   * The resource name of the [target
   * audience](https://support.google.com/a/answer/9934697) who can discover or
   * join the space. For details, see [Make a space discoverable to a target
   * audience](https://developers.google.com/workspace/chat/space-target-
   * audience). Format: `audiences/{audience}` To use the default target
   * audience for the Google Workspace organization, set to `audiences/default`.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Audience::class, 'Google_Service_HangoutsChat_Audience');
