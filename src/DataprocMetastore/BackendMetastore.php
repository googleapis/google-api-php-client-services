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

namespace Google\Service\DataprocMetastore;

class BackendMetastore extends \Google\Model
{
  /**
   * The metastore type is not set.
   */
  public const METASTORE_TYPE_METASTORE_TYPE_UNSPECIFIED = 'METASTORE_TYPE_UNSPECIFIED';
  /**
   * The backend metastore is BigQuery.
   */
  public const METASTORE_TYPE_BIGQUERY = 'BIGQUERY';
  /**
   * The backend metastore is Dataproc Metastore.
   */
  public const METASTORE_TYPE_DATAPROC_METASTORE = 'DATAPROC_METASTORE';
  /**
   * The type of the backend metastore.
   *
   * @var string
   */
  public $metastoreType;
  /**
   * The relative resource name of the metastore that is being federated. The
   * formats of the relative resource names for the currently supported
   * metastores are listed below: BigQuery projects/{project_id} Dataproc
   * Metastore projects/{project_id}/locations/{location}/services/{service_id}
   *
   * @var string
   */
  public $name;

  /**
   * The type of the backend metastore.
   *
   * Accepted values: METASTORE_TYPE_UNSPECIFIED, BIGQUERY, DATAPROC_METASTORE
   *
   * @param self::METASTORE_TYPE_* $metastoreType
   */
  public function setMetastoreType($metastoreType)
  {
    $this->metastoreType = $metastoreType;
  }
  /**
   * @return self::METASTORE_TYPE_*
   */
  public function getMetastoreType()
  {
    return $this->metastoreType;
  }
  /**
   * The relative resource name of the metastore that is being federated. The
   * formats of the relative resource names for the currently supported
   * metastores are listed below: BigQuery projects/{project_id} Dataproc
   * Metastore projects/{project_id}/locations/{location}/services/{service_id}
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
class_alias(BackendMetastore::class, 'Google_Service_DataprocMetastore_BackendMetastore');
