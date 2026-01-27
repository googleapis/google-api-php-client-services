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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageConfigmanagementV1Config extends \Google\Model
{
  /**
   * Optional. `etag` is used for optimistic concurrency control as a way to
   * help prevent simultaneous updates of a config from overwriting each other.
   * It is required that systems make use of the `etag` in the read-modify-write
   * cycle to perform config updates in order to avoid race conditions: An
   * `etag` is returned in the response to `GetConfig`, and systems are expected
   * to put that etag in the request to `UpdateConfig` to ensure that their
   * change will be applied to the same version of the config. If an `etag` is
   * not provided in the call to `UpdateConfig`, then the existing config, if
   * any, will be overwritten.
   *
   * @var string
   */
  public $etag;
  protected $ingestionType = GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestion::class;
  protected $ingestionDataType = '';
  /**
   * Identifier. The resource name of the config. Format:
   * `organizations/{organization_id}/locations/global/config`
   * `folders/{folder_id}/locations/global/config`
   * `projects/{project_id}/locations/global/config`
   * `projects/{project_number}/locations/global/config`
   *
   * @var string
   */
  public $name;

  /**
   * Optional. `etag` is used for optimistic concurrency control as a way to
   * help prevent simultaneous updates of a config from overwriting each other.
   * It is required that systems make use of the `etag` in the read-modify-write
   * cycle to perform config updates in order to avoid race conditions: An
   * `etag` is returned in the response to `GetConfig`, and systems are expected
   * to put that etag in the request to `UpdateConfig` to ensure that their
   * change will be applied to the same version of the config. If an `etag` is
   * not provided in the call to `UpdateConfig`, then the existing config, if
   * any, will be overwritten.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. Ingestion rule for Data Lineage ingestion.
   *
   * @param GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestion $ingestion
   */
  public function setIngestion(GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestion $ingestion)
  {
    $this->ingestion = $ingestion;
  }
  /**
   * @return GoogleCloudDatacatalogLineageConfigmanagementV1ConfigIngestion
   */
  public function getIngestion()
  {
    return $this->ingestion;
  }
  /**
   * Identifier. The resource name of the config. Format:
   * `organizations/{organization_id}/locations/global/config`
   * `folders/{folder_id}/locations/global/config`
   * `projects/{project_id}/locations/global/config`
   * `projects/{project_number}/locations/global/config`
   *
   * @param string $name
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageConfigmanagementV1Config::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageConfigmanagementV1Config');
