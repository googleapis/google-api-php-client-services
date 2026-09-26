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

namespace Google\Service\CustomerEngagementSuite;

class ArtifactChunk extends \Google\Model
{
  /**
   * Unused default.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The assistant started generating the artifact.
   */
  public const STATE_STARTED = 'STARTED';
  /**
   * A content increment; content_delta is set.
   */
  public const STATE_DELTA = 'DELTA';
  /**
   * The artifact was persisted; gcs_uri is set.
   */
  public const STATE_FINALIZED = 'FINALIZED';
  /**
   * Generation or persistence failed; the artifact was not saved.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The document finished streaming: its content was fully delivered via
   * content_delta chunks. Persistence may still follow; a FINALIZED chunk with
   * a gcs_uri is sent if and when the artifact is saved.
   */
  public const STATE_CLOSED = 'CLOSED';
  /**
   * Identifier of the artifact, stable across all chunks of one artifact within
   * the stream.
   *
   * @var string
   */
  public $artifactId;
  /**
   * Incremental artifact content. Set on DELTA chunks.
   *
   * @var string
   */
  public $contentDelta;
  /**
   * The file name shown to the user, e.g. "hotel_booking_tdd.md". Set on
   * STARTED (and repeated on FINALIZED).
   *
   * @var string
   */
  public $displayName;
  /**
   * The GCS object the artifact was persisted to. Set on FINALIZED chunks.
   *
   * @var string
   */
  public $gcsUri;
  /**
   * The IANA media type of the artifact content, e.g. "text/markdown".
   *
   * @var string
   */
  public $mimeType;
  /**
   * Lifecycle position of this chunk.
   *
   * @var string
   */
  public $state;

  /**
   * Identifier of the artifact, stable across all chunks of one artifact within
   * the stream.
   *
   * @param string $artifactId
   */
  public function setArtifactId($artifactId)
  {
    $this->artifactId = $artifactId;
  }
  /**
   * @return string
   */
  public function getArtifactId()
  {
    return $this->artifactId;
  }
  /**
   * Incremental artifact content. Set on DELTA chunks.
   *
   * @param string $contentDelta
   */
  public function setContentDelta($contentDelta)
  {
    $this->contentDelta = $contentDelta;
  }
  /**
   * @return string
   */
  public function getContentDelta()
  {
    return $this->contentDelta;
  }
  /**
   * The file name shown to the user, e.g. "hotel_booking_tdd.md". Set on
   * STARTED (and repeated on FINALIZED).
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
   * The GCS object the artifact was persisted to. Set on FINALIZED chunks.
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * The IANA media type of the artifact content, e.g. "text/markdown".
   *
   * @param string $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
   * Lifecycle position of this chunk.
   *
   * Accepted values: STATE_UNSPECIFIED, STARTED, DELTA, FINALIZED, FAILED,
   * CLOSED
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
class_alias(ArtifactChunk::class, 'Google_Service_CustomerEngagementSuite_ArtifactChunk');
