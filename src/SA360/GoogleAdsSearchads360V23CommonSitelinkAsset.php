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

class GoogleAdsSearchads360V23CommonSitelinkAsset extends \Google\Collection
{
  protected $collection_key = 'adScheduleTargets';
  protected $adScheduleTargetsType = GoogleAdsSearchads360V23CommonAdScheduleInfo::class;
  protected $adScheduleTargetsDataType = 'array';
  /**
   * First line of the description for the sitelink. If set, the length should
   * be between 1 and 35, inclusive, and description2 must also be set.
   *
   * @var string
   */
  public $description1;
  /**
   * Second line of the description for the sitelink. If set, the length should
   * be between 1 and 35, inclusive, and description1 must also be set.
   *
   * @var string
   */
  public $description2;
  /**
   * Last date of when this asset is effective and still serving, in yyyy-MM-dd
   * format.
   *
   * @var string
   */
  public $endDate;
  /**
   * Required. URL display text for the sitelink. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @var string
   */
  public $linkText;
  /**
   * Start date of when this asset is effective and can begin serving, in yyyy-
   * MM-dd format.
   *
   * @var string
   */
  public $startDate;

  /**
   * List of non-overlapping schedules specifying all time intervals for which
   * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
   * total.
   *
   * @param GoogleAdsSearchads360V23CommonAdScheduleInfo[] $adScheduleTargets
   */
  public function setAdScheduleTargets($adScheduleTargets)
  {
    $this->adScheduleTargets = $adScheduleTargets;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdScheduleInfo[]
   */
  public function getAdScheduleTargets()
  {
    return $this->adScheduleTargets;
  }
  /**
   * First line of the description for the sitelink. If set, the length should
   * be between 1 and 35, inclusive, and description2 must also be set.
   *
   * @param string $description1
   */
  public function setDescription1($description1)
  {
    $this->description1 = $description1;
  }
  /**
   * @return string
   */
  public function getDescription1()
  {
    return $this->description1;
  }
  /**
   * Second line of the description for the sitelink. If set, the length should
   * be between 1 and 35, inclusive, and description1 must also be set.
   *
   * @param string $description2
   */
  public function setDescription2($description2)
  {
    $this->description2 = $description2;
  }
  /**
   * @return string
   */
  public function getDescription2()
  {
    return $this->description2;
  }
  /**
   * Last date of when this asset is effective and still serving, in yyyy-MM-dd
   * format.
   *
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * Required. URL display text for the sitelink. The length of this string
   * should be between 1 and 25, inclusive.
   *
   * @param string $linkText
   */
  public function setLinkText($linkText)
  {
    $this->linkText = $linkText;
  }
  /**
   * @return string
   */
  public function getLinkText()
  {
    return $this->linkText;
  }
  /**
   * Start date of when this asset is effective and can begin serving, in yyyy-
   * MM-dd format.
   *
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonSitelinkAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonSitelinkAsset');
