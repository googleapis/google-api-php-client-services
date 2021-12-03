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

namespace Google\Service\Datastream;

class StreamObject extends \Google\Collection
{
  protected $collection_key = 'errors';
  protected $backfillJobType = BackfillJob::class;
  protected $backfillJobDataType = '';
  public $createTime;
  public $displayName;
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  public $name;
  protected $sourceObjectType = SourceObjectIdentifier::class;
  protected $sourceObjectDataType = '';
  public $updateTime;

  /**
   * @param BackfillJob
   */
  public function setBackfillJob(BackfillJob $backfillJob)
  {
    $this->backfillJob = $backfillJob;
  }
  /**
   * @return BackfillJob
   */
  public function getBackfillJob()
  {
    return $this->backfillJob;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param Error[]
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Error[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param SourceObjectIdentifier
   */
  public function setSourceObject(SourceObjectIdentifier $sourceObject)
  {
    $this->sourceObject = $sourceObject;
  }
  /**
   * @return SourceObjectIdentifier
   */
  public function getSourceObject()
  {
    return $this->sourceObject;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StreamObject::class, 'Google_Service_Datastream_StreamObject');
