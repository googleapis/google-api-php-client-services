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

namespace Google\Service\DeviceRun;

class CatalogSoftwareVersion extends \Google\Model
{
  /**
   * Software type not specified.
   */
  public const SOFTWARE_TYPE_SOFTWARE_TYPE_UNSPECIFIED = 'SOFTWARE_TYPE_UNSPECIFIED';
  /**
   * AndroidX Test Orchestrator, which runs each Android instrumentation test
   * case in its own process.
   */
  public const SOFTWARE_TYPE_ANDROIDX_TEST_ORCHESTRATOR = 'ANDROIDX_TEST_ORCHESTRATOR';
  /**
   * Apple Xcode, the toolchain that builds and runs iOS XCTests.
   */
  public const SOFTWARE_TYPE_XCODE = 'XCODE';
  protected $androidxTestOrchestratorDetailsType = CatalogAndroidxTestOrchestratorDetails::class;
  protected $androidxTestOrchestratorDetailsDataType = '';
  /**
   * Output only. Provides a human-readable name for this version, e.g.
   * "AndroidX Test Orchestrator 1.4.1".
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Indicates whether the system uses this version when a request
   * does not select one explicitly. Exactly one version per `software_type` is
   * the default, and it may change over time.
   *
   * @var bool
   */
  public $isDefault;
  protected $lifecycleType = CatalogLifecycle::class;
  protected $lifecycleDataType = '';
  /**
   * Identifier. Identifies the software version resource. Format: `projects/{pr
   * oject}/locations/{location}/softwareVersions/{software_version}`. The
   * {software_version} segment is an opaque, stable string. Clients must not
   * parse it to derive or assume the version.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Specifies which software this is a version of. Filter on this
   * field to narrow the collection to a single kind of software, for example
   * `software_type = "ANDROIDX_TEST_ORCHESTRATOR"`.
   *
   * @var string
   */
  public $softwareType;
  /**
   * Output only. Specifies the version identifier, e.g. "1.4.1". Unique within
   * a `software_type`.
   *
   * @var string
   */
  public $version;
  protected $xcodeDetailsType = CatalogXcodeDetails::class;
  protected $xcodeDetailsDataType = '';

  /**
   * Output only. Contains AndroidX Test Orchestrator-specific attributes (set
   * when software_type == ANDROIDX_TEST_ORCHESTRATOR).
   *
   * @param CatalogAndroidxTestOrchestratorDetails $androidxTestOrchestratorDetails
   */
  public function setAndroidxTestOrchestratorDetails(CatalogAndroidxTestOrchestratorDetails $androidxTestOrchestratorDetails)
  {
    $this->androidxTestOrchestratorDetails = $androidxTestOrchestratorDetails;
  }
  /**
   * @return CatalogAndroidxTestOrchestratorDetails
   */
  public function getAndroidxTestOrchestratorDetails()
  {
    return $this->androidxTestOrchestratorDetails;
  }
  /**
   * Output only. Provides a human-readable name for this version, e.g.
   * "AndroidX Test Orchestrator 1.4.1".
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. Indicates whether the system uses this version when a request
   * does not select one explicitly. Exactly one version per `software_type` is
   * the default, and it may change over time.
   *
   * @param bool $isDefault
   */
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /**
   * @return bool
   */
  public function getIsDefault()
  {
    return $this->isDefault;
  }
  /**
   * Output only. The version lifecycle (maturity stage and removal date).
   *
   * @param CatalogLifecycle $lifecycle
   */
  public function setLifecycle(CatalogLifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }
  /**
   * @return CatalogLifecycle
   */
  public function getLifecycle()
  {
    return $this->lifecycle;
  }
  /**
   * Identifier. Identifies the software version resource. Format: `projects/{pr
   * oject}/locations/{location}/softwareVersions/{software_version}`. The
   * {software_version} segment is an opaque, stable string. Clients must not
   * parse it to derive or assume the version.
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
   * Output only. Specifies which software this is a version of. Filter on this
   * field to narrow the collection to a single kind of software, for example
   * `software_type = "ANDROIDX_TEST_ORCHESTRATOR"`.
   *
   * Accepted values: SOFTWARE_TYPE_UNSPECIFIED, ANDROIDX_TEST_ORCHESTRATOR,
   * XCODE
   *
   * @param self::SOFTWARE_TYPE_* $softwareType
   */
  public function setSoftwareType($softwareType)
  {
    $this->softwareType = $softwareType;
  }
  /**
   * @return self::SOFTWARE_TYPE_*
   */
  public function getSoftwareType()
  {
    return $this->softwareType;
  }
  /**
   * Output only. Specifies the version identifier, e.g. "1.4.1". Unique within
   * a `software_type`.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
  /**
   * Output only. Contains Xcode-specific attributes (set when software_type ==
   * XCODE).
   *
   * @param CatalogXcodeDetails $xcodeDetails
   */
  public function setXcodeDetails(CatalogXcodeDetails $xcodeDetails)
  {
    $this->xcodeDetails = $xcodeDetails;
  }
  /**
   * @return CatalogXcodeDetails
   */
  public function getXcodeDetails()
  {
    return $this->xcodeDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogSoftwareVersion::class, 'Google_Service_DeviceRun_CatalogSoftwareVersion');
