<div>
    <div class="modal-header">
        <h5 class="modal-title" id="skillModalLabel">Add a skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="nameSkills">Name</label>
            <input type="text" class="form-control" id="nameSkills" wire:model="name">
            @error('name') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="labelSkills">Label</label>
            <input type="text" class="form-control" id="labelSkills" wire:model="label">
            @error('label') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="percentSkills">Percent</label>
            <input type="text" class="form-control" id="percentSkills" wire:model="percent">
            @error('percent') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeSkillModal">Close</button>
        <button type="button" class="btn btn-primary" wire:click="skillAdd">Add a skill</button>
    </div>
</div>
