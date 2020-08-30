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
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="skill1CritDmgMorePourcent", type="integer", nullable=false)
     */
    protected $skill1critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill2CritDmgMorePourcent", type="integer", nullable=false)
     */
    protected $skill2critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill3CritDmgMorePourcent", type="integer", nullable=false)
     */
    protected $skill3critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill4CritDmgMorePourcent", type="integer", nullable=false)
     */
    protected $skill4critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill1RecoveryMorePourcent", type="integer", nullable=false)
     */
    protected $skill1recoverymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill2RecoveryMorePourcent", type="integer", nullable=false)
     */
    protected $skill2recoverymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill3RecoveryMorePourcent", type="integer", nullable=false)
     */
    protected $skill3recoverymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill1AccuracyMorePourcent", type="integer", nullable=false)
     */
    protected $skill1accuracymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill2AccuracyMorePourcent", type="integer", nullable=false)
     */
    protected $skill2accuracymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill3AccuracyMorePourcent", type="integer", nullable=false)
     */
    protected $skill3accuracymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnFireMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtonfiremorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnWaterMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtonwatermorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnWindMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtonwindmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnLightMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtonlightmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnDarkMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtondarkmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromFireLessPourcent", type="integer", nullable=false)
     */
    protected $damagereceivedfromfirelesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromWaterLessPourcent", type="integer", nullable=false)
     */
    protected $damagereceivedfromwaterlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromWindLessPourcent", type="integer", nullable=false)
     */
    protected $damagereceivedfromwindlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromLightLessPourcent", type="integer", nullable=false)
     */
    protected $damagereceivedfromlightlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromDarkLessPourcent", type="integer", nullable=false)
     */
    protected $damagereceivedfromdarklesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="ATKMoreProportionaltoLostHPUpToPourcent", type="integer", nullable=false)
     */
    protected $atkmoreproportionaltolosthpuptopourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DEFMoreProportionaltoLostHPUpToPourcent", type="integer", nullable=false)
     */
    protected $defmoreproportionaltolosthpuptopourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="SPDMoreProportionaltoLostHPUpToPourcent", type="integer", nullable=false)
     */
    protected $spdmoreproportionaltolosthpuptopourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="ATKIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    protected $atkincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DEFIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    protected $defincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="SPDIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    protected $spdincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="CRITRateIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    protected $critrateincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtbyCounterattackMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtbycounterattackmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtbyAttackingTogetherMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtbyattackingtogethermorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="BombDamageMorePourcent", type="integer", nullable=false)
     */
    protected $bombdamagemorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="LifeDrainMorePourcent", type="integer", nullable=false)
     */
    protected $lifedrainmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="HPwhenRevivedMorePourcent", type="integer", nullable=false)
     */
    protected $hpwhenrevivedmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="AttackBarwhenRevivedMorePourcent", type="integer", nullable=false)
     */
    protected $attackbarwhenrevivedmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtbyReflectDMGMorePourcent", type="integer", nullable=false)
     */
    protected $damagedealtbyreflectdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfHP", type="integer", nullable=false)
     */
    protected $additionaldamagebypourcentofhp;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfATK", type="integer", nullable=false)
     */
    protected $additionaldamagebypourcentofatk;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfDEF", type="integer", nullable=false)
     */
    protected $additionaldamagebypourcentofdef;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfSPD", type="integer", nullable=false)
     */
    protected $additionaldamagebypourcentofspd;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedUnderInabilityEffectsLessPourcent", type="integer", nullable=false)
     */
    protected $damagereceivedunderinabilityeffectslesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="SPDUnderInabilityEffectsMorePourcent", type="integer", nullable=false)
     */
    protected $spdunderinabilityeffectsmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="CRITDMGReceivedLessPourcent", type="integer", nullable=false)
     */
    protected $critdmgreceivedlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="CrushingHitDMGMorePourcent", type="integer", nullable=false)
     */
    protected $crushinghitdmgmorepourcent;

    /**
     * @var \Monsters
     *
     * @ORM\ManyToOne(targetEntity="Monsters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_monsters", referencedColumnName="id")
     * })
     */
    protected $idMonsters;


    /**
     * Get the value of idMonsters
     *
     * @return  \Monsters
     */ 
    public function getIdMonsters()
    {
        return $this->idMonsters;
    }

    /**
     * Get the value of crushinghitdmgmorepourcent
     *
     * @return  int
     */ 
    public function getCrushinghitdmgmorepourcent()
    {
        return $this->crushinghitdmgmorepourcent;
    }

    /**
     * Get the value of critdmgreceivedlesspourcent
     *
     * @return  int
     */ 
    public function getCritdmgreceivedlesspourcent()
    {
        return $this->critdmgreceivedlesspourcent;
    }

    /**
     * Get the value of skill1critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill1critdmgmorepourcent()
    {
        return $this->skill1critdmgmorepourcent;
    }

    /**
     * Get the value of spdunderinabilityeffectsmorepourcent
     *
     * @return  int
     */ 
    public function getSpdunderinabilityeffectsmorepourcent()
    {
        return $this->spdunderinabilityeffectsmorepourcent;
    }

    /**
     * Get the value of damagereceivedunderinabilityeffectslesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedunderinabilityeffectslesspourcent()
    {
        return $this->damagereceivedunderinabilityeffectslesspourcent;
    }

    /**
     * Get the value of additionaldamagebypourcentofspd
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofspd()
    {
        return $this->additionaldamagebypourcentofspd;
    }

    /**
     * Get the value of additionaldamagebypourcentofdef
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofdef()
    {
        return $this->additionaldamagebypourcentofdef;
    }

    /**
     * Get the value of additionaldamagebypourcentofatk
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofatk()
    {
        return $this->additionaldamagebypourcentofatk;
    }

    /**
     * Get the value of additionaldamagebypourcentofhp
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofhp()
    {
        return $this->additionaldamagebypourcentofhp;
    }

    /**
     * Get the value of skill2critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill2critdmgmorepourcent()
    {
        return $this->skill2critdmgmorepourcent;
    }

    /**
     * Get the value of skill3critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill3critdmgmorepourcent()
    {
        return $this->skill3critdmgmorepourcent;
    }

    /**
     * Get the value of skill4critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill4critdmgmorepourcent()
    {
        return $this->skill4critdmgmorepourcent;
    }
}
