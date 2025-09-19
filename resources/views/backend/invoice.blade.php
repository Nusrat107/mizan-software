@extends('backend.master')

@section('content')
<div class="content-wrapper mt-5" style="margin-left:250px; padding:20px;">
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                <h4 class="mb-0">Invoice List</h4>
                <a href="{{ url('/admin/dashboard') }}" class="btn btn-light btn-sm">
                    <i class="fa fa-plus"></i> Create Invoice
                </a>
            </div>

            <div class="card-body">

                <!-- 🔍 Stylish Search Bar -->
                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="fa fa-search"></i></span>
                        <input type="text" id="searchInput" class="form-control" placeholder="Search invoice... (Serial, Invoice, Customer)">
                        <button class="btn btn-success" type="button" onclick="clearSearch()">Clear</button>
                    </div>
                </div>

                <table id="invoiceTable" class="table table-bordered table-striped text-center">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>#</th>
                            <th>Serial Number</th>
                            <th>Invoice Number</th>
                            <th>Customer Name</th>
                            <th>Contact Number</th>
                            <th>District</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoicelist as $invoice)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $invoice->serial_number }}</td>
                            <td>{{ $invoice->invoice_number }}</td>
                            <td>{{ $invoice->customer_name }}</td>
                            <td>{{ $invoice->contact_number }}</td>
                            <td>{{ $invoice->district }}</td>
                            <td>
                                <a href="{{ url('/admin/invoice-view/' . $invoice->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ url('/admin/invoice-edit/' . $invoice->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('/admin/invoice-delete/' . $invoice->id) }}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this invoice?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 🔍 Search Function -->
<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#invoiceTable tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });

    function clearSearch() {
        document.getElementById("searchInput").value = '';
        let rows = document.querySelectorAll("#invoiceTable tbody tr");
        rows.forEach(row => row.style.display = "");
    }
</script>
@endsection
