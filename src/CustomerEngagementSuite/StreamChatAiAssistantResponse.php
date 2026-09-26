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

class StreamChatAiAssistantResponse extends \Google\Model
{
  protected $artifactChunkType = ArtifactChunk::class;
  protected $artifactChunkDataType = '';
  protected $confirmationRequestType = AssistantConfirmationRequest::class;
  protected $confirmationRequestDataType = '';
  /**
   * Unique identifier for the event.
   *
   * @var string
   */
  public $eventId;
  /**
   * Timestamp when the event occurred.
   *
   * @var string
   */
  public $eventTime;
  protected $handoffType = TurnHandoffEvent::class;
  protected $handoffDataType = '';
  protected $optionQuestionsChunkType = OptionQuestionsChunk::class;
  protected $optionQuestionsChunkDataType = '';
  protected $resumeSnapshotType = TurnResumeSnapshot::class;
  protected $resumeSnapshotDataType = '';
  /**
   * Optional. Monotonically increasing sequence number for this session turn.
   *
   * @var string
   */
  public $sequenceNumber;
  protected $sessionCheckpointType = SessionCheckpoint::class;
  protected $sessionCheckpointDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /**
   * Text Token (for streaming Gemini responses word-by-word).
   *
   * @var string
   */
  public $textChunk;
  /**
   * Thought text chunk (agent's reasoning before generating response).
   *
   * @var string
   */
  public $thoughtChunk;
  protected $toolCallType = ToolCall::class;
  protected $toolCallDataType = '';
  protected $toolResponseType = ToolResponse::class;
  protected $toolResponseDataType = '';
  protected $turnCompletedType = TurnCompletedEvent::class;
  protected $turnCompletedDataType = '';
  /**
   * Optional. Indicates whether the turn is still actively running in the
   * background.
   *
   * @var bool
   */
  public $turnInProgress;
  protected $turnMetadataType = TurnMetadata::class;
  protected $turnMetadataDataType = '';
  protected $uiEventType = UiEvent::class;
  protected $uiEventDataType = '';

