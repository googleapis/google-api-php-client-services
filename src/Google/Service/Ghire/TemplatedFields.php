<?php
/*
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

class Google_Service_Ghire_TemplatedFields extends Google_Collection
{
  protected $collection_key = 'vertical';
  public $jobCode;
  public $jobDefinitionEntries;
  public $kind;
  public $level;
  protected $localJobDefinitionEntriesType = 'Google_Service_Ghire_JobDefinitionEntry';
  protected $localJobDefinitionEntriesDataType = 'array';
  protected $relatedJobType = 'Google_Service_Ghire_RelatedJob';
  protected $relatedJobDataType = 'array';
  protected $tagType = 'Google_Service_Ghire_Tag';
  protected $tagDataType = 'array';
  public $title;
  public $vertical;

  public function setJobCode($jobCode)
  {
    $this->jobCode = $jobCode;
  }
  public function getJobCode()
  {
    return $this->jobCode;
  }
  public function setJobDefinitionEntries($jobDefinitionEntries)
  {
    $this->jobDefinitionEntries = $jobDefinitionEntries;
  }
  public function getJobDefinitionEntries()
  {
    return $this->jobDefinitionEntries;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLevel($level)
  {
    $this->level = $level;
  }
  public function getLevel()
  {
    return $this->level;
  }
  public function setLocalJobDefinitionEntries($localJobDefinitionEntries)
  {
    $this->localJobDefinitionEntries = $localJobDefinitionEntries;
  }
  public function getLocalJobDefinitionEntries()
  {
    return $this->localJobDefinitionEntries;
  }
  public function setRelatedJob($relatedJob)
  {
    $this->relatedJob = $relatedJob;
  }
  public function getRelatedJob()
  {
    return $this->relatedJob;
  }
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setVertical($vertical)
  {
    $this->vertical = $vertical;
  }
  public function getVertical()
  {
    return $this->vertical;
  }
}
