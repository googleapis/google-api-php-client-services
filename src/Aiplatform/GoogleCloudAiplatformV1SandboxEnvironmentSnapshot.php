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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1SandboxEnvironmentSnapshot extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const POST_SNAPSHOT_ACTION_POST_SNAPSHOT_ACTION_UNSPECIFIED = 'POST_SNAPSHOT_ACTION_UNSPECIFIED';
  /**
   * Sandbox environment will continue to run after snapshot is taken.
   */
  public const POST_SNAPSHOT_ACTION_RUNNING = 'RUNNING';
  /**
   * Sandbox environment will be paused after snapshot is taken.
   */
  public const POST_SNAPSHOT_ACTION_PAUSE = 'PAUSE';
  /**
   * Output only. The timestamp when this SandboxEnvironmentSnapshot was
   * created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. The display name of the SandboxEnvironmentSnapshot.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Timestamp in UTC of when this SandboxEnvironmentSnapshot is
   * considered expired. This is *always* provided on output, regardless of what
   * `expiration` was sent on input.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Identifier. The resource name of the SandboxEnvironmentSnapshot. Format: `p
   * rojects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}/
   * sandboxEnvironmentSnapshots/{sandbox_environment_snapshot}`
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Owner information for this sandbox snapshot. Different owners
   * will have isolations on snapshot storage and identity. If not set, snapshot
   * will be created as the default owner.
   *
   * @var string
   */
  public $owner;
  /**
   * Output only. The resource name of the parent SandboxEnvironmentSnapshot.
   * Empty if this is a root Snapshot (the first snapshot from a newly created
   * sandbox). Can be used to reconstruct the whole ancestry tree of snapshots.
   *
   * @var string
   */
  public $parentSnapshot;
  /**
   * Optional. Input only. Action to take on the source SandboxEnvironment after
   * the snapshot is taken. This field is only used in
   * CreateSandboxEnvironmentSnapshotRequest and it is not stored in the
   * resource.
   *
   * @var string
   */
  public $postSnapshotAction;
  /**
   * Optional. Output only. Size of the snapshot data in bytes.
   *
   * @var string
   */
  public $sizeBytes;
  /**
   * Required. The resource name of the source SandboxEnvironment this snapshot
   * was taken from.
   *
   * @var string
   */
  public $sourceSandboxEnvironment;
  /**
   * Optional. Input only. The TTL for the sandbox environment snapshot. The
   * expiration time is computed: now + TTL.
   *
   * @var string
   */
  public $ttl;
  /**
   * Output only. The timestamp when this SandboxEnvironment was most recently
   * updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The timestamp when this SandboxEnvironmentSnapshot was
   * created.
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
   * Required. The display name of the SandboxEnvironmentSnapshot.
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
   * Optional. Timestamp in UTC of when this SandboxEnvironmentSnapshot is
   * considered expired. This is *always* provided on output, regardless of what
   * `expiration` was sent on input.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Identifier. The resource name of the SandboxEnvironmentSnapshot. Format: `p
   * rojects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}/
   * sandboxEnvironmentSnapshots/{sandbox_environment_snapshot}`
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
   * Optional. Owner information for this sandbox snapshot. Different owners
   * will have isolations on snapshot storage and identity. If not set, snapshot
   * will be created as the default owner.
   *
   * @param string $owner
   */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  /**
   * @return string
   */
  public function getOwner()
  {
    return $this->owner;
  }
  /**
   * Output only. The resource name of the parent SandboxEnvironmentSnapshot.
   * Empty if this is a root Snapshot (the first snapshot from a newly created
   * sandbox). Can be used to reconstruct the whole ancestry tree of snapshots.
   *
   * @param string $parentSnapshot
   */
  public function setParentSnapshot($parentSnapshot)
  {
    $this->parentSnapshot = $parentSnapshot;
  }
  /**
   * @return string
   */
  public function getParentSnapshot()
  {
    return $this->parentSnapshot;
  }
  /**
   * Optional. Input only. Action to take on the source SandboxEnvironment after
   * the snapshot is taken. This field is only used in
   * CreateSandboxEnvironmentSnapshotRequest and it is not stored in the
   * resource.
   *
   * Accepted values: POST_SNAPSHOT_ACTION_UNSPECIFIED, RUNNING, PAUSE
   *
   * @param self::POST_SNAPSHOT_ACTION_* $postSnapshotAction
   */
  public function setPostSnapshotAction($postSnapshotAction)
  {
    $this->postSnapshotAction = $postSnapshotAction;
  }
  /**
   * @return self::POST_SNAPSHOT_ACTION_*
   */
  public function getPostSnapshotAction()
  {
    return $this->postSnapshotAction;
  }
  /**
   * Optional. Output only. Size of the snapshot data in bytes.
   *
   * @param string $sizeBytes
   */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /**
   * @return string
   */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /**
   * Required. The resource name of the source SandboxEnvironment this snapshot
   * was taken from.
   *
   * @param string $sourceSandboxEnvironment
   */
  public function setSourceSandboxEnvironment($sourceSandboxEnvironment)
  {
    $this->sourceSandboxEnvironment = $sourceSandboxEnvironment;
  }
  /**
   * @return string
   */
  public function getSourceSandboxEnvironment()
  {
    return $this->sourceSandboxEnvironment;
  }
  /**
   * Optional. Input only. The TTL for the sandbox environment snapshot. The
   * expiration time is computed: now + TTL.
   *
   * @param string $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return string
   */
  public function getTtl()
  {
    return $this->ttl;
  }
  /**
   * Output only. The timestamp when this SandboxEnvironment was most recently
   * updated.
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
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentSnapshot::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentSnapshot');
