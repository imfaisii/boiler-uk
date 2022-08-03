<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../../images/favicon.ico">
    <style type="text/css">
        /* FONTS */
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">

    <!-- HIDDEN PREHEADER TEXT -->
    <div
        style="display: none; font-size: 1px; color: #ffffff; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        You have received a new quote. Take a look ?
    </div>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
            <td align="center">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 10px 10px;">
                            <a href="#" target="_blank" style="text-decoration: none;">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="{{ config('app.name') }}" />
                            </a>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- HERO -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td bgcolor="#ffffff" align="center" valign="top"
                            style="padding: 40px 20px 10px 20px; border-radius: 4px 4px 0px 0px;">
                            <h1
                                style="color: #000000; font-size: 29px; font-weight: 400; margin: 0; font-family: 'Poppins', sans-serif;">
                                New Quote Request
                            </h1>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- COPY BLOCK -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <!-- COPY -->
                    <tr>
                        <td bgcolor="#ffffff" align="center"
                            style="padding: 10px 30px 20px 30px; color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                            <div>
                                <div>
                                    <p>Name : <b>{{ $details['name'] }}</b></p>
                                    <p>Email : <b>{{ $details['email'] }}</b></p>
                                </div>
                                <div>
                                    <p>Contact Number : <b>{{ $details['phone_number'] }}</b></p>
                                    <p>Postal Code : <b>{{ $details['postal_code'] }}</b></p>
                                </div>
                                <div>
                                    <p>Own Home ? <b>{{ $details['own_home'] }}</b></p>
                                    <p>Boiler Fitted Before 2005 ? <b>{{ $details['before_2005'] }}</b></p>
                                </div>
                                <div>
                                    <p>Have radiators ? <b>{{ $details['radiators'] }}</b></p>
                                    <p>Heated type : <b>{{ $details['heated_type'] }}</b></p>
                                </div>
                                <div>
                                    <p>Number of bedrooms : <b>{{ $details['number_of_bedrooms'] }}</b></p>
                                    <p>Property Type : <b>{{ $details['property_type'] }}</b></p>
                                </div>
                                <p>Required insulation(s)</p>
                                <ul>
                                    @forelse ($details['insulation'] as $insulation)
                                        <li style="color: #000000;">{{ $insulation }}</li>
                                    @empty
                                        <li style="color: #000000;">No insulation mentioned.</li>
                                    @endforelse
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- BULLETPROOF BUTTON -->
                    <tr>
                        <td bgcolor="#ffffff" align="left">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td bgcolor="#ffffff" align="center" style="padding: 10px 30px 30px 30px;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 3px;" bgcolor="#4d7cff"><a
                                                        href="{{ config('app.url') }}" target="_blank"
                                                        style="font-size: 18px; font-family: 'Poppins', sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 5px; border: 1px solid #4d7cff; display: inline-block;">Go
                                                        to Home
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- COPY CALLOUT -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <!-- HEADLINE -->
                    <tr>
                        <td bgcolor="#fec801" align="left"
                            style="padding: 40px 30px 20px 30px; color: #ffffff; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                            <h2 style="font-size: 20px; font-weight: 400; margin: 0;">New Quote Received.
                            </h2>
                        </td>
                    </tr>
                    <!-- COPY -->
                    <tr>
                        <td bgcolor="#fec801" align="left"
                            style="padding: 0px 30px 20px 30px; color: #ffffff; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                            <p style="margin: 0;">You are receiving this email
                                because someone must submitted a new quote on your website {{ config('app.url') }}
                            </p>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- FOOTER -->
        <tr>
            <td align="center" style="padding: 10px 10px 50px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <!-- NAVIGATION -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 30px 30px 30px 30px; color: #b4b7bc; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                            <p style="margin: 0;">
                                <a href="{{ config('app.url') }}" target="_blank"
                                    style="color: #b4b7bc; font-weight: 500;">Home</a>
                            </p>
                        </td>
                    </tr>
                    <!-- PERMISSION REMINDER -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 0px 30px 30px 30px; color: #b4b7bc; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                            <p style="margin: 0;">You received this email because you are admin at
                                {{ config('app.name') }}.
                                If it looks weird, <a href="#" target="_blank"
                                    style="color: #b4b7bc; font-weight: 500;">view it in your browser</a>.</p>
                        </td>
                    </tr>
                    <!-- UNSUBSCRIBE -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 0px 30px 30px 30px; color: #b4b7bc; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                            <p style="margin: 0;">If these emails get annoying, please feel free to <a href="#"
                                    target="_blank" style="color: #b4b7bc; font-weight: 500;">unsubscribe</a>.</p>
                        </td>
                    </tr>
                    <!-- ADDRESS -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 0px 30px 30px 30px; color: #b4b7bc; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                            <p style="margin: 0;">Admin - {{ config('app.name') }}</p>
                        </td>
                    </tr>
                    <!-- COPYRIGHT -->
                    <tr>
                        <td align="center"
                            style="padding: 30px 30px 30px 30px; color: #b4b7bc; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                            <p style="margin: 0;">Copyright ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> {{ config('app.name') }}. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
    </table>

</body>

</html>
