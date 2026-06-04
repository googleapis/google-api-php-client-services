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

class GoogleAdsSearchads360V23ResourcesCampaignVanityPharma extends \Google\Model
{
  /**
   * Not specified.
   */
  public const VANITY_PHARMA_DISPLAY_URL_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VANITY_PHARMA_DISPLAY_URL_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * Replace vanity pharma URL with manufacturer website url.
   */
  public const VANITY_PHARMA_DISPLAY_URL_MODE_MANUFACTURER_WEBSITE_URL = 'MANUFACTURER_WEBSITE_URL';
  /**
   * Replace vanity pharma URL with description of the website.
   */
  public const VANITY_PHARMA_DISPLAY_URL_MODE_WEBSITE_DESCRIPTION = 'WEBSITE_DESCRIPTION';
  /**
   * Not specified.
   */
  public const VANITY_PHARMA_TEXT_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const VANITY_PHARMA_TEXT_UNKNOWN = 'UNKNOWN';
  /**
   * Prescription treatment website with website content in English.
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_TREATMENT_WEBSITE_EN = 'PRESCRIPTION_TREATMENT_WEBSITE_EN';
  /**
   * Prescription treatment website with website content in Spanish (Sitio de
   * tratamientos con receta).
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_TREATMENT_WEBSITE_ES = 'PRESCRIPTION_TREATMENT_WEBSITE_ES';
  /**
   * Prescription device website with website content in English.
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_DEVICE_WEBSITE_EN = 'PRESCRIPTION_DEVICE_WEBSITE_EN';
  /**
   * Prescription device website with website content in Spanish (Sitio de
   * dispositivos con receta).
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_DEVICE_WEBSITE_ES = 'PRESCRIPTION_DEVICE_WEBSITE_ES';
  /**
   * Medical device website with website content in English.
   */
  public const VANITY_PHARMA_TEXT_MEDICAL_DEVICE_WEBSITE_EN = 'MEDICAL_DEVICE_WEBSITE_EN';
  /**
   * Medical device website with website content in Spanish (Sitio de
   * dispositivos médicos).
   */
  public const VANITY_PHARMA_TEXT_MEDICAL_DEVICE_WEBSITE_ES = 'MEDICAL_DEVICE_WEBSITE_ES';
  /**
   * Preventative treatment website with website content in English.
   */
  public const VANITY_PHARMA_TEXT_PREVENTATIVE_TREATMENT_WEBSITE_EN = 'PREVENTATIVE_TREATMENT_WEBSITE_EN';
  /**
   * Preventative treatment website with website content in Spanish (Sitio de
   * tratamientos preventivos).
   */
  public const VANITY_PHARMA_TEXT_PREVENTATIVE_TREATMENT_WEBSITE_ES = 'PREVENTATIVE_TREATMENT_WEBSITE_ES';
  /**
   * Prescription contraception website with website content in English.
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_CONTRACEPTION_WEBSITE_EN = 'PRESCRIPTION_CONTRACEPTION_WEBSITE_EN';
  /**
   * Prescription contraception website with website content in Spanish (Sitio
   * de anticonceptivos con receta).
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_CONTRACEPTION_WEBSITE_ES = 'PRESCRIPTION_CONTRACEPTION_WEBSITE_ES';
  /**
   * Prescription vaccine website with website content in English.
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_VACCINE_WEBSITE_EN = 'PRESCRIPTION_VACCINE_WEBSITE_EN';
  /**
   * Prescription vaccine website with website content in Spanish (Sitio de
   * vacunas con receta).
   */
  public const VANITY_PHARMA_TEXT_PRESCRIPTION_VACCINE_WEBSITE_ES = 'PRESCRIPTION_VACCINE_WEBSITE_ES';
  /**
   * The display mode for vanity pharma URLs.
   *
   * @var string
   */
  public $vanityPharmaDisplayUrlMode;
  /**
   * The text that will be displayed in display URL of the text ad when website
   * description is the selected display mode for vanity pharma URLs.
   *
   * @var string
   */
  public $vanityPharmaText;

  /**
   * The display mode for vanity pharma URLs.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MANUFACTURER_WEBSITE_URL,
   * WEBSITE_DESCRIPTION
   *
   * @param self::VANITY_PHARMA_DISPLAY_URL_MODE_* $vanityPharmaDisplayUrlMode
   */
  public function setVanityPharmaDisplayUrlMode($vanityPharmaDisplayUrlMode)
  {
    $this->vanityPharmaDisplayUrlMode = $vanityPharmaDisplayUrlMode;
  }
  /**
   * @return self::VANITY_PHARMA_DISPLAY_URL_MODE_*
   */
  public function getVanityPharmaDisplayUrlMode()
  {
    return $this->vanityPharmaDisplayUrlMode;
  }
  /**
   * The text that will be displayed in display URL of the text ad when website
   * description is the selected display mode for vanity pharma URLs.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PRESCRIPTION_TREATMENT_WEBSITE_EN,
   * PRESCRIPTION_TREATMENT_WEBSITE_ES, PRESCRIPTION_DEVICE_WEBSITE_EN,
   * PRESCRIPTION_DEVICE_WEBSITE_ES, MEDICAL_DEVICE_WEBSITE_EN,
   * MEDICAL_DEVICE_WEBSITE_ES, PREVENTATIVE_TREATMENT_WEBSITE_EN,
   * PREVENTATIVE_TREATMENT_WEBSITE_ES, PRESCRIPTION_CONTRACEPTION_WEBSITE_EN,
   * PRESCRIPTION_CONTRACEPTION_WEBSITE_ES, PRESCRIPTION_VACCINE_WEBSITE_EN,
   * PRESCRIPTION_VACCINE_WEBSITE_ES
   *
   * @param self::VANITY_PHARMA_TEXT_* $vanityPharmaText
   */
  public function setVanityPharmaText($vanityPharmaText)
  {
    $this->vanityPharmaText = $vanityPharmaText;
  }
  /**
   * @return self::VANITY_PHARMA_TEXT_*
   */
  public function getVanityPharmaText()
  {
    return $this->vanityPharmaText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignVanityPharma::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignVanityPharma');
