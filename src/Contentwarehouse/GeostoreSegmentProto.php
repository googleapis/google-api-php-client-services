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

namespace Google\Service\Contentwarehouse;

class GeostoreSegmentProto extends \Google\Collection
{
  protected $collection_key = 'visibleLandmark';
  /**
   * @var GeostoreAppliedSpeedLimitProto[]
   */
  public $advisoryMaximumSpeed;
  protected $advisoryMaximumSpeedType = GeostoreAppliedSpeedLimitProto::class;
  protected $advisoryMaximumSpeedDataType = 'array';
  /**
   * @var float[]
   */
  public $altitude;
  /**
   * @var float
   */
  public $avgSpeedKph;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $avgSpeedKphMetadata;
  protected $avgSpeedKphMetadataType = GeostoreFieldMetadataProto::class;
  protected $avgSpeedKphMetadataDataType = '';
  /**
   * @var string
   */
  public $barrier;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $barrierMetadata;
  protected $barrierMetadataType = GeostoreFieldMetadataProto::class;
  protected $barrierMetadataDataType = '';
  /**
   * @var string
   */
  public $bicycleFacility;
  /**
   * @var string
   */
  public $bicycleSafety;
  /**
   * @var string
   */
  public $condition;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $conditionMetadata;
  protected $conditionMetadataType = GeostoreFieldMetadataProto::class;
  protected $conditionMetadataDataType = '';
  /**
   * @var GeostoreDateTimeProto
   */
  public $constructionBeginDate;
  protected $constructionBeginDateType = GeostoreDateTimeProto::class;
  protected $constructionBeginDateDataType = '';
  /**
   * @var GeostoreDateTimeProto
   */
  public $constructionEndDate;
  protected $constructionEndDateType = GeostoreDateTimeProto::class;
  protected $constructionEndDateDataType = '';
  /**
   * @var string
   */
  public $constructionStatus;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $constructionStatusMetadata;
  protected $constructionStatusMetadataType = GeostoreFieldMetadataProto::class;
  protected $constructionStatusMetadataDataType = '';
  /**
   * @var bool
   */
  public $covered;
  /**
   * @var float
   */
  public $distanceToEdge;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $distanceToEdgeMetadata;
  protected $distanceToEdgeMetadataType = GeostoreFieldMetadataProto::class;
  protected $distanceToEdgeMetadataDataType = '';
  /**
   * @var float
   */
  public $edgeFollowsSegmentBeginFraction;
  /**
   * @var float
   */
  public $edgeFollowsSegmentEndFraction;
  /**
   * @var string
   */
  public $elevation;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $elevationMetadata;
  protected $elevationMetadataType = GeostoreFieldMetadataProto::class;
  protected $elevationMetadataDataType = '';
  /**
   * @var string
   */
  public $endpoint;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $endpointMetadata;
  protected $endpointMetadataType = GeostoreFieldMetadataProto::class;
  protected $endpointMetadataDataType = '';
  /**
   * @var GeostoreGradeLevelProto[]
   */
  public $gradeLevel;
  protected $gradeLevelType = GeostoreGradeLevelProto::class;
  protected $gradeLevelDataType = 'array';
  /**
   * @var GeostoreInternalSegmentProto
   */
  public $internal;
  protected $internalType = GeostoreInternalSegmentProto::class;
  protected $internalDataType = '';
  /**
   * @var float
   */
  public $interpolationOffsetMeters;
  /**
   * @var GeostoreFeatureIdProto
   */
  public $intersection;
  protected $intersectionType = GeostoreFeatureIdProto::class;
  protected $intersectionDataType = '';
  /**
   * @var bool
   */
  public $isMaxPermittedSpeedDerived;
  /**
   * @var GeostoreLaneProto[]
   */
  public $lane;
  protected $laneType = GeostoreLaneProto::class;
  protected $laneDataType = 'array';
  /**
   * @var GeostoreAppliedSpeedLimitProto[]
   */
  public $legalMaximumSpeed;
  protected $legalMaximumSpeedType = GeostoreAppliedSpeedLimitProto::class;
  protected $legalMaximumSpeedDataType = 'array';
  /**
   * @var GeostoreAppliedSpeedLimitProto[]
   */
  public $legalMinimumSpeed;
  protected $legalMinimumSpeedType = GeostoreAppliedSpeedLimitProto::class;
  protected $legalMinimumSpeedDataType = 'array';
  /**
   * @var float
   */
  public $maxPermittedSpeedKph;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $maxPermittedSpeedKphMetadata;
  protected $maxPermittedSpeedKphMetadataType = GeostoreFieldMetadataProto::class;
  protected $maxPermittedSpeedKphMetadataDataType = '';
  /**
   * @var bool
   */
  public $onRight;
  /**
   * @var GeostorePedestrianCrossingProto
   */
  public $pedestrianCrossing;
  protected $pedestrianCrossingType = GeostorePedestrianCrossingProto::class;
  protected $pedestrianCrossingDataType = '';
  /**
   * @var string
   */
  public $pedestrianFacility;
  /**
   * @var string
   */
  public $pedestrianGrade;
  /**
   * @var string
   */
  public $priority;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $priorityMetadata;
  protected $priorityMetadataType = GeostoreFieldMetadataProto::class;
  protected $priorityMetadataDataType = '';
  /**
   * @var GeostoreSegmentProtoRampProto
   */
  public $ramp;
  protected $rampType = GeostoreSegmentProtoRampProto::class;
  protected $rampDataType = '';
  /**
   * @var GeostoreRestrictionProto[]
   */
  public $restriction;
  protected $restrictionType = GeostoreRestrictionProto::class;
  protected $restrictionDataType = 'array';
  /**
   * @var GeostoreFeatureIdProto[]
   */
  public $roadMonitor;
  protected $roadMonitorType = GeostoreFeatureIdProto::class;
  protected $roadMonitorDataType = 'array';
  /**
   * @var GeostoreFeatureIdProto[]
   */
  public $roadSign;
  protected $roadSignType = GeostoreFeatureIdProto::class;
  protected $roadSignDataType = 'array';
  /**
   * @var GeostoreFeatureIdProto[]
   */
  public $route;
  protected $routeType = GeostoreFeatureIdProto::class;
  protected $routeDataType = 'array';
  /**
   * @var GeostoreRouteAssociationProto[]
   */
  public $routeAssociation;
  protected $routeAssociationType = GeostoreRouteAssociationProto::class;
  protected $routeAssociationDataType = 'array';
  /**
   * @var bool
   */
  public $separatedRoadways;
  /**
   * @var GeostoreFeatureIdProto
   */
  public $sibling;
  protected $siblingType = GeostoreFeatureIdProto::class;
  protected $siblingDataType = '';
  /**
   * @var GeostoreSlopeProto[]
   */
  public $slope;
  protected $slopeType = GeostoreSlopeProto::class;
  protected $slopeDataType = 'array';
  /**
   * @var string
   */
  public $surface;
  /**
   * @var GeostoreFieldMetadataProto
   */
  public $surfaceMetadata;
  protected $surfaceMetadataType = GeostoreFieldMetadataProto::class;
  protected $surfaceMetadataDataType = '';
  /**
   * @var GeostoreSweepProto[]
   */
  public $sweep;
  protected $sweepType = GeostoreSweepProto::class;
  protected $sweepDataType = 'array';
  /**
   * @var bool
   */
  public $tollRoad;
  /**
   * @var string
   */
  public $usage;
  /**
   * @var GeostoreLandmarkReferenceProto[]
   */
  public $visibleLandmark;
  protected $visibleLandmarkType = GeostoreLandmarkReferenceProto::class;
  protected $visibleLandmarkDataType = 'array';

