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

class NlpSemanticParsingModelsMediaAudio extends \Google\Collection
{
  protected $collection_key = 'tag';
  /**
   * @var NlpSemanticParsingModelsMediaAlbumTitle
   */
  public $album;
  protected $albumType = NlpSemanticParsingModelsMediaAlbumTitle::class;
  protected $albumDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaMusicArtist
   */
  public $artist;
  protected $artistType = NlpSemanticParsingModelsMediaMusicArtist::class;
  protected $artistDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaBook
   */
  public $book;
  protected $bookType = NlpSemanticParsingModelsMediaBook::class;
  protected $bookDataType = '';
  /**
   * @var NlpSemanticParsingDatetimeDateTime
   */
  public $dateTime;
  protected $dateTimeType = NlpSemanticParsingDatetimeDateTime::class;
  protected $dateTimeDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaEpisodeConstraint[]
   */
  public $episodeConstraint;
  protected $episodeConstraintType = NlpSemanticParsingModelsMediaEpisodeConstraint::class;
  protected $episodeConstraintDataType = 'array';
  /**
   * @var NlpSemanticParsingModelsMediaGame
   */
  public $game;
  protected $gameType = NlpSemanticParsingModelsMediaGame::class;
  protected $gameDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaGenericMusic
   */
  public $genericMusic;
  protected $genericMusicType = NlpSemanticParsingModelsMediaGenericMusic::class;
  protected $genericMusicDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaMusicGenre
   */
  public $genre;
  protected $genreType = NlpSemanticParsingModelsMediaMusicGenre::class;
  protected $genreDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaMovie
   */
  public $movie;
  protected $movieType = NlpSemanticParsingModelsMediaMovie::class;
  protected $movieDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaNewsTopic
   */
  public $newsTopic;
  protected $newsTopicType = NlpSemanticParsingModelsMediaNewsTopic::class;
  protected $newsTopicDataType = '';
  /**
   * @var bool
   */
  public $noExplicitAudio;
  /**
   * @var NlpSemanticParsingModelsMediaMusicPlaylist
   */
  public $playlist;
  protected $playlistType = NlpSemanticParsingModelsMediaMusicPlaylist::class;
  protected $playlistDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaPodcast
   */
  public $podcast;
  protected $podcastType = NlpSemanticParsingModelsMediaPodcast::class;
  protected $podcastDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaRadio
   */
  public $radio;
  protected $radioType = NlpSemanticParsingModelsMediaRadio::class;
  protected $radioDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaRadioNetwork
   */
  public $radioNetwork;
  protected $radioNetworkType = NlpSemanticParsingModelsMediaRadioNetwork::class;
  protected $radioNetworkDataType = '';
  /**
   * @var string
   */
  public $rawText;
  /**
   * @var string
   */
  public $scoreType;
  /**
   * @var NlpSemanticParsingModelsMediaSeasonConstraint
   */
  public $seasonConstraint;
  protected $seasonConstraintType = NlpSemanticParsingModelsMediaSeasonConstraint::class;
  protected $seasonConstraintDataType = '';
  /**
   * @var NlpSemanticParsingModelsMediaSong
   */
  public $song;
  protected $songType = NlpSemanticParsingModelsMediaSong::class;
  protected $songDataType = '';
  /**
   * @var string[]
   */
  public $tag;
  /**
   * @var NlpSemanticParsingModelsMediaTVShow
   */
  public $tvShow;
  protected $tvShowType = NlpSemanticParsingModelsMediaTVShow::class;
  protected $tvShowDataType = '';

