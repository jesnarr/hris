<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>008-HRA FORMS</title>
    <meta name="author" content="FG-LAPTOP-081" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">


        .s1 {
            color: #FFF;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
        }

        .s2 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s3 {
            color: #FFF;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s4 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s5 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s6 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s7 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s8 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        p {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
            margin: 0pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }

    </style>
</head>

<body class="main">
    {{-- <table style="border-collapse:collapse;margin-left:5.5pt" cellspacing="0">
        <tr style="height:34pt">
            <td style="width:30% !important;border-top-style:solid;border-top-width:1pt;border-left-style:solid;
            border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                rowspan="2" >
                <img src="{{ public_path('img\image.png') }}">
               _________________________

            </td>
            <td style="border-top-style:solid;border-top-width:1pt;
           "
                colspan="3" bgcolor="#002060">
                <p class="s1"
                    style="padding-top: 6pt;text-indent: 0pt;text-align: center;">
                    MANPOWER REQUISITION FORM (MRF)</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:455pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="3">
                <p class="s2"
                    style="padding-left: 68pt;padding-right: 66pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    Human Resources</p>
            </td>
        </tr>
    </table> --}}
    <table style="border-collapse:collapse;margin-left:5.5pt" cellspacing="0">
        <tr style="height:34pt">
            <td style="width:2% !important;border-top-style:solid;border-top-width:1pt;border-left-style:solid;
            border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                rowspan="2" >
                <img src="{{ asset("img/admin-logo.png")}}" alt="logo" style="width:150">
            </td>

            <td style="width:475pt;border-top-style:solid;border-top-width:1pt;
            border-left-style:solid;border-left-width:1pt;border-right-style:solid;"
                colspan="3" bgcolor="#002060">
                <p class="s1"
                    style="padding-top: 6pt;padding-left: 50pt;padding-right: 50pt;text-indent: 0pt;text-align: center;">
                    MANPOWER REQUISITION FORM (MRF)</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:455pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="3">
                <p class="s2"
                    style="padding-left: 68pt;padding-right: 66pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    Human Resources</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:520pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="4">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:520pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="4" bgcolor="#1B4AFC">
                <p class="s3"
                    style="padding-left: 107pt;padding-right: 107pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    TO BE FILLED OUT BY REQUESTING DEPARTMENT</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 14pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    Requesting Department</p>
            </td>
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 36pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    Position Title</p>
            </td>
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 26pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    Number Required</p>
            </td>
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 37pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    Date Needed</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    IT Department
            </td>
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    {{ $mrf->position }}
            </td>
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                {{ $mrf->number }}
            </td>
            <td
                style="width:130pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                {{ date('F d, Y',strtotime($mrf->date_needed)) }}
            </td>
        </tr>
        <tr style="height:74pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4" style="padding-top: 1pt;padding-left: 78pt;text-indent: 0pt;text-align: left;">APPOINTMENT
                    STATUS</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Specify
                    number or personal per status</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    Project-based
                    <input type="text" value="{{ $mrf->project_based != 0 ? $mrf->project_based : '' }}" style="border-right:none;border-left:none;border-top:none;width:230px;font-size:10px;"></p>
                <p class="s4" style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">Probationary
                    <input type="text" value="{{ $mrf->probationary != 0 ? $mrf->probationary : '' }}" style="border-right:none;border-left:none;border-top:none;width:230px;font-size:10px;"></p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    Regular
                    <input type="text" value="{{ $mrf->regular != 0 ? $mrf->regular : '' }}" style="border-right:none;border-left:none;border-top:none;width:230px;font-size:10px;"></p>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 46pt;padding-right: 44pt;text-indent: 0pt;text-align: center;">
                    SPECIFICATIONS</p>

                <p class="s4"
                    style="padding-top: 3pt;padding-left: 4pt;padding-right: 91pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    Check appropriate box for attachment </p>
                <p class="s4" style="padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    [   @if($mrf->specs1 == 1)
                    <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ]
                    Justification</p>
                <p class="s4" style="padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    [
                            @if($mrf->specs1 == 2)
                            <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                            @endif
                    ]
                    Job Description</p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    [
                        @if($mrf->specs1 == 3)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ]
                    Organizational Chart</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 71pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    REASON FOR REQUISITION</p>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 46pt;padding-right: 44pt;text-indent: 0pt;line-height: 11pt;text-align: center;">
                    SPECIFICATIONS</p>
            </td>
        </tr>
        <tr style="height:179pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 2pt;padding-right: 15pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    Check appropriate box and attach necessary documents: </p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 20pt;padding-right: 143pt;text-indent: -18pt;line-height: 130%;text-align: left;">
                    [
                      @if($mrf->app_status == 1)
                      <span class="fas fa-check" style="position: absolute;margin-left:20px;"></span>
                      @endif
                    ] Replacement </p>
                <p class="s4"
                    style="padding-left: 20pt;padding-right: 7pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    Check reason for replacement and name to be replace: </p>
                    <p class="s4" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">
                    [
                        @if($mrf->app_status == 1 && $mrf->appointment_status == 1)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] Replacement</p>
                <p class="s4" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">
                    [
                        @if($mrf->app_status == 1 && $mrf->appointment_status == 2)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                 ] Termination</p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 20pt;padding-right: 154pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    [
                        @if($mrf->app_status == 1 && $mrf->appointment_status == 3)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] End of Contract </p>
                    <p class="s4"
                    style="padding-top: 3pt;padding-left: 20pt;padding-right: 154pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    [
                        @if($mrf->app_status == 1 && $mrf->appointment_status == 4)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] Promotion </p>

                <p class="s4" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">[ ] Transfer</p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 20pt;padding-right: 143pt;text-indent: -18pt;line-height: 130%;text-align: left;">
                    [
                        @if($mrf->app_status == 2)
                        <span class="fas fa-check" style="position: absolute;"></span>
                        @endif
                    ] Additional Manpower </p>
                    <p class="s4" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">[
                        @if($mrf->app_status == 2 && $mrf->appointment_status == 1)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] Budgeted</p>
                    <p class="s4" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">[
                        @if($mrf->app_status == 2 && $mrf->appointment_status == 2)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                     ] Unbudgeted</p>

                <p class="s4"
                style="padding-top: 3pt;padding-left: 20pt;padding-right: 143pt;text-indent: -18pt;line-height: 130%;text-align: left;">
                [
                    @if($mrf->app_status == 3)
                    <span class="fas fa-check" style="position: absolute;margin-left:20px;"></span>
                    @endif
                ] Position Upgrade</p>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 4pt;padding-right: 17pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    Please check appropriate box and indicate qualification </p>
                <p class="s4"
                    style="padding-left: 4pt;padding-right: 146pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    [
                        @if($mrf->specs2 == 1)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] Rank and File </p>
                <p class="s4"
                    style="padding-left: 4pt;padding-right: 146pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    [
                        @if($mrf->specs2 == 2)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] Supervisory / Officer </p>
                <p class="s4"
                    style="padding-left: 4pt;padding-right: 146pt;text-indent: 0pt;line-height: 130%;text-align: left;">
                    [
                        @if($mrf->specs2 == 3)
                        <span class="fas fa-check" style="position: absolute;margin-left:-5px;"></span>
                        @endif
                    ] Manager</p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s4" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">Qualifications:</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">
                   <label style="position: absolute;line-height:20px;">{{ $mrf->qualification }}</label>
                    ________________________________________________</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    ________________________________________________</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    ________________________________________________</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    ________________________________________________</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">
                    ________________________________________________</p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 4pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    ____________________________________</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    REQUESTED BY:</p>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    RECOMMENDED BY:</p>
            </td>
        </tr>
        <tr style="height:65pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s4"
                    style="padding-left: 46pt;padding-right: 46pt;text-indent: 0pt;line-height: 112%;text-align: center;">
                    <img src="{{ isset($mrf->signature->r_signature) ? $mrf->signature->r_signature  : '' }}" alt="" style="width:50px;position: absolute;margin-left:100px;margin-top:-10px;">
                    _______________________________________________ Hiring Manager</p>
                <p class="s5"
                    style="padding-left: 45pt;padding-right: 46pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Signature Over Printed Name</p>
                <p class="s4"
                    style="padding-top: 2pt;padding-left: 2pt;padding-right: 202pt;text-indent: 0pt;text-align: center;">
                    Date signed: </p>
                    <small style="position: absolute;margin-left:100px;margin-top:-20px;">
                        {{ isset($mrf->signature->r_date) ? date('F d, Y',strtotime($mrf->signature->r_date)) : '' }}</small>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s4"
                    style="padding-left: 46pt;padding-right: 46pt;text-indent: 0pt;line-height: 112%;text-align: center;">
                    <img src="{{ isset($mrf->signature->s_signature) ? $mrf->signature->s_signature  : '' }}" alt="" style="width:50px;position: absolute;margin-left:100px;margin-top:-10px;">
                    _______________________________________________ Successive Head</p>
                <p class="s5"
                    style="padding-left: 45pt;padding-right: 46pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Signature Over Printed Name</p>
                <p class="s4"
                    style="padding-top: 2pt;padding-left: 2pt;padding-right: 202pt;text-indent: 0pt;text-align: center;">
                    Date signed: <label style="position: absolute;margin-left:30px;">{{ isset($mrf->signature->s_date) ? date('F d, Y',strtotime($mrf->signature->s_date)) : '' }}</label></p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    CONCURRED BY:</p>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s4"
                    style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    APPROVED BY:</p>
            </td>
        </tr>
        <tr style="height:74pt">
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s4"
                    style="padding-top: 9pt;padding-left: 46pt;padding-right: 46pt;text-indent: 0pt;line-height: 112%;text-align: center;">
                    <img src="{{ isset($mrf->signature->hr_signature) ? $mrf->signature->hr_signature  : '' }}" alt="" style="width:50px;position: absolute;margin-left:100px;margin-top:-10px;">
                    _______________________________________________ HR Manager</p>
                <p class="s5"
                    style="padding-left: 45pt;padding-right: 46pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Signature Over Printed Name</p>
                <p class="s4" style="padding-top: 2pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">Date signed:
                </p>
            </td>
            <td style="width:260pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s6" style="padding-left: 14pt;text-indent: 0pt;text-align: left;">
                    ____________________  &nbsp;&nbsp;&nbsp;  ____________________
                </p>

                <p class="s7" style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">
                    Director of finance and administration &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Managing Director
                </p>
                <p class="s5" style="padding-top: 3pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    Signature Over Printed Name <span>
                        </span><span class="s8"> </span>Signature Over
                    Printed Name</p>
                <p class="s4" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">Date signed:</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:520pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="4" bgcolor="#1B4AFC">
                <p class="s3"
                    style="padding-left: 107pt;padding-right: 105pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    TO BE FILLED OUT BY HRD</p>
            </td>
        </tr>
        <tr style="height:149pt">
            <td style="width:520pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="4">
                <p class="s4" style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">REMARKS /
                    COMMENTS:</p>
                <p class="s4" style="padding-top: 3pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    ______________________________________________________________________________________________________
                </p>
                <p class="s4" style="padding-top: 3pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    ______________________________________________________________________________________________________
                </p>
                <p class="s4" style="padding-top: 3pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    ______________________________________________________________________________________________________
                </p>
                <p class="s4" style="padding-top: 3pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    ______________________________________________________________________________________________________
                </p>
                <p class="s4" style="padding-top: 3pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    ______________________________________
                </p>
                <p class="s4"
                    style="padding-top: 3pt;padding-left: 2pt;padding-right: 296pt;text-indent: 6pt;line-height: 130%;text-align: left;">
                 NAME/S OF HIRES STAFF:</p>
                <p class="s4" style="padding-left: 8pt;text-indent: 0pt;text-align: left;">
                    ______________________________________________________________________________________________________
                </p>
                <p class="s4"
                    style="padding-left: 2pt;padding-right: 45pt;text-indent: 6pt;line-height: 15pt;text-align: left;">
                    ______________________________________________________________________________________________________</p>
                 <p class="s4"
                    style="padding-top: 3pt;padding-left: 2pt;padding-right: 296pt;text-indent: 6pt;line-height: 130%;text-align: left;">
                    DATE SERVED:</p>

            </td>
        </tr>
    </table>
    <p style="padding-top: 1pt;padding-left: 7pt;text-indent: 0pt;text-align: left;">F-HRA-001-0 EFF:04/26/2021</p>

</body>

</html>
