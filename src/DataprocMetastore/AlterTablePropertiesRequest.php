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

class AlterTablePropertiesRequest extends \Google\Model
{
  /**
   * A map that describes the desired values to mutate. If update_mask is empty,
   * the properties will not update. Otherwise, the properties only alters the
   * value whose associated paths exist in the update mask
   *
   * @var string[]
   */
  public $properties;
  /**
   * Required. The name of the table containing the properties you're altering
   * in the following format.databases/{database_id}/tables/{table_id}
   *
   * @var string
   */
  public $tableName;
  /**
   * A field mask that specifies the metadata table properties that are
   * overwritten by the update. Fields specified in the update_mask are relative
   * to the resource (not to the full request). A field is overwritten if it is
   * in the mask.For example, given the target properties: properties { a: 1 b:
   * 2 } And an update properties: properties { a: 2 b: 3 c: 4 } then if the
   * field mask is:paths: "properties.b", "properties.c"then the result will be:
   * properties { a: 1 b: 3 c: 4 }
   *
   * @var string
   */
  public $updateMask;

  /**
   * A map that describes the desired values to mutate. If update_mask is empty,
   * the properties will not update. Otherwise, the properties only alters the
   * value whose associated paths exist in the update mask
   *
   * @param string[] $properties
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return string[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * Required. The name of the table containing the properties you're altering
   * in the following format.databases/{database_id}/tables/{table_id}
   *
   * @param string $tableName
   */
  public function setTableName($tableName)
  {
    $this->tableName = $tableName;
  }
  /**
   * @return string
   */
  public function getTableName()
  {
    return $this->tableName;
  }
  /**
   * A field mask that specifies the metadata table properties that are
   * overwritten by the update. Fields specified in the update_mask are relative
   * to the resource (not to the full request). A field is overwritten if it is
   * in the mask.For example, given the target properties: properties { a: 1 b:
   * 2 } And an update properties: properties { a: 2 b: 3 c: 4 } then if the
   * field mask is:paths: "properties.b", "properties.c"then the result will be:
   * properties { a: 1 b: 3 c: 4 }
   *
   * @param string $updateMask
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlterTablePropertiesRequest::class, 'Google_Service_DataprocMetastore_AlterTablePropertiesRequest');
