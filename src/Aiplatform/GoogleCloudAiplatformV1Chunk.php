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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1Chunk extends \Google\Model
{
  /**
   * Required. The data in the chunk.
   *
   * @var string
   */
  public $data;
  protected $metadataType = GoogleCloudAiplatformV1Metadata::class;
  protected $metadataDataType = '';
  /**
   * Required. Mime type of the chunk data. See
   * https://www.iana.org/assignments/media-types/media-types.xhtml for the full
   * list.
   *
   * @var string
   */
  public $mimeType;

  /**
   * Required. The data in the chunk.
   *
   * @param string $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return string
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * Optional. Metadata that is associated with the data in the payload.
   *
   * @param GoogleCloudAiplatformV1Metadata $metadata
   */
  public function setMetadata(GoogleCloudAiplatformV1Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GoogleCloudAiplatformV1Metadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Required. Mime type of the chunk data. See
   * https://www.iana.org/assignments/media-types/media-types.xhtml for the full
   * list.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Chunk::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Chunk');
