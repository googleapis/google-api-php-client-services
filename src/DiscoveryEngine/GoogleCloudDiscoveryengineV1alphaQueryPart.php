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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaQueryPart extends \Google\Model
{
  protected $documentReferenceType = GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference::class;
  protected $documentReferenceDataType = '';
  protected $driveDocumentReferenceType = GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference::class;
  protected $driveDocumentReferenceDataType = '';
  /**
   * Optional. The IANA standard MIME type of the data. See
   * https://www.iana.org/assignments/media-types/media-types.xhtml. This field
   * is optional. If not set, the default assumed MIME type is "text/plain" for
   * the "data" field.
   *
   * @var string
   */
  public $mimeType;
  protected $personReferenceType = GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference::class;
  protected $personReferenceDataType = '';
  /**
   * Text content.
   *
   * @var string
   */
  public $text;
  /**
   * This field is expected to be a ui message in JSON format. As of Q1 2026,
   * ui_json_payload is only supported for A2UI messages.
   *
   * @var string
   */
  public $uiJsonPayload;

  /**
   * Other VAIS Document references.
   *
   * @param GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference $documentReference
   */
  public function setDocumentReference(GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference $documentReference)
  {
    $this->documentReference = $documentReference;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference
   */
  public function getDocumentReference()
  {
    return $this->documentReference;
  }
  /**
   * Reference to a Google Drive document.
   *
   * @param GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference $driveDocumentReference
   */
  public function setDriveDocumentReference(GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference $driveDocumentReference)
  {
    $this->driveDocumentReference = $driveDocumentReference;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference
   */
  public function getDriveDocumentReference()
  {
    return $this->driveDocumentReference;
  }
  /**
   * Optional. The IANA standard MIME type of the data. See
   * https://www.iana.org/assignments/media-types/media-types.xhtml. This field
   * is optional. If not set, the default assumed MIME type is "text/plain" for
   * the "data" field.
   *
   * @param string $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
   * Reference to a person.
   *
   * @param GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference $personReference
   */
  public function setPersonReference(GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference $personReference)
  {
    $this->personReference = $personReference;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference
   */
  public function getPersonReference()
  {
    return $this->personReference;
  }
  /**
   * Text content.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * This field is expected to be a ui message in JSON format. As of Q1 2026,
   * ui_json_payload is only supported for A2UI messages.
   *
   * @param string $uiJsonPayload
   */
  public function setUiJsonPayload($uiJsonPayload)
  {
    $this->uiJsonPayload = $uiJsonPayload;
  }
  /**
   * @return string
   */
  public function getUiJsonPayload()
  {
    return $this->uiJsonPayload;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaQueryPart::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaQueryPart');
