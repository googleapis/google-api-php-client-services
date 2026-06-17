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

class EmissionsMetadata extends \Google\Model
{
  protected $easaLabelMetadataType = EasaLabelMetadata::class;
  protected $easaLabelMetadataDataType = '';
  protected $emissionsProvenanceType = EmissionsProvenance::class;
  protected $emissionsProvenanceDataType = '';
  /**
   * Output only. Link to the `travelimpactmodel.org` Emissions Calculator
   * website. Example:
   * https://travelimpactmodel.org/lookup/flight?itinerary=ZRH-BOS-
   * LX-52-20261225.
   *
   * @var string
   */
  public $timWebsiteEmissionsCalculatorUrl;

  /**
   * Output only. Metadata about the EASA Flight Emissions Label. Only set when
   * the emissions data source is EASA.
   *
   * @param EasaLabelMetadata $easaLabelMetadata
   */
  public function setEasaLabelMetadata(EasaLabelMetadata $easaLabelMetadata)
  {
    $this->easaLabelMetadata = $easaLabelMetadata;
  }
  /**
   * @return EasaLabelMetadata
   */
  public function getEasaLabelMetadata()
  {
    return $this->easaLabelMetadata;
  }
  /**
   * Output only. Details about the provenance of data used to calculate the
   * emissions data, including the contributing factors with their data sources.
   *
   * @param EmissionsProvenance $emissionsProvenance
   */
  public function setEmissionsProvenance(EmissionsProvenance $emissionsProvenance)
  {
    $this->emissionsProvenance = $emissionsProvenance;
  }
  /**
   * @return EmissionsProvenance
   */
  public function getEmissionsProvenance()
  {
    return $this->emissionsProvenance;
  }
  /**
   * Output only. Link to the `travelimpactmodel.org` Emissions Calculator
   * website. Example:
   * https://travelimpactmodel.org/lookup/flight?itinerary=ZRH-BOS-
   * LX-52-20261225.
   *
   * @param string $timWebsiteEmissionsCalculatorUrl
   */
  public function setTimWebsiteEmissionsCalculatorUrl($timWebsiteEmissionsCalculatorUrl)
  {
    $this->timWebsiteEmissionsCalculatorUrl = $timWebsiteEmissionsCalculatorUrl;
  }
  /**
   * @return string
   */
  public function getTimWebsiteEmissionsCalculatorUrl()
  {
    return $this->timWebsiteEmissionsCalculatorUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EmissionsMetadata::class, 'Google_Service_TravelImpactModel_EmissionsMetadata');
