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

namespace Google\Service\GoogleHealthAPI;

class Exercise extends \Google\Collection
{
  /**
   * Exercise type is unspecified.
   */
  public const EXERCISE_TYPE_EXERCISE_TYPE_UNSPECIFIED = 'EXERCISE_TYPE_UNSPECIFIED';
  /**
   * Aerobic workout type.
   */
  public const EXERCISE_TYPE_AEROBIC_WORKOUT = 'AEROBIC_WORKOUT';
  /**
   * Archery type.
   */
  public const EXERCISE_TYPE_ARCHERY = 'ARCHERY';
  /**
   * Assault bike type.
   */
  public const EXERCISE_TYPE_ASSAULT_BIKE = 'ASSAULT_BIKE';
  /**
   * Backpacking type.
   */
  public const EXERCISE_TYPE_BACKPACKING = 'BACKPACKING';
  /**
   * Badminton type.
   */
  public const EXERCISE_TYPE_BADMINTON = 'BADMINTON';
  /**
   * Ballet type.
   */
  public const EXERCISE_TYPE_BALLET = 'BALLET';
  /**
   * Ballroom dance type.
   */
  public const EXERCISE_TYPE_BALLROOM_DANCE = 'BALLROOM_DANCE';
  /**
   * Barre class type.
   */
  public const EXERCISE_TYPE_BARRE_CLASS = 'BARRE_CLASS';
  /**
   * Baseball type.
   */
  public const EXERCISE_TYPE_BASEBALL = 'BASEBALL';
  /**
   * Basketball type.
   */
  public const EXERCISE_TYPE_BASKETBALL = 'BASKETBALL';
  /**
   * Biking type.
   */
  public const EXERCISE_TYPE_BIKING = 'BIKING';
  /**
   * Billiards type.
   */
  public const EXERCISE_TYPE_BILLIARDS = 'BILLIARDS';
  /**
   * Body weight type.
   */
  public const EXERCISE_TYPE_BODY_WEIGHT = 'BODY_WEIGHT';
  /**
   * Bootcamp type.
   */
  public const EXERCISE_TYPE_BOOTCAMP = 'BOOTCAMP';
  /**
   * Bowling type.
   */
  public const EXERCISE_TYPE_BOWLING = 'BOWLING';
  /**
   * Boxing type.
   */
  public const EXERCISE_TYPE_BOXING = 'BOXING';
  /**
   * Breakdancing type.
   */
  public const EXERCISE_TYPE_BREAKDANCING = 'BREAKDANCING';
  /**
   * Calisthenics type.
   */
  public const EXERCISE_TYPE_CALISTHENICS = 'CALISTHENICS';
  /**
   * Canoeing type.
   */
  public const EXERCISE_TYPE_CANOEING = 'CANOEING';
  /**
   * Cardio sculpt type.
   */
  public const EXERCISE_TYPE_CARDIO_SCULPT = 'CARDIO_SCULPT';
  /**
   * Cardio workout type.
   */
  public const EXERCISE_TYPE_CARDIO_WORKOUT = 'CARDIO_WORKOUT';
  /**
   * Carpentry type.
   */
  public const EXERCISE_TYPE_CARPENTRY = 'CARPENTRY';
  /**
   * Cheerleading type.
   */
  public const EXERCISE_TYPE_CHEERLEADING = 'CHEERLEADING';
  /**
   * Circuit training type.
   */
  public const EXERCISE_TYPE_CIRCUIT_TRAINING = 'CIRCUIT_TRAINING';
  /**
   * Cleaning type.
   */
  public const EXERCISE_TYPE_CLEANING = 'CLEANING';
  /**
   * Climbing type.
   */
  public const EXERCISE_TYPE_CLIMBING = 'CLIMBING';
  /**
   * Core training type.
   */
  public const EXERCISE_TYPE_CORE_TRAINING = 'CORE_TRAINING';
  /**
   * Cricket type.
   */
  public const EXERCISE_TYPE_CRICKET = 'CRICKET';
  /**
   * Croquet type.
   */
  public const EXERCISE_TYPE_CROQUET = 'CROQUET';
  /**
   * Cross country ski type.
   */
  public const EXERCISE_TYPE_CROSS_COUNTRY_SKI = 'CROSS_COUNTRY_SKI';
  /**
   * Cross training type.
   */
  public const EXERCISE_TYPE_CROSS_TRAINING = 'CROSS_TRAINING';
  /**
   * Crossfit type.
   */
  public const EXERCISE_TYPE_CROSSFIT = 'CROSSFIT';
  /**
   * Curling type.
   */
  public const EXERCISE_TYPE_CURLING = 'CURLING';
  /**
   * Dancing type.
   */
  public const EXERCISE_TYPE_DANCING = 'DANCING';
  /**
   * Diving type.
   */
  public const EXERCISE_TYPE_DIVING = 'DIVING';
  /**
   * Electric bike type.
   */
  public const EXERCISE_TYPE_ELECTRIC_BIKE = 'ELECTRIC_BIKE';
  /**
   * Electric scooter type.
   */
  public const EXERCISE_TYPE_ELECTRIC_SCOOTER = 'ELECTRIC_SCOOTER';
  /**
   * Elliptical type.
   */
  public const EXERCISE_TYPE_ELLIPTICAL = 'ELLIPTICAL';
  /**
   * Equestrian sports type.
   */
  public const EXERCISE_TYPE_EQUESTRIAN_SPORTS = 'EQUESTRIAN_SPORTS';
  /**
   * Exercise class type.
   */
  public const EXERCISE_TYPE_EXERCISE_CLASS = 'EXERCISE_CLASS';
  /**
   * Fencing type.
   */
  public const EXERCISE_TYPE_FENCING = 'FENCING';
  /**
   * Field hockey type.
   */
  public const EXERCISE_TYPE_FIELD_HOCKEY = 'FIELD_HOCKEY';
  /**
   * Fishing type.
   */
  public const EXERCISE_TYPE_FISHING = 'FISHING';
  /**
   * Fitness gaming type.
   */
  public const EXERCISE_TYPE_FITNESS_GAMING = 'FITNESS_GAMING';
  /**
   * Foiling type.
   */
  public const EXERCISE_TYPE_FOILING = 'FOILING';
  /**
   * Football american type.
   */
  public const EXERCISE_TYPE_FOOTBALL_AMERICAN = 'FOOTBALL_AMERICAN';
  /**
   * Football australian type.
   */
  public const EXERCISE_TYPE_FOOTBALL_AUSTRALIAN = 'FOOTBALL_AUSTRALIAN';
  /**
   * Free weights type.
   */
  public const EXERCISE_TYPE_FREE_WEIGHTS = 'FREE_WEIGHTS';
  /**
   * Frisbee playing general type.
   */
  public const EXERCISE_TYPE_FRISBEE_PLAYING_GENERAL = 'FRISBEE_PLAYING_GENERAL';
  /**
   * Functional strength training type.
   */
  public const EXERCISE_TYPE_FUNCTIONAL_STRENGTH_TRAINING = 'FUNCTIONAL_STRENGTH_TRAINING';
  /**
   * Gardening type.
   */
  public const EXERCISE_TYPE_GARDENING = 'GARDENING';
  /**
   * Golf type.
   */
  public const EXERCISE_TYPE_GOLF = 'GOLF';
  /**
   * Gymnastics type.
   */
  public const EXERCISE_TYPE_GYMNASTICS = 'GYMNASTICS';
  /**
   * Handball type.
   */
  public const EXERCISE_TYPE_HANDBALL = 'HANDBALL';
  /**
   * Hand cycling type.
   */
  public const EXERCISE_TYPE_HAND_CYCLING = 'HAND_CYCLING';
  /**
   * Hiit type.
   */
  public const EXERCISE_TYPE_HIIT = 'HIIT';
  /**
   * Hiking type.
   */
  public const EXERCISE_TYPE_HIKING = 'HIKING';
  /**
   * Hip hop type.
   */
  public const EXERCISE_TYPE_HIP_HOP = 'HIP_HOP';
  /**
   * Hockey type.
   */
  public const EXERCISE_TYPE_HOCKEY = 'HOCKEY';
  /**
   * Hoeing type.
   */
  public const EXERCISE_TYPE_HOEING = 'HOEING';
  /**
   * Household chores type.
   */
  public const EXERCISE_TYPE_HOUSEHOLD_CHORES = 'HOUSEHOLD_CHORES';
  /**
   * Hunting type.
   */
  public const EXERCISE_TYPE_HUNTING = 'HUNTING';
  /**
   * Ice skating type.
   */
  public const EXERCISE_TYPE_ICE_SKATING = 'ICE_SKATING';
  /**
   * Incline run type.
   */
  public const EXERCISE_TYPE_INCLINE_RUN = 'INCLINE_RUN';
  /**
   * Incline walk type.
   */
  public const EXERCISE_TYPE_INCLINE_WALK = 'INCLINE_WALK';
  /**
   * Indoor climbing type.
   */
  public const EXERCISE_TYPE_INDOOR_CLIMBING = 'INDOOR_CLIMBING';
  /**
   * Interval workout type.
   */
  public const EXERCISE_TYPE_INTERVAL_WORKOUT = 'INTERVAL_WORKOUT';
  /**
   * Jazz dance type.
   */
  public const EXERCISE_TYPE_JAZZ_DANCE = 'JAZZ_DANCE';
  /**
   * Jiu jitsu type.
   */
  public const EXERCISE_TYPE_JIU_JITSU = 'JIU_JITSU';
  /**
   * Jumping rope type.
   */
  public const EXERCISE_TYPE_JUMPING_ROPE = 'JUMPING_ROPE';
  /**
   * Karate type.
   */
  public const EXERCISE_TYPE_KARATE = 'KARATE';
  /**
   * Kayaking type.
   */
  public const EXERCISE_TYPE_KAYAKING = 'KAYAKING';
  /**
   * Kickboxing type.
   */
  public const EXERCISE_TYPE_KICKBOXING = 'KICKBOXING';
  /**
   * Kitesurfing type.
   */
  public const EXERCISE_TYPE_KITESURFING = 'KITESURFING';
  /**
   * Lacrosse type.
   */
  public const EXERCISE_TYPE_LACROSSE = 'LACROSSE';
  /**
   * Martial arts type.
   */
  public const EXERCISE_TYPE_MARTIAL_ARTS = 'MARTIAL_ARTS';
  /**
   * Meditate type.
   */
  public const EXERCISE_TYPE_MEDITATE = 'MEDITATE';
  /**
   * Modern dance type.
   */
  public const EXERCISE_TYPE_MODERN_DANCE = 'MODERN_DANCE';
  /**
   * Motocross type.
   */
  public const EXERCISE_TYPE_MOTOCROSS = 'MOTOCROSS';
  /**
   * Motorcycle type.
   */
  public const EXERCISE_TYPE_MOTORCYCLE = 'MOTORCYCLE';
  /**
   * Mountain bike type.
   */
  public const EXERCISE_TYPE_MOUNTAIN_BIKE = 'MOUNTAIN_BIKE';
  /**
   * Mowing lawn type.
   */
  public const EXERCISE_TYPE_MOWING_LAWN = 'MOWING_LAWN';
  /**
   * Muay thai type.
   */
  public const EXERCISE_TYPE_MUAY_THAI = 'MUAY_THAI';
  /**
   * Multisport type.
   */
  public const EXERCISE_TYPE_MULTISPORT = 'MULTISPORT';
  /**
   * Musical performance type.
   */
  public const EXERCISE_TYPE_MUSICAL_PERFORMANCE = 'MUSICAL_PERFORMANCE';
  /**
   * Nordic walking type.
   */
  public const EXERCISE_TYPE_NORDIC_WALKING = 'NORDIC_WALKING';
  /**
   * Orienteering type.
   */
  public const EXERCISE_TYPE_ORIENTEERING = 'ORIENTEERING';
  /**
   * Other type.
   */
  public const EXERCISE_TYPE_OTHER = 'OTHER';
  /**
   * Outdoor bike type.
   */
  public const EXERCISE_TYPE_OUTDOOR_BIKE = 'OUTDOOR_BIKE';
  /**
   * Outdoor workout type.
   */
  public const EXERCISE_TYPE_OUTDOOR_WORKOUT = 'OUTDOOR_WORKOUT';
  /**
   * Paddleboarding type.
   */
  public const EXERCISE_TYPE_PADDLEBOARDING = 'PADDLEBOARDING';
  /**
   * Padel type.
   */
  public const EXERCISE_TYPE_PADEL = 'PADEL';
  /**
   * Painting type.
   */
  public const EXERCISE_TYPE_PAINTING = 'PAINTING';
  /**
   * Paragliding type.
   */
  public const EXERCISE_TYPE_PARAGLIDING = 'PARAGLIDING';
  /**
   * Parkour type.
   */
  public const EXERCISE_TYPE_PARKOUR = 'PARKOUR';
  /**
   * Pickelball type.
   */
  public const EXERCISE_TYPE_PICKELBALL = 'PICKELBALL';
  /**
   * Pilates type.
   */
  public const EXERCISE_TYPE_PILATES = 'PILATES';
  /**
   * Polo type.
   */
  public const EXERCISE_TYPE_POLO = 'POLO';
  /**
   * Powerlifting type.
   */
  public const EXERCISE_TYPE_POWERLIFTING = 'POWERLIFTING';
  /**
   * Power walking type.
   */
  public const EXERCISE_TYPE_POWER_WALKING = 'POWER_WALKING';
  /**
   * Racket sports type.
   */
  public const EXERCISE_TYPE_RACKET_SPORTS = 'RACKET_SPORTS';
  /**
   * Racquetball type.
   */
  public const EXERCISE_TYPE_RACQUETBALL = 'RACQUETBALL';
  /**
   * Resistance bands type.
   */
  public const EXERCISE_TYPE_RESISTANCE_BANDS = 'RESISTANCE_BANDS';
  /**
   * Rock climbing type.
   */
  public const EXERCISE_TYPE_ROCK_CLIMBING = 'ROCK_CLIMBING';
  /**
   * Rollerblading type.
   */
  public const EXERCISE_TYPE_ROLLERBLADING = 'ROLLERBLADING';
  /**
   * Roller skating type.
   */
  public const EXERCISE_TYPE_ROLLER_SKATING = 'ROLLER_SKATING';
  /**
   * Rowing type.
   */
  public const EXERCISE_TYPE_ROWING = 'ROWING';
  /**
   * Rowing machine type.
   */
  public const EXERCISE_TYPE_ROWING_MACHINE = 'ROWING_MACHINE';
  /**
   * Rucking type.
   */
  public const EXERCISE_TYPE_RUCKING = 'RUCKING';
  /**
   * Rugby type.
   */
  public const EXERCISE_TYPE_RUGBY = 'RUGBY';
  /**
   * Running type.
   */
  public const EXERCISE_TYPE_RUNNING = 'RUNNING';
  /**
   * Sailing type.
   */
  public const EXERCISE_TYPE_SAILING = 'SAILING';
  /**
   * Scootering type.
   */
  public const EXERCISE_TYPE_SCOOTERING = 'SCOOTERING';
  /**
   * Scuba diving type.
   */
  public const EXERCISE_TYPE_SCUBA_DIVING = 'SCUBA_DIVING';
  /**
   * Shooting type.
   */
  public const EXERCISE_TYPE_SHOOTING = 'SHOOTING';
  /**
   * Shoveling type.
   */
  public const EXERCISE_TYPE_SHOVELING = 'SHOVELING';
  /**
   * Skateboarding type.
   */
  public const EXERCISE_TYPE_SKATEBOARDING = 'SKATEBOARDING';
  /**
   * Skating type.
   */
  public const EXERCISE_TYPE_SKATING = 'SKATING';
  /**
   * Skiing type.
   */
  public const EXERCISE_TYPE_SKIING = 'SKIING';
  /**
   * Skydiving type.
   */
  public const EXERCISE_TYPE_SKYDIVING = 'SKYDIVING';
  /**
   * Snorkeling type.
   */
  public const EXERCISE_TYPE_SNORKELING = 'SNORKELING';
  /**
   * Snowboarding type.
   */
  public const EXERCISE_TYPE_SNOWBOARDING = 'SNOWBOARDING';
  /**
   * Snowmobiling type.
   */
  public const EXERCISE_TYPE_SNOWMOBILING = 'SNOWMOBILING';
  /**
   * Snowshoeing type.
   */
  public const EXERCISE_TYPE_SNOWSHOEING = 'SNOWSHOEING';
  /**
   * Snow sport type.
   */
  public const EXERCISE_TYPE_SNOW_SPORT = 'SNOW_SPORT';
  /**
   * Soccer type.
   */
  public const EXERCISE_TYPE_SOCCER = 'SOCCER';
  /**
   * Softball type.
   */
  public const EXERCISE_TYPE_SOFTBALL = 'SOFTBALL';
  /**
   * Speed skating type.
   */
  public const EXERCISE_TYPE_SPEED_SKATING = 'SPEED_SKATING';
  /**
   * Spinning type.
   */
  public const EXERCISE_TYPE_SPINNING = 'SPINNING';
  /**
   * Sport type.
   */
  public const EXERCISE_TYPE_SPORT = 'SPORT';
  /**
   * Squash type.
   */
  public const EXERCISE_TYPE_SQUASH = 'SQUASH';
  /**
   * Stairclimber type.
   */
  public const EXERCISE_TYPE_STAIRCLIMBER = 'STAIRCLIMBER';
  /**
   * Stationary bike type.
   */
  public const EXERCISE_TYPE_STATIONARY_BIKE = 'STATIONARY_BIKE';
  /**
   * Step training type.
   */
  public const EXERCISE_TYPE_STEP_TRAINING = 'STEP_TRAINING';
  /**
   * Strength training type.
   */
  public const EXERCISE_TYPE_STRENGTH_TRAINING = 'STRENGTH_TRAINING';
  /**
   * Stretching type.
   */
  public const EXERCISE_TYPE_STRETCHING = 'STRETCHING';
  /**
   * Stroller walk type.
   */
  public const EXERCISE_TYPE_STROLLER_WALK = 'STROLLER_WALK';
  /**
   * Surfing type.
   */
  public const EXERCISE_TYPE_SURFING = 'SURFING';
  /**
   * Swimming type.
   */
  public const EXERCISE_TYPE_SWIMMING = 'SWIMMING';
  /**
   * Swimming open water type.
   */
  public const EXERCISE_TYPE_SWIMMING_OPEN_WATER = 'SWIMMING_OPEN_WATER';
  /**
   * Swimming pool type.
   */
  public const EXERCISE_TYPE_SWIMMING_POOL = 'SWIMMING_POOL';
  /**
   * Synchronized swimming type.
   */
  public const EXERCISE_TYPE_SYNCHRONIZED_SWIMMING = 'SYNCHRONIZED_SWIMMING';
  /**
   * Tabata workout type.
   */
  public const EXERCISE_TYPE_TABATA_WORKOUT = 'TABATA_WORKOUT';
  /**
   * Table tennis type.
   */
  public const EXERCISE_TYPE_TABLE_TENNIS = 'TABLE_TENNIS';
  /**
   * Taekwondo type.
   */
  public const EXERCISE_TYPE_TAEKWONDO = 'TAEKWONDO';
  /**
   * Tai chi type.
   */
  public const EXERCISE_TYPE_TAI_CHI = 'TAI_CHI';
  /**
   * Tango type.
   */
  public const EXERCISE_TYPE_TANGO = 'TANGO';
  /**
   * Tennis type.
   */
  public const EXERCISE_TYPE_TENNIS = 'TENNIS';
  /**
   * Track and field type.
   */
  public const EXERCISE_TYPE_TRACK_AND_FIELD = 'TRACK_AND_FIELD';
  /**
   * Trail run type.
   */
  public const EXERCISE_TYPE_TRAIL_RUN = 'TRAIL_RUN';
  /**
   * Trampoline type.
   */
  public const EXERCISE_TYPE_TRAMPOLINE = 'TRAMPOLINE';
  /**
   * Treadmill type.
   */
  public const EXERCISE_TYPE_TREADMILL = 'TREADMILL';
  /**
   * Treadmill walk type.
   */
  public const EXERCISE_TYPE_TREADMILL_WALK = 'TREADMILL_WALK';
  /**
   * Trx type.
   */
  public const EXERCISE_TYPE_TRX = 'TRX';
  /**
   * Ultimate frisbee type.
   */
  public const EXERCISE_TYPE_ULTIMATE_FRISBEE = 'ULTIMATE_FRISBEE';
  /**
   * Unicycling type.
   */
  public const EXERCISE_TYPE_UNICYCLING = 'UNICYCLING';
  /**
   * Volleyball type.
   */
  public const EXERCISE_TYPE_VOLLEYBALL = 'VOLLEYBALL';
  /**
   * Volleyball beach type.
   */
  public const EXERCISE_TYPE_VOLLEYBALL_BEACH = 'VOLLEYBALL_BEACH';
  /**
   * Wakeboarding type.
   */
  public const EXERCISE_TYPE_WAKEBOARDING = 'WAKEBOARDING';
  /**
   * Walking type.
   */
  public const EXERCISE_TYPE_WALKING = 'WALKING';
  /**
   * Walk with weights type.
   */
  public const EXERCISE_TYPE_WALK_WITH_WEIGHTS = 'WALK_WITH_WEIGHTS';
  /**
   * Water aerobics type.
   */
  public const EXERCISE_TYPE_WATER_AEROBICS = 'WATER_AEROBICS';
  /**
   * Water jogging type.
   */
  public const EXERCISE_TYPE_WATER_JOGGING = 'WATER_JOGGING';
  /**
   * Water polo type.
   */
  public const EXERCISE_TYPE_WATER_POLO = 'WATER_POLO';
  /**
   * Water skiing type.
   */
  public const EXERCISE_TYPE_WATER_SKIING = 'WATER_SKIING';
  /**
   * Water sport type.
   */
  public const EXERCISE_TYPE_WATER_SPORT = 'WATER_SPORT';
  /**
   * Water volleyball type.
   */
  public const EXERCISE_TYPE_WATER_VOLLEYBALL = 'WATER_VOLLEYBALL';
  /**
   * Weeding type.
   */
  public const EXERCISE_TYPE_WEEDING = 'WEEDING';
  /**
   * Weightlifting type.
   */
  public const EXERCISE_TYPE_WEIGHTLIFTING = 'WEIGHTLIFTING';
  /**
   * Weight machines type.
   */
  public const EXERCISE_TYPE_WEIGHT_MACHINES = 'WEIGHT_MACHINES';
  /**
   * Weights type.
   */
  public const EXERCISE_TYPE_WEIGHTS = 'WEIGHTS';
  /**
   * Wheelchair type.
   */
  public const EXERCISE_TYPE_WHEELCHAIR = 'WHEELCHAIR';
  /**
   * Windsurfing type.
   */
  public const EXERCISE_TYPE_WINDSURFING = 'WINDSURFING';
  /**
   * Workout type.
   */
  public const EXERCISE_TYPE_WORKOUT = 'WORKOUT';
  /**
   * Wrestling type.
   */
  public const EXERCISE_TYPE_WRESTLING = 'WRESTLING';
  /**
   * Yoga type.
   */
  public const EXERCISE_TYPE_YOGA = 'YOGA';
  /**
   * Yoga bikram type.
   */
  public const EXERCISE_TYPE_YOGA_BIKRAM = 'YOGA_BIKRAM';
  /**
   * Yoga hatha type.
   */
  public const EXERCISE_TYPE_YOGA_HATHA = 'YOGA_HATHA';
  /**
   * Yoga power type.
   */
  public const EXERCISE_TYPE_YOGA_POWER = 'YOGA_POWER';
  /**
   * Yoga vinyasa type.
   */
  public const EXERCISE_TYPE_YOGA_VINYASA = 'YOGA_VINYASA';
  /**
   * Zumba type.
   */
  public const EXERCISE_TYPE_ZUMBA = 'ZUMBA';
  protected $collection_key = 'splits';
  /**
   * Optional. Duration excluding pauses.
   *
   * @var string
   */
  public $activeDuration;
  /**
   * Output only. Represents the timestamp of the creation of the exercise.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Exercise display name.
   *
   * @var string
   */
  public $displayName;
  protected $exerciseEventsType = ExerciseEvent::class;
  protected $exerciseEventsDataType = 'array';
  protected $exerciseMetadataType = ExerciseMetadata::class;
  protected $exerciseMetadataDataType = '';
  /**
   * Required. The type of activity performed during an exercise.
   *
   * @var string
   */
  public $exerciseType;
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  protected $metricsSummaryType = MetricsSummary::class;
  protected $metricsSummaryDataType = '';
  /**
   * Optional. Standard free-form notes captured at manual logging.
   *
   * @var string
   */
  public $notes;
  protected $splitSummariesType = SplitSummary::class;
  protected $splitSummariesDataType = 'array';
  protected $splitsType = SplitSummary::class;
  protected $splitsDataType = 'array';
  /**
   * Output only. This is the timestamp of the last update to the exercise.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Duration excluding pauses.
   *
   * @param string $activeDuration
   */
  public function setActiveDuration($activeDuration)
  {
    $this->activeDuration = $activeDuration;
  }
  /**
   * @return string
   */
  public function getActiveDuration()
  {
    return $this->activeDuration;
  }
  /**
   * Output only. Represents the timestamp of the creation of the exercise.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. Exercise display name.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Exercise events that happen during an exercise, such as pause &
   * restarts.
   *
   * @param ExerciseEvent[] $exerciseEvents
   */
  public function setExerciseEvents($exerciseEvents)
  {
    $this->exerciseEvents = $exerciseEvents;
  }
  /**
   * @return ExerciseEvent[]
   */
  public function getExerciseEvents()
  {
    return $this->exerciseEvents;
  }
  /**
   * Optional. Additional exercise metadata.
   *
   * @param ExerciseMetadata $exerciseMetadata
   */
  public function setExerciseMetadata(ExerciseMetadata $exerciseMetadata)
  {
    $this->exerciseMetadata = $exerciseMetadata;
  }
  /**
   * @return ExerciseMetadata
   */
  public function getExerciseMetadata()
  {
    return $this->exerciseMetadata;
  }
  /**
   * Required. The type of activity performed during an exercise.
   *
   * Accepted values: EXERCISE_TYPE_UNSPECIFIED, AEROBIC_WORKOUT, ARCHERY,
   * ASSAULT_BIKE, BACKPACKING, BADMINTON, BALLET, BALLROOM_DANCE, BARRE_CLASS,
   * BASEBALL, BASKETBALL, BIKING, BILLIARDS, BODY_WEIGHT, BOOTCAMP, BOWLING,
   * BOXING, BREAKDANCING, CALISTHENICS, CANOEING, CARDIO_SCULPT,
   * CARDIO_WORKOUT, CARPENTRY, CHEERLEADING, CIRCUIT_TRAINING, CLEANING,
   * CLIMBING, CORE_TRAINING, CRICKET, CROQUET, CROSS_COUNTRY_SKI,
   * CROSS_TRAINING, CROSSFIT, CURLING, DANCING, DIVING, ELECTRIC_BIKE,
   * ELECTRIC_SCOOTER, ELLIPTICAL, EQUESTRIAN_SPORTS, EXERCISE_CLASS, FENCING,
   * FIELD_HOCKEY, FISHING, FITNESS_GAMING, FOILING, FOOTBALL_AMERICAN,
   * FOOTBALL_AUSTRALIAN, FREE_WEIGHTS, FRISBEE_PLAYING_GENERAL,
   * FUNCTIONAL_STRENGTH_TRAINING, GARDENING, GOLF, GYMNASTICS, HANDBALL,
   * HAND_CYCLING, HIIT, HIKING, HIP_HOP, HOCKEY, HOEING, HOUSEHOLD_CHORES,
   * HUNTING, ICE_SKATING, INCLINE_RUN, INCLINE_WALK, INDOOR_CLIMBING,
   * INTERVAL_WORKOUT, JAZZ_DANCE, JIU_JITSU, JUMPING_ROPE, KARATE, KAYAKING,
   * KICKBOXING, KITESURFING, LACROSSE, MARTIAL_ARTS, MEDITATE, MODERN_DANCE,
   * MOTOCROSS, MOTORCYCLE, MOUNTAIN_BIKE, MOWING_LAWN, MUAY_THAI, MULTISPORT,
   * MUSICAL_PERFORMANCE, NORDIC_WALKING, ORIENTEERING, OTHER, OUTDOOR_BIKE,
   * OUTDOOR_WORKOUT, PADDLEBOARDING, PADEL, PAINTING, PARAGLIDING, PARKOUR,
   * PICKELBALL, PILATES, POLO, POWERLIFTING, POWER_WALKING, RACKET_SPORTS,
   * RACQUETBALL, RESISTANCE_BANDS, ROCK_CLIMBING, ROLLERBLADING,
   * ROLLER_SKATING, ROWING, ROWING_MACHINE, RUCKING, RUGBY, RUNNING, SAILING,
   * SCOOTERING, SCUBA_DIVING, SHOOTING, SHOVELING, SKATEBOARDING, SKATING,
   * SKIING, SKYDIVING, SNORKELING, SNOWBOARDING, SNOWMOBILING, SNOWSHOEING,
   * SNOW_SPORT, SOCCER, SOFTBALL, SPEED_SKATING, SPINNING, SPORT, SQUASH,
   * STAIRCLIMBER, STATIONARY_BIKE, STEP_TRAINING, STRENGTH_TRAINING,
   * STRETCHING, STROLLER_WALK, SURFING, SWIMMING, SWIMMING_OPEN_WATER,
   * SWIMMING_POOL, SYNCHRONIZED_SWIMMING, TABATA_WORKOUT, TABLE_TENNIS,
   * TAEKWONDO, TAI_CHI, TANGO, TENNIS, TRACK_AND_FIELD, TRAIL_RUN, TRAMPOLINE,
   * TREADMILL, TREADMILL_WALK, TRX, ULTIMATE_FRISBEE, UNICYCLING, VOLLEYBALL,
   * VOLLEYBALL_BEACH, WAKEBOARDING, WALKING, WALK_WITH_WEIGHTS, WATER_AEROBICS,
   * WATER_JOGGING, WATER_POLO, WATER_SKIING, WATER_SPORT, WATER_VOLLEYBALL,
   * WEEDING, WEIGHTLIFTING, WEIGHT_MACHINES, WEIGHTS, WHEELCHAIR, WINDSURFING,
   * WORKOUT, WRESTLING, YOGA, YOGA_BIKRAM, YOGA_HATHA, YOGA_POWER,
   * YOGA_VINYASA, ZUMBA
   *
   * @param self::EXERCISE_TYPE_* $exerciseType
   */
  public function setExerciseType($exerciseType)
  {
    $this->exerciseType = $exerciseType;
  }
  /**
   * @return self::EXERCISE_TYPE_*
   */
  public function getExerciseType()
  {
    return $this->exerciseType;
  }
  /**
   * Required. Observed exercise interval
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Required. Summary metrics for this exercise ( )
   *
   * @param MetricsSummary $metricsSummary
   */
  public function setMetricsSummary(MetricsSummary $metricsSummary)
  {
    $this->metricsSummary = $metricsSummary;
  }
  /**
   * @return MetricsSummary
   */
  public function getMetricsSummary()
  {
    return $this->metricsSummary;
  }
  /**
   * Optional. Standard free-form notes captured at manual logging.
   *
   * @param string $notes
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /**
   * @return string
   */
  public function getNotes()
  {
    return $this->notes;
  }
  /**
   * Optional. Laps or splits recorded within an exercise. Laps could be split
   * based on distance or other criteria (duration, etc.) Laps should not be
   * overlapping with each other.
   *
   * @param SplitSummary[] $splitSummaries
   */
  public function setSplitSummaries($splitSummaries)
  {
    $this->splitSummaries = $splitSummaries;
  }
  /**
   * @return SplitSummary[]
   */
  public function getSplitSummaries()
  {
    return $this->splitSummaries;
  }
  /**
   * Optional. The default split is 1 km or 1 mile. - if the movement distance
   * is less than the default, then there are no splits - if the movement
   * distance is greater than or equal to the default, then we have splits
   *
   * @param SplitSummary[] $splits
   */
  public function setSplits($splits)
  {
    $this->splits = $splits;
  }
  /**
   * @return SplitSummary[]
   */
  public function getSplits()
  {
    return $this->splits;
  }
  /**
   * Output only. This is the timestamp of the last update to the exercise.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Exercise::class, 'Google_Service_GoogleHealthAPI_Exercise');
