<div class="modal fade bs-example-modal-lg" id="view_applicant" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">View Applicant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Applicant Name:</label>
                    <div class="col-sm-8">
                        <h6>{{ $application->name }}</h6>
                    </div>
                </div>  
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Applicant Email:</label>
                    <div class="col-sm-8">
                        <h6>{{ $application->email }}</h6>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Applicant Subject:</label>
                    <div class="col-sm-8">
                        <h6>{{ $application->subject }}</h6>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Applicant Message:</label>
                    <div class="col-sm-8">
                        <h6>{{ $application->message }}</h6>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>