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

namespace Google\Service\Contentwarehouse;

class ImageRepositoryFramePerdoc extends \Google\Model
{
  protected $errorStatusType = UtilStatusProto::class;
  protected $errorStatusDataType = '';
  protected $frameIdentifierType = ImageRepositoryFrameIdentifier::class;
  protected $frameIdentifierDataType = '';
  protected $perdocType = ImageData::class;
  protected $perdocDataType = '';
  /**
   * @var int
   */
  public $timestampMsec;

  /**
   * @param UtilStatusProto
   */
  public function setErrorStatus(UtilStatusProto $errorStatus)
  {
    $this->errorStatus = $errorStatus;
  }
  /**
   * @return UtilStatusProto
   */
  public function getErrorStatus()
  {
    return $this->errorStatus;
  }
  /**
   * @param ImageRepositoryFrameIdentifier
   */
  public function setFrameIdentifier(ImageRepositoryFrameIdentifier $frameIdentifier)
  {
    $this->frameIdentifier = $frameIdentifier;
  }
  /**
   * @return ImageRepositoryFrameIdentifier
   */
  public function getFrameIdentifier()
  {
    return $this->frameIdentifier;
  }
  /**
   * @param ImageData
   */
  public function setPerdoc(ImageData $perdoc)
  {
    $this->perdoc = $perdoc;
  }
  /**
   * @return ImageData
   */
  public function getPerdoc()
  {
    return $this->perdoc;
  }
  /**
   * @param int
   */
  public function setTimestampMsec($timestampMsec)
  {
    $this->timestampMsec = $timestampMsec;
  }
  /**
   * @return int
   */
  public function getTimestampMsec()
  {
    return $this->timestampMsec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageRepositoryFramePerdoc::class, 'Google_Service_Contentwarehouse_ImageRepositoryFramePerdoc');
