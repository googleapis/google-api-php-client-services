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

namespace Google\Service\CloudAsset;

class SavedQuery extends \Google\Model
{
  protected $contentType = QueryContent::class;
  protected $contentDataType = '';
  public $createTime;
  public $creator;
  public $description;
  public $labels;
  public $lastUpdateTime;
  public $lastUpdater;
  public $name;

  /**
   * @param QueryContent
   */
  public function setContent(QueryContent $content)
  {
    $this->content = $content;
  }
  /**
   * @return QueryContent
   */
  public function getContent()
  {
    return $this->content;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  public function getCreator()
  {
    return $this->creator;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  public function setLastUpdater($lastUpdater)
  {
    $this->lastUpdater = $lastUpdater;
  }
  public function getLastUpdater()
  {
    return $this->lastUpdater;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SavedQuery::class, 'Google_Service_CloudAsset_SavedQuery');
