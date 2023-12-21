<div class="modal fade" id="minorModal-{{$detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Minor Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table">
                    <div class="table-header">
                        <div class="header-cell">#</div>
                        <div class="header-cell">First Name</div>
                        <div class="header-cell">Last Name</div>
                        <div class="header-cell">Date of Birth</div>
                        <div class="header-cell">Created At</div>
                    </div>
                    @foreach($detail->minors as $minor)
                        <div class="table-row">
                            <div class="table-cell">{{$loop->iteration}}</div>
                            <div class="table-cell">{{$minor->firstname}}</div>
                            <div class="table-cell">{{$minor->lastname}}</div>
                            <div class="table-cell">{{$minor->dob}}</div>
                            <div class="table-cell">{{\Carbon\Carbon::parse($minor->created_at)->format('d-M-Y H:s:i')}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
