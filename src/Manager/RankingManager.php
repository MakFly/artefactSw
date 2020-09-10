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

    /**
     * @param [type] $valuesMonsters
     * @param [type] $filterSubStatOne
     * @param [type] $filterSubStatTwo
     * @param [type] $filterSubStatThree
     * @param [type] $filterSubStatFour
     */
    public function verifRankingMonstersBySubStat($valuesMonsters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour) 
    {
        $skillsSubStatsArtefacts = $valuesMonsters->getIdSubstatsArtefactByMonsters();
        return $this->rankings($skillsSubStatsArtefacts, $valuesMonsters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
    }

    /**
     * Test rankings
     */
    public function rankings($skillsSubStatsArtefacts, $valuesMonsters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour)
    {   
        $rankingChangeOne = $this->rankingAllSkillsManager->filtersSubStats($skillsSubStatsArtefacts, $valuesMonsters, $filterSubStatOne);
        $rankingChangeTwo = $this->rankingAllSkillsManager->filtersSubStats($skillsSubStatsArtefacts, $valuesMonsters, $filterSubStatTwo);
        $rankingChangeThree = $this->rankingAllSkillsManager->filtersSubStats($skillsSubStatsArtefacts, $valuesMonsters, $filterSubStatThree);
        $rankingChangeFour = $this->rankingAllSkillsManager->filtersSubStats($skillsSubStatsArtefacts, $valuesMonsters, $filterSubStatFour);

        if(!empty($filterSubStatOne) && empty($filterSubStatTwo) ) {
            $tmpRank = [];

            foreach($rankingChangeOne as $rankingOne){
                $rank = $rankingOne['ranking'];
                $tmpRank = [
                    "id" => $rankingOne['id'],
                    "ranking" => $rank
                ];
            }

            return $this->sortDescRanking($tmpRank, $valuesMonsters);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && empty($filterSubStatThree) ) {
            
            $tmpRank = [];

            foreach($rankingChangeOne as $rankingOne){
                foreach($rankingChangeTwo as $rankingTwo){
                    $rank = ($rankingOne['ranking'] + $rankingTwo['ranking']);
                    $tmpRank = [
                        "id" => $rankingOne['id'],
                        "ranking" => $rank
                    ];
                }
            }

            return $this->sortDescRanking($tmpRank, $valuesMonsters);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && empty($filterSubStatFour)) {
            
            $tmpRank = [];

            foreach($rankingChangeOne as  $rankingOne){
                foreach($rankingChangeTwo as $rankingTwo){
                    foreach($rankingChangeThree as $rankingThree){
                        $rank = ($rankingOne['ranking'] + $rankingTwo['ranking'] + $rankingThree['ranking']);
                        $tmpRank = [
                            "id" => $rankingOne['id'],
                            "ranking" => $rank
                        ];
                    }
                }
            }

            return $this->sortDescRanking($tmpRank, $valuesMonsters);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && !empty($filterSubStatFour) ) {
            
            $tmpRank = [];
            foreach($rankingChangeOne as  $rankingOne){
                foreach($rankingChangeTwo as $rankingTwo){
                    foreach($rankingChangeThree as $rankingThree){
                        foreach($rankingChangeFour as $rankingFour){
                            $rank = ($rankingOne['ranking'] + $rankingTwo['ranking'] + $rankingThree['ranking'] + $rankingFour['ranking']);
                            $tmpRank = [
                                "id" => $rankingOne['id'],
                                "ranking" => $rank
                            ];
                        }    
                    }
                }
            }
           
            return $this->sortDescRanking($tmpRank, $valuesMonsters);
        }
    }

    /**
     * real Ranking by filters tri DESC
     */
    public function sortDescRanking($rankFinal, $valuesMonsters)
    {
        return $this->getTmpRankingValuesMonsters(
            $valuesMonsters->getId(), 
            $valuesMonsters->getAwake(), 
            $valuesMonsters->getIdElementType()->getName(), 
            $valuesMonsters->getType(), 
            $valuesMonsters->getMonster(), 
            $valuesMonsters->getIdPreferedStats()->getName(),
            number_format($rankFinal['ranking'], 19, '.', ' ')
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
            usort($this->tmpRankingValuesMonsters, array($this, 'fonctionComparaisonRanking'));
        }

        return $this->tmpRankingValuesMonsters;
    }

    /**
     * tri par ordre décroissant
     */
    public function fonctionComparaisonRanking($a, $b) 
    {
        if($a['ranking'] != $b['ranking']) {
            return $a['ranking'] < $b['ranking'];
        }
    }
}
