<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Repositories\ServicesRepository;
use App\Repositories\NumbersRepository;

class RegisterUserServiceListener
{
    private ServicesRepository $servicesRepository;
    private NumbersRepository $numbersRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->servicesRepository = new ServicesRepository();
        $this->numbersRepository = new NumbersRepository();
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(object $event): void
    {
        $user_id = $event->user->id;
        $serviceId = $this->servicesRepository->create('Service1', $user_id, '');
        if ($serviceId > 0) {
            $this->numbersRepository->create($serviceId, $user_id);
        }
    }
}
