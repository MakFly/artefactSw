<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class ManagerArtefacts
{
    /** @var string */
    private $skill1CritDmgMorePourcent = "[Skill 1] CRIT DMG +%";
    /** @var string */
    private $skill2CritDmgMorePourcent = "[Skill 2] CRIT DMG +%";
    /** @var string */
    private $skill3CritDmgMorePourcent = "[Skill 3] CRIT DMG +%";
    /** @var string */
    private $skill4CritDmgMorePourcent = "[Skill 4] CRIT DMG +%";
    /** @var string */
    private $skill1RecoveryMorePourcent = "[Skill 1] Recovery +%";
    /** @var string */
    private $skill2RecoveryMorePourcent = "[Skill 2] Recovery +%";
    /** @var string */
    private $skill3RecoveryMorePourcent = "[Skill 3] Recovery +%";
    /** @var string */
    private $skill1AccuracyMorePourcent = "[Skill 1] Accuracy +%";
    /** @var string */
    private $skill2AccuracyMorePourcent = "[Skill 2] Accuracy +%";
    /** @var string */
    private $skill3AccuracyMorePourcent = "[Skill 3] Accuracy +%";
    /** @var string */
    private $DamageDealtOnFireMorePourcent = "Damage Dealt on Fire +%";
    /** @var string */
    private $DamageDealtOnWaterMorePourcent = "Damage Dealt on Water +%";
    /** @var string */
    private $DamageDealtOnWindMorePourcent = "Damage Dealt on Wind +%";
    /** @var string */
    private $DamageDealtOnLightMorePourcent = "Damage Dealt on Light +%";
    /** @var string */
    private $DamageDealtOnDarkMorePourcent = "Damage Dealt on Dark +%";
    /** @var string */
    private $DamageReceivedFromFireLessPourcent = "Damage Received from Fire -%";
    /** @var string */
    private $DamageReceivedFromWaterLessPourcent = "Damage Received from Water -%";
    /** @var string */
    private $DamageReceivedFromWindLessPourcent = "Damage Received from Wind -%";
    /** @var string */
    private $DamageReceivedFromLightLessPourcent = "Damage Received from Light -%";
    /** @var string */
    private $DamageReceivedFromDarkLessPourcent = "Damage Received from Dark -%";
    /** @var string */
    private $ATKMoreProportionaltoLostHPUpToPourcent = "ATK+ Proportional to Lost HP up to %";
    /** @var string */
    private $DEFMoreProportionaltoLostHPUpToPourcent = "DEF+ Proportional to Lost HP up to %";
    /** @var string */
    private $SPDMoreProportionaltoLostHPUpToPourcent = "SPD+ Proportional to Lost HP up to %";
    /** @var string */
    private $ATKIncreasingEffectMorePourcent = "ATK Increasing Effect +%";
    /** @var string */
    private $DEFIncreasingEffectMorePourcent = "DEF Increasing Effect +%";
    /** @var string */
    private $SPDIncreasingEffectMorePourcent = "SPD Increasing Effect +%";
    /** @var string */
    private $CRITRateIncreasingEffectMorePourcent = "CRIT Rate Increasing Effect +%";
    /** @var string */
    private $DamageDealtbyCounterattackMorePourcent = "Damage Dealt by Counterattack +%";
    /** @var string */
    private $DamageDealtbyAttackingTogetherMorePourcent = "Damage Dealt by Attacking Together +%";
    /** @var string */
    private $BombDamageMorePourcent = "Bomb Damage +%";
    /** @var string */
    private $LifeDrainMorePourcent = "Life Drain +%";
    /** @var string */
    private $HPwhenRevivedMorePourcent = "HP when Revived +%";
    /** @var string */
    private $AttackBarwhenRevivedMorePourcent = "Attack Bar when Revived +%";
    /** @var string */
    private $DamageDealtbyReflectDMGMorePourcent = "Damage Dealt by Reflect DMG +%";
    /** @var string */
    private $AdditionalDamagebyPourcentOfHP = "Additional Damage by % of HP";
    /** @var string */
    private $AdditionalDamagebyPourcentOfATK = "Additional Damage by % of ATK";
    /** @var string */
    private $AdditionalDamagebyPourcentOfDEF = "Additional Damage by % of DEF";
    /** @var string */
    private $AdditionalDamagebyPourcentOfSPD = "Additional Damage by % of SPD";
    /** @var string */
    private $DamageReceivedUnderInabilityEffectsLessPourcent = "Damage Received Under Inability Effects -%";
    /** @var string */
    private $SPDUnderInabilityEffectsMorePourcent = "SPD Under Inability Effects +%";
    /** @var string */
    private $CRITDMGReceivedLessPourcent = "CRIT DMG Received -%";
    /** @var string */
    private $CrushingHitDMGMorePourcent = "Crushing Hit DMG +%";

    /**
     * @var $subStats
     */
    public function checkArtefactsByMonsters($subStats)
    {
        $subStatsArray = [];
        foreach($subStats as $values){
            $subStatsArray = [
                "key1" => $this->getSubsStatsSkill1critdmgmorepourcent($values),
                "key2" => $this->getSubsStatsSkill2critdmgmorepourcent($values),
                "key3" => $this->getSubsStatsSkill3critdmgmorepourcent($values),
                "key4" => $this->getSubsStatsSkill4critdmgmorepourcent($values),
            ];
        }
        
        return $subStatsArray;
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill1critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill1critdmgmorepourcent() === 2) {
            return $this->skill1CritDmgMorePourcent;
        }
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill2critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill2critdmgmorepourcent() === 2) {
            return $this->skill2CritDmgMorePourcent;
        }
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill3critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill3critdmgmorepourcent() === 2) {
            return $this->skill3CritDmgMorePourcent;
        }
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill4critdmgmorepourcent($subStats)
    {
        dump($subStats->getSkill4critdmgmorepourcent());
        if($subStats->getSkill4critdmgmorepourcent() === 2) {
            return $this->skill4CritDmgMorePourcent;
        }
    }
}