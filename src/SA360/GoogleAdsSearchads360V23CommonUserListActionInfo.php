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

class GoogleAdsSearchads360V23CommonUserListActionInfo extends \Google\Model
{
  /**
   * A conversion action that's not generated from remarketing.
   *
   * @var string
   */
  public $conversionAction;
  /**
   * A remarketing action.
   *
   * @var string
   */
  public $remarketingAction;

  /**
   * A conversion action that's not generated from remarketing.
   *
   * @param string $conversionAction
   */
  public function setConversionAction($conversionAction)
  {
    $this->conversionAction = $conversionAction;
  }
  /**
   * @return string
   */
  public function getConversionAction()
  {
    return $this->conversionAction;
  }
  /**
   * A remarketing action.
   *
   * @param string $remarketingAction
   */
  public function setRemarketingAction($remarketingAction)
  {
    $this->remarketingAction = $remarketingAction;
  }
  /**
   * @return string
   */
  public function getRemarketingAction()
  {
    return $this->remarketingAction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserListActionInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListActionInfo');
