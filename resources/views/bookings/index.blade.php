@extends('LayoutAgency')
<style>

tr th{
    text-align: left;
}

</style>
@section('user')
{{ Auth::user()->name }}
@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 55.591 55.591" style="enable-background:new 0 0 55.591 55.591;" xml:space="preserve" width="32" height="32" fill="currentColor">
       <g>
           <path style="fill:#030104;" d="M10.8,28.988c0.049-0.034,0.143-0.034,0.188,0l1.437,0.779c0.043,0.031,0.084,0.045,0.123,0.045
               c0.044,0,0.081-0.019,0.105-0.052c0.03-0.042,0.035-0.101,0.014-0.172l-0.348-1.611l-0.001-0.009
               c-0.019-0.058,0.008-0.144,0.058-0.179l1.236-1.109c0.101-0.075,0.096-0.148,0.084-0.185c-0.013-0.037-0.053-0.1-0.18-0.1
               l-1.632-0.134h-0.008c-0.061,0-0.134-0.053-0.152-0.11l-0.681-1.555c-0.04-0.12-0.111-0.137-0.15-0.137s-0.109,0.017-0.15,0.137
               l-0.676,1.546l-0.004,0.009c-0.019,0.058-0.092,0.11-0.153,0.11l-1.64,0.134c-0.127,0-0.165,0.062-0.179,0.1
               c-0.012,0.037-0.018,0.11,0.085,0.185l1.228,1.102l0.008,0.008c0.049,0.035,0.076,0.121,0.058,0.179l-0.35,1.62
               c-0.022,0.071-0.018,0.13,0.014,0.172c0.045,0.063,0.136,0.072,0.23,0.007l1.423-0.772L10.8,28.988z M10.254,22.976l0.005,0.005
               c0.029,0.021,0.045,0.072,0.034,0.105l-0.207,0.959c-0.014,0.042-0.011,0.076,0.008,0.101c0.026,0.039,0.08,0.044,0.136,0.005
               l0.843-0.457l0.007-0.005c0.028-0.02,0.084-0.02,0.11,0l0.851,0.462c0.026,0.019,0.05,0.027,0.073,0.027
               c0.025,0,0.047-0.011,0.062-0.032c0.018-0.024,0.02-0.059,0.008-0.101l-0.206-0.953l-0.001-0.006
               c-0.012-0.033,0.005-0.085,0.035-0.105l0.73-0.656c0.061-0.044,0.056-0.088,0.05-0.108c-0.007-0.022-0.031-0.061-0.106-0.061
               l-0.965-0.078h-0.004c-0.036,0-0.08-0.031-0.091-0.066l-0.402-0.92c-0.024-0.071-0.066-0.081-0.089-0.081
               c-0.023,0-0.065,0.01-0.09,0.081l-0.399,0.914l-0.002,0.006c-0.011,0.034-0.055,0.066-0.092,0.066l-0.969,0.078
               c-0.074,0-0.099,0.038-0.105,0.061c-0.008,0.021-0.011,0.064,0.05,0.108C9.528,22.326,10.254,22.976,10.254,22.976z M11.472,19.861
               l0.004,0.004c0.022,0.016,0.033,0.053,0.025,0.077l-0.153,0.711c-0.01,0.03-0.008,0.057,0.005,0.074
               c0.021,0.028,0.061,0.032,0.102,0.003l0.623-0.338l0.006-0.003c0.021-0.015,0.062-0.015,0.082,0l0.63,0.341
               c0.02,0.015,0.037,0.021,0.055,0.021c0.019,0,0.034-0.008,0.046-0.023c0.013-0.018,0.016-0.044,0.006-0.074l-0.152-0.707
               l-0.002-0.004c-0.009-0.024,0.005-0.061,0.026-0.077l0.541-0.486c0.045-0.033,0.042-0.065,0.037-0.081s-0.022-0.044-0.078-0.044
               l-0.716-0.059h-0.002c-0.028,0-0.059-0.022-0.067-0.048l-0.298-0.681c-0.019-0.053-0.05-0.062-0.067-0.062
               s-0.049,0.009-0.066,0.062l-0.296,0.676l-0.001,0.005c-0.008,0.025-0.04,0.048-0.068,0.048l-0.717,0.059
               c-0.057,0-0.072,0.028-0.079,0.044c-0.005,0.016-0.007,0.048,0.036,0.081C10.934,19.38,11.472,19.861,11.472,19.861z
                M11.135,33.793c0.023,0,0.065-0.011,0.089-0.082l0.402-0.92c0.011-0.034,0.055-0.066,0.091-0.066h0.004l0.965-0.078
               c0.075,0,0.1-0.036,0.106-0.059c0.006-0.021,0.011-0.065-0.05-0.109l-0.73-0.656c-0.03-0.021-0.047-0.072-0.035-0.105l0.001-0.006
               l0.206-0.953c0.013-0.043,0.01-0.076-0.008-0.102c-0.016-0.021-0.037-0.031-0.062-0.031c-0.023,0-0.047,0.009-0.073,0.027
               l-0.851,0.461c-0.026,0.021-0.082,0.021-0.11,0l-0.007-0.004l-0.843-0.457c-0.056-0.038-0.109-0.033-0.136,0.004
               c-0.019,0.025-0.021,0.059-0.008,0.102l0.207,0.959c0.011,0.033-0.005,0.084-0.034,0.105l-0.005,0.005L9.527,32.48
               c-0.061,0.044-0.058,0.088-0.05,0.109c0.007,0.022,0.031,0.059,0.105,0.059l0.969,0.078c0.037,0,0.081,0.032,0.092,0.066
               l0.002,0.005l0.399,0.915C11.069,33.783,11.111,33.793,11.135,33.793z M13.352,35.506c0.005-0.016,0.008-0.047-0.037-0.081
               l-0.541-0.485c-0.021-0.016-0.035-0.053-0.026-0.078l0.002-0.005l0.152-0.707c0.01-0.028,0.007-0.055-0.006-0.073
               c-0.012-0.016-0.027-0.023-0.046-0.023c-0.017,0-0.035,0.006-0.055,0.02l-0.63,0.341c-0.021,0.015-0.062,0.015-0.082,0
               l-0.006-0.002l-0.623-0.339c-0.041-0.029-0.08-0.025-0.102,0.003c-0.013,0.019-0.015,0.045-0.005,0.073l0.153,0.712
               c0.008,0.025-0.004,0.062-0.025,0.078l-0.004,0.003l-0.539,0.482c-0.043,0.034-0.041,0.066-0.036,0.081
               c0.007,0.017,0.023,0.044,0.079,0.044l0.717,0.059c0.028,0,0.061,0.022,0.068,0.048l0.001,0.005l0.296,0.676
               c0.018,0.053,0.049,0.062,0.066,0.062s0.048-0.009,0.067-0.062l0.298-0.681c0.009-0.025,0.039-0.048,0.067-0.048h0.002l0.716-0.059
               C13.329,35.55,13.347,35.523,13.352,35.506z M45.761,26.15l-0.004-0.009l-0.676-1.546c-0.041-0.12-0.112-0.137-0.151-0.137
               c-0.038,0-0.109,0.017-0.149,0.137L44.1,26.15c-0.018,0.058-0.092,0.11-0.152,0.11h-0.009l-1.631,0.134
               c-0.127,0-0.167,0.062-0.18,0.1c-0.012,0.037-0.017,0.11,0.084,0.185l1.236,1.109c0.05,0.035,0.077,0.121,0.058,0.179l-0.001,0.009
               l-0.348,1.611c-0.021,0.071-0.017,0.13,0.014,0.172c0.024,0.033,0.061,0.052,0.105,0.052c0.039,0,0.08-0.014,0.123-0.045
               l1.437-0.779c0.046-0.034,0.14-0.034,0.188,0l0.012,0.007l1.423,0.772c0.095,0.065,0.186,0.057,0.23-0.007
               c0.031-0.042,0.036-0.101,0.014-0.172l-0.35-1.62c-0.019-0.058,0.009-0.144,0.057-0.179l0.009-0.008l1.229-1.102
               c0.103-0.075,0.097-0.148,0.085-0.185c-0.014-0.037-0.052-0.1-0.179-0.1l-1.64-0.134C45.853,26.26,45.779,26.207,45.761,26.15z
                M44.69,21.011c-0.023,0-0.066,0.01-0.089,0.081l-0.403,0.92c-0.011,0.034-0.054,0.066-0.09,0.066h-0.004l-0.966,0.078
               c-0.074,0-0.099,0.038-0.105,0.061c-0.006,0.021-0.011,0.064,0.05,0.108l0.73,0.656c0.03,0.021,0.047,0.072,0.034,0.105v0.006
               l-0.206,0.953c-0.013,0.042-0.01,0.076,0.008,0.101c0.016,0.021,0.037,0.032,0.062,0.032s0.048-0.009,0.074-0.027l0.851-0.462
               c0.026-0.02,0.082-0.02,0.11,0l0.007,0.005l0.843,0.457c0.056,0.039,0.109,0.034,0.136-0.005c0.018-0.024,0.021-0.059,0.008-0.101
               l-0.207-0.959c-0.011-0.033,0.005-0.085,0.034-0.105l0.005-0.005l0.727-0.651c0.06-0.044,0.058-0.088,0.05-0.108
               c-0.008-0.022-0.031-0.061-0.105-0.061l-0.969-0.078c-0.037,0-0.081-0.031-0.092-0.066l-0.002-0.006l-0.399-0.914
               C44.755,21.021,44.713,21.011,44.69,21.011z M42.473,19.297c-0.005,0.016-0.008,0.048,0.036,0.081l0.542,0.486
               c0.021,0.016,0.034,0.053,0.024,0.077v0.004l-0.152,0.707c-0.01,0.03-0.007,0.057,0.006,0.074c0.012,0.016,0.027,0.023,0.046,0.023
               c0.018,0,0.035-0.006,0.055-0.021l0.63-0.341c0.021-0.015,0.062-0.015,0.082,0l0.006,0.003l0.623,0.338
               c0.041,0.029,0.08,0.025,0.102-0.003c0.013-0.018,0.015-0.044,0.005-0.074l-0.153-0.711c-0.008-0.024,0.004-0.061,0.025-0.077
               l0.004-0.004l0.539-0.482c0.043-0.033,0.041-0.065,0.036-0.081c-0.007-0.016-0.022-0.044-0.079-0.044l-0.717-0.059
               c-0.028,0-0.061-0.022-0.068-0.048l-0.001-0.005l-0.296-0.676c-0.018-0.053-0.049-0.062-0.066-0.062
               c-0.017,0-0.049,0.009-0.066,0.062l-0.298,0.681c-0.009,0.025-0.039,0.048-0.067,0.048h-0.002l-0.717,0.059
               C42.495,19.253,42.477,19.282,42.473,19.297z M45.57,31.829l-0.005-0.005c-0.029-0.021-0.045-0.072-0.034-0.105l0.207-0.959
               c0.013-0.043,0.011-0.076-0.008-0.102c-0.026-0.037-0.08-0.042-0.136-0.004l-0.843,0.457l-0.007,0.004
               c-0.028,0.021-0.084,0.021-0.11,0l-0.851-0.461c-0.026-0.019-0.05-0.027-0.074-0.027s-0.046,0.011-0.062,0.031
               c-0.018,0.025-0.021,0.059-0.008,0.102l0.206,0.953v0.006c0.013,0.033-0.004,0.084-0.034,0.105l-0.73,0.656
               c-0.061,0.044-0.056,0.088-0.05,0.109c0.007,0.022,0.031,0.059,0.105,0.059l0.966,0.078h0.004c0.036,0,0.079,0.032,0.09,0.066
               l0.403,0.92c0.023,0.071,0.065,0.082,0.089,0.082c0.023,0,0.065-0.011,0.09-0.082l0.399-0.915l0.002-0.005
               c0.011-0.034,0.055-0.066,0.092-0.066l0.969-0.078c0.074,0,0.098-0.036,0.105-0.059c0.008-0.021,0.011-0.065-0.05-0.109
               C46.295,32.479,45.57,31.829,45.57,31.829z M44.353,34.943l-0.004-0.003c-0.021-0.016-0.033-0.053-0.025-0.078l0.153-0.712
               c0.01-0.028,0.008-0.055-0.005-0.073c-0.021-0.028-0.061-0.032-0.102-0.003l-0.623,0.339l-0.006,0.002
               c-0.021,0.015-0.062,0.015-0.082,0l-0.63-0.341c-0.019-0.015-0.037-0.02-0.055-0.02s-0.034,0.008-0.046,0.023
               c-0.013,0.019-0.016,0.045-0.006,0.073l0.152,0.707v0.005c0.01,0.025-0.003,0.062-0.024,0.078l-0.542,0.485
               c-0.044,0.034-0.041,0.066-0.036,0.081c0.004,0.017,0.022,0.044,0.077,0.044l0.717,0.059h0.002c0.028,0,0.059,0.022,0.067,0.048
               l0.298,0.681c0.018,0.053,0.05,0.062,0.066,0.062c0.018,0,0.049-0.009,0.066-0.062l0.296-0.676l0.001-0.005
               c0.008-0.025,0.04-0.048,0.068-0.048l0.717-0.059c0.057,0,0.072-0.027,0.079-0.044c0.005-0.016,0.007-0.047-0.036-0.081
               C44.89,35.425,44.353,34.943,44.353,34.943z M23.796,31.819l-1.503-0.122h-0.007c-0.057,0-0.123-0.05-0.141-0.103l-0.626-1.431
               c-0.038-0.11-0.103-0.127-0.139-0.127c-0.035,0-0.102,0.017-0.14,0.127l-0.623,1.423l-0.003,0.008
               c-0.018,0.053-0.084,0.103-0.14,0.103l-1.51,0.122c-0.117,0-0.153,0.059-0.165,0.092c-0.011,0.034-0.016,0.101,0.077,0.172
               l1.132,1.015l0.007,0.005c0.046,0.034,0.071,0.113,0.054,0.166l-0.322,1.491c-0.02,0.066-0.015,0.118,0.013,0.159
               c0.042,0.059,0.125,0.064,0.211,0.005l1.312-0.71l0.01-0.008c0.044-0.03,0.131-0.03,0.174,0l1.322,0.718
               c0.041,0.029,0.078,0.043,0.114,0.043c0.04,0,0.075-0.018,0.098-0.048c0.028-0.041,0.032-0.093,0.012-0.159l-0.32-1.482
               l-0.002-0.009c-0.017-0.053,0.008-0.132,0.054-0.166l1.139-1.02c0.093-0.07,0.088-0.138,0.077-0.172S23.912,31.819,23.796,31.819z
                M22.634,32.957c-0.105,0.08-0.156,0.236-0.118,0.361l0.305,1.413l-1.252-0.678c-0.103-0.071-0.272-0.071-0.376,0l-1.252,0.678
               l0.306-1.413c0.037-0.125-0.014-0.281-0.118-0.361l-1.074-0.964l1.426-0.114c0.131-0.002,0.265-0.1,0.309-0.224l0.593-1.354
               l0.593,1.354c0.043,0.124,0.177,0.222,0.308,0.224l1.426,0.114C23.71,31.993,22.634,32.957,22.634,32.957z M30.535,31.819
               l-1.504-0.122h-0.007c-0.056,0-0.122-0.05-0.141-0.103l-0.625-1.431c-0.038-0.11-0.103-0.127-0.139-0.127s-0.103,0.017-0.14,0.127
               l-0.622,1.423l-0.003,0.008c-0.018,0.053-0.085,0.103-0.141,0.103l-1.511,0.122c-0.117,0-0.153,0.059-0.165,0.092
               c-0.01,0.034-0.015,0.101,0.078,0.172l1.131,1.015l0.009,0.005c0.044,0.034,0.07,0.113,0.053,0.166l-0.321,1.491
               c-0.021,0.066-0.017,0.118,0.011,0.159c0.043,0.059,0.125,0.064,0.212,0.005l1.312-0.71l0.01-0.008c0.044-0.03,0.131-0.03,0.175,0
               l1.321,0.718c0.041,0.029,0.078,0.043,0.113,0.043c0.04,0,0.075-0.018,0.098-0.048c0.028-0.041,0.033-0.093,0.013-0.159
               l-0.319-1.482L29.43,33.27c-0.018-0.053,0.008-0.132,0.053-0.166l1.14-1.02c0.093-0.07,0.088-0.138,0.076-0.172
               C30.689,31.878,30.651,31.819,30.535,31.819z M29.372,32.957c-0.106,0.08-0.155,0.236-0.117,0.361l0.305,1.413l-1.252-0.678
               c-0.103-0.071-0.273-0.071-0.376,0l-1.252,0.678l0.305-1.413c0.038-0.125-0.012-0.281-0.116-0.361l-1.075-0.964l1.426-0.114
               c0.131-0.002,0.266-0.1,0.308-0.224l0.594-1.354l0.593,1.354c0.042,0.124,0.176,0.222,0.309,0.224l1.426,0.114L29.372,32.957z
                M37.274,31.819l-1.503-0.122h-0.009c-0.055,0-0.121-0.05-0.14-0.103l-0.626-1.431c-0.037-0.11-0.102-0.127-0.139-0.127
               c-0.036,0-0.101,0.017-0.139,0.127l-0.623,1.423l-0.003,0.008c-0.018,0.053-0.084,0.103-0.141,0.103l-1.51,0.122
               c-0.117,0-0.153,0.059-0.164,0.092c-0.012,0.034-0.016,0.101,0.076,0.172l1.133,1.015l0.007,0.005
               c0.044,0.034,0.07,0.113,0.054,0.166l-0.322,1.491c-0.021,0.066-0.017,0.118,0.013,0.159c0.041,0.059,0.125,0.064,0.211,0.005
               l1.312-0.71l0.011-0.008c0.043-0.03,0.13-0.03,0.173,0l1.322,0.718c0.04,0.029,0.079,0.043,0.114,0.043
               c0.04,0,0.075-0.018,0.098-0.048c0.026-0.041,0.032-0.093,0.012-0.159l-0.32-1.482L36.17,33.27
               c-0.019-0.053,0.007-0.132,0.053-0.166l1.139-1.02c0.093-0.07,0.089-0.138,0.077-0.172S37.391,31.819,37.274,31.819z
                M36.111,32.957c-0.104,0.08-0.155,0.236-0.117,0.361l0.304,1.413l-1.251-0.678c-0.104-0.071-0.273-0.071-0.377,0l-1.251,0.678
               l0.305-1.413c0.038-0.125-0.013-0.281-0.117-0.361l-1.074-0.964l1.426-0.114c0.131-0.002,0.265-0.1,0.309-0.224l0.592-1.354
               l0.594,1.354c0.043,0.124,0.176,0.222,0.308,0.224l1.426,0.114C37.188,31.993,36.111,32.957,36.111,32.957z M39.047,28.692H16.465
               c-0.201,0-0.364,0.163-0.364,0.364s0.163,0.364,0.364,0.364h22.582c0.202,0,0.364-0.163,0.364-0.364S39.249,28.692,39.047,28.692z
                M18.927,27.597h0.725v-3.419h1.249v-0.656h-3.224v0.656h1.25L18.927,27.597z M21.381,23.522h0.726v4.075h-0.726V23.522z
                M24.935,27.701c0.598,0,1.151-0.218,1.52-0.725l-0.599-0.427c-0.271,0.346-0.589,0.495-0.916,0.495
               c-0.84,0-1.399-0.645-1.399-1.514c0-0.812,0.559-1.457,1.399-1.457c0.282,0,0.559,0.086,0.858,0.403l0.563-0.415
               c-0.402-0.466-0.875-0.645-1.427-0.645c-1.255,0-2.153,0.853-2.153,2.158C22.781,26.849,23.68,27.701,24.935,27.701z
                M27.671,25.594h0.04l1.768,2.004h1.018l-2.032-2.193l1.906-1.882h-0.978l-1.688,1.725h-0.034v-1.725h-0.726v4.075h0.726V25.594z
                M33.695,26.941h-2.079v-1.106h1.871v-0.655h-1.871v-1.002h1.975v-0.656h-2.7v4.075h2.804V26.941z M35.245,27.597h0.726v-3.419
               h1.249v-0.656h-3.224v0.656h1.249L35.245,27.597z M55.174,18.021c-0.264-0.209-0.609-0.283-0.933-0.205
               c-0.296,0.07-0.575,0.106-0.853,0.106c-2.001,0-3.63-1.629-3.63-3.631c0-0.751,0.229-1.473,0.662-2.088
               c0.236-0.333,0.267-0.769,0.079-1.133c-0.189-0.362-0.562-0.591-0.972-0.591H7.329c-0.361,0-0.699,0.178-0.902,0.476
               c-0.203,0.297-0.247,0.677-0.117,1.013c0.163,0.424,0.246,0.862,0.246,1.306c0,2.002-1.629,3.631-3.631,3.631
               c-0.488,0-0.962-0.095-1.406-0.282c-0.338-0.142-0.726-0.106-1.03,0.096C0.183,16.922,0,17.264,0,17.63v20.938
               c0,0.367,0.184,0.709,0.489,0.912c0.305,0.202,0.693,0.238,1.029,0.096c0.445-0.187,0.919-0.282,1.407-0.282
               c2.002,0,3.631,1.629,3.631,3.631c0,0.273-0.032,0.549-0.102,0.841c-0.078,0.326-0.001,0.668,0.206,0.932
               c0.208,0.262,0.523,0.415,0.857,0.415h41.28c0.335,0,0.649-0.153,0.858-0.415c0.206-0.264,0.283-0.605,0.206-0.932
               c-0.069-0.292-0.103-0.567-0.103-0.841c0-2.277,2.091-4.102,4.481-3.525c0.323,0.079,0.669,0.003,0.935-0.204
               c0.263-0.207,0.417-0.523,0.417-0.859V18.877C55.591,18.543,55.437,18.226,55.174,18.021z M53.403,37.103c-0.005,0-0.009,0-0.015,0
               c-3.208,0-5.817,2.61-5.817,5.818H8.743c0-3.208-2.61-5.818-5.818-5.818c-0.248,0-0.495,0.016-0.738,0.047V19.043
               c0.243,0.031,0.49,0.047,0.738,0.047c3.208,0,5.818-2.61,5.818-5.818c0-0.203-0.011-0.405-0.032-0.606h39.091
               c-0.152,0.523-0.231,1.068-0.231,1.624c0,3.208,2.609,5.817,5.817,5.817c0.006,0,0.01,0,0.015,0
               C53.403,20.108,53.403,37.103,53.403,37.103z M48.706,19.281c-1.465-0.538-2.45-1.946-2.45-3.503c0-0.201-0.163-0.364-0.364-0.364
               H10.023c-0.182,0-0.336,0.135-0.361,0.315c-0.214,1.548-1.381,2.808-2.906,3.136c-0.148,0.031-0.263,0.169-0.285,0.319
               c-0.003,0.018-0.007,0.057-0.007,0.074v17.607c0,0.183,0.136,0.338,0.317,0.361C8.28,37.425,9.5,38.5,9.888,39.963
               c0.043,0.16,0.188,0.271,0.353,0.271H45.73c0.165,0,0.31-0.11,0.353-0.271c0.337-1.269,1.331-2.277,2.596-2.631
               c0.158-0.044,0.267-0.188,0.267-0.352V19.623C48.944,19.469,48.849,19.333,48.706,19.281z M48.215,36.713
               c-1.295,0.452-2.319,1.49-2.757,2.792H10.512c-0.504-1.509-1.766-2.628-3.318-2.948l0.003-17.053
               c1.579-0.452,2.791-1.754,3.133-3.362h35.213c0.135,1.629,1.166,3.072,2.673,3.727v16.844H48.215z"/>
       </g>
       </svg>
    </span>&nbsp;&nbsp;&nbsp;
    <h4>
        Bookings
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
                                <input type="date" name="Date1" id="Date1" class="form-control" placeholder="Search..." id="generalSearch" >

                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div><br>

                            <div class="kt-input-icon kt-input-icon--left">
                                <input type="date" name="Date2" class="form-control" placeholder="Search..." id="generalSearch" id="Date2">

                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>

                        </div>

                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <input type="button" onclick="subDate()" value="FIND" class="btn btn-primary"/>
                        </div>
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Travler </label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98" onchange="subTravler(this)">
                                        <option value="-1">Select</option>
                                        @foreach ($Bookings as $booking)
                                            <option value="{{$booking->Travler_id}}">{{$booking->FirstName}} {{$booking->LastName}}</option>
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
        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--subtable kt-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;"><table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="text-align: left">

            <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort" style="width: 5%;"><span></span></th><th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 5%;"><span>ID</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;"><span >Tour</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width:10%"><span >Group ID</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;"><span >Booking Date</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;"><span >Travler's Name</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 10%;text-align: center"><span >Validated ?</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort" style="width: 15%;text-align: center"><span>Actions</span></th>
        </tr></thead><?php $cpt=0; ?>
            <tbody class="kt-datatable__body tbody" id="tab">
                @foreach ($Bookings as $booking)
                    <tr data-row="0" class="kt-datatable__row kt-datatable__row--even" >

                        <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID" style="width: 5%;text-align: left">
                            <a class="kt-datatable__toggle-subtable"  data-value="1" title="Load sub table"><i class="fa fa-caret-right"></i></a>
                        </td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 5%;text-align: left"><span>{{$booking->id}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >{{$booking->Title}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 10%;text-align: left"><span>{{$booking->Group_id}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >{{$booking->Date}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 15%;text-align: left"><span >{{$booking->FirstName}} {{$booking->LastName}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell" style="width: 10%"><span id="span"><?php
                            if($booking->Validated=="Yes")
                                echo "<img id='imgIco' src='/images/ok.png'/>";
                            else if($booking->Validated=="Not yet")
                                    echo "<span style='color:blue'>Not yet...</span>";
                                    else
                                        echo "<img id='imgIco' src='/images/del.png'/>";
                        ?></span></td>

                        <?php $cpt++; ?>
                        <td data-field="Actions" class="kt-datatable__cell" style="width: 15%;text-align: center"><span style="overflow: visible; position: relative;">
                            <a href="javascript:;" class="btn btn-sm btn-outline-success btn-icon btn-icon-md" title="Edit details">		                      <i data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal'.$cpt ?>" class="la la-check-square"></i>		                  </a>
                            <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal22'.$cpt ?>" class="btn btn-sm btn-outline-danger btn-icon btn-icon-md" title="Delete">		                      <i class="la la-close"></i>		                  </a>		              </span></td>

                    </tr>

<!-- Modal delete -->
<form method="POST" action="{{ route('Bookings.destroy', $booking->id) }}">
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

<!-- Modal delete -->
<form method="POST" action="{{ route('Bookings.update', $booking->id) }}">
    @csrf
    @method('PUT')
    <div class="modal fade" id="<?php echo'exampleModal'.$cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Validate Booking</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-lg-15">
                        <label><span style="font-weight: bold;color: red;">Are you sure you want to accept the booking ?</span></label><br>
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
        function subDate(){
            var date1 = document.getElementsByName("Date1")[0].value;
            var date2 = document.getElementsByName("Date2")[0].value;
            if(date1!="" && date2!=""){
                $.get("/SearchByDate", {'Date1':date1,'Date2':date2}).done(function (data) {
                    $("#tab").html(data);

                    if(document.getElementById("span").innerText=="Yes"){
                        document.getElementById("span").innerText="";
                        var img=document.createElement("img");
                        img.src='/images/ok.png';
                        document.getElementById("span").appendChild(img);
                    }else if(document.getElementById("span").innerText=="No"){
                        document.getElementById("span").innerText="";
                        var img=document.createElement("img");
                        img.src='/images/del.png';
                        document.getElementById("span").appendChild(img);
                    }
                });
            }else{
                alert("Please enter the two dates to find bookings ^_^");}

        }
        function subTravler(object){
            var travler = object.value;
            var str='<td data-field="Actions" class="kt-datatable__cell" style="width: 15%;text-align: center"><span style="overflow: visible; position: relative;"><a href="javascript:;" class="btn btn-sm btn-outline-success btn-icon btn-icon-md" title="Edit details">		                      <i data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal'.$cpt ?>" class="la la-check-square"></i></a><a href="javascript:;"  data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal22'.$cpt ?>" class="btn btn-sm btn-outline-danger btn-icon btn-icon-md" title="Delete">		                      <i class="la la-close"></i>		                  </a>		              </span></td><form method="POST" action="{{ route('Bookings.destroy', $booking->id) }}">@csrf @method('DELETE')<div class="modal fade" id="<?php echo'exampleModal22'.$cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content">    <div class="modal-header">    <h5 class="modal-title" id="exampleModalLabel">Remove Booking</h5>    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    </div>    <div class="modal-body">        <div class="form-group row">            <div class="col-lg-15">                <label><span style="font-weight: bold;color: red;">Are you sure you want to delete the recording ?</span></label><br>            </div>    </div>    </div>    <div class="modal-footer">    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>    <button type="submit" class="btn btn-danger">Yes</button>    </div></div></div></div></form><form method="POST" action="{{ route('Bookings.update', $booking->id) }}">    @csrf    @method('PUT')    <div class="modal fade" id="<?php echo'exampleModal'.$cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Validate Booking</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">    <div class="form-group row">        <div class="col-lg-15">            <label><span style="font-weight: bold;color: red;">Are you sure you want to accept the booking ?</span></label><br>        </div></div></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button><button type="submit" class="btn btn-danger">Yes</button></div></div></div>    </div></form>';



            $.get("/SearchByTravler", {'Travler_id':travler,'str':str}).done(function (data) {
                $("#tab").html(data);

                if(document.getElementById("span").innerText=="Yes"){
                        document.getElementById("span").innerText="";
                        var img=document.createElement("img");
                        img.src='/images/ok.png';
                        document.getElementById("span").appendChild(img);
                    }else if(document.getElementById("span").innerText=="No"){
                        document.getElementById("span").innerText="";
                        var img=document.createElement("img");
                        img.src='/images/del.png';
                        document.getElementById("span").appendChild(img);
                    }


            });
        }


    </script>
@endsection
