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

namespace Google\Service\ServiceManagement;

class TypeReference extends \Google\Model
{
  /**
   * The name of the type that the annotated, generic field may represent. If
   * the type is in the same protobuf package, the value can be the simple
   * message name e.g., `"MyMessage"`. Otherwise, the value must be the fully-
   * qualified message name e.g., `"google.library.v1.Book"`. If the type(s) are
   * unknown to the service (e.g. the field accepts generic user input), use the
   * wildcard `"*"` to denote this behavior. See
   * [AIP-202](https://google.aip.dev/202#type-references) for more details.
   *
   * @var string
   */
  public $typeName;

  /**
   * The name of the type that the annotated, generic field may represent. If
   * the type is in the same protobuf package, the value can be the simple
   * message name e.g., `"MyMessage"`. Otherwise, the value must be the fully-
   * qualified message name e.g., `"google.library.v1.Book"`. If the type(s) are
   * unknown to the service (e.g. the field accepts generic user input), use the
   * wildcard `"*"` to denote this behavior. See
   * [AIP-202](https://google.aip.dev/202#type-references) for more details.
   *
   * @param string $typeName
   */
  public function setTypeName($typeName)
  {
    $this->typeName = $typeName;
  }
  /**
   * @return string
   */
  public function getTypeName()
  {
    return $this->typeName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TypeReference::class, 'Google_Service_ServiceManagement_TypeReference');
