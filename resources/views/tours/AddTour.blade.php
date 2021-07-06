@extends('LayoutAgency')

<script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
@section('user')
{{ Auth::user()->name }}
@endsection
@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection
@section('title')

    <span class="kt-portlet__head-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-signpost-2" viewBox="0 0 16 16">
    <path d="M7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H9v-.586a1 1 0 0 0-2 0zM13.5 3l.75 1-.75 1H2V3h11.5zm.5 5v2H2.5l-.75-1 .75-1H14z"></path>
    </svg>
    </span>
    <h3 style="margin-left: 10px">
            Add new tour
    </h3>

@endsection

@section('content')

@include('Formulaire1')

<script>
    var n;
        var max=document.getElementById('mp');;
        var cou=document.getElementById('count2');
        var tra=document.getElementById('Transport');

        var CF=document.getElementById('CityFrom2');
        var CT=document.getElementById('CityTo2');
        var Dur=document.getElementById('Duration2');
    function change(nbr,counter){
        if(nbr!='-1'){
            n=eval(nbr);
            document.getElementById('MaxPlaces'+counter).value=nbr;
            document.getElementById('count1'+counter).value='1';
        }else
            document.getElementById('MaxPlaces').value='';
    }
    function change2(nbr,counter){
        if(document.getElementById('cbo'+counter).selectedIndex!=0){
            var Count=eval(nbr);
            document.getElementById('MaxPlaces'+counter).value=(n*Count);
        }
    }
    function fun(){
        var mp=document.getElementById('MaxPlaces1').value;
        var c=document.getElementById('count11').value;
        var transp=document.getElementById('cbo1').options[document.getElementById('cbo1').selectedIndex].innerText;

        var cf=document.getElementById('CityFrom').value;
        var ct=document.getElementById('CityTo').value;
        var duration=document.getElementById('Duration').value;

        document.getElementById('mp').innerText=(mp);
        document.getElementById('count2').innerText=(" X "+c);
        document.getElementById('Transport').innerText=(transp);

        document.getElementById('CityFrom2').innerText=(cf);
        document.getElementById('CityTo2').innerText=(ct);
        document.getElementById('Duration2').innerText=(duration);
    }



$(document).ready(function () {
    var counter = 2;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols+="<td class='col-sm-6'><select class='form-control kt-selectpicker' tabindex='-98' id='cbo"+counter+"' onchange='change(this.options[this.selectedIndex].value,"+counter+")'><option value='-1'>Choose one</option>@foreach ($transports as $transport)<option value='{{$transport->MaxPlaces}}'>{{$transport->moyTrans}}</option>@endforeach </select><div class='dropdown-menu' style='max-height: 439px; overflow: hidden; min-height: 0px;''><div class='inner show' role='listbox' id='bs-select-1' tabindex='-1' aria-activedescendant='bs-select-1-0' style='max-height: 413px; overflow-y: auto; min-height: 0px;'><ul class='dropdown-menu inner show' role='presentation' style='margin-top: 0px; margin-bottom: 0px;'> @foreach ($transports as $transport)<li class=''><a role='option' class='dropdown-item active selected' id='bs-select-1-0'  tabindex='0' aria-setsize='3' aria-posinset='1' aria-selected='true'><span class='text'>{{$transport->moyTrans}}</span></a></li> @endforeach</ul></div></div></td>";
        cols += "<td class='col-sm-3'><input  type='number' class='form-control' onkeyup='change2(this.value,"+counter+")' placeholder='ex: 3' min='1' id='count1"+counter+"' name='CountM"+counter+"'/></td>";
        cols += "<td class='col-sm-3'><input  type='number' class='form-control' min='1' id='MaxPlaces"+counter+"' name='Places"+counter+"' /></td>";


        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });


});

</script>
        {{-- <script src="{{url('assets/js/pages/custom/user/add-user.js')}}" type="text/javascript"></script> --}}
        <script src="{{url('assets/js/pages/custom/wizard/wizard-2.js')}}" type="text/javascript"></script>
@endsection

