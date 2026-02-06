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

namespace Google\Service\CustomerEngagementSuite;

class BigQueryExportSettings extends \Google\Model
{
  /**
   * Optional. The BigQuery dataset to export the data to.
   *
   * @var string
   */
  public $dataset;
  /**
   * Optional. Indicates whether the BigQuery export is enabled.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. The project ID of the BigQuery dataset to export the data to.
   * Note: If the BigQuery dataset is in a different project from the app, you
   * should grant `roles/bigquery.admin` role to the CES service agent
   * `service-@gcp-sa-ces.iam.gserviceaccount.com`.
   *
   * @var string
   */
  public $project;

  /**
   * Optional. The BigQuery dataset to export the data to.
   *
   * @param string $dataset
   */
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  /**
   * @return string
   */
  public function getDataset()
  {
    return $this->dataset;
  }
  /**
   * Optional. Indicates whether the BigQuery export is enabled.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. The project ID of the BigQuery dataset to export the data to.
   * Note: If the BigQuery dataset is in a different project from the app, you
   * should grant `roles/bigquery.admin` role to the CES service agent
   * `service-@gcp-sa-ces.iam.gserviceaccount.com`.
   *
   * @param string $project
   */
  public function setProject($project)
  {
    $this->project = $project;
  }
  /**
   * @return string
   */
  public function getProject()
  {
    return $this->project;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryExportSettings::class, 'Google_Service_CustomerEngagementSuite_BigQueryExportSettings');
