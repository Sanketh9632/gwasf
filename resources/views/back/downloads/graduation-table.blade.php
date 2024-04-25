@foreach($registered_forms as $registered_form)
<tr>
  <td style="display:none;">{{ $registered_form->id }}</td>
  <td>{{ $registered_form->name }}</td>
  <td>{{ $registered_form->email }}</td>
  <td>{{ $registered_form->phone }}</td>
  <td>{{ $registered_form->company }}</td>
  <td>{{ $registered_form->no_of_vehicle }}</td>
  <td>
    <!-- <a class="btn btn-danger btn-xs btn-block" href="{{ route('graduation.destroy', [$registered_form->id]) }}" role="button" title="@lang('Destroy')"><span class="fa fa-remove"></span></a> -->
    <a class="btn btn-info btn-xs btn-block" href="{{ route('prospects.graduation-view', [$registered_form->id]) }}" role="button" title="@lang('View')"><span class="fa fa-eye"></span></a>
  </td>
</tr>
@endforeach