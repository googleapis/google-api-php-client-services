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

class Google_Service_Supportcases_Attribute extends Google_Collection
{
  protected $collection_key = 'entries';
  public $attributeId;
  public $attributeName;
  protected $entriesType = 'Google_Service_Supportcases_Entry';
  protected $entriesDataType = 'array';

  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
  }
}
