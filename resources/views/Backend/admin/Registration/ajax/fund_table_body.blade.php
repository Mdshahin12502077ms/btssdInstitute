@if (!empty($getFund))
    @foreach($getFund as $key=>$row)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $row->course->course_name }}</td>
        <td>{{ $row->session->session_name }}</td>
        <td>{{ $row->pay_for }}</td>
        <td>৳ {{ $row->amount }}</td>
        <td>{{ $row->status }}</td>
        <td>
            <a type="button" href="" id="pay_btn"
            class="btn btn-info btn-lg Payment" style="font-size:15px; margin:4%;"
            data-toggle="modal"
            data-id="{{ $row->id }}"
            data-amount="{{ $row->amount }}"
            data-target="#payment-modal">
            Pay
            </a>
        </td>
        <td>
            <a href="/Registration/fund/voucher/Pdf/{{ $row->id }}" target="_blank" onclick="printVoucher(event)">Print Voucher</a>
        </td>
        <td>
            <a href="{{ route('fund_delete',$row->id) }}" onclick="return confirm('Are you sure want to delete this ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
@endif
