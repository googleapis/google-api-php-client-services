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

class GoogleAdsSearchads360V23CommonKeyword extends \Google\Model
{
  /**
   * The AdGroupCriterion resource name.
   *
   * @var string
   */
  public $adGroupCriterion;
  protected $infoType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $infoDataType = '';

  /**
   * The AdGroupCriterion resource name.
   *
   * @param string $adGroupCriterion
   */
  public function setAdGroupCriterion($adGroupCriterion)
  {
    $this->adGroupCriterion = $adGroupCriterion;
  }
  /**
   * @return string
   */
  public function getAdGroupCriterion()
  {
    return $this->adGroupCriterion;
  }
  /**
   * Keyword info.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo $info
   */
  public function setInfo(GoogleAdsSearchads360V23CommonKeywordInfo $info)
  {
    $this->info = $info;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo
   */
  public function getInfo()
  {
    return $this->info;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonKeyword::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonKeyword');
