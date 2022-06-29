<?php

namespace App\Repositories;

use App\Contracts\NumbersRepositoryContract;
use App\Models\Number;

class NumbersRepository implements NumbersRepositoryContract {

    /**
     * Create
     *
     * @param int $service_id
     * @param int $user_id
     * @param bool $active
     * @param bool $delete
     * @return int
     */
    static public function create(int $service_id, int $user_id, bool $active = true, bool $delete = false): int
    {
        $number_len = 12;
        $user_id_len = mb_strlen($user_id);

        $number = false;
        if (($number_len - 2) >= $user_id_len) {
            $timestamp = str_replace('.', '', microtime(true));
            $offset = $number_len - $user_id_len;
            $code = mb_substr($timestamp, -$offset);
            $number = $code.$user_id;
        }

        if (!$number) {
            exit("You created too many numbers");
        }

        $item = new Number();
        $item->number = $number;
        $item->service_id = $service_id;
        $item->user_id = $user_id;
        $item->active = $active;
        $item->delete = $delete;
        $item->save();

        return $item->id;
    }

}

