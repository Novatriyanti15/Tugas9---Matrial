@php
use App\Models\Data_absen;
$absen = Data_absen::find($data->id);
$tanggal = date('d-m-Y');
@endphp
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <!--[if mso]>
    <xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml>
    <style>
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
  <![endif]-->
    <title>Absensi SMK Bina Cendekia Cirebon</title>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700"
        rel="stylesheet" media="screen">
    <style>
        .hover-underline:hover {
            text-decoration: underline !important;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes ping {

            75%,
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(-25%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }

            50% {
                transform: none;
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        @media (max-width: 600px) {
            .sm-leading-32 {
                line-height: 32px !important;
            }

            .sm-px-24 {
                padding-left: 24px !important;
                padding-right: 24px !important;
            }

            .sm-py-32 {
                padding-top: 32px !important;
                padding-bottom: 32px !important;
            }

            .sm-w-full {
                width: 100% !important;
            }
        }
    </style>
</head>

<body
    style="margin: 0; padding: 0; width: 100%; word-break: break-word; -webkit-font-smoothing: antialiased; --bg-opacity: 1; background-color: #eceff1; background-color: rgba(236, 239, 241, var(--bg-opacity));">
    <div role="article" aria-roledescription="email" aria-label="Welcome to PixInvent 👋" lang="en">
        <table style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; width: 100%;" width="100%"
            cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center"
                    style="--bg-opacity: 1; background-color: #eceff1; background-color: rgba(236, 239, 241, var(--bg-opacity)); font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;"
                    bgcolor="rgba(236, 239, 241, var(--bg-opacity))">
                    <table class="sm-w-full" style="font-family: 'Montserrat',Arial,sans-serif; width: 600px;"
                        width="600" cellpadding="0" cellspacing="0" role="presentation">
                        <tr>
                            <td class="sm-py-32 sm-px-24"
                                style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; padding: 48px; text-align: center;"
                                align="center">
                                <img src="{{asset('/images/logo/logosmk.png')}}" width="155" alt="SMK BC"
                                    style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle;">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                                <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%"
                                    cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <td class="sm-px-24"
                                            style="--bg-opacity: 1; background-color: #ffffff; background-color: rgba(255, 255, 255, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));"
                                            bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                                            <p style="font-weight: 600; font-size: 18px; margin-bottom: 0;">Hallo</p>
                                            <p
                                                style="font-weight: 700; font-size: 20px; margin-top: 0; --text-opacity: 1; color: #ff5850; color: rgba(255, 88, 80, var(--text-opacity));">
                                                {{$absen->users->name}}</p>
                                            <p class="sm-leading-32"
                                                style="font-weight: 600; font-size: 20px; margin: 0 0 24px; --text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity));">
                                                Selamat datang di sistem absensi email SMK Bina Cendekia Cirebon.
                                            </p>

                                            <p style="margin: 24px 0;">
                                                <span style="font-weight: 600;">Absen {{$absen->status}}</span>
                                                Terimakasih, hari ini kamu <b>{{$absen->deskripsi}}</b>, tanggal
                                                {{$tanggal}} jam {{$absen->jam_absen}}. {{$absen->keterangan}}.
                                            </p>
                                            <p style="font-weight: 500; font-size: 16px; margin-bottom: 0;">Bagaimana
                                                melakukan absen?</p>
                                            <ul style="margin-bottom: 24px;">
                                                <li>
                                                    Terdaftar sebagai guru/siswa di SMK Bina Cendekia. 🚀
                                                </li>
                                                <li>
                                                    Melakukan absen melalui wajah, QrCode, atau melalui petugas guru
                                                    piket. 🤟🏻
                                                </li>
                                                <li>
                                                    Pastikan absen sesuai dengan prosedur dan jadwal yang sudah di
                                                    tentukan.
                                                </li>
                                                <li>
                                                    Untuk pertanyaan lebih lanjut silahkan menghubungi petugas di
                                                    sekolah dan masuk ke <a
                                                        href="https://sidu.smkbinacendekiacirebon.sch.id">Sistem
                                                        Informasi Sekolah Terpadu SMK Bina Cendekia Cirebon</a>.
                                                </li>
                                            </ul>
                                            <table style="font-family: 'Montserrat',Arial,sans-serif;" cellpadding="0"
                                                cellspacing="0" role="presentation">
                                                <tr>
                                                    <td style="mso-padding-alt: 16px 24px; --bg-opacity: 1; background-color: #7367f0; background-color: rgba(115, 103, 240, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;"
                                                        bgcolor="rgba(115, 103, 240, var(--bg-opacity))">
                                                        <a href="https://sidu.smkbinacendekiacirebon.sch.id"
                                                            style="display: block; font-weight: 600; font-size: 14px; line-height: 100%; padding: 16px 24px; --text-opacity: 1; color: #ffffff; color: rgba(255, 255, 255, var(--text-opacity)); text-decoration: none;">Browse
                                                            SIDU SMK BC &rarr;</a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;"
                                                width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                    <td
                                                        style="font-family: 'Montserrat',Arial,sans-serif; padding-top: 32px; padding-bottom: 32px;">
                                                        <div
                                                            style="--bg-opacity: 1; background-color: #eceff1; background-color: rgba(236, 239, 241, var(--bg-opacity)); height: 1px; line-height: 1px;">
                                                            &zwnj;</div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <p style="margin: 0 0 16px;">
                                                Mempunyai pertanyaan, masukan, atau saran?
                                                <a href="mailto:smkbinacendekia@gmail.com" class="hover-underline"
                                                    style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;"><u>beri
                                                        tahu kami</u></a>.
                                            </p>
                                            <p style="margin: 0 0 16px;">Terimakasih, <br>Kepala Sekolah SMK Bina
                                                Cendekia Cirebon.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Montserrat',Arial,sans-serif; height: 20px;"
                                            height="20"></td>
                                    </tr>
                                    {{-- <tr>
                                        <td
                                            style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 12px; padding-left: 48px; padding-right: 48px; --text-opacity: 1; color: #eceff1; color: rgba(236, 239, 241, var(--text-opacity));">
                                            <p align="center" style="cursor: default; margin-bottom: 16px;">
                                                <a href="https://www.facebook.com/pixinvents"
                                                    style="--text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity)); text-decoration: none;"><img
                                                        src="images/facebook.png" width="17" alt="Facebook"
                                                        style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle; margin-right: 12px;"></a>
                                                &bull;
                                                <a href="https://twitter.com/pixinvents"
                                                    style="--text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity)); text-decoration: none;"><img
                                                        src="images/twitter.png" width="17" alt="Twitter"
                                                        style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle; margin-right: 12px;"></a>
                                                &bull;
                                                <a href="https://www.instagram.com/pixinvents"
                                                    style="--text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity)); text-decoration: none;"><img
                                                        src="images/instagram.png" width="17" alt="Instagram"
                                                        style="border: 0; max-width: 100%; line-height: 100%; vertical-align: middle; margin-right: 12px;"></a>
                                            </p>
                                            <p
                                                style="--text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity));">
                                                Use of our service and website is subject to our
                                                <a href="https://pixinvent.com/" class="hover-underline"
                                                    style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;">Terms
                                                    of Use</a> and
                                                <a href="https://pixinvent.com/" class="hover-underline"
                                                    style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;">Privacy
                                                    Policy</a>.
                                            </p>
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <td style="font-family: 'Montserrat',Arial,sans-serif; height: 16px;"
                                            height="16"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>