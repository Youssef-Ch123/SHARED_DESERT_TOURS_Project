@extends('LayoutAgency')

@section('user')
{{ Auth::user()->name }}
@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
            <svg width="32px" height="32px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor">
                <!-- Uploaded to SVGRepo https://www.svgrepo.com -->
                <title>ic_fluent_person_feedback_24_filled</title>
                <desc>Created with Sketch.</desc>
                <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="ic_fluent_person_feedback_24_filled" fill="#212121" fill-rule="nonzero">
                        <path d="M10.75,14 C11.9926407,14 13,15.0073593 13,16.25 L13,17.7519766 L12.9921156,17.8604403 C12.6813607,19.9866441 10.7715225,21.0090369 7.5667905,21.0090369 C4.37361228,21.0090369 2.43330141,19.9983408 2.01446278,17.8965776 L2,17.75 L2,16.25 C2,15.0073593 3.00735931,14 4.25,14 L10.75,14 Z M7.5,6 C9.43299662,6 11,7.56700338 11,9.5 C11,11.4329966 9.43299662,13 7.5,13 C5.56700338,13 4,11.4329966 4,9.5 C4,7.56700338 5.56700338,6 7.5,6 Z M19.75,2 C20.9926407,2 22,3.00735931 22,4.25 L22,7.75 C22,8.99264069 20.9926407,10 19.75,10 L18.197189,10 L15.6555465,12.2070729 C15.2384861,12.5691213 14.6068936,12.5245251 14.2448452,12.1074647 C14.0869422,11.9255688 14,11.6927904 14,11.4522588 L13.9993343,9.98619411 C12.8746672,9.86153043 12,8.90790995 12,7.75 L12,4.25 C12,3.00735931 13.0073593,2 14.25,2 L19.75,2 Z" id="🎨-Color"></path>
                    </g>
                </g>
            </svg>
    </span>&nbsp;&nbsp;&nbsp;
    <h4>
        FeedBacks
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
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label> </label>
                                </div>
                                <div class="kt-form__control">
                                    <input type="radio" onchange="subStars(this)" name="stars" value="1" />&nbsp;&nbsp;&nbsp;<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span><br>

                                    <input type="radio" onchange="subStars(this)" name="stars" value="2" />&nbsp;&nbsp;&nbsp;<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span><br>

                                    <input type="radio" onchange="subStars(this)" name="stars" value="3" />&nbsp;&nbsp;&nbsp;<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span><br>

                                    <input type="radio" onchange="subStars(this)" name="stars" value="4" />&nbsp;&nbsp;&nbsp;<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span><br>

                                    <input type="radio" onchange="subStars(this)" name="stars" value="5" />&nbsp;&nbsp;&nbsp;<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/></span><br>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Tour </label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98" onchange="subTitle(this)">
                                        <option value="-1">Select</option>
                                        @foreach ($FeedBacks as $FeedBack)
                                            <option value="{{$FeedBack->Title}}">{{$FeedBack->Title}}</option>
                                        @endforeach
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
    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--subtable kt-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;">

        <table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="text-align: left">

            <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort" style="width: 5%;"><span></span></th><th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 5%;"><span>FeedBack</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;text-align: center"><span >Tour</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width:15%"><span >Date</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;"><span >Travler's Name</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;"><span >Stars</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 20%;text-align: left"><span >Comment</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;text-align: center"><span>Actions</span></th>
        </tr></thead><?php $cpt=0; ?>
            <tbody class="kt-datatable__body tbody" id="tab">
                @foreach ($FeedBacks as $FeedBack)
                    <tr data-row="0" class="kt-datatable__row kt-datatable__row--even" >

                        <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID" style="width: 5%;text-align: left">
                            <a class="kt-datatable__toggle-subtable"  data-value="1" title="Load sub table"><i class="fa fa-caret-right"></i></a>
                        </td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 5%;text-align: left"><span>{{$FeedBack->id}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: center"><span >{{$FeedBack->Title}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >{{$FeedBack->Date}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >{{$FeedBack->FirstName}} {{$FeedBack->LastName}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span>
                            <?php
                                if($FeedBack->N_Stars==1){
                                    echo '<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span>';
                                }else if($FeedBack->N_Stars==2){
                                    echo '<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span>';
                                }else if($FeedBack->N_Stars==3){
                                    echo '<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span>';
                                }else if($FeedBack->N_Stars==4){
                                    echo '<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32out.png" width="20px"/></span>';
                                }else if($FeedBack->N_Stars==1){
                                    echo '<span><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/><img src="/images/32x32.png" width="20px"/></span>';
                                }
                                ?>
                        </span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 20%;text-align: left"><textarea cols="30" readonly>{{$FeedBack->Comment}}</textarea></td>


                        <?php $cpt++; ?>
                        <td data-field="Actions" class="kt-datatable__cell" style="width: 15%;text-align: center"><span style="overflow: visible; position: relative;">
                            <a href="javascript:;" class="btn btn-sm btn-outline-success btn-icon btn-icon-md" title="Edit details">		                      <i data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal'.$cpt ?>" class="la la-check-square"></i>		                  </a>
                            <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal22'.$cpt ?>" class="btn btn-sm btn-outline-danger btn-icon btn-icon-md" title="Delete">		                      <i class="la la-close"></i>		                  </a>		              </span></td>

                    </tr>

        <!-- Modal delete -->
        <form method="POST" action="{{ route('FeedBacks.destroy', $FeedBack->id) }}">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="<?php echo'exampleModal22'.$cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Remove Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-15">
                            <label><span style="font-weight: bold;color: red;">Are you sure you want to delete the recording ?</span></label><br>
                        </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </div>
            </div>
        </div>
        </form>

                @endforeach


        </tbody>
        </table>

    </div>

        <!--end: Datatable -->
    </div>
</div>
<script>
        function subStars(input){
            var stars = input.value;
            var str="";
            switch(stars){
                case "1":str="<span><img src='/images/32x32.png' width='20px'/><img src='/images/32x32out.png' width='20px'/><img src='/images/32x32out.png' width='20px'/><img src='/images/32x32out.png' width='20px'/><img src='/images/32x32out.png' width='20px'/></span>";break;
                case "2":str="<span><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32out.png' width='20px'/><img src='/images/32x32out.png' width='20px'/><img src='/images/32x32out.png' width='20px'/></span>";break;
                case "3":str="<span><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32out.png' width='20px'/><img src='/images/32x32out.png' width='20px'/></span>";break;
                case "4":str="<span><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32out.png' width='20px'/></span>";break;
                case "5":str="<span><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/><img src='/images/32x32.png' width='20px'/></span>";break;
                default:break;
            }
            $.get("/Feedbacks/SearchByStars", {'Stars':stars,'str':str}).done(function (data) {
                $("#tab").html(data);
            });
        }
        function subTitle(object){
            var Title = object.value;
            $.get("/Feedbacks/SearchByTitle", {'Title':Title}).done(function (data) {
                $("#tab").html(data);
            });
        }

    </script>
@endsection





