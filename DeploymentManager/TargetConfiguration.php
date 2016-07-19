<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_DeploymentManager_TargetConfiguration extends Google_Collection
{
  protected $collection_key = 'imports';
  public $config;
  public $imports;

  public function setConfig(Google_Service_DeploymentManager_ConfigFile $config)
  {
    $this->config = $config;
  }
  public function getConfig()
  {
    return $this->config;
  }
  public function setImports(array $imports)
  {
    foreach ($imports as $i) {
      if (!$i instanceof Google_Service_DeploymentManager_ImportFile) {
        throw new InvalidArgumentException('First argument to setImports must be an array of Google_Service_DeploymentManager_ImportFile');
      }
    }
    $this->imports = $imports;
  }
  public function getImports()
  {
    return $this->imports;
  }
}
