<?php

namespace App\UseCases\Contracts\Admin;

interface GetDataDashboardInterface {

    /**
     * Función para retornar la data principal
     *
     * @return array
     */
    public function handle(): array;
}