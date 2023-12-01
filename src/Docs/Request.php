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

namespace Google\Service\Docs;

class Request extends \Google\Model
{
  /**
   * @var CreateFooterRequest
   */
  public $createFooter;
  protected $createFooterType = CreateFooterRequest::class;
  protected $createFooterDataType = '';
  /**
   * @var CreateFootnoteRequest
   */
  public $createFootnote;
  protected $createFootnoteType = CreateFootnoteRequest::class;
  protected $createFootnoteDataType = '';
  /**
   * @var CreateHeaderRequest
   */
  public $createHeader;
  protected $createHeaderType = CreateHeaderRequest::class;
  protected $createHeaderDataType = '';
  /**
   * @var CreateNamedRangeRequest
   */
  public $createNamedRange;
  protected $createNamedRangeType = CreateNamedRangeRequest::class;
  protected $createNamedRangeDataType = '';
  /**
   * @var CreateParagraphBulletsRequest
   */
  public $createParagraphBullets;
  protected $createParagraphBulletsType = CreateParagraphBulletsRequest::class;
  protected $createParagraphBulletsDataType = '';
  /**
   * @var DeleteContentRangeRequest
   */
  public $deleteContentRange;
  protected $deleteContentRangeType = DeleteContentRangeRequest::class;
  protected $deleteContentRangeDataType = '';
  /**
   * @var DeleteFooterRequest
   */
  public $deleteFooter;
  protected $deleteFooterType = DeleteFooterRequest::class;
  protected $deleteFooterDataType = '';
  /**
   * @var DeleteHeaderRequest
   */
  public $deleteHeader;
  protected $deleteHeaderType = DeleteHeaderRequest::class;
  protected $deleteHeaderDataType = '';
  /**
   * @var DeleteNamedRangeRequest
   */
  public $deleteNamedRange;
  protected $deleteNamedRangeType = DeleteNamedRangeRequest::class;
  protected $deleteNamedRangeDataType = '';
  /**
   * @var DeleteParagraphBulletsRequest
   */
  public $deleteParagraphBullets;
  protected $deleteParagraphBulletsType = DeleteParagraphBulletsRequest::class;
  protected $deleteParagraphBulletsDataType = '';
  /**
   * @var DeletePositionedObjectRequest
   */
  public $deletePositionedObject;
  protected $deletePositionedObjectType = DeletePositionedObjectRequest::class;
  protected $deletePositionedObjectDataType = '';
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
   * @var InsertInlineImageRequest
   */
  public $insertInlineImage;
  protected $insertInlineImageType = InsertInlineImageRequest::class;
  protected $insertInlineImageDataType = '';
  /**
   * @var InsertPageBreakRequest
   */
  public $insertPageBreak;
  protected $insertPageBreakType = InsertPageBreakRequest::class;
  protected $insertPageBreakDataType = '';
  /**
   * @var InsertSectionBreakRequest
   */
  public $insertSectionBreak;
  protected $insertSectionBreakType = InsertSectionBreakRequest::class;
  protected $insertSectionBreakDataType = '';
  /**
   * @var InsertTableRequest
   */
  public $insertTable;
  protected $insertTableType = InsertTableRequest::class;
  protected $insertTableDataType = '';
  /**
   * @var InsertTableColumnRequest
   */
  public $insertTableColumn;
  protected $insertTableColumnType = InsertTableColumnRequest::class;
  protected $insertTableColumnDataType = '';
  /**
   * @var InsertTableRowRequest
   */
  public $insertTableRow;
  protected $insertTableRowType = InsertTableRowRequest::class;
  protected $insertTableRowDataType = '';
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
   * @var PinTableHeaderRowsRequest
   */
  public $pinTableHeaderRows;
  protected $pinTableHeaderRowsType = PinTableHeaderRowsRequest::class;
  protected $pinTableHeaderRowsDataType = '';
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
   * @var ReplaceNamedRangeContentRequest
   */
  public $replaceNamedRangeContent;
  protected $replaceNamedRangeContentType = ReplaceNamedRangeContentRequest::class;
  protected $replaceNamedRangeContentDataType = '';
  /**
   * @var UnmergeTableCellsRequest
   */
  public $unmergeTableCells;
  protected $unmergeTableCellsType = UnmergeTableCellsRequest::class;
  protected $unmergeTableCellsDataType = '';
  /**
   * @var UpdateDocumentStyleRequest
   */
  public $updateDocumentStyle;
  protected $updateDocumentStyleType = UpdateDocumentStyleRequest::class;
  protected $updateDocumentStyleDataType = '';
  /**
   * @var UpdateParagraphStyleRequest
   */
  public $updateParagraphStyle;
  protected $updateParagraphStyleType = UpdateParagraphStyleRequest::class;
  protected $updateParagraphStyleDataType = '';
  /**
   * @var UpdateSectionStyleRequest
   */
  public $updateSectionStyle;
  protected $updateSectionStyleType = UpdateSectionStyleRequest::class;
  protected $updateSectionStyleDataType = '';
  /**
   * @var UpdateTableCellStyleRequest
   */
  public $updateTableCellStyle;
  protected $updateTableCellStyleType = UpdateTableCellStyleRequest::class;
  protected $updateTableCellStyleDataType = '';
  /**
   * @var UpdateTableColumnPropertiesRequest
   */
  public $updateTableColumnProperties;
  protected $updateTableColumnPropertiesType = UpdateTableColumnPropertiesRequest::class;
  protected $updateTableColumnPropertiesDataType = '';
  /**
   * @var UpdateTableRowStyleRequest
   */
  public $updateTableRowStyle;
  protected $updateTableRowStyleType = UpdateTableRowStyleRequest::class;
  protected $updateTableRowStyleDataType = '';
  /**
   * @var UpdateTextStyleRequest
   */
  public $updateTextStyle;
  protected $updateTextStyleType = UpdateTextStyleRequest::class;
  protected $updateTextStyleDataType = '';

