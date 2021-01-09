<div>

    <!-- Modal -->
    <div  class="modal fade" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="skillModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                //Child
                @livewire('skillsform')

            </div>
        </div>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Skills
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#skillModal">
                    Add a skill
                </button>
                <hr>
                <table class="table table-responsive table-striped">
                    <thead>
                       <th>Name</th>
                       <th>Label</th>
                       <th>Percent</th>
                    </thead>
                    <tbody>
                    @foreach($skills as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->label }}</td>
                            <td>{{ $skill->percent }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
