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

namespace Google\Service\CloudKMS;

class ExportTrustedKeyWrappedCryptoKeyVersionResponse extends \Google\Model
{
  /**
   * The wrapped key material.
   *
   * @var string
   */
  public $wrappedKey;
  /**
   * Integrity verification field. A CRC32C checksum of the returned
   * ExportTrustedKeyWrappedCryptoKeyVersionResponse.wrapped_key. An integrity
   * check of ExportTrustedKeyWrappedCryptoKeyVersionResponse.wrapped_key can be
   * performed by computing the CRC32C checksum of
   * ExportTrustedKeyWrappedCryptoKeyVersionResponse.wrapped_key and comparing
   * your results to this field. Discard the response in case of non-matching
   * checksum values, and perform a limited number of retries. A persistent
   * mismatch may indicate an issue in your computation of the CRC32C checksum.
   * Note: This field is defined as int64 for reasons of compatibility across
   * different languages. However, it is a non-negative integer, which will
   * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
   * that support this type.
   *
   * @var string
   */
  public $wrappedKeyCrc32c;

  /**
   * The wrapped key material.
   *
   * @param string $wrappedKey
   */
  public function setWrappedKey($wrappedKey)
  {
    $this->wrappedKey = $wrappedKey;
  }
  /**
   * @return string
   */
  public function getWrappedKey()
  {
    return $this->wrappedKey;
  }
  /**
   * Integrity verification field. A CRC32C checksum of the returned
   * ExportTrustedKeyWrappedCryptoKeyVersionResponse.wrapped_key. An integrity
   * check of ExportTrustedKeyWrappedCryptoKeyVersionResponse.wrapped_key can be
   * performed by computing the CRC32C checksum of
   * ExportTrustedKeyWrappedCryptoKeyVersionResponse.wrapped_key and comparing
   * your results to this field. Discard the response in case of non-matching
   * checksum values, and perform a limited number of retries. A persistent
   * mismatch may indicate an issue in your computation of the CRC32C checksum.
   * Note: This field is defined as int64 for reasons of compatibility across
   * different languages. However, it is a non-negative integer, which will
   * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
   * that support this type.
   *
   * @param string $wrappedKeyCrc32c
   */
  public function setWrappedKeyCrc32c($wrappedKeyCrc32c)
  {
    $this->wrappedKeyCrc32c = $wrappedKeyCrc32c;
  }
  /**
   * @return string
   */
  public function getWrappedKeyCrc32c()
  {
    return $this->wrappedKeyCrc32c;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportTrustedKeyWrappedCryptoKeyVersionResponse::class, 'Google_Service_CloudKMS_ExportTrustedKeyWrappedCryptoKeyVersionResponse');
