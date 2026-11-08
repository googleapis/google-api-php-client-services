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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1Principal extends \Google\Model
{
  /**
   * Unspecified principal type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * A standard human user principal.
   */
  public const TYPE_USER = 'USER';
  /**
   * Optional. The system unique identifier of the principal.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. The type of the principal.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The system unique identifier of the principal.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. The type of the principal.
   *
   * Accepted values: TYPE_UNSPECIFIED, USER
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Principal::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Principal');
