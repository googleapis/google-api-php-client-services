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

namespace Google\Service\Slides;

class Request extends \Google\Model
{
  /**
   * @var CreateImageRequest
   */
  public $createImage;
  protected $createImageType = CreateImageRequest::class;
  protected $createImageDataType = '';
  /**
   * @var CreateLineRequest
   */
  public $createLine;
  protected $createLineType = CreateLineRequest::class;
  protected $createLineDataType = '';
  /**
   * @var CreateParagraphBulletsRequest
   */
  public $createParagraphBullets;
  protected $createParagraphBulletsType = CreateParagraphBulletsRequest::class;
  protected $createParagraphBulletsDataType = '';
  /**
   * @var CreateShapeRequest
   */
  public $createShape;
  protected $createShapeType = CreateShapeRequest::class;
  protected $createShapeDataType = '';
  /**
   * @var CreateSheetsChartRequest
   */
  public $createSheetsChart;
  protected $createSheetsChartType = CreateSheetsChartRequest::class;
  protected $createSheetsChartDataType = '';
  /**
   * @var CreateSlideRequest
   */
  public $createSlide;
  protected $createSlideType = CreateSlideRequest::class;
  protected $createSlideDataType = '';
  /**
   * @var CreateTableRequest
   */
  public $createTable;
  protected $createTableType = CreateTableRequest::class;
  protected $createTableDataType = '';
  /**
   * @var CreateVideoRequest
   */
  public $createVideo;
  protected $createVideoType = CreateVideoRequest::class;
  protected $createVideoDataType = '';
  /**
   * @var DeleteObjectRequest
   */
  public $deleteObject;
  protected $deleteObjectType = DeleteObjectRequest::class;
  protected $deleteObjectDataType = '';
  /**
   * @var DeleteParagraphBulletsRequest
   */
  public $deleteParagraphBullets;
  protected $deleteParagraphBulletsType = DeleteParagraphBulletsRequest::class;
  protected $deleteParagraphBulletsDataType = '';
  /**
   * @var DeleteTableColumnRequest
   */
  public $deleteTableColumn;
  protected $deleteTableColumnType = DeleteTableColumnRequest::class;
  protected $deleteTableColumnDataType = '';
  /**
   * @var DeleteTableRowRequest
   */
  public $deleteTableRow;
  protected $deleteTableRowType = DeleteTableRowRequest::class;
  protected $deleteTableRowDataType = '';
  /**
   * @var DeleteTextRequest
   */
  public $deleteText;
  protected $deleteTextType = DeleteTextRequest::class;
  protected $deleteTextDataType = '';
  /**
   * @var DuplicateObjectRequest
   */
  public $duplicateObject;
  protected $duplicateObjectType = DuplicateObjectRequest::class;
  protected $duplicateObjectDataType = '';
  /**
   * @var GroupObjectsRequest
   */
  public $groupObjects;
  protected $groupObjectsType = GroupObjectsRequest::class;
  protected $groupObjectsDataType = '';
  /**
   * @var InsertTableColumnsRequest
   */
  public $insertTableColumns;
  protected $insertTableColumnsType = InsertTableColumnsRequest::class;
  protected $insertTableColumnsDataType = '';
  /**
   * @var InsertTableRowsRequest
   */
  public $insertTableRows;
  protected $insertTableRowsType = InsertTableRowsRequest::class;
  protected $insertTableRowsDataType = '';
  /**
   * @var InsertTextRequest
   */
  public $insertText;
  protected $insertTextType = InsertTextRequest::class;
  protected $insertTextDataType = '';
  /**
   * @var MergeTableCellsRequest
   */
  public $mergeTableCells;
  protected $mergeTableCellsType = MergeTableCellsRequest::class;
  protected $mergeTableCellsDataType = '';
  /**
   * @var RefreshSheetsChartRequest
   */
  public $refreshSheetsChart;
  protected $refreshSheetsChartType = RefreshSheetsChartRequest::class;
  protected $refreshSheetsChartDataType = '';
  /**
   * @var ReplaceAllShapesWithImageRequest
   */
  public $replaceAllShapesWithImage;
  protected $replaceAllShapesWithImageType = ReplaceAllShapesWithImageRequest::class;
  protected $replaceAllShapesWithImageDataType = '';
  /**
   * @var ReplaceAllShapesWithSheetsChartRequest
   */
  public $replaceAllShapesWithSheetsChart;
  protected $replaceAllShapesWithSheetsChartType = ReplaceAllShapesWithSheetsChartRequest::class;
  protected $replaceAllShapesWithSheetsChartDataType = '';
  /**
   * @var ReplaceAllTextRequest
   */
  public $replaceAllText;
  protected $replaceAllTextType = ReplaceAllTextRequest::class;
  protected $replaceAllTextDataType = '';
  /**
   * @var ReplaceImageRequest
   */
  public $replaceImage;
  protected $replaceImageType = ReplaceImageRequest::class;
  protected $replaceImageDataType = '';
  /**
   * @var RerouteLineRequest
   */
  public $rerouteLine;
  protected $rerouteLineType = RerouteLineRequest::class;
  protected $rerouteLineDataType = '';
  /**
   * @var UngroupObjectsRequest
   */
  public $ungroupObjects;
  protected $ungroupObjectsType = UngroupObjectsRequest::class;
  protected $ungroupObjectsDataType = '';
  /**
   * @var UnmergeTableCellsRequest
   */
  public $unmergeTableCells;
  protected $unmergeTableCellsType = UnmergeTableCellsRequest::class;
  protected $unmergeTableCellsDataType = '';
  /**
   * @var UpdateImagePropertiesRequest
   */
  public $updateImageProperties;
  protected $updateImagePropertiesType = UpdateImagePropertiesRequest::class;
  protected $updateImagePropertiesDataType = '';
  /**
   * @var UpdateLineCategoryRequest
   */
  public $updateLineCategory;
  protected $updateLineCategoryType = UpdateLineCategoryRequest::class;
  protected $updateLineCategoryDataType = '';
  /**
   * @var UpdateLinePropertiesRequest
   */
  public $updateLineProperties;
  protected $updateLinePropertiesType = UpdateLinePropertiesRequest::class;
  protected $updateLinePropertiesDataType = '';
  /**
   * @var UpdatePageElementAltTextRequest
   */
  public $updatePageElementAltText;
  protected $updatePageElementAltTextType = UpdatePageElementAltTextRequest::class;
  protected $updatePageElementAltTextDataType = '';
  /**
   * @var UpdatePageElementTransformRequest
   */
  public $updatePageElementTransform;
  protected $updatePageElementTransformType = UpdatePageElementTransformRequest::class;
  protected $updatePageElementTransformDataType = '';
  /**
   * @var UpdatePageElementsZOrderRequest
   */
  public $updatePageElementsZOrder;
  protected $updatePageElementsZOrderType = UpdatePageElementsZOrderRequest::class;
  protected $updatePageElementsZOrderDataType = '';
  /**
   * @var UpdatePagePropertiesRequest
   */
  public $updatePageProperties;
  protected $updatePagePropertiesType = UpdatePagePropertiesRequest::class;
  protected $updatePagePropertiesDataType = '';
  /**
   * @var UpdateParagraphStyleRequest
   */
  public $updateParagraphStyle;
  protected $updateParagraphStyleType = UpdateParagraphStyleRequest::class;
  protected $updateParagraphStyleDataType = '';
  /**
   * @var UpdateShapePropertiesRequest
   */
  public $updateShapeProperties;
  protected $updateShapePropertiesType = UpdateShapePropertiesRequest::class;
  protected $updateShapePropertiesDataType = '';
  /**
   * @var UpdateSlidePropertiesRequest
   */
  public $updateSlideProperties;
  protected $updateSlidePropertiesType = UpdateSlidePropertiesRequest::class;
  protected $updateSlidePropertiesDataType = '';
  /**
   * @var UpdateSlidesPositionRequest
   */
  public $updateSlidesPosition;
  protected $updateSlidesPositionType = UpdateSlidesPositionRequest::class;
  protected $updateSlidesPositionDataType = '';
  /**
   * @var UpdateTableBorderPropertiesRequest
   */
  public $updateTableBorderProperties;
  protected $updateTableBorderPropertiesType = UpdateTableBorderPropertiesRequest::class;
  protected $updateTableBorderPropertiesDataType = '';
  /**
   * @var UpdateTableCellPropertiesRequest
   */
  public $updateTableCellProperties;
  protected $updateTableCellPropertiesType = UpdateTableCellPropertiesRequest::class;
  protected $updateTableCellPropertiesDataType = '';
  /**
   * @var UpdateTableColumnPropertiesRequest
   */
  public $updateTableColumnProperties;
  protected $updateTableColumnPropertiesType = UpdateTableColumnPropertiesRequest::class;
  protected $updateTableColumnPropertiesDataType = '';
  /**
   * @var UpdateTableRowPropertiesRequest
   */
  public $updateTableRowProperties;
  protected $updateTableRowPropertiesType = UpdateTableRowPropertiesRequest::class;
  protected $updateTableRowPropertiesDataType = '';
  /**
   * @var UpdateTextStyleRequest
   */
  public $updateTextStyle;
  protected $updateTextStyleType = UpdateTextStyleRequest::class;
  protected $updateTextStyleDataType = '';
  /**
   * @var UpdateVideoPropertiesRequest
   */
  public $updateVideoProperties;
  protected $updateVideoPropertiesType = UpdateVideoPropertiesRequest::class;
  protected $updateVideoPropertiesDataType = '';

