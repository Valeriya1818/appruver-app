<?php

namespace App\Repositories;

use App\Contracts\ServicesRepositoryContract;
use App\Models\Service;

class ServicesRepository implements ServicesRepositoryContract {

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
    static public function create(string $name, int $user_id, string $url, bool $active = true, bool $delete = false): int
    {
        $item = new Service();
        $item->name = $name;
        $item->user_id = $user_id;
        $item->url = $url;
        $item->active = $active;
        $item->delete = $delete;
        $item->save();

        return $item->id;
    }

}

