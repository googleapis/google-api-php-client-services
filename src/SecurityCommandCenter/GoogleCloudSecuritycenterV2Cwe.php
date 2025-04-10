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

class GoogleCloudSecuritycenterV2Cwe extends \Google\Collection
{
  protected $collection_key = 'references';
  /**
   * @var string
   */
  public $id;
  protected $referencesType = GoogleCloudSecuritycenterV2Reference::class;
  protected $referencesDataType = 'array';

  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Reference[]
   */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Reference[]
   */
  public function getReferences()
  {
    return $this->references;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2Cwe::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Cwe');
