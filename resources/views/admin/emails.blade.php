@extends('admin.layouts.master')
@section('content')
<div class="container-fluid px-5">
    <br>
    <div class="card mb-5">
        <div class="card-header">
            <i class="fas fa-email me-1"></i>
            Email Details
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($emails as $email)
                    <tr>
                        <td>{{ $email->id }}</td>
                        @if($email->details->count() > 0)
                        
                            <td>{{ $email->details[0]['firstname'] }}</td>
                            <td>{{ $email->details[0]['lastname'] }}</td>
                        @else
                            <td></td>
                            <td></td>
                        @endif
                        <td>{{ $email->email }}</td>
                        <td>{{ \Carbon\Carbon::parse($email->created_at)->format('d-M-Y H:s:i') }}</td>
                        <td>
                            <a class="btn btn-success" title="View" href="#detailModal-{{$email->id}}" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @include('admin.partials.detail-modal')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    /* Styles for the table */
    .table {
        display: flex;
        flex-direction: column;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    /* Styles for table header */
    .table-header {
        display: flex;
        background-color: #f0f0f0;
        font-weight: bold;
    }

    /* Styles for header cell */
    .header-cell {
        flex: 1;
        padding: 8px 12px;
        border-right: 1px solid #ccc;
    }

    /* Styles for table row */
    .table-row {
        display: flex;
    }

    /* Styles for table cell */
    .table-cell {
        flex: 1;
        padding: 8px 12px;
        border-right: 1px solid #ccc;
    }

    /* Remove border from the last table cell in each row */
    .table-row .table-cell:last-child {
        border-right: none;
    }

</style>
@endpush
