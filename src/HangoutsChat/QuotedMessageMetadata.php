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

namespace Google\Service\HangoutsChat;

class QuotedMessageMetadata extends \Google\Model
{
  /**
   * Reserved. This value is unused.
   */
  public const QUOTE_TYPE_QUOTE_TYPE_UNSPECIFIED = 'QUOTE_TYPE_UNSPECIFIED';
  /**
   * If quote_type is `REPLY`, you can do the following: * If you're replying in
   * a thread, you can quote another message in that thread. * If you're
   * creating a root message, you can quote another root message in that space.
   * You can't quote a message reply from a different thread.
   */
  public const QUOTE_TYPE_REPLY = 'REPLY';
  protected $forwardedMetadataType = ForwardedMetadata::class;
  protected $forwardedMetadataDataType = '';
  /**
   * Required. The timestamp when the quoted message was created or when the
   * quoted message was last updated. If the message was edited, use this field,
   * `last_update_time`. If the message was never edited, use `create_time`. If
   * `last_update_time` doesn't match the latest version of the quoted message,
   * the request fails.
   *
   * @var string
   */
  public $lastUpdateTime;
  /**
   * Required. Resource name of the message that is quoted. Format:
   * `spaces/{space}/messages/{message}`
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Specifies the quote type. If not set, defaults to REPLY in the
   * message read/write path for backward compatibility.
   *
   * @var string
   */
  public $quoteType;
  protected $quotedMessageSnapshotType = QuotedMessageSnapshot::class;
  protected $quotedMessageSnapshotDataType = '';

  /**
   * Output only. Metadata about the source space of the quoted message.
   * Populated only for FORWARD quote type.
   *
   * @param ForwardedMetadata $forwardedMetadata
   */
  public function setForwardedMetadata(ForwardedMetadata $forwardedMetadata)
  {
    $this->forwardedMetadata = $forwardedMetadata;
  }
  /**
   * @return ForwardedMetadata
   */
  public function getForwardedMetadata()
  {
    return $this->forwardedMetadata;
  }
  /**
   * Required. The timestamp when the quoted message was created or when the
   * quoted message was last updated. If the message was edited, use this field,
   * `last_update_time`. If the message was never edited, use `create_time`. If
   * `last_update_time` doesn't match the latest version of the quoted message,
   * the request fails.
   *
   * @param string $lastUpdateTime
   */
  public function setLastUpdateTime($lastUpdateTime)
  {
    $this->lastUpdateTime = $lastUpdateTime;
  }
  /**
   * @return string
   */
  public function getLastUpdateTime()
  {
    return $this->lastUpdateTime;
  }
  /**
   * Required. Resource name of the message that is quoted. Format:
   * `spaces/{space}/messages/{message}`
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
   * Optional. Specifies the quote type. If not set, defaults to REPLY in the
   * message read/write path for backward compatibility.
   *
   * Accepted values: QUOTE_TYPE_UNSPECIFIED, REPLY
   *
   * @param self::QUOTE_TYPE_* $quoteType
   */
  public function setQuoteType($quoteType)
  {
    $this->quoteType = $quoteType;
  }
  /**
   * @return self::QUOTE_TYPE_*
   */
  public function getQuoteType()
  {
    return $this->quoteType;
  }
  /**
   * Output only. A snapshot of the quoted message's content.
   *
   * @param QuotedMessageSnapshot $quotedMessageSnapshot
   */
  public function setQuotedMessageSnapshot(QuotedMessageSnapshot $quotedMessageSnapshot)
  {
    $this->quotedMessageSnapshot = $quotedMessageSnapshot;
  }
  /**
   * @return QuotedMessageSnapshot
   */
  public function getQuotedMessageSnapshot()
  {
    return $this->quotedMessageSnapshot;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuotedMessageMetadata::class, 'Google_Service_HangoutsChat_QuotedMessageMetadata');
