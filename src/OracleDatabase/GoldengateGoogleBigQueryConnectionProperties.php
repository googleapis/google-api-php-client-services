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

namespace Google\Service\OracleDatabase;

class GoldengateGoogleBigQueryConnectionProperties extends \Google\Model
{
  /**
   * Optional. The base64 encoded content of the service account key file
   * containing the credentials required to use Google BigQuery.
   *
   * @var string
   */
  public $serviceAccountKeyFile;
  /**
   * Optional. The technology type.
   *
   * @var string
   */
  public $technologyType;

  /**
   * Optional. The base64 encoded content of the service account key file
   * containing the credentials required to use Google BigQuery.
   *
   * @param string $serviceAccountKeyFile
   */
  public function setServiceAccountKeyFile($serviceAccountKeyFile)
  {
    $this->serviceAccountKeyFile = $serviceAccountKeyFile;
  }
  /**
   * @return string
   */
  public function getServiceAccountKeyFile()
  {
    return $this->serviceAccountKeyFile;
  }
  /**
   * Optional. The technology type.
   *
   * @param string $technologyType
   */
  public function setTechnologyType($technologyType)
  {
    $this->technologyType = $technologyType;
  }
  /**
   * @return string
   */
  public function getTechnologyType()
  {
    return $this->technologyType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoldengateGoogleBigQueryConnectionProperties::class, 'Google_Service_OracleDatabase_GoldengateGoogleBigQueryConnectionProperties');
