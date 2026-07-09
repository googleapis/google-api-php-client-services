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

class LfA2aV1APIKeySecurityScheme extends \Google\Model
{
  /**
   * An optional description for the security scheme.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The location of the API key. Valid values are "query", "header",
   * or "cookie".
   *
   * @var string
   */
  public $location;
  /**
   * Required. The name of the header, query, or cookie parameter to be used.
   *
   * @var string
   */
  public $name;

  /**
   * An optional description for the security scheme.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The location of the API key. Valid values are "query", "header",
   * or "cookie".
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Required. The name of the header, query, or cookie parameter to be used.
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
class_alias(LfA2aV1APIKeySecurityScheme::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1APIKeySecurityScheme');
