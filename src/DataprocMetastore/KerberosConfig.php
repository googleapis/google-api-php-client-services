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

namespace Google\Service\DataprocMetastore;

class KerberosConfig extends \Google\Model
{
  protected $keytabType = Secret::class;
  protected $keytabDataType = '';
  /**
   * Optional. A Cloud Storage URI that specifies the path to a krb5.conf file.
   * It is of the form gs://{bucket_name}/path/to/krb5.conf, although the file
   * does not need to be named krb5.conf explicitly.
   *
   * @var string
   */
  public $krb5ConfigGcsUri;
  /**
   * Optional. A Kerberos principal that exists in the both the keytab the KDC
   * to authenticate as. A typical principal is of the form
   * primary/instance@REALM, but there is no exact format.
   *
   * @var string
   */
  public $principal;

  /**
   * Optional. A Kerberos keytab file that can be used to authenticate a service
   * principal with a Kerberos Key Distribution Center (KDC).
   *
   * @param Secret $keytab
   */
  public function setKeytab(Secret $keytab)
  {
    $this->keytab = $keytab;
  }
  /**
   * @return Secret
   */
  public function getKeytab()
  {
    return $this->keytab;
  }
  /**
   * Optional. A Cloud Storage URI that specifies the path to a krb5.conf file.
   * It is of the form gs://{bucket_name}/path/to/krb5.conf, although the file
   * does not need to be named krb5.conf explicitly.
   *
   * @param string $krb5ConfigGcsUri
   */
  public function setKrb5ConfigGcsUri($krb5ConfigGcsUri)
  {
    $this->krb5ConfigGcsUri = $krb5ConfigGcsUri;
  }
  /**
   * @return string
   */
  public function getKrb5ConfigGcsUri()
  {
    return $this->krb5ConfigGcsUri;
  }
  /**
   * Optional. A Kerberos principal that exists in the both the keytab the KDC
   * to authenticate as. A typical principal is of the form
   * primary/instance@REALM, but there is no exact format.
   *
   * @param string $principal
   */
  public function setPrincipal($principal)
  {
    $this->principal = $principal;
  }
  /**
   * @return string
   */
  public function getPrincipal()
  {
    return $this->principal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KerberosConfig::class, 'Google_Service_DataprocMetastore_KerberosConfig');
