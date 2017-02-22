@extends('layouts.app')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Employee</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th>
                                        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </th>
                                    <th class="column-title">Id </th>
                                    <th class="column-title">First Name </th>
                                    <th class="column-title">Last Name </th>
                                    <th class="column-title">Email </th>
                                    <th class="column-title">Phone </th>
                                    <th class="column-title">Gender </th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($employees as $employee)
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        </td>
                                        <td class="">{{ $employee->first_name }}</td>
                                        <td class="">{{ $employee->last_name }}</td>
                                        <td class="">{{ $employee->email_address }}</td>
                                        <td class="">{{ $employee->mobile_phone }}</td>
                                        <td class="">{{ $employee->tax_code_number }}</td>
                                        <td class="a-right a-right">{{ $employee->gender }}</td>
                                        <td class="last">
                                            <a href="#" class="btn btn-primary">View</a>
                                            <a href="/employee/edit/{{ $employee->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-primary">History</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="even pointer">
                                        <td class="a-center" colspan="8">
                                            No data
                                        </td>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
