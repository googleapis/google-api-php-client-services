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

class StreamChatAiAssistantRequest extends \Google\Collection
{
  protected $collection_key = 'clientCapabilities';
  /**
   * Optional. Optional flag to attach to an existing in-flight turn without
   * submitting a new message.
   *
   * @var bool
   */
  public $attachOnly;
  /**
   * Optional. Cloud Storage URIs for files uploaded by the user during this
   * turn. Example: "gs://cxas-transient-uploads/uuid/prd.pdf"
   *
   * @var string[]
   */
  public $attachedGcsUris;
  /**
   * Optional. Response features this client can render. The server only emits
   * events that need a capability (e.g. `confirmation_request`) when the
   * capability is declared, so older clients never receive events they would
   * silently drop.
   *
   * @var string[]
   */
  public $clientCapabilities;
  protected $confirmationResponseType = AssistantConfirmationResponse::class;
  protected $confirmationResponseDataType = '';
  /**
   * Optional. Opaque onboarding context token returned by
   * SessionService.GenerateOnboardingSuggestions. When set and still fresh, the
   * server reuses the onboarding snapshot computed for the zero state instead
   * of recomputing it for the first conversation turn.
   *
   * @var string
   */
  public $contextToken;
  /**
   * Optional. The message to send to the assistant agent. May be empty when
   * `confirmation_response` is set (answering a pending confirmation without
   * adding a new message); at least one of the two must be provided.
   *
   * @var string
   */
  public $message;
  protected $operationCompletedEventType = OperationCompletedEvent::class;
  protected $operationCompletedEventDataType = '';
  /**
   * Optional. Optional cursor to resume and replay events from an in-flight or
   * completed turn.
   *
   * @var string
   */
  public $resumeFromSequenceNumber;

  /**
   * Optional. Optional flag to attach to an existing in-flight turn without
   * submitting a new message.
   *
   * @param bool $attachOnly
   */
  public function setAttachOnly($attachOnly)
  {
    $this->attachOnly = $attachOnly;
  }
  /**
   * @return bool
   */
  public function getAttachOnly()
  {
    return $this->attachOnly;
  }
  /**
   * Optional. Cloud Storage URIs for files uploaded by the user during this
   * turn. Example: "gs://cxas-transient-uploads/uuid/prd.pdf"
   *
   * @param string[] $attachedGcsUris
   */
  public function setAttachedGcsUris($attachedGcsUris)
  {
    $this->attachedGcsUris = $attachedGcsUris;
  }
  /**
   * @return string[]
   */
  public function getAttachedGcsUris()
  {
    return $this->attachedGcsUris;
  }
  /**
   * Optional. Response features this client can render. The server only emits
   * events that need a capability (e.g. `confirmation_request`) when the
   * capability is declared, so older clients never receive events they would
   * silently drop.
   *
   * @param string[] $clientCapabilities
   */
  public function setClientCapabilities($clientCapabilities)
  {
    $this->clientCapabilities = $clientCapabilities;
  }
  /**
   * @return string[]
   */
  public function getClientCapabilities()
  {
    return $this->clientCapabilities;
  }
  /**
   * Optional. The user's answer to a pending AssistantConfirmationRequest. When
   * set, the server resumes the paused agent with this answer instead of (or in
   * addition to) starting a new prompt turn.
   *
   * @param AssistantConfirmationResponse $confirmationResponse
   */
  public function setConfirmationResponse(AssistantConfirmationResponse $confirmationResponse)
  {
    $this->confirmationResponse = $confirmationResponse;
  }
  /**
   * @return AssistantConfirmationResponse
   */
  public function getConfirmationResponse()
  {
    return $this->confirmationResponse;
  }
  /**
   * Optional. Opaque onboarding context token returned by
   * SessionService.GenerateOnboardingSuggestions. When set and still fresh, the
   * server reuses the onboarding snapshot computed for the zero state instead
   * of recomputing it for the first conversation turn.
   *
   * @param string $contextToken
   */
  public function setContextToken($contextToken)
  {
    $this->contextToken = $contextToken;
  }
  /**
   * @return string
   */
  public function getContextToken()
  {
    return $this->contextToken;
  }
  /**
   * Optional. The message to send to the assistant agent. May be empty when
   * `confirmation_response` is set (answering a pending confirmation without
   * adding a new message); at least one of the two must be provided.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Optional. Resumes an assistant session paused waiting for a client-managed
   * long-running operation to complete.
   *
   * @param OperationCompletedEvent $operationCompletedEvent
   */
  public function setOperationCompletedEvent(OperationCompletedEvent $operationCompletedEvent)
  {
    $this->operationCompletedEvent = $operationCompletedEvent;
  }
  /**
   * @return OperationCompletedEvent
   */
  public function getOperationCompletedEvent()
  {
    return $this->operationCompletedEvent;
  }
  /**
   * Optional. Optional cursor to resume and replay events from an in-flight or
   * completed turn.
   *
   * @param string $resumeFromSequenceNumber
   */
  public function setResumeFromSequenceNumber($resumeFromSequenceNumber)
  {
    $this->resumeFromSequenceNumber = $resumeFromSequenceNumber;
  }
  /**
   * @return string
   */
  public function getResumeFromSequenceNumber()
  {
    return $this->resumeFromSequenceNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StreamChatAiAssistantRequest::class, 'Google_Service_CustomerEngagementSuite_StreamChatAiAssistantRequest');
