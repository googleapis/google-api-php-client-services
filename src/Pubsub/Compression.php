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

namespace Google\Service\Pubsub;

class Compression extends \Google\Model
{
  /**
   * Unspecified algorithm.
   */
  public const COMPRESSION_ALGORITHM_COMPRESSION_ALGORITHM_UNSPECIFIED = 'COMPRESSION_ALGORITHM_UNSPECIFIED';
  /**
   * ZLIB compression.
   */
  public const COMPRESSION_ALGORITHM_ZLIB = 'ZLIB';
  /**
   * Unspecified mode.
   */
  public const COMPRESSION_MODE_COMPRESSION_MODE_UNSPECIFIED = 'COMPRESSION_MODE_UNSPECIFIED';
  /**
   * Compress.
   */
  public const COMPRESSION_MODE_COMPRESS = 'COMPRESS';
  /**
   * Decompress.
   */
  public const COMPRESSION_MODE_DECOMPRESS = 'DECOMPRESS';
  /**
   * Required. Specifies the compression algorithm to use.
   *
   * @var string
   */
  public $compressionAlgorithm;
  /**
   * Required. Specifies whether to compress or decompress the message.
   *
   * @var string
   */
  public $compressionMode;

  /**
   * Required. Specifies the compression algorithm to use.
   *
   * Accepted values: COMPRESSION_ALGORITHM_UNSPECIFIED, ZLIB
   *
   * @param self::COMPRESSION_ALGORITHM_* $compressionAlgorithm
   */
  public function setCompressionAlgorithm($compressionAlgorithm)
  {
    $this->compressionAlgorithm = $compressionAlgorithm;
  }
  /**
   * @return self::COMPRESSION_ALGORITHM_*
   */
  public function getCompressionAlgorithm()
  {
    return $this->compressionAlgorithm;
  }
  /**
   * Required. Specifies whether to compress or decompress the message.
   *
   * Accepted values: COMPRESSION_MODE_UNSPECIFIED, COMPRESS, DECOMPRESS
   *
   * @param self::COMPRESSION_MODE_* $compressionMode
   */
  public function setCompressionMode($compressionMode)
  {
    $this->compressionMode = $compressionMode;
  }
  /**
   * @return self::COMPRESSION_MODE_*
   */
  public function getCompressionMode()
  {
    return $this->compressionMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Compression::class, 'Google_Service_Pubsub_Compression');
