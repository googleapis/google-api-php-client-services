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

class Google_Service_Discovery_RestResource extends Google_Model
{
  protected $methodsType = 'Google_Service_Discovery_RestMethod';
  protected $methodsDataType = 'map';
  protected $resourcesType = 'Google_Service_Discovery_RestResource';
  protected $resourcesDataType = 'map';

  /**
   * @param Google_Service_Discovery_RestMethod
   */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /**
   * @return Google_Service_Discovery_RestMethod
   */
  public function getMethods()
  {
    return $this->methods;
  }
  /**
   * @param Google_Service_Discovery_RestResource
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return Google_Service_Discovery_RestResource
   */
  public function getResources()
  {
    return $this->resources;
  }
}
