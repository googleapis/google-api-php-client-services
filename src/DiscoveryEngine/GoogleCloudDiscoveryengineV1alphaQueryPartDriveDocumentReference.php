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

class GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference extends \Google\Model
{
  /**
   * The destination uri of the reference.
   *
   * @var string
   */
  public $destinationUri;
  /**
   * The display title of the reference.
   *
   * @var string
   */
  public $displayTitle;
  /**
   * The full resource name of the document. Format:
   * `projects/locations/collections/dataStores/branches/documents`.
   *
   * @var string
   */
  public $documentName;
  /**
   * The Drive id of the document.
   *
   * @var string
   */
  public $driveId;
  /**
   * Output only. The file id of the Drive document data stored in the session
   * context files.
   *
   * @var string
   */
  public $fileId;
  /**
   * The icon uri of the Drive document reference.
   *
   * @var string
   */
  public $iconUri;

  /**
   * The destination uri of the reference.
   *
   * @param string $destinationUri
   */
  public function setDestinationUri($destinationUri)
  {
    $this->destinationUri = $destinationUri;
  }
  /**
   * @return string
   */
  public function getDestinationUri()
  {
    return $this->destinationUri;
  }
  /**
   * The display title of the reference.
   *
   * @param string $displayTitle
   */
  public function setDisplayTitle($displayTitle)
  {
    $this->displayTitle = $displayTitle;
  }
  /**
   * @return string
   */
  public function getDisplayTitle()
  {
    return $this->displayTitle;
  }
  /**
   * The full resource name of the document. Format:
   * `projects/locations/collections/dataStores/branches/documents`.
   *
   * @param string $documentName
   */
  public function setDocumentName($documentName)
  {
    $this->documentName = $documentName;
  }
  /**
   * @return string
   */
  public function getDocumentName()
  {
    return $this->documentName;
  }
  /**
   * The Drive id of the document.
   *
   * @param string $driveId
   */
  public function setDriveId($driveId)
  {
    $this->driveId = $driveId;
  }
  /**
   * @return string
   */
  public function getDriveId()
  {
    return $this->driveId;
  }
  /**
   * Output only. The file id of the Drive document data stored in the session
   * context files.
   *
   * @param string $fileId
   */
  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }
  /**
   * @return string
   */
  public function getFileId()
  {
    return $this->fileId;
  }
  /**
   * The icon uri of the Drive document reference.
   *
   * @param string $iconUri
   */
  public function setIconUri($iconUri)
  {
    $this->iconUri = $iconUri;
  }
  /**
   * @return string
   */
  public function getIconUri()
  {
    return $this->iconUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaQueryPartDriveDocumentReference');
