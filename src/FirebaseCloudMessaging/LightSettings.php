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

class LightSettings extends Model
{
  protected string $colorType = Color::class;
  protected string $colorDataType = '';
  protected string $lightOffDuration;
  protected string $lightOnDuration;
    private Color $color;

    /**
   * @param Color $color
   */
  public function setColor(Color $color): void
  {
    $this->color = $color;
  }

  /**
   * @return Color
   */
  public function getColor(): Color
  {
    return $this->color;
  }

  /**
   * @param string $lightOffDuration
   */
  public function setLightOffDuration(string $lightOffDuration): void
  {
    $this->lightOffDuration = $lightOffDuration;
  }

  /**
   * @return string
   */
  public function getLightOffDuration(): string
  {
    return $this->lightOffDuration;
  }

  /**
   * @param string $lightOnDuration
   */
  public function setLightOnDuration(string $lightOnDuration): void
  {
    $this->lightOnDuration = $lightOnDuration;
  }

  /**
   * @return string
   */
  public function getLightOnDuration(): string
  {
    return $this->lightOnDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LightSettings::class, 'Google_Service_FirebaseCloudMessaging_LightSettings');
