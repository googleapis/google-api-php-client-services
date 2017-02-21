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

class Google_Service_Ghire_Attachment extends Google_Collection
{
  protected $collection_key = 'applicationId';
  protected $aclEntryType = 'Google_Service_Ghire_AclEntry';
  protected $aclEntryDataType = 'array';
  public $applicationId;
  public $createDate;
  public $data;
  public $dataSize;
  public $deleteDate;
  public $deleted;
  public $filename;
  public $kind;
  protected $legacyAtsDataType = 'Google_Service_Ghire_LegacyAtsAttachmentData';
  protected $legacyAtsDataDataType = '';
  protected $locationType = 'Google_Service_Ghire_AttachmentLocation';
  protected $locationDataType = '';
  public $mimeType;
  public $searchableContent;
  public $type;
  public $url;

  public function setAclEntry($aclEntry)
  {
    $this->aclEntry = $aclEntry;
  }
  public function getAclEntry()
  {
    return $this->aclEntry;
  }
  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  public function setCreateDate($createDate)
  {
    $this->createDate = $createDate;
  }
  public function getCreateDate()
  {
    return $this->createDate;
  }
  public function setData($data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setDataSize($dataSize)
  {
    $this->dataSize = $dataSize;
  }
  public function getDataSize()
  {
    return $this->dataSize;
  }
  public function setDeleteDate($deleteDate)
  {
    $this->deleteDate = $deleteDate;
  }
  public function getDeleteDate()
  {
    return $this->deleteDate;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLegacyAtsData(Google_Service_Ghire_LegacyAtsAttachmentData $legacyAtsData)
  {
    $this->legacyAtsData = $legacyAtsData;
  }
  public function getLegacyAtsData()
  {
    return $this->legacyAtsData;
  }
  public function setLocation(Google_Service_Ghire_AttachmentLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setSearchableContent($searchableContent)
  {
    $this->searchableContent = $searchableContent;
  }
  public function getSearchableContent()
  {
    return $this->searchableContent;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}
