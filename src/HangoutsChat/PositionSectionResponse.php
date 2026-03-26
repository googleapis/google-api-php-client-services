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

class PositionSectionResponse extends \Google\Model
{
  protected $sectionType = GoogleChatV1Section::class;
  protected $sectionDataType = '';

  /**
   * The updated section.
   *
   * @param GoogleChatV1Section $section
   */
  public function setSection(GoogleChatV1Section $section)
  {
    $this->section = $section;
  }
  /**
   * @return GoogleChatV1Section
   */
  public function getSection()
  {
    return $this->section;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PositionSectionResponse::class, 'Google_Service_HangoutsChat_PositionSectionResponse');
