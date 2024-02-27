<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public bool $myPersistentModal = false;
    public bool $myPersistentModal2 = false;
    public bool $myPersistentModal3 = false;

    public function openModal()
    {
        $this->myPersistentModal = true;
        $this->myPersistentModal2 = true;
        $this->myPersistentModal3 = true;
    }
    public function render()
    {
        return view('livewire.projects');
    }
}
