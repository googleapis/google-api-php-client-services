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

class GoogleCloudDiscoveryengineV1ProvisionProjectRequest extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const PROVISION_INTENT_PROVISION_INTENT_UNSPECIFIED = 'PROVISION_INTENT_UNSPECIFIED';
  /**
   * The caller is provisioning for the new Gemini Enterprise experience.
   */
  public const PROVISION_INTENT_PROVISION_INTENT_SOBI = 'PROVISION_INTENT_SOBI';
  /**
   * The caller is provisioning for the classic Gemini Enterprise experience.
   */
  public const PROVISION_INTENT_PROVISION_INTENT_LEGACY = 'PROVISION_INTENT_LEGACY';
  /**
   * Required. Set to `true` to specify that caller has read and would like to
   * give consent to the [Terms for data
   * use](https://cloud.google.com/retail/data-use-terms).
   *
   * @var bool
   */
  public $acceptDataUseTerms;
  /**
   * Required. The version of the [Terms for data
   * use](https://cloud.google.com/retail/data-use-terms) that caller has read
   * and would like to give consent to. Acceptable version is `2022-11-23`, and
   * this may change over time.
   *
   * @var string
   */
  public $dataUseTermsVersion;
  protected $idpConfigType = GoogleCloudDiscoveryengineV1IdpConfig::class;
  protected $idpConfigDataType = '';
  /**
   * Optional. The caller states whether the provisioning is for the new or the
   * classic Gemini Enterprise experience.
   *
   * @var string
   */
  public $provisionIntent;
  protected $saasParamsType = GoogleCloudDiscoveryengineV1ProvisionProjectRequestSaasParams::class;
  protected $saasParamsDataType = '';

  /**
   * Required. Set to `true` to specify that caller has read and would like to
   * give consent to the [Terms for data
   * use](https://cloud.google.com/retail/data-use-terms).
   *
   * @param bool $acceptDataUseTerms
   */
  public function setAcceptDataUseTerms($acceptDataUseTerms)
  {
    $this->acceptDataUseTerms = $acceptDataUseTerms;
  }
  /**
   * @return bool
   */
  public function getAcceptDataUseTerms()
  {
    return $this->acceptDataUseTerms;
  }
  /**
   * Required. The version of the [Terms for data
   * use](https://cloud.google.com/retail/data-use-terms) that caller has read
   * and would like to give consent to. Acceptable version is `2022-11-23`, and
   * this may change over time.
   *
   * @param string $dataUseTermsVersion
   */
  public function setDataUseTermsVersion($dataUseTermsVersion)
  {
    $this->dataUseTermsVersion = $dataUseTermsVersion;
  }
  /**
   * @return string
   */
  public function getDataUseTermsVersion()
  {
    return $this->dataUseTermsVersion;
  }
  /**
   * Optional. The identity provider for this location. When provided, the
   * location's AclConfig is set from it as part of provisioning.
   *
   * @param GoogleCloudDiscoveryengineV1IdpConfig $idpConfig
   */
  public function setIdpConfig(GoogleCloudDiscoveryengineV1IdpConfig $idpConfig)
  {
    $this->idpConfig = $idpConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1IdpConfig
   */
  public function getIdpConfig()
  {
    return $this->idpConfig;
  }
  /**
   * Optional. The caller states whether the provisioning is for the new or the
   * classic Gemini Enterprise experience.
   *
   * Accepted values: PROVISION_INTENT_UNSPECIFIED, PROVISION_INTENT_SOBI,
   * PROVISION_INTENT_LEGACY
   *
   * @param self::PROVISION_INTENT_* $provisionIntent
   */
  public function setProvisionIntent($provisionIntent)
  {
    $this->provisionIntent = $provisionIntent;
  }
  /**
   * @return self::PROVISION_INTENT_*
   */
  public function getProvisionIntent()
  {
    return $this->provisionIntent;
  }
  /**
   * Optional. Parameters for Agentspace.
   *
   * @param GoogleCloudDiscoveryengineV1ProvisionProjectRequestSaasParams $saasParams
   */
  public function setSaasParams(GoogleCloudDiscoveryengineV1ProvisionProjectRequestSaasParams $saasParams)
  {
    $this->saasParams = $saasParams;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProvisionProjectRequestSaasParams
   */
  public function getSaasParams()
  {
    return $this->saasParams;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1ProvisionProjectRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1ProvisionProjectRequest');
