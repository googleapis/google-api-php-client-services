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

namespace Google\Service\CloudHealthcare;

class BulkDeleteResourcesRequest extends \Google\Model
{
  /**
   * Unspecified version config. Defaults to ALL.
   */
  public const VERSION_CONFIG_VERSION_CONFIG_UNSPECIFIED = 'VERSION_CONFIG_UNSPECIFIED';
  /**
   * Delete the current version and all history versions.
   */
  public const VERSION_CONFIG_ALL = 'ALL';
  /**
   * Delete the current version only and create a historical version of the
   * deleted resource.
   */
  public const VERSION_CONFIG_CURRENT_ONLY = 'CURRENT_ONLY';
  /**
   * Delete all history versions only.
   */
  public const VERSION_CONFIG_HISTORY_ONLY = 'HISTORY_ONLY';
  protected $gcsDestinationType = GoogleCloudHealthcareV1FhirGcsDestination::class;
  protected $gcsDestinationDataType = '';
  /**
   * Optional. String of comma-delimited FHIR resource types. If provided, only
   * resources of the specified resource type(s) will be deleted.
   *
   * @var string
   */
  public $type;
  /**
   * Optional. If provided, only resources updated before or atthis time are
   * deleted. The time uses the format YYYY-MM-DDThh:mm:ss.sss+zz:zz. For
   * example, `2015-02-07T13:28:17.239+02:00` or `2017-01-01T00:00:00Z`. The
   * time must be specified to the second and include a time zone.
   *
   * @var string
   */
  public $until;
  /**
   * Optional. Specifies which version of the resources to delete.
   *
   * @var string
   */
  public $versionConfig;

  /**
   * Optional. The Cloud Storage output destination. The Healthcare Service
   * Agent account requires the `roles/storage.objectAdmin` role on the Cloud
   * Storage location. The deleted resources outputs are organized by FHIR
   * resource types. The server creates one or more objects per resource type.
   * Each object contains newline delimited strings in the format
   * {resourceType}/{resourceId}.
   *
   * @param GoogleCloudHealthcareV1FhirGcsDestination $gcsDestination
   */
  public function setGcsDestination(GoogleCloudHealthcareV1FhirGcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /**
   * @return GoogleCloudHealthcareV1FhirGcsDestination
   */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /**
   * Optional. String of comma-delimited FHIR resource types. If provided, only
   * resources of the specified resource type(s) will be deleted.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Optional. If provided, only resources updated before or atthis time are
   * deleted. The time uses the format YYYY-MM-DDThh:mm:ss.sss+zz:zz. For
   * example, `2015-02-07T13:28:17.239+02:00` or `2017-01-01T00:00:00Z`. The
   * time must be specified to the second and include a time zone.
   *
   * @param string $until
   */
  public function setUntil($until)
  {
    $this->until = $until;
  }
  /**
   * @return string
   */
  public function getUntil()
  {
    return $this->until;
  }
  /**
   * Optional. Specifies which version of the resources to delete.
   *
   * Accepted values: VERSION_CONFIG_UNSPECIFIED, ALL, CURRENT_ONLY,
   * HISTORY_ONLY
   *
   * @param self::VERSION_CONFIG_* $versionConfig
   */
  public function setVersionConfig($versionConfig)
  {
    $this->versionConfig = $versionConfig;
  }
  /**
   * @return self::VERSION_CONFIG_*
   */
  public function getVersionConfig()
  {
    return $this->versionConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BulkDeleteResourcesRequest::class, 'Google_Service_CloudHealthcare_BulkDeleteResourcesRequest');
