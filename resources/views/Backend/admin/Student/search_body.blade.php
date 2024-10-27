@if (!empty($student))
@foreach ($student as $row)
<tr data-student-id="{{ $row->id_number }}">
    <td>
        <div class="form-check">
            <input type="checkbox" name="St_reg[{{ $row->id }}]" class="student-checkbox" value="{{ $row->id }}" id="select-all" class="form-check-input">
            <label class="form-check-label"></label>
        </div>
    </td>
    <td><img src="{{ asset($row->student_photo) }}" alt="" height="100" width="100"></td>
    <td class="table_cell">
        <b>{{ $row->id }}</b><br>
        <b>{{ $row->st_name }}</b><br>
        <b>{{ $row->f_name }}</b><br>
        <b>{{ $row->m_name }}</b>
    </td>
    <td class="table_cell">
        <b>{{ $row->Date_of_birth }}</b><br>
        <b>{{ $row->religion }}</b><br>
        <b>{{ $row->gender }}</b><br>
        <b>{{ $row->id_number }}</b>
    </td>
    <td class="table_cell">
        <b>{{ $row->course->course_name }}</b><br>
        <b>{{ $row->session->session_name }}</b><br>
        <b>{{ $row->class_roll }}</b><br>
    </td>
    <td class="table_cell">
        <b>{{ $row->edu_qualification }}</b><br>
        <b>{{ $row->reg_board }}/{{ $row->passing_year }}</b><br>
        <b>{{ $row->reg_no }}</b>
    </td>
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
