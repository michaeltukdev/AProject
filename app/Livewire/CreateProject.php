<?php

namespace App\Livewire;

use App\Models\Projects;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateProject extends Component
{
    #[Validate] 
    public $title = '';

    #[Validate] 
    public $description = '';

    #[Validate] 
    public $start_date = '';

    #[Validate] 
    public $end_date = '';

    #[Validate] 
    public $phase = '';

    public function rules()
    {
        return [
            'title' => 'min:3|max:50|string|required',
            'description' => 'min:3|max:1000|required',
            'start_date' => 'required|date',
            'end_date' => [
                'required',
                'date',
                'after_or_equal:start_date' 
            ],
            'phase' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'start_date.required' => 'Start Date is required',
            'end_date.required' => 'End Date is required',
            'phase.required' => 'Phase is required',
            'title.min' => 'Title must be at least 3 characters',
            'description.min' => 'Description must be at least 3 characters',
            'title.max' => 'Title must be at most 50 characters',
            'description.max' => 'Description must be at most 1000 characters',
            'start_date.date' => 'Start Date must be a valid date',
            'end_date.date' => 'End Date must be a valid date',
        ];
    }

    public function create()
    {
        if (!auth()->check()) {
            abort(403, 'Unauthorized action.');
        }

        $this->validate();

        $projects = Projects::create([
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'phase' => $this->phase,
            'user_id' => auth()->user()->id
        ]);

        $this->dispatch('update-list');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
