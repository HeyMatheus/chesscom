<?php

declare(strict_types=1);

namespace Plugin;

class Chesscom extends Request
{
    /**
     * @return object
     * @api
     */
    public function getPlayerProfile(string $username)
    {
        return $this->getResponseAsJson("player/${username}");
    }

    /**
     * These are the available titles:
     * - GM
     * - WGM
     * - IM
     * - WIM
     * - FM
     * - WFM
     * - NM
     * - WNM
     * - CM
     * - WCM
     * @return array
     * @api
     */
    public function getTitledPlayers(string $title)
    {
        return $this->getResponseAsJson("titled/" . strtoupper($title))->players;
    }

    /**
     * These are the available categories:
     * - chess_daily
     * - chess_rapid
     * - chess_bullet
     * - chess_blitz
     * - tactics
     * - lessons
     * - puzzle_rush
     * @return object
     * @api
     */
    public function getPlayerStats(string $username)
    {
        return $this->getResponseAsJson("player/${username}/stats");
    }

    /**
     * @return bool
     * @api
     */
    public function isOnline(string $username)
    {
        return $this->getResponseAsJson("player/${username}/is-online")->online;
    }

    /**
     * @return array
     * @api
     */
    public function getPlayerGames(string $username)
    {
        return $this->getResponseAsJson("player/${username}/games/archives")->archives;
    }

    /**
     * @return array
     * @api
     */
    public function getPlayerGamesByDate(string $username, string $year, string $month)
    {
        return $this->getResponseAsJson("player/${username}/games/${year}/${month}")->games;
    }

    /**
     * @return array
     * @api
     */
    public function getPlayerClubs(string $username)
    {
        return $this->getResponseAsJson("player/${username}/clubs")->clubs;
    }

    /**
     * These are the available categories:
     * - finished
     * - in_progress
     * - registered
     * @return object
     * @api
     */
    public function getPlayerTournaments(string $username)
    {
        return $this->getResponseAsJson("player/${username}/tournaments");
    }

    /**
     * These are the available categories:
     * - daily
     * - daily960
     * - live_rapid
     * - live_blitz
     * - live_bullet
     * - live_bughouse
     * - live_blitz960
     * - live_threecheck
     * - live_crazyhouse
     * - live_kingofthehill
     * - tactics
     * @return object
     * @api
     */
    public function getLeaderboards()
    {
        return $this->getResponseAsJson("leaderboards");
    }

    /**
     * @return object
     * @api
     */
    public function getClubProfile(string $club)
    {
        return $this->getResponseAsJson("club/${club}");
    }

    /**
     * These are the available categories:
     * - weekly
     * - monthly
     * - all_time
     * @return object
     * @api
     */
    public function getClubMembers(string $club)
    {
        return $this->getResponseAsJson("club/${club}/members");
    }

    /**
     * These are the available categories:
     * - name
     * - url
     * - description
     * - creator
     * - status
     * - settings
     * - players
     * - rounds
     * @return object
     * @api
     */
    public function getTournamentDetails(string $tournament)
    {
        return $this->getResponseAsJson("tournament/${tournament}");
    }

    /**
     * @return object
     * @api
     */
    public function getMatchDetails(int $matchId)
    {
        return $this->getResponseAsJson("match/${matchId}");
    }

    /**
     * @return object
     * @api
     */
    public function getLiveMatchDetails(int $matchId)
    {
        return $this->getResponseAsJson("match/live/${matchId}");
    }

    /**
     * @return array
     * @api
     */
    public function getPlayersByCountry(string $iso)
    {
        return $this->getResponseAsJson("country/${iso}/players")->players;
    }

    /**
     * @return array
     * @api
     */
    public function getClubsByCountry(string $iso)
    {
        return $this->getResponseAsJson("country/${iso}/clubs")->clubs;
    }

    /**
     * @return object
     * @api
     */
    public function getDailyPuzzle()
    {
        return $this->getResponseAsJson("puzzle");
    }

    /**
     * @return object
     * @api
     */
    public function getRandomDailyPuzzle()
    {
        return $this->getResponseAsJson("puzzle/random");
    }

    /**
     * @return array
     * @api
     */
    public function getStreamers()
    {
        return $this->getResponseAsJson("streamers")->streamers;
    }
}
