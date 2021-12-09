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

namespace Google\Service\SecurityCommandCenter;

class MitreAttack extends \Google\Collection
{
  protected $collection_key = 'primaryTechniques';
  public $additionalTactics;
  public $additionalTechniques;
  public $primaryTactic;
  public $primaryTechniques;
  public $version;

  public function setAdditionalTactics($additionalTactics)
  {
    $this->additionalTactics = $additionalTactics;
  }
  public function getAdditionalTactics()
  {
    return $this->additionalTactics;
  }
  public function setAdditionalTechniques($additionalTechniques)
  {
    $this->additionalTechniques = $additionalTechniques;
  }
  public function getAdditionalTechniques()
  {
    return $this->additionalTechniques;
  }
  public function setPrimaryTactic($primaryTactic)
  {
    $this->primaryTactic = $primaryTactic;
  }
  public function getPrimaryTactic()
  {
    return $this->primaryTactic;
  }
  public function setPrimaryTechniques($primaryTechniques)
  {
    $this->primaryTechniques = $primaryTechniques;
  }
  public function getPrimaryTechniques()
  {
    return $this->primaryTechniques;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MitreAttack::class, 'Google_Service_SecurityCommandCenter_MitreAttack');
