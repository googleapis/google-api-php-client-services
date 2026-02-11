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

class GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference extends \Google\Model
{
  /**
   * The destination uri of the person.
   *
   * @var string
   */
  public $destinationUri;
  /**
   * The display name of the person.
   *
   * @var string
   */
  public $displayName;
  /**
   * The display photo url of the person.
   *
   * @var string
   */
  public $displayPhotoUri;
  /**
   * The full resource name of the person. Format:
   * `projects/locations/collections/dataStores/branches/documents`.
   *
   * @var string
   */
  public $documentName;
  /**
   * The email of the person.
   *
   * @var string
   */
  public $email;
  /**
   * Output only. The file id of the person data stored in the session context
   * files.
   *
   * @var string
   */
  public $fileId;
  /**
   * The person id of the person.
   *
   * @var string
   */
  public $personId;

  /**
   * The destination uri of the person.
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
   * The display name of the person.
   *
   * @param string $displayName
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
   * The display photo url of the person.
   *
   * @param string $displayPhotoUri
   */
  public function setDisplayPhotoUri($displayPhotoUri)
  {
    $this->displayPhotoUri = $displayPhotoUri;
  }
  /**
   * @return string
   */
  public function getDisplayPhotoUri()
  {
    return $this->displayPhotoUri;
  }
  /**
   * The full resource name of the person. Format:
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
   * The email of the person.
   *
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }
  /**
   * Output only. The file id of the person data stored in the session context
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
   * The person id of the person.
   *
   * @param string $personId
   */
  public function setPersonId($personId)
  {
    $this->personId = $personId;
  }
  /**
   * @return string
   */
  public function getPersonId()
  {
    return $this->personId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaQueryPartPersonReference');
