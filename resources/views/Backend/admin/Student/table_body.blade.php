
@if ($students != NULL)
@foreach ($students as $row)
<tr data-student-id="{{ $row->id }}">
    <td>{{ $row->id }}</td>
    <td><img src="{{ asset($row->student_photo) }}" alt="Photo of {{ $row->st_name }}" height="100" width="100"></td>
    <td class="table_cell"><b>{{ $row->st_name }}</b><br></td>
    <td class="table_cell"><b>{{ $row->f_name }}</b><br></td>
    <td class="table_cell"><b>{{ $row->gender }}</b><br></td>
    <td class="table_cell"><b><b>{{ $row->course->course_name }}</b><br></b><br></td>
    <td class="table_cell"><b><b>{{ $row->session->session_name }}</b><br></b><br></td>

    <td>
        <a href="/Student/info/{{ $row->id }}" class="mt-2 btn btn-info btn-lg font_icon">
            <i class="fa fa-eye" aria-hidden="true"></i>
        </a>

        <a href="/Student/edit/{{ $row->id }}" class="mt-2 btn btn-warning btn-lg font_icon">
            <i class="fa fa-edit" aria-hidden="true"></i>
        </a>

        <a href="/Student/delete/{{ $row->id }}"  class="mt-2 btn btn-danger btn-lg font_icon" onclick="return confirm('Are you sure to delete this item?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
@endforeach
@endif
