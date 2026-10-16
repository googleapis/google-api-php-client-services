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

namespace Google\Service\OracleDatabase;

class GoldengateOggDeployment extends \Google\Model
{
  /**
   * The credential store is unspecified.
   */
  public const CREDENTIAL_STORE_CREDENTIAL_STORE_UNSPECIFIED = 'CREDENTIAL_STORE_UNSPECIFIED';
  /**
   * The credential store is Goldengate.
   */
  public const CREDENTIAL_STORE_GOLDENGATE = 'GOLDENGATE';
  /**
   * The credential store is IAM.
   */
  public const CREDENTIAL_STORE_IAM = 'IAM';
  /**
   * Optional. Input only. The Goldengate deployment console password in plain
   * text.
   *
   * @var string
   */
  public $adminPassword;
  /**
   * Optional. Input only. The Goldengate deployment console password secret
   * version.
   *
   * @var string
   */
  public $adminPasswordSecretVersion;
  /**
   * Required. The Goldengate deployment console username.
   *
   * @var string
   */
  public $adminUsername;
  /**
   * Output only. The certificate of the GoldengateDeployment.
   *
   * @var string
   */
  public $certificate;
  /**
   * Output only. The credential store of the GoldengateDeployment.
   *
   * @var string
   */
  public $credentialStore;
  /**
   * Required. The name given to the Goldengate service deployment. The name
   * must be 1 to 32 characters long, must contain only alphanumeric characters
   * and must start with a letter.
   *
   * @var string
   */
  public $deployment;
  protected $groupRolesMappingType = GoldengateGroupToRolesMapping::class;
  protected $groupRolesMappingDataType = '';
  /**
   * Output only. The identity domain id of the GoldengateDeployment.
   *
   * @var string
   */
  public $identityDomainId;
  /**
   * Optional. Version of OGG
   *
   * @var string
   */
  public $oggVersion;
  /**
   * Output only. The password secret id of the GoldengateDeployment.
   *
   * @var string
   */
  public $passwordSecretId;

  /**
   * Optional. Input only. The Goldengate deployment console password in plain
   * text.
   *
   * @param string $adminPassword
   */
  public function setAdminPassword($adminPassword)
  {
    $this->adminPassword = $adminPassword;
  }
  /**
   * @return string
   */
  public function getAdminPassword()
  {
    return $this->adminPassword;
  }
  /**
   * Optional. Input only. The Goldengate deployment console password secret
   * version.
   *
   * @param string $adminPasswordSecretVersion
   */
  public function setAdminPasswordSecretVersion($adminPasswordSecretVersion)
  {
    $this->adminPasswordSecretVersion = $adminPasswordSecretVersion;
  }
  /**
   * @return string
   */
  public function getAdminPasswordSecretVersion()
  {
    return $this->adminPasswordSecretVersion;
  }
  /**
   * Required. The Goldengate deployment console username.
   *
   * @param string $adminUsername
   */
  public function setAdminUsername($adminUsername)
  {
    $this->adminUsername = $adminUsername;
  }
  /**
   * @return string
   */
  public function getAdminUsername()
  {
    return $this->adminUsername;
  }
  /**
   * Output only. The certificate of the GoldengateDeployment.
   *
   * @param string $certificate
   */
  public function setCertificate($certificate)
  {
    $this->certificate = $certificate;
  }
  /**
   * @return string
   */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /**
   * Output only. The credential store of the GoldengateDeployment.
   *
   * Accepted values: CREDENTIAL_STORE_UNSPECIFIED, GOLDENGATE, IAM
   *
   * @param self::CREDENTIAL_STORE_* $credentialStore
   */
  public function setCredentialStore($credentialStore)
  {
    $this->credentialStore = $credentialStore;
  }
  /**
   * @return self::CREDENTIAL_STORE_*
   */
  public function getCredentialStore()
  {
    return $this->credentialStore;
  }
  /**
   * Required. The name given to the Goldengate service deployment. The name
   * must be 1 to 32 characters long, must contain only alphanumeric characters
   * and must start with a letter.
   *
   * @param string $deployment
   */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /**
   * @return string
   */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /**
   * Output only. The group to roles mapping of the GoldengateDeployment.
   *
   * @param GoldengateGroupToRolesMapping $groupRolesMapping
   */
  public function setGroupRolesMapping(GoldengateGroupToRolesMapping $groupRolesMapping)
  {
    $this->groupRolesMapping = $groupRolesMapping;
  }
  /**
   * @return GoldengateGroupToRolesMapping
   */
  public function getGroupRolesMapping()
  {
    return $this->groupRolesMapping;
  }
  /**
   * Output only. The identity domain id of the GoldengateDeployment.
   *
   * @param string $identityDomainId
   */
  public function setIdentityDomainId($identityDomainId)
  {
    $this->identityDomainId = $identityDomainId;
  }
  /**
   * @return string
   */
  public function getIdentityDomainId()
  {
    return $this->identityDomainId;
  }
  /**
   * Optional. Version of OGG
   *
   * @param string $oggVersion
   */
  public function setOggVersion($oggVersion)
  {
    $this->oggVersion = $oggVersion;
  }
  /**
   * @return string
   */
  public function getOggVersion()
  {
    return $this->oggVersion;
  }
  /**
   * Output only. The password secret id of the GoldengateDeployment.
   *
   * @param string $passwordSecretId
   */
  public function setPasswordSecretId($passwordSecretId)
  {
    $this->passwordSecretId = $passwordSecretId;
  }
  /**
   * @return string
   */
  public function getPasswordSecretId()
  {
    return $this->passwordSecretId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoldengateOggDeployment::class, 'Google_Service_OracleDatabase_GoldengateOggDeployment');
