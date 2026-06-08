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

namespace Google\Service\Aiplatform;

class CloudAiLargeModelsVisionSeamless extends \Google\Model
{
  /**
   * If true, the generated video will be loopable (seamless time looping).
   *
   * @var bool
   */
  public $loop;
  /**
   * If true, the generated video will be tessellatable as a horizontal
   * tessellation.
   *
   * @var bool
   */
  public $tessellateHorizontal;
  /**
   * If true, the generated video will be tessellatable as a vertical
   * tessellation.
   *
   * @var bool
   */
  public $tessellateVertical;

  /**
   * If true, the generated video will be loopable (seamless time looping).
   *
   * @param bool $loop
   */
  public function setLoop($loop)
  {
    $this->loop = $loop;
  }
  /**
   * @return bool
   */
  public function getLoop()
  {
    return $this->loop;
  }
  /**
   * If true, the generated video will be tessellatable as a horizontal
   * tessellation.
   *
   * @param bool $tessellateHorizontal
   */
  public function setTessellateHorizontal($tessellateHorizontal)
  {
    $this->tessellateHorizontal = $tessellateHorizontal;
  }
  /**
   * @return bool
   */
  public function getTessellateHorizontal()
  {
    return $this->tessellateHorizontal;
  }
  /**
   * If true, the generated video will be tessellatable as a vertical
   * tessellation.
   *
   * @param bool $tessellateVertical
   */
  public function setTessellateVertical($tessellateVertical)
  {
    $this->tessellateVertical = $tessellateVertical;
  }
  /**
   * @return bool
   */
  public function getTessellateVertical()
  {
    return $this->tessellateVertical;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionSeamless::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionSeamless');
