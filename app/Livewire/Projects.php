<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public bool $myPersistentModal = false;
    public bool $myPersistentModal2 = false;
    public bool $myPersistentModal3 = false;
    public bool $myPersistentModal4 = false;

    public $barangayrecordsystem = 'https://youtu.be/rp-VY-y1oGs?si=ZR80LRcV-a7EO-M5';

    public $sjbmc = 'https://youtu.be/QpB0usKbhTU?si=PDaiyUSwpdhR_XRI';

    public $lazy = 'https://youtu.be/n3ShQvM3do8?si=VaJs_pM4tlfqFmEL';

    public $portal = 'https://youtu.be/2jMDMhAPTjk?si=ctrI3splX1jPJD9Y';




    public function redirectToVideoLink()
    {
        return redirect()->to($this->barangayrecordsystem);
    }

    public function SJBMCVideo()
    {
        return redirect()->to($this->sjbmc);
    }

    public function LazyReader()
    {
        return redirect()->to($this->lazy);
    }

    public function TINHSPortal()
    {
        return redirect()->to($this->portal);
    }


    public function openModal()
    {
        $this->myPersistentModal = true;
        $this->myPersistentModal2 = true;
        $this->myPersistentModal3 = true;
        $this->myPersistentModal4 = true;
    }
    public function render()
    {
        return view('livewire.projects');
    }
}
