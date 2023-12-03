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

class Response extends \Google\Model
{
  /**
   * @var AddBandingResponse
   */
  public $addBanding;
  protected $addBandingType = AddBandingResponse::class;
  protected $addBandingDataType = '';
  /**
   * @var AddChartResponse
   */
  public $addChart;
  protected $addChartType = AddChartResponse::class;
  protected $addChartDataType = '';
  /**
   * @var AddDataSourceResponse
   */
  public $addDataSource;
  protected $addDataSourceType = AddDataSourceResponse::class;
  protected $addDataSourceDataType = '';
  /**
   * @var AddDimensionGroupResponse
   */
  public $addDimensionGroup;
  protected $addDimensionGroupType = AddDimensionGroupResponse::class;
  protected $addDimensionGroupDataType = '';
  /**
   * @var AddFilterViewResponse
   */
  public $addFilterView;
  protected $addFilterViewType = AddFilterViewResponse::class;
  protected $addFilterViewDataType = '';
  /**
   * @var AddNamedRangeResponse
   */
  public $addNamedRange;
  protected $addNamedRangeType = AddNamedRangeResponse::class;
  protected $addNamedRangeDataType = '';
  /**
   * @var AddProtectedRangeResponse
   */
  public $addProtectedRange;
  protected $addProtectedRangeType = AddProtectedRangeResponse::class;
  protected $addProtectedRangeDataType = '';
  /**
   * @var AddSheetResponse
   */
  public $addSheet;
  protected $addSheetType = AddSheetResponse::class;
  protected $addSheetDataType = '';
  /**
   * @var AddSlicerResponse
   */
  public $addSlicer;
  protected $addSlicerType = AddSlicerResponse::class;
  protected $addSlicerDataType = '';
  /**
   * @var CreateDeveloperMetadataResponse
   */
  public $createDeveloperMetadata;
  protected $createDeveloperMetadataType = CreateDeveloperMetadataResponse::class;
  protected $createDeveloperMetadataDataType = '';
  /**
   * @var DeleteConditionalFormatRuleResponse
   */
  public $deleteConditionalFormatRule;
  protected $deleteConditionalFormatRuleType = DeleteConditionalFormatRuleResponse::class;
  protected $deleteConditionalFormatRuleDataType = '';
  /**
   * @var DeleteDeveloperMetadataResponse
   */
  public $deleteDeveloperMetadata;
  protected $deleteDeveloperMetadataType = DeleteDeveloperMetadataResponse::class;
  protected $deleteDeveloperMetadataDataType = '';
  /**
   * @var DeleteDimensionGroupResponse
   */
  public $deleteDimensionGroup;
  protected $deleteDimensionGroupType = DeleteDimensionGroupResponse::class;
  protected $deleteDimensionGroupDataType = '';
  /**
   * @var DeleteDuplicatesResponse
   */
  public $deleteDuplicates;
  protected $deleteDuplicatesType = DeleteDuplicatesResponse::class;
  protected $deleteDuplicatesDataType = '';
  /**
   * @var DuplicateFilterViewResponse
   */
  public $duplicateFilterView;
  protected $duplicateFilterViewType = DuplicateFilterViewResponse::class;
  protected $duplicateFilterViewDataType = '';
  /**
   * @var DuplicateSheetResponse
   */
  public $duplicateSheet;
  protected $duplicateSheetType = DuplicateSheetResponse::class;
  protected $duplicateSheetDataType = '';
  /**
   * @var FindReplaceResponse
   */
  public $findReplace;
  protected $findReplaceType = FindReplaceResponse::class;
  protected $findReplaceDataType = '';
  /**
   * @var RefreshDataSourceResponse
   */
  public $refreshDataSource;
  protected $refreshDataSourceType = RefreshDataSourceResponse::class;
  protected $refreshDataSourceDataType = '';
  /**
   * @var TrimWhitespaceResponse
   */
  public $trimWhitespace;
  protected $trimWhitespaceType = TrimWhitespaceResponse::class;
  protected $trimWhitespaceDataType = '';
  /**
   * @var UpdateConditionalFormatRuleResponse
   */
  public $updateConditionalFormatRule;
  protected $updateConditionalFormatRuleType = UpdateConditionalFormatRuleResponse::class;
  protected $updateConditionalFormatRuleDataType = '';
  /**
   * @var UpdateDataSourceResponse
   */
  public $updateDataSource;
  protected $updateDataSourceType = UpdateDataSourceResponse::class;
  protected $updateDataSourceDataType = '';
  /**
   * @var UpdateDeveloperMetadataResponse
   */
  public $updateDeveloperMetadata;
  protected $updateDeveloperMetadataType = UpdateDeveloperMetadataResponse::class;
  protected $updateDeveloperMetadataDataType = '';
  /**
   * @var UpdateEmbeddedObjectPositionResponse
   */
  public $updateEmbeddedObjectPosition;
  protected $updateEmbeddedObjectPositionType = UpdateEmbeddedObjectPositionResponse::class;
  protected $updateEmbeddedObjectPositionDataType = '';

