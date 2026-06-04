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

namespace Google\Service\Datastream;

class SourceObject extends \Google\Collection
{
  protected $collection_key = 'properties';
  /**
   * Required. The object name.
   *
   * @var string
   */
  public $objectName;
  protected $propertiesType = SourceProperty::class;
  protected $propertiesDataType = 'array';

  /**
   * Required. The object name.
   *
   * @param string $objectName
   */
  public function setObjectName($objectName)
  {
    $this->objectName = $objectName;
  }
  /**
   * @return string
   */
  public function getObjectName()
  {
    return $this->objectName;
  }
  /**
   * Optional. Source properties. When unspecified as part of include objects,
   * includes everything, when unspecified as part of exclude objects, excludes
   * nothing.
   *
   * @param SourceProperty[] $properties
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return SourceProperty[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SourceObject::class, 'Google_Service_Datastream_SourceObject');
