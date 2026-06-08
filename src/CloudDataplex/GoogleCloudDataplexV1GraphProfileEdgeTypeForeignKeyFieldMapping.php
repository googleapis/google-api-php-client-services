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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKeyFieldMapping extends \Google\Model
{
  /**
   * Output only. Local field name forming part of the foreign key.
   *
   * @var string
   */
  public $field;
  /**
   * Output only. Field name in the referenced node type.
   *
   * @var string
   */
  public $referencedField;

  /**
   * Output only. Local field name forming part of the foreign key.
   *
   * @param string $field
   */
  public function setField($field)
  {
    $this->field = $field;
  }
  /**
   * @return string
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * Output only. Field name in the referenced node type.
   *
   * @param string $referencedField
   */
  public function setReferencedField($referencedField)
  {
    $this->referencedField = $referencedField;
  }
  /**
   * @return string
   */
  public function getReferencedField()
  {
    return $this->referencedField;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKeyFieldMapping::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1GraphProfileEdgeTypeForeignKeyFieldMapping');