  /**
   * @param CreateFooterRequest
   */
  public function setCreateFooter(CreateFooterRequest $createFooter)
  {
    $this->createFooter = $createFooter;
  }
  /**
   * @return CreateFooterRequest
   */
  public function getCreateFooter()
  {
    return $this->createFooter;
  }
  /**
   * @param CreateFootnoteRequest
   */
  public function setCreateFootnote(CreateFootnoteRequest $createFootnote)
  {
    $this->createFootnote = $createFootnote;
  }
  /**
   * @return CreateFootnoteRequest
   */
  public function getCreateFootnote()
  {
    return $this->createFootnote;
  }
  /**
   * @param CreateHeaderRequest
   */
  public function setCreateHeader(CreateHeaderRequest $createHeader)
  {
    $this->createHeader = $createHeader;
  }
  /**
   * @return CreateHeaderRequest
   */
  public function getCreateHeader()
  {
    return $this->createHeader;
  }
  /**
   * @param CreateNamedRangeRequest
   */
  public function setCreateNamedRange(CreateNamedRangeRequest $createNamedRange)
  {
    $this->createNamedRange = $createNamedRange;
  }
  /**
   * @return CreateNamedRangeRequest
   */
  public function getCreateNamedRange()
  {
    return $this->createNamedRange;
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
   * @param DeleteContentRangeRequest
   */
  public function setDeleteContentRange(DeleteContentRangeRequest $deleteContentRange)
  {
    $this->deleteContentRange = $deleteContentRange;
  }
  /**
   * @return DeleteContentRangeRequest
   */
  public function getDeleteContentRange()
  {
    return $this->deleteContentRange;
  }
  /**
   * @param DeleteFooterRequest
   */
  public function setDeleteFooter(DeleteFooterRequest $deleteFooter)
  {
    $this->deleteFooter = $deleteFooter;
  }
  /**
   * @return DeleteFooterRequest
   */
  public function getDeleteFooter()
  {
    return $this->deleteFooter;
  }
  /**
   * @param DeleteHeaderRequest
   */
  public function setDeleteHeader(DeleteHeaderRequest $deleteHeader)
  {
    $this->deleteHeader = $deleteHeader;
  }
  /**
   * @return DeleteHeaderRequest
   */
  public function getDeleteHeader()
  {
    return $this->deleteHeader;
  }
  /**
   * @param DeleteNamedRangeRequest
   */
  public function setDeleteNamedRange(DeleteNamedRangeRequest $deleteNamedRange)
  {
    $this->deleteNamedRange = $deleteNamedRange;
  }
  /**
   * @return DeleteNamedRangeRequest
   */
  public function getDeleteNamedRange()
  {
    return $this->deleteNamedRange;
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
   * @param DeletePositionedObjectRequest
   */
  public function setDeletePositionedObject(DeletePositionedObjectRequest $deletePositionedObject)
  {
    $this->deletePositionedObject = $deletePositionedObject;
  }
  /**
   * @return DeletePositionedObjectRequest
   */
  public function getDeletePositionedObject()
  {
    return $this->deletePositionedObject;
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
   * @param InsertInlineImageRequest
   */
  public function setInsertInlineImage(InsertInlineImageRequest $insertInlineImage)
  {
    $this->insertInlineImage = $insertInlineImage;
  }
  /**
   * @return InsertInlineImageRequest
   */
  public function getInsertInlineImage()
  {
    return $this->insertInlineImage;
  }
  /**
   * @param InsertPageBreakRequest
   */
  public function setInsertPageBreak(InsertPageBreakRequest $insertPageBreak)
  {
    $this->insertPageBreak = $insertPageBreak;
  }
  /**
   * @return InsertPageBreakRequest
   */
  public function getInsertPageBreak()
  {
    return $this->insertPageBreak;
  }
  /**
   * @param InsertSectionBreakRequest
   */
  public function setInsertSectionBreak(InsertSectionBreakRequest $insertSectionBreak)
  {
    $this->insertSectionBreak = $insertSectionBreak;
  }
  /**
   * @return InsertSectionBreakRequest
   */
  public function getInsertSectionBreak()
  {
    return $this->insertSectionBreak;
  }
  /**
   * @param InsertTableRequest
   */
  public function setInsertTable(InsertTableRequest $insertTable)
  {
    $this->insertTable = $insertTable;
  }
  /**
   * @return InsertTableRequest
   */
  public function getInsertTable()
  {
    return $this->insertTable;
  }
  /**
   * @param InsertTableColumnRequest
   */
  public function setInsertTableColumn(InsertTableColumnRequest $insertTableColumn)
  {
    $this->insertTableColumn = $insertTableColumn;
  }
  /**
   * @return InsertTableColumnRequest
   */
  public function getInsertTableColumn()
  {
    return $this->insertTableColumn;
  }
  /**
   * @param InsertTableRowRequest
   */
  public function setInsertTableRow(InsertTableRowRequest $insertTableRow)
  {
    $this->insertTableRow = $insertTableRow;
  }
  /**
   * @return InsertTableRowRequest
   */
  public function getInsertTableRow()
  {
    return $this->insertTableRow;
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
   * @param PinTableHeaderRowsRequest
   */
  public function setPinTableHeaderRows(PinTableHeaderRowsRequest $pinTableHeaderRows)
  {
    $this->pinTableHeaderRows = $pinTableHeaderRows;
  }
  /**
   * @return PinTableHeaderRowsRequest
   */
  public function getPinTableHeaderRows()
  {
    return $this->pinTableHeaderRows;
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
   * @param ReplaceNamedRangeContentRequest
   */
  public function setReplaceNamedRangeContent(ReplaceNamedRangeContentRequest $replaceNamedRangeContent)
  {
    $this->replaceNamedRangeContent = $replaceNamedRangeContent;
  }
  /**
   * @return ReplaceNamedRangeContentRequest
   */
  public function getReplaceNamedRangeContent()
  {
    return $this->replaceNamedRangeContent;
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
   * @param UpdateDocumentStyleRequest
   */
  public function setUpdateDocumentStyle(UpdateDocumentStyleRequest $updateDocumentStyle)
  {
    $this->updateDocumentStyle = $updateDocumentStyle;
  }
  /**
   * @return UpdateDocumentStyleRequest
   */
  public function getUpdateDocumentStyle()
  {
    return $this->updateDocumentStyle;
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
   * @param UpdateSectionStyleRequest
   */
  public function setUpdateSectionStyle(UpdateSectionStyleRequest $updateSectionStyle)
  {
    $this->updateSectionStyle = $updateSectionStyle;
  }
  /**
   * @return UpdateSectionStyleRequest
   */
  public function getUpdateSectionStyle()
  {
    return $this->updateSectionStyle;
  }
  /**
   * @param UpdateTableCellStyleRequest
   */
  public function setUpdateTableCellStyle(UpdateTableCellStyleRequest $updateTableCellStyle)
  {
    $this->updateTableCellStyle = $updateTableCellStyle;
  }
  /**
   * @return UpdateTableCellStyleRequest
   */
  public function getUpdateTableCellStyle()
  {
    return $this->updateTableCellStyle;
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
   * @param UpdateTableRowStyleRequest
   */
  public function setUpdateTableRowStyle(UpdateTableRowStyleRequest $updateTableRowStyle)
  {
    $this->updateTableRowStyle = $updateTableRowStyle;
  }
  /**
   * @return UpdateTableRowStyleRequest
   */
  public function getUpdateTableRowStyle()
  {
    return $this->updateTableRowStyle;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Request::class, 'Google_Service_Docs_Request');
