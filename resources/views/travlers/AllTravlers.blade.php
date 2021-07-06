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
        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--subtable kt-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;"><table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head"><tr class="kt-datatable__row"><th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 30px;"></span></th><th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">First name</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Last name</span></th><th data-field="Company" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Tel</span></th><th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Email</span></th><th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Adress</span></th><th data-field="Actions" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Actions</span></th></tr></thead>
            <tbody class="kt-datatable__body" style="">
                <?php $id=0;$cpt=0; ?>
                @foreach ($travlers as $travler)
                    <tr data-row="{{++$cpt}}" class="kt-datatable__row kt-datatable__row--even">

                        <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID">
                        <a class="kt-datatable__toggle-subtable" href="#" onclick="funct(<?php  $id=$travler->IdTravler; echo $id; ?>)" data-value="1" title="Load sub table" style="width: 30px;"><i class="fa fa-caret-right" id="{{'flech'.$id}}" style="width: 30px;"></i></a>
                        </td>

                        <td data-field="FirstName" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->FirstName}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->LastName}}</span></td>

                        <td data-field="Company" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->Tel}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->Email}}</span></td>

                        <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$travler->HomeTown}}</span></td>


                        <td data-field="Actions" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 130px;">
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">		                      <i class="la la-edit"></i>		                  </a>		                  <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">		                      <i class="la la-trash"></i>		                  </a>		              </span></td>
                    </tr>

                    <tr class="kt-datatable__row-subtable kt-datatable__row-subtable--even" style="display: none" id="{{'tab'.$id}}">
                        <td class="kt-datatable__subtable" colspan="8"><div id="child_data_local_28" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" style="">
                        <table class="kt-datatable__table" style="display: block; max-height: 400px;" >
                                <thead class="kt-datatable__head" style="background-color: gray;">
                                        <tr class="kt-datatable__row"><th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 30px;"></span></th><th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">ID</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">City from</span></th><th data-field="Company" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">City to</span></th><th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Duration</span></th><th data-field="Actions" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Actions</span></th></tr>
                                </thead>

                                <tbody class="kt-datatable__body ps" style="max-height: 346px;">
                                    @foreach ($bookings as $booking)
                                        @if($booking->travler_id==$id)
                                            @foreach ($groups as $group)
                                                @if ($group->NumGroup == $booking->group_id)
                                                    @foreach ($tours as $tour)
                                                        @if ($tour->NumTour == $group->tour_id)
                                                            <tr data-row="0" class="kt-datatable__row">
                                                                    <td data-field="FirstName" class="kt-datatable__cell"><span style="width: 130px;">{{$tour->NumTour}}</span></td>

                                                                    <td data-field="LastName" class="kt-datatable__cell"><span style="width: 130px;">{{$tour->cityFrom}}</span></td>

                                                                    <td data-field="Company" class="kt-datatable__cell"><span style="width: 130px;">{{$tour->cityTo}}</span></td>

                                                                    <td data-field="Email" class="kt-datatable__cell"><span style="width: 130px;">{{$tour->Duration}}</span></td>

                                                                <td data-field="Actions" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 130px;">
                                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">		                      <i class="la la-edit"></i>		                  </a>		                  <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">		                      <i class="la la-trash"></i>		                  </a>		              </span></td>
                                                            </tr>

                                                        @endif
                                                    @endforeach

                                                @endif
                                            @endforeach

                                        @endif
                                    @endforeach


                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                                </tbody>
                                </table>

                                </div></td></tr>
                @endforeach
</tbody>

        </table>
        {{-- <div class="kt-datatable__pager kt-datatable--paging-loaded">
            <ul class="kt-datatable__pager-nav">

                <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>

                <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li><li style=""></li>

                <li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li><li style=""></li>

                <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-next"></i></a></li>

                <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-next"></i></a></li>

            </ul>
        </div> --}}

        <div class="kt-datatable__pager kt-datatable--paging-loaded"><ul class="kt-datatable__pager-nav"><li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first" data-page="1"><i class="flaticon2-fast-back"></i></a></li><li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev" data-page="3"><i class="flaticon2-back"></i></a></li><li style=""></li><li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="1" title="1">1</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="4" title="4">4</a></li><li style=""></li><li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next kt-datatable__pager-link--disabled" data-page="4" disabled="disabled"><i class="flaticon2-next"></i></a></li><li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last kt-datatable__pager-link--disabled" data-page="4" disabled="disabled"><i class="flaticon2-fast-next"></i></a></li></ul><div class="kt-datatable__pager-info"><div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="100" tabindex="-98"><option class="bs-title-option" value=""></option><option value="5">5</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-8" aria-haspopup="listbox" aria-expanded="false" title="Select page size"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">100</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-8" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div><span class="kt-datatable__pager-detail">Showing 301 - 350 of 350</span></div></div>


</div>

        <!--end: Datatable -->
    </div>
</div>
<script>
    var etat=true;
    function funct(cpt){
        if(etat==true){
            document.getElementById('flech'+cpt).setAttribute('class','fa fa-caret-down');
            document.getElementById('tab'+cpt).style.display='block';
            etat=false;
        }else{
            document.getElementById('flech'+cpt).setAttribute('class','fa fa-caret-right');
            document.getElementById('tab'+cpt).style.display='none';
            etat=true;
        }
    }
</script>
@endsection

