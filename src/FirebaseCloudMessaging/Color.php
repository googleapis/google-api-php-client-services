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

namespace Google\Service\FirebaseCloudMessaging;

use Google\Model;

class Color extends Model
{
  public float $alpha;
  public float $blue;
  public float $green;
  public float $red;

  /**
   * @param float $alpha
   */
  public function setAlpha(float $alpha): void
  {
    $this->alpha = $alpha;
  }

  /**
   * @return float
   */
  public function getAlpha(): float
  {
    return $this->alpha;
  }

  /**
   * @param float $blue
   */
  public function setBlue(float $blue): void
  {
    $this->blue = $blue;
  }

  /**
   * @return float
   */
  public function getBlue(): float
  {
    return $this->blue;
  }

  /**
   * @param float $green
   */
  public function setGreen(float $green): void
  {
    $this->green = $green;
  }

  /**
   * @return float
   */
  public function getGreen(): float
  {
    return $this->green;
  }

  /**
   * @param float $red
   */
  public function setRed(float $red): void
  {
    $this->red = $red;
  }

  /**
   * @return float
   */
  public function getRed(): float
  {
    return $this->red;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Color::class, 'Google_Service_FirebaseCloudMessaging_Color');
