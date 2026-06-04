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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesLocalServicesSettings extends \Google\Collection
{
  protected $collection_key = 'granularLicenseStatuses';
  protected $granularInsuranceStatusesType = GoogleAdsSearchads360V23ResourcesGranularInsuranceStatus::class;
  protected $granularInsuranceStatusesDataType = 'array';
  protected $granularLicenseStatusesType = GoogleAdsSearchads360V23ResourcesGranularLicenseStatus::class;
  protected $granularLicenseStatusesDataType = 'array';

  /**
   * Output only. A read-only list of geo vertical level insurance statuses.
   *
   * @param GoogleAdsSearchads360V23ResourcesGranularInsuranceStatus[] $granularInsuranceStatuses
   */
  public function setGranularInsuranceStatuses($granularInsuranceStatuses)
  {
    $this->granularInsuranceStatuses = $granularInsuranceStatuses;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGranularInsuranceStatus[]
   */
  public function getGranularInsuranceStatuses()
  {
    return $this->granularInsuranceStatuses;
  }
  /**
   * Output only. A read-only list of geo vertical level license statuses.
   *
   * @param GoogleAdsSearchads360V23ResourcesGranularLicenseStatus[] $granularLicenseStatuses
   */
  public function setGranularLicenseStatuses($granularLicenseStatuses)
  {
    $this->granularLicenseStatuses = $granularLicenseStatuses;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGranularLicenseStatus[]
   */
  public function getGranularLicenseStatuses()
  {
    return $this->granularLicenseStatuses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesLocalServicesSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLocalServicesSettings');