  /**
   * @param AddBandingResponse
   */
  public function setAddBanding(AddBandingResponse $addBanding)
  {
    $this->addBanding = $addBanding;
  }
  /**
   * @return AddBandingResponse
   */
  public function getAddBanding()
  {
    return $this->addBanding;
  }
  /**
   * @param AddChartResponse
   */
  public function setAddChart(AddChartResponse $addChart)
  {
    $this->addChart = $addChart;
  }
  /**
   * @return AddChartResponse
   */
  public function getAddChart()
  {
    return $this->addChart;
  }
  /**
   * @param AddDataSourceResponse
   */
  public function setAddDataSource(AddDataSourceResponse $addDataSource)
  {
    $this->addDataSource = $addDataSource;
  }
  /**
   * @return AddDataSourceResponse
   */
  public function getAddDataSource()
  {
    return $this->addDataSource;
  }
  /**
   * @param AddDimensionGroupResponse
   */
  public function setAddDimensionGroup(AddDimensionGroupResponse $addDimensionGroup)
  {
    $this->addDimensionGroup = $addDimensionGroup;
  }
  /**
   * @return AddDimensionGroupResponse
   */
  public function getAddDimensionGroup()
  {
    return $this->addDimensionGroup;
  }
  /**
   * @param AddFilterViewResponse
   */
  public function setAddFilterView(AddFilterViewResponse $addFilterView)
  {
    $this->addFilterView = $addFilterView;
  }
  /**
   * @return AddFilterViewResponse
   */
  public function getAddFilterView()
  {
    return $this->addFilterView;
  }
  /**
   * @param AddNamedRangeResponse
   */
  public function setAddNamedRange(AddNamedRangeResponse $addNamedRange)
  {
    $this->addNamedRange = $addNamedRange;
  }
  /**
   * @return AddNamedRangeResponse
   */
  public function getAddNamedRange()
  {
    return $this->addNamedRange;
  }
  /**
   * @param AddProtectedRangeResponse
   */
  public function setAddProtectedRange(AddProtectedRangeResponse $addProtectedRange)
  {
    $this->addProtectedRange = $addProtectedRange;
  }
  /**
   * @return AddProtectedRangeResponse
   */
  public function getAddProtectedRange()
  {
    return $this->addProtectedRange;
  }
  /**
   * @param AddSheetResponse
   */
  public function setAddSheet(AddSheetResponse $addSheet)
  {
    $this->addSheet = $addSheet;
  }
  /**
   * @return AddSheetResponse
   */
  public function getAddSheet()
  {
    return $this->addSheet;
  }
  /**
   * @param AddSlicerResponse
   */
  public function setAddSlicer(AddSlicerResponse $addSlicer)
  {
    $this->addSlicer = $addSlicer;
  }
  /**
   * @return AddSlicerResponse
   */
  public function getAddSlicer()
  {
    return $this->addSlicer;
  }
  /**
   * @param CreateDeveloperMetadataResponse
   */
  public function setCreateDeveloperMetadata(CreateDeveloperMetadataResponse $createDeveloperMetadata)
  {
    $this->createDeveloperMetadata = $createDeveloperMetadata;
  }
  /**
   * @return CreateDeveloperMetadataResponse
   */
  public function getCreateDeveloperMetadata()
  {
    return $this->createDeveloperMetadata;
  }
  /**
   * @param DeleteConditionalFormatRuleResponse
   */
  public function setDeleteConditionalFormatRule(DeleteConditionalFormatRuleResponse $deleteConditionalFormatRule)
  {
    $this->deleteConditionalFormatRule = $deleteConditionalFormatRule;
  }
  /**
   * @return DeleteConditionalFormatRuleResponse
   */
  public function getDeleteConditionalFormatRule()
  {
    return $this->deleteConditionalFormatRule;
  }
  /**
   * @param DeleteDeveloperMetadataResponse
   */
  public function setDeleteDeveloperMetadata(DeleteDeveloperMetadataResponse $deleteDeveloperMetadata)
  {
    $this->deleteDeveloperMetadata = $deleteDeveloperMetadata;
  }
  /**
   * @return DeleteDeveloperMetadataResponse
   */
  public function getDeleteDeveloperMetadata()
  {
    return $this->deleteDeveloperMetadata;
  }
  /**
   * @param DeleteDimensionGroupResponse
   */
  public function setDeleteDimensionGroup(DeleteDimensionGroupResponse $deleteDimensionGroup)
  {
    $this->deleteDimensionGroup = $deleteDimensionGroup;
  }
  /**
   * @return DeleteDimensionGroupResponse
   */
  public function getDeleteDimensionGroup()
  {
    return $this->deleteDimensionGroup;
  }
  /**
   * @param DeleteDuplicatesResponse
   */
  public function setDeleteDuplicates(DeleteDuplicatesResponse $deleteDuplicates)
  {
    $this->deleteDuplicates = $deleteDuplicates;
  }
  /**
   * @return DeleteDuplicatesResponse
   */
  public function getDeleteDuplicates()
  {
    return $this->deleteDuplicates;
  }
  /**
   * @param DuplicateFilterViewResponse
   */
  public function setDuplicateFilterView(DuplicateFilterViewResponse $duplicateFilterView)
  {
    $this->duplicateFilterView = $duplicateFilterView;
  }
  /**
   * @return DuplicateFilterViewResponse
   */
  public function getDuplicateFilterView()
  {
    return $this->duplicateFilterView;
  }
  /**
   * @param DuplicateSheetResponse
   */
  public function setDuplicateSheet(DuplicateSheetResponse $duplicateSheet)
  {
    $this->duplicateSheet = $duplicateSheet;
  }
  /**
   * @return DuplicateSheetResponse
   */
  public function getDuplicateSheet()
  {
    return $this->duplicateSheet;
  }
  /**
   * @param FindReplaceResponse
   */
  public function setFindReplace(FindReplaceResponse $findReplace)
  {
    $this->findReplace = $findReplace;
  }
  /**
   * @return FindReplaceResponse
   */
  public function getFindReplace()
  {
    return $this->findReplace;
  }
  /**
   * @param RefreshDataSourceResponse
   */
  public function setRefreshDataSource(RefreshDataSourceResponse $refreshDataSource)
  {
    $this->refreshDataSource = $refreshDataSource;
  }
  /**
   * @return RefreshDataSourceResponse
   */
  public function getRefreshDataSource()
  {
    return $this->refreshDataSource;
  }
  /**
   * @param TrimWhitespaceResponse
   */
  public function setTrimWhitespace(TrimWhitespaceResponse $trimWhitespace)
  {
    $this->trimWhitespace = $trimWhitespace;
  }
  /**
   * @return TrimWhitespaceResponse
   */
  public function getTrimWhitespace()
  {
    return $this->trimWhitespace;
  }
  /**
   * @param UpdateConditionalFormatRuleResponse
   */
  public function setUpdateConditionalFormatRule(UpdateConditionalFormatRuleResponse $updateConditionalFormatRule)
  {
    $this->updateConditionalFormatRule = $updateConditionalFormatRule;
  }
  /**
   * @return UpdateConditionalFormatRuleResponse
   */
  public function getUpdateConditionalFormatRule()
  {
    return $this->updateConditionalFormatRule;
  }
  /**
   * @param UpdateDataSourceResponse
   */
  public function setUpdateDataSource(UpdateDataSourceResponse $updateDataSource)
  {
    $this->updateDataSource = $updateDataSource;
  }
  /**
   * @return UpdateDataSourceResponse
   */
  public function getUpdateDataSource()
  {
    return $this->updateDataSource;
  }
  /**
   * @param UpdateDeveloperMetadataResponse
   */
  public function setUpdateDeveloperMetadata(UpdateDeveloperMetadataResponse $updateDeveloperMetadata)
  {
    $this->updateDeveloperMetadata = $updateDeveloperMetadata;
  }
  /**
   * @return UpdateDeveloperMetadataResponse
   */
  public function getUpdateDeveloperMetadata()
  {
    return $this->updateDeveloperMetadata;
  }
  /**
   * @param UpdateEmbeddedObjectPositionResponse
   */
  public function setUpdateEmbeddedObjectPosition(UpdateEmbeddedObjectPositionResponse $updateEmbeddedObjectPosition)
  {
    $this->updateEmbeddedObjectPosition = $updateEmbeddedObjectPosition;
  }
  /**
   * @return UpdateEmbeddedObjectPositionResponse
   */
  public function getUpdateEmbeddedObjectPosition()
  {
    return $this->updateEmbeddedObjectPosition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Response::class, 'Google_Service_Sheets_Response');
