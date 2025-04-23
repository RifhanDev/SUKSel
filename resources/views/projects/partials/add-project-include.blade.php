<form action="{{ route('project.create') }}" method="post" class="form" id="NewtaskForm" role="form">
    @csrf
    <div class="form-group mb-3">
        <label for="taskname" class="col-form-label">Project Name<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <input id="project_name" name="taskname" type="text" class="form-control validate" placeholder="Enter Task Name..." required autocomplete="off">
        </div>
    </div>
    <div class="form-group mb-4">
        <label class="col-form-label">Status<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <select class="form-select validate" name="status" id="TaskStatus" required autocomplete="off">
                <option value="" selected>Choose..</option>
                <option value="New">New</option>
                <option value="Ongoing">On-going</option>
                <option value="Complete">Complete</option>
            </select>
        </div>
    </div>

    <div class="form-group mb-4">
        <label class="col-form-label">Start Date<span class="text-danger">*</span></label>
        <div class="input-group" id="datepicker1">
            <input type="text" class="form-control datepicker" name="startdate" placeholder="dd M, yyyy"
                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                data-provide="datepicker" autocomplete="off">
            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
        </div>
    </div>

    <div class="form-group mb-4">
        <label class="col-form-label">End Date<span class="text-danger">*</span></label>
        <div id="datepicker1">
            <input type="text" class="form-control datepicker" name="enddate" placeholder="Select end date"
                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                data-date-autoclose="true" data-provide="datepicker" autocomplete="off">
        </div>
    </div>

    <div class="form-group mb-4">
        <label for="taskbudget" class="col-form-label">Budget<span class="text-danger">*</span></label>
        <div class="col-lg-12">
            <input id="taskbudget" name="taskbudget" type="number"
                placeholder="Enter Task Budget..." class="form-control" required autocomplete="off">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </div>
</form>