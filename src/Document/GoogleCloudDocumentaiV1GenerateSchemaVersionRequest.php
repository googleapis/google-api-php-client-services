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

class GoogleCloudDocumentaiV1GenerateSchemaVersionRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $baseSchemaVersion;
  protected $gcsDocumentsType = GoogleCloudDocumentaiV1GcsDocuments::class;
  protected $gcsDocumentsDataType = '';
  protected $gcsPrefixType = GoogleCloudDocumentaiV1GcsPrefix::class;
  protected $gcsPrefixDataType = '';
  protected $generateSchemaVersionParamsType = GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams::class;
  protected $generateSchemaVersionParamsDataType = '';
  protected $inlineDocumentsType = GoogleCloudDocumentaiV1Documents::class;
  protected $inlineDocumentsDataType = '';
  protected $rawDocumentsType = GoogleCloudDocumentaiV1RawDocuments::class;
  protected $rawDocumentsDataType = '';

  /**
   * @param string
   */
  public function setBaseSchemaVersion($baseSchemaVersion)
  {
    $this->baseSchemaVersion = $baseSchemaVersion;
  }
  /**
   * @return string
   */
  public function getBaseSchemaVersion()
  {
    return $this->baseSchemaVersion;
  }
  /**
   * @param GoogleCloudDocumentaiV1GcsDocuments
   */
  public function setGcsDocuments(GoogleCloudDocumentaiV1GcsDocuments $gcsDocuments)
  {
    $this->gcsDocuments = $gcsDocuments;
  }
  /**
   * @return GoogleCloudDocumentaiV1GcsDocuments
   */
  public function getGcsDocuments()
  {
    return $this->gcsDocuments;
  }
  /**
   * @param GoogleCloudDocumentaiV1GcsPrefix
   */
  public function setGcsPrefix(GoogleCloudDocumentaiV1GcsPrefix $gcsPrefix)
  {
    $this->gcsPrefix = $gcsPrefix;
  }
  /**
   * @return GoogleCloudDocumentaiV1GcsPrefix
   */
  public function getGcsPrefix()
  {
    return $this->gcsPrefix;
  }
  /**
   * @param GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams
   */
  public function setGenerateSchemaVersionParams(GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams $generateSchemaVersionParams)
  {
    $this->generateSchemaVersionParams = $generateSchemaVersionParams;
  }
  /**
   * @return GoogleCloudDocumentaiV1GenerateSchemaVersionRequestGenerateSchemaVersionParams
   */
  public function getGenerateSchemaVersionParams()
  {
    return $this->generateSchemaVersionParams;
  }
  /**
   * @param GoogleCloudDocumentaiV1Documents
   */
  public function setInlineDocuments(GoogleCloudDocumentaiV1Documents $inlineDocuments)
  {
    $this->inlineDocuments = $inlineDocuments;
  }
  /**
   * @return GoogleCloudDocumentaiV1Documents
   */
  public function getInlineDocuments()
  {
    return $this->inlineDocuments;
  }
  /**
   * @param GoogleCloudDocumentaiV1RawDocuments
   */
  public function setRawDocuments(GoogleCloudDocumentaiV1RawDocuments $rawDocuments)
  {
    $this->rawDocuments = $rawDocuments;
  }
  /**
   * @return GoogleCloudDocumentaiV1RawDocuments
   */
  public function getRawDocuments()
  {
    return $this->rawDocuments;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1GenerateSchemaVersionRequest::class, 'Google_Service_Document_GoogleCloudDocumentaiV1GenerateSchemaVersionRequest');
