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

namespace Google\Service\CivicInfo;

class CivicinfoSchemaV2Office extends \Google\Collection
{
  protected $collection_key = 'sources';
  /**
   * @var string
   */
  public $divisionId;
  /**
   * @var string[]
   */
  public $levels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string[]
   */
  public $officialIndices;
  /**
   * @var string[]
   */
  public $roles;
  protected $sourcesType = CivicinfoSchemaV2Source::class;
  protected $sourcesDataType = 'array';

  /**
   * @param string
   */
  public function setDivisionId($divisionId)
  {
    $this->divisionId = $divisionId;
  }
  /**
   * @return string
   */
  public function getDivisionId()
  {
    return $this->divisionId;
  }
  /**
   * @param string[]
   */
  public function setLevels($levels)
  {
    $this->levels = $levels;
  }
  /**
   * @return string[]
   */
  public function getLevels()
  {
    return $this->levels;
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
   * @param string[]
   */
  public function setOfficialIndices($officialIndices)
  {
    $this->officialIndices = $officialIndices;
  }
  /**
   * @return string[]
   */
  public function getOfficialIndices()
  {
    return $this->officialIndices;
  }
  /**
   * @param string[]
   */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /**
   * @return string[]
   */
  public function getRoles()
  {
    return $this->roles;
  }
  /**
   * @param CivicinfoSchemaV2Source[]
   */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /**
   * @return CivicinfoSchemaV2Source[]
   */
  public function getSources()
  {
    return $this->sources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CivicinfoSchemaV2Office::class, 'Google_Service_CivicInfo_CivicinfoSchemaV2Office');
