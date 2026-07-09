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

namespace Google\Service\Bigquery;

class ArrowSerializationOptions extends \Google\Model
{
  /**
   * If unspecified no compression will be used.
   */
  public const BUFFER_COMPRESSION_COMPRESSION_UNSPECIFIED = 'COMPRESSION_UNSPECIFIED';
  /**
   * LZ4 Frame (https://github.com/lz4/lz4/blob/dev/doc/lz4_Frame_format.md)
   */
  public const BUFFER_COMPRESSION_LZ4_FRAME = 'LZ4_FRAME';
  /**
   * Zstandard compression.
   */
  public const BUFFER_COMPRESSION_ZSTD = 'ZSTD';
  /**
   * Unspecified timestamp precision. The default precision is microseconds.
   */
  public const PICOS_TIMESTAMP_PRECISION_PICOS_TIMESTAMP_PRECISION_UNSPECIFIED = 'PICOS_TIMESTAMP_PRECISION_UNSPECIFIED';
  /**
   * Timestamp values returned in the results will be truncated to microsecond
   * level precision. The value will be encoded as Arrow TIMESTAMP type in a 64
   * bit integer.
   */
  public const PICOS_TIMESTAMP_PRECISION_TIMESTAMP_PRECISION_MICROS = 'TIMESTAMP_PRECISION_MICROS';
  /**
   * Timestamp values returned in the results will be truncated to nanosecond
   * level precision. The value will be encoded as Arrow TIMESTAMP type in a 64
   * bit integer.
   */
  public const PICOS_TIMESTAMP_PRECISION_TIMESTAMP_PRECISION_NANOS = 'TIMESTAMP_PRECISION_NANOS';
  /**
   * Timestamp values returned in the results will contain full precision
   * picosecond value. The value will be encoded as a string which conforms to
   * ISO 8601 format.
   */
  public const PICOS_TIMESTAMP_PRECISION_TIMESTAMP_PRECISION_PICOS = 'TIMESTAMP_PRECISION_PICOS';
  /**
   * The compression codec to use for Arrow buffers in serialized record
   * batches.
   *
   * @var string
   */
  public $bufferCompression;
  /**
   * Optional. Set timestamp precision option. If not set, the default precision
   * is microseconds.
   *
   * @var string
   */
  public $picosTimestampPrecision;

  /**
   * The compression codec to use for Arrow buffers in serialized record
   * batches.
   *
   * Accepted values: COMPRESSION_UNSPECIFIED, LZ4_FRAME, ZSTD
   *
   * @param self::BUFFER_COMPRESSION_* $bufferCompression
   */
  public function setBufferCompression($bufferCompression)
  {
    $this->bufferCompression = $bufferCompression;
  }
  /**
   * @return self::BUFFER_COMPRESSION_*
   */
  public function getBufferCompression()
  {
    return $this->bufferCompression;
  }
  /**
   * Optional. Set timestamp precision option. If not set, the default precision
   * is microseconds.
   *
   * Accepted values: PICOS_TIMESTAMP_PRECISION_UNSPECIFIED,
   * TIMESTAMP_PRECISION_MICROS, TIMESTAMP_PRECISION_NANOS,
   * TIMESTAMP_PRECISION_PICOS
   *
   * @param self::PICOS_TIMESTAMP_PRECISION_* $picosTimestampPrecision
   */
  public function setPicosTimestampPrecision($picosTimestampPrecision)
  {
    $this->picosTimestampPrecision = $picosTimestampPrecision;
  }
  /**
   * @return self::PICOS_TIMESTAMP_PRECISION_*
   */
  public function getPicosTimestampPrecision()
  {
    return $this->picosTimestampPrecision;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ArrowSerializationOptions::class, 'Google_Service_Bigquery_ArrowSerializationOptions');
