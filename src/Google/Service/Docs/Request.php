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

class Google_Service_Docs_Request extends Google_Model
{
  protected $createNamedRangeType = 'Google_Service_Docs_CreateNamedRangeRequest';
  protected $createNamedRangeDataType = '';
  protected $createParagraphBulletsType = 'Google_Service_Docs_CreateParagraphBulletsRequest';
  protected $createParagraphBulletsDataType = '';
  protected $deleteContentRangeType = 'Google_Service_Docs_DeleteContentRangeRequest';
  protected $deleteContentRangeDataType = '';
  protected $deleteNamedRangeType = 'Google_Service_Docs_DeleteNamedRangeRequest';
  protected $deleteNamedRangeDataType = '';
  protected $deleteParagraphBulletsType = 'Google_Service_Docs_DeleteParagraphBulletsRequest';
  protected $deleteParagraphBulletsDataType = '';
  protected $deletePositionedObjectType = 'Google_Service_Docs_DeletePositionedObjectRequest';
  protected $deletePositionedObjectDataType = '';
  protected $deleteTableColumnType = 'Google_Service_Docs_DeleteTableColumnRequest';
  protected $deleteTableColumnDataType = '';
  protected $deleteTableRowType = 'Google_Service_Docs_DeleteTableRowRequest';
  protected $deleteTableRowDataType = '';
  protected $insertInlineImageType = 'Google_Service_Docs_InsertInlineImageRequest';
  protected $insertInlineImageDataType = '';
  protected $insertTableRowType = 'Google_Service_Docs_InsertTableRowRequest';
  protected $insertTableRowDataType = '';
  protected $insertTextType = 'Google_Service_Docs_InsertTextRequest';
  protected $insertTextDataType = '';
  protected $replaceAllTextType = 'Google_Service_Docs_ReplaceAllTextRequest';
  protected $replaceAllTextDataType = '';
  protected $updateParagraphStyleType = 'Google_Service_Docs_UpdateParagraphStyleRequest';
  protected $updateParagraphStyleDataType = '';
  protected $updateTextStyleType = 'Google_Service_Docs_UpdateTextStyleRequest';
  protected $updateTextStyleDataType = '';

