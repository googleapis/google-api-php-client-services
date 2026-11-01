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

namespace Google\Service\Networkconnectivity;

class ExportPscConfig extends \Google\Model
{
  /**
   * Optional. Controls whether Private Service Connect endpoints for global
   * Google APIs should be propagated. The default value is false.
   *
   * @var bool
   */
  public $globalGoogleApis;
  /**
   * Optional. Controls whether Private Service Connect endpoints for regional
   * ILBs and regional Google APIs should be propagated. Default value is true
   * if export_psc is true. Otherwise, the default value is false.
   *
   * @var bool
   */
  public $publishedServicesAndRegionalGoogleApis;

  /**
   * Optional. Controls whether Private Service Connect endpoints for global
   * Google APIs should be propagated. The default value is false.
   *
   * @param bool $globalGoogleApis
   */
  public function setGlobalGoogleApis($globalGoogleApis)
  {
    $this->globalGoogleApis = $globalGoogleApis;
  }
  /**
   * @return bool
   */
  public function getGlobalGoogleApis()
  {
    return $this->globalGoogleApis;
  }
  /**
   * Optional. Controls whether Private Service Connect endpoints for regional
   * ILBs and regional Google APIs should be propagated. Default value is true
   * if export_psc is true. Otherwise, the default value is false.
   *
   * @param bool $publishedServicesAndRegionalGoogleApis
   */
  public function setPublishedServicesAndRegionalGoogleApis($publishedServicesAndRegionalGoogleApis)
  {
    $this->publishedServicesAndRegionalGoogleApis = $publishedServicesAndRegionalGoogleApis;
  }
  /**
   * @return bool
   */
  public function getPublishedServicesAndRegionalGoogleApis()
  {
    return $this->publishedServicesAndRegionalGoogleApis;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportPscConfig::class, 'Google_Service_Networkconnectivity_ExportPscConfig');
