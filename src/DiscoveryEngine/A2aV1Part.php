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

class A2aV1Part extends \Google\Model
{
  protected $dataType = A2aV1DataPart::class;
  protected $dataDataType = '';
  protected $fileType = A2aV1FilePart::class;
  protected $fileDataType = '';
  /**
   * Optional metadata associated with this part.
   *
   * @var array[]
   */
  public $metadata;
  /**
   * @var string
   */
  public $text;

  /**
   * @param A2aV1DataPart $data
   */
  public function setData(A2aV1DataPart $data)
  {
    $this->data = $data;
  }
  /**
   * @return A2aV1DataPart
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * @param A2aV1FilePart $file
   */
  public function setFile(A2aV1FilePart $file)
  {
    $this->file = $file;
  }
  /**
   * @return A2aV1FilePart
   */
  public function getFile()
  {
    return $this->file;
  }
  /**
   * Optional metadata associated with this part.
   *
   * @param array[] $metadata
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return array[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(A2aV1Part::class, 'Google_Service_DiscoveryEngine_A2aV1Part');
