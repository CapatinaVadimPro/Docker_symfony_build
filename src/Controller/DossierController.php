<?php

namespace App\Controller;

use App\Entity\Dossier;
use App\Repository\DossierRepository;
use PhpOffice\PhpSpreadsheet\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints\DateTime;


use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/dossier", name="dossier.")
 */
class DossierController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(DossierRepository $dossierRepository)
    {
        $dossiers = $dossierRepository->findAll();

        return $this->render('dossier/index.html.twig', [
            'dossiers' => $dossiers
        ]);
    }

    /**
     * @Route("/putdata", name="putdata")
     * @throws Exception
     */
    public function setData()
    {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setReadDataOnly(true);

        $spreadSheet = $reader->load('../doc/Dossier.xlsx');

        $dossier = new Dossier();

        $em = $this->getDoctrine()->getManager();



        /*$test = $spreadSheet->getActiveSheet()->getCellByColumnAndRow(13, 2)->getValue();
        /*$dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($test);
        $df = date("d/m/Y", $dt->getTimestamp());*/
        for ($row = 2 ; $row<714; $row++) {
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue() != Null) {
                $dossier->setOldId($spreadSheet->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue() != Null) {
                $dossier->setSociete($spreadSheet->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue() != Null) {
                $dossier->setIntituleDeLaFormation($spreadSheet->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue() != Null) {
                $dossier->setLieu($spreadSheet->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue() != Null) {
                $dossier->setFinanceur($spreadSheet->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue() != Null) {
                $dossier->setTypeDeFormation($spreadSheet->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(7, $row)->getValue() != Null) {
                $dossier->setCodeDireccte($spreadSheet->getActiveSheet()->getCellByColumnAndRow(7, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(8, $row)->getValue() != Null) {
                $dossier->setCodeAction($spreadSheet->getActiveSheet()->getCellByColumnAndRow(8, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(9, $row)->getValue() != Null) {
                $dossier->setNiveau($spreadSheet->getActiveSheet()->getCellByColumnAndRow(9, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(10, $row)->getValue() != Null) {
                $dossier->setCatDeFormation($spreadSheet->getActiveSheet()->getCellByColumnAndRow(10, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(11, $row)->getValue() != Null) {
                $dossier->setBonDeCommande($spreadSheet->getActiveSheet()->getCellByColumnAndRow(11, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(12, $row)->getValue() != Null) {
                $tmp = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($spreadSheet->getActiveSheet()->getCellByColumnAndRow(12, $row)->getValue())->getTimestamp();
                $dt = new \DateTime( date ("Y-m-d", $tmp));
                $dossier->setDebutFormation($dt);
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue() != Null) {
                $tmp = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($spreadSheet->getActiveSheet()->getCellByColumnAndRow(13, $row)->getValue())->getTimestamp();
                $dt = new DateTime( date ("Y-m-d", $tmp));
                $dossier->setFinFormation($dt);}
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(14, $row)->getValue() != Null) {
                $dossier->setNombreDeCandidat($spreadSheet->getActiveSheet()->getCellByColumnAndRow(14, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(15, $row)->getValue() != Null) {
                $tmp = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($spreadSheet->getActiveSheet()->getCellByColumnAndRow(15, $row)->getValue())->getTimestamp();
                $dt = new DateTime( date ("Y-m-d", $tmp));
                $dossier->setDateDeCreation($dt);
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(16, $row)->getValue() != Null) {
                $dossier->setHeuresTotales($spreadSheet->getActiveSheet()->getCellByColumnAndRow(16, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(17, $row)->getValue() != Null) {
                $dossier->setHeuresEnCentre($spreadSheet->getActiveSheet()->getCellByColumnAndRow(17, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(18, $row)->getValue() != Null) {
                $dossier->setHeuresEnEntreprise($spreadSheet->getActiveSheet()->getCellByColumnAndRow(18, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(19, $row)->getValue() != Null) {
                $dossier->setJourneesTotales($spreadSheet->getActiveSheet()->getCellByColumnAndRow(19, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(20, $row)->getValue() != Null) {
                $dossier->setJourneesEnCentre($spreadSheet->getActiveSheet()->getCellByColumnAndRow(20, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(21, $row)->getValue() != Null) {
                $dossier->setJourneesEnEntreprise($spreadSheet->getActiveSheet()->getCellByColumnAndRow(21, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(22, $row)->getValue() != Null) {
                $dossier->setNotes($spreadSheet->getActiveSheet()->getCellByColumnAndRow(22, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(23, $row)->getValue() != Null) {
                $dossier->setCompte($spreadSheet->getActiveSheet()->getCellByColumnAndRow(23, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(24, $row)->getValue() != Null) {
                $dossier->setLieuFormation($spreadSheet->getActiveSheet()->getCellByColumnAndRow(24, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(25, $row)->getValue() != Null) {
                $dossier->setTarifContracte($spreadSheet->getActiveSheet()->getCellByColumnAndRow(25, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(26, $row)->getValue() != Null) {
                $dossier->setStatut($spreadSheet->getActiveSheet()->getCellByColumnAndRow(26, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(27, $row)->getValue() != Null) {
                $dossier->setContactDossier($spreadSheet->getActiveSheet()->getCellByColumnAndRow(27, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(28,$row)->getValue() != Null) {
                $dossier->setDonneurDOrdre($spreadSheet->getActiveSheet()->getCellByColumnAndRow(28, $row)->getValue());
            }
            if ($spreadSheet->getActiveSheet()->getCellByColumnAndRow(29, $row)->getValue() != Null) {
                $dossier->setVersionFormation($spreadSheet->getActiveSheet()->getCellByColumnAndRow(29, $row)->getValue());
            }
        }
        $em->persist($dossier);
        $em->flush();

        $this->addFlash('succes', 'Data upload');

        return $this->redirect($this->generateUrl('dossier.index'));

        /*return $this->render('dossier/get.html.twig', [
            'data' => $df
        ]);*/

    }

}
