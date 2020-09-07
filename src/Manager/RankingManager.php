<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class RankingManager
{
    /** @var array */
    private $tmpRankingValuesMonsters = [];

    /** @var RankingAllSkillsManager */
    private $rankingAllSkillsManager;

    public function __construct(RankingAllSkillsManager $rankingAllSkillsManager)
    {
        $this->rankingAllSkillsManager = $rankingAllSkillsManager;
    }

    public function verifRankingMonstersBySubStat($value, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour) 
    {
        $skills = $value->getIdSubstatsArtefactByMonsters();
        return $this->rankings($skills, $value, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
    }

    /**
     * Test rankings
     */
    public function rankings($skills, $value, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour)
    {   
        $rankingChangeOne = $this->rankingAllSkillsManager->filterOne($skills, $value, $filterSubStatOne);
        $rankingChangeTwo = $this->rankingAllSkillsManager->filterTwo($skills, $value, $filterSubStatTwo);
        $rankingChangeThree = $this->rankingAllSkillsManager->filterThree($skills, $value, $filterSubStatThree);

        if(!empty($filterSubStatOne) && empty($filterSubStatTwo) ) {
            return $this->sortDescRanking($rankingChangeOne, $value);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && empty($filterSubStatThree) ) {
            $tmpRank = [];

            if($rankingChangeOne['ranking'] != $rankingChangeTwo['ranking']) {
                $tmpRank = $rankingChangeTwo['ranking'];
            } else {
                $tmpRank = $rankingChangeOne['ranking'];
            }

            return $this->sortDescRanking($tmpRank, $value);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && empty($filterSubStatFour)) {
            
            $tmpRank = [];
            if($rankingChangeOne['ranking'] == $rankingChangeTwo['ranking']) {
                $tmpRank = array_merge($rankingChangeOne, $rankingChangeTwo);
            }
            if($rankingChangeOne['ranking'] == $rankingChangeThree['ranking']) {
                $tmpRank = array_merge($rankingChangeOne, $rankingChangeThree);
            }
            if($rankingChangeTwo['ranking'] == $rankingChangeThree['ranking']) {
                $tmpRank = array_merge($rankingChangeTwo, $rankingChangeThree);
            }
           
            return $this->sortDescRanking($tmpRank, $value);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && !empty($filterSubStatFour) ) {
            // dump('tu passes ici4');
        }
    }

    /**
     * real Ranking by filters tri DESC
     */
    public function sortDescRanking($rankFinal, $value)
    {
        return $this->getTmpRankingValuesMonsters(
            $value->getId(), 
            $value->getAwake(), 
            $value->getIdElementType()->getName(), 
            $value->getType(), 
            $value->getMonster(), 
            $value->getIdPreferedStats()->getName(),
            number_format($rankFinal['ranking'], 19, ',', ' ')
        );
    }

    /**
     *
     * @param int $id
     * @param string $awake
     * @param string $elementName
     * @param string $type
     * @param string $family
     * @param string $preferedStatName
     * @param [type] $rank
     * @return void
     */
    public function getTmpRankingValuesMonsters($id, $awake, $elementName, $type, $family, $preferedStatName, $rank)
    {

        $this->tmpRankingValuesMonsters[] = [
            "id" => $id,
            "awake" => $awake,
            "element" => $elementName,
            "type" => $type,
            "family" => $family,
            "prefered_flat_stats" => $preferedStatName,
            "ranking" => $rank
        ];

        if(!empty($this->tmpRankingValuesMonsters)) {
            
            usort($this->tmpRankingValuesMonsters, array($this, 'fonctionComparaison'));

            return $this->tmpRankingValuesMonsters;
        }
    }

    /**
     * tri par ordre décroissant
     */
    public function fonctionComparaison($a, $b) 
    {
        if($a['ranking'] != $b['ranking']) {
            return $a['ranking'] < $b['ranking'];
        }
    }
}
