<form method="POST" action="{{ route('deleteMultipleEmployees') }}">
    @csrf

    <h1>Employee Page</h1>

    @if(count($empData) > 0)
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th class="multi-checkbox" style="display:none;">
                    <input type="checkbox" id="select-all" />
                </th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empData as $dt)
            <tr>
                <td class="multi-checkbox" style="display:none;">
                    <input type="checkbox" name="ids[]" value="{{ $dt->Id }}" class="row-checkbox" />
                </td>
                <td>{{ $dt->Id }}</td>
                <td>{{ $dt->Name }}</td>
                <td>{{ $dt->Email }}</td>
                <td>{{ $dt->Phone }}</td>
                <td><a href="{{ route('delEmp', $dt->Id) }}">Delete</a></td>
                <td><a href="{{ route('editEmp', $dt->Id) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table><br>

    <button type="button" id="add-employee-btn">Add New Employee</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" id="toggle-multi-delete">Multiple Delete</button>
    <button type="submit" id="delete-selected" style="display:none;">Delete Selected</button>

    @else
    <br>
    <button type="button" id="add-employee-btn">Add New Employee</button>
    @endif
</form>

<script>
    // Redirect to Add Employee page
    const addEmployeeUrl = "{{ route('AddEmp') }}";
    document.getElementById('add-employee-btn')?.addEventListener('click', () => window.location = addEmployeeUrl);
    
    // Redirect to Edit Employee page
    const editEmployeeUrl = "{{ route('editEmp') }}";
    document.getElementById('edit-employee-btn')?.addEventListener('click', () => window.location = editEmployeeUrl);

    // Toggle Multi Delete Mode
    const toggleBtn = document.getElementById('toggle-multi-delete');
    const deleteBtn = document.getElementById('delete-selected');
    const selectAll = document.getElementById('select-all');
    const multiCheckboxes = document.querySelectorAll('.multi-checkbox');
    const rowCheckboxes = document.querySelectorAll('.row-checkbox');

    toggleBtn?.addEventListener('click', e => {
        e.preventDefault();
        const show = multiCheckboxes[0]?.style.display === 'none';

        multiCheckboxes.forEach(el => el.style.display = show ? '' : 'none');
        deleteBtn.style.display = show ? '' : 'none';
        toggleBtn.style.display = show ? 'none' : '';

        // Reset checkboxes if hiding
        if (!show) {
            rowCheckboxes.forEach(cb => cb.checked = false);
            if (selectAll) selectAll.checked = false;
        }
    });

    // Handle Select All
    selectAll?.addEventListener('change', function() {
        rowCheckboxes.forEach(cb => cb.checked = this.checked);
    });
</script>