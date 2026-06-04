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

class GoogleAdsSearchads360V23ServicesInsightsAudienceDefinition extends \Google\Model
{
  protected $audienceType = GoogleAdsSearchads360V23ServicesInsightsAudience::class;
  protected $audienceDataType = '';
  protected $baselineAudienceType = GoogleAdsSearchads360V23ServicesInsightsAudience::class;
  protected $baselineAudienceDataType = '';
  /**
   * Optional. The one-month range of historical data to use for insights, in
   * the format "yyyy-mm". If unset, insights will be returned for the last
   * thirty days of data.
   *
   * @var string
   */
  public $dataMonth;

  /**
   * Required. The audience of interest for which insights are being requested.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudience $audience
   */
  public function setAudience(GoogleAdsSearchads360V23ServicesInsightsAudience $audience)
  {
    $this->audience = $audience;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudience
   */
  public function getAudience()
  {
    return $this->audience;
  }
  /**
   * Optional. The baseline audience. The default, if unspecified, is all people
   * in the same country as the audience of interest.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudience $baselineAudience
   */
  public function setBaselineAudience(GoogleAdsSearchads360V23ServicesInsightsAudience $baselineAudience)
  {
    $this->baselineAudience = $baselineAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudience
   */
  public function getBaselineAudience()
  {
    return $this->baselineAudience;
  }
  /**
   * Optional. The one-month range of historical data to use for insights, in
   * the format "yyyy-mm". If unset, insights will be returned for the last
   * thirty days of data.
   *
   * @param string $dataMonth
   */
  public function setDataMonth($dataMonth)
  {
    $this->dataMonth = $dataMonth;
  }
  /**
   * @return string
   */
  public function getDataMonth()
  {
    return $this->dataMonth;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesInsightsAudienceDefinition::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesInsightsAudienceDefinition');
