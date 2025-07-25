<?php

namespace App\Livewire;

use App\Models\Note;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Repositories\Contracts\NoteRepositoryInterface;

class EditNote extends Component
{
    public $title;
    public $content;
    public $NoteId;

    #[On('edit-note')]
    public function edit($id)
    {
        $note = Note::find($id);
        $this->NoteId = $note->id;
        $this->title = $note->title;
        $this->content = $note->content;
        Flux::modal('edit-note')->show();
    }

    public function update()
    {
        $this->validate([
            'title' => ['required','string','max:255', Rule::unique('notes')->ignore($this->NoteId)],
            'content' => 'required|string',
        ]);
        app(NoteRepositoryInterface::class)->update($this->NoteId, [
            'title' => $this->title,
            'content' => $this->content,
        ]);
        session()->flash('success', 'Note updated successfully.');
        
        $this->redirectRoute('notes', navigate: true);
        Flux::modal('edit-note')->close();
    }

    public function render()
    {
        return view('livewire.edit-note');
    }
}
