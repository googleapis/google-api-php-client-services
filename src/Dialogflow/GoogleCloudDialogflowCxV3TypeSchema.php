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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3TypeSchema extends \Google\Model
{
  protected $inlineSchemaType = GoogleCloudDialogflowCxV3InlineSchema::class;
  protected $inlineSchemaDataType = '';
  protected $schemaReferenceType = GoogleCloudDialogflowCxV3TypeSchemaSchemaReference::class;
  protected $schemaReferenceDataType = '';

  /**
   * @param GoogleCloudDialogflowCxV3InlineSchema
   */
  public function setInlineSchema(GoogleCloudDialogflowCxV3InlineSchema $inlineSchema)
  {
    $this->inlineSchema = $inlineSchema;
  }
  /**
   * @return GoogleCloudDialogflowCxV3InlineSchema
   */
  public function getInlineSchema()
  {
    return $this->inlineSchema;
  }
  /**
   * @param GoogleCloudDialogflowCxV3TypeSchemaSchemaReference
   */
  public function setSchemaReference(GoogleCloudDialogflowCxV3TypeSchemaSchemaReference $schemaReference)
  {
    $this->schemaReference = $schemaReference;
  }
  /**
   * @return GoogleCloudDialogflowCxV3TypeSchemaSchemaReference
   */
  public function getSchemaReference()
  {
    return $this->schemaReference;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3TypeSchema::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TypeSchema');