  /**
   * @param NlpSemanticParsingModelsMediaAlbumTitle
   */
  public function setAlbum(NlpSemanticParsingModelsMediaAlbumTitle $album)
  {
    $this->album = $album;
  }
  /**
   * @return NlpSemanticParsingModelsMediaAlbumTitle
   */
  public function getAlbum()
  {
    return $this->album;
  }
  /**
   * @param NlpSemanticParsingModelsMediaMusicArtist
   */
  public function setArtist(NlpSemanticParsingModelsMediaMusicArtist $artist)
  {
    $this->artist = $artist;
  }
  /**
   * @return NlpSemanticParsingModelsMediaMusicArtist
   */
  public function getArtist()
  {
    return $this->artist;
  }
  /**
   * @param NlpSemanticParsingModelsMediaBook
   */
  public function setBook(NlpSemanticParsingModelsMediaBook $book)
  {
    $this->book = $book;
  }
  /**
   * @return NlpSemanticParsingModelsMediaBook
   */
  public function getBook()
  {
    return $this->book;
  }
  /**
   * @param NlpSemanticParsingDatetimeDateTime
   */
  public function setDateTime(NlpSemanticParsingDatetimeDateTime $dateTime)
  {
    $this->dateTime = $dateTime;
  }
  /**
   * @return NlpSemanticParsingDatetimeDateTime
   */
  public function getDateTime()
  {
    return $this->dateTime;
  }
  /**
   * @param NlpSemanticParsingModelsMediaEpisodeConstraint[]
   */
  public function setEpisodeConstraint($episodeConstraint)
  {
    $this->episodeConstraint = $episodeConstraint;
  }
  /**
   * @return NlpSemanticParsingModelsMediaEpisodeConstraint[]
   */
  public function getEpisodeConstraint()
  {
    return $this->episodeConstraint;
  }
  /**
   * @param NlpSemanticParsingModelsMediaGame
   */
  public function setGame(NlpSemanticParsingModelsMediaGame $game)
  {
    $this->game = $game;
  }
  /**
   * @return NlpSemanticParsingModelsMediaGame
   */
  public function getGame()
  {
    return $this->game;
  }
  /**
   * @param NlpSemanticParsingModelsMediaGenericMusic
   */
  public function setGenericMusic(NlpSemanticParsingModelsMediaGenericMusic $genericMusic)
  {
    $this->genericMusic = $genericMusic;
  }
  /**
   * @return NlpSemanticParsingModelsMediaGenericMusic
   */
  public function getGenericMusic()
  {
    return $this->genericMusic;
  }
  /**
   * @param NlpSemanticParsingModelsMediaMusicGenre
   */
  public function setGenre(NlpSemanticParsingModelsMediaMusicGenre $genre)
  {
    $this->genre = $genre;
  }
  /**
   * @return NlpSemanticParsingModelsMediaMusicGenre
   */
  public function getGenre()
  {
    return $this->genre;
  }
  /**
   * @param NlpSemanticParsingModelsMediaMovie
   */
  public function setMovie(NlpSemanticParsingModelsMediaMovie $movie)
  {
    $this->movie = $movie;
  }
  /**
   * @return NlpSemanticParsingModelsMediaMovie
   */
  public function getMovie()
  {
    return $this->movie;
  }
  /**
   * @param NlpSemanticParsingModelsMediaNewsTopic
   */
  public function setNewsTopic(NlpSemanticParsingModelsMediaNewsTopic $newsTopic)
  {
    $this->newsTopic = $newsTopic;
  }
  /**
   * @return NlpSemanticParsingModelsMediaNewsTopic
   */
  public function getNewsTopic()
  {
    return $this->newsTopic;
  }
  /**
   * @param bool
   */
  public function setNoExplicitAudio($noExplicitAudio)
  {
    $this->noExplicitAudio = $noExplicitAudio;
  }
  /**
   * @return bool
   */
  public function getNoExplicitAudio()
  {
    return $this->noExplicitAudio;
  }
  /**
   * @param NlpSemanticParsingModelsMediaMusicPlaylist
   */
  public function setPlaylist(NlpSemanticParsingModelsMediaMusicPlaylist $playlist)
  {
    $this->playlist = $playlist;
  }
  /**
   * @return NlpSemanticParsingModelsMediaMusicPlaylist
   */
  public function getPlaylist()
  {
    return $this->playlist;
  }
  /**
   * @param NlpSemanticParsingModelsMediaPodcast
   */
  public function setPodcast(NlpSemanticParsingModelsMediaPodcast $podcast)
  {
    $this->podcast = $podcast;
  }
  /**
   * @return NlpSemanticParsingModelsMediaPodcast
   */
  public function getPodcast()
  {
    return $this->podcast;
  }
  /**
   * @param NlpSemanticParsingModelsMediaRadio
   */
  public function setRadio(NlpSemanticParsingModelsMediaRadio $radio)
  {
    $this->radio = $radio;
  }
  /**
   * @return NlpSemanticParsingModelsMediaRadio
   */
  public function getRadio()
  {
    return $this->radio;
  }
  /**
   * @param NlpSemanticParsingModelsMediaRadioNetwork
   */
  public function setRadioNetwork(NlpSemanticParsingModelsMediaRadioNetwork $radioNetwork)
  {
    $this->radioNetwork = $radioNetwork;
  }
  /**
   * @return NlpSemanticParsingModelsMediaRadioNetwork
   */
  public function getRadioNetwork()
  {
    return $this->radioNetwork;
  }
  /**
   * @param string
   */
  public function setRawText($rawText)
  {
    $this->rawText = $rawText;
  }
  /**
   * @return string
   */
  public function getRawText()
  {
    return $this->rawText;
  }
  /**
   * @param string
   */
  public function setScoreType($scoreType)
  {
    $this->scoreType = $scoreType;
  }
  /**
   * @return string
   */
  public function getScoreType()
  {
    return $this->scoreType;
  }
  /**
   * @param NlpSemanticParsingModelsMediaSeasonConstraint
   */
  public function setSeasonConstraint(NlpSemanticParsingModelsMediaSeasonConstraint $seasonConstraint)
  {
    $this->seasonConstraint = $seasonConstraint;
  }
  /**
   * @return NlpSemanticParsingModelsMediaSeasonConstraint
   */
  public function getSeasonConstraint()
  {
    return $this->seasonConstraint;
  }
  /**
   * @param NlpSemanticParsingModelsMediaSong
   */
  public function setSong(NlpSemanticParsingModelsMediaSong $song)
  {
    $this->song = $song;
  }
  /**
   * @return NlpSemanticParsingModelsMediaSong
   */
  public function getSong()
  {
    return $this->song;
  }
  /**
   * @param string[]
   */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /**
   * @return string[]
   */
  public function getTag()
  {
    return $this->tag;
  }
  /**
   * @param NlpSemanticParsingModelsMediaTVShow
   */
  public function setTvShow(NlpSemanticParsingModelsMediaTVShow $tvShow)
  {
    $this->tvShow = $tvShow;
  }
  /**
   * @return NlpSemanticParsingModelsMediaTVShow
   */
  public function getTvShow()
  {
    return $this->tvShow;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NlpSemanticParsingModelsMediaAudio::class, 'Google_Service_Contentwarehouse_NlpSemanticParsingModelsMediaAudio');
