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

class AutokeyConfig extends \Google\Model
{
  /**
   * Default value. KeyProjectResolutionMode when not specified will act as
   * `DEDICATED_KEY_PROJECT`.
   */
  public const KEY_PROJECT_RESOLUTION_MODE_KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED = 'KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED';
  /**
   * Keys are created in a dedicated project specified by `key_project`.
   */
  public const KEY_PROJECT_RESOLUTION_MODE_DEDICATED_KEY_PROJECT = 'DEDICATED_KEY_PROJECT';
  /**
   * Keys are created in the same project as the resource requesting the key.
   * The `key_project` must not be set when this mode is used.
   */
  public const KEY_PROJECT_RESOLUTION_MODE_RESOURCE_PROJECT = 'RESOURCE_PROJECT';
  /**
   * Disables the AutokeyConfig. When this mode is set, any AutokeyConfig from
   * higher levels in the resource hierarchy are ignored for this resource and
   * its descendants. This setting can be overridden by a more specific
   * configuration at a lower level. For example, if Autokey is disabled on a
   * folder, it can be re-enabled on a sub-folder or project within that folder
   * by setting a different mode (e.g., DEDICATED_KEY_PROJECT or
   * RESOURCE_PROJECT).
   */
  public const KEY_PROJECT_RESOLUTION_MODE_DISABLED = 'DISABLED';
  /**
   * The state of the AutokeyConfig is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The AutokeyConfig is currently active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * A previously configured key project has been deleted and the current
   * AutokeyConfig is unusable.
   */
  public const STATE_KEY_PROJECT_DELETED = 'KEY_PROJECT_DELETED';
  /**
   * The AutokeyConfig is not yet initialized or has been reset to its default
   * uninitialized state.
   */
  public const STATE_UNINITIALIZED = 'UNINITIALIZED';
  /**
   * Optional. A checksum computed by the server based on the value of other
   * fields. This may be sent on update requests to ensure that the client has
   * an up-to-date value before proceeding. The request will be rejected with an
   * ABORTED error on a mismatched etag.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. Name of the key project, e.g. `projects/{PROJECT_ID}` or
   * `projects/{PROJECT_NUMBER}`, where Cloud KMS Autokey will provision a new
   * CryptoKey when a KeyHandle is created. On UpdateAutokeyConfig, the caller
   * will require `cloudkms.cryptoKeys.setIamPolicy` permission on this key
   * project. Once configured, for Cloud KMS Autokey to function properly, this
   * key project must have the Cloud KMS API activated and the Cloud KMS Service
   * Agent for this key project must be granted the `cloudkms.admin` role (or
   * pertinent permissions). A request with an empty key project field will
   * clear the configuration.
   *
   * @var string
   */
  public $keyProject;
  /**
   * Optional. KeyProjectResolutionMode for the AutokeyConfig. Valid values are
   * `DEDICATED_KEY_PROJECT`, `RESOURCE_PROJECT`, or `DISABLED`.
   *
   * @var string
   */
  public $keyProjectResolutionMode;
  /**
   * Identifier. Name of the AutokeyConfig resource, e.g.
   * `folders/{FOLDER_NUMBER}/autokeyConfig` or
   * `projects/{PROJECT_NUMBER}/autokeyConfig`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state for the AutokeyConfig.
   *
   * @var string
   */
  public $state;

  /**
   * Optional. A checksum computed by the server based on the value of other
   * fields. This may be sent on update requests to ensure that the client has
   * an up-to-date value before proceeding. The request will be rejected with an
   * ABORTED error on a mismatched etag.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. Name of the key project, e.g. `projects/{PROJECT_ID}` or
   * `projects/{PROJECT_NUMBER}`, where Cloud KMS Autokey will provision a new
   * CryptoKey when a KeyHandle is created. On UpdateAutokeyConfig, the caller
   * will require `cloudkms.cryptoKeys.setIamPolicy` permission on this key
   * project. Once configured, for Cloud KMS Autokey to function properly, this
   * key project must have the Cloud KMS API activated and the Cloud KMS Service
   * Agent for this key project must be granted the `cloudkms.admin` role (or
   * pertinent permissions). A request with an empty key project field will
   * clear the configuration.
   *
   * @param string $keyProject
   */
  public function setKeyProject($keyProject)
  {
    $this->keyProject = $keyProject;
  }
  /**
   * @return string
   */
  public function getKeyProject()
  {
    return $this->keyProject;
  }
  /**
   * Optional. KeyProjectResolutionMode for the AutokeyConfig. Valid values are
   * `DEDICATED_KEY_PROJECT`, `RESOURCE_PROJECT`, or `DISABLED`.
   *
   * Accepted values: KEY_PROJECT_RESOLUTION_MODE_UNSPECIFIED,
   * DEDICATED_KEY_PROJECT, RESOURCE_PROJECT, DISABLED
   *
   * @param self::KEY_PROJECT_RESOLUTION_MODE_* $keyProjectResolutionMode
   */
  public function setKeyProjectResolutionMode($keyProjectResolutionMode)
  {
    $this->keyProjectResolutionMode = $keyProjectResolutionMode;
  }
  /**
   * @return self::KEY_PROJECT_RESOLUTION_MODE_*
   */
  public function getKeyProjectResolutionMode()
  {
    return $this->keyProjectResolutionMode;
  }
  /**
   * Identifier. Name of the AutokeyConfig resource, e.g.
   * `folders/{FOLDER_NUMBER}/autokeyConfig` or
   * `projects/{PROJECT_NUMBER}/autokeyConfig`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The state for the AutokeyConfig.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, KEY_PROJECT_DELETED,
   * UNINITIALIZED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutokeyConfig::class, 'Google_Service_CloudKMS_AutokeyConfig');
