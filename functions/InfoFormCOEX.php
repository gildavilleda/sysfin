<?php


class InfoFormCOEX
{
    protected $infoCita;

    function InfoFormCita($data)
    {
        $this->infoCita = $data;
    }

    function RenderInfoCOEX2()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <html>
        <head>
            <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
            <style>
                <!--
                /* Font Definitions */
                @font-face {
                    font-family: "Cambria Math";
                    panose-1: 2 4 5 3 5 4 6 3 2 4;
                }

                @font-face {
                    font-family: Calibri;
                    panose-1: 2 15 5 2 2 2 4 3 2 4;
                }

                /* Style Definitions */
                p.MsoNormal, li.MsoNormal, div.MsoNormal {
                    margin-top: 0cm;
                    margin-right: 0cm;
                    margin-bottom: 8.0pt;
                    margin-left: 0cm;
                    line-height: 107%;
                    font-size: 11.0pt;
                    font-family: "Calibri", sans-serif;
                }

                p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing {
                    margin: 0cm;
                    margin-bottom: .0001pt;
                    font-size: 11.0pt;
                    font-family: "Calibri", sans-serif;
                }

                .MsoChpDefault {
                    font-family: "Calibri", sans-serif;
                }

                .MsoPapDefault {
                    margin-bottom: 8.0pt;
                    line-height: 107%;
                }

                @page WordSection1 {
                    size: 612.0pt 792.0pt;
                    margin: 36.0pt 36.0pt 36.0pt 36.0pt;
                }

                div.WordSection1 {
                    page: WordSection1;
                }

