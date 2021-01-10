<div>
    <!-- Modal -->
    <div wire:ignore.self  class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="educationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="educationModalLabel">Add education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="specialtyAdd">Specialty</label>
                        <input type="text" class="form-control" id="specialtyAdd" wire:model="specialty">
                        @error('specialty') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="universityAdd">University</label>
                        <input type="text" class="form-control" id="universityAdd" wire:model="university">
                        @error('university') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="intervalAdd">Interval</label>
                        <input type="text" class="form-control" id="intervalAdd" wire:model="interval">
                        @error('interval') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeEducationModal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="educationAdd">Add education</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div wire:ignore.self  class="modal fade" id="educationUpdateModal" tabindex="-1" role="dialog" aria-labelledby="educationUpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="educationUpdateModalLabel">Update education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="specialtyUpdate">Specialty</label>
                        <input type="text" class="form-control" id="specialtyUpdate" wire:model="specialty">
                        @error('specialty') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="universityUpdate">University</label>
                        <input type="text" class="form-control" id="universityUpdate" wire:model="university">
                        @error('university') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="intervalUpdate">Interval</label>
                        <input type="text" class="form-control" id="intervalUpdate" wire:model="interval">
                        @error('interval') <span class="error" style="font-size: 12px !important;">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeEducationUpdateModal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="educationUpdate">Update education</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Educations
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#educationModal">
                    Add education
                </button>
                <hr>
                <table class="table table-bordered table-sm table-striped m-10px">
                    <thead>
                        <th>Specialty</th>
                        <th>University</th>
                        <th>Interval</th>
                        <th width="20%">Action</th>
                    </thead>
                    <tbody>
                    @foreach($educations as $education)
                    <tr>
                        <td>{{ $education->specialty }}</td>
                        <td>{{ $education->university }}</td>
                        <td>{{ $education->interval }}</td>
                        <td>
                            <button class="btn btn-success btn-sm" wire:click="read({{ $education->id }})" data-toggle="modal" data-target="#educationUpdateModal">Update</button>
                            <button class="btn btn-danger btn-sm"  wire:click="remove({{ $education->id }})"  onclick="confirm('Are you sure you want to remove the education?') || event.stopImmediatePropagation()">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $educations->links('vendor.livewire.bootstrap') }}
            </div>
        </div>
    </div>
</div>
