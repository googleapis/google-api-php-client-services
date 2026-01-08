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

namespace Google\Service\Bigquery;

class BigtableProtoConfig extends \Google\Model
{
  /**
   * Optional. The fully qualified proto message name of the protobuf. In the
   * format of "foo.bar.Message".
   *
   * @var string
   */
  public $protoMessageName;
  /**
   * Optional. The ID of the Bigtable SchemaBundle resource associated with this
   * protobuf. The ID should be referred to within the parent table, e.g., `foo`
   * rather than
   * `projects/{project}/instances/{instance}/tables/{table}/schemaBundles/foo`.
   * See [more details on Bigtable
   * SchemaBundles](https://docs.cloud.google.com/bigtable/docs/create-manage-
   * protobuf-schemas).
   *
   * @var string
   */
  public $schemaBundleId;

  /**
   * Optional. The fully qualified proto message name of the protobuf. In the
   * format of "foo.bar.Message".
   *
   * @param string $protoMessageName
   */
  public function setProtoMessageName($protoMessageName)
  {
    $this->protoMessageName = $protoMessageName;
  }
  /**
   * @return string
   */
  public function getProtoMessageName()
  {
    return $this->protoMessageName;
  }
  /**
   * Optional. The ID of the Bigtable SchemaBundle resource associated with this
   * protobuf. The ID should be referred to within the parent table, e.g., `foo`
   * rather than
   * `projects/{project}/instances/{instance}/tables/{table}/schemaBundles/foo`.
   * See [more details on Bigtable
   * SchemaBundles](https://docs.cloud.google.com/bigtable/docs/create-manage-
   * protobuf-schemas).
   *
   * @param string $schemaBundleId
   */
  public function setSchemaBundleId($schemaBundleId)
  {
    $this->schemaBundleId = $schemaBundleId;
  }
  /**
   * @return string
   */
  public function getSchemaBundleId()
  {
    return $this->schemaBundleId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigtableProtoConfig::class, 'Google_Service_Bigquery_BigtableProtoConfig');
