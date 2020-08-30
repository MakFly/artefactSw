<?php

namespace App\Services;

use App\Manager\ManagerArtefacts;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @author inopan
 */
class MontersByArtefactsSubsServices
{
    /** 
     * @var ManagerArtefacts $managerArtefacts 
     */
    private $managerArtefacts;
    
    /** 
     * @var TranslatorInterface $translatorInterface 
     */
    private $translatorInterface;

    public function __construct(ManagerArtefacts $managerArtefacts, TranslatorInterface $translatorInterface)
    {
        $this->managerArtefacts = $managerArtefacts;
        $this->translatorInterface = $translatorInterface;
    }

    /**
     *
     * @param [type] $dataArtefactByMonsters
     * @return Response
     */
    public function response($dataArtefactByMonsters): Response
    {
        /* On renvoie une réponse encodée en JSON */
        $response = new Response(json_encode(array(
            'info' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill1Dmg']),
            'info2' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill2Dmg']),
            'info3' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill3Dmg']),
            'info4' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill4Dmg'],),
            'info5' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill1Recovery']),
            'info6' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill2Recovery']),
            'info7' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill3Recovery']),
            'info8' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill1Accuracy']),
            'info9' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill2Accuracy']),
            'info10' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['skill3Accuracy']),
            'info11' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealFire']),
            'info12' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealWater']),
            'info13' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealWind']),
            'info14' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealLight']),
            'info15' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealDark']),
            'info16' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageReceivedFire']),
            'info17' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageReceivedWater']),
            'info18' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageReceivedWind']),
            'info19' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageReceivedLight']),
            'info20' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageReceivedDark']),
            'info21' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['atkMoreProportionalToLost']),
            'info22' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['defMoreProportionalToLost']),
            'info23' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['spdMoreProportionalToLost']),
            'info24' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['atkIncreasingEffect']),
            'info25' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['defIncreasingEffect']),
            'info26' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['spdIncreasingEffect']),
            'info27' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['critRateIncreasingEffect']),
            'info28' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealByCounterAtk']),
            'info29' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealByAttackingTogether']),
            'info30' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['bombDamage']),
            'info31' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['lifeDrain']),
            'info32' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['hpWhenRevive']),
            'info33' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['atkBarWhenRevive']),
            'info34' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageDealByReflectDmg']),
            'info35' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['additionalDamageByHp']),
            'info36' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['additionalDamageByAtk']),
            'info37' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['additionalDamageByDef']),
            'info38' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['additionalDamageBySpd']),
            'info39' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['damageReceivedUnderInabilityEffect']),
            'info40' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['spdUnderInabilityEffect']),
            'info41' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['critDmgReceived']),
            'info42' => $this->getDataArtefactByMonstersByKey($dataArtefactByMonsters['crushIngHitDmg'])
        )));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     *
     * @param string $key
     * @param [type] $value
     */
    public function getDataArtefactByMonstersByKey($value)
    {
        $info = (isset($value)) ? $value : "";
        return $info;
    }

    /**
     *
     * @param [type] $artefactByMonsters
     * @return array
     */
    public function showArtefactsByMonsters($artefactByMonsters)
    {
        return $this->managerArtefacts->checkArtefactsByMonsters($artefactByMonsters, $this->translatorInterface);
    }
}
