<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public $skill, $name, $progress;


    protected $listeners = [
        'skillShow'
    ];

    public function skillShow($id)
    {
        $skill = Skill::find($id);
        $this->name = $skill->name;
        $this->progress = $skill->progress;
        $this->dispatch('showModalToggle');
    }


    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
