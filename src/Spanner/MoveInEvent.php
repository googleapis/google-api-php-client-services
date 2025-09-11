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

namespace Google\Service\Spanner;

class MoveInEvent extends \Google\Model
{
  /**
   * @var string
   */
  public $sourcePartitionToken;

  /**
   * @param string
   */
  public function setSourcePartitionToken($sourcePartitionToken)
  {
    $this->sourcePartitionToken = $sourcePartitionToken;
  }
  /**
   * @return string
   */
  public function getSourcePartitionToken()
  {
    return $this->sourcePartitionToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoveInEvent::class, 'Google_Service_Spanner_MoveInEvent');
