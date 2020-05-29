<?php

namespace App\Entity;

use App\Repository\DossierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DossierRepository::class)
 */
class Dossier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $old_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule_de_la_formation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $financeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_de_formation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_direccte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_action;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cat_de_formation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bon_de_commande;

    /**
     * @ORM\Column(type="date")
     */
    private $debut_formation;

    /**
     * @ORM\Column(type="date")
     */
    private $fin_formation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_candidat;

    /**
     * @ORM\Column(type="date")
     */
    private $date_de_creation;

    /**
     * @ORM\Column(type="integer")
     */
    private $heures_totales;

    /**
     * @ORM\Column(type="integer")
     */
    private $heures_en_centre;

    /**
     * @ORM\Column(type="integer")
     */
    private $heures_en_entreprise;

    /**
     * @ORM\Column(type="integer")
     */
    private $journees_totales;

    /**
     * @ORM\Column(type="integer")
     */
    private $journees_en_centre;

    /**
     * @ORM\Column(type="integer")
     */
    private $journees_en_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $compte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_formation;

    /**
     * @ORM\Column(type="integer")
     */
    private $tarif_contracte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contact_dossier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $donneur_dOrdre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $version_formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOldId(): ?int
    {
        return $this->old_id;
    }

    public function setOldId(int $old_id): self
    {
        $this->old_id = $old_id;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getIntituleDeLaFormation(): ?string
    {
        return $this->intitule_de_la_formation;
    }

    public function setIntituleDeLaFormation(string $intitule_de_la_formation): self
    {
        $this->intitule_de_la_formation = $intitule_de_la_formation;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getFinanceur(): ?string
    {
        return $this->financeur;
    }

    public function setFinanceur(string $financeur): self
    {
        $this->financeur = $financeur;

        return $this;
    }

    public function getTypeDeFormation(): ?string
    {
        return $this->type_de_formation;
    }

    public function setTypeDeFormation(string $type_de_formation): self
    {
        $this->type_de_formation = $type_de_formation;

        return $this;
    }

    public function getCodeDireccte(): ?string
    {
        return $this->code_direccte;
    }

    public function setCodeDireccte(string $code_direccte): self
    {
        $this->code_direccte = $code_direccte;

        return $this;
    }

    public function getCodeAction(): ?string
    {
        return $this->code_action;
    }

    public function setCodeAction(string $code_action): self
    {
        $this->code_action = $code_action;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getCatDeFormation(): ?string
    {
        return $this->cat_de_formation;
    }

    public function setCatDeFormation(string $cat_de_formation): self
    {
        $this->cat_de_formation = $cat_de_formation;

        return $this;
    }

    public function getBonDeCommande(): ?string
    {
        return $this->bon_de_commande;
    }

    public function setBonDeCommande(string $bon_de_commande): self
    {
        $this->bon_de_commande = $bon_de_commande;

        return $this;
    }

    public function getDebutFormation(): ?\DateTimeInterface
    {
        return $this->debut_formation;
    }

    public function setDebutFormation(\DateTimeInterface $debut_formation): self
    {
        $this->debut_formation = $debut_formation;

        return $this;
    }

    public function getFinFormation(): ?\DateTimeInterface
    {
        return $this->fin_formation;
    }

    public function setFinFormation(\DateTimeInterface $fin_formation): self
    {
        $this->fin_formation = $fin_formation;

        return $this;
    }

    public function getNombreDeCandidat(): ?int
    {
        return $this->nombre_de_candidat;
    }

    public function setNombreDeCandidat(int $nombre_de_candidat): self
    {
        $this->nombre_de_candidat = $nombre_de_candidat;

        return $this;
    }

    public function getDateDeCreation(): ?\DateTimeInterface
    {
        return $this->date_de_creation;
    }

    public function setDateDeCreation(\DateTimeInterface $date_de_creation): self
    {
        $this->date_de_creation = $date_de_creation;

        return $this;
    }

    public function getHeuresTotales(): ?int
    {
        return $this->heures_totales;
    }

    public function setHeuresTotales(int $heures_totales): self
    {
        $this->heures_totales = $heures_totales;

        return $this;
    }

    public function getHeuresEnCentre(): ?int
    {
        return $this->heures_en_centre;
    }

    public function setHeuresEnCentre(int $heures_en_centre): self
    {
        $this->heures_en_centre = $heures_en_centre;

        return $this;
    }

    public function getHeuresEnEntreprise(): ?int
    {
        return $this->heures_en_entreprise;
    }

    public function setHeuresEnEntreprise(int $heures_en_entreprise): self
    {
        $this->heures_en_entreprise = $heures_en_entreprise;

        return $this;
    }

    public function getJourneesTotales(): ?int
    {
        return $this->journees_totales;
    }

    public function setJourneesTotales(int $journees_totales): self
    {
        $this->journees_totales = $journees_totales;

        return $this;
    }

    public function getJourneesEnCentre(): ?int
    {
        return $this->journees_en_centre;
    }

    public function setJourneesEnCentre(int $journees_en_centre): self
    {
        $this->journees_en_centre = $journees_en_centre;

        return $this;
    }

    public function getJourneesEnEntreprise(): ?int
    {
        return $this->journees_en_entreprise;
    }

    public function setJourneesEnEntreprise(int $journees_en_entreprise): self
    {
        $this->journees_en_entreprise = $journees_en_entreprise;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getCompte(): ?string
    {
        return $this->compte;
    }

    public function setCompte(string $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    public function getLieuFormation(): ?string
    {
        return $this->lieu_formation;
    }

    public function setLieuFormation(string $lieu_formation): self
    {
        $this->lieu_formation = $lieu_formation;

        return $this;
    }

    public function getTarifContracte(): ?int
    {
        return $this->tarif_contracte;
    }

    public function setTarifContracte(int $tarif_contracte): self
    {
        $this->tarif_contracte = $tarif_contracte;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getContactDossier(): ?string
    {
        return $this->contact_dossier;
    }

    public function setContactDossier(string $contact_dossier): self
    {
        $this->contact_dossier = $contact_dossier;

        return $this;
    }

    public function getDonneurDOrdre(): ?string
    {
        return $this->donneur_dOrdre;
    }

    public function setDonneurDOrdre(string $donneur_dOrdre): self
    {
        $this->donneur_dOrdre = $donneur_dOrdre;

        return $this;
    }

    public function getVersionFormation(): ?string
    {
        return $this->version_formation;
    }

    public function setVersionFormation(string $version_formation): self
    {
        $this->version_formation = $version_formation;

        return $this;
    }
}
