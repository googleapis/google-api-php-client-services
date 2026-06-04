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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonPromotionBarcodeInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Aztec 2D barcode format. Max 350 characters and no links
   */
  public const TYPE_AZTEC = 'AZTEC';
  /**
   * CODABAR 1D format. Max 12 characters and no links. Supported characters
   * include 0123456789-$:/.+ and optional start and end guards from ABCD.
   */
  public const TYPE_CODABAR = 'CODABAR';
  /**
   * Code 39 1D format. Max 8 characters and no links. Supported characters
   * include 0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-. *$/+%.
   */
  public const TYPE_CODE39 = 'CODE39';
  /**
   * Code 128 1D format. Max 18 ASCII characters only and no links
   */
  public const TYPE_CODE128 = 'CODE128';
  /**
   * Data Matrix 2D barcode format. Max 525 ISO-8859-1 characters only and no
   * links
   */
  public const TYPE_DATA_MATRIX = 'DATA_MATRIX';
  /**
   * EAN-8 1D format. The barcode value should be 7 digits (the check digit will
   * be computed automatically) or 8 digits (if you are providing your own check
   * digit).
   */
  public const TYPE_EAN8 = 'EAN8';
  /**
   * EAN-13 1D format. The barcode value should be 12 digits (the check digit
   * will be computed automatically) or 13 digits (if you are providing your own
   * check digit).
   */
  public const TYPE_EAN13 = 'EAN13';
  /**
   * ITF (Interleaved Two of Five) 1D format. Must be 14 digits long
   */
  public const TYPE_ITF = 'ITF';
  /**
   * PDF417 format. Max 140 characters and no links
   */
  public const TYPE_PDF417 = 'PDF417';
  /**
   * UPC-A 1D format. The barcode value should be 11 digits (the check digit
   * will be computed automatically) or 12 digits (if you are providing your own
   * check digit).
   */
  public const TYPE_UPC_A = 'UPC_A';
  /**
   * Promotion message to be encoded in the barcode.
   *
   * @var string
   */
  public $barcodeContent;
  /**
   * Barcode type used to generate barcode with the correct format.
   *
   * @var string
   */
  public $type;

  /**
   * Promotion message to be encoded in the barcode.
   *
   * @param string $barcodeContent
   */
  public function setBarcodeContent($barcodeContent)
  {
    $this->barcodeContent = $barcodeContent;
  }
  /**
   * @return string
   */
  public function getBarcodeContent()
  {
    return $this->barcodeContent;
  }
  /**
   * Barcode type used to generate barcode with the correct format.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AZTEC, CODABAR, CODE39, CODE128,
   * DATA_MATRIX, EAN8, EAN13, ITF, PDF417, UPC_A
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPromotionBarcodeInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPromotionBarcodeInfo');
