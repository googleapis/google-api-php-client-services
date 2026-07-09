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

class GoogleCloudAiplatformV1IngestEventsRequest extends \Google\Model
{
  /**
   * Unspecified metadata merge strategy. If unspecified, the default behavior
   * is to overwrite existing metadata (`OVERWRITE`).
   */
  public const METADATA_MERGE_STRATEGY_METADATA_MERGE_STRATEGY_UNSPECIFIED = 'METADATA_MERGE_STRATEGY_UNSPECIFIED';
  /**
   * Replace the metadata of the updated memories with the new metadata.
   */
  public const METADATA_MERGE_STRATEGY_OVERWRITE = 'OVERWRITE';
  /**
   * Append new metadata to the existing metadata. If there are duplicate keys,
   * the existing values will be overwritten.
   */
  public const METADATA_MERGE_STRATEGY_MERGE = 'MERGE';
  /**
   * Restrict consolidation to memories that have exactly the same metadata as
   * the request. If a memory doesn't have the same metadata, it is not eligible
   * for consolidation.
   */
  public const METADATA_MERGE_STRATEGY_REQUIRE_EXACT_MATCH = 'REQUIRE_EXACT_MATCH';
  protected $directContentsSourceType = GoogleCloudAiplatformV1IngestionDirectContentsSource::class;
  protected $directContentsSourceDataType = '';
  /**
   * Optional. If true, no revisions will be created for this request.
   *
   * @var bool
   */
  public $disableMemoryRevisions;
  /**
   * Optional. Forces a flush of all pending events in the stream and triggers
   * memory generation immediately bypassing any conditions configured in the
   * `generation_trigger_config`.
   *
   * @var bool
   */
  public $forceFlush;
  protected $generationTriggerConfigType = GoogleCloudAiplatformV1MemoryGenerationTriggerConfig::class;
  protected $generationTriggerConfigDataType = '';
  protected $metadataType = GoogleCloudAiplatformV1MemoryMetadataValue::class;
  protected $metadataDataType = 'map';
  /**
   * Optional. The strategy to use when applying metadata to existing memories.
   *
   * @var string
   */
  public $metadataMergeStrategy;
  /**
   * Optional. Timestamp of when the revision is considered expired. If not set,
   * the memory revision will be kept until manually deleted.
   *
   * @var string
   */
  public $revisionExpireTime;
  /**
   * Optional. Labels to be applied to the generated memory revisions. For
   * example, you can use this to label a revision with its data source.
   *
   * @var string[]
   */
  public $revisionLabels;
  /**
   * Optional. The TTL for the revision. The expiration time is computed: now +
   * TTL.
   *
   * @var string
   */
  public $revisionTtl;
  /**
   * Required. The scope of the memories that should be generated from the
   * stream. Memories will be consolidated across memories with the same scope.
   * Scope values cannot contain the wildcard character '*'.
   *
   * @var string[]
   */
  public $scope;
  /**
   * Optional. The ID of the stream to ingest events into. If not provided, a
   * new one will be created.
   *
   * @var string
   */
  public $streamId;

  /**
   * Ingest events directly from the request.
   *
   * @param GoogleCloudAiplatformV1IngestionDirectContentsSource $directContentsSource
   */
  public function setDirectContentsSource(GoogleCloudAiplatformV1IngestionDirectContentsSource $directContentsSource)
  {
    $this->directContentsSource = $directContentsSource;
  }
  /**
   * @return GoogleCloudAiplatformV1IngestionDirectContentsSource
   */
  public function getDirectContentsSource()
  {
    return $this->directContentsSource;
  }
  /**
   * Optional. If true, no revisions will be created for this request.
   *
   * @param bool $disableMemoryRevisions
   */
  public function setDisableMemoryRevisions($disableMemoryRevisions)
  {
    $this->disableMemoryRevisions = $disableMemoryRevisions;
  }
  /**
   * @return bool
   */
  public function getDisableMemoryRevisions()
  {
    return $this->disableMemoryRevisions;
  }
  /**
   * Optional. Forces a flush of all pending events in the stream and triggers
   * memory generation immediately bypassing any conditions configured in the
   * `generation_trigger_config`.
   *
   * @param bool $forceFlush
   */
  public function setForceFlush($forceFlush)
  {
    $this->forceFlush = $forceFlush;
  }
  /**
   * @return bool
   */
  public function getForceFlush()
  {
    return $this->forceFlush;
  }
  /**
   * Optional. Configuration for triggering memory generation from this
   * ingestion. If not set, then the stream will be force flushed immediately.
   *
   * @param GoogleCloudAiplatformV1MemoryGenerationTriggerConfig $generationTriggerConfig
   */
  public function setGenerationTriggerConfig(GoogleCloudAiplatformV1MemoryGenerationTriggerConfig $generationTriggerConfig)
  {
    $this->generationTriggerConfig = $generationTriggerConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1MemoryGenerationTriggerConfig
   */
  public function getGenerationTriggerConfig()
  {
    return $this->generationTriggerConfig;
  }
  /**
   * Optional. User-provided metadata for the generated memories. This is not
   * generated by Memory Bank.
   *
   * @param GoogleCloudAiplatformV1MemoryMetadataValue[] $metadata
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GoogleCloudAiplatformV1MemoryMetadataValue[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Optional. The strategy to use when applying metadata to existing memories.
   *
   * Accepted values: METADATA_MERGE_STRATEGY_UNSPECIFIED, OVERWRITE, MERGE,
   * REQUIRE_EXACT_MATCH
   *
   * @param self::METADATA_MERGE_STRATEGY_* $metadataMergeStrategy
   */
  public function setMetadataMergeStrategy($metadataMergeStrategy)
  {
    $this->metadataMergeStrategy = $metadataMergeStrategy;
  }
  /**
   * @return self::METADATA_MERGE_STRATEGY_*
   */
  public function getMetadataMergeStrategy()
  {
    return $this->metadataMergeStrategy;
  }
  /**
   * Optional. Timestamp of when the revision is considered expired. If not set,
   * the memory revision will be kept until manually deleted.
   *
   * @param string $revisionExpireTime
   */
  public function setRevisionExpireTime($revisionExpireTime)
  {
    $this->revisionExpireTime = $revisionExpireTime;
  }
  /**
   * @return string
   */
  public function getRevisionExpireTime()
  {
    return $this->revisionExpireTime;
  }
  /**
   * Optional. Labels to be applied to the generated memory revisions. For
   * example, you can use this to label a revision with its data source.
   *
   * @param string[] $revisionLabels
   */
  public function setRevisionLabels($revisionLabels)
  {
    $this->revisionLabels = $revisionLabels;
  }
  /**
   * @return string[]
   */
  public function getRevisionLabels()
  {
    return $this->revisionLabels;
  }
  /**
   * Optional. The TTL for the revision. The expiration time is computed: now +
   * TTL.
   *
   * @param string $revisionTtl
   */
  public function setRevisionTtl($revisionTtl)
  {
    $this->revisionTtl = $revisionTtl;
  }
  /**
   * @return string
   */
  public function getRevisionTtl()
  {
    return $this->revisionTtl;
  }
  /**
   * Required. The scope of the memories that should be generated from the
   * stream. Memories will be consolidated across memories with the same scope.
   * Scope values cannot contain the wildcard character '*'.
   *
   * @param string[] $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return string[]
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Optional. The ID of the stream to ingest events into. If not provided, a
   * new one will be created.
   *
   * @param string $streamId
   */
  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  /**
   * @return string
   */
  public function getStreamId()
  {
    return $this->streamId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1IngestEventsRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1IngestEventsRequest');