  /**
   * @param GeostoreAppliedSpeedLimitProto[]
   */
  public function setAdvisoryMaximumSpeed($advisoryMaximumSpeed)
  {
    $this->advisoryMaximumSpeed = $advisoryMaximumSpeed;
  }
  /**
   * @return GeostoreAppliedSpeedLimitProto[]
   */
  public function getAdvisoryMaximumSpeed()
  {
    return $this->advisoryMaximumSpeed;
  }
  /**
   * @param float[]
   */
  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }
  /**
   * @return float[]
   */
  public function getAltitude()
  {
    return $this->altitude;
  }
  /**
   * @param float
   */
  public function setAvgSpeedKph($avgSpeedKph)
  {
    $this->avgSpeedKph = $avgSpeedKph;
  }
  /**
   * @return float
   */
  public function getAvgSpeedKph()
  {
    return $this->avgSpeedKph;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setAvgSpeedKphMetadata(GeostoreFieldMetadataProto $avgSpeedKphMetadata)
  {
    $this->avgSpeedKphMetadata = $avgSpeedKphMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getAvgSpeedKphMetadata()
  {
    return $this->avgSpeedKphMetadata;
  }
  /**
   * @param string
   */
  public function setBarrier($barrier)
  {
    $this->barrier = $barrier;
  }
  /**
   * @return string
   */
  public function getBarrier()
  {
    return $this->barrier;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setBarrierMetadata(GeostoreFieldMetadataProto $barrierMetadata)
  {
    $this->barrierMetadata = $barrierMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getBarrierMetadata()
  {
    return $this->barrierMetadata;
  }
  /**
   * @param string
   */
  public function setBicycleFacility($bicycleFacility)
  {
    $this->bicycleFacility = $bicycleFacility;
  }
  /**
   * @return string
   */
  public function getBicycleFacility()
  {
    return $this->bicycleFacility;
  }
  /**
   * @param string
   */
  public function setBicycleSafety($bicycleSafety)
  {
    $this->bicycleSafety = $bicycleSafety;
  }
  /**
   * @return string
   */
  public function getBicycleSafety()
  {
    return $this->bicycleSafety;
  }
  /**
   * @param string
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return string
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setConditionMetadata(GeostoreFieldMetadataProto $conditionMetadata)
  {
    $this->conditionMetadata = $conditionMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getConditionMetadata()
  {
    return $this->conditionMetadata;
  }
  /**
   * @param GeostoreDateTimeProto
   */
  public function setConstructionBeginDate(GeostoreDateTimeProto $constructionBeginDate)
  {
    $this->constructionBeginDate = $constructionBeginDate;
  }
  /**
   * @return GeostoreDateTimeProto
   */
  public function getConstructionBeginDate()
  {
    return $this->constructionBeginDate;
  }
  /**
   * @param GeostoreDateTimeProto
   */
  public function setConstructionEndDate(GeostoreDateTimeProto $constructionEndDate)
  {
    $this->constructionEndDate = $constructionEndDate;
  }
  /**
   * @return GeostoreDateTimeProto
   */
  public function getConstructionEndDate()
  {
    return $this->constructionEndDate;
  }
  /**
   * @param string
   */
  public function setConstructionStatus($constructionStatus)
  {
    $this->constructionStatus = $constructionStatus;
  }
  /**
   * @return string
   */
  public function getConstructionStatus()
  {
    return $this->constructionStatus;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setConstructionStatusMetadata(GeostoreFieldMetadataProto $constructionStatusMetadata)
  {
    $this->constructionStatusMetadata = $constructionStatusMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getConstructionStatusMetadata()
  {
    return $this->constructionStatusMetadata;
  }
  /**
   * @param bool
   */
  public function setCovered($covered)
  {
    $this->covered = $covered;
  }
  /**
   * @return bool
   */
  public function getCovered()
  {
    return $this->covered;
  }
  /**
   * @param float
   */
  public function setDistanceToEdge($distanceToEdge)
  {
    $this->distanceToEdge = $distanceToEdge;
  }
  /**
   * @return float
   */
  public function getDistanceToEdge()
  {
    return $this->distanceToEdge;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setDistanceToEdgeMetadata(GeostoreFieldMetadataProto $distanceToEdgeMetadata)
  {
    $this->distanceToEdgeMetadata = $distanceToEdgeMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getDistanceToEdgeMetadata()
  {
    return $this->distanceToEdgeMetadata;
  }
  /**
   * @param float
   */
  public function setEdgeFollowsSegmentBeginFraction($edgeFollowsSegmentBeginFraction)
  {
    $this->edgeFollowsSegmentBeginFraction = $edgeFollowsSegmentBeginFraction;
  }
  /**
   * @return float
   */
  public function getEdgeFollowsSegmentBeginFraction()
  {
    return $this->edgeFollowsSegmentBeginFraction;
  }
  /**
   * @param float
   */
  public function setEdgeFollowsSegmentEndFraction($edgeFollowsSegmentEndFraction)
  {
    $this->edgeFollowsSegmentEndFraction = $edgeFollowsSegmentEndFraction;
  }
  /**
   * @return float
   */
  public function getEdgeFollowsSegmentEndFraction()
  {
    return $this->edgeFollowsSegmentEndFraction;
  }
  /**
   * @param string
   */
  public function setElevation($elevation)
  {
    $this->elevation = $elevation;
  }
  /**
   * @return string
   */
  public function getElevation()
  {
    return $this->elevation;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setElevationMetadata(GeostoreFieldMetadataProto $elevationMetadata)
  {
    $this->elevationMetadata = $elevationMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getElevationMetadata()
  {
    return $this->elevationMetadata;
  }
  /**
   * @param string
   */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /**
   * @return string
   */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setEndpointMetadata(GeostoreFieldMetadataProto $endpointMetadata)
  {
    $this->endpointMetadata = $endpointMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getEndpointMetadata()
  {
    return $this->endpointMetadata;
  }
  /**
   * @param GeostoreGradeLevelProto[]
   */
  public function setGradeLevel($gradeLevel)
  {
    $this->gradeLevel = $gradeLevel;
  }
  /**
   * @return GeostoreGradeLevelProto[]
   */
  public function getGradeLevel()
  {
    return $this->gradeLevel;
  }
  /**
   * @param GeostoreInternalSegmentProto
   */
  public function setInternal(GeostoreInternalSegmentProto $internal)
  {
    $this->internal = $internal;
  }
  /**
   * @return GeostoreInternalSegmentProto
   */
  public function getInternal()
  {
    return $this->internal;
  }
  /**
   * @param float
   */
  public function setInterpolationOffsetMeters($interpolationOffsetMeters)
  {
    $this->interpolationOffsetMeters = $interpolationOffsetMeters;
  }
  /**
   * @return float
   */
  public function getInterpolationOffsetMeters()
  {
    return $this->interpolationOffsetMeters;
  }
  /**
   * @param GeostoreFeatureIdProto
   */
  public function setIntersection(GeostoreFeatureIdProto $intersection)
  {
    $this->intersection = $intersection;
  }
  /**
   * @return GeostoreFeatureIdProto
   */
  public function getIntersection()
  {
    return $this->intersection;
  }
  /**
   * @param bool
   */
  public function setIsMaxPermittedSpeedDerived($isMaxPermittedSpeedDerived)
  {
    $this->isMaxPermittedSpeedDerived = $isMaxPermittedSpeedDerived;
  }
  /**
   * @return bool
   */
  public function getIsMaxPermittedSpeedDerived()
  {
    return $this->isMaxPermittedSpeedDerived;
  }
  /**
   * @param GeostoreLaneProto[]
   */
  public function setLane($lane)
  {
    $this->lane = $lane;
  }
  /**
   * @return GeostoreLaneProto[]
   */
  public function getLane()
  {
    return $this->lane;
  }
  /**
   * @param GeostoreAppliedSpeedLimitProto[]
   */
  public function setLegalMaximumSpeed($legalMaximumSpeed)
  {
    $this->legalMaximumSpeed = $legalMaximumSpeed;
  }
  /**
   * @return GeostoreAppliedSpeedLimitProto[]
   */
  public function getLegalMaximumSpeed()
  {
    return $this->legalMaximumSpeed;
  }
  /**
   * @param GeostoreAppliedSpeedLimitProto[]
   */
  public function setLegalMinimumSpeed($legalMinimumSpeed)
  {
    $this->legalMinimumSpeed = $legalMinimumSpeed;
  }
  /**
   * @return GeostoreAppliedSpeedLimitProto[]
   */
  public function getLegalMinimumSpeed()
  {
    return $this->legalMinimumSpeed;
  }
  /**
   * @param float
   */
  public function setMaxPermittedSpeedKph($maxPermittedSpeedKph)
  {
    $this->maxPermittedSpeedKph = $maxPermittedSpeedKph;
  }
  /**
   * @return float
   */
  public function getMaxPermittedSpeedKph()
  {
    return $this->maxPermittedSpeedKph;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setMaxPermittedSpeedKphMetadata(GeostoreFieldMetadataProto $maxPermittedSpeedKphMetadata)
  {
    $this->maxPermittedSpeedKphMetadata = $maxPermittedSpeedKphMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getMaxPermittedSpeedKphMetadata()
  {
    return $this->maxPermittedSpeedKphMetadata;
  }
  /**
   * @param bool
   */
  public function setOnRight($onRight)
  {
    $this->onRight = $onRight;
  }
  /**
   * @return bool
   */
  public function getOnRight()
  {
    return $this->onRight;
  }
  /**
   * @param GeostorePedestrianCrossingProto
   */
  public function setPedestrianCrossing(GeostorePedestrianCrossingProto $pedestrianCrossing)
  {
    $this->pedestrianCrossing = $pedestrianCrossing;
  }
  /**
   * @return GeostorePedestrianCrossingProto
   */
  public function getPedestrianCrossing()
  {
    return $this->pedestrianCrossing;
  }
  /**
   * @param string
   */
  public function setPedestrianFacility($pedestrianFacility)
  {
    $this->pedestrianFacility = $pedestrianFacility;
  }
  /**
   * @return string
   */
  public function getPedestrianFacility()
  {
    return $this->pedestrianFacility;
  }
  /**
   * @param string
   */
  public function setPedestrianGrade($pedestrianGrade)
  {
    $this->pedestrianGrade = $pedestrianGrade;
  }
  /**
   * @return string
   */
  public function getPedestrianGrade()
  {
    return $this->pedestrianGrade;
  }
  /**
   * @param string
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /**
   * @return string
   */
  public function getPriority()
  {
    return $this->priority;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setPriorityMetadata(GeostoreFieldMetadataProto $priorityMetadata)
  {
    $this->priorityMetadata = $priorityMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getPriorityMetadata()
  {
    return $this->priorityMetadata;
  }
  /**
   * @param GeostoreSegmentProtoRampProto
   */
  public function setRamp(GeostoreSegmentProtoRampProto $ramp)
  {
    $this->ramp = $ramp;
  }
  /**
   * @return GeostoreSegmentProtoRampProto
   */
  public function getRamp()
  {
    return $this->ramp;
  }
  /**
   * @param GeostoreRestrictionProto[]
   */
  public function setRestriction($restriction)
  {
    $this->restriction = $restriction;
  }
  /**
   * @return GeostoreRestrictionProto[]
   */
  public function getRestriction()
  {
    return $this->restriction;
  }
  /**
   * @param GeostoreFeatureIdProto[]
   */
  public function setRoadMonitor($roadMonitor)
  {
    $this->roadMonitor = $roadMonitor;
  }
  /**
   * @return GeostoreFeatureIdProto[]
   */
  public function getRoadMonitor()
  {
    return $this->roadMonitor;
  }
  /**
   * @param GeostoreFeatureIdProto[]
   */
  public function setRoadSign($roadSign)
  {
    $this->roadSign = $roadSign;
  }
  /**
   * @return GeostoreFeatureIdProto[]
   */
  public function getRoadSign()
  {
    return $this->roadSign;
  }
  /**
   * @param GeostoreFeatureIdProto[]
   */
  public function setRoute($route)
  {
    $this->route = $route;
  }
  /**
   * @return GeostoreFeatureIdProto[]
   */
  public function getRoute()
  {
    return $this->route;
  }
  /**
   * @param GeostoreRouteAssociationProto[]
   */
  public function setRouteAssociation($routeAssociation)
  {
    $this->routeAssociation = $routeAssociation;
  }
  /**
   * @return GeostoreRouteAssociationProto[]
   */
  public function getRouteAssociation()
  {
    return $this->routeAssociation;
  }
  /**
   * @param bool
   */
  public function setSeparatedRoadways($separatedRoadways)
  {
    $this->separatedRoadways = $separatedRoadways;
  }
  /**
   * @return bool
   */
  public function getSeparatedRoadways()
  {
    return $this->separatedRoadways;
  }
  /**
   * @param GeostoreFeatureIdProto
   */
  public function setSibling(GeostoreFeatureIdProto $sibling)
  {
    $this->sibling = $sibling;
  }
  /**
   * @return GeostoreFeatureIdProto
   */
  public function getSibling()
  {
    return $this->sibling;
  }
  /**
   * @param GeostoreSlopeProto[]
   */
  public function setSlope($slope)
  {
    $this->slope = $slope;
  }
  /**
   * @return GeostoreSlopeProto[]
   */
  public function getSlope()
  {
    return $this->slope;
  }
  /**
   * @param string
   */
  public function setSurface($surface)
  {
    $this->surface = $surface;
  }
  /**
   * @return string
   */
  public function getSurface()
  {
    return $this->surface;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setSurfaceMetadata(GeostoreFieldMetadataProto $surfaceMetadata)
  {
    $this->surfaceMetadata = $surfaceMetadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getSurfaceMetadata()
  {
    return $this->surfaceMetadata;
  }
  /**
   * @param GeostoreSweepProto[]
   */
  public function setSweep($sweep)
  {
    $this->sweep = $sweep;
  }
  /**
   * @return GeostoreSweepProto[]
   */
  public function getSweep()
  {
    return $this->sweep;
  }
  /**
   * @param bool
   */
  public function setTollRoad($tollRoad)
  {
    $this->tollRoad = $tollRoad;
  }
  /**
   * @return bool
   */
  public function getTollRoad()
  {
    return $this->tollRoad;
  }
  /**
   * @param string
   */
  public function setUsage($usage)
  {
    $this->usage = $usage;
  }
  /**
   * @return string
   */
  public function getUsage()
  {
    return $this->usage;
  }
  /**
   * @param GeostoreLandmarkReferenceProto[]
   */
  public function setVisibleLandmark($visibleLandmark)
  {
    $this->visibleLandmark = $visibleLandmark;
  }
  /**
   * @return GeostoreLandmarkReferenceProto[]
   */
  public function getVisibleLandmark()
  {
    return $this->visibleLandmark;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeostoreSegmentProto::class, 'Google_Service_Contentwarehouse_GeostoreSegmentProto');
