<?php

namespace App\Service;

use App\Entity\Season;
use App\Repository\SeasonRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class SelectedSeasonService
{
    private int $selectedSeason = 1;

    public function __construct(private RequestStack $requestStack, private SeasonRepository $seasonRepository)
    {}

    public function getSelectedSeason(): ?Season
    {
        if($this->requestStack->getCurrentRequest()->query->has('season')) {
            $this->selectedSeason = (int) $this->requestStack->getCurrentRequest()->query->get('season');
        }
        $seasonData = $this->seasonRepository->findOneBy(['number' => $this->selectedSeason, 'program' => $this->requestStack->getCurrentRequest()->attributes->get('program')]);
        return $seasonData;
    }
}