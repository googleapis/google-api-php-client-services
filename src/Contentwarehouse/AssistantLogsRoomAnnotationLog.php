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

namespace Google\Service\Contentwarehouse;

class AssistantLogsRoomAnnotationLog extends \Google\Collection
{
  protected $collection_key = 'roomId';
  /**
   * @var string
   */
  public $rawTextFromQuery;
  /**
   * @var int
   */
  public $roomCount;
  /**
   * @var string[]
   */
  public $roomId;
  /**
   * @var string
   */
  public $type;
  /**
   * @var string
   */
  public $userDefinedName;

  /**
   * @param string
   */
  public function setRawTextFromQuery($rawTextFromQuery)
  {
    $this->rawTextFromQuery = $rawTextFromQuery;
  }
  /**
   * @return string
   */
  public function getRawTextFromQuery()
  {
    return $this->rawTextFromQuery;
  }
  /**
   * @param int
   */
  public function setRoomCount($roomCount)
  {
    $this->roomCount = $roomCount;
  }
  /**
   * @return int
   */
  public function getRoomCount()
  {
    return $this->roomCount;
  }
  /**
   * @param string[]
   */
  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }
  /**
   * @return string[]
   */
  public function getRoomId()
  {
    return $this->roomId;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param string
   */
  public function setUserDefinedName($userDefinedName)
  {
    $this->userDefinedName = $userDefinedName;
  }
  /**
   * @return string
   */
  public function getUserDefinedName()
  {
    return $this->userDefinedName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantLogsRoomAnnotationLog::class, 'Google_Service_Contentwarehouse_AssistantLogsRoomAnnotationLog');
