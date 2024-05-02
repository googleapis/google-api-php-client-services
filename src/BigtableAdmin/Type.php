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

namespace Google\Service\BigtableAdmin;

class Type extends \Google\Model
{
  protected $aggregateTypeType = GoogleBigtableAdminV2TypeAggregate::class;
  protected $aggregateTypeDataType = '';
  protected $bytesTypeType = GoogleBigtableAdminV2TypeBytes::class;
  protected $bytesTypeDataType = '';
  protected $int64TypeType = GoogleBigtableAdminV2TypeInt64::class;
  protected $int64TypeDataType = '';

  /**
   * @param GoogleBigtableAdminV2TypeAggregate
   */
  public function setAggregateType(GoogleBigtableAdminV2TypeAggregate $aggregateType)
  {
    $this->aggregateType = $aggregateType;
  }
  /**
   * @return GoogleBigtableAdminV2TypeAggregate
   */
  public function getAggregateType()
  {
    return $this->aggregateType;
  }
  /**
   * @param GoogleBigtableAdminV2TypeBytes
   */
  public function setBytesType(GoogleBigtableAdminV2TypeBytes $bytesType)
  {
    $this->bytesType = $bytesType;
  }
  /**
   * @return GoogleBigtableAdminV2TypeBytes
   */
  public function getBytesType()
  {
    return $this->bytesType;
  }
  /**
   * @param GoogleBigtableAdminV2TypeInt64
   */
  public function setInt64Type(GoogleBigtableAdminV2TypeInt64 $int64Type)
  {
    $this->int64Type = $int64Type;
  }
  /**
   * @return GoogleBigtableAdminV2TypeInt64
   */
  public function getInt64Type()
  {
    return $this->int64Type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, 'Google_Service_BigtableAdmin_Type');
