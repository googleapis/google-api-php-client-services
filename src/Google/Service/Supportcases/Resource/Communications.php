<?php
/*
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

/**
 * The "communications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $communications = $supportcasesService->communications;
 *  </code>
 */
class Google_Service_Supportcases_Resource_Communications extends Google_Service_Resource
{
  /**
   * Cancel a pending send (for email only). (communications.cancelSend)
   *
   * @param string $name
   * @param Google_Service_Supportcases_CancelSendRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_CancelSendResponse
   */
  public function cancelSend($name, Google_Service_Supportcases_CancelSendRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancelSend', array($params), "Google_Service_Supportcases_CancelSendResponse");
  }
  /**
   * Discards a draft communication. (communications.discardDraft)
   *
   * @param string $name
   * @param Google_Service_Supportcases_DiscardDraftRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_DiscardDraftResponse
   */
  public function discardDraft($name, Google_Service_Supportcases_DiscardDraftRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('discardDraft', array($params), "Google_Service_Supportcases_DiscardDraftResponse");
  }
  /**
   * Lists communications that match the filter.
   * (communications.listCommunications)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string caseIds
   * @return Google_Service_Supportcases_ListCommunicationsResponse
   */
  public function listCommunications($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Supportcases_ListCommunicationsResponse");
  }
  /**
   * Sends a draft email. This finalizes the email. (communications.send)
   *
   * @param string $name
   * @param Google_Service_Supportcases_SendEmailRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_SendEmailResponse
   */
  public function send($name, Google_Service_Supportcases_SendEmailRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('send', array($params), "Google_Service_Supportcases_SendEmailResponse");
  }
  /**
   * Updates a draft email. (communications.updateEmail)
   *
   * @param string $name
   * @param Google_Service_Supportcases_UpdateEmailRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_UpdateEmailResponse
   */
  public function updateEmail($name, Google_Service_Supportcases_UpdateEmailRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateEmail', array($params), "Google_Service_Supportcases_UpdateEmailResponse");
  }
  /**
   * Updates a draft note. (communications.updateNote)
   *
   * @param string $name
   * @param Google_Service_Supportcases_UpdateNoteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_UpdateNoteResponse
   */
  public function updateNote($name, Google_Service_Supportcases_UpdateNoteRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateNote', array($params), "Google_Service_Supportcases_UpdateNoteResponse");
  }
}
