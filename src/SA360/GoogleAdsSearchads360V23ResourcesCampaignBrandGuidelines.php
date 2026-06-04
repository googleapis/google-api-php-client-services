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

class GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines extends \Google\Model
{
  /**
   * The accent brand color, entered as a hex code (e.g., #00ff00). You must
   * provide the accent_color if you provide a main_color.
   *
   * @var string
   */
  public $accentColor;
  /**
   * The main brand color, entered as a hex code (e.g., #00ff00). You must
   * provide the main_color if you provide an accent_color.
   *
   * @var string
   */
  public $mainColor;
  /**
   * The brand's font family. Must be one of the following Google Fonts (case
   * sensitive): Open Sans, Roboto, Montserrat, Poppins, Lato, Oswald, Playfair
   * Display, Roboto Slab.
   *
   * @var string
   */
  public $predefinedFontFamily;

  /**
   * The accent brand color, entered as a hex code (e.g., #00ff00). You must
   * provide the accent_color if you provide a main_color.
   *
   * @param string $accentColor
   */
  public function setAccentColor($accentColor)
  {
    $this->accentColor = $accentColor;
  }
  /**
   * @return string
   */
  public function getAccentColor()
  {
    return $this->accentColor;
  }
  /**
   * The main brand color, entered as a hex code (e.g., #00ff00). You must
   * provide the main_color if you provide an accent_color.
   *
   * @param string $mainColor
   */
  public function setMainColor($mainColor)
  {
    $this->mainColor = $mainColor;
  }
  /**
   * @return string
   */
  public function getMainColor()
  {
    return $this->mainColor;
  }
  /**
   * The brand's font family. Must be one of the following Google Fonts (case
   * sensitive): Open Sans, Roboto, Montserrat, Poppins, Lato, Oswald, Playfair
   * Display, Roboto Slab.
   *
   * @param string $predefinedFontFamily
   */
  public function setPredefinedFontFamily($predefinedFontFamily)
  {
    $this->predefinedFontFamily = $predefinedFontFamily;
  }
  /**
   * @return string
   */
  public function getPredefinedFontFamily()
  {
    return $this->predefinedFontFamily;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignBrandGuidelines');
