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

class GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata extends \Google\Model
{
  protected $fieldTierMetadataType = GoogleCloudDocumentaiUiv1beta3FieldTierMetadata::class;
  protected $fieldTierMetadataDataType = '';
  protected $humanReviewLabelingMetadataType = GoogleCloudDocumentaiUiv1beta3HumanReviewLabelingMetadata::class;
  protected $humanReviewLabelingMetadataDataType = '';
  protected $humanReviewMetadataType = GoogleCloudDocumentaiUiv1beta3HumanReviewValidationMetadata::class;
  protected $humanReviewMetadataDataType = '';
  /**
   * @var bool
   */
  public $inactive;
  protected $schemaEditabilityMetadataType = GoogleCloudDocumentaiUiv1beta3SchemaEditabilityMetadata::class;
  protected $schemaEditabilityMetadataDataType = '';
  protected $schemaInferenceMetadataType = GoogleCloudDocumentaiUiv1beta3SchemaInferenceMetadata::class;
  protected $schemaInferenceMetadataDataType = '';

  /**
   * @param GoogleCloudDocumentaiUiv1beta3FieldTierMetadata
   */
  public function setFieldTierMetadata(GoogleCloudDocumentaiUiv1beta3FieldTierMetadata $fieldTierMetadata)
  {
    $this->fieldTierMetadata = $fieldTierMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3FieldTierMetadata
   */
  public function getFieldTierMetadata()
  {
    return $this->fieldTierMetadata;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3HumanReviewLabelingMetadata
   */
  public function setHumanReviewLabelingMetadata(GoogleCloudDocumentaiUiv1beta3HumanReviewLabelingMetadata $humanReviewLabelingMetadata)
  {
    $this->humanReviewLabelingMetadata = $humanReviewLabelingMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3HumanReviewLabelingMetadata
   */
  public function getHumanReviewLabelingMetadata()
  {
    return $this->humanReviewLabelingMetadata;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3HumanReviewValidationMetadata
   */
  public function setHumanReviewMetadata(GoogleCloudDocumentaiUiv1beta3HumanReviewValidationMetadata $humanReviewMetadata)
  {
    $this->humanReviewMetadata = $humanReviewMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3HumanReviewValidationMetadata
   */
  public function getHumanReviewMetadata()
  {
    return $this->humanReviewMetadata;
  }
  /**
   * @param bool
   */
  public function setInactive($inactive)
  {
    $this->inactive = $inactive;
  }
  /**
   * @return bool
   */
  public function getInactive()
  {
    return $this->inactive;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3SchemaEditabilityMetadata
   */
  public function setSchemaEditabilityMetadata(GoogleCloudDocumentaiUiv1beta3SchemaEditabilityMetadata $schemaEditabilityMetadata)
  {
    $this->schemaEditabilityMetadata = $schemaEditabilityMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3SchemaEditabilityMetadata
   */
  public function getSchemaEditabilityMetadata()
  {
    return $this->schemaEditabilityMetadata;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3SchemaInferenceMetadata
   */
  public function setSchemaInferenceMetadata(GoogleCloudDocumentaiUiv1beta3SchemaInferenceMetadata $schemaInferenceMetadata)
  {
    $this->schemaInferenceMetadata = $schemaInferenceMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3SchemaInferenceMetadata
   */
  public function getSchemaInferenceMetadata()
  {
    return $this->schemaInferenceMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3EntityTypeMetadata');
