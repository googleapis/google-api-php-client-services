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

namespace Google\Service\TravelImpactModel;

class EmissionsProvenanceEntry extends \Google\Model
{
  /**
   * Strategy unspecified.
   */
  public const CARGO_MASS_FRACTION_T100_STRATEGY_STRATEGY_UNSPECIFIED = 'STRATEGY_UNSPECIFIED';
  /**
   * Data by carrier, route, and aircraft class.
   */
  public const CARGO_MASS_FRACTION_T100_STRATEGY_CARRIER_ROUTE_AIRCRAFT_CLASS = 'CARRIER_ROUTE_AIRCRAFT_CLASS';
  /**
   * Data by route and aircraft class.
   */
  public const CARGO_MASS_FRACTION_T100_STRATEGY_ROUTE_AIRCRAFT_CLASS = 'ROUTE_AIRCRAFT_CLASS';
  /**
   * Data by distance band and aircraft class.
   */
  public const CARGO_MASS_FRACTION_T100_STRATEGY_DISTANCE_AIRCRAFT_CLASS = 'DISTANCE_AIRCRAFT_CLASS';
  /**
   * Historical data matching carrier, route, year, month, and aircraft class.
   */
  public const CARGO_MASS_FRACTION_T100_STRATEGY_ACTUAL_CARRIER_ROUTE_YEAR_MONTH_AIRCRAFT_CLASS = 'ACTUAL_CARRIER_ROUTE_YEAR_MONTH_AIRCRAFT_CLASS';
  /**
   * Data category unspecified.
   */
  public const DATA_CATEGORY_DATA_CATEGORY_UNSPECIFIED = 'DATA_CATEGORY_UNSPECIFIED';
  /**
   * Primary data, as defined in ISO 14083.
   */
  public const DATA_CATEGORY_PRIMARY = 'PRIMARY';
  /**
   * Modeled data, as defined in ISO 14083.
   */
  public const DATA_CATEGORY_MODELED = 'MODELED';
  /**
   * Default value data, as defined in ISO 14083.
   */
  public const DATA_CATEGORY_DEFAULT = 'DEFAULT';
  /**
   * Strategy unspecified.
   */
  public const DISTANCE_ADJUSTMENT_STRATEGY_STRATEGY_UNSPECIFIED = 'STRATEGY_UNSPECIFIED';
  /**
   * Distance adjustment factor determined by origin and destination airport
   * pair.
   */
  public const DISTANCE_ADJUSTMENT_STRATEGY_ORIGIN_DESTINATION = 'ORIGIN_DESTINATION';
  /**
   * Distance adjustment factor determined by origin and destination country
   * pair.
   */
  public const DISTANCE_ADJUSTMENT_STRATEGY_COUNTRY_PAIR = 'COUNTRY_PAIR';
  /**
   * The distance adjustment factor is based on the default value because we did
   * not find an airport- or country-specific adjustment factor.
   */
  public const DISTANCE_ADJUSTMENT_STRATEGY_DEFAULT = 'DEFAULT';
  /**
   * Strategy unspecified.
   */
  public const FUEL_BURN_EEA_STRATEGY_STRATEGY_UNSPECIFIED = 'STRATEGY_UNSPECIFIED';
  /**
   * A static correction factor was applied.
   */
  public const FUEL_BURN_EEA_STRATEGY_AIRCRAFT_MAPPING_FALLBACK_WITH_CORRECTION_FACTOR = 'AIRCRAFT_MAPPING_FALLBACK_WITH_CORRECTION_FACTOR';
  /**
   * Exact aircraft mapping was used.
   */
  public const FUEL_BURN_EEA_STRATEGY_AIRCRAFT_MAPPING_EXACT = 'AIRCRAFT_MAPPING_EXACT';
  /**
   * Fallback aircraft mapping was used.
   */
  public const FUEL_BURN_EEA_STRATEGY_AIRCRAFT_MAPPING_FALLBACK = 'AIRCRAFT_MAPPING_FALLBACK';
  /**
   * Strategy unspecified.
   */
  public const LOAD_FACTORS_CH_AVIATION_STRATEGY_STRATEGY_UNSPECIFIED = 'STRATEGY_UNSPECIFIED';
  /**
   * Data by carrier and month of travel.
   */
  public const LOAD_FACTORS_CH_AVIATION_STRATEGY_CARRIER_MONTH = 'CARRIER_MONTH';
  /**
   * Historical data matching carrier, year, and month.
   */
  public const LOAD_FACTORS_CH_AVIATION_STRATEGY_ACTUAL_CARRIER_YEAR_MONTH = 'ACTUAL_CARRIER_YEAR_MONTH';
  /**
   * Strategy unspecified.
   */
  public const LOAD_FACTORS_T100_STRATEGY_STRATEGY_UNSPECIFIED = 'STRATEGY_UNSPECIFIED';
  /**
   * Data by carrier, route, and month of travel.
   */
  public const LOAD_FACTORS_T100_STRATEGY_CARRIER_ROUTE_MONTH = 'CARRIER_ROUTE_MONTH';
  /**
   * Data by carrier and month of travel.
   */
  public const LOAD_FACTORS_T100_STRATEGY_CARRIER_MONTH = 'CARRIER_MONTH';
  /**
   * Historical data matching carrier, route, year, and month.
   */
  public const LOAD_FACTORS_T100_STRATEGY_ACTUAL_CARRIER_ROUTE_YEAR_MONTH = 'ACTUAL_CARRIER_ROUTE_YEAR_MONTH';
  /**
   * Unspecified provenance entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_EMISSIONS_PROVENANCE_ENTRY_TYPE_UNSPECIFIED = 'EMISSIONS_PROVENANCE_ENTRY_TYPE_UNSPECIFIED';
  /**
   * Fuel burn entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_FUEL_BURN = 'FUEL_BURN';
  /**
   * Load factors entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_LOAD_FACTORS = 'LOAD_FACTORS';
  /**
   * Cargo mass fraction entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_CARGO_MASS_FRACTION = 'CARGO_MASS_FRACTION';
  /**
   * Seating configuration entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_SEATING_CONFIG = 'SEATING_CONFIG';
  /**
   * Seat area ratios entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_SEAT_AREA_RATIOS = 'SEAT_AREA_RATIOS';
  /**
   * Distance adjustment entry type.
   */
  public const PROVENANCE_ENTRY_TYPE_DISTANCE_ADJUSTMENT = 'DISTANCE_ADJUSTMENT';
  /**
   * Strategy unspecified.
   */
  public const SEAT_AREA_RATIO_IATA_STRATEGY_STRATEGY_UNSPECIFIED = 'STRATEGY_UNSPECIFIED';
  /**
   * Seat area ratios for narrow body aircraft were used.
   */
  public const SEAT_AREA_RATIO_IATA_STRATEGY_NARROW_AIRCRAFT_BODY = 'NARROW_AIRCRAFT_BODY';
  /**
   * Seat area ratios for wide body aircraft were used.
   */
  public const SEAT_AREA_RATIO_IATA_STRATEGY_WIDE_AIRCRAFT_BODY = 'WIDE_AIRCRAFT_BODY';
  /**
   * Data source unspecified.
   */
  public const SOURCE_DATA_SOURCE_UNSPECIFIED = 'DATA_SOURCE_UNSPECIFIED';
  /**
   * Data provided by the European Environment Agency (EEA).
   */
  public const SOURCE_EEA = 'EEA';
  /**
   * Data from the T-100 dataset, provided by the US Bureau of Transportation
   * Statistics.
   */
  public const SOURCE_T100 = 'T100';
  /**
   * Data provided by ch-aviation.
   */
  public const SOURCE_CH_AVIATION = 'CH_AVIATION';
  /**
   * Data provided by the Official Aviation Guide (OAG).
   */
  public const SOURCE_OAG = 'OAG';
  /**
   * Data provided by the operating carrier.
   */
  public const SOURCE_OPERATING_CARRIER = 'OPERATING_CARRIER';
  /**
   * Typical data based on the aircraft model.
   */
  public const SOURCE_AIRCRAFT_MODEL_TYPICAL = 'AIRCRAFT_MODEL_TYPICAL';
  /**
   * A global default value, used when no other data source is available.
   */
  public const SOURCE_GLOBAL_DEFAULT = 'GLOBAL_DEFAULT';
  /**
   * Data provided by the International Air Transport Association (IATA).
   */
  public const SOURCE_IATA = 'IATA';
  /**
   * Data provided by Imperial College London.
   */
  public const SOURCE_ICL = 'ICL';
  /**
   * Output only. The cargo mass fraction value. If not set, the cargo mass
   * fraction value is not available.
   *
   * @var 
   */
  public $cargoMassFractionData;
  /**
   * Output only. Strategy for T100 cargo mass fraction.
   *
   * @var string
   */
  public $cargoMassFractionT100Strategy;
  /**
   * Output only. Data category of the data source.
   *
   * @var string
   */
  public $dataCategory;
  /**
   * Output only. Strategy for distance adjustment.
   *
   * @var string
   */
  public $distanceAdjustmentStrategy;
  /**
   * Output only. The estimated distance flown in CCD flight phase in kilometers
   * value calculated using the distance adjustment factor (DAF). If not set,
   * the estimated flight distance value is not available.
   *
   * @var int
   */
  public $estimatedFlightDistanceKm;
  /**
   * Output only. Strategy for EEA fuel burn.
   *
   * @var string
   */
  public $fuelBurnEeaStrategy;
  /**
   * Output only. Strategy for CH Aviation load factors.
   *
   * @var string
   */
  public $loadFactorsChAviationStrategy;
  /**
   * Output only. The load factors data value. If not set, the load factors
   * value is not available.
   *
   * @var 
   */
  public $loadFactorsData;
  /**
   * Output only. Strategy for T100 load factors.
   *
   * @var string
   */
  public $loadFactorsT100Strategy;
  /**
   * Output only. The type of the provenance entry.
   *
   * @var string
   */
  public $provenanceEntryType;
  protected $seatAreaRatioDataType = SeatAreaRatioData::class;
  protected $seatAreaRatioDataDataType = '';
  /**
   * Output only. Strategy for IATA seat area ratios.
   *
   * @var string
   */
  public $seatAreaRatioIataStrategy;
  /**
   * Output only. The source of the data.
   *
   * @var string
   */
  public $source;
  /**
   * Output only. The version of the source data. For example, "2025/04".
   *
   * @var string
   */
  public $sourceVersion;

