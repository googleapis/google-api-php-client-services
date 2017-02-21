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

class Google_Service_Ghire_FeedbackItem extends Google_Collection
{
  protected $collection_key = 'detailSet';
  public $detailSet;
  public $detailType;
  public $details;
  public $detailsBoolean;
  public $detailsNumber;
  public $kind;
  public $mimeType;
  public $subject;
  public $type;
  public $updateDate;

  public function setDetailSet($detailSet)
  {
    $this->detailSet = $detailSet;
  }
  public function getDetailSet()
  {
    return $this->detailSet;
  }
  public function setDetailType($detailType)
  {
    $this->detailType = $detailType;
  }
  public function getDetailType()
  {
    return $this->detailType;
  }
  public function setDetails($details)
  {
    $this->details = $details;
  }
  public function getDetails()
  {
    return $this->details;
  }
  public function setDetailsBoolean($detailsBoolean)
  {
    $this->detailsBoolean = $detailsBoolean;
  }
  public function getDetailsBoolean()
  {
    return $this->detailsBoolean;
  }
  public function setDetailsNumber($detailsNumber)
  {
    $this->detailsNumber = $detailsNumber;
  }
  public function getDetailsNumber()
  {
    return $this->detailsNumber;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  public function getSubject()
  {
    return $this->subject;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUpdateDate($updateDate)
  {
    $this->updateDate = $updateDate;
  }
  public function getUpdateDate()
  {
    return $this->updateDate;
  }
}
