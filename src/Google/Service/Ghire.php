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
 * Service definition for Ghire (v1).
 *
 * <p>
 * Query recruit programatically</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Ghire extends Google_Service
{
  /** View and modify candidate data. */
  const HIRING_CANDIDATE =
      "https://www.googleapis.com/auth/hiring.candidate";
  /** View hiring data for reporting. */
  const HIRING_REPORTING =
      "https://www.googleapis.com/auth/hiring.reporting";

  public $candidates;
  public $feedbacks;
  public $interviewers;
  
  /**
   * Constructs the internal representation of the Ghire service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'ghire/v1/';
    $this->version = 'v1';
    $this->serviceName = 'ghire';

    $this->candidates = new Google_Service_Ghire_Resource_Candidates(
        $this,
        $this->serviceName,
        'candidates',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'candidate',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'candidateId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'hrPersonId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'offerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'requester' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'candidates',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'auditedJobOpeningId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'email' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'jobOpeningId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'jobOpeningLocation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortDirection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortProperty' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->feedbacks = new Google_Service_Ghire_Resource_Feedbacks(
        $this,
        $this->serviceName,
        'feedbacks',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'feedbacks/{feedbacksId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'feedbacksId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'requester' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'feedbacks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'candidateId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'feedbackStatus' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'feedbackType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'isPending' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxStartTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'minStartTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'offerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'owfId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'referenceFeedbackId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'skipCancelledInterviews' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'sortDirection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortProperty' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->interviewers = new Google_Service_Ghire_Resource_Interviewers(
        $this,
        $this->serviceName,
        'interviewers',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'interviewers/{interviewersId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'interviewersId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getinterviewerstats' => array(
              'path' => 'interviewers/getinterviewerstats',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'interviewers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}
