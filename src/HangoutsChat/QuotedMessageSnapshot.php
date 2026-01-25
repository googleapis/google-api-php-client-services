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

class QuotedMessageSnapshot extends \Google\Collection
{
  protected $collection_key = 'attachments';
  protected $annotationsType = Annotation::class;
  protected $annotationsDataType = 'array';
  protected $attachmentsType = Attachment::class;
  protected $attachmentsDataType = 'array';
  /**
   * Output only. Contains the quoted message `text` with markups added to
   * support rich formatting like hyperlinks,custom emojis, markup, etc.
   * Populated only for FORWARD quote type.
   *
   * @var string
   */
  public $formattedText;
  /**
   * Output only. The quoted message's author name. Populated for both REPLY &
   * FORWARD quote types.
   *
   * @var string
   */
  public $sender;
  /**
   * Output only. Snapshot of the quoted message's text content.
   *
   * @var string
   */
  public $text;

  /**
   * Output only. Annotations parsed from the text body of the quoted message.
   * Populated only for FORWARD quote type.
   *
   * @param Annotation[] $annotations
   */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return Annotation[]
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * Output only. Attachments that were part of the quoted message. These are
   * copies of the quoted message's attachment metadata. Populated only for
   * FORWARD quote type.
   *
   * @param Attachment[] $attachments
   */
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  /**
   * @return Attachment[]
   */
  public function getAttachments()
  {
    return $this->attachments;
  }
  /**
   * Output only. Contains the quoted message `text` with markups added to
   * support rich formatting like hyperlinks,custom emojis, markup, etc.
   * Populated only for FORWARD quote type.
   *
   * @param string $formattedText
   */
  public function setFormattedText($formattedText)
  {
    $this->formattedText = $formattedText;
  }
  /**
   * @return string
   */
  public function getFormattedText()
  {
    return $this->formattedText;
  }
  /**
   * Output only. The quoted message's author name. Populated for both REPLY &
   * FORWARD quote types.
   *
   * @param string $sender
   */
  public function setSender($sender)
  {
    $this->sender = $sender;
  }
  /**
   * @return string
   */
  public function getSender()
  {
    return $this->sender;
  }
  /**
   * Output only. Snapshot of the quoted message's text content.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuotedMessageSnapshot::class, 'Google_Service_HangoutsChat_QuotedMessageSnapshot');
