<?php

namespace App\Services;

use App\Manager\RankingAllSkillsManager;
use App\Manager\RankingManager;
use App\Manager\RankingService;

class MonstersRankingServices {

    public function getResponseRanking($request, $monstersRepository)
    {
        /** Variable de class */
        $rankingAllSkillsManager = new RankingAllSkillsManager();
        $managerRanking = new RankingManager($rankingAllSkillsManager);
        $rankingMonstersSubStats = new RankingService($managerRanking);

        /* on récupère la valeur envoyée par la request ajax */
        $selectElement_type_form_name = $request->request->get('selectElement_type_form_name');
        $selectFlatType = $request->request->get('selectFlatType');
        $filterSubStatOne = $request->request->get('selectFormsubStatsType1');
        $filterSubStatTwo = $request->request->get('selectFormsubStatsType2');
        $filterSubStatThree = $request->request->get('selectFormsubStatsType3');
        $filterSubStatFour = $request->request->get('selectFormsubStatsType4');

        /** Variable static */
        $info = [];
        $i = 1;
        $filtersMonters = "";
        $filtersFlatTypeMonters = "";
        $rankings = "";

        
        /** PARTIE AVEC LE FILTRE ELEMENT TYPE */
        $filtersMonters = $monstersRepository->searchMonstersByFilters($selectElement_type_form_name, $selectFlatType);
        if(!empty($selectElement_type_form_name)) {
            if (!empty($selectFlatType) && !empty($filterSubStatOne) && empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
    
            if (!empty($selectFlatType) && !empty($filterSubStatOne) && !empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
    
            if (!empty($selectFlatType) && !empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && empty($filterSubStatFour)) {
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
    
            if (!empty($selectFlatType) && !empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && !empty($filterSubStatFour)) {
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
        } 


        /** PARTIE SANS LE FILTRE ELEMENT TYPE + SINON SI */
        if (empty($selectElement_type_form_name) && !empty($selectFlatType)) {
            if(!empty($filterSubStatOne) && empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
                $filtersFlatTypeMonters = $monstersRepository->searchMonstersByTypeOfMonsters($selectFlatType);
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersFlatTypeMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
            
            if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
                $filtersFlatTypeMonters = $monstersRepository->searchMonstersByTypeOfMonsters($selectFlatType);
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersFlatTypeMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }

            if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && empty($filterSubStatFour)) {
                $filtersFlatTypeMonters = $monstersRepository->searchMonstersByTypeOfMonsters($selectFlatType);
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersFlatTypeMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }

            if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && !empty($filterSubStatFour)) {
                $filtersFlatTypeMonters = $monstersRepository->searchMonstersByTypeOfMonsters($selectFlatType);
                $rankings = $rankingMonstersSubStats->getRankingSubStats($filtersFlatTypeMonters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }

            $filtersFlatTypeMonters = $monstersRepository->searchMonstersByTypeOfMonsters($selectFlatType);
        } 
        
        if(!empty($selectElement_type_form_name) && !empty($selectFlatType) && empty($filterSubStatOne) && empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
            $filtersFlatTypeMonters = $monstersRepository->searchMonstersByFilters($selectElement_type_form_name, $selectFlatType);
        }

        if(!empty($selectElement_type_form_name) && empty($selectFlatType) && empty($filterSubStatOne) && empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
            $filtersFlatTypeMonters = $monstersRepository->searchMonstersByElementsOfMonsters($selectElement_type_form_name);
        }

        if(empty($selectElement_type_form_name) && empty($selectFlatType) && empty($filterSubStatOne) && empty($filterSubStatTwo) && empty($filterSubStatThree) && empty($filterSubStatFour)) {
            $filtersFlatTypeMonters = $monstersRepository->findAll();
        }
        
        /** calcul du ranking */
        if(!empty($rankings)) {
            foreach($rankings as $monstersRanking){
                $info[] = [
                    "id" => $i,
                    "awake" => $monstersRanking['awake'],
                    "element" => $monstersRanking['element'],
                    "type" => $monstersRanking['type'],
                    "family" => $monstersRanking['family'],
                    "prefered_flat_stats" => $monstersRanking['prefered_flat_stats'],
                    "rank" => $monstersRanking['ranking']
                ];       
                ++$i;
            }                         
        } else {
            foreach($filtersFlatTypeMonters as $valuesFiltersMonster){
                $info[] = [
                    "id" => $i,
                    "awake" => $valuesFiltersMonster->getAwake(),
                    "element" => $valuesFiltersMonster->getIdElementType()->getName(),
                    "type" => $valuesFiltersMonster->getType(),
                    "family" => $valuesFiltersMonster->getMonster(),
                    "prefered_flat_stats" => $valuesFiltersMonster->getIdPreferedStats()->getName(),
                    "rank" => $valuesFiltersMonster->getRanking()
                ];       
                ++$i;
            }
        }

        return $info;
    }
}