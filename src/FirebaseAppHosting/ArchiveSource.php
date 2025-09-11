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

namespace Google\Service\FirebaseAppHosting;

class ArchiveSource extends \Google\Model
{
  protected $authorType = SourceUserMetadata::class;
  protected $authorDataType = '';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $externalSignedUri;
  /**
   * @var string
   */
  public $rootDirectory;
  /**
   * @var string
   */
  public $userStorageUri;

  /**
   * @param SourceUserMetadata
   */
  public function setAuthor(SourceUserMetadata $author)
  {
    $this->author = $author;
  }
  /**
   * @return SourceUserMetadata
   */
  public function getAuthor()
  {
    return $this->author;
  }
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
  public function setExternalSignedUri($externalSignedUri)
  {
    $this->externalSignedUri = $externalSignedUri;
  }
  /**
   * @return string
   */
  public function getExternalSignedUri()
  {
    return $this->externalSignedUri;
  }
  /**
   * @param string
   */
  public function setRootDirectory($rootDirectory)
  {
    $this->rootDirectory = $rootDirectory;
  }
  /**
   * @return string
   */
  public function getRootDirectory()
  {
    return $this->rootDirectory;
  }
  /**
   * @param string
   */
  public function setUserStorageUri($userStorageUri)
  {
    $this->userStorageUri = $userStorageUri;
  }
  /**
   * @return string
   */
  public function getUserStorageUri()
  {
    return $this->userStorageUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ArchiveSource::class, 'Google_Service_FirebaseAppHosting_ArchiveSource');
