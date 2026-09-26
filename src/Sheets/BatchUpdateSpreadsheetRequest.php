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

namespace Google\Service\Sheets;

class BatchUpdateSpreadsheetRequest extends \Google\Collection
{
  /**
   * The CommentsViewMode is unspecified; COMMENTS_VIEW_MODE_OMITTED is applied.
   */
  public const COMMENTS_VIEW_MODE_COMMENTS_VIEW_MODE_UNSPECIFIED = 'COMMENTS_VIEW_MODE_UNSPECIFIED';
  /**
   * The CommentsViewMode applied to the returned spreadsheet depends on the
   * user's current access level. If the user only has view access,
   * COMMENTS_VIEW_MODE_OMITTED is applied. Otherwise,
   * COMMENTS_VIEW_MODE_INCLUDED is applied.
   */
  public const COMMENTS_VIEW_MODE_COMMENTS_VIEW_MODE_DEFAULT_FOR_CURRENT_ACCESS = 'COMMENTS_VIEW_MODE_DEFAULT_FOR_CURRENT_ACCESS';
  /**
   * The returned spreadsheet has comments omitted.
   */
  public const COMMENTS_VIEW_MODE_COMMENTS_VIEW_MODE_OMITTED = 'COMMENTS_VIEW_MODE_OMITTED';
  /**
   * The returned spreadsheet has comments included. Requests to retrieve a
   * spreadsheet using this mode will return a 403 error if the user does not
   * have permission to view comments.
   */
  public const COMMENTS_VIEW_MODE_COMMENTS_VIEW_MODE_INCLUDED = 'COMMENTS_VIEW_MODE_INCLUDED';
  protected $collection_key = 'responseRanges';
  /**
   * The comments view mode to apply to the spreadsheet. This allows viewing the
   * spreadsheet with comments omitted or included. If one is not specified,
   * COMMENTS_VIEW_MODE_OMITTED is used. Meaningful only if
   * include_spreadsheet_in_response is 'true'. [Developer
   * Preview](https://developers.google.com/workspace/preview).
   *
   * @var string
   */
  public $commentsViewMode;
  /**
   * Determines if the update response should include the spreadsheet resource.
   *
   * @var bool
   */
  public $includeSpreadsheetInResponse;
  protected $requestsType = Request::class;
  protected $requestsDataType = 'array';
  /**
   * True if grid data should be returned. Meaningful only if
   * include_spreadsheet_in_response is 'true'. This parameter is ignored if a
   * field mask was set in the request.
   *
   * @var bool
   */
  public $responseIncludeGridData;
  /**
   * Limits the ranges included in the response spreadsheet. Meaningful only if
   * include_spreadsheet_in_response is 'true'.
   *
   * @var string[]
   */
  public $responseRanges;

  /**
   * The comments view mode to apply to the spreadsheet. This allows viewing the
   * spreadsheet with comments omitted or included. If one is not specified,
   * COMMENTS_VIEW_MODE_OMITTED is used. Meaningful only if
   * include_spreadsheet_in_response is 'true'. [Developer
   * Preview](https://developers.google.com/workspace/preview).
   *
   * Accepted values: COMMENTS_VIEW_MODE_UNSPECIFIED,
   * COMMENTS_VIEW_MODE_DEFAULT_FOR_CURRENT_ACCESS, COMMENTS_VIEW_MODE_OMITTED,
   * COMMENTS_VIEW_MODE_INCLUDED
   *
   * @param self::COMMENTS_VIEW_MODE_* $commentsViewMode
   */
  public function setCommentsViewMode($commentsViewMode)
  {
    $this->commentsViewMode = $commentsViewMode;
  }
  /**
   * @return self::COMMENTS_VIEW_MODE_*
   */
  public function getCommentsViewMode()
  {
    return $this->commentsViewMode;
  }
  /**
   * Determines if the update response should include the spreadsheet resource.
   *
   * @param bool $includeSpreadsheetInResponse
   */
  public function setIncludeSpreadsheetInResponse($includeSpreadsheetInResponse)
  {
    $this->includeSpreadsheetInResponse = $includeSpreadsheetInResponse;
  }
  /**
   * @return bool
   */
  public function getIncludeSpreadsheetInResponse()
  {
    return $this->includeSpreadsheetInResponse;
  }
  /**
   * A list of updates to apply to the spreadsheet. Requests will be applied in
   * the order they are specified. If any request is not valid, no requests will
   * be applied.
   *
   * @param Request[] $requests
   */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /**
   * @return Request[]
   */
  public function getRequests()
  {
    return $this->requests;
  }
  /**
   * True if grid data should be returned. Meaningful only if
   * include_spreadsheet_in_response is 'true'. This parameter is ignored if a
   * field mask was set in the request.
   *
   * @param bool $responseIncludeGridData
   */
  public function setResponseIncludeGridData($responseIncludeGridData)
  {
    $this->responseIncludeGridData = $responseIncludeGridData;
  }
  /**
   * @return bool
   */
  public function getResponseIncludeGridData()
  {
    return $this->responseIncludeGridData;
  }
  /**
   * Limits the ranges included in the response spreadsheet. Meaningful only if
   * include_spreadsheet_in_response is 'true'.
   *
   * @param string[] $responseRanges
   */
  public function setResponseRanges($responseRanges)
  {
    $this->responseRanges = $responseRanges;
  }
  /**
   * @return string[]
   */
  public function getResponseRanges()
  {
    return $this->responseRanges;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdateSpreadsheetRequest::class, 'Google_Service_Sheets_BatchUpdateSpreadsheetRequest');
