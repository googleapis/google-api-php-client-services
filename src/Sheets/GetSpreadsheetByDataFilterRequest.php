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

class GetSpreadsheetByDataFilterRequest extends \Google\Collection
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
  protected $collection_key = 'dataFilters';
  /**
   * The comments view mode to apply to the spreadsheet. This allows viewing the
   * spreadsheet with comments omitted or included. If one is not specified,
   * COMMENTS_VIEW_MODE_OMITTED is used. [Developer
   * Preview](https://developers.google.com/workspace/preview).
   *
   * @var string
   */
  public $commentsViewMode;
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  /**
   * True if tables should be excluded in the banded ranges. False if not set.
   *
   * @var bool
   */
  public $excludeTablesInBandedRanges;
  /**
   * True if grid data should be returned. This parameter is ignored if a field
   * mask was set in the request.
   *
   * @var bool
   */
  public $includeGridData;

  /**
   * The comments view mode to apply to the spreadsheet. This allows viewing the
   * spreadsheet with comments omitted or included. If one is not specified,
   * COMMENTS_VIEW_MODE_OMITTED is used. [Developer
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
   * The DataFilters used to select which ranges to retrieve from the
   * spreadsheet.
   *
   * @param DataFilter[] $dataFilters
   */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /**
   * @return DataFilter[]
   */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /**
   * True if tables should be excluded in the banded ranges. False if not set.
   *
   * @param bool $excludeTablesInBandedRanges
   */
  public function setExcludeTablesInBandedRanges($excludeTablesInBandedRanges)
  {
    $this->excludeTablesInBandedRanges = $excludeTablesInBandedRanges;
  }
  /**
   * @return bool
   */
  public function getExcludeTablesInBandedRanges()
  {
    return $this->excludeTablesInBandedRanges;
  }
  /**
   * True if grid data should be returned. This parameter is ignored if a field
   * mask was set in the request.
   *
   * @param bool $includeGridData
   */
  public function setIncludeGridData($includeGridData)
  {
    $this->includeGridData = $includeGridData;
  }
  /**
   * @return bool
   */
  public function getIncludeGridData()
  {
    return $this->includeGridData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GetSpreadsheetByDataFilterRequest::class, 'Google_Service_Sheets_GetSpreadsheetByDataFilterRequest');
