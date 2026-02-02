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

namespace Google\Service\CloudObservability;

class CmekSettings extends \Google\Model
{
  /**
   * Optional. The resource name for the configured Cloud KMS key. The format
   * is: projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKey
   * s/[KEY] For example: projects/my-project/locations/us-central1/keyRings/my-
   * ring/cryptoKeys/my-key
   *
   * @var string
   */
  public $kmsKey;
  /**
   * Output only. The CryptoKeyVersion resource name for the configured Cloud
   * KMS key. The format is: projects/[PROJECT_ID]/locations/[LOCATION]/keyRings
   * /[KEYRING]/cryptoKeys/[KEY]/cryptoKeyVersions/[VERSION] For example:
   * projects/my-project/locations/us-central1/keyRings/my-ring/cryptoKeys/my-
   * key/cryptoKeyVersions/1 This read-only field is used to convey the specific
   * configured CryptoKeyVersion of the `kms_key` that has been configured. It
   * is populated when the CMEK settings are bound to a single key version.
   *
   * @var string
   */
  public $kmsKeyVersion;
  /**
   * Output only. The service account used to access the key.
   *
   * @var string
   */
  public $serviceAccountId;

  /**
   * Optional. The resource name for the configured Cloud KMS key. The format
   * is: projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKey
   * s/[KEY] For example: projects/my-project/locations/us-central1/keyRings/my-
   * ring/cryptoKeys/my-key
   *
   * @param string $kmsKey
   */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /**
   * @return string
   */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /**
   * Output only. The CryptoKeyVersion resource name for the configured Cloud
   * KMS key. The format is: projects/[PROJECT_ID]/locations/[LOCATION]/keyRings
   * /[KEYRING]/cryptoKeys/[KEY]/cryptoKeyVersions/[VERSION] For example:
   * projects/my-project/locations/us-central1/keyRings/my-ring/cryptoKeys/my-
   * key/cryptoKeyVersions/1 This read-only field is used to convey the specific
   * configured CryptoKeyVersion of the `kms_key` that has been configured. It
   * is populated when the CMEK settings are bound to a single key version.
   *
   * @param string $kmsKeyVersion
   */
  public function setKmsKeyVersion($kmsKeyVersion)
  {
    $this->kmsKeyVersion = $kmsKeyVersion;
  }
  /**
   * @return string
   */
  public function getKmsKeyVersion()
  {
    return $this->kmsKeyVersion;
  }
  /**
   * Output only. The service account used to access the key.
   *
   * @param string $serviceAccountId
   */
  public function setServiceAccountId($serviceAccountId)
  {
    $this->serviceAccountId = $serviceAccountId;
  }
  /**
   * @return string
   */
  public function getServiceAccountId()
  {
    return $this->serviceAccountId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CmekSettings::class, 'Google_Service_CloudObservability_CmekSettings');