  /**
   * @param Google_Service_Docs_CreateNamedRangeRequest
   */
  public function setCreateNamedRange(Google_Service_Docs_CreateNamedRangeRequest $createNamedRange)
  {
    $this->createNamedRange = $createNamedRange;
  }
  /**
   * @return Google_Service_Docs_CreateNamedRangeRequest
   */
  public function getCreateNamedRange()
  {
    return $this->createNamedRange;
  }
  /**
   * @param Google_Service_Docs_CreateParagraphBulletsRequest
   */
  public function setCreateParagraphBullets(Google_Service_Docs_CreateParagraphBulletsRequest $createParagraphBullets)
  {
    $this->createParagraphBullets = $createParagraphBullets;
  }
  /**
   * @return Google_Service_Docs_CreateParagraphBulletsRequest
   */
  public function getCreateParagraphBullets()
  {
    return $this->createParagraphBullets;
  }
  /**
   * @param Google_Service_Docs_DeleteContentRangeRequest
   */
  public function setDeleteContentRange(Google_Service_Docs_DeleteContentRangeRequest $deleteContentRange)
  {
    $this->deleteContentRange = $deleteContentRange;
  }
  /**
   * @return Google_Service_Docs_DeleteContentRangeRequest
   */
  public function getDeleteContentRange()
  {
    return $this->deleteContentRange;
  }
  /**
   * @param Google_Service_Docs_DeleteNamedRangeRequest
   */
  public function setDeleteNamedRange(Google_Service_Docs_DeleteNamedRangeRequest $deleteNamedRange)
  {
    $this->deleteNamedRange = $deleteNamedRange;
  }
  /**
   * @return Google_Service_Docs_DeleteNamedRangeRequest
   */
  public function getDeleteNamedRange()
  {
    return $this->deleteNamedRange;
  }
  /**
   * @param Google_Service_Docs_DeleteParagraphBulletsRequest
   */
  public function setDeleteParagraphBullets(Google_Service_Docs_DeleteParagraphBulletsRequest $deleteParagraphBullets)
  {
    $this->deleteParagraphBullets = $deleteParagraphBullets;
  }
  /**
   * @return Google_Service_Docs_DeleteParagraphBulletsRequest
   */
  public function getDeleteParagraphBullets()
  {
    return $this->deleteParagraphBullets;
  }
  /**
   * @param Google_Service_Docs_DeletePositionedObjectRequest
   */
  public function setDeletePositionedObject(Google_Service_Docs_DeletePositionedObjectRequest $deletePositionedObject)
  {
    $this->deletePositionedObject = $deletePositionedObject;
  }
  /**
   * @return Google_Service_Docs_DeletePositionedObjectRequest
   */
  public function getDeletePositionedObject()
  {
    return $this->deletePositionedObject;
  }
  /**
   * @param Google_Service_Docs_DeleteTableColumnRequest
   */
  public function setDeleteTableColumn(Google_Service_Docs_DeleteTableColumnRequest $deleteTableColumn)
  {
    $this->deleteTableColumn = $deleteTableColumn;
  }
  /**
   * @return Google_Service_Docs_DeleteTableColumnRequest
   */
  public function getDeleteTableColumn()
  {
    return $this->deleteTableColumn;
  }
  /**
   * @param Google_Service_Docs_DeleteTableRowRequest
   */
  public function setDeleteTableRow(Google_Service_Docs_DeleteTableRowRequest $deleteTableRow)
  {
    $this->deleteTableRow = $deleteTableRow;
  }
  /**
   * @return Google_Service_Docs_DeleteTableRowRequest
   */
  public function getDeleteTableRow()
  {
    return $this->deleteTableRow;
  }
  /**
   * @param Google_Service_Docs_InsertInlineImageRequest
   */
  public function setInsertInlineImage(Google_Service_Docs_InsertInlineImageRequest $insertInlineImage)
  {
    $this->insertInlineImage = $insertInlineImage;
  }
  /**
   * @return Google_Service_Docs_InsertInlineImageRequest
   */
  public function getInsertInlineImage()
  {
    return $this->insertInlineImage;
  }
  /**
   * @param Google_Service_Docs_InsertTableRowRequest
   */
  public function setInsertTableRow(Google_Service_Docs_InsertTableRowRequest $insertTableRow)
  {
    $this->insertTableRow = $insertTableRow;
  }
  /**
   * @return Google_Service_Docs_InsertTableRowRequest
   */
  public function getInsertTableRow()
  {
    return $this->insertTableRow;
  }
  /**
   * @param Google_Service_Docs_InsertTextRequest
   */
  public function setInsertText(Google_Service_Docs_InsertTextRequest $insertText)
  {
    $this->insertText = $insertText;
  }
  /**
   * @return Google_Service_Docs_InsertTextRequest
   */
  public function getInsertText()
  {
    return $this->insertText;
  }
  /**
   * @param Google_Service_Docs_ReplaceAllTextRequest
   */
  public function setReplaceAllText(Google_Service_Docs_ReplaceAllTextRequest $replaceAllText)
  {
    $this->replaceAllText = $replaceAllText;
  }
  /**
   * @return Google_Service_Docs_ReplaceAllTextRequest
   */
  public function getReplaceAllText()
  {
    return $this->replaceAllText;
  }
  /**
   * @param Google_Service_Docs_UpdateParagraphStyleRequest
   */
  public function setUpdateParagraphStyle(Google_Service_Docs_UpdateParagraphStyleRequest $updateParagraphStyle)
  {
    $this->updateParagraphStyle = $updateParagraphStyle;
  }
  /**
   * @return Google_Service_Docs_UpdateParagraphStyleRequest
   */
  public function getUpdateParagraphStyle()
  {
    return $this->updateParagraphStyle;
  }
  /**
   * @param Google_Service_Docs_UpdateTextStyleRequest
   */
  public function setUpdateTextStyle(Google_Service_Docs_UpdateTextStyleRequest $updateTextStyle)
  {
    $this->updateTextStyle = $updateTextStyle;
  }
  /**
   * @return Google_Service_Docs_UpdateTextStyleRequest
   */
  public function getUpdateTextStyle()
  {
    return $this->updateTextStyle;
  }
}
