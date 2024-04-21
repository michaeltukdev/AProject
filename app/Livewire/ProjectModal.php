<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use App\Models\Projects;

class ProjectModal extends Component
{
    public $projectId;
    public $project;

    protected $listeners = ['openproject'];

    public function openproject($projectId)
    {
        $this->projectId = $projectId;
        $this->project = Projects::find($this->projectId);
    }

    public function delete()
    {
        if (!auth()->check() || $this->project->user_id != auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $this->project->delete();

        $this->dispatch('deleteproject');

        $this->dispatch('update-list');
    }

    public function render()
    {
        return view('livewire.project-modal', ['project' => $this->project]);
    }
}
