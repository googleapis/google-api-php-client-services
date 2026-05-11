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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1EntityReference extends \Google\Collection
{
  protected $collection_key = 'field';
  /**
   * Optional. Field path within the entity. Each nesting level should be a
   * separate value in the repeated field. The order matters. Must be empty for
   * asset level lineage For example to address "salary.net" subfield where
   * "salary" is a column and "net" is a proto field two values in the `field`
   * should be reported, the first is "salary" and the second is "net". Each
   * field length is limited to 500 characters. Maximum supported nesting level
   * is 20.
   *
   * @var string[]
   */
  public $field;
  /**
   * Required. [Fully Qualified Name
   * (FQN)](https://cloud.google.com/dataplex/docs/fully-qualified-names) of the
   * entity.
   *
   * @var string
   */
  public $fullyQualifiedName;

  /**
   * Optional. Field path within the entity. Each nesting level should be a
   * separate value in the repeated field. The order matters. Must be empty for
   * asset level lineage For example to address "salary.net" subfield where
   * "salary" is a column and "net" is a proto field two values in the `field`
   * should be reported, the first is "salary" and the second is "net". Each
   * field length is limited to 500 characters. Maximum supported nesting level
   * is 20.
   *
   * @param string[] $field
   */
  public function setField($field)
  {
    $this->field = $field;
  }
  /**
   * @return string[]
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * Required. [Fully Qualified Name
   * (FQN)](https://cloud.google.com/dataplex/docs/fully-qualified-names) of the
   * entity.
   *
   * @param string $fullyQualifiedName
   */
  public function setFullyQualifiedName($fullyQualifiedName)
  {
    $this->fullyQualifiedName = $fullyQualifiedName;
  }
  /**
   * @return string
   */
  public function getFullyQualifiedName()
  {
    return $this->fullyQualifiedName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1EntityReference::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1EntityReference');
