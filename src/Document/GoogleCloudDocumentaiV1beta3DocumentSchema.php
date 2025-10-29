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

namespace Google\Service\Document;

class GoogleCloudDocumentaiV1beta3DocumentSchema extends \Google\Collection
{
  protected $collection_key = 'entityTypes';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $displayName;
  protected $entityTypesType = GoogleCloudDocumentaiV1beta3DocumentSchemaEntityType::class;
  protected $entityTypesDataType = 'array';
  protected $metadataType = GoogleCloudDocumentaiV1beta3DocumentSchemaMetadata::class;
  protected $metadataDataType = '';

  /**
   * @param string
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
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta3DocumentSchemaEntityType[]
   */
  public function setEntityTypes($entityTypes)
  {
    $this->entityTypes = $entityTypes;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta3DocumentSchemaEntityType[]
   */
  public function getEntityTypes()
  {
    return $this->entityTypes;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta3DocumentSchemaMetadata
   */
  public function setMetadata(GoogleCloudDocumentaiV1beta3DocumentSchemaMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta3DocumentSchemaMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1beta3DocumentSchema::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DocumentSchema');
