@extends('LayoutAgency')

@section('user')
{{ Auth::user()->name }}
@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 511.999 511.999" width="32px" height="32px" fill="currentColor" xml:space="preserve">
       <g>
           <g>
               <g>
                   <path d="M447.997,191.997c-0.094,0-0.188,0.006-0.283,0.007v-27.501c0-67.183-54.657-121.839-121.842-121.839H186.125
                       c-67.183,0-121.841,54.656-121.841,121.839v27.501c-0.095-0.001-0.189-0.007-0.284-0.007C28.71,191.997,0,220.708,0,255.999
                       c0,27.324,17.491,51.445,42.668,60.353v142.314c0,5.892,4.775,10.667,10.667,10.667h63.999c1.668,0,3.242-0.394,4.648-1.077
                       h268.034c1.406,0.684,2.979,1.077,4.647,1.077h64.003c5.891,0,10.667-4.776,10.667-10.667V316.352
                       c25.175-8.908,42.666-33.03,42.666-60.353C512,220.708,483.289,191.997,447.997,191.997z M106.666,256.097v57.207v37.622V448
                       H64.003V308.263c0-5.073-3.575-9.446-8.547-10.454c-19.77-4.013-34.121-21.596-34.121-41.81c0-23.526,19.14-42.666,42.666-42.666
                       c23.492,0,42.609,19.082,42.668,42.559C106.666,255.961,106.666,256.029,106.666,256.097z M383.997,446.921H128.001v-31.998
                       h48.546c5.891,0,10.667-4.777,10.667-10.667c0-5.891-4.777-10.667-10.667-10.667h-48.546v-31.996h255.995V446.921z
                        M383.997,340.257H128.001v-26.955c0-14.863,12.091-26.955,26.952-26.955h202.091c14.861,0,26.951,12.092,26.951,26.955V340.257z
                        M383.998,256.097v17.158c-7.703-5.2-16.978-8.241-26.951-8.241h-90.38v-68.655c0-5.892-4.776-10.667-10.667-10.667
                       c-5.892,0-10.668,4.776-10.668,10.667v68.655h-90.378c-9.974,0-19.249,3.04-26.952,8.242v-17.044
                       c0.002-0.07,0.002-0.141,0.002-0.211c0-27.707-17.701-51.349-42.384-60.235v-31.261h0.001C85.619,109.086,130.707,64,186.125,64
                       h139.748c55.419,0,100.507,45.086,100.507,100.504v31.261C401.697,204.654,383.998,228.314,383.998,256.097z M456.545,297.809
                       c-4.972,1.008-8.546,5.381-8.546,10.454v139.736h-42.668v-97.074v-37.622v-57.305c0-23.526,19.141-42.666,42.666-42.666
                       c23.528,0,42.668,19.14,42.668,42.666C490.665,276.213,476.316,293.796,456.545,297.809z"/>
                   <path d="M256.003,154.793c-5.892,0-10.667,4.777-10.667,10.667v0.25c0,5.891,4.777,10.667,10.667,10.667
                       c5.892,0,10.668-4.777,10.668-10.667v-0.25C266.67,159.57,261.894,154.793,256.003,154.793z"/>
                   <path d="M207.191,414.93h0.254c5.891,0,10.667-4.776,10.667-10.667s-4.777-10.667-10.667-10.667h-0.254
                       c-5.892,0-10.667,4.777-10.667,10.667C196.524,410.154,201.3,414.93,207.191,414.93z"/>
               </g>
           </g>
       </g>
       </svg>
    </span>&nbsp;&nbsp;&nbsp;
    <h4>
        Availability
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

                        <td data-field="FirstName" class="kt-datatable__cell"><?php
                            if($tour->nbr<=5){
                                echo "<span style='width: 150px; color: red'>".($tour->Group_Size - $tour->nbr)."</span>";
                                }else{
                                     echo "<span style='width: 150px; color: green'>".($tour->Group_Size - $tour->nbr)."</span>";
                                    }
                                     ?>
                        </td>


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
