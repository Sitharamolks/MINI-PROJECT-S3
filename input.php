<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>inputpage</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Product Details</h2>
                    <?php
$items=array("FDA15", "DRC01", "FDN15", "FDX07", "NCD19", "FDP36", "FDO10", "FDP10", "FDH17", "FDU28", 
"FDY07", "FDA03", "FDX32", "FDS46", "FDF32", "FDP49", "NCB42", "DRI11", "FDU02", "FDN22", "FDW12", "NCB30", "FDC37", "FDR28", "NCD06", "FDV10", 
"DRJ59", "FDE51", "FDC14", "FDV38", "NCS17", "FDP33", "FDO23", "DRH01", "NCX29", "FDV20", "DRZ11", "FDX10", "FDB34", "FDK43", "FDA46", "FDC02", 
"FDL50", "FDM39", "NCP05", "FDV49", "FDL12", "FDS02", "NCL17", "FDM40", "FDR13", "FDA43", "NCP18", "FDK21", "NCX54", "DRK35", "FDY21", "FDI26", 
"FDM20", "FDV27", "FDF09", "FDY40", "FDY45", "FDC46", "FDH19", "FDZ03", "DRH37", "NCI17", "FDJ58", "FDH35", "FDG02", "NCZ18", "FDC29", "FDQ10", 
"FDN48", "FDL04", "FDV25", "FDD58", "FDN04", "FDV45", "NCL18", "FDR12", "FDG20", "FDZ55", "FDQ49", "FDN33", "FDN27", "FDW20", "DRG27", "DRI25", 
"FDA44", "NCR17", "FDU04", "FDF41", "FDB56", "FDT28", "FDD10", "FDW57", "DRB48", "FDP09", "FDH14", "FDA47", "FDG12", "DRE60", "DRK49", "FDD03", 
"FDS52", "FDW39", "FDX34", "FDV11", "FDD17", "FDZ16", "FDZ46", "DRA12", "FDY58", "NCF19", "DRJ13", "FDB14", "FDJ38", "FDW11", "FDL40", "DRI49", 
"DRG23", "NCP30", "FDY25", "NCH54", "NCR53", "NCO26", "FDB51", "FDX44", "NCN07", "NCC31", "NCO55", "NCC30", "FDI16", "FDP16", "FDB11", "NCB06", 
"FDA45", "DRJ25", "FDI04", "DRK12", "FDX20", "NCI18", "FDB36", "FDN13", "DRD24", "FDQ28", "FDM22", "FDR07", "DRF49", "FDW51", "DRL01", "FDP25", 
"NCM43", "FDK44", "FDM15", "FDS31", "FDI32", "FDR47", "FDB35", "NCU05", "DRY23", "FDO24", "FDV39", "NCO17", "FDU50", "FDT12", "FDK58", "FDO08", "NCW29", "FDE04", "NCB19", "FDV15", "FDL58", "FDA08", "FDT43", "NCX06", "FDT20", "FDB41", "NCN55", "FDE40", "FDX49", "NCM53", "FDE36", "FDN57", "FDI24", "FDI19", "FDF24", "FDG52", "DRF36", "FDS45", "FDX40", "DRC27", "NCD30", "NCZ54", "FDE10", "FDR44", "FDP28", "FDX15", "FDA39", "FDY24", "FDC60", "FDH28", "FDT25", "NCO07", "DRF27", "FDS49", "FDX25", "NCX42", "FDG33", "FDL56", "FDF14", "DRM47", "FDX21", "NCR38", "NCR18", "NCU41", "FDY56", "DRJ51", "FDU44", "FDL43", "FDF05", "DRF15", "FDL20", "FDV32", "FDJ34", "FDG08", "FDQ04", "FDW13", "FDY03", "FDS12", "FDJ55", "DRK01", "FDG28", "FDY38", "FDN01", "NCR54", "FDG29", "FDG24", "FDG59", "FDM28", "FDW04", "FDS26", "FDQ56", "FDK51", "FDL22", "FDY55", "FDZ10", "FDZ32", "NCF07", "DRE49", "FDJ08", "FDT39", "FDE08", "FDB57", "NCT54", "FDM25", "FDF20", "FDH27", "FDV60", "FDY59", "FDK36", "NCM31", "FDE33", "FDU36", "FDV13", "NCQ54", "DRP47", "FDB21", "FDR04", "FDX23", "FDX19", "FDD40", "FDA01", "FDS33", "FDM50", "FDB29", "FDF46", "FDA33", "FDC08", "FDB53", "FDY31", "DRQ35", "FDX36", "DRD13", "FDC52", "FDB45", "NCK19", "FDV51", "FDZ35", "NCW17", "FDV59", "DRH39", "FDN60", "FDU55", "FDN58", "FDC41", "FDO01", "NCO43", "FDQ07", "FDF28", "FDM01", "FDY49", "FDR24", "NCY18", "NCY30", "FDJ22", "DRI37", "FDL27", "NCO30", "NCB07", "FDP59", "FDR59", "FDT27", "DRI01", "FDU09", "FDH26", "FDN39", "FDH40", "FDJ56", "DRN47", "FDX60", "FDT22", "FDX26", "FDG45", "FDD44", "FDS15", "FDL51", "FDL32", "FDZ07", "NCW53", "NCA54", "FDX09", "FDO51", "FDW49", "FDB27", "FDF45", "FDV02", "FDY28", "FDX31", "FDR43", "FDP51", "FDL52", "FDC50", "FDT57", "FDP22", "FDY32", "FDW07", "NCF18", "FDG35", "FDY34", "NCE19", "NCK31", "NCJ29", "FDT59", "NCX41", "FDU45", "FDW24", "FDF22", "FDM60", "FDR02", "DRP35", "FDS48", "NCZ42", "FDZ38", "NCB55", "FDC15", "FDF11", "FDW35", "FDB44", "NCC06", "FDB17", "FDW43", "FDA27", "FDN32", "FDZ27", "FDW23", "FDU01", "FDF10", "DRH03", "FDW27", "DRI13", "NCR05", "FDI35", "FDX08", "NCJ18", "FDJ41", "FDU08", "FDS09", "DRH15", "NCV17", "NCO54", "FDE24", "FDH53", "FDZ13", "FDW28", "FDU46", "NCE43", "NCC42", "FDQ20", "FDA13", "FDZ15", "NCV42", "DRI51", "FDO28", "NCS54", "FDH16", "FDR52", "NCH06", "FDA36", "FDU56", "FDT09", "FDU25", "FDK41", "FDM24", "FDQ45", "DRK59", "FDR21", "FDT44", "FDX14", "FDH57", "NCT41", "FDO11", "NCP42", "FDN09", "FDP32", "FDV57", "FDR56", "FDA40", "NCG42", "NCK54", "FDE16", "FDB15", "FDC40", "FDE53", "FDK24", "FDW31", "NCM07", "DRN36", "FDQ37", "FDK28", "FDL48", "DRL23", "DRD37", "FDZ47", "NCJ54", "FDD08", "NCN18", "NCI29", "NCE06", "FDU52", "FDN16", "NCM55", "FDR49", "FDA16", "FDO19", "FDO04", "NCL19", "FDR60", "FDV37", "FDG53", "DRG01", "FDB38", "FDI27", "FDD29", "NCR41", "FDW44", "FDU21", "FDI14", "FDW50", "FDT31", "FDJ14", "NCQ43", "FDZ22", "FDU38", "FDS32", "DRH13", "DRF03", "FDJ20", "FDE22", "FDX22", "DRM11", "FDL25", "FDT08", "FDO22", "NCM41", "FDJ21", "FDC53", "FDQ09", "DRE25", "FDL08", "FDW03", "FDC17", "FDE34", "FDO44", "NCF31", "FDG14", "NCH30", "FDR36", "NCJ30", "FDR08", "NCQ50", "FDL46", "DRK37", "FDK48", "FDV58", "FDZ52", "NCF42", "FDQ48", "FDR58", "NCE07", "FDK14", "FDC11", "NCQ41", "FDX46", "FDC35", "FDH45", "FDX33", "DRJ35", "FDP13", "FDP24", "NCQ42", "FDU14", "FDT32", "FDK20", "FDU13", "FDE05", "FDE58", "FDZ01", "FDM08", "FDS58", "FDZ26", "FDY51", "FDL34", "DRG39", "NCG43", "FDT01", "DRF01", "FDF53", "FDR20", "FDD38", "FDH32", "NCJ42", "FDW22", "FDE32", "FDA34", "FDG38", "NCE31", "FDS19", "FDU11", "FDL02", "DRK23", "FDO27", "FDB16", "NCB18", "NCL53", "FDR16", "NCQ05", "FDF44", "FDK15", "FDS10", "FDU32", "FDG09", "FDE39", "NCH55", "FDC33", "NCV54", "NCQ02", "NCU17", "NCZ06", "DRH25", "NCI43", "NCQ53", "NCT18", "FDM14", "FDX57", "NCV05", "FDX39", "FDA23", "NCV06", "DRI39", "FDH21", "FDR26", "FDA14", "FDG21", "NCQ38", "FDN20", "NCN29", "FDI28", "FDZ28", "FDO52", "FDU10", "FDS28", "FDJ03", "FDQ51", "NCK06", "FDY09", "FDA10", "FDO34", "FDE38", "FDF40", "FDY02", "FDS03", "FDB59", "FDO15", "FDV56", "FDY26", "DRE13", "FDD50", "FDC04", "NCR29", "FDZ04", "FDU16", "FDV07", "FDW01", "FDC10", "DRC12", "DRK39", "DRB25", "FDK26", "FDM52", "NCO06", "FDK34", "FDO45", "FDF08", "FDH58", "FDE02", "FDR23", "FDY35", "FDG44", "FDQ23", "FDY22", "NCN41", "FDO36", "FDH20", "FDN12", "FDB09", "FDA09", "FDL24", "FDP03", "FDO13", "DRD49", "FDQ15", "NCP50", "FDN23", "FDS44", "NCI54", "FDA21", "FDI41", "FDE35", "DRJ24", "NCK17", "FDD36", "DRD60", "NCM19", "FDV12", "FDQ31", "FDK55", "DRG15", "FDV01", "FDT21", "FDT10", "FDN02", "FDJ40", "DRE27", "FDS27", "DRM59", "NCV30", "FDA51", "FDM46", "FDK02", "FDJ57", "FDJ45", "NCB31", "FDT50", "NCY41", "FDJ60", "FDS21", "FDQ08", "FDS47", "DRM48", "FDW46", "FDU40", "DRE12", "FDX35", "FDD51", "FDY27", "NCN06", "FDR57", "FDR19", "FDJ33", "FDA52", "FDZ08", "FDR27", "NCK42", "FDZ12", "NCI31", "FDX16", "NCA05", "DRG51", "NCR30", "FDM56", "DRM37", "FDN56", "FDO49", "FDC09", "NCZ41", "FDP19", "FDQ24", "DRL11", "FDN52", "FDF21", "FDS51", "FDE45", "FDX50", "NCN14", "FDQ21", "FDL38", "DRL37", "FDZ39", "FDH10", "FDS35", "FDN21", "NCO18", "FDD05", "FDX59", "FDZ23", "FDX27", "FDR14", "FDZ56", "NCL55", "FDD59", "DRF23", "FDT49", "FDH22", "FDT34", "FDB39", "FDQ22", "NCN43", "FDG57", "FDU22", "NCC43", "FDP01", "FDF52", "FDZ33", "FDP48", "FDW56", "FDC26", "FDF34", "FDD04", "NCJ31", "FDO57", "FDM36", "NCY05", "DRK11", "NCL30", "DRJ39", "NCP06", "FDZ44", "FDV46", "DRG03", "FDU37", "FDI57", "FDM45", "FDB26", "FDZ25", "NCN26", "FDO38", "FDG31", "FDI45", "FDE17", "NCG06", "FDQ57", "NCP29", "FDM02", "FDR46", "FDE50", "FDS16", "FDU15", "FDO09", "FDB40", "DRN11", "FDF04", "FDE41", "FDW08", "NCD54", "FDN34", "FDL39", "FDH33", "DRH23", "FDD21", "FDK60", "FDY12", "FDP11", "FDC21", "NCF54", "FDV43", "DRC36", "NCW42", "FDL13", "FDV22", "NCB43", "FDQ46", "FDC44", "FDB22", "FDV23", "FDK10", "FDL33", "FDD20", "NCM54", "FDW48", "NCM06", "FDT46", "FDT38", "FDO40", "FDP12", "FDI44", "FDG16", "FDY11", "FDY60", "NCM05", "FDA49", "FDY52", "FDJ02", "FDW40", "FDY08", "FDM21", "NCM42", "NCD07", "FDD09", "DRH59", "DRA24", "FDY36", "FDG34", "FDK22", "FDO33", "FDD46", "FDU34", "FDA26", "FDP38", "FDA50", "FDY10", "FDT19", "FDA28", "FDB05", "FDK45", "FDR48", "FDY15", "FDM51", "FDW09", "FDV44", "NCP43", "FDL26", "DRM35", "DRD15", "FDV04", "FDG46", "NCN05", "FDO58", "DRH49", "NCZ05", "NCP54", "FDF57", "FDA02", "DRJ37", "NCP55", "FDW45", "FDK38", "NCZ30", "FDK08", "NCG19", "FDQ01", "FDL44", "DRM23", "NCE18", "DRZ24", "FDT48", "DRG11", "FDP60", "FDC32", "NCH18", "DRE37", "DRC13", "FDG47", "NCT05", "FDN50", "FDU60", "FDX02", "NCO41", "FDQ59", "NCZ53", "FDD34", "FDY43", "FDN44", "FDD32", "FDA56", "FDT13", "NCY29", "NCA42", "FDG26", "FDH24", "FDT52", "FDT04", "NCL54", "FDQ32", "FDE29", "FDB37", "FDN46", "FDV28", "FDW37", "FDV40", "FDZ57", "FDY46", "FDX45", "FDB33", "FDT58", "NCL31", "FDJ44", "FDS50", "FDO50", "FDU20", "DRK13", "FDI20", "FDG17", "NCK29", "FDM32", "FDC51", "FDF16", "FDI46", "FDZ21", "FDR32", "DRF25", "FDH05", "FDD52", "FDR55", "FDP04", "FDQ14", "DRN59", "NCR06", "FDB58", "NCV41", "FDW19", "FDO56", "FDN10", "FDY20", "FDV34", "NCX18", "NCZ17", "FDD57", "FDZ48", "FDZ31", "FDA04", "FDL21", "DRG49", "FDR51", "FDC39", "FDP45", "FDC56", "FDE59", "FDB04", "NCK05", "FDR03", "FDQ03", "FDC59", "DRB13", "NCE54", "FDP23", "NCL29", "FDM57", "FDZ36", "FDO46", "FDD16", "FDZ20", "FDY44", "FDW38", "FDY33", "DRH51", "FDI50", "FDB60", "FDA20", "NCX05", "DRF37", "FDJ26", "FDZ58", "FDZ50", "NCG18", "FDH50", "DRO35", "FDP52", "FDC05", "NCA41", "FDX56", "FDS01", "FDW34", "NCP02", "FDZ49", "NCJ17", "FDI53", "FDW02", "FDO48", "FDF56", "FDL57", "FDV52", "NCS41", "FDF12", "FDM13", "FDW55", "NCT29", "NCS42", "FDD47", "DRE03", "NCM18", "FDE20", "FDI33", "NCT06", "FDK52", "FDJ36", "NCK18", "FDB08", "FDX43", "FDU58", "FDL09", "FDR37", "FDG56", "NCC55", "FDA25", "FDV33", "FDX47", "FDB02", "FDI56", "DRJ49", "FDP26", "FDO32", "FDR34", "FDU59", "FDN31", "FDT55", "FDC03", "FDL14", "FDP39", "FDT11", "FDU48", "FDT45", "FDE56", "FDZ34", "FDV24", "FDQ39", "FDE11", "NCU54", "FDO60", "NCS06", "FDQ55", "NCO02", "FDB12", "FDT40", "NCO05", "FDM04", "FDH08", "NCQ06", "FDZ40", "NCM17", "FDU03", "NCX30", "FDV08", "DRK47", "DRI47", "FDR35", "FDK03", "FDZ59", "FDL03", "DRC25", "NCG07", "FDL45", "FDC45", "FDI40", "FDQ11", "FDQ52", "FDJ27", "FDT26", "NCH07", "FDP44", "FDI48", "NCF06", "NCL05", "FDT24", "FDS11", "FDC28", "DRE15", "NCI42", "FDX37", "FDM09", "NCW54", "FDF47", "DRD01", "FDN25", "FDW36", "FDP20", "FDR45", "FDZ45", "FDB23", "NCM26", "FDK40", "NCL42", "FDY04", "NCG30", "NCH29", "NCM29", "FDD53", "NCP41", "FDJ28", "FDH44", "NCY54", "DRA59", "FDS55", "NCN19", "FDH09", "FDS25", "NCI30", "FDM33", "NCA53", "FDS56", "FDT07", "FDJ10", "FDA38", "FDW32", "NCW18", "FDQ44", "FDQ34", "FDN08", "FDK57", "DRG48", "FDH52", "NCH43", "FDD35", "FDR01", "FDS23", "FDJ53", "FDA32", "FDX01", "FDA48", "FDI09", "DRF13", "FDK25", "FDC20", "FDQ19", "FDV50", "DRG37", "FDS08", "FDG22", "DRJ47", "FDZ43", "FDJ50", "FDV35", "DRL35", "FDS24", "FDS13", "FDW26", "FDQ12", "FDL36", "DRJ11", "NCT17", "DRH36", "NCA17", "FDG41", "NCS38", "FDQ16", "FDS40", "FDV31", "NCD42", "FDW21", "DRF60", "FDQ36", "FDP34", "FDI02", "FDG50", "FDV48", "FDH02", "NCD43", "FDE46", "NCO42", "FDR40", "DRE48", "FDV16", "FDY19", "FDD41", "NCK07", "FDZ60", "FDW47", "FDX58", "FDS04", "FDK16", "NCU42", "FDS37", "FDO25", "FDS57", "FDI52", "FDG40", "FDU49", "NCM30", "DRO47", "NCY06", "NCL41", "FDM58", "FDI07", "DRL47", "FDQ25", "FDE26", "FDD56", "FDQ13", "DRD25", "FDT16", "NCB54", "FDA31", "FDM12", "FDY47", "FDT03", "FDB49", "FDE47", "FDU23", "FDV09", "NCA30", "FDH41", "FDS43", "FDP37", "FDJ09", "FDC57", "DRD27", "FDI12", "FDQ33", "FDQ27", "FDH34", "FDB20", "DRL60", "DRJ23", "FDQ26", "NCA06", "FDJ07", "FDP56", "FDF26", "FDA11", "DRI23", "NCJ05", "FDI21", "FDH12", "FDD02", "FDL28", "FDR10", "FDR15", "FDQ40", "FDS34", "FDT56", "FDU24", "FDX11", "FDF35", "FDD22", "FDT60", "FDF17", "NCP53", "FDF29", "FDI10", "FDR09", "FDO03", "FDD26", "FDO39", "FDX51", "FDC38", "FDP07", "FDK27", "FDP31", "FDM10", "FDD11", "FDN45", "FDJ04", "NCT42", "FDD45", "FDK56", "FDX03", "NCU18", "FDJ48", "FDV21", "FDK09", "NCN42", "FDL16", "FDM34", "FDG60", "DRD12", "FDJ16", "FDI22", "NCC07", "FDM16", "FDT36", "FDH38", "FDC16", "FDT33", "FDU31", "DRJ01", "NCF43", "NCS53", "DRB24", "FDE23", "FDW60", "NCQ18", "NCE30", "FDW25", "NCY17", "NCS18", "FDB32", "FDG10", "FDF38", "FDW59", "FDY57", "FDY16", "FDA22", "FDV03", "FDP27", "FDZ37", "FDL10", "FDE09", "FDF33", "FDR31", "NCQ29", "NCI55", "FDD14", "NCD18", "NCE55", "FDX48", "DRF48", "FDU51", "NCC19", "NCO29", "FDX55", "FDZ19", "NCV53", "FDA35", "FDX24", "NCS05", "FDK04", "FDI58", "FDG58", "FDI60", "FDW52", "FDN38", "FDU39", "FDR25", "FDM44", "FDM27", "NCA29", "NCJ43", "FDX28", "FDW15", "FDO20", "NCR50", "FDN28", "FDY13", "FDA57", "FDB52", "FDS07", "FDO31", "FDP57", "FDO21", "FDW58", "NCL07", "FDU12", "FDV47", "FDU57", "FDF02", "DRG13", "NCN53", "FDI15", "NCN17", "FDN24", "DRH11", "FDJ15", "DRF51", "FDO37", "FDW10", "DRN37", "FDA37", "FDU35", "FDS59", "FDL15", "FDB28", "FDY37", "FDP58", "FDF58", "FDB47", "FDV14", "FDC23", "FDU33", "DRO59", "FDD48", "NCK30", "FDW33", "FDT37", "FDP46", "NCC18", "FDU07", "FDE21", "FDX38", "FDH48", "FDI38", "NCX53", "NCN30", "FDK33", "FDU26", "FDR39", "NCG55", "NCC54", "FDR33", "FDT14", "DRL49", "NCT30", "FDU27", "FDS20", "FDA07", "FDZ51", "NCN54", "FDR11", "NCR42", "FDX04", "FDN03", "FDM03", "FDT23", "FDB50", "NCG54", "FDJ52", "FDE28", "FDA58", "DRB01", "NCZ29", "FDF50", "FDT51", "FDP40", "FDF39", "FDQ58", "FDA55", "FDA19", "FDF59", "FDJ46", "FDC47", "FDC22", "FDD39", "DRE01", "NCS30", "FDH47", "FDP08", "NCY42", "FDE44", "FDJ12", "FDV36", "NCW41", "FDX12", "NCY53", "NCH42", "FDH46", "FDV26", "DRI03", "NCL06", "NCO14", "FDI08", "FDZ14", "FDS14", "NCK53", "FDH56", "NCQ30", "FDG32", "FDK32", "FDY48", "NCU06", "FDM38", "FDT15", "NCJ19", "NCI06", "FDV19", "FDQ47", "NCW06", "FDO16", "DRN35", "FDV55", "FDB03", "FDJ32", "FDC34", "FDG05", "NCJ06", "FDD23", "FDX52", "FDO12", "FDT35", "FDU19", "FDY50", "FDE57", "FDE14", "FDG04", "FDE52", "DRL59", "FDI34", "FDC58", "FDT02", "FDH04", "FDK46", "FDR22", "FDH60", "FDY39", "NCF30", "FDN49", "DRC24", "FDS60", "FDZ02", "FDW16", "NCQ17", "NCO53", "FDU47", "FDK50", "NCE42", "FDZ09", "NCU30", "DRG36", "NCD31", "NCV29", "NCP17", "DRM49", "FDY14", "DRI59", "FDY01", "FDT47", "NCS29", "NCT53", "FDP21", "FDD33", "DRC49", "FDB10", "FDS39", "NCU29", "NCP14", "FDC48", "FDW14", "FDS36", "NCA18", "FDQ60", "FDI36", "FDI05", "FDS22", "FDN40", "NCV18", "FDP15", "NCD55", "DRG25", "FDN51", "FDB46", "NCX17", "FDH31", "FDX13", "NCU53", "FDD28", "FDU43", "NCF55", "NCW30", "NCW05");
//echo $item;?>

                </div>
                <div class="card-body">
                    <form action="result.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row m-b-55">
                            <div class="name">Item Identifier</div>
                            <div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <select name="item" id="item">
                                                <?php foreach ($items as $item) {?>
                                                  <option value="<?php echo $item;?>"><?php echo $item;?></option>
                                                <?php }?>
                                                </select>
                                                
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Item Weight</div>
                            <div class="value">
                                <div class="input-group">
                                     <input type="number" min="0" placeholder="Item_Weight" name="item_weight" id="psw" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Fat_Content </div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="fat_content" id="fat_content">
                                        <option value = "Low Fat">LOW FAT</option>
                                        <option value = "Regular">Regular</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Item_Visibility</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="number" min="0" placeholder="Item_Visibility" name="item_visibility" id="psw-repeat" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Item_Type</div>
                            <?php
                        $item_types=array('Dairy', 'Soft Drinks', 'Meat', 'Fruits and Vegetables',
                               'Household', 'Baking Goods', 'Snack Foods', 'Frozen Foods',
                               'Breakfast', 'Health and Hygiene', 'Hard Drinks', 'Canned',
                               'Breads', 'Starchy Foods', 'Others', 'Seafood');?>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="item_type" id="item">
                                            <?php foreach ($item_types as $item_type) {?>
                                              <option value="<?php echo $item_type;?>"><?php echo $item_type;?></option>
                                            <?php }?>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Item_MRP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="number" min="0" placeholder="Item_MRP" name="item_mrp" id="psw-repeat" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Outlet_Identifier</div>
                                <?php 
    $outlets=array('OUT049', 'OUT018', 'OUT010', 'OUT013', 'OUT027', 'OUT045','OUT017', 'OUT046', 'OUT035', 'OUT019')?>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="outlet" id="item">
                                                <?php foreach ($outlets as $outlet) {?>
                                                  <option value="<?php echo $outlet;?>"><?php echo $outlet;?></option>
                                                <?php }?>
                                                </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Outlet_Estd._Year</div>
                            <div class="value">
                                <div class="input-group">
                                     <input type="number" min="1970" max="2022" placeholder="Outlet_Establishment_Year" name="Outlet_Establishment_Year" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Outlet_Size</div>
                                <?php 
                                 $outlet_sizes=array('Medium','High', 'Small');?>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="outlet_size" id="item">
                                        <?php foreach ($outlet_sizes as $outlet_size) {?>
                                          <option value="<?php echo $outlet_size;?>"><?php echo $outlet_size;?></option>
                                        <?php }?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Outlet_loc_type</div>
                                <?php 
                                    $outlet_loc_types=array('Tier 1', 'Tier 3', 'Tier 2');?>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="outlet_loc" id="item">
                                    <?php foreach ($outlet_loc_types as $outlet_loc_type) {?>
                                      <option value="<?php echo $outlet_loc_type;?>"><?php echo $outlet_loc_type;?></option>
                                    <?php }?>
                                    </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Outlet type</div>
                                <?php 
    $outlet_types=array('Supermarket Type1', 'Supermarket Type2', 'Grocery Store','Supermarket Type3');?>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="outlet_type" id="item">
                                    <?php foreach ($outlet_types as $outlet_type) {?>
                                      <option value="<?php echo $outlet_type;?>"><?php echo $outlet_type;?></option>
                                    <?php }?>
                                    </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="Submit" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->