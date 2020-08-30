<?php

namespace App\Services;

use App\Manager\ManagerArtefacts;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class MontersByArtefactsSubsServices
{
    private $managerArtefacts;

    public function __construct(ManagerArtefacts $managerArtefacts)
    {
        $this->managerArtefacts = $managerArtefacts;
    }

    /**
     * @var $dataArtefactByMonsters
     * 
     * @return response
     */
    public function response($dataArtefactByMonsters): Response
    {
        
        $info1 = (isset($dataArtefactByMonsters['key1'])) ? $dataArtefactByMonsters['key1'] : "";
        $info2 = (isset($dataArtefactByMonsters['key2'])) ? $dataArtefactByMonsters['key2'] : "";
        $info3 = (isset($dataArtefactByMonsters['key3'])) ? $dataArtefactByMonsters['key3'] : "";
        $info4 = (isset($dataArtefactByMonsters['key4'])) ? $dataArtefactByMonsters['key4'] : "";

        /* On renvoie une réponse encodée en JSON */
        $response = new Response(json_encode(array(
            'info' => $info1,
            'info2' => $info2,
            'info3' => $info3,
            'info4' => $info4,
            // 'info5' => $dataArtefactByMonsters['key5'],
            // 'info6' => $dataArtefactByMonsters['key6'],
            // 'info7' => $dataArtefactByMonsters['key7'],
            // 'info8' => $dataArtefactByMonsters['key8'],
            // 'info9' => $dataArtefactByMonsters['key9'],
            // 'info10' => $dataArtefactByMonsters['key10'],
            // 'info11' => $dataArtefactByMonsters['key11'],
            // 'info12' => $dataArtefactByMonsters['key12'],
            // 'info13' => $dataArtefactByMonsters['key13'],
            // 'info14' => $dataArtefactByMonsters['key14'],
            // 'info15' => $dataArtefactByMonsters['key15'],
            // 'info16' => $dataArtefactByMonsters['key16'],
            // 'info17' => $dataArtefactByMonsters['key17'],
            // 'info18' => $dataArtefactByMonsters['key18'],
            // 'info19' => $dataArtefactByMonsters['key19'],
            // 'info20' => $dataArtefactByMonsters['key20'],
            // 'info21' => $dataArtefactByMonsters['key21'],
            // 'info22' => $dataArtefactByMonsters['key22'],
        )));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function showArtefactsByMonsters($artefactByMonsters)
    {
        return $this->managerArtefacts->checkArtefactsByMonsters($artefactByMonsters);
    }
}
