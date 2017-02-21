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

class Google_Service_Ghire_Description extends Google_Model
{
  public $deleted;
  public $departmentOverview;
  public $description;
  public $descriptionId;
  public $kind;
  public $language;
  public $requirements;
  public $responsibilities;
  public $title;

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setDepartmentOverview($departmentOverview)
  {
    $this->departmentOverview = $departmentOverview;
  }
  public function getDepartmentOverview()
  {
    return $this->departmentOverview;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDescriptionId($descriptionId)
  {
    $this->descriptionId = $descriptionId;
  }
  public function getDescriptionId()
  {
    return $this->descriptionId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  public function getLanguage()
  {
    return $this->language;
  }
  public function setRequirements($requirements)
  {
    $this->requirements = $requirements;
  }
  public function getRequirements()
  {
    return $this->requirements;
  }
  public function setResponsibilities($responsibilities)
  {
    $this->responsibilities = $responsibilities;
  }
  public function getResponsibilities()
  {
    return $this->responsibilities;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}
