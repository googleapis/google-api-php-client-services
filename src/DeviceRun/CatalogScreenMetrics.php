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

namespace Google\Service\DeviceRun;

class CatalogScreenMetrics extends \Google\Model
{
  /**
   * Output only. Pixel density in dots per inch (dpi).
   *
   * @var int
   */
  public $densityDpi;
  /**
   * Output only. Height in pixels.
   *
   * @var int
   */
  public $heightPx;
  /**
   * Output only. Width in pixels.
   *
   * @var int
   */
  public $widthPx;

  /**
   * Output only. Pixel density in dots per inch (dpi).
   *
   * @param int $densityDpi
   */
  public function setDensityDpi($densityDpi)
  {
    $this->densityDpi = $densityDpi;
  }
  /**
   * @return int
   */
  public function getDensityDpi()
  {
    return $this->densityDpi;
  }
  /**
   * Output only. Height in pixels.
   *
   * @param int $heightPx
   */
  public function setHeightPx($heightPx)
  {
    $this->heightPx = $heightPx;
  }
  /**
   * @return int
   */
  public function getHeightPx()
  {
    return $this->heightPx;
  }
  /**
   * Output only. Width in pixels.
   *
   * @param int $widthPx
   */
  public function setWidthPx($widthPx)
  {
    $this->widthPx = $widthPx;
  }
  /**
   * @return int
   */
  public function getWidthPx()
  {
    return $this->widthPx;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogScreenMetrics::class, 'Google_Service_DeviceRun_CatalogScreenMetrics');
