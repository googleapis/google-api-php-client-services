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

namespace Google\Service\OracleDatabase;

class RestIcebergCatalog extends \Google\Model
{
  /**
   * Optional. The base64 encoded content of the configuration file containing
   * additional properties for the REST catalog.
   *
   * @var string
   */
  public $properties;
  /**
   * Required. The REST uri.
   *
   * @var string
   */
  public $uri;

  /**
   * Optional. The base64 encoded content of the configuration file containing
   * additional properties for the REST catalog.
   *
   * @param string $properties
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return string
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * Required. The REST uri.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestIcebergCatalog::class, 'Google_Service_OracleDatabase_RestIcebergCatalog');
