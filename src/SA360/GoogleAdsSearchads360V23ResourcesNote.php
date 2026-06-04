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

class GoogleAdsSearchads360V23ResourcesNote extends \Google\Model
{
  /**
   * Output only. Content of lead note.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The date time when lead note was edited. The format is "YYYY-
   * MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples: "2018-03-05
   * 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $editDateTime;

  /**
   * Output only. Content of lead note.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The date time when lead note was edited. The format is "YYYY-
   * MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples: "2018-03-05
   * 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $editDateTime
   */
  public function setEditDateTime($editDateTime)
  {
    $this->editDateTime = $editDateTime;
  }
  /**
   * @return string
   */
  public function getEditDateTime()
  {
    return $this->editDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesNote::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesNote');
