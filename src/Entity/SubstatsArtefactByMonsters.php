<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubstatsArtefactByMonsters
 *
 * @ORM\Table(name="substats_artefact_by_monsters", indexes={@ORM\Index(name="fk_id_monsters", columns={"id_monsters"})})
 * @ORM\Entity
 */
class SubstatsArtefactByMonsters
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 1 CRIT DMG +%", type="integer", nullable=false)
     */
    private $skill1CritDmg;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 2 CRIT DMG +%", type="integer", nullable=false)
     */
    private $skill2CritDmg;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 3 CRIT DMG +%", type="integer", nullable=false)
     */
    private $skill3CritDmg;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 4 CRIT DMG +%", type="integer", nullable=false)
     */
    private $skill4CritDmg;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 1 Recovery +%", type="integer", nullable=false)
     */
    private $skill1Recovery;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 2 Recovery +%", type="integer", nullable=false)
     */
    private $skill2Recovery;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 3 Recovery +%", type="integer", nullable=false)
     */
    private $skill3Recovery;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 1 Accruarcy +%", type="integer", nullable=false)
     */
    private $skill1Accruarcy;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 2 Accruarcy +%", type="integer", nullable=false)
     */
    private $skill2Accruarcy;

    /**
     * @var int
     *
     * @ORM\Column(name="Skill 3 Accruarcy +%", type="integer", nullable=false)
     */
    private $skill3Accruarcy;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt on Fire +%", type="integer", nullable=false)
     */
    private $damageDealtOnFire;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt on Water +%", type="integer", nullable=false)
     */
    private $damageDealtOnWater;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt on Wind +%", type="integer", nullable=false)
     */
    private $damageDealtOnWind;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt on Light +%", type="integer", nullable=false)
     */
    private $damageDealtOnLight;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt on Dark +%", type="integer", nullable=false)
     */
    private $damageDealtOnDark;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Received from Fire -%", type="integer", nullable=false)
     */
    private $damageReceivedFromFire;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Received from Water -%", type="integer", nullable=false)
     */
    private $damageReceivedFromWater;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Received from Wind -%", type="integer", nullable=false)
     */
    private $damageReceivedFromWind;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Received from Light -%", type="integer", nullable=false)
     */
    private $damageReceivedFromLight;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Received from Dark -%", type="integer", nullable=false)
     */
    private $damageReceivedFromDark;

    /**
     * @var int
     *
     * @ORM\Column(name="ATK+ Proportional to Lost HP up to %", type="integer", nullable=false)
     */
    private $atkProportionalToLostHpUpTo;

    /**
     * @var int
     *
     * @ORM\Column(name="DEF+ Proportional to Lost HP up to %", type="integer", nullable=false)
     */
    private $defProportionalToLostHpUpTo;

    /**
     * @var int
     *
     * @ORM\Column(name="SPD+ Proportional to Lost HP up to %", type="integer", nullable=false)
     */
    private $spdProportionalToLostHpUpTo;

    /**
     * @var int
     *
     * @ORM\Column(name="ATK Increasing Effect +%", type="integer", nullable=false)
     */
    private $atkIncreasingEffect;

    /**
     * @var int
     *
     * @ORM\Column(name="DEF Increasing Effect +%", type="integer", nullable=false)
     */
    private $defIncreasingEffect;

    /**
     * @var int
     *
     * @ORM\Column(name="SPD Increasing Effect +%", type="integer", nullable=false)
     */
    private $spdIncreasingEffect;

    /**
     * @var int
     *
     * @ORM\Column(name="CRIT Rate Increasing Effect +%", type="integer", nullable=false)
     */
    private $critRateIncreasingEffect;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt by Counterattack +%", type="integer", nullable=false)
     */
    private $damageDealtByCounterattack;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt by Attacking Together +%", type="integer", nullable=false)
     */
    private $damageDealtByAttackingTogether;

    /**
     * @var int
     *
     * @ORM\Column(name="Bomb Damage +%", type="integer", nullable=false)
     */
    private $bombDamage;

    /**
     * @var int
     *
     * @ORM\Column(name="Life Drain +%", type="integer", nullable=false)
     */
    private $lifeDrain;

    /**
     * @var int
     *
     * @ORM\Column(name="HP when Revived +%", type="integer", nullable=false)
     */
    private $hpWhenRevived;

    /**
     * @var int
     *
     * @ORM\Column(name="Attack Bar when Revived +%", type="integer", nullable=false)
     */
    private $attackBarWhenRevived;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Dealt by Reflect DMG +%", type="integer", nullable=false)
     */
    private $damageDealtByReflectDmg;

    /**
     * @var int
     *
     * @ORM\Column(name="Additional Damage by % of HP", type="integer", nullable=false)
     */
    private $additionalDamageByOfHp;

    /**
     * @var int
     *
     * @ORM\Column(name="Additional Damage by % of ATK", type="integer", nullable=false)
     */
    private $additionalDamageByOfAtk;

    /**
     * @var int
     *
     * @ORM\Column(name="Additional Damage by % of DEF", type="integer", nullable=false)
     */
    private $additionalDamageByOfDef;

    /**
     * @var int
     *
     * @ORM\Column(name="Additional Damage by % of SPD", type="integer", nullable=false)
     */
    private $additionalDamageByOfSpd;

    /**
     * @var int
     *
     * @ORM\Column(name="Damage Received Under Inability Effects -%", type="integer", nullable=false)
     */
    private $damageReceivedUnderInabilityEffects;

    /**
     * @var int
     *
     * @ORM\Column(name="SPD Under Inability Effects +%", type="integer", nullable=false)
     */
    private $spdUnderInabilityEffects;

    /**
     * @var int
     *
     * @ORM\Column(name="CRIT DMG Received -%", type="integer", nullable=false)
     */
    private $critDmgReceived;

    /**
     * @var int
     *
     * @ORM\Column(name="Crushing Hit DMG +%", type="integer", nullable=false)
     */
    private $crushingHitDmg;

    /**
     * @var \Monsters
     *
     * @ORM\ManyToOne(targetEntity="Monsters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_monsters", referencedColumnName="id")
     * })
     */
    private $idMonsters;


}
