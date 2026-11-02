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

namespace Google\Service\AgentRegistry;

class Finding extends \Google\Collection
{
  /**
   * Unspecified finding class.
   */
  public const FINDING_CLASS_FINDING_CLASS_UNSPECIFIED = 'FINDING_CLASS_UNSPECIFIED';
  /**
   * Describes a potential weakness in software that increases risk to
   * Confidentiality & Integrity & Availability.
   */
  public const FINDING_CLASS_VULNERABILITY = 'VULNERABILITY';
  /**
   * Describes a potential security risk due to plaintext credentials, keys, or
   * tokens being exposed in an asset or workload.
   */
  public const FINDING_CLASS_SECRET = 'SECRET';
  /**
   * This value is used for findings when a source doesn't write a severity
   * value.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Critical severity.
   */
  public const SEVERITY_SEVERITY_CRITICAL = 'SEVERITY_CRITICAL';
  /**
   * High severity.
   */
  public const SEVERITY_SEVERITY_HIGH = 'SEVERITY_HIGH';
  /**
   * Medium severity.
   */
  public const SEVERITY_SEVERITY_MEDIUM = 'SEVERITY_MEDIUM';
  /**
   * Low severity.
   */
  public const SEVERITY_SEVERITY_LOW = 'SEVERITY_LOW';
  protected $collection_key = 'files';
  /**
   * Output only. Create time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Detailed description of the finding.
   *
   * @var string
   */
  public $detail;
  protected $filesType = AgentregistryFile::class;
  protected $filesDataType = 'array';
  /**
   * Optional. Class of the finding.
   *
   * @var string
   */
  public $findingClass;
  /**
   * Identifier. Resource name of the Finding. Format:
   * `projects/{project}/locations/{location}/findings/{finding}`.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The resource that the finding is associated with.
   *
   * @var string
   */
  public $resource;
  /**
   * Optional. Severity of the finding.
   *
   * @var string
   */
  public $severity;
  /**
   * Output only. Universally unique identifier (UUID4) for the Finding.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. Update time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Create time.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Detailed description of the finding.
   *
   * @param string $detail
   */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return string
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Optional. File associated with the finding.
   *
   * @param AgentregistryFile[] $files
   */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /**
   * @return AgentregistryFile[]
   */
  public function getFiles()
  {
    return $this->files;
  }
  /**
   * Optional. Class of the finding.
   *
   * Accepted values: FINDING_CLASS_UNSPECIFIED, VULNERABILITY, SECRET
   *
   * @param self::FINDING_CLASS_* $findingClass
   */
  public function setFindingClass($findingClass)
  {
    $this->findingClass = $findingClass;
  }
  /**
   * @return self::FINDING_CLASS_*
   */
  public function getFindingClass()
  {
    return $this->findingClass;
  }
  /**
   * Identifier. Resource name of the Finding. Format:
   * `projects/{project}/locations/{location}/findings/{finding}`.
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
   * Optional. The resource that the finding is associated with.
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * Optional. Severity of the finding.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, SEVERITY_CRITICAL, SEVERITY_HIGH,
   * SEVERITY_MEDIUM, SEVERITY_LOW
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * Output only. Universally unique identifier (UUID4) for the Finding.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. Update time.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Finding::class, 'Google_Service_AgentRegistry_Finding');
