<?php
#
# Copyright (c) 2006-2010 Joerg Linge (http://www.pnp4nagios.org)
# Plugin: check_iftraffic.pl (COUNTER)
#
$opt[1]  = "--vertical-label \"Tráfico\" -b 1024 --title \"Tráfico de datos para $hostname / $servicedesc\" ";
$def[1]  = "DEF:var1=$RRDFILE[3]:$DS[3]:AVERAGE " ;
$def[1] .= "DEF:var2=$RRDFILE[4]:$DS[4]:AVERAGE " ;
$def[1] .= "CDEF:in_bits=var1,8,* ";
$def[1] .= "CDEF:out_bits=var2,8,* ";
$def[1] .= "AREA:in_bits#009d00:\"in  \" " ;
$def[1] .= "GPRINT:in_bits:LAST:\"%7.2lf %Sb/s last\" " ;
$def[1] .= "GPRINT:in_bits:AVERAGE:\"%7.2lf %Sb/s avg\" " ;
$def[1] .= "GPRINT:in_bits:MAX:\"%7.2lf %Sb/s max\\n\" " ;
$def[1] .= "LINE1:out_bits#00006d:\"out \" " ;
$def[1] .= "GPRINT:out_bits:LAST:\"%7.2lf %Sb/s last\" " ;
$def[1] .= "GPRINT:out_bits:AVERAGE:\"%7.2lf %Sb/s avg\" " ;
$def[1] .= "GPRINT:out_bits:MAX:\"%7.2lf %Sb/s max\\n\" ";
?>
