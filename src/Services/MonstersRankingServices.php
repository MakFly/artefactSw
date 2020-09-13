<?php

namespace App\Services;

use App\Manager\RankingAllSkillsManager;
use App\Manager\RankingManager;
use App\Services\RankingService;

class MonstersRankingServices {

    protected $nameArtefact = [ 2 => 'ATK', 5 => 'HP', 7 => 'DEF'];

    public function getResponseRanking($request, $monstersRepository)
    {
        /** Variable de class */
        $rankingAllSkillsManager = new RankingAllSkillsManager();
        $managerRanking = new RankingManager($rankingAllSkillsManager);
        $rankingMonstersSubStats = new RankingService($managerRanking);

        /* on récupère la valeur envoyée par la request ajax */
        $selectElement_type_form_name = $request->request->get('selectElement_type_form_name');
        $selectFlatType = $request->request->get('selectFlatType');
        $selectprefered_stats_name = $request->request->get('selectprefered_stats_name');
        $filterSubStatOne = $request->request->get('selectFormsubStatsType1');
        $filterSubStatTwo = $request->request->get('selectFormsubStatsType2');
        $filterSubStatThree = $request->request->get('selectFormsubStatsType3');
        $filterSubStatFour = $request->request->get('selectFormsubStatsType4');

        /** Variable static */
        $info = [];
        $infoNoStatExact = [];
        $i = 1;
        $filtersMonters = "";
        
        $filterRanking = "";
        $ranking = "";
        $stat = "";

        /** 
         * CREER LES FILTRES SUIVANT 
         * - !empty(elementTypeForm) && !empty(preferedSubStat)
         */


        /** PARTIE AVEC LE FILTRE ELEMENT TYPE sans les autres substat */
        if(
            !empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && empty($filterSubStatOne)
            && empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filtersMonters = $monstersRepository->searchMonstersByThirdFilters($selectElement_type_form_name, $selectFlatType, $selectprefered_stats_name);
            dump('tu passes ici si les 3 premiers filtres ont été sélectionné ');
        }

        if (!empty($filtersMonters)) {
            foreach($filtersMonters as $monstersRanking){
                $info[] = [
                    "id" => $i,
                    "awake" => $monstersRanking['awake'],
                    "element" => $monstersRanking['ELEMENT'],
                    "type" => $monstersRanking['type'],
                    "family" => $monstersRanking['monster'],
                    "prefered_flat_stats" => $monstersRanking['PREFEREDSTAT'],
                    "rank" => $monstersRanking['ranking']
                ];       
                ++$i;
            }
        }

        /** 
         * Start All filter ******************************************************************************************************************************************
         * 1 subs stats filtré
         */
        if(
            !empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        /** 
         * 2 subs stats filtré
         */
        if(
            !empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        /** 
         * 3 subs stats filtré
         */
        if(
            !empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        /** 
         * 4 subs stats filtré
         */
        if(
            !empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && !empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }
        /* END All filter ******************************************************************************************************************************************

        /**
         * START Filtrage sans le Type de monstre *************************************************************************************************************************************
         */
        if(
            !empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            !empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            !empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            !empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && !empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters($selectElement_type_form_name, "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }
        /**
         * END Filtrage not filter Type of monsters *************************************************************************************************************************************
         */

         /**
         * START Filtrage not filter element of monsters *************************************************************************************************************************************
         */
        if(
            empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            empty($selectElement_type_form_name)
            && !empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && !empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", $selectFlatType, $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }
        /**
         * END Filtrage not filter element of monsters *************************************************************************************************************************************
         */

         /**
         * START Filtrage not filter element & type of monsters *************************************************************************************************************************************
         */
        if(
            empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        if(
            empty($selectElement_type_form_name)
            && empty($selectFlatType)
            && !empty($selectprefered_stats_name)
            && !empty($filterSubStatOne)
            && !empty($filterSubStatTwo)
            && !empty($filterSubStatThree)
            && !empty($filterSubStatFour)
        ) {
            $filterRanking = $monstersRepository->searchMonstersBySubStatsFilters("", "", $selectprefered_stats_name);
            $ranking = $rankingMonstersSubStats->getRankingSubStats($filterRanking, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }
        /**
         * END Filtrage not filter element & type of monsters *************************************************************************************************************************************
         */

        /**
         * Show result
         */
        if(!empty($ranking)) {
            if (array_key_exists($selectprefered_stats_name, $this->nameArtefact)) {
                $stat = $this->nameArtefact[$selectprefered_stats_name];    
            } 
            foreach ($ranking as $rankingValues) {
                if($rankingValues['prefered_flat_stats'] == $stat) {
                    $info[] = [
                        "awake" => $rankingValues['awake'],
                        "element" => $rankingValues['element'],
                        "type" => $rankingValues['type'],
                        "family" => $rankingValues['family'],
                        "prefered_flat_stats" => $rankingValues['prefered_flat_stats'],
                        "rank" => $rankingValues['ranking']
                    ];        
                } else {
                    $infoNoStatExact[] = [
                        "awake" => $rankingValues['awake'],
                        "element" => $rankingValues['element'],
                        "type" => $rankingValues['type'],
                        "family" => $rankingValues['family'],
                        "prefered_flat_stats" => $rankingValues['prefered_flat_stats'],
                        "rank" => $rankingValues['ranking']
                    ];
                }
            }
        }

        $resultFinal = [];
        $finalInfo = array_merge($info, $infoNoStatExact);
        $nbResult = count($finalInfo);
        
        $id = [];
        for($i=0;$i<=$nbResult;$i++){
            $id[] = $i;
        }

        
        foreach ($finalInfo as $finalInfoKeys => $finalInfoValues) {
            if($finalInfoKeys == $id[$finalInfoKeys]) {
                $resultFinal[] = [
                    "id" => $finalInfoKeys+1,
                    "awake" => $finalInfoValues['awake'],
                    "element" => $finalInfoValues['element'],
                    "type" => $finalInfoValues['type'],
                    "family" => $finalInfoValues['family'],
                    "prefered_flat_stats" => $finalInfoValues['prefered_flat_stats'],
                    "rank" => $finalInfoValues['rank']
                ];
            }
        }

        return $resultFinal;
    }
}