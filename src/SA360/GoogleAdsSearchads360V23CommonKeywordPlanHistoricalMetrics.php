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

class GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const COMPETITION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const COMPETITION_UNKNOWN = 'UNKNOWN';
  /**
   * Low competition. The Competition Index range for this is [0, 33].
   */
  public const COMPETITION_LOW = 'LOW';
  /**
   * Medium competition. The Competition Index range for this is [34, 66].
   */
  public const COMPETITION_MEDIUM = 'MEDIUM';
  /**
   * High competition. The Competition Index range for this is [67, 100].
   */
  public const COMPETITION_HIGH = 'HIGH';
  protected $collection_key = 'monthlySearchVolumes';
  /**
   * Average Cost Per Click in micros for the keyword.
   *
   * @var string
   */
  public $averageCpcMicros;
  /**
   * Approximate number of monthly searches on this query, averaged for the past
   * 12 months.
   *
   * @var string
   */
  public $avgMonthlySearches;
  /**
   * The competition level for the query.
   *
   * @var string
   */
  public $competition;
  /**
   * The competition index for the query in the range [0, 100]. Shows how
   * competitive ad placement is for a keyword. The level of competition from
   * 0-100 is determined by the number of ad slots filled divided by the total
   * number of ad slots available. If not enough data is available, null is
   * returned.
   *
   * @var string
   */
  public $competitionIndex;
  /**
   * Top of page bid high range (80th percentile) in micros for the keyword.
   *
   * @var string
   */
  public $highTopOfPageBidMicros;
  /**
   * Top of page bid low range (20th percentile) in micros for the keyword.
   *
   * @var string
   */
  public $lowTopOfPageBidMicros;
  protected $monthlySearchVolumesType = GoogleAdsSearchads360V23CommonMonthlySearchVolume::class;
  protected $monthlySearchVolumesDataType = 'array';

  /**
   * Average Cost Per Click in micros for the keyword.
   *
   * @param string $averageCpcMicros
   */
  public function setAverageCpcMicros($averageCpcMicros)
  {
    $this->averageCpcMicros = $averageCpcMicros;
  }
  /**
   * @return string
   */
  public function getAverageCpcMicros()
  {
    return $this->averageCpcMicros;
  }
  /**
   * Approximate number of monthly searches on this query, averaged for the past
   * 12 months.
   *
   * @param string $avgMonthlySearches
   */
  public function setAvgMonthlySearches($avgMonthlySearches)
  {
    $this->avgMonthlySearches = $avgMonthlySearches;
  }
  /**
   * @return string
   */
  public function getAvgMonthlySearches()
  {
    return $this->avgMonthlySearches;
  }
  /**
   * The competition level for the query.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LOW, MEDIUM, HIGH
   *
   * @param self::COMPETITION_* $competition
   */
  public function setCompetition($competition)
  {
    $this->competition = $competition;
  }
  /**
   * @return self::COMPETITION_*
   */
  public function getCompetition()
  {
    return $this->competition;
  }
  /**
   * The competition index for the query in the range [0, 100]. Shows how
   * competitive ad placement is for a keyword. The level of competition from
   * 0-100 is determined by the number of ad slots filled divided by the total
   * number of ad slots available. If not enough data is available, null is
   * returned.
   *
   * @param string $competitionIndex
   */
  public function setCompetitionIndex($competitionIndex)
  {
    $this->competitionIndex = $competitionIndex;
  }
  /**
   * @return string
   */
  public function getCompetitionIndex()
  {
    return $this->competitionIndex;
  }
  /**
   * Top of page bid high range (80th percentile) in micros for the keyword.
   *
   * @param string $highTopOfPageBidMicros
   */
  public function setHighTopOfPageBidMicros($highTopOfPageBidMicros)
  {
    $this->highTopOfPageBidMicros = $highTopOfPageBidMicros;
  }
  /**
   * @return string
   */
  public function getHighTopOfPageBidMicros()
  {
    return $this->highTopOfPageBidMicros;
  }
  /**
   * Top of page bid low range (20th percentile) in micros for the keyword.
   *
   * @param string $lowTopOfPageBidMicros
   */
  public function setLowTopOfPageBidMicros($lowTopOfPageBidMicros)
  {
    $this->lowTopOfPageBidMicros = $lowTopOfPageBidMicros;
  }
  /**
   * @return string
   */
  public function getLowTopOfPageBidMicros()
  {
    return $this->lowTopOfPageBidMicros;
  }
  /**
   * Approximate number of searches on this query for the past twelve months.
   *
   * @param GoogleAdsSearchads360V23CommonMonthlySearchVolume[] $monthlySearchVolumes
   */
  public function setMonthlySearchVolumes($monthlySearchVolumes)
  {
    $this->monthlySearchVolumes = $monthlySearchVolumes;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMonthlySearchVolume[]
   */
  public function getMonthlySearchVolumes()
  {
    return $this->monthlySearchVolumes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonKeywordPlanHistoricalMetrics');
