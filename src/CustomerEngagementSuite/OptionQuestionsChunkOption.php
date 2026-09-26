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

namespace Google\Service\CustomerEngagementSuite;

class OptionQuestionsChunkOption extends \Google\Model
{
  /**
   * Optional trade-off details shown as secondary text.
   *
   * @var string
   */
  public $details;
  /**
   * Optional message text to send when the option is chosen; defaults to
   * `title` when empty.
   *
   * @var string
   */
  public $submitText;
  /**
   * Short plain-text option title (no markdown, no numbering).
   *
   * @var string
   */
  public $title;

  /**
   * Optional trade-off details shown as secondary text.
   *
   * @param string $details
   */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /**
   * @return string
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * Optional message text to send when the option is chosen; defaults to
   * `title` when empty.
   *
   * @param string $submitText
   */
  public function setSubmitText($submitText)
  {
    $this->submitText = $submitText;
  }
  /**
   * @return string
   */
  public function getSubmitText()
  {
    return $this->submitText;
  }
  /**
   * Short plain-text option title (no markdown, no numbering).
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OptionQuestionsChunkOption::class, 'Google_Service_CustomerEngagementSuite_OptionQuestionsChunkOption');
