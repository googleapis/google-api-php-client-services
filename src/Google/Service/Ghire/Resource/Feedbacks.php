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
 * The "feedbacks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ghireService = new Google_Service_Ghire(...);
 *   $feedbacks = $ghireService->feedbacks;
 *  </code>
 */
class Google_Service_Ghire_Resource_Feedbacks extends Google_Service_Resource
{
  /**
   * Operation which returns a Feedback object for a given ID (feedbacks.get)
   *
   * @param string $feedbacksId The resource ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string domain
   * @opt_param string requester email address of the person making the request,
   * e.g. "samg@google.com"
   * @return Google_Service_Ghire_FeedbacksGetResponse
   */
  public function get($feedbacksId, $optParams = array())
  {
    $params = array('feedbacksId' => $feedbacksId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Ghire_FeedbacksGetResponse");
  }
  /**
   * Operation to return a collection of Feedback objects satisfying all
   * constraints of the request (feedbacks.listFeedbacks)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string applicationId
   * @opt_param string candidateId
   * @opt_param string createdAfter
   * @opt_param string createdBefore
   * @opt_param string domain
   * @opt_param string feedbackStatus
   * @opt_param string feedbackType
   * @opt_param bool isPending
   * @opt_param string maxResults The maximum number of items to include in the
   * response, used for paging.
   * @opt_param string maxStartTime
   * @opt_param string minStartTime fields below are in milliseconds since epoch
   * @opt_param string offerId
   * @opt_param string owfId
   * @opt_param string pageToken Token for the page of results to return.
   * @opt_param string referenceFeedbackId
   * @opt_param bool skipCancelledInterviews If set to true, any feedbacks whose
   * "interview.cancellation" field is set to anything other than "NOT_CANCELLED"
   * would be omitted from the result. NOTE: This field will only take effect if
   * the request type is set to "BY_MULTIPLE_FIELDS." The other request types will
   * be soon deprecated anyway.
   * @opt_param string sortDirection
   * @opt_param string sortProperty Sort only supported for searches of type
   * BY_MULTIPLE_FIELDS
   * @opt_param string type
   * @return Google_Service_Ghire_FeedbacksListResponse
   */
  public function listFeedbacks($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Ghire_FeedbacksListResponse");
  }
}
