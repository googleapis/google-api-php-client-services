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

class GoogleAdsSearchads360V23ServicesYouTubeSelectLineUp extends \Google\Model
{
  /**
   * The ID of the YouTube Select Lineup.
   *
   * @var string
   */
  public $lineupId;
  /**
   * The unique name of the YouTube Select Lineup.
   *
   * @var string
   */
  public $lineupName;

  /**
   * The ID of the YouTube Select Lineup.
   *
   * @param string $lineupId
   */
  public function setLineupId($lineupId)
  {
    $this->lineupId = $lineupId;
  }
  /**
   * @return string
   */
  public function getLineupId()
  {
    return $this->lineupId;
  }
  /**
   * The unique name of the YouTube Select Lineup.
   *
   * @param string $lineupName
   */
  public function setLineupName($lineupName)
  {
    $this->lineupName = $lineupName;
  }
  /**
   * @return string
   */
  public function getLineupName()
  {
    return $this->lineupName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesYouTubeSelectLineUp::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesYouTubeSelectLineUp');
