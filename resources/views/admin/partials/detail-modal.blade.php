<div class="modal fade" id="detailModal-{{$email->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Email Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table">
                    <div class="table-header">
                        <div class="header-cell">No.</div>
                        <div class="header-cell">First Name</div>
                        <div class="header-cell">Last Name</div>
                        <div class="header-cell">Phone</div>
                        <div class="header-cell">Date of Birth</div>
                        <div class="header-cell">Created At</div>
                        <div class="header-cell">Action</div>
                    </div>
                   
                    @foreach($email->details as $detail)
                        <div class="table-row">
                            <div class="table-cell">{{$loop->iteration}}</div>
                            <div class="table-cell">{{$detail->firstname}}</div>
                            <div class="table-cell">{{$detail->lastname}}</div>
                            <div class="table-cell">{{$detail->phone}}</div>
                            <div class="table-cell">{{$detail->dob}}</div>
                            <div class="table-cell">{{\Carbon\Carbon::parse($detail->created_at)->format('d-M-Y H:s:i')}}</div>
                            <div class="table-cell">
                                @if($detail->minors->count() > 0)
                                    <a class="btn btn-success bg-success" title="View" href="#minorModal-{{$detail->id}}" data-bs-toggle="modal">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($email->details as $detail)
    @if($detail->minors->count() > 0)
        @include('admin.partials.minor-modal')
    @endif
@endforeach