                -->
            </style>
        </head>
        <body lang=ES-GT>
        <div class=WordSection1>
            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td rowspan=4 style='width:21.9%;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="21%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><img height=68 id="Imagen 1" src="REPORTECOEX_image001.jpg"
                                             width=70></p>
                    </td>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>MINISTERIO DE SALUD PUBLICA Y
                                ASISTENCIA SOCIAL</b></p>
                    </td>
                    <td rowspan=4 style='width:19.52%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>C??DIGO 044</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>HOSPITAL NACIONAL ESPECIALIZADO DE
                                VILLA NUEVA</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>&nbsp;</b></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:58.58%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="58%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>HOJA DE DOCUMENTACION Y REGISTRO DE
                                CONSULTA EXTERNA</b></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>APELLIDOS:</span></p>
                    </td>
                    <td colspan=3 style='width:40.76%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="40%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrApellido']." ".$matriz2['CitStrApellido2']." ". $matriz2['CitStrApellidoCasada']; ?></p>
                    </td>
                    <td style='width:19.7%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>FECHA DE IMPRESI??N:</span></p>
                    </td>
                    <td style='width:19.9%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['FechaImpresion']; ?>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p align=center class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>NOMBRES:</span></p>
                    </td>
                    <td colspan=3 style='width:40.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="40%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrNombre']." ". $matriz2['CitStrNombre2']?></p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>REGISTRO CLINICO:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo str_replace("-", "", $matriz2['CitStrRegMedico']); ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>FECHA DE NACIMIENTO:</span></p>
                    </td>
                    <td style='width:11.78%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="11%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['FecNacimiento']; ?></p>
                    </td>
                    <td style='width:6.76%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="6%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>EDAD:</span></p>
                    </td>
                    <td style='width:22.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="22%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['EdadPaciente']; ?></p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>DPI/CUI:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <?php echo $matriz2['CitNumCUI']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:19.64%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:11.78%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="11%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:6.76%;border:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="6%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:22.22%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="22%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
                    </td>
                    <td style='width:19.7%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>HORA DE IMPRESI??N:</span></p>
                    </td>
                    <td style='width:19.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="19%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php date_default_timezone_set("America/Guatemala");
                            echo date('h:i:s A'); ?></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:15.26%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="15%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>REFERIDO:</span></p>
                    </td>
                    <?php
                    function marcarReferido($bool, $option)
                    {
                        if ($bool == $option) {
                            echo "X";
                        }
                    }

                    ?>

                    <td style='width:5.7%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="5%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>SI???? </span><?php marcarReferido($matriz2['CitStrReferido'], 'S'); ?></p>
                    </td>
                    <td style='width:9.64%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="9%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>NO???? </span><?php marcarReferido($matriz2['CitStrReferido'], 'N'); ?></p>
                    </td>
                    <td style='width:20.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>LUGAR DE REFERENCIA:</span></p>
                    </td>
                    <td style='width:49.26%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="49%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrLugRef']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:15.26%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="15%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>OBSERVACIONES:</span></p>
                    </td>
                    <td colspan=4 style='width:84.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="84%">
                        <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $matriz2['CitStrObservacion']; ?>&nbsp;</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <table border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td colspan=5 style='width:540.0pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=720>
                        <p class=MsoNoSpacing><b><span style='font-size:10.0pt'>CONTACTOS</span>:</b></p>
                    </td>
                </tr>
                <?php foreach ($matriz2['ArrayContactos'] as $row) { ?>
                    <tr>
                        <td style='width:53.55pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=71>
                            <p class=MsoNoSpacing><span style='font-size:10.0pt'>NOMBRE:</span></p>
                        </td>
                        <td style='width:215.8pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=288>
                            <p class=MsoNoSpacing><?php echo $row['CitStrContacto'] ?> </p>
                        </td>
                        <td style='width:106.3pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=142>
                            <p class=MsoNoSpacing><?php echo $row['CitNumTelefono'] ?></p>
                        </td>
                        <td style='width:99.25pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=132>
                            <p class=MsoNoSpacing><span style='font-size:10.0pt'>RELACI??N FAMILIAR:</span></p>
                        </td>
                        <td style='width:65.1pt;padding:0cm 5.4pt 0cm 5.4pt' valign=top width=87>
                            <p class=MsoNoSpacing><?php echo $row['CitStrParentesco'] ?></p>
                        </td>
                    </tr>
                <?php }//Fin de Foreach
                ?>
            </table>

            <p class=MsoNoSpacing>&nbsp;</p>

            <p align=center class=MsoNoSpacing style='text-align:center'><span
                        style='font-size:10.0pt'>SISTEMA DE CLASIFICACI??N DE PACIENTE: (Marcar con una
X la casilla que corresponde)</span></p>

            <table border=1 cellpadding=0 cellspacing=0 class=MsoTableGrid
                   style='width:100.0%;border-collapse:collapse;border:none'
                   width="100%">
                <tr>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 5</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 4</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 3</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 2</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NIVEL 1</span></p>
                    </td>
                    <td style='width:10.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="10%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 style='width:20.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>SIN URGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>URGENCIA MENOR</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>URGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>EMERGENCIA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>RIESGO VITAL</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 style='width:20.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>AZUL</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>VERDE</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>AMARILLO</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>NARANJA</span></p>
                    </td>
                    <td colspan=2 style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt' valign=top width="20%">
                        <p align=center class=MsoNoSpacing style='text-align:center'><span
                                    lang=ES-MX style='font-size:10.0pt'>ROJO</span></p>
                    </td>
                </tr>
            </table>

            <p align=center class=MsoNoSpacing style='text-align:center'><span lang=ES-MX>&nbsp;</span></p>
        </div>
        <center>
        <table cellspacing="0" border="0">
            <colgroup width="7"></colgroup>
            <colgroup span="7" width="65"></colgroup>
            <colgroup width="57"></colgroup>
            <colgroup width="74"></colgroup>
            <colgroup width="79"></colgroup>
            <colgroup width="83"></colgroup>
            <colgroup span="5" width="79"></colgroup>


            <tr>
                <td  height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  colspan=11 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">SE EVALUA PACIENTE EN CL??NICA DE CLASIFICACI??N Y SE REFIERE PARA SU CONTINUIDAD A LA ESPECIALIDAD:</font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">MC:</font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">HEA:</font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">IMPRESI??N CL??NICA:</font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">INDICACIONES M??DICAS:</font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="24" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=4 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=top bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=top bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=top bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=top bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=top bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=3 rowspan=2 align="left" valign=top bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>

            <tr>
                <td  height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  colspan=4 align="left" valign=top bgcolor="#FFFFFF"><font size=1 color="#000000">Vea secci??n posterior de Hoja</font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr	>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 rowspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 rowspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 rowspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 rowspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td colspan=4 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td  height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  colspan=4 align="center" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Firma y Sello de Admisi??n</font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  colspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Firma y Sello del M??dico </font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>

        </table>

        </center
        <!-- ************************************************************************** -->


        <table cellspacing="0" border="0">
            <style type="text/css">
                body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
                a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
                a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
                comment { display:none;  }
            </style>
            <colgroup span="5" width="65"></colgroup>
            <colgroup width="37"></colgroup>
            <colgroup width="42"></colgroup>
            <colgroup width="65"></colgroup>
            <colgroup width="73"></colgroup>
            <colgroup width="54"></colgroup>
            <colgroup width="66"></colgroup>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td  align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td colspan=2 rowspan=4 height="63" align="center" valign=middle bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=7 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">MINISTERIO DE SALUD P??BLICA Y ASISTENCIA SOCIAL</font></b></td>
                <td rowspan=4 align="center" valign=middle bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle bgcolor="#FFFFFF"><font color="#000000">C??DIGO  044</font></td>
            </tr>
            <tr>
                <td colspan=7 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA</font></b></td>
            </tr>
            <tr>
                <td colspan=7 rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">HOJA DE DOCUMENTACI??N Y REGISTRO DE CONSULTA EXTERNA</font></b></td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">Otros:</font></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td colspan=2 height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td colspan=2 height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;[$-F400]H:MM:SS AM/PM"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td colspan=2 height="11" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=1 color="#000000"><br></font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=1 color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=1 color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=1 color="#000000"><br></font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=1 color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=1 color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
            </tr>
            <tr>
                <td colspan=2 height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=9 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
            </tr>
            <tr>
                <td colspan=11 height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
            </tr>
            <tr>
                <td colspan=2 height="20" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=6 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
                <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><br></font></b></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td colspan=5 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Marque con una X conducta a seguir con Paciente:</font></b></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">Ingres?? a Servicios de Encamamiento</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">Caso resuelto en Clasificaci??n</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom><font color="#000000">Caso referido a otro Servicio de Salud</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom><font color="#000000">Caso referido a Especialista </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000" colspan=5 height="20" align="center" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Seleccione la Clinica de Especialidad si fue referido </font></td>
                <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">EMERGENCIA PEDIATRICA </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #000000" height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">EMERGENCIA DE ADULTOS</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CLINICA DE PEDIATR??A</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CLINICA DE NEUMOLOG??A </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CLINICA DE CIRUGIA PEDIATR??A</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE CIRUG??A RODILLA </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CLINICA DE ENDOCRINOLOG??A PEDIATRICA</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE UROLOG??A </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE NEFROLOG??A PEDIATRICA</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE NEUROCIRUG??A </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CLINICA DE NEUMOLOG??A PEDIATRICA</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE PSICOLOG??A </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE NEUROLOG??A PEDIATRICA</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CLINICA DE CIRUG??A</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE PSICOLOG??A PEDIATRICA </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE TRAUMATOLOG??A</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">OBSTETRICIA ALTO RIESGO </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE DERMATOLOG??A </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE GINECOLOG??A</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE NEUROLOGIA</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 height="40" align="left" valign=top bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE MEDICINA REPRODUCTIVA, INFERTELIDAD Y CLIMATERIO</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="left" valign=top bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE OTORRINOLARINGOLOGIA </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CARDIOLOGIA DE ADULTOS</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="left" valign=top bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE FISIATR??A</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NCIA DE ODONTOLOG??A </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE MEDICINA INTERNA</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=4 align="left" valign=top bgcolor="#FFFFFF"><font color="#000000">Otra Cl??nica (especifique):</font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">GASTROENTEROLOG??A ADULTOS</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">ENDOCRINOLOG??A ADULTOS</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 height="20" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CL??NICA DE NUTRICI??N </font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
                <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
            </tr>
        </table>
        <!-- ************************************************************************** -->
        </body>
        </html>
        <?php
    }//Fin RenderRepCoex2
}
?>

    
	

