@extends('LayoutAgency')

@section('user')
{{ Auth::user()->name }}
@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-signpost-2" viewBox="0 0 16 16">
            <path d="M7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H9v-.586a1 1 0 0 0-2 0zM13.5 3l.75 1-.75 1H2V3h11.5zm.5 5v2H2.5l-.75-1 .75-1H14z"/>
        </svg>
    </span>&nbsp;&nbsp;&nbsp;
    <h4>
        Transportation
    </h4>
@endsection

@section('content')
<div class="kt-portlet kt-portlet--mobile" id="div">

    <div class="kt-portlet__body">

        <!--begin: Search Form -->
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                        </div>
                        <div class="kt-portlet__head-toolbar">

                        </div>
                    </div>

                    <br>

            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left">
                                <input type="text" name="Title" class="form-control" placeholder="Search..." id="generalSearch" list="list" onchange="subTitle(this)">
                                <datalist id="list">
                                    @foreach ($tours as $tour)
                                        <option value="{{$tour->Title}}"></option>
                                    @endforeach
                                </datalist>
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Availability </label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98" onchange="subAvail(this)">
                                        <option value="-1">Select</option>
                                        <option value="5"> > 5</option>
                                        <option value="10"> > 10</option>
                                        <option value="20"> > 20</option>
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
        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--subtable kt-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;"><table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="text-align: left">

            <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 30px;"></span></th><th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Image</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Title</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Group size</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Available</span></th>
        </tr></thead>
            <tbody class="kt-datatable__body tbody" id="tab">
                @foreach ($tours as $tour)
                    <tr data-row="0" class="kt-datatable__row kt-datatable__row--even" style="text-align: left">

                        <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID">
                            <a class="kt-datatable__toggle-subtable"  data-value="1" title="Load sub table" style="width: 30px;"><i class="fa fa-caret-right" style="width: 30px;"></i></a>
                        </td>

                        <td data-field="Company" class="kt-datatable__cell"><span style="width: 100px;"><img width="80px" height="100px" src='{{$tour->image}}'></span></td>

                        <td data-field="LastName" class="kt-datatable__cell"><span style="width: 150px;">{{$tour->Title}}</span></td>

                        <td data-field="FirstName" class="kt-datatable__cell"><span style="width: 150px;">{{$tour->Group_Size}}</span></td>

                        <td data-field="FirstName" class="kt-datatable__cell">@if($tour->nbr<=5)<span style="width: 150px; color:red"><?php echo $tour->Group_Size - $tour->nbr; ?></span>@else <span style="width: 150px; color: green"><?php echo $tour->Group_Size - $tour->nbr; ?></span>  @endforelse</td>


                    </tr>
                @endforeach


</tbody>
        </table>
</div>

        <!--end: Datatable -->
    </div>
</div>
<script>
        function subTitle(object){
            var Title = object.value;
            $.get("/SearchByTitle", {'Title':Title}).done(function (data) {
                $("#tab").html(data);
            });
        }
        function subAvail(object){
            var Avail = object.value;
            $.get("/SearchByAvail", {'nbr':Avail}).done(function (data) {
                $("#tab").html(data);
            });
        }
    </script>
@endsection