  /**
   * Generated-document artifact event (live preview deltas + final GCS
   * pointer).
   *
   * @param ArtifactChunk $artifactChunk
   */
  public function setArtifactChunk(ArtifactChunk $artifactChunk)
  {
    $this->artifactChunk = $artifactChunk;
  }
  /**
   * @return ArtifactChunk
   */
  public function getArtifactChunk()
  {
    return $this->artifactChunk;
  }
  /**
   * A blocking confirmation the agent paused on. The agent resumes when the
   * answer arrives on a later request's `confirmation_response`. Only sent to
   * clients that declared the CONFIRMATION_CARDS capability on the request.
   *
   * @param AssistantConfirmationRequest $confirmationRequest
   */
  public function setConfirmationRequest(AssistantConfirmationRequest $confirmationRequest)
  {
    $this->confirmationRequest = $confirmationRequest;
  }
  /**
   * @return AssistantConfirmationRequest
   */
  public function getConfirmationRequest()
  {
    return $this->confirmationRequest;
  }
  /**
   * Unique identifier for the event.
   *
   * @param string $eventId
   */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /**
   * @return string
   */
  public function getEventId()
  {
    return $this->eventId;
  }
  /**
   * Timestamp when the event occurred.
   *
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * Tells the client to silently reconnect with resume_from_sequence_number:
   * the task serving this stream is going away and the turn will continue
   * elsewhere. Not an error; the stream completes normally after this event.
   *
   * @param TurnHandoffEvent $handoff
   */
  public function setHandoff(TurnHandoffEvent $handoff)
  {
    $this->handoff = $handoff;
  }
  /**
   * @return TurnHandoffEvent
   */
  public function getHandoff()
  {
    return $this->handoff;
  }
  /**
   * Structured clarification options parsed out of the model turn. The console
   * renders these as a selectable option list instead of raw text.
   *
   * @param OptionQuestionsChunk $optionQuestionsChunk
   */
  public function setOptionQuestionsChunk(OptionQuestionsChunk $optionQuestionsChunk)
  {
    $this->optionQuestionsChunk = $optionQuestionsChunk;
  }
  /**
   * @return OptionQuestionsChunk
   */
  public function getOptionQuestionsChunk()
  {
    return $this->optionQuestionsChunk;
  }
  /**
   * A compacted replay of an in-flight turn, sent as the first event of every
   * attach or resume before any live event. The client replaces any locally
   * rendered state for this turn with the snapshot's contents.
   *
   * @param TurnResumeSnapshot $resumeSnapshot
   */
  public function setResumeSnapshot(TurnResumeSnapshot $resumeSnapshot)
  {
    $this->resumeSnapshot = $resumeSnapshot;
  }
  /**
   * @return TurnResumeSnapshot
   */
  public function getResumeSnapshot()
  {
    return $this->resumeSnapshot;
  }
  /**
   * Optional. Monotonically increasing sequence number for this session turn.
   *
   * @param string $sequenceNumber
   */
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  /**
   * @return string
   */
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }
  /**
   * Session checkpoint/compaction recap event containing user intent and
   * rolling summary.
   *
   * @param SessionCheckpoint $sessionCheckpoint
   */
  public function setSessionCheckpoint(SessionCheckpoint $sessionCheckpoint)
  {
    $this->sessionCheckpoint = $sessionCheckpoint;
  }
  /**
   * @return SessionCheckpoint
   */
  public function getSessionCheckpoint()
  {
    return $this->sessionCheckpoint;
  }
  /**
   * Simple status update.
   *
   * @param Status $status
   */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /**
   * @return Status
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Text Token (for streaming Gemini responses word-by-word).
   *
   * @param string $textChunk
   */
  public function setTextChunk($textChunk)
  {
    $this->textChunk = $textChunk;
  }
  /**
   * @return string
   */
  public function getTextChunk()
  {
    return $this->textChunk;
  }
  /**
   * Thought text chunk (agent's reasoning before generating response).
   *
   * @param string $thoughtChunk
   */
  public function setThoughtChunk($thoughtChunk)
  {
    $this->thoughtChunk = $thoughtChunk;
  }
  /**
   * @return string
   */
  public function getThoughtChunk()
  {
    return $this->thoughtChunk;
  }
  /**
   * Tool call execution event.
   *
   * @param ToolCall $toolCall
   */
  public function setToolCall(ToolCall $toolCall)
  {
    $this->toolCall = $toolCall;
  }
  /**
   * @return ToolCall
   */
  public function getToolCall()
  {
    return $this->toolCall;
  }
  /**
   * Tool call response event.
   *
   * @param ToolResponse $toolResponse
   */
  public function setToolResponse(ToolResponse $toolResponse)
  {
    $this->toolResponse = $toolResponse;
  }
  /**
   * @return ToolResponse
   */
  public function getToolResponse()
  {
    return $this->toolResponse;
  }
  /**
   * The turn has ended. Sent as the last event of every turn, on the original
   * stream and on every attached or resumed stream, so clients can end the turn
   * on an explicit signal instead of inferring it from stream closure.
   *
   * @param TurnCompletedEvent $turnCompleted
   */
  public function setTurnCompleted(TurnCompletedEvent $turnCompleted)
  {
    $this->turnCompleted = $turnCompleted;
  }
  /**
   * @return TurnCompletedEvent
   */
  public function getTurnCompleted()
  {
    return $this->turnCompleted;
  }
  /**
   * Optional. Indicates whether the turn is still actively running in the
   * background.
   *
   * @param bool $turnInProgress
   */
  public function setTurnInProgress($turnInProgress)
  {
    $this->turnInProgress = $turnInProgress;
  }
  /**
   * @return bool
   */
  public function getTurnInProgress()
  {
    return $this->turnInProgress;
  }
  /**
   * Optional. Turn-level metadata and intent categorization.
   *
   * @param TurnMetadata $turnMetadata
   */
  public function setTurnMetadata(TurnMetadata $turnMetadata)
  {
    $this->turnMetadata = $turnMetadata;
  }
  /**
   * @return TurnMetadata
   */
  public function getTurnMetadata()
  {
    return $this->turnMetadata;
  }
  /**
   * Optional. UI event payload.
   *
   * @param UiEvent $uiEvent
   */
  public function setUiEvent(UiEvent $uiEvent)
  {
    $this->uiEvent = $uiEvent;
  }
  /**
   * @return UiEvent
   */
  public function getUiEvent()
  {
    return $this->uiEvent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StreamChatAiAssistantResponse::class, 'Google_Service_CustomerEngagementSuite_StreamChatAiAssistantResponse');
