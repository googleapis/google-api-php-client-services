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

class GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference extends \Google\Model
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
   * The full resource name of the document. Format: `projects/{project}/locatio
   * ns/{location}/collections/{collection}/dataStores/{data_store}/branches/{br
   * anch}/documents/{document_id}`.
   *
   * @var string
   */
  public $documentName;
  /**
   * Output only. The file id of the document data stored in the session context
   * files.
   *
   * @var string
   */
  public $fileId;
  /**
   * The icon uri of the reference.
   *
   * @var string
   */
  public $iconUri;
  /**
   * Input only. The url_for_connector of the document returned by Federated
   * Search.
   *
   * @var string
   */
  public $urlForConnector;

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
   * The full resource name of the document. Format: `projects/{project}/locatio
   * ns/{location}/collections/{collection}/dataStores/{data_store}/branches/{br
   * anch}/documents/{document_id}`.
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
   * Output only. The file id of the document data stored in the session context
   * files.
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
   * The icon uri of the reference.
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
  /**
   * Input only. The url_for_connector of the document returned by Federated
   * Search.
   *
   * @param string $urlForConnector
   */
  public function setUrlForConnector($urlForConnector)
  {
    $this->urlForConnector = $urlForConnector;
  }
  /**
   * @return string
   */
  public function getUrlForConnector()
  {
    return $this->urlForConnector;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaQueryPartDocumentReference');
