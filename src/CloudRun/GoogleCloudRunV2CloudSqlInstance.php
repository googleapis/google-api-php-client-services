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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2CloudSqlInstance extends \Google\Collection
{
  protected $collection_key = 'instances';
  /**
   * A list of Cloud SQL instance connection names. Cloud Run uses these to
   * establish connections to the specified Cloud SQL instances. While the SQL
   * instance name itself is unique within a project, the full connection name
   * requires the location for proper routing. Format:
   * `{project}:{location}:{instance}` Example: `my-project:us-central1:my-
   * instance` You can find this value on the instance's **Overview** page in
   * the Google Cloud console or by using the following `gcloud` command: ```sh
   * gcloud sql instances describe INSTANCE_NAME \
   * --format='value(connectionName)' ``` Visit
   * https://cloud.google.com/sql/docs/mysql/connect-run for more information on
   * how to connect Cloud SQL and Cloud Run.
   *
   * @var string[]
   */
  public $instances;

  /**
   * A list of Cloud SQL instance connection names. Cloud Run uses these to
   * establish connections to the specified Cloud SQL instances. While the SQL
   * instance name itself is unique within a project, the full connection name
   * requires the location for proper routing. Format:
   * `{project}:{location}:{instance}` Example: `my-project:us-central1:my-
   * instance` You can find this value on the instance's **Overview** page in
   * the Google Cloud console or by using the following `gcloud` command: ```sh
   * gcloud sql instances describe INSTANCE_NAME \
   * --format='value(connectionName)' ``` Visit
   * https://cloud.google.com/sql/docs/mysql/connect-run for more information on
   * how to connect Cloud SQL and Cloud Run.
   *
   * @param string[] $instances
   */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /**
   * @return string[]
   */
  public function getInstances()
  {
    return $this->instances;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2CloudSqlInstance::class, 'Google_Service_CloudRun_GoogleCloudRunV2CloudSqlInstance');