  public function setCargoMassFractionData($cargoMassFractionData)
  {
    $this->cargoMassFractionData = $cargoMassFractionData;
  }
  public function getCargoMassFractionData()
  {
    return $this->cargoMassFractionData;
  }
  /**
   * Output only. Strategy for T100 cargo mass fraction.
   *
   * Accepted values: STRATEGY_UNSPECIFIED, CARRIER_ROUTE_AIRCRAFT_CLASS,
   * ROUTE_AIRCRAFT_CLASS, DISTANCE_AIRCRAFT_CLASS,
   * ACTUAL_CARRIER_ROUTE_YEAR_MONTH_AIRCRAFT_CLASS
   *
   * @param self::CARGO_MASS_FRACTION_T100_STRATEGY_* $cargoMassFractionT100Strategy
   */
  public function setCargoMassFractionT100Strategy($cargoMassFractionT100Strategy)
  {
    $this->cargoMassFractionT100Strategy = $cargoMassFractionT100Strategy;
  }
  /**
   * @return self::CARGO_MASS_FRACTION_T100_STRATEGY_*
   */
  public function getCargoMassFractionT100Strategy()
  {
    return $this->cargoMassFractionT100Strategy;
  }
  /**
   * Output only. Data category of the data source.
   *
   * Accepted values: DATA_CATEGORY_UNSPECIFIED, PRIMARY, MODELED, DEFAULT
   *
   * @param self::DATA_CATEGORY_* $dataCategory
   */
  public function setDataCategory($dataCategory)
  {
    $this->dataCategory = $dataCategory;
  }
  /**
   * @return self::DATA_CATEGORY_*
   */
  public function getDataCategory()
  {
    return $this->dataCategory;
  }
  /**
   * Output only. Strategy for distance adjustment.
   *
   * Accepted values: STRATEGY_UNSPECIFIED, ORIGIN_DESTINATION, COUNTRY_PAIR,
   * DEFAULT
   *
   * @param self::DISTANCE_ADJUSTMENT_STRATEGY_* $distanceAdjustmentStrategy
   */
  public function setDistanceAdjustmentStrategy($distanceAdjustmentStrategy)
  {
    $this->distanceAdjustmentStrategy = $distanceAdjustmentStrategy;
  }
  /**
   * @return self::DISTANCE_ADJUSTMENT_STRATEGY_*
   */
  public function getDistanceAdjustmentStrategy()
  {
    return $this->distanceAdjustmentStrategy;
  }
  /**
   * Output only. The estimated distance flown in CCD flight phase in kilometers
   * value calculated using the distance adjustment factor (DAF). If not set,
   * the estimated flight distance value is not available.
   *
   * @param int $estimatedFlightDistanceKm
   */
  public function setEstimatedFlightDistanceKm($estimatedFlightDistanceKm)
  {
    $this->estimatedFlightDistanceKm = $estimatedFlightDistanceKm;
  }
  /**
   * @return int
   */
  public function getEstimatedFlightDistanceKm()
  {
    return $this->estimatedFlightDistanceKm;
  }
  /**
   * Output only. Strategy for EEA fuel burn.
   *
   * Accepted values: STRATEGY_UNSPECIFIED,
   * AIRCRAFT_MAPPING_FALLBACK_WITH_CORRECTION_FACTOR, AIRCRAFT_MAPPING_EXACT,
   * AIRCRAFT_MAPPING_FALLBACK
   *
   * @param self::FUEL_BURN_EEA_STRATEGY_* $fuelBurnEeaStrategy
   */
  public function setFuelBurnEeaStrategy($fuelBurnEeaStrategy)
  {
    $this->fuelBurnEeaStrategy = $fuelBurnEeaStrategy;
  }
  /**
   * @return self::FUEL_BURN_EEA_STRATEGY_*
   */
  public function getFuelBurnEeaStrategy()
  {
    return $this->fuelBurnEeaStrategy;
  }
  /**
   * Output only. Strategy for CH Aviation load factors.
   *
   * Accepted values: STRATEGY_UNSPECIFIED, CARRIER_MONTH,
   * ACTUAL_CARRIER_YEAR_MONTH
   *
   * @param self::LOAD_FACTORS_CH_AVIATION_STRATEGY_* $loadFactorsChAviationStrategy
   */
  public function setLoadFactorsChAviationStrategy($loadFactorsChAviationStrategy)
  {
    $this->loadFactorsChAviationStrategy = $loadFactorsChAviationStrategy;
  }
  /**
   * @return self::LOAD_FACTORS_CH_AVIATION_STRATEGY_*
   */
  public function getLoadFactorsChAviationStrategy()
  {
    return $this->loadFactorsChAviationStrategy;
  }
  public function setLoadFactorsData($loadFactorsData)
  {
    $this->loadFactorsData = $loadFactorsData;
  }
  public function getLoadFactorsData()
  {
    return $this->loadFactorsData;
  }
  /**
   * Output only. Strategy for T100 load factors.
   *
   * Accepted values: STRATEGY_UNSPECIFIED, CARRIER_ROUTE_MONTH, CARRIER_MONTH,
   * ACTUAL_CARRIER_ROUTE_YEAR_MONTH
   *
   * @param self::LOAD_FACTORS_T100_STRATEGY_* $loadFactorsT100Strategy
   */
  public function setLoadFactorsT100Strategy($loadFactorsT100Strategy)
  {
    $this->loadFactorsT100Strategy = $loadFactorsT100Strategy;
  }
  /**
   * @return self::LOAD_FACTORS_T100_STRATEGY_*
   */
  public function getLoadFactorsT100Strategy()
  {
    return $this->loadFactorsT100Strategy;
  }
  /**
   * Output only. The type of the provenance entry.
   *
   * Accepted values: EMISSIONS_PROVENANCE_ENTRY_TYPE_UNSPECIFIED, FUEL_BURN,
   * LOAD_FACTORS, CARGO_MASS_FRACTION, SEATING_CONFIG, SEAT_AREA_RATIOS,
   * DISTANCE_ADJUSTMENT
   *
   * @param self::PROVENANCE_ENTRY_TYPE_* $provenanceEntryType
   */
  public function setProvenanceEntryType($provenanceEntryType)
  {
    $this->provenanceEntryType = $provenanceEntryType;
  }
  /**
   * @return self::PROVENANCE_ENTRY_TYPE_*
   */
  public function getProvenanceEntryType()
  {
    return $this->provenanceEntryType;
  }
  /**
   * Output only. The seat area ratio value for each seating class. If not set,
   * the seat area ratio value is not available.
   *
   * @param SeatAreaRatioData $seatAreaRatioData
   */
  public function setSeatAreaRatioData(SeatAreaRatioData $seatAreaRatioData)
  {
    $this->seatAreaRatioData = $seatAreaRatioData;
  }
  /**
   * @return SeatAreaRatioData
   */
  public function getSeatAreaRatioData()
  {
    return $this->seatAreaRatioData;
  }
  /**
   * Output only. Strategy for IATA seat area ratios.
   *
   * Accepted values: STRATEGY_UNSPECIFIED, NARROW_AIRCRAFT_BODY,
   * WIDE_AIRCRAFT_BODY
   *
   * @param self::SEAT_AREA_RATIO_IATA_STRATEGY_* $seatAreaRatioIataStrategy
   */
  public function setSeatAreaRatioIataStrategy($seatAreaRatioIataStrategy)
  {
    $this->seatAreaRatioIataStrategy = $seatAreaRatioIataStrategy;
  }
  /**
   * @return self::SEAT_AREA_RATIO_IATA_STRATEGY_*
   */
  public function getSeatAreaRatioIataStrategy()
  {
    return $this->seatAreaRatioIataStrategy;
  }
  /**
   * Output only. The source of the data.
   *
   * Accepted values: DATA_SOURCE_UNSPECIFIED, EEA, T100, CH_AVIATION, OAG,
   * OPERATING_CARRIER, AIRCRAFT_MODEL_TYPICAL, GLOBAL_DEFAULT, IATA, ICL
   *
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. The version of the source data. For example, "2025/04".
   *
   * @param string $sourceVersion
   */
  public function setSourceVersion($sourceVersion)
  {
    $this->sourceVersion = $sourceVersion;
  }
  /**
   * @return string
   */
  public function getSourceVersion()
  {
    return $this->sourceVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EmissionsProvenanceEntry::class, 'Google_Service_TravelImpactModel_EmissionsProvenanceEntry');
