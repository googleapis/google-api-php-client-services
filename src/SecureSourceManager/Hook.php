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

namespace Google\Service\SecureSourceManager;

class Hook extends \Google\Collection
{
  protected $collection_key = 'events';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var bool
   */
  public $disabled;
  /**
   * @var string[]
   */
  public $events;
  /**
   * @var string
   */
  public $name;
  protected $pushOptionType = PushOption::class;
  protected $pushOptionDataType = '';
  /**
   * @var string
   */
  public $sensitiveQueryString;
  /**
   * @var string
   */
  public $targetUri;
  /**
   * @var string
   */
  public $uid;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param bool
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * @param string[]
   */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /**
   * @return string[]
   */
  public function getEvents()
  {
    return $this->events;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param PushOption
   */
  public function setPushOption(PushOption $pushOption)
  {
    $this->pushOption = $pushOption;
  }
  /**
   * @return PushOption
   */
  public function getPushOption()
  {
    return $this->pushOption;
  }
  /**
   * @param string
   */
  public function setSensitiveQueryString($sensitiveQueryString)
  {
    $this->sensitiveQueryString = $sensitiveQueryString;
  }
  /**
   * @return string
   */
  public function getSensitiveQueryString()
  {
    return $this->sensitiveQueryString;
  }
  /**
   * @param string
   */
  public function setTargetUri($targetUri)
  {
    $this->targetUri = $targetUri;
  }
  /**
   * @return string
   */
  public function getTargetUri()
  {
    return $this->targetUri;
  }
  /**
   * @param string
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Hook::class, 'Google_Service_SecureSourceManager_Hook');
