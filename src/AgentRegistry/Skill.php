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

class Skill extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The skill is being created. It is not served.
   */
  public const STATE_STATE_CREATING = 'STATE_CREATING';
  /**
   * The skill is in draft, or lacks a valid payload. It is not served.
   */
  public const STATE_STATE_DRAFT = 'STATE_DRAFT';
  /**
   * The skill is active and is served.
   */
  public const STATE_STATE_ACTIVE = 'STATE_ACTIVE';
  /**
   * The skill is disabled and is not served.
   */
  public const STATE_STATE_DISABLED = 'STATE_DISABLED';
  /**
   * The skill is deprecated. It is served, but emits warnings.
   */
  public const STATE_STATE_DEPRECATED = 'STATE_DEPRECATED';
  /**
   * The skill is decommissioned and is not served.
   */
  public const STATE_STATE_DECOMMISSIONED = 'STATE_DECOMMISSIONED';
  /**
   * The skill is being deleted. It is not served.
   */
  public const STATE_STATE_DELETING = 'STATE_DELETING';
  /**
   * Default value. This value is unused.
   */
  public const TARGET_STATE_TARGET_STATE_UNSPECIFIED = 'TARGET_STATE_UNSPECIFIED';
  /**
   * The skill is in draft and cannot be served.
   */
  public const TARGET_STATE_TARGET_STATE_DRAFT = 'TARGET_STATE_DRAFT';
  /**
   * The skill is active and can be served.
   */
  public const TARGET_STATE_TARGET_STATE_ACTIVE = 'TARGET_STATE_ACTIVE';
  /**
   * The skill is disabled and cannot be served.
   */
  public const TARGET_STATE_TARGET_STATE_DISABLED = 'TARGET_STATE_DISABLED';
  /**
   * The skill is deprecated. It can still be served, but emits warnings.
   */
  public const TARGET_STATE_TARGET_STATE_DEPRECATED = 'TARGET_STATE_DEPRECATED';
  /**
   * The skill is decommissioned and cannot be served.
   */
  public const TARGET_STATE_TARGET_STATE_DECOMMISSIONED = 'TARGET_STATE_DECOMMISSIONED';
  /**
   * Default value. This value is unused.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * A standard, leaf executable skill containing natural language and code.
   */
  public const TYPE_SIMPLE = 'SIMPLE';
  /**
   * Output only. Create time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The full resource name of the revision currently served by
   * default (floating track). Format: `projects/{project}/locations/{location}/
   * skills/{skill}/revisions/{revision}`
   *
   * @var string
   */
  public $defaultRevision;
  /**
   * Optional. Brief summary describing the capabilities of the skill. Maximum
   * length is 2048 characters.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Human-readable display name of the skill. Maximum length is 128
   * characters.
   *
   * @var string
   */
  public $displayName;
  protected $frontmatterType = Frontmatter::class;
  protected $frontmatterDataType = '';
  protected $initialRevisionType = SkillRevision::class;
  protected $initialRevisionDataType = '';
  /**
   * Identifier. Resource name of the Skill. Format:
   * `projects/{project}/locations/{location}/skills/{skill}` The `{skill}`
   * segment acts as the resource ID. If the skill is associated with a
   * Publisher, this segment typically uses a hyphenated namespace prefix
   * corresponding to the publisher (e.g., `google-workspace-create-docs`).
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The publisher resource associated with this skill. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}` The
   * publisher dictates the allowed namespace prefixes for the skill's name and
   * logical `skill_id` (e.g., Publisher `google` authorizes the `google-*`
   * prefix).
   *
   * @var string
   */
  public $publisher;
  protected $scanningConfigType = ScanningConfig::class;
  protected $scanningConfigDataType = '';
  /**
   * Output only. A stable, globally unique logical identifier for the skill. It
   * is securely constructed by the backend by combining the associated
   * `publisher`'s verified namespace and the skill's resource ID to enforce
   * strict ownership. For example, the prefix `google-` is reserved exclusively
   * for first-party Google publishers to prevent namespace squatting. Example:
   * `urn:skill:google-workspace:create-docs`
   *
   * @var string
   */
  public $skillId;
  /**
   * Output only. The system-managed state of the skill.
   *
   * @var string
   */
  public $state;
  /**
   * Required. User-managed target state of the skill.
   *
   * @var string
   */
  public $targetState;
  /**
   * Required. Structural deployment type (SIMPLE leaf vs COMPOSITE bundle).
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Universally unique identifier (UUID4) for the logical
   * container.
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
   * Optional. The full resource name of the revision currently served by
   * default (floating track). Format: `projects/{project}/locations/{location}/
   * skills/{skill}/revisions/{revision}`
   *
   * @param string $defaultRevision
   */
  public function setDefaultRevision($defaultRevision)
  {
    $this->defaultRevision = $defaultRevision;
  }
  /**
   * @return string
   */
  public function getDefaultRevision()
  {
    return $this->defaultRevision;
  }
  /**
   * Optional. Brief summary describing the capabilities of the skill. Maximum
   * length is 2048 characters.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. Human-readable display name of the skill. Maximum length is 128
   * characters.
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
   * Output only. Lightweight frontmatter metadata attributes copied from the
   * default revision.
   *
   * @param Frontmatter $frontmatter
   */
  public function setFrontmatter(Frontmatter $frontmatter)
  {
    $this->frontmatter = $frontmatter;
  }
  /**
   * @return Frontmatter
   */
  public function getFrontmatter()
  {
    return $this->frontmatter;
  }
  /**
   * Optional. Input only. Optional nested initial revision payload to support
   * standard one-shot creation. The server processes this field on input during
   * creation but must never return it in responses.
   *
   * @param SkillRevision $initialRevision
   */
  public function setInitialRevision(SkillRevision $initialRevision)
  {
    $this->initialRevision = $initialRevision;
  }
  /**
   * @return SkillRevision
   */
  public function getInitialRevision()
  {
    return $this->initialRevision;
  }
  /**
   * Identifier. Resource name of the Skill. Format:
   * `projects/{project}/locations/{location}/skills/{skill}` The `{skill}`
   * segment acts as the resource ID. If the skill is associated with a
   * Publisher, this segment typically uses a hyphenated namespace prefix
   * corresponding to the publisher (e.g., `google-workspace-create-docs`).
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
   * Optional. The publisher resource associated with this skill. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}` The
   * publisher dictates the allowed namespace prefixes for the skill's name and
   * logical `skill_id` (e.g., Publisher `google` authorizes the `google-*`
   * prefix).
   *
   * @param string $publisher
   */
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  /**
   * @return string
   */
  public function getPublisher()
  {
    return $this->publisher;
  }
  /**
   * Optional. Optional. Scanning configuration for the skill.
   *
   * @param ScanningConfig $scanningConfig
   */
  public function setScanningConfig(ScanningConfig $scanningConfig)
  {
    $this->scanningConfig = $scanningConfig;
  }
  /**
   * @return ScanningConfig
   */
  public function getScanningConfig()
  {
    return $this->scanningConfig;
  }
  /**
   * Output only. A stable, globally unique logical identifier for the skill. It
   * is securely constructed by the backend by combining the associated
   * `publisher`'s verified namespace and the skill's resource ID to enforce
   * strict ownership. For example, the prefix `google-` is reserved exclusively
   * for first-party Google publishers to prevent namespace squatting. Example:
   * `urn:skill:google-workspace:create-docs`
   *
   * @param string $skillId
   */
  public function setSkillId($skillId)
  {
    $this->skillId = $skillId;
  }
  /**
   * @return string
   */
  public function getSkillId()
  {
    return $this->skillId;
  }
  /**
   * Output only. The system-managed state of the skill.
   *
   * Accepted values: STATE_UNSPECIFIED, STATE_CREATING, STATE_DRAFT,
   * STATE_ACTIVE, STATE_DISABLED, STATE_DEPRECATED, STATE_DECOMMISSIONED,
   * STATE_DELETING
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
  /**
   * Required. User-managed target state of the skill.
   *
   * Accepted values: TARGET_STATE_UNSPECIFIED, TARGET_STATE_DRAFT,
   * TARGET_STATE_ACTIVE, TARGET_STATE_DISABLED, TARGET_STATE_DEPRECATED,
   * TARGET_STATE_DECOMMISSIONED
   *
   * @param self::TARGET_STATE_* $targetState
   */
  public function setTargetState($targetState)
  {
    $this->targetState = $targetState;
  }
  /**
   * @return self::TARGET_STATE_*
   */
  public function getTargetState()
  {
    return $this->targetState;
  }
  /**
   * Required. Structural deployment type (SIMPLE leaf vs COMPOSITE bundle).
   *
   * Accepted values: TYPE_UNSPECIFIED, SIMPLE
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. Universally unique identifier (UUID4) for the logical
   * container.
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
class_alias(Skill::class, 'Google_Service_AgentRegistry_Skill');
