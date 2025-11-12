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

namespace Google\Service\DisplayVideo;

class AdPolicyTopicAppealInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $appealFormLink;
  /**
   * @var string
   */
  public $appealType;

  /**
   * @param string
   */
  public function setAppealFormLink($appealFormLink)
  {
    $this->appealFormLink = $appealFormLink;
  }
  /**
   * @return string
   */
  public function getAppealFormLink()
  {
    return $this->appealFormLink;
  }
  /**
   * @param string
   */
  public function setAppealType($appealType)
  {
    $this->appealType = $appealType;
  }
  /**
   * @return string
   */
  public function getAppealType()
  {
    return $this->appealType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdPolicyTopicAppealInfo::class, 'Google_Service_DisplayVideo_AdPolicyTopicAppealInfo');
