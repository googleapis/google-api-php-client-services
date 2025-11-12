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

namespace Google\Service\Dfareporting;

class YoutubeSettings extends \Google\Collection
{
  protected $collection_key = 'longHeadlines';
  /**
   * @var string[]
   */
  public $businessLogoCreativeIds;
  /**
   * @var string
   */
  public $businessName;
  /**
   * @var string[]
   */
  public $callToActions;
  /**
   * @var string[]
   */
  public $descriptions;
  /**
   * @var string[]
   */
  public $headlines;
  /**
   * @var string[]
   */
  public $longHeadlines;

  /**
   * @param string[]
   */
  public function setBusinessLogoCreativeIds($businessLogoCreativeIds)
  {
    $this->businessLogoCreativeIds = $businessLogoCreativeIds;
  }
  /**
   * @return string[]
   */
  public function getBusinessLogoCreativeIds()
  {
    return $this->businessLogoCreativeIds;
  }
  /**
   * @param string
   */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return string
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * @param string[]
   */
  public function setCallToActions($callToActions)
  {
    $this->callToActions = $callToActions;
  }
  /**
   * @return string[]
   */
  public function getCallToActions()
  {
    return $this->callToActions;
  }
  /**
   * @param string[]
   */
  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  /**
   * @return string[]
   */
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  /**
   * @param string[]
   */
  public function setHeadlines($headlines)
  {
    $this->headlines = $headlines;
  }
  /**
   * @return string[]
   */
  public function getHeadlines()
  {
    return $this->headlines;
  }
  /**
   * @param string[]
   */
  public function setLongHeadlines($longHeadlines)
  {
    $this->longHeadlines = $longHeadlines;
  }
  /**
   * @return string[]
   */
  public function getLongHeadlines()
  {
    return $this->longHeadlines;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeSettings::class, 'Google_Service_Dfareporting_YoutubeSettings');
