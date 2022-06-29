<?php

namespace App\Contracts;

interface ServicesRepositoryContract {

    /**
     * Create
     *
     * @param string $name
     * @param int $user_id
     * @param string $url
     * @param bool $active
     * @param bool $delete
     * @return int
     */
    public static function create(string $name, int $user_id, string $url, bool $active, bool $delete): int;

}
