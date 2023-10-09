<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill;
    protected $listeners = [
        'skillDelete'
    ];

    public function skillDelete($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        $this->skill->delete();
        $this->reset('skill');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }

    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
