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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1Point extends \Google\Model
{
  /**
   * @var int
   */
  public $character;
  /**
   * @var int
   */
  public $line;

  /**
   * @param int
   */
  public function setCharacter($character)
  {
    $this->character = $character;
  }
  /**
   * @return int
   */
  public function getCharacter()
  {
    return $this->character;
  }
  /**
   * @param int
   */
  public function setLine($line)
  {
    $this->line = $line;
  }
  /**
   * @return int
   */
  public function getLine()
  {
    return $this->line;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1Point::class, 'Google_Service_APIhub_GoogleCloudApihubV1Point');