  /**
   * @param CreateImageRequest
   */
  public function setCreateImage(CreateImageRequest $createImage)
  {
    $this->createImage = $createImage;
  }
  /**
   * @return CreateImageRequest
   */
  public function getCreateImage()
  {
    return $this->createImage;
  }
  /**
   * @param CreateLineRequest
   */
  public function setCreateLine(CreateLineRequest $createLine)
  {
    $this->createLine = $createLine;
  }
  /**
   * @return CreateLineRequest
   */
  public function getCreateLine()
  {
    return $this->createLine;
  }
  /**
   * @param CreateParagraphBulletsRequest
   */
  public function setCreateParagraphBullets(CreateParagraphBulletsRequest $createParagraphBullets)
  {
    $this->createParagraphBullets = $createParagraphBullets;
  }
  /**
   * @return CreateParagraphBulletsRequest
   */
  public function getCreateParagraphBullets()
  {
    return $this->createParagraphBullets;
  }
  /**
   * @param CreateShapeRequest
   */
  public function setCreateShape(CreateShapeRequest $createShape)
  {
    $this->createShape = $createShape;
  }
  /**
   * @return CreateShapeRequest
   */
  public function getCreateShape()
  {
    return $this->createShape;
  }
  /**
   * @param CreateSheetsChartRequest
   */
  public function setCreateSheetsChart(CreateSheetsChartRequest $createSheetsChart)
  {
    $this->createSheetsChart = $createSheetsChart;
  }
  /**
   * @return CreateSheetsChartRequest
   */
  public function getCreateSheetsChart()
  {
    return $this->createSheetsChart;
  }
  /**
   * @param CreateSlideRequest
   */
  public function setCreateSlide(CreateSlideRequest $createSlide)
  {
    $this->createSlide = $createSlide;
  }
  /**
   * @return CreateSlideRequest
   */
  public function getCreateSlide()
  {
    return $this->createSlide;
  }
  /**
   * @param CreateTableRequest
   */
  public function setCreateTable(CreateTableRequest $createTable)
  {
    $this->createTable = $createTable;
  }
  /**
   * @return CreateTableRequest
   */
  public function getCreateTable()
  {
    return $this->createTable;
  }
  /**
   * @param CreateVideoRequest
   */
  public function setCreateVideo(CreateVideoRequest $createVideo)
  {
    $this->createVideo = $createVideo;
  }
  /**
   * @return CreateVideoRequest
   */
  public function getCreateVideo()
  {
    return $this->createVideo;
  }
  /**
   * @param DeleteObjectRequest
   */
  public function setDeleteObject(DeleteObjectRequest $deleteObject)
  {
    $this->deleteObject = $deleteObject;
  }
  /**
   * @return DeleteObjectRequest
   */
  public function getDeleteObject()
  {
    return $this->deleteObject;
  }
  /**
   * @param DeleteParagraphBulletsRequest
   */
  public function setDeleteParagraphBullets(DeleteParagraphBulletsRequest $deleteParagraphBullets)
  {
    $this->deleteParagraphBullets = $deleteParagraphBullets;
  }
  /**
   * @return DeleteParagraphBulletsRequest
   */
  public function getDeleteParagraphBullets()
  {
    return $this->deleteParagraphBullets;
  }
  /**
   * @param DeleteTableColumnRequest
   */
  public function setDeleteTableColumn(DeleteTableColumnRequest $deleteTableColumn)
  {
    $this->deleteTableColumn = $deleteTableColumn;
  }
  /**
   * @return DeleteTableColumnRequest
   */
  public function getDeleteTableColumn()
  {
    return $this->deleteTableColumn;
  }
  /**
   * @param DeleteTableRowRequest
   */
  public function setDeleteTableRow(DeleteTableRowRequest $deleteTableRow)
  {
    $this->deleteTableRow = $deleteTableRow;
  }
  /**
   * @return DeleteTableRowRequest
   */
  public function getDeleteTableRow()
  {
    return $this->deleteTableRow;
  }
  /**
   * @param DeleteTextRequest
   */
  public function setDeleteText(DeleteTextRequest $deleteText)
  {
    $this->deleteText = $deleteText;
  }
  /**
   * @return DeleteTextRequest
   */
  public function getDeleteText()
  {
    return $this->deleteText;
  }
  /**
   * @param DuplicateObjectRequest
   */
  public function setDuplicateObject(DuplicateObjectRequest $duplicateObject)
  {
    $this->duplicateObject = $duplicateObject;
  }
  /**
   * @return DuplicateObjectRequest
   */
  public function getDuplicateObject()
  {
    return $this->duplicateObject;
  }
  /**
   * @param GroupObjectsRequest
   */
  public function setGroupObjects(GroupObjectsRequest $groupObjects)
  {
    $this->groupObjects = $groupObjects;
  }
  /**
   * @return GroupObjectsRequest
   */
  public function getGroupObjects()
  {
    return $this->groupObjects;
  }
  /**
   * @param InsertTableColumnsRequest
   */
  public function setInsertTableColumns(InsertTableColumnsRequest $insertTableColumns)
  {
    $this->insertTableColumns = $insertTableColumns;
  }
  /**
   * @return InsertTableColumnsRequest
   */
  public function getInsertTableColumns()
  {
    return $this->insertTableColumns;
  }
  /**
   * @param InsertTableRowsRequest
   */
  public function setInsertTableRows(InsertTableRowsRequest $insertTableRows)
  {
    $this->insertTableRows = $insertTableRows;
  }
  /**
   * @return InsertTableRowsRequest
   */
  public function getInsertTableRows()
  {
    return $this->insertTableRows;
  }
  /**
   * @param InsertTextRequest
   */
  public function setInsertText(InsertTextRequest $insertText)
  {
    $this->insertText = $insertText;
  }
  /**
   * @return InsertTextRequest
   */
  public function getInsertText()
  {
    return $this->insertText;
  }
  /**
   * @param MergeTableCellsRequest
   */
  public function setMergeTableCells(MergeTableCellsRequest $mergeTableCells)
  {
    $this->mergeTableCells = $mergeTableCells;
  }
  /**
   * @return MergeTableCellsRequest
   */
  public function getMergeTableCells()
  {
    return $this->mergeTableCells;
  }
  /**
   * @param RefreshSheetsChartRequest
   */
  public function setRefreshSheetsChart(RefreshSheetsChartRequest $refreshSheetsChart)
  {
    $this->refreshSheetsChart = $refreshSheetsChart;
  }
  /**
   * @return RefreshSheetsChartRequest
   */
  public function getRefreshSheetsChart()
  {
    return $this->refreshSheetsChart;
  }
  /**
   * @param ReplaceAllShapesWithImageRequest
   */
  public function setReplaceAllShapesWithImage(ReplaceAllShapesWithImageRequest $replaceAllShapesWithImage)
  {
    $this->replaceAllShapesWithImage = $replaceAllShapesWithImage;
  }
  /**
   * @return ReplaceAllShapesWithImageRequest
   */
  public function getReplaceAllShapesWithImage()
  {
    return $this->replaceAllShapesWithImage;
  }
  /**
   * @param ReplaceAllShapesWithSheetsChartRequest
   */
  public function setReplaceAllShapesWithSheetsChart(ReplaceAllShapesWithSheetsChartRequest $replaceAllShapesWithSheetsChart)
  {
    $this->replaceAllShapesWithSheetsChart = $replaceAllShapesWithSheetsChart;
  }
  /**
   * @return ReplaceAllShapesWithSheetsChartRequest
   */
  public function getReplaceAllShapesWithSheetsChart()
  {
    return $this->replaceAllShapesWithSheetsChart;
  }
  /**
   * @param ReplaceAllTextRequest
   */
  public function setReplaceAllText(ReplaceAllTextRequest $replaceAllText)
  {
    $this->replaceAllText = $replaceAllText;
  }
  /**
   * @return ReplaceAllTextRequest
   */
  public function getReplaceAllText()
  {
    return $this->replaceAllText;
  }
  /**
   * @param ReplaceImageRequest
   */
  public function setReplaceImage(ReplaceImageRequest $replaceImage)
  {
    $this->replaceImage = $replaceImage;
  }
  /**
   * @return ReplaceImageRequest
   */
  public function getReplaceImage()
  {
    return $this->replaceImage;
  }
  /**
   * @param RerouteLineRequest
   */
  public function setRerouteLine(RerouteLineRequest $rerouteLine)
  {
    $this->rerouteLine = $rerouteLine;
  }
  /**
   * @return RerouteLineRequest
   */
  public function getRerouteLine()
  {
    return $this->rerouteLine;
  }
  /**
   * @param UngroupObjectsRequest
   */
  public function setUngroupObjects(UngroupObjectsRequest $ungroupObjects)
  {
    $this->ungroupObjects = $ungroupObjects;
  }
  /**
   * @return UngroupObjectsRequest
   */
  public function getUngroupObjects()
  {
    return $this->ungroupObjects;
  }
  /**
   * @param UnmergeTableCellsRequest
   */
  public function setUnmergeTableCells(UnmergeTableCellsRequest $unmergeTableCells)
  {
    $this->unmergeTableCells = $unmergeTableCells;
  }
  /**
   * @return UnmergeTableCellsRequest
   */
  public function getUnmergeTableCells()
  {
    return $this->unmergeTableCells;
  }
  /**
   * @param UpdateImagePropertiesRequest
   */
  public function setUpdateImageProperties(UpdateImagePropertiesRequest $updateImageProperties)
  {
    $this->updateImageProperties = $updateImageProperties;
  }
  /**
   * @return UpdateImagePropertiesRequest
   */
  public function getUpdateImageProperties()
  {
    return $this->updateImageProperties;
  }
  /**
   * @param UpdateLineCategoryRequest
   */
  public function setUpdateLineCategory(UpdateLineCategoryRequest $updateLineCategory)
  {
    $this->updateLineCategory = $updateLineCategory;
  }
  /**
   * @return UpdateLineCategoryRequest
   */
  public function getUpdateLineCategory()
  {
    return $this->updateLineCategory;
  }
  /**
   * @param UpdateLinePropertiesRequest
   */
  public function setUpdateLineProperties(UpdateLinePropertiesRequest $updateLineProperties)
  {
    $this->updateLineProperties = $updateLineProperties;
  }
  /**
   * @return UpdateLinePropertiesRequest
   */
  public function getUpdateLineProperties()
  {
    return $this->updateLineProperties;
  }
  /**
   * @param UpdatePageElementAltTextRequest
   */
  public function setUpdatePageElementAltText(UpdatePageElementAltTextRequest $updatePageElementAltText)
  {
    $this->updatePageElementAltText = $updatePageElementAltText;
  }
  /**
   * @return UpdatePageElementAltTextRequest
   */
  public function getUpdatePageElementAltText()
  {
    return $this->updatePageElementAltText;
  }
  /**
   * @param UpdatePageElementTransformRequest
   */
  public function setUpdatePageElementTransform(UpdatePageElementTransformRequest $updatePageElementTransform)
  {
    $this->updatePageElementTransform = $updatePageElementTransform;
  }
  /**
   * @return UpdatePageElementTransformRequest
   */
  public function getUpdatePageElementTransform()
  {
    return $this->updatePageElementTransform;
  }
  /**
   * @param UpdatePageElementsZOrderRequest
   */
  public function setUpdatePageElementsZOrder(UpdatePageElementsZOrderRequest $updatePageElementsZOrder)
  {
    $this->updatePageElementsZOrder = $updatePageElementsZOrder;
  }
  /**
   * @return UpdatePageElementsZOrderRequest
   */
  public function getUpdatePageElementsZOrder()
  {
    return $this->updatePageElementsZOrder;
  }
  /**
   * @param UpdatePagePropertiesRequest
   */
  public function setUpdatePageProperties(UpdatePagePropertiesRequest $updatePageProperties)
  {
    $this->updatePageProperties = $updatePageProperties;
  }
  /**
   * @return UpdatePagePropertiesRequest
   */
  public function getUpdatePageProperties()
  {
    return $this->updatePageProperties;
  }
  /**
   * @param UpdateParagraphStyleRequest
   */
  public function setUpdateParagraphStyle(UpdateParagraphStyleRequest $updateParagraphStyle)
  {
    $this->updateParagraphStyle = $updateParagraphStyle;
  }
  /**
   * @return UpdateParagraphStyleRequest
   */
  public function getUpdateParagraphStyle()
  {
    return $this->updateParagraphStyle;
  }
  /**
   * @param UpdateShapePropertiesRequest
   */
  public function setUpdateShapeProperties(UpdateShapePropertiesRequest $updateShapeProperties)
  {
    $this->updateShapeProperties = $updateShapeProperties;
  }
  /**
   * @return UpdateShapePropertiesRequest
   */
  public function getUpdateShapeProperties()
  {
    return $this->updateShapeProperties;
  }
  /**
   * @param UpdateSlidePropertiesRequest
   */
  public function setUpdateSlideProperties(UpdateSlidePropertiesRequest $updateSlideProperties)
  {
    $this->updateSlideProperties = $updateSlideProperties;
  }
  /**
   * @return UpdateSlidePropertiesRequest
   */
  public function getUpdateSlideProperties()
  {
    return $this->updateSlideProperties;
  }
  /**
   * @param UpdateSlidesPositionRequest
   */
  public function setUpdateSlidesPosition(UpdateSlidesPositionRequest $updateSlidesPosition)
  {
    $this->updateSlidesPosition = $updateSlidesPosition;
  }
  /**
   * @return UpdateSlidesPositionRequest
   */
  public function getUpdateSlidesPosition()
  {
    return $this->updateSlidesPosition;
  }
  /**
   * @param UpdateTableBorderPropertiesRequest
   */
  public function setUpdateTableBorderProperties(UpdateTableBorderPropertiesRequest $updateTableBorderProperties)
  {
    $this->updateTableBorderProperties = $updateTableBorderProperties;
  }
  /**
   * @return UpdateTableBorderPropertiesRequest
   */
  public function getUpdateTableBorderProperties()
  {
    return $this->updateTableBorderProperties;
  }
  /**
   * @param UpdateTableCellPropertiesRequest
   */
  public function setUpdateTableCellProperties(UpdateTableCellPropertiesRequest $updateTableCellProperties)
  {
    $this->updateTableCellProperties = $updateTableCellProperties;
  }
  /**
   * @return UpdateTableCellPropertiesRequest
   */
  public function getUpdateTableCellProperties()
  {
    return $this->updateTableCellProperties;
  }
  /**
   * @param UpdateTableColumnPropertiesRequest
   */
  public function setUpdateTableColumnProperties(UpdateTableColumnPropertiesRequest $updateTableColumnProperties)
  {
    $this->updateTableColumnProperties = $updateTableColumnProperties;
  }
  /**
   * @return UpdateTableColumnPropertiesRequest
   */
  public function getUpdateTableColumnProperties()
  {
    return $this->updateTableColumnProperties;
  }
  /**
   * @param UpdateTableRowPropertiesRequest
   */
  public function setUpdateTableRowProperties(UpdateTableRowPropertiesRequest $updateTableRowProperties)
  {
    $this->updateTableRowProperties = $updateTableRowProperties;
  }
  /**
   * @return UpdateTableRowPropertiesRequest
   */
  public function getUpdateTableRowProperties()
  {
    return $this->updateTableRowProperties;
  }
  /**
   * @param UpdateTextStyleRequest
   */
  public function setUpdateTextStyle(UpdateTextStyleRequest $updateTextStyle)
  {
    $this->updateTextStyle = $updateTextStyle;
  }
  /**
   * @return UpdateTextStyleRequest
   */
  public function getUpdateTextStyle()
  {
    return $this->updateTextStyle;
  }
  /**
   * @param UpdateVideoPropertiesRequest
   */
  public function setUpdateVideoProperties(UpdateVideoPropertiesRequest $updateVideoProperties)
  {
    $this->updateVideoProperties = $updateVideoProperties;
  }
  /**
   * @return UpdateVideoPropertiesRequest
   */
  public function getUpdateVideoProperties()
  {
    return $this->updateVideoProperties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Request::class, 'Google_Service_Slides_Request');
