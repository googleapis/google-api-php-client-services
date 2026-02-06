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

class SessionInput extends \Google\Model
{
  /**
   * Optional. Audio data from the end user.
   *
   * @var string
   */
  public $audio;
  protected $blobType = Blob::class;
  protected $blobDataType = '';
  /**
   * Optional. DTMF digits from the end user.
   *
   * @var string
   */
  public $dtmf;
  protected $eventType = Event::class;
  protected $eventDataType = '';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /**
   * Optional. Text data from the end user.
   *
   * @var string
   */
  public $text;
  protected $toolResponsesType = ToolResponses::class;
  protected $toolResponsesDataType = '';
  /**
   * Optional. Contextual variables for the session, keyed by name. Only
   * variables declared in the app will be used by the CES agent. Unrecognized
   * variables will still be sent to the Dialogflow agent as additional session
   * parameters.
   *
   * @var array[]
   */
  public $variables;
  /**
   * Optional. A flag to indicate if the current message is a fragment of a
   * larger input in the bidi streaming session. When `true`, the agent will
   * defer processing until a subsequent message with `will_continue` set to
   * `false` is received. Note: This flag has no effect on audio and DTMF
   * inputs, which are always processed in real-time.
   *
   * @var bool
   */
  public $willContinue;

  /**
   * Optional. Audio data from the end user.
   *
   * @param string $audio
   */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return string
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * Optional. Blob data from the end user.
   *
   * @param Blob $blob
   */
  public function setBlob(Blob $blob)
  {
    $this->blob = $blob;
  }
  /**
   * @return Blob
   */
  public function getBlob()
  {
    return $this->blob;
  }
  /**
   * Optional. DTMF digits from the end user.
   *
   * @param string $dtmf
   */
  public function setDtmf($dtmf)
  {
    $this->dtmf = $dtmf;
  }
  /**
   * @return string
   */
  public function getDtmf()
  {
    return $this->dtmf;
  }
  /**
   * Optional. Event input.
   *
   * @param Event $event
   */
  public function setEvent(Event $event)
  {
    $this->event = $event;
  }
  /**
   * @return Event
   */
  public function getEvent()
  {
    return $this->event;
  }
  /**
   * Optional. Image data from the end user.
   *
   * @param Image $image
   */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /**
   * @return Image
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Optional. Text data from the end user.
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
  /**
   * Optional. Execution results for the tool calls from the client.
   *
   * @param ToolResponses $toolResponses
   */
  public function setToolResponses(ToolResponses $toolResponses)
  {
    $this->toolResponses = $toolResponses;
  }
  /**
   * @return ToolResponses
   */
  public function getToolResponses()
  {
    return $this->toolResponses;
  }
  /**
   * Optional. Contextual variables for the session, keyed by name. Only
   * variables declared in the app will be used by the CES agent. Unrecognized
   * variables will still be sent to the Dialogflow agent as additional session
   * parameters.
   *
   * @param array[] $variables
   */
  public function setVariables($variables)
  {
    $this->variables = $variables;
  }
  /**
   * @return array[]
   */
  public function getVariables()
  {
    return $this->variables;
  }
  /**
   * Optional. A flag to indicate if the current message is a fragment of a
   * larger input in the bidi streaming session. When `true`, the agent will
   * defer processing until a subsequent message with `will_continue` set to
   * `false` is received. Note: This flag has no effect on audio and DTMF
   * inputs, which are always processed in real-time.
   *
   * @param bool $willContinue
   */
  public function setWillContinue($willContinue)
  {
    $this->willContinue = $willContinue;
  }
  /**
   * @return bool
   */
  public function getWillContinue()
  {
    return $this->willContinue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionInput::class, 'Google_Service_CustomerEngagementSuite_SessionInput');
