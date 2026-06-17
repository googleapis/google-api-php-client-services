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

namespace Google\Service\TravelImpactModel;

class FlightEmissionsDetails extends \Google\Model
{
  /**
   * The contrails impact is unspecified.
   */
  public const CONTRAILS_IMPACT_BUCKET_CONTRAILS_IMPACT_UNSPECIFIED = 'CONTRAILS_IMPACT_UNSPECIFIED';
  /**
   * The contrails impact is negligible compared to the total CO2e emissions.
   */
  public const CONTRAILS_IMPACT_BUCKET_CONTRAILS_IMPACT_NEGLIGIBLE = 'CONTRAILS_IMPACT_NEGLIGIBLE';
  /**
   * The contrails impact is comparable to the total CO2e emissions.
   */
  public const CONTRAILS_IMPACT_BUCKET_CONTRAILS_IMPACT_MODERATE = 'CONTRAILS_IMPACT_MODERATE';
  /**
   * The contrails impact is higher than the total CO2e emissions impact.
   */
  public const CONTRAILS_IMPACT_BUCKET_CONTRAILS_IMPACT_SEVERE = 'CONTRAILS_IMPACT_SEVERE';
  /**
   * The source of the emissions data is unspecified.
   */
  public const SOURCE_SOURCE_UNSPECIFIED = 'SOURCE_UNSPECIFIED';
  /**
   * The emissions data is from the Travel Impact Model.
   */
  public const SOURCE_TIM = 'TIM';
  /**
   * The emissions data is from the EASA environmental labels.
   */
  public const SOURCE_EASA = 'EASA';
  /**
   * Output only. The significance of contrails warming impact compared to the
   * total CO2e emissions impact.
   *
   * @var string
   */
  public $contrailsImpactBucket;
  protected $emissionsBreakdownType = EmissionsBreakdown::class;
  protected $emissionsBreakdownDataType = '';
  protected $emissionsGramsPerPaxType = EmissionsGramsPerPax::class;
  protected $emissionsGramsPerPaxDataType = '';
  /**
   * Output only. The source of the emissions data.
   *
   * @var string
   */
  public $source;

  /**
   * Output only. The significance of contrails warming impact compared to the
   * total CO2e emissions impact.
   *
   * Accepted values: CONTRAILS_IMPACT_UNSPECIFIED, CONTRAILS_IMPACT_NEGLIGIBLE,
   * CONTRAILS_IMPACT_MODERATE, CONTRAILS_IMPACT_SEVERE
   *
   * @param self::CONTRAILS_IMPACT_BUCKET_* $contrailsImpactBucket
   */
  public function setContrailsImpactBucket($contrailsImpactBucket)
  {
    $this->contrailsImpactBucket = $contrailsImpactBucket;
  }
  /**
   * @return self::CONTRAILS_IMPACT_BUCKET_*
   */
  public function getContrailsImpactBucket()
  {
    return $this->contrailsImpactBucket;
  }
  /**
   * Output only. Details about the various emissions portions of the total
   * emissions_grams_per_pax value. The value of the summed breakdowns should
   * always equal emissions_grams_per_pax.
   *
   * @param EmissionsBreakdown $emissionsBreakdown
   */
  public function setEmissionsBreakdown(EmissionsBreakdown $emissionsBreakdown)
  {
    $this->emissionsBreakdown = $emissionsBreakdown;
  }
  /**
   * @return EmissionsBreakdown
   */
  public function getEmissionsBreakdown()
  {
    return $this->emissionsBreakdown;
  }
  /**
   * Output only. Per-passenger emission estimate numbers. Will not be present
   * if emissions could not be computed. For the list of reasons why emissions
   * could not be computed, see ComputeDetailedFlightEmissions
   *
   * @param EmissionsGramsPerPax $emissionsGramsPerPax
   */
  public function setEmissionsGramsPerPax(EmissionsGramsPerPax $emissionsGramsPerPax)
  {
    $this->emissionsGramsPerPax = $emissionsGramsPerPax;
  }
  /**
   * @return EmissionsGramsPerPax
   */
  public function getEmissionsGramsPerPax()
  {
    return $this->emissionsGramsPerPax;
  }
  /**
   * Output only. The source of the emissions data.
   *
   * Accepted values: SOURCE_UNSPECIFIED, TIM, EASA
   *
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlightEmissionsDetails::class, 'Google_Service_TravelImpactModel_FlightEmissionsDetails');
