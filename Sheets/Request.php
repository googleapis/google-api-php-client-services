<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Sheets_Request extends Google_Model
{
  public $addChart;
  public $addConditionalFormatRule;
  public $addFilterView;
  public $addNamedRange;
  public $addProtectedRange;
  public $addSheet;
  public $appendCells;
  public $appendDimension;
  public $autoFill;
  public $autoResizeDimensions;
  public $clearBasicFilter;
  public $copyPaste;
  public $cutPaste;
  public $deleteConditionalFormatRule;
  public $deleteDimension;
  public $deleteEmbeddedObject;
  public $deleteFilterView;
  public $deleteNamedRange;
  public $deleteProtectedRange;
  public $deleteSheet;
  public $duplicateFilterView;
  public $duplicateSheet;
  public $findReplace;
  public $insertDimension;
  public $mergeCells;
  public $moveDimension;
  public $pasteData;
  public $repeatCell;
  public $setBasicFilter;
  public $setDataValidation;
  public $sortRange;
  public $textToColumns;
  public $unmergeCells;
  public $updateBorders;
  public $updateCells;
  public $updateChartSpec;
  public $updateConditionalFormatRule;
  public $updateDimensionProperties;
  public $updateEmbeddedObjectPosition;
  public $updateFilterView;
  public $updateNamedRange;
  public $updateProtectedRange;
  public $updateSheetProperties;
  public $updateSpreadsheetProperties;

  public function setAddChart(Google_Service_Sheets_AddChartRequest $addChart)
  {
    $this->addChart = $addChart;
  }
  public function getAddChart()
  {
    return $this->addChart;
  }
  public function setAddConditionalFormatRule(Google_Service_Sheets_AddConditionalFormatRuleRequest $addConditionalFormatRule)
  {
    $this->addConditionalFormatRule = $addConditionalFormatRule;
  }
  public function getAddConditionalFormatRule()
  {
    return $this->addConditionalFormatRule;
  }
  public function setAddFilterView(Google_Service_Sheets_AddFilterViewRequest $addFilterView)
  {
    $this->addFilterView = $addFilterView;
  }
  public function getAddFilterView()
  {
    return $this->addFilterView;
  }
  public function setAddNamedRange(Google_Service_Sheets_AddNamedRangeRequest $addNamedRange)
  {
    $this->addNamedRange = $addNamedRange;
  }
  public function getAddNamedRange()
  {
    return $this->addNamedRange;
  }
  public function setAddProtectedRange(Google_Service_Sheets_AddProtectedRangeRequest $addProtectedRange)
  {
    $this->addProtectedRange = $addProtectedRange;
  }
  public function getAddProtectedRange()
  {
    return $this->addProtectedRange;
  }
  public function setAddSheet(Google_Service_Sheets_AddSheetRequest $addSheet)
  {
    $this->addSheet = $addSheet;
  }
  public function getAddSheet()
  {
    return $this->addSheet;
  }
  public function setAppendCells(Google_Service_Sheets_AppendCellsRequest $appendCells)
  {
    $this->appendCells = $appendCells;
  }
  public function getAppendCells()
  {
    return $this->appendCells;
  }
  public function setAppendDimension(Google_Service_Sheets_AppendDimensionRequest $appendDimension)
  {
    $this->appendDimension = $appendDimension;
  }
  public function getAppendDimension()
  {
    return $this->appendDimension;
  }
  public function setAutoFill(Google_Service_Sheets_AutoFillRequest $autoFill)
  {
    $this->autoFill = $autoFill;
  }
  public function getAutoFill()
  {
    return $this->autoFill;
  }
  public function setAutoResizeDimensions(Google_Service_Sheets_AutoResizeDimensionsRequest $autoResizeDimensions)
  {
    $this->autoResizeDimensions = $autoResizeDimensions;
  }
  public function getAutoResizeDimensions()
  {
    return $this->autoResizeDimensions;
  }
  public function setClearBasicFilter(Google_Service_Sheets_ClearBasicFilterRequest $clearBasicFilter)
  {
    $this->clearBasicFilter = $clearBasicFilter;
  }
  public function getClearBasicFilter()
  {
    return $this->clearBasicFilter;
  }
  public function setCopyPaste(Google_Service_Sheets_CopyPasteRequest $copyPaste)
  {
    $this->copyPaste = $copyPaste;
  }
  public function getCopyPaste()
  {
    return $this->copyPaste;
  }
  public function setCutPaste(Google_Service_Sheets_CutPasteRequest $cutPaste)
  {
    $this->cutPaste = $cutPaste;
  }
  public function getCutPaste()
  {
    return $this->cutPaste;
  }
  public function setDeleteConditionalFormatRule(Google_Service_Sheets_DeleteConditionalFormatRuleRequest $deleteConditionalFormatRule)
  {
    $this->deleteConditionalFormatRule = $deleteConditionalFormatRule;
  }
  public function getDeleteConditionalFormatRule()
  {
    return $this->deleteConditionalFormatRule;
  }
  public function setDeleteDimension(Google_Service_Sheets_DeleteDimensionRequest $deleteDimension)
  {
    $this->deleteDimension = $deleteDimension;
  }
  public function getDeleteDimension()
  {
    return $this->deleteDimension;
  }
  public function setDeleteEmbeddedObject(Google_Service_Sheets_DeleteEmbeddedObjectRequest $deleteEmbeddedObject)
  {
    $this->deleteEmbeddedObject = $deleteEmbeddedObject;
  }
  public function getDeleteEmbeddedObject()
  {
    return $this->deleteEmbeddedObject;
  }
  public function setDeleteFilterView(Google_Service_Sheets_DeleteFilterViewRequest $deleteFilterView)
  {
    $this->deleteFilterView = $deleteFilterView;
  }
  public function getDeleteFilterView()
  {
    return $this->deleteFilterView;
  }
  public function setDeleteNamedRange(Google_Service_Sheets_DeleteNamedRangeRequest $deleteNamedRange)
  {
    $this->deleteNamedRange = $deleteNamedRange;
  }
  public function getDeleteNamedRange()
  {
    return $this->deleteNamedRange;
  }
  public function setDeleteProtectedRange(Google_Service_Sheets_DeleteProtectedRangeRequest $deleteProtectedRange)
  {
    $this->deleteProtectedRange = $deleteProtectedRange;
  }
  public function getDeleteProtectedRange()
  {
    return $this->deleteProtectedRange;
  }
  public function setDeleteSheet(Google_Service_Sheets_DeleteSheetRequest $deleteSheet)
  {
    $this->deleteSheet = $deleteSheet;
  }
  public function getDeleteSheet()
  {
    return $this->deleteSheet;
  }
  public function setDuplicateFilterView(Google_Service_Sheets_DuplicateFilterViewRequest $duplicateFilterView)
  {
    $this->duplicateFilterView = $duplicateFilterView;
  }
  public function getDuplicateFilterView()
  {
    return $this->duplicateFilterView;
  }
  public function setDuplicateSheet(Google_Service_Sheets_DuplicateSheetRequest $duplicateSheet)
  {
    $this->duplicateSheet = $duplicateSheet;
  }
  public function getDuplicateSheet()
  {
    return $this->duplicateSheet;
  }
  public function setFindReplace(Google_Service_Sheets_FindReplaceRequest $findReplace)
  {
    $this->findReplace = $findReplace;
  }
  public function getFindReplace()
  {
    return $this->findReplace;
  }
  public function setInsertDimension(Google_Service_Sheets_InsertDimensionRequest $insertDimension)
  {
    $this->insertDimension = $insertDimension;
  }
  public function getInsertDimension()
  {
    return $this->insertDimension;
  }
  public function setMergeCells(Google_Service_Sheets_MergeCellsRequest $mergeCells)
  {
    $this->mergeCells = $mergeCells;
  }
  public function getMergeCells()
  {
    return $this->mergeCells;
  }
  public function setMoveDimension(Google_Service_Sheets_MoveDimensionRequest $moveDimension)
  {
    $this->moveDimension = $moveDimension;
  }
  public function getMoveDimension()
  {
    return $this->moveDimension;
  }
  public function setPasteData(Google_Service_Sheets_PasteDataRequest $pasteData)
  {
    $this->pasteData = $pasteData;
  }
  public function getPasteData()
  {
    return $this->pasteData;
  }
  public function setRepeatCell(Google_Service_Sheets_RepeatCellRequest $repeatCell)
  {
    $this->repeatCell = $repeatCell;
  }
  public function getRepeatCell()
  {
    return $this->repeatCell;
  }
  public function setSetBasicFilter(Google_Service_Sheets_SetBasicFilterRequest $setBasicFilter)
  {
    $this->setBasicFilter = $setBasicFilter;
  }
  public function getSetBasicFilter()
  {
    return $this->setBasicFilter;
  }
  public function setSetDataValidation(Google_Service_Sheets_SetDataValidationRequest $setDataValidation)
  {
    $this->setDataValidation = $setDataValidation;
  }
  public function getSetDataValidation()
  {
    return $this->setDataValidation;
  }
  public function setSortRange(Google_Service_Sheets_SortRangeRequest $sortRange)
  {
    $this->sortRange = $sortRange;
  }
  public function getSortRange()
  {
    return $this->sortRange;
  }
  public function setTextToColumns(Google_Service_Sheets_TextToColumnsRequest $textToColumns)
  {
    $this->textToColumns = $textToColumns;
  }
  public function getTextToColumns()
  {
    return $this->textToColumns;
  }
  public function setUnmergeCells(Google_Service_Sheets_UnmergeCellsRequest $unmergeCells)
  {
    $this->unmergeCells = $unmergeCells;
  }
  public function getUnmergeCells()
  {
    return $this->unmergeCells;
  }
  public function setUpdateBorders(Google_Service_Sheets_UpdateBordersRequest $updateBorders)
  {
    $this->updateBorders = $updateBorders;
  }
  public function getUpdateBorders()
  {
    return $this->updateBorders;
  }
  public function setUpdateCells(Google_Service_Sheets_UpdateCellsRequest $updateCells)
  {
    $this->updateCells = $updateCells;
  }
  public function getUpdateCells()
  {
    return $this->updateCells;
  }
  public function setUpdateChartSpec(Google_Service_Sheets_UpdateChartSpecRequest $updateChartSpec)
  {
    $this->updateChartSpec = $updateChartSpec;
  }
  public function getUpdateChartSpec()
  {
    return $this->updateChartSpec;
  }
  public function setUpdateConditionalFormatRule(Google_Service_Sheets_UpdateConditionalFormatRuleRequest $updateConditionalFormatRule)
  {
    $this->updateConditionalFormatRule = $updateConditionalFormatRule;
  }
  public function getUpdateConditionalFormatRule()
  {
    return $this->updateConditionalFormatRule;
  }
  public function setUpdateDimensionProperties(Google_Service_Sheets_UpdateDimensionPropertiesRequest $updateDimensionProperties)
  {
    $this->updateDimensionProperties = $updateDimensionProperties;
  }
  public function getUpdateDimensionProperties()
  {
    return $this->updateDimensionProperties;
  }
  public function setUpdateEmbeddedObjectPosition(Google_Service_Sheets_UpdateEmbeddedObjectPositionRequest $updateEmbeddedObjectPosition)
  {
    $this->updateEmbeddedObjectPosition = $updateEmbeddedObjectPosition;
  }
  public function getUpdateEmbeddedObjectPosition()
  {
    return $this->updateEmbeddedObjectPosition;
  }
  public function setUpdateFilterView(Google_Service_Sheets_UpdateFilterViewRequest $updateFilterView)
  {
    $this->updateFilterView = $updateFilterView;
  }
  public function getUpdateFilterView()
  {
    return $this->updateFilterView;
  }
  public function setUpdateNamedRange(Google_Service_Sheets_UpdateNamedRangeRequest $updateNamedRange)
  {
    $this->updateNamedRange = $updateNamedRange;
  }
  public function getUpdateNamedRange()
  {
    return $this->updateNamedRange;
  }
  public function setUpdateProtectedRange(Google_Service_Sheets_UpdateProtectedRangeRequest $updateProtectedRange)
  {
    $this->updateProtectedRange = $updateProtectedRange;
  }
  public function getUpdateProtectedRange()
  {
    return $this->updateProtectedRange;
  }
  public function setUpdateSheetProperties(Google_Service_Sheets_UpdateSheetPropertiesRequest $updateSheetProperties)
  {
    $this->updateSheetProperties = $updateSheetProperties;
  }
  public function getUpdateSheetProperties()
  {
    return $this->updateSheetProperties;
  }
  public function setUpdateSpreadsheetProperties(Google_Service_Sheets_UpdateSpreadsheetPropertiesRequest $updateSpreadsheetProperties)
  {
    $this->updateSpreadsheetProperties = $updateSpreadsheetProperties;
  }
  public function getUpdateSpreadsheetProperties()
  {
    return $this->updateSpreadsheetProperties;
  }
}
