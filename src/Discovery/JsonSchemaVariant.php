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

namespace Google\Service\Discovery;

class JsonSchemaVariant extends \Google\Collection
{
  protected $collection_key = 'map';
  /**
   * @var string
   */
  public $discriminant;
  protected $mapType = JsonSchemaVariantMap::class;
  protected $mapDataType = 'array';

  /**
   * @param string
   */
  public function setDiscriminant($discriminant)
  {
    $this->discriminant = $discriminant;
  }
  /**
   * @return string
   */
  public function getDiscriminant()
  {
    return $this->discriminant;
  }
  /**
   * @param JsonSchemaVariantMap[]
   */
  public function setMap($map)
  {
    $this->map = $map;
  }
  /**
   * @return JsonSchemaVariantMap[]
   */
  public function getMap()
  {
    return $this->map;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JsonSchemaVariant::class, 'Google_Service_Discovery_JsonSchemaVariant');
