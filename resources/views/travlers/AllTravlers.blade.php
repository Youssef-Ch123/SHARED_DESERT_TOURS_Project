@extends('LayoutAgency')

@section('user')
{{ Auth::user()->name }}
@endsection

@section('title')

            <span class="kt-portlet__head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
            </span> &nbsp;&nbsp;&nbsp; <h4>Travlers<h4>

@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('content')
<div class="kt-portlet kt-portlet--mobile">

    <div class="kt-portlet__body">

        <!--begin: Search Form -->
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left">
                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Status:</label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Type:</label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                    <a href="#" class="btn btn-default kt-hidden">
                        <i class="la la-cart-plus"></i> New Order
                    </a>
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                </div>
            </div>
        </div>

        <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

        <!--begin: Datatable -->
        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--subtable kt-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;"><table class="kt-datatable__table" style="display: block;">

            <thead class="kt-datatable__head"><tr class="kt-datatable__row">

                <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 30px;"></span></th>

            <th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Travler</span></th>

            <th data-field="Company" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Tel</span></th>

            <th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Email</span></th>

            <th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Address</span></th>

            <th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Tour</span></th>

            <th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Date</span></th>

            <th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Places</span></th>

            <th data-field="Actions" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Actions</span></th></tr></thead>
            <tbody class="kt-datatable__body" style="">
                @foreach ($Travlers as $travler)
                    <tr class="kt-datatable__row kt-datatable__row--even">

                        <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID">
                        <a class="kt-datatable__toggle-subtable" href="#"  data-value="1" title="Load sub table" style="width: 30px;"><i class="fa fa-caret-right" style="width: 30px;"></i></a>
                        </td>

                        <td data-field="FirstName" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->FirstName}} {{$travler->LastName}}</span></td>

                        <td data-field="Company" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->Tel}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->Email}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->HomeTown}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->Title}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->Date}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->N_Places}}</span></td>


                        <td data-field="Actions" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 130px;">
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">		                      <i class="la la-edit"></i>		                  </a>		                  <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">		                      <i class="la la-trash"></i>		                  </a>		              </span></td>
                    </tr>
                @endforeach
</tbody>

        </table>
</div>

        <!--end: Datatable -->
    </div>
</div>
@endsection

