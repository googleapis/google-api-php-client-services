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

class WrappingPublicKey extends \Google\Model
{
  /**
   * Output only. Contains the public key, formatted according to the
   * PublicKey.PublicKeyFormat specified in the
   * KeyManagementService.GetImportJob request.
   *
   * @var string
   */
  public $data;
  /**
   * The public key, encoded in PEM format. For more information, see the [RFC
   * 7468](https://tools.ietf.org/html/rfc7468) sections for [General
   * Considerations](https://tools.ietf.org/html/rfc7468#section-2) and [Textual
   * Encoding of Subject Public Key Info]
   * (https://tools.ietf.org/html/rfc7468#section-13). This field gets populated
   * by default for RSA-based import methods, if no public_key_format is
   * specified in the request. If you want to retrieve the wrapping key of an
   * ImportJob in some other format, use KeyManagementService.GetImportJob and
   * set the public_key_format to the desired public key format.
   *
   * @var string
   */
  public $pem;

  /**
   * Output only. Contains the public key, formatted according to the
   * PublicKey.PublicKeyFormat specified in the
   * KeyManagementService.GetImportJob request.
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
   * The public key, encoded in PEM format. For more information, see the [RFC
   * 7468](https://tools.ietf.org/html/rfc7468) sections for [General
   * Considerations](https://tools.ietf.org/html/rfc7468#section-2) and [Textual
   * Encoding of Subject Public Key Info]
   * (https://tools.ietf.org/html/rfc7468#section-13). This field gets populated
   * by default for RSA-based import methods, if no public_key_format is
   * specified in the request. If you want to retrieve the wrapping key of an
   * ImportJob in some other format, use KeyManagementService.GetImportJob and
   * set the public_key_format to the desired public key format.
   *
   * @param string $pem
   */
  public function setPem($pem)
  {
    $this->pem = $pem;
  }
  /**
   * @return string
   */
  public function getPem()
  {
    return $this->pem;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WrappingPublicKey::class, 'Google_Service_CloudKMS_WrappingPublicKey');
