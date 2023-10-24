@extends('dashboard.admin.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="">
            <div class="progress-container bg-white rounded-30 p-xxl-5 p-xl-3 p-3 mb-3">
                <h2 class="primary_title text-black mb-4">All Progress</h2>
                <div class="row row-cols-lg-3 row-cols-sm-1">
                    <div class="col mb-3 mb-md-0">
                        <div class="primary_box_black primary_box p-3">
                            <div class="">
                                <h3 class=" title-one text-center text-md-start">Ongoing Courses</h3>
                                {{-- <h4 class="title-two text-center text-md-start">{{$course}}</h4> --}}
                            </div>
                            <div class="d-flex justify-content-end">
                                <p class="align-self-end cpl-rate">Completion rate</p>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="76" height="76"
                                        viewBox="0 0 76 76">
                                        <defs>
                                            <linearGradient id="linear-gradient" y1="0.891" x2="1"
                                                y2="0.109" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ffe17f" />
                                                <stop offset="1" stop-color="#d4af37" />
                                            </linearGradient>
                                        </defs>
                                        <g id="chart" transform="translate(-0.064 0.028)">
                                            <g id="bg" transform="translate(0.064 -0.028)" fill="none"
                                                stroke="#f6efff" stroke-width="4">
                                                <circle cx="38" cy="38" r="38" stroke="none" />
                                                <circle cx="38" cy="38" r="36" fill="none" />
                                            </g>
                                            <path id="circle_chart" data-name="circle chart"
                                                d="M492.523,505.338a2.009,2.009,0,1,1,3.75,1.441,33.9,33.9,0,1,0,33.461-21.769,2.01,2.01,0,0,1,.209-4.014,38,38,0,1,1-37.419,24.342Z"
                                                transform="translate(-489.937 -481.021)" fill="#000" />
                                            <text id="_78_" data-name="78%"
                                                transform="translate(21.064 44.972)" fill="#000"
                                                font-size="18" font-family="SegoeUI, Segoe UI">
                                                <tspan x="0" y="0">78%</tspan>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 mb-md-0">
                        <div class="primary_box p-3">
                            <div class="">
                                <h3 class=" title-one text-center text-md-start">Ongoing Trainings</h3>
                                {{-- <h4 class="title-two text-center text-md-start">{{$coach}}</h4> --}}
                            </div>
                            <div class="d-flex justify-content-end">
                                <p class="align-self-end cpl-rate">Completion rate</p>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="76" height="76"
                                        viewBox="0 0 76 76">
                                        <defs>
                                            <linearGradient id="linear-gradient" y1="0.715" x2="1"
                                                y2="0.285" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#3c3c3c" />
                                                <stop offset="1" />
                                            </linearGradient>
                                        </defs>
                                        <g id="chart" transform="translate(0.11 0.037)">
                                            <g id="bg" transform="translate(-0.11 -0.037)" fill="none"
                                                stroke="#f6efff" stroke-width="4">
                                                <circle cx="38" cy="38" r="38" stroke="none" />
                                                <circle cx="38" cy="38" r="36" fill="none" />
                                            </g>
                                            <path id="circle_chart" data-name="circle chart"
                                                d="M0,74.1a1.9,1.9,0,0,1,1.431-1.839l-.05-.448A34.124,34.124,0,0,0,35.637,50.065,33.917,33.917,0,0,0,15.974,6.214,34.259,34.259,0,0,0,5.58,4.019,2.011,2.011,0,1,1,5.791,0,38.023,38.023,0,0,1,2.266,75.967,1.929,1.929,0,0,1,1.91,76,1.905,1.905,0,0,1,0,74.1Z"
                                                transform="translate(33.89 -0.037)" fill="#000" />
                                            <text id="_56_" data-name="56%"
                                                transform="translate(20.89 44.963)" font-size="18"
                                                fill="#000" font-family="SegoeUI, Segoe UI">
                                                <tspan x="0" y="0">56%</tspan>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 mb-md-0">
                        <div class="primary_box p-3">
                            <div class="">
                                <h3 class=" title-one text-center text-md-start">Total Services Taken</h3>
                                {{-- <h4 class="title-two text-center text-md-start">{{$service}}</h4> --}}
                            </div>
                            <div class="d-flex justify-content-end">
                                <p class="align-self-end cpl-rate">Completion rate</p>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="76.246"
                                        height="76" viewBox="0 0 76.246 76">
                                        <defs>
                                            <linearGradient id="linear-gradient" y1="0.891" x2="1"
                                                y2="0.109" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#464646" />
                                                <stop offset="1" />
                                            </linearGradient>
                                        </defs>
                                        <g id="chart" transform="translate(0.284 0.028)">
                                            <g id="bg" transform="translate(-0.284 -0.028)" fill="none"
                                                stroke="#f6efff" stroke-width="4">
                                                <circle cx="38" cy="38" r="38" stroke="none" />
                                                <circle cx="38" cy="38" r="36" fill="none" />
                                            </g>
                                            <path id="circle_chart" data-name="circle chart"
                                                d="M1012.523,505.338a2.009,2.009,0,1,1,3.75,1.441,33.9,33.9,0,1,0,33.461-21.769,2.01,2.01,0,0,1,.209-4.014,38,38,0,1,1-37.419,24.342Z"
                                                transform="translate(-1009.999 -480.993)" fill="#000" />
                                            <text id="_70_" data-name="70%"
                                                transform="translate(20.716 44.972)" font-size="18"
                                                fill="#000" font-family="SegoeUI, Segoe UI">
                                                <tspan x="0" y="0">70%</tspan>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="bg-white rounded-30 p-sm-5 p-3">
                <div class="d-md-flex mb-5">
                    <h2 class="primary_title text-black align-self-center mb-3">Business Essential Services
                    </h2>
                    <div class="ms-auto tabs-services">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active border-raduise-nav" id="home-tab"
                                    data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                    aria-controls="home" aria-selected="true">All Services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-raduise-nav-2" id="profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">My Services</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                        aria-labelledby="home-tab">

                        <div
                            class="row row-cols-xxl-3 row-cols-xl-2 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="Business_License" data-name="Business License"
                                                xmlns="http://www.w3.org/2000/svg" width="27.856"
                                                height="25.897" viewBox="0 0 27.856 25.897">
                                                <path id="Path_92" data-name="Path 92"
                                                    d="M24.374,0H3.482A3.485,3.485,0,0,0,0,3.482V22.416A3.485,3.485,0,0,0,3.482,25.9H24.374a3.485,3.485,0,0,0,3.482-3.482V3.482A3.485,3.485,0,0,0,24.374,0ZM10.663,22.85a2.506,2.506,0,0,0-2.5-2.5H3.047V3.482a.442.442,0,0,1,.436-.436H24.374a.442.442,0,0,1,.436.436V20.347H19.26a2.506,2.506,0,0,0-2.5,2.5Z"
                                                    fill="#fff" />
                                                <path id="Path_93" data-name="Path 93"
                                                    d="M7.523,7.047h6.093a1.523,1.523,0,0,0,0-3.047H7.523a1.523,1.523,0,0,0,0,3.047Z"
                                                    transform="translate(3.14 2.093)" fill="#fff" />
                                                <path id="Path_94" data-name="Path 94"
                                                    d="M15.663,10.047a1.523,1.523,0,1,0,0-3.047H6.523a1.523,1.523,0,0,0,0,3.047Z"
                                                    transform="translate(2.617 3.663)" fill="#fff" />
                                                <path id="Path_95" data-name="Path 95"
                                                    d="M15.14,11.523A1.523,1.523,0,0,0,13.617,10H7.523a1.523,1.523,0,1,0,0,3.047h6.093A1.523,1.523,0,0,0,15.14,11.523Z"
                                                    transform="translate(3.14 5.234)" fill="#fff" />
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>Business License</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.783"
                                                height="19.396" viewBox="0 0 26.783 19.396">
                                                <path id="ein_tin" data-name="ein/tin"
                                                    d="M25.845,5.695,14.334.212a2.187,2.187,0,0,0-1.886,0L.939,5.7A1.633,1.633,0,0,0,.819,8.59v5.589a1.192,1.192,0,0,0,2.384,0V9.747l1.471.7-.03,3.63A2.21,2.21,0,0,0,5.9,16.062l6.551,3.118a2.181,2.181,0,0,0,1.889,0l6.505-3.1A2.206,2.206,0,0,0,22.092,14.1V12.493a1.192,1.192,0,1,0-2.384,0v1.487l-6.317,3.007L7.029,13.959l.019-2.383,5.533,2.635a1.866,1.866,0,0,0,.81.186,1.892,1.892,0,0,0,.812-.186L25.845,8.669a1.647,1.647,0,0,0,0-2.974ZM13.391,11.961,3.36,7.184,13.392,2.405,23.424,7.182Z"
                                                    transform="translate(0 0)" fill="#fff" />
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>ein/tin</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.783"
                                                height="19.396" viewBox="0 0 26.783 19.396">
                                                <path id="ein_tin" data-name="ein/tin"
                                                    d="M25.845,5.695,14.334.212a2.187,2.187,0,0,0-1.886,0L.939,5.7A1.633,1.633,0,0,0,.819,8.59v5.589a1.192,1.192,0,0,0,2.384,0V9.747l1.471.7-.03,3.63A2.21,2.21,0,0,0,5.9,16.062l6.551,3.118a2.181,2.181,0,0,0,1.889,0l6.505-3.1A2.206,2.206,0,0,0,22.092,14.1V12.493a1.192,1.192,0,1,0-2.384,0v1.487l-6.317,3.007L7.029,13.959l.019-2.383,5.533,2.635a1.866,1.866,0,0,0,.81.186,1.892,1.892,0,0,0,.812-.186L25.845,8.669a1.647,1.647,0,0,0,0-2.974ZM13.391,11.961,3.36,7.184,13.392,2.405,23.424,7.182Z"
                                                    transform="translate(0 0)" fill="#fff" />
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>HUBZone</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="23.559" height="26.7" viewBox="0 0 23.559 26.7">
                                                <path id="Path_84" data-name="Path 84"
                                                    d="M17.276,26.7H6.282A6.289,6.289,0,0,1,0,20.418V6.282A6.289,6.289,0,0,1,6.282,0h7.853a1.566,1.566,0,0,1,1.11.46L23.1,8.313a1.576,1.576,0,0,1,.46,1.11V20.418A6.289,6.289,0,0,1,17.276,26.7ZM6.282,3.141A3.144,3.144,0,0,0,3.141,6.282V20.418a3.144,3.144,0,0,0,3.141,3.141H17.276a3.145,3.145,0,0,0,3.141-3.141V10.074L13.485,3.141Z"
                                                    fill="#fff" />
                                                <path id="Path_85" data-name="Path 85"
                                                    d="M16.423,12.565H9.58A2.583,2.583,0,0,1,7,9.984V1.571a1.571,1.571,0,1,1,3.141,0V9.423h6.282a1.571,1.571,0,1,1,0,3.141Z"
                                                    transform="translate(3.994)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Business Plan</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.493"
                                                height="25.485" viewBox="0 0 25.493 25.485">
                                                <g id="icon_1_">
                                                    <path id="Path_1269" data-name="Path 1269"
                                                        d="M7.648,25.485A1.275,1.275,0,0,1,6.373,24.21V20.388H5.1a5.1,5.1,0,0,1-5.1-5.1V5.1A5.1,5.1,0,0,1,5.1,0h15.3a5.1,5.1,0,0,1,5.1,5.1V15.291a5.1,5.1,0,0,1-5.1,5.1H16.909L8.28,25.316A1.272,1.272,0,0,1,7.648,25.485ZM5.1,2.548A2.552,2.552,0,0,0,2.549,5.1V15.291A2.552,2.552,0,0,0,5.1,17.839H7.648a1.274,1.274,0,0,1,1.275,1.274v2.9l7.016-4.008a1.271,1.271,0,0,1,.632-.168h3.824a2.552,2.552,0,0,0,2.549-2.548V5.1a2.552,2.552,0,0,0-2.549-2.548Z"
                                                        fill="#fff" />
                                                </g>
                                                <path id="Path_1270" data-name="Path 1270"
                                                    d="M14.146,5.883A1.148,1.148,0,0,0,13,7.031V13.8a1.148,1.148,0,0,0,2.3,0V7.03a1.147,1.147,0,0,0-1.148-1.147Z"
                                                    transform="translate(-1.953 -0.884)" fill="#fff" />
                                                <ellipse id="Ellipse_12" data-name="Ellipse 12" cx="1.216"
                                                    cy="1.216" rx="1.216" ry="1.216"
                                                    transform="translate(10.977 14.635)" fill="#fff" />
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>Mission</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.396"
                                                height="28.396" viewBox="0 0 26.396 28.396">
                                                <g id="Vision" transform="translate(-6 -7)">
                                                    <rect id="bounding_box_1_" width="26.396"
                                                        height="28.396" transform="translate(6 7)"
                                                        fill="none" />
                                                    <path id="Path_108" data-name="Path 108"
                                                        d="M18.361,27.525H8.262a1.262,1.262,0,0,1,0-2.525h10.1a1.262,1.262,0,0,1,0,2.525Z"
                                                        transform="translate(1.837 6.559)" fill="#fff" />
                                                    <path id="Path_109" data-name="Path 109"
                                                        d="M23.05,27.525H19.262a1.262,1.262,0,0,1,0-2.525H23.05a1.262,1.262,0,0,1,0,2.525Z"
                                                        transform="translate(4.723 6.559)" fill="#fff" />
                                                    <g id="Group_114" data-name="Group 114"
                                                        transform="translate(8.837 7.574)">
                                                        <path id="Path_110" data-name="Path 110"
                                                            d="M8.262,27.42a1.262,1.262,0,0,1-1.2-1.663l4.462-13.389a1.256,1.256,0,0,1,.7-.76l6.249-2.677a1.258,1.258,0,0,1,1.39.268l5.355,5.356a1.263,1.263,0,0,1,.268,1.39l-2.677,6.249a1.266,1.266,0,0,1-.761.7L8.661,27.356A1.244,1.244,0,0,1,8.262,27.42Zm5.481-13.714L10.258,24.162l10.456-3.485,2.118-4.942-4.147-4.147Z"
                                                            transform="translate(-7 -5.258)" fill="#fff" />
                                                        <path id="Path_111" data-name="Path 111"
                                                            d="M9.676,23.78a1.262,1.262,0,0,1-.892-2.155l5.356-5.356a1.262,1.262,0,0,1,1.785,1.785L10.569,23.41A1.259,1.259,0,0,1,9.676,23.78Z"
                                                            transform="translate(-6.63 -3.402)"
                                                            fill="#fff" />
                                                        <path id="Path_112" data-name="Path 112"
                                                            d="M25.3,15.666a1.263,1.263,0,0,1-.892-.369L17.27,8.156A1.262,1.262,0,1,1,19.054,6.37L26.2,13.51a1.263,1.263,0,0,1-.891,2.156Z"
                                                            transform="translate(-4.403 -6)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Vision</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="25.629" height="25.768" viewBox="0 0 25.629 25.768">
                                                <path id="Path_97" data-name="Path 97"
                                                    d="M24.464,21.446A1.164,1.164,0,0,1,23.3,20.281a.843.843,0,0,0-.832-.832H3.162a.845.845,0,0,0-.832.832,1.165,1.165,0,0,1-2.33,0,3.166,3.166,0,0,1,3.162-3.162H22.467a3.166,3.166,0,0,1,3.162,3.162A1.164,1.164,0,0,1,24.464,21.446Z"
                                                    transform="translate(0 2.823)" fill="#fff" />
                                                <path id="Path_98" data-name="Path 98"
                                                    d="M23.134,5.965H2.165A1.165,1.165,0,0,1,1.779,3.7L11.657.233a2.238,2.238,0,0,1,1.986,0L23.521,3.7a1.165,1.165,0,0,1-.387,2.264ZM9,3.635h7.3L12.794,2.4a1.08,1.08,0,0,1-.179-.08c-.058.031-.047.058-.11.08Z"
                                                    transform="translate(0.165 -0.001)" fill="#fff" />
                                                <path id="Path_99" data-name="Path 99"
                                                    d="M5.165,17.275A1.165,1.165,0,0,1,4,16.11V10.285a1.165,1.165,0,0,1,2.33,0V16.11A1.165,1.165,0,0,1,5.165,17.275Z"
                                                    transform="translate(0.66 1.504)" fill="#fff" />
                                                <path id="Path_100" data-name="Path 100"
                                                    d="M11.165,17.275A1.165,1.165,0,0,1,10,16.11V10.285a1.165,1.165,0,0,1,2.33,0V16.11A1.165,1.165,0,0,1,11.165,17.275Z"
                                                    transform="translate(1.65 1.504)" fill="#fff" />
                                                <path id="Path_101" data-name="Path 101"
                                                    d="M17.165,17.275A1.165,1.165,0,0,1,16,16.11V10.285a1.165,1.165,0,0,1,2.33,0V16.11A1.165,1.165,0,0,1,17.165,17.275Z"
                                                    transform="translate(2.639 1.504)" fill="#fff" />
                                                <path id="Path_102" data-name="Path 102"
                                                    d="M19.145,22.45H5.165a1.165,1.165,0,1,1,0-2.33h13.98a1.165,1.165,0,1,1,0,2.33Z"
                                                    transform="translate(0.66 3.318)" fill="#fff" />
                                                <path id="Path_103" data-name="Path 103"
                                                    d="M23.134,8.45H2.165a1.165,1.165,0,1,1,0-2.33H23.134a1.165,1.165,0,1,1,0,2.33Z"
                                                    transform="translate(0.165 1.009)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Business Bank Account</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.917"
                                                height="22.971" viewBox="0 0 26.917 22.971">
                                                <g id="Group_1145" data-name="Group 1145"
                                                    transform="translate(10.415 17.021)">
                                                    <g id="Group_1143" data-name="Group 1143"
                                                        transform="translate(4.471)">
                                                        <rect id="Rectangle_107" data-name="Rectangle 107"
                                                            width="1.615" height="4.874" fill="#fff" />
                                                    </g>
                                                    <g id="Group_1144" data-name="Group 1144">
                                                        <rect id="Rectangle_108" data-name="Rectangle 108"
                                                            width="1.615" height="4.874" fill="#fff" />
                                                    </g>
                                                </g>
                                                <g id="Group_1148" data-name="Group 1148">
                                                    <g id="Group_1146" data-name="Group 1146">
                                                        <path id="Path_1267" data-name="Path 1267"
                                                            d="M611.2,809.175H587.423a1.573,1.573,0,0,1-1.571-1.571V792.648a1.573,1.573,0,0,1,1.571-1.571H611.2a1.574,1.574,0,0,1,1.571,1.571V807.6A1.573,1.573,0,0,1,611.2,809.175Zm-23.192-2.153h22.61V793.23h-22.61Z"
                                                            transform="translate(-585.852 -791.077)"
                                                            fill="#fff" />
                                                    </g>
                                                    <g id="Group_1147" data-name="Group 1147"
                                                        transform="translate(7.685 20.818)">
                                                        <path id="Path_1268" data-name="Path 1268"
                                                            d="M610.6,831.9H601.2a1.076,1.076,0,0,1-1.077-1.077h0a1.076,1.076,0,0,1,1.077-1.077H610.6a1.076,1.076,0,0,1,1.077,1.077h0A1.077,1.077,0,0,1,610.6,831.9Z"
                                                            transform="translate(-600.127 -829.748)"
                                                            fill="#fff" />
                                                    </g>
                                                </g>
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>CAGE</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="23.559" height="26.7" viewBox="0 0 23.559 26.7">
                                                <path id="Path_84" data-name="Path 84"
                                                    d="M17.276,26.7H6.282A6.289,6.289,0,0,1,0,20.418V6.282A6.289,6.289,0,0,1,6.282,0h7.853a1.566,1.566,0,0,1,1.11.46L23.1,8.313a1.576,1.576,0,0,1,.46,1.11V20.418A6.289,6.289,0,0,1,17.276,26.7ZM6.282,3.141A3.144,3.144,0,0,0,3.141,6.282V20.418a3.144,3.144,0,0,0,3.141,3.141H17.276a3.145,3.145,0,0,0,3.141-3.141V10.074L13.485,3.141Z"
                                                    fill="#fff" />
                                                <path id="Path_85" data-name="Path 85"
                                                    d="M16.423,12.565H9.58A2.583,2.583,0,0,1,7,9.984V1.571a1.571,1.571,0,1,1,3.141,0V9.423h6.282a1.571,1.571,0,1,1,0,3.141Z"
                                                    transform="translate(3.994)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>8(a)</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="26.865" height="26.865" viewBox="0 0 26.865 26.865">
                                                <path id="Path_86" data-name="Path 86"
                                                    d="M20.895,26.865H5.97A5.976,5.976,0,0,1,0,20.895V5.97A5.976,5.976,0,0,1,5.97,0H20.895a5.976,5.976,0,0,1,5.97,5.97V20.895A5.976,5.976,0,0,1,20.895,26.865ZM5.97,2.985A2.988,2.988,0,0,0,2.985,5.97V20.895A2.988,2.988,0,0,0,5.97,23.88H20.895a2.989,2.989,0,0,0,2.985-2.985V5.97a2.989,2.989,0,0,0-2.985-2.985Z"
                                                    fill="#fff" />
                                                <path id="Path_87" data-name="Path 87"
                                                    d="M15.447,7.985H6.492A1.492,1.492,0,0,1,6.492,5h8.955a1.492,1.492,0,1,1,0,2.985Z"
                                                    transform="translate(2.462 2.462)" fill="#fff" />
                                                <path id="Path_88" data-name="Path 88"
                                                    d="M17.432,10.985H5.492A1.492,1.492,0,1,1,5.492,8h11.94a1.492,1.492,0,1,1,0,2.985Z"
                                                    transform="translate(1.97 3.94)" fill="#fff" />
                                                <path id="Path_89" data-name="Path 89"
                                                    d="M15.447,13.985H6.492a1.492,1.492,0,1,1,0-2.985h8.955a1.492,1.492,0,1,1,0,2.985Z"
                                                    transform="translate(2.462 5.417)" fill="#fff" />
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>DNB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="26.67" height="26.67" viewBox="0 0 26.67 26.67">
                                                <path id="Path_70" data-name="Path 70"
                                                    d="M8,26.67a1.333,1.333,0,0,1-1.333-1.333v-4H5.334A5.339,5.339,0,0,1,0,16V5.334A5.339,5.339,0,0,1,5.334,0h16A5.339,5.339,0,0,1,26.67,5.334V16a5.339,5.339,0,0,1-5.334,5.334H17.69L8.664,26.494A1.337,1.337,0,0,1,8,26.67Zm-2.667-24A2.67,2.67,0,0,0,2.667,5.334V16a2.67,2.67,0,0,0,2.667,2.667H8A1.333,1.333,0,0,1,9.334,20v3.036l7.34-4.194a1.324,1.324,0,0,1,.661-.176h4A2.671,2.671,0,0,0,24,16V5.334a2.671,2.671,0,0,0-2.667-2.667Z"
                                                    fill="#fff" />
                                                <circle id="Ellipse_7" data-name="Ellipse 7" cx="1.333"
                                                    cy="1.333" r="1.333" transform="translate(8.001 9.334)"
                                                    fill="#fff" />
                                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="1.333"
                                                    cy="1.333" r="1.333" transform="translate(12.001 9.334)"
                                                    fill="#fff" />
                                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="1.333"
                                                    cy="1.333" r="1.333" transform="translate(16.002 9.334)"
                                                    fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>MBE</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_2_" xmlns="http://www.w3.org/2000/svg"
                                                width="29.069" height="17.138" viewBox="0 0 29.069 17.138">
                                                <path id="Path_71" data-name="Path 71"
                                                    d="M1.039,16.7a1.038,1.038,0,0,1-.554-1.916l4.451-2.8A2.969,2.969,0,0,1,7.951,11.8a7.691,7.691,0,0,0,5.062-.032,2.905,2.905,0,0,1,2.92.115L20.3,14.8a1.038,1.038,0,0,1-1.152,1.727l-4.353-2.9a.808.808,0,0,0-.816-.013,9.6,9.6,0,0,1-6.929.065.941.941,0,0,0-.962.032l-4.5,2.835A1.049,1.049,0,0,1,1.039,16.7Z"
                                                    transform="translate(0 0.436)" fill="#fff" />
                                                <path id="Path_72" data-name="Path 72"
                                                    d="M10.14,10.381A5.191,5.191,0,1,1,15.33,5.191,5.2,5.2,0,0,1,10.14,10.381Zm0-8.305a3.114,3.114,0,1,0,3.114,3.114A3.118,3.118,0,0,0,10.14,2.076Z"
                                                    transform="translate(0.189)" fill="#fff" />
                                                <path id="Path_73" data-name="Path 73"
                                                    d="M27.415,13.146a1.031,1.031,0,0,1-.575-.174l-3.143-2.1a.3.3,0,0,0-.3.005,7.162,7.162,0,0,1-5.262.052.419.419,0,0,0-.4,0,1.038,1.038,0,1,1-1.2-1.7,2.445,2.445,0,0,1,2.5-.174,5.277,5.277,0,0,0,3.4-.019,2.386,2.386,0,0,1,2.4.1l3.158,2.106a1.039,1.039,0,0,1-.578,1.9Z"
                                                    transform="translate(0.614 0.334)" fill="#fff" />
                                                <path id="Path_74" data-name="Path 74"
                                                    d="M20.611,8.583a4.037,4.037,0,1,1,4.037-4.037A4.042,4.042,0,0,1,20.611,8.583Zm0-6a1.961,1.961,0,1,0,1.961,1.961A1.963,1.963,0,0,0,20.611,2.584Z"
                                                    transform="translate(0.632 0.019)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Pitch</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">

                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="Owner_Information" data-name="Owner Information"
                                                xmlns="http://www.w3.org/2000/svg" width="26.555"
                                                height="26.547" viewBox="0 0 26.555 26.547">
                                                <g id="icon_1_">
                                                    <path id="Path_90" data-name="Path 90"
                                                        d="M7.967,26.547A1.327,1.327,0,0,1,6.639,25.22V21.238H5.312A5.315,5.315,0,0,1,0,15.928V5.309A5.315,5.315,0,0,1,5.311,0H21.244a5.315,5.315,0,0,1,5.311,5.309V15.928a5.316,5.316,0,0,1-5.311,5.309h-3.63L8.625,26.372A1.322,1.322,0,0,1,7.967,26.547ZM5.311,2.655A2.657,2.657,0,0,0,2.656,5.309V15.928a2.659,2.659,0,0,0,2.656,2.655H7.968A1.327,1.327,0,0,1,9.3,19.91v3.022L16.6,18.758a1.313,1.313,0,0,1,.657-.175h3.983A2.659,2.659,0,0,0,23.9,15.928V5.309a2.659,2.659,0,0,0-2.656-2.655Z"
                                                        fill="#fff" />
                                                </g>
                                                <g id="Group_110" data-name="Group 110"
                                                    transform="translate(9.503 5.294)">
                                                    <path id="Path_91" data-name="Path 91"
                                                        d="M10.358,13.348h0a1.2,1.2,0,0,1-1.2-1.195v-.068a4.5,4.5,0,0,1,1.86-3.648,1.145,1.145,0,0,0,.433-1.246,1.1,1.1,0,0,0-.773-.771,1.143,1.143,0,0,0-1.019.194,1.129,1.129,0,0,0-.293.337,1.159,1.159,0,0,1-1.014.563h0A1.2,1.2,0,0,1,7.337,5.69a3.53,3.53,0,1,1,5.082,4.688,2.106,2.106,0,0,0-.865,1.708v.068A1.2,1.2,0,0,1,10.358,13.348Z"
                                                        transform="translate(-7.159 -3.988)" fill="#fff" />
                                                </g>
                                                <circle id="Ellipse_11" data-name="Ellipse 11" cx="1.268"
                                                    cy="1.268" r="1.268"
                                                    transform="translate(11.434 15.245)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Owner Information</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="SAM.gov_Expiration" data-name="SAM.gov Expiration"
                                                xmlns="http://www.w3.org/2000/svg" width="27.963"
                                                height="25.528" viewBox="0 0 27.963 25.528">
                                                <g id="Group_108" data-name="Group 108">
                                                    <g id="Group_107" data-name="Group 107">
                                                        <path id="Path_75" data-name="Path 75"
                                                            d="M22.728,25.528H5.236A5.236,5.236,0,0,1,0,20.293V5.236A5.235,5.235,0,0,1,5.236,0h12.9a5.234,5.234,0,0,1,5.234,5.234V17.981a1.5,1.5,0,0,1-1.5,1.5h0a1.5,1.5,0,0,1-1.5-1.5V5.236A2.241,2.241,0,0,0,18.14,2.995H5.236A2.241,2.241,0,0,0,2.995,5.236V20.3a2.24,2.24,0,0,0,2.239,2.239h17.5A2.24,2.24,0,0,0,24.969,20.3V3.257a1.5,1.5,0,0,1,1.5-1.5h0a1.5,1.5,0,0,1,1.5,1.5V20.294A5.234,5.234,0,0,1,22.728,25.528Z"
                                                            fill="#fff" />
                                                    </g>
                                                </g>
                                                <path id="Path_76" data-name="Path 76"
                                                    d="M13.946,8.555H5.54a1.4,1.4,0,1,1,0-2.8h8.407a1.4,1.4,0,1,1,0,2.8Z"
                                                    transform="translate(1.75 2.432)" fill="#fff" />
                                                <path id="Path_77" data-name="Path 77"
                                                    d="M13.946,12.494H5.54a1.4,1.4,0,1,1,0-2.8h8.407a1.4,1.4,0,1,1,0,2.8Z"
                                                    transform="translate(1.75 4.097)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>SAM.gov Expiration</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="28.098" height="30.581" viewBox="0 0 28.098 30.581">
                                                <path id="Path_78" data-name="Path 78"
                                                    d="M24.2,14.724H21.931v-3.4c0-5-3.558-9.061-7.928-9.061S6.074,6.33,6.074,11.326v3.4H3.809v-3.4C3.809,5.081,8.381,0,14,0S24.2,5.081,24.2,11.326Z"
                                                    transform="translate(0.505)" fill="#fff" />
                                                <path id="Path_79" data-name="Path 79"
                                                    d="M4.983,21.167a4.983,4.983,0,1,1,0-9.967c1.682,0,2.727,1.91,2.727,4.983S6.667,21.167,4.983,21.167Zm-.1-7.7a2.718,2.718,0,0,0,0,5.432,5.007,5.007,0,0,0,.561-2.716A4.985,4.985,0,0,0,4.885,13.467Z"
                                                    transform="translate(0 1.485)" fill="#fff" />
                                                <path id="Path_80" data-name="Path 80"
                                                    d="M20.727,21.167c-1.682,0-2.726-1.908-2.726-4.983a9.1,9.1,0,0,1,.468-3.039c.623-1.692,1.682-1.945,2.258-1.945a4.983,4.983,0,1,1,0,9.967Zm.143-2.226h0Zm-.043-5.474a5.011,5.011,0,0,0-.561,2.716,5.007,5.007,0,0,0,.561,2.716,2.718,2.718,0,0,0,0-5.432Z"
                                                    transform="translate(2.387 1.485)" fill="#fff" />
                                                <path id="Path_81" data-name="Path 81"
                                                    d="M15.942,27.061a1.133,1.133,0,1,1,0-2.265,4.535,4.535,0,0,0,4.53-4.53V19.133a1.133,1.133,0,0,1,2.265,0v1.133A6.8,6.8,0,0,1,15.942,27.061Z"
                                                    transform="translate(1.964 2.387)" fill="#fff" />
                                                <circle id="Ellipse_10" data-name="Ellipse 10" cx="2.265"
                                                    cy="2.265" r="2.265" transform="translate(14.508 26.05)"
                                                    fill="#fff" />
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>AOI</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div
                            class="row row-cols-xxl-3 row-cols-xl-2 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="25.629" height="25.768" viewBox="0 0 25.629 25.768">
                                                <path id="Path_97" data-name="Path 97"
                                                    d="M24.464,21.446A1.164,1.164,0,0,1,23.3,20.281a.843.843,0,0,0-.832-.832H3.162a.845.845,0,0,0-.832.832,1.165,1.165,0,0,1-2.33,0,3.166,3.166,0,0,1,3.162-3.162H22.467a3.166,3.166,0,0,1,3.162,3.162A1.164,1.164,0,0,1,24.464,21.446Z"
                                                    transform="translate(0 2.823)" fill="#fff" />
                                                <path id="Path_98" data-name="Path 98"
                                                    d="M23.134,5.965H2.165A1.165,1.165,0,0,1,1.779,3.7L11.657.233a2.238,2.238,0,0,1,1.986,0L23.521,3.7a1.165,1.165,0,0,1-.387,2.264ZM9,3.635h7.3L12.794,2.4a1.08,1.08,0,0,1-.179-.08c-.058.031-.047.058-.11.08Z"
                                                    transform="translate(0.165 -0.001)" fill="#fff" />
                                                <path id="Path_99" data-name="Path 99"
                                                    d="M5.165,17.275A1.165,1.165,0,0,1,4,16.11V10.285a1.165,1.165,0,0,1,2.33,0V16.11A1.165,1.165,0,0,1,5.165,17.275Z"
                                                    transform="translate(0.66 1.504)" fill="#fff" />
                                                <path id="Path_100" data-name="Path 100"
                                                    d="M11.165,17.275A1.165,1.165,0,0,1,10,16.11V10.285a1.165,1.165,0,0,1,2.33,0V16.11A1.165,1.165,0,0,1,11.165,17.275Z"
                                                    transform="translate(1.65 1.504)" fill="#fff" />
                                                <path id="Path_101" data-name="Path 101"
                                                    d="M17.165,17.275A1.165,1.165,0,0,1,16,16.11V10.285a1.165,1.165,0,0,1,2.33,0V16.11A1.165,1.165,0,0,1,17.165,17.275Z"
                                                    transform="translate(2.639 1.504)" fill="#fff" />
                                                <path id="Path_102" data-name="Path 102"
                                                    d="M19.145,22.45H5.165a1.165,1.165,0,1,1,0-2.33h13.98a1.165,1.165,0,1,1,0,2.33Z"
                                                    transform="translate(0.66 3.318)" fill="#fff" />
                                                <path id="Path_103" data-name="Path 103"
                                                    d="M23.134,8.45H2.165a1.165,1.165,0,1,1,0-2.33H23.134a1.165,1.165,0,1,1,0,2.33Z"
                                                    transform="translate(0.165 1.009)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Business Bank Account</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.917"
                                                height="22.971" viewBox="0 0 26.917 22.971">
                                                <g id="Group_1145" data-name="Group 1145"
                                                    transform="translate(10.415 17.021)">
                                                    <g id="Group_1143" data-name="Group 1143"
                                                        transform="translate(4.471)">
                                                        <rect id="Rectangle_107" data-name="Rectangle 107"
                                                            width="1.615" height="4.874" fill="#fff" />
                                                    </g>
                                                    <g id="Group_1144" data-name="Group 1144">
                                                        <rect id="Rectangle_108" data-name="Rectangle 108"
                                                            width="1.615" height="4.874" fill="#fff" />
                                                    </g>
                                                </g>
                                                <g id="Group_1148" data-name="Group 1148">
                                                    <g id="Group_1146" data-name="Group 1146">
                                                        <path id="Path_1267" data-name="Path 1267"
                                                            d="M611.2,809.175H587.423a1.573,1.573,0,0,1-1.571-1.571V792.648a1.573,1.573,0,0,1,1.571-1.571H611.2a1.574,1.574,0,0,1,1.571,1.571V807.6A1.573,1.573,0,0,1,611.2,809.175Zm-23.192-2.153h22.61V793.23h-22.61Z"
                                                            transform="translate(-585.852 -791.077)"
                                                            fill="#fff" />
                                                    </g>
                                                    <g id="Group_1147" data-name="Group 1147"
                                                        transform="translate(7.685 20.818)">
                                                        <path id="Path_1268" data-name="Path 1268"
                                                            d="M610.6,831.9H601.2a1.076,1.076,0,0,1-1.077-1.077h0a1.076,1.076,0,0,1,1.077-1.077H610.6a1.076,1.076,0,0,1,1.077,1.077h0A1.077,1.077,0,0,1,610.6,831.9Z"
                                                            transform="translate(-600.127 -829.748)"
                                                            fill="#fff" />
                                                    </g>
                                                </g>
                                            </svg>

                                        </div>
                                        <div class="align-self-center">
                                            <p>CAGE</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="26.67" height="26.67" viewBox="0 0 26.67 26.67">
                                                <path id="Path_70" data-name="Path 70"
                                                    d="M8,26.67a1.333,1.333,0,0,1-1.333-1.333v-4H5.334A5.339,5.339,0,0,1,0,16V5.334A5.339,5.339,0,0,1,5.334,0h16A5.339,5.339,0,0,1,26.67,5.334V16a5.339,5.339,0,0,1-5.334,5.334H17.69L8.664,26.494A1.337,1.337,0,0,1,8,26.67Zm-2.667-24A2.67,2.67,0,0,0,2.667,5.334V16a2.67,2.67,0,0,0,2.667,2.667H8A1.333,1.333,0,0,1,9.334,20v3.036l7.34-4.194a1.324,1.324,0,0,1,.661-.176h4A2.671,2.671,0,0,0,24,16V5.334a2.671,2.671,0,0,0-2.667-2.667Z"
                                                    fill="#fff" />
                                                <circle id="Ellipse_7" data-name="Ellipse 7" cx="1.333"
                                                    cy="1.333" r="1.333" transform="translate(8.001 9.334)"
                                                    fill="#fff" />
                                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="1.333"
                                                    cy="1.333" r="1.333" transform="translate(12.001 9.334)"
                                                    fill="#fff" />
                                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="1.333"
                                                    cy="1.333" r="1.333" transform="translate(16.002 9.334)"
                                                    fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>MBE</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="Owner_Information" data-name="Owner Information"
                                                xmlns="http://www.w3.org/2000/svg" width="26.555"
                                                height="26.547" viewBox="0 0 26.555 26.547">
                                                <g id="icon_1_">
                                                    <path id="Path_90" data-name="Path 90"
                                                        d="M7.967,26.547A1.327,1.327,0,0,1,6.639,25.22V21.238H5.312A5.315,5.315,0,0,1,0,15.928V5.309A5.315,5.315,0,0,1,5.311,0H21.244a5.315,5.315,0,0,1,5.311,5.309V15.928a5.316,5.316,0,0,1-5.311,5.309h-3.63L8.625,26.372A1.322,1.322,0,0,1,7.967,26.547ZM5.311,2.655A2.657,2.657,0,0,0,2.656,5.309V15.928a2.659,2.659,0,0,0,2.656,2.655H7.968A1.327,1.327,0,0,1,9.3,19.91v3.022L16.6,18.758a1.313,1.313,0,0,1,.657-.175h3.983A2.659,2.659,0,0,0,23.9,15.928V5.309a2.659,2.659,0,0,0-2.656-2.655Z"
                                                        fill="#fff" />
                                                </g>
                                                <g id="Group_110" data-name="Group 110"
                                                    transform="translate(9.503 5.294)">
                                                    <path id="Path_91" data-name="Path 91"
                                                        d="M10.358,13.348h0a1.2,1.2,0,0,1-1.2-1.195v-.068a4.5,4.5,0,0,1,1.86-3.648,1.145,1.145,0,0,0,.433-1.246,1.1,1.1,0,0,0-.773-.771,1.143,1.143,0,0,0-1.019.194,1.129,1.129,0,0,0-.293.337,1.159,1.159,0,0,1-1.014.563h0A1.2,1.2,0,0,1,7.337,5.69a3.53,3.53,0,1,1,5.082,4.688,2.106,2.106,0,0,0-.865,1.708v.068A1.2,1.2,0,0,1,10.358,13.348Z"
                                                        transform="translate(-7.159 -3.988)" fill="#fff" />
                                                </g>
                                                <circle id="Ellipse_11" data-name="Ellipse 11" cx="1.268"
                                                    cy="1.268" r="1.268"
                                                    transform="translate(11.434 15.245)" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>Owner Information</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col mb-5">
                                <a href="business-essential.html" class="d-block">
                                    <div class="services-box d-flex">
                                        <div class="polygon_svg_icon">
                                            <svg id="icon_1_" xmlns="http://www.w3.org/2000/svg"
                                                width="28.098" height="30.581" viewBox="0 0 28.098 30.581">
                                                <path id="Path_78" data-name="Path 78"
                                                    d="M24.2,14.724H21.931v-3.4c0-5-3.558-9.061-7.928-9.061S6.074,6.33,6.074,11.326v3.4H3.809v-3.4C3.809,5.081,8.381,0,14,0S24.2,5.081,24.2,11.326Z"
                                                    transform="translate(0.505)" fill="#fff" />
                                                <path id="Path_79" data-name="Path 79"
                                                    d="M4.983,21.167a4.983,4.983,0,1,1,0-9.967c1.682,0,2.727,1.91,2.727,4.983S6.667,21.167,4.983,21.167Zm-.1-7.7a2.718,2.718,0,0,0,0,5.432,5.007,5.007,0,0,0,.561-2.716A4.985,4.985,0,0,0,4.885,13.467Z"
                                                    transform="translate(0 1.485)" fill="#fff" />
                                                <path id="Path_80" data-name="Path 80"
                                                    d="M20.727,21.167c-1.682,0-2.726-1.908-2.726-4.983a9.1,9.1,0,0,1,.468-3.039c.623-1.692,1.682-1.945,2.258-1.945a4.983,4.983,0,1,1,0,9.967Zm.143-2.226h0Zm-.043-5.474a5.011,5.011,0,0,0-.561,2.716,5.007,5.007,0,0,0,.561,2.716,2.718,2.718,0,0,0,0-5.432Z"
                                                    transform="translate(2.387 1.485)" fill="#fff" />
                                                <path id="Path_81" data-name="Path 81"
                                                    d="M15.942,27.061a1.133,1.133,0,1,1,0-2.265,4.535,4.535,0,0,0,4.53-4.53V19.133a1.133,1.133,0,0,1,2.265,0v1.133A6.8,6.8,0,0,1,15.942,27.061Z"
                                                    transform="translate(1.964 2.387)" fill="#fff" />
                                                <circle id="Ellipse_10" data-name="Ellipse 10" cx="2.265"
                                                    cy="2.265" r="2.265" transform="translate(14.508 26.05)"
                                                    fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="align-self-center">
                                            <p>AOI</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="col-xxl-3 col-xl-4 col-lg-12 mt-4 mt-xl-0">
            <div class="progress-container bg-white rounded-30 mb-3 pb-5">
                <div class="position-relative pb-4">
                    <img src="{{ asset('images/bg_dashboard_img.png') }}" alt="" width="100%">
                    <img src="{{ asset('images/dashboard-avatar.png') }}" alt="" class="dashboard_avatar">
                </div>
                <div class="text-center pt-5 mt-5 mt-sm-4">
                    <h3 class="name">Tony Nguyen</h3>
                    <h4 class="email"><a href="emailto:tony@example.com">tony@example.com</a></h4>
                    <h2 class="slogan_title">You are your way to Green!</h2>
                </div>
            </div>
            <div class="progress-container bg-white rounded-30 text-center p-sm-5 p-3 mt-5">
                <img src="{{ asset('images/logo_gradient.png') }}" alt="">
                <h2 class="title_dashboard text-black mb-3 mt-4">Apparel Impressions ltd.</h2>
                <h3 class="text-grey fs-15">Update Your index information in Setting</h3>
                <hr>
                <h3><a href="mailto:businessemail@example.com"
                        class="text-grey fs-15">businessemail@example.com</a></h3>
                <h4><a href="callto:215 156 4894" class="text-grey fs-15">215 156 4894</a></h4>
                <h5 class="text-grey fs-15">854 River Side Road, Block H, Central Washington United States
                    of America</h5>
                <hr>
                <ul class="d-sm-flex justify-content-center">
                    <li class="d-flex me-3 ancher_txt mb-3 mb-sm-0"> <span
                            class="rounded_svg black align-self-center me-2"></span> Marketing</li>
                    <li class="d-flex me-3 ancher_txt mb-3 mb-sm-0"> <span
                            class="rounded_svg yellow align-self-center me-2"></span> Finance</li>
                    <li class="d-flex ancher_txt "> <span
                            class="rounded_svg black align-self-center me-2"></span> Influence</li>
                </ul>
                <p class="ancher_txt mt-4">
                    About: Lorem ipsum dolor sit amet, consetetur ipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                    et
                </p>
            </div>
        </div> --}}
    </div>
</div>
@endsection
@section('bottom_script')

@endsection
