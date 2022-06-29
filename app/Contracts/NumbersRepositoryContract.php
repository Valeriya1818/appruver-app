<?php

namespace App\Contracts;

interface NumbersRepositoryContract {

    /**
     * Create
     *
     * @param int $service_id
     * @param int $user_id
     * @param bool $active
     * @param bool $delete
     * @return int
     */
    public static function create(int $service_id, int $user_id, bool $active, bool $delete): int;

}
